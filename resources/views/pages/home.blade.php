@extends('main')

@section('content')

<!-- Content
================================================== -->
<div id="content-wrap">

    <div class="row">

        <div id="main" class="eight columns">

            @foreach($articles as $article)
                @include('components.article', compact('article'))
            @endforeach

            @include('components.pagination')

        </div> <!-- end main -->

        @include('pages.sidebar')

    </div> <!-- end row -->

</div> <!-- end content-wrap -->

@endsection
