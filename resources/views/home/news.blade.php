@extends('home.layouts.app')

@section('title','News')

@section('content')

        <section class="page_banner">
            <div class="container">
                <div class="col-xl-12 text-center">
                    <h2>News</h2>
                    <div class="breadcrumbs">
                    <a href="{{ url('/') }}">Home</a><i>|</i><span>News</span>
                    </div>
                </div>
            </div>
        </section>

        <section class="commonSection newslistpage">
            <div class="container">
                <div class="row">
                    @foreach ($news as $nws)
                        <div class="col-xl-4 col-md-6 col-lg-4 mb51">
                        <div class="singleBlog">
                            <div class="sbThumb">
                            <img src="{{ '/public/news_images/'.$nws->image }}" alt="{{ $nws->title }}"/>
                            </div>
                            <div class="sbDetails">
                                <h4>
                                    <a href="{{ route('news.details', $nws->title_slug) }}">{{  $nws->title }}</a></h3>
                                </h4>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
             <div class="row mt10">
                    <div class="col-lg-12">
                        <div class="ind_pagination text-center">
                            {{ $news->onEachSide(10)->links() }}
                        </div>
                    </div>
                </div>
        </section>
@endsection
