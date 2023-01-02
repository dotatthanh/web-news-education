@extends('layouts.master')

@section('title') Chi tiết tin tức @endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-9">
                <h1 class="title">{{ $news->title }}</h1>

                <div class="mt-3">
                    <time class="text-secondary">{{ date('d-m-Y', strtotime($news->created_at)) }}</time>
                    <p class="d-inline-block ml-3"><i class="fa fa-eye" aria-hidden="true"></i> {{ $news->view }}</p>
                </div>

                <div class="summary mt-3">
                    {!! $news->summary !!}
                </div>
                
                <div class="content mt-3">
                    {!! $news->content !!}
                </div>
            </div>

            <div class="col-3 mb-4">
                <div class="slider-client-list-detail">
                    <div>
                        <a target="_blank" href="https://monquang.com.vn/" class="c-img"><img src="{{ asset('images/9.png') }}" alt=""></a>
                    </div>
                    <div>
                        <a target="_blank" href="https://popeyes.vn/" class="c-img"><img src="{{ asset('images/10.png') }}" alt=""></a>
                    </div>
                    <div>
                        <a target="_blank" href="https://banhcanhghetrang.vn/" class="c-img"><img src="{{ asset('images/3.png') }}" alt=""></a>
                    </div>
                    <div>
                        <a target="_blank" href="https://www.kingsbbq.com/" class="c-img"><img src="{{ asset('images/4.png') }}" alt=""></a>
                    </div>
                    <div>
                        <a target="_blank" href="https://nhahangphuongnam.vn/" class="c-img"><img src="{{ asset('images/5.png') }}" alt=""></a>
                    </div>
                    <div>
                        <a target="_blank" href="https://www.abay.vn/" class="c-img"><img src="{{ asset('images/11.png') }}" alt=""></a>
                    </div>
                    <div>
                        <a target="_blank" href="https://www.booking.com/index.vi.html" class="c-img"><img src="{{ asset('images/12.png') }}" alt=""></a>
                    </div>
                    <div>
                        <a target="_blank" href="https://www.agoda.com/" class="c-img"><img src="{{ asset('images/6.png') }}" alt=""></a>
                    </div>
                    <div>
                        <a target="_blank" href="https://www.vietnambooking.com/du-lich" class="c-img"><img src="{{ asset('images/7.png') }}" alt=""></a>
                    </div>
                    <div>
                        <a target="_blank" href="https://bookvedulich.blogspot.com/" class="c-img"><img src="{{ asset('images/8.png') }}" alt=""></a>
                    </div>
                </div>

                @foreach ($random_news as $news)
                <div class="news-other mt-4">
                    <a href="{{ route('web.news-detail', $news->id) }}" class="c-img">
                        <img src="{{ asset($news->image) }}">
                    </a>

                    <h3 class="mt-2"><a href="{{ route('web.news-detail', $news->id) }}">{{ $news->title }}</a></h3>
                </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection

@push('js')
@endpush