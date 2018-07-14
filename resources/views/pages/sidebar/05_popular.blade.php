@if($popular->count())

    <div class="widget widget_popular">
        <h3>Popular Post.</h3>

        <ul class="link-list">

            @foreach($popular as $article)

                <li>
                    <a href="{{ route('article', ['slug' => $article->slug]) }}">
                        {{ $article->title }}
                    </a>
                </li>

            @endforeach
        </ul>

    </div>

@endif