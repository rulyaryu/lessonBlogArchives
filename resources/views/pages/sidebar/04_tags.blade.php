@if($tags->count())

    <div class="widget widget_tags">
        <h3>Post Tags.</h3>

        <div class="tagcloud group">

            @foreach($tags as $tag)
                <a href="{{ $tag->slug }}">{{ $tag->title }}</a>
            @endforeach

        </div>

    </div>

@endif