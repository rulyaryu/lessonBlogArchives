@extends('main')

@section('content')

    <div id="content-wrap">

        <div class="row">

            <div id="main" class="eight columns">

                <section class="page">

                    <h2>Archives.</h2>

                    <p class="lead">Lorem ipsum Nisi enim est proident est magna occaecat dolore proident eu ex sunt consectetur consectetur dolore enim nisi exercitation adipisicing magna culpa commodo deserunt ut do Ut occaecat. Lorem ipsum Veniam consequat quis.</p>

                    <div class="row archive-list">

                        <div class="twelve columns">

                            <h4>Last 10 Posts.</h4>

                            <ul>
                                @foreach($articles as $article)

                                    <li><a href="{{route('article', ['slug' => $article->slug])}}">{{$article->title}}</a></li>

                                @endforeach
                            </ul>

                        </div>

                        <div class="twelve columns">

                            <h4>Archives By Month.</h4>

                            <ul>
                                @foreach($articles as $article)

                                    <li><a href="{{route('article', ['slug' => $article->slug])}}">{{$article->created_at->format('F Y')}}</a></li>

                                @endforeach
                            </ul>

                        </div>

                    </div> <!-- end row -->

                    <div class="row archive-list">

                        <div class="twelve columns">

                            <h4>Archives By Category.</h4>

                            <ul>
                                @foreach($articles as $article)

                                    @foreach($article->categories as $category)
                                        <a href="{{ route('article', ['slug' => $article->slug]) }}"
                                           rel="category tag">{{ $category->title }}</a>,
                                    @endforeach

                                @endforeach
                            </ul>


                        </div>

                        <div class="twelve columns">

                            <h4>Site Map.</h4>

                            <ul>
                                <li><a href="">Archives</a></li>
                                <li><a href="">Home</a></li>
                                <li><a href="">About Us</a></li>
                                <li><a href="">Blog</a></li>
                                <li><a href="">Demo</a></li>
                                <li><a href="">Other Stuff</a></li>
                            </ul>

                        </div>

                    </div>

                </section> <!-- End page -->

            </div> <!-- End main -->


            @include('pages.sidebar')

        </div> <!-- end row -->

    </div> <!-- end content-wrap -->



@endsection
