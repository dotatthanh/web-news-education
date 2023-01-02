@extends('layouts.master')

@section('title') Tin tức du lịch @endsection

@section('content')
    <div class="container client-list mb-5">
        <div class="row justify-content-center">
            <div class="col-lg-7 col-md-9 col-sm-10 col-10">
                <h1 class="title">{{ __('messages.page.ads') }}</h1>
            </div>
            <div class="col-12">
                <div class="slider-client-list">
                    <div>
                        <a href="{{ asset('images/1.png') }}" class="c-img" data-fancybox="fgh"><img src="{{ asset('images/1.png') }}" alt=""></a>
                    </div>
                    <div>
                        <a href="{{ asset('images/2.png') }}" class="c-img" data-fancybox="fgh"><img src="{{ asset('images/2.png') }}" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection