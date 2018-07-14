<article class="entry">

    <header class="entry-header">

        <h2 class="entry-title">
            <a href="{{ route('article', ['slug' => $article->slug]) }}">{{ $article->title }}</a>
        </h2>

        <div class="entry-meta">
            <ul>
                <li>{{ $article->created_at->format('F j, Y') }}</li>

                @if($article->tags()->count())

                    <span class="meta-sep">&bull;</span>
                    <li>
                        @foreach($article->tags as $tag)
                            <a href="#" rel="category tag">{{ $tag->title }}</a>
                        @endforeach
                    </li>

                @endif

                <span class="meta-sep">&bull;</span>
                <li>{{ $article->author->name }}</li>
            </ul>
        </div>

    </header>

    <div class="entry-content">
        <p> {{ $article->lead }} </p>
    </div>

</article> <!-- end entry -->