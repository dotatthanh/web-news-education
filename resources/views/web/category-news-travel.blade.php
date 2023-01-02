@extends('layouts.master')

@section('title') {{ __('messages.title') }} @endsection

@section('content')
    <div class="container video-production">
        <h1 class="title">{{ $category->name }}</h1>

        <div class="search">
            <h2 class="title mt-3">{{ __('messages.search') }}</h2>
            <form class="mt-3">
                <input type="text" name="search" name="search">
            </form>
        </div>
        <div class="row mt-5">
            @foreach ($data_news as $news)
            <div class="col-lg-3 col-md-9 col-sm-10 col-10 news mb-4">
                <a href="{{ route('web.news-detail', $news->id) }}" class="c-img">
                    <img src="{{ asset($news->image) }}">
                </a>

                <h3 class="mt-2"><a href="{{ route('web.news-detail', $news->id) }}">{{ $news->title }}</a></h3>
                
                <time>{{ date('d-m-Y', strtotime($news->created_at)) }}</time>
                <p class="float-right"><i class="fa fa-eye" aria-hidden="true"></i> {{ $news->view }}</p>
            </div>
            @endforeach

            <div class="m-auto">
                {{ $data_news->links() }}
            </div>
        </div>
    </div>
@endsection