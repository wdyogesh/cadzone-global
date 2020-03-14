@extends('home.layouts.app')

@section('title','News Details')

@section('content')

<section class="page_banner">
            <div class="container">
                <div class="col-xl-12 text-center">
                    <h2>News Details</h2>
                    <div class="breadcrumbs">
                    <a href="{{'/'}}">Home</a><i>|</i><span>News</span>
                    </div>
                </div>
            </div>
        </section>

        <section class="commonSection newsDetailsSection">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 col-md-12 col-lg-8">
                        <div class="newsDetailsArea">
                            <div class="newsThumb">
                                <div class="ntItem">
                                <img src="{{ '/public/news_images/'.$news->image }}" alt="{{ $news->title }}"/>
                                </div>
                            </div>
                            <div class="newsDetails">
                                <h2 class="ndTitle">{{ $news->title }}</h2>
                                <div class="nd_content">
                                    {!! $news->description !!}
                                </div>
                                <div class="clearfix mh1"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-12 col-lg-4">
                        <div class="sidebar_2">
                            <aside class="widget">
                                <h3 class="widget_title">News</h3>
                                <div class="allfeeds">
                                     @foreach ($newses as $nws)
                                        <div class="singlefeeds clearfix">
                                            <img class = "thumbnail" width="80px" height="60px" src="{{ '/public/news_images/'.$nws->image }}" alt="{{ $nws->title }}"/>
                                            <h6><a href="{{ route('news.details', $nws->title_slug) }}">{{  $nws->title }}</a></h6>
                                        <span><i class="fal fa-clock"></i> {{ $nws->created_at->diffForHumans() }} </span>
                                        </div>
                                     @endforeach
                                </div>
                            </aside>
                        </div>
                    </div>
                </div>
            </div>
        </section>

@endsection
