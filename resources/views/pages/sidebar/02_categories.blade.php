@if($categories->count())

    <div class="widget widget_categories group">
        <h3>Categories.</h3>
        <ul>

            @foreach($categories as $category)
                <li>
                    <a href="{{ route('category', ['slug' => $category->slug]) }}">
                        {{ $category->title }}</a>
                    {{--todo: реализовать связь категорий со статьями--}}


                        <span>{{$category->news->count()}}</span>

                    {{--                ({{ $category->articles()->count() }})--}}
                </li>
            @endforeach

        </ul>
    </div>

@endif