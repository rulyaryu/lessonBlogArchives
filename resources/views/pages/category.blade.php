@extends('main')

@section('content')

    <!-- Content
    ================================================== -->
    {{--<div id="content-wrap">--}}

        {{--<div class="row">--}}

            {{--<div id="main" class="eight columns">--}}

                {{--<article class="entry">--}}

                    {{--<header class="entry-header">--}}

                        <h2 class="entry-title">
                            @foreach($category->news as $article)
                                {{ $article->title }}
                            @endforeach
                        </h2>

                        {{--<div class="entry-meta">--}}
                            {{--<ul>--}}
                                {{--<li>{{ $article->created_at->format('F j, Y') }}</li>--}}

                                {{--@if($article->categories()->count())--}}
                                    {{--<span class="meta-sep">&bull;</span>--}}
                                    {{--<li>--}}

                                        {{--@foreach($article->categories as $category)--}}
                                            {{--<a href="{{ route('category', ['slug' => $category->slug]) }}"--}}
                                               {{--rel="category tag">{{ $category->title }}</a>,--}}
                                        {{--@endforeach--}}

                                    {{--</li>--}}

                                {{--@endif--}}

                                {{--<span class="meta-sep">&bull;</span>--}}
                                {{--<li>{{ $article->author->name }}</li>--}}
                            {{--</ul>--}}
                        {{--</div>--}}

                    {{--</header>--}}

                    {{--<div class="entry-content">--}}
                        {{--<p class="lead">{{ $article->lead }}</p>--}}

                        {{--{{ $article->content }}--}}
                    {{--</div>--}}

                    {{--@if($article->tags()->count())--}}
                        {{--<p class="tags">--}}
                            {{--<span>Tagged in </span>:--}}
                            {{--@foreach($article->tags as $index => $tag)--}}
                                {{--<a href="{{ route('tag', ['slug' => $tag->slug]) }}">{{ $tag->title }}</a>--}}
                                {{--@if($index !== $article->tags()->count() - 1)--}}
                                    {{--,--}}
                                {{--@endif--}}
                            {{--@endforeach--}}
                        {{--</p>--}}
                    {{--@endif--}}

                    {{--<ul class="post-nav group">--}}
                        {{--<li class="prev"><a rel="prev" href="#"><strong>Previous Article</strong> Duis Sed Odio Sit Amet--}}
                                {{--Nibh Vulputate</a></li>--}}
                        {{--<li class="next"><a rel="next" href="#"><strong>Next Article</strong> Morbi Elit Consequat Ipsum</a>--}}
                        {{--</li>--}}
                    {{--</ul>--}}

                {{--</article>--}}

                {{--@include('pages.single.01_comments')--}}

            {{--</div> <!-- main End -->--}}

            {{--@include('pages.sidebar')--}}

        {{--</div> <!-- end row -->--}}

    {{--</div> <!-- end content-wrap -->--}}

@endsection