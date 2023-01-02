<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Customer;
use App\Models\News;
use App\Models\Product;
use App\Models\Info;
use App\Models\Contact;
use App\Http\Requests\StoreContactRequest;
use App\Http\Requests\Auth\LoginRequest;
use DB;
use Auth;
use App\Http\Requests\StoreCustomerRequest;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\ChangePasswordRequest;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\PostProductRequest;
use App\Mail\ResetPasswordCustomer;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use App;

class WebController extends Controller
{
    public function index()
    {
        return view('web.index');
    }

    public function categoryNews(Request $request, $id)
    {
        $category = Category::find($id);
        $data_news = News::where('category_id', $id);

        if (isset($request->search)) {
            if (session()->get('locale') == 'vi' || empty(session()->get('locale'))) {
                $data_news = $data_news->where('title_vi', 'like', '%'.$request->search.'%');
            }
            if (session()->get('locale') == 'en') {
                $data_news = $data_news->where('title_en', 'like', '%'.$request->search.'%');
            }
            if (session()->get('locale') == 'ja') {
                $data_news = $data_news->where('title_ja', 'like', '%'.$request->search.'%');
            }
        }
        $data_news = $data_news->paginate(12)->appends(['search' => $request->search]);

        $data = [
            'category' => $category,
            'data_news' => $data_news,
        ];

        return view('web.category-news-travel', $data);
    }

    // public function categoryNewsCulinary(Request $request, $id)
    // {
    //     $category = Category::find($id);
    //     $data_news = News::where('category_id', $id);

    //     if (isset($request->search)) {
    //         if (session()->get('locale') == 'vi' || empty(session()->get('locale'))) {
    //             $data_news = $data_news->where('title_vi', 'like', '%'.$request->search.'%');
    //         }
    //         if (session()->get('locale') == 'en') {
    //             $data_news = $data_news->where('title_en', 'like', '%'.$request->search.'%');
    //         }
    //         if (session()->get('locale') == 'ja') {
    //             $data_news = $data_news->where('title_ja', 'like', '%'.$request->search.'%');
    //         }
    //     }
    //     $data_news = $data_news->paginate(12)->appends(['search' => $request->search]);

    //     $data = [
    //         'category' => $category,
    //         'data_news' => $data_news,
    //     ];

    //     return view('web.category-news-culinary', $data);
    // }

    public function ads()
    {
        return view('web.ads');
    }

    public function newsDetail($id)
    {
    	$news = News::findOrFail($id);
    	$random_news = News::inRandomOrder()->limit(5)->get();
        $news->update(['view' => $news->view+1]);

    	$data = [
    		'news' => $news,
    		'random_news' => $random_news,
    	];

    	return view('web.news-detail', $data);
    }

    // public function change(Request $request)
    // {
    //     App::setLocale($request->lang);
    //     session()->put('locale', $request->lang);
  
    //     return redirect()->back();
    // }
}
