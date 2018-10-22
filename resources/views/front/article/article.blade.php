<article class='l-article'>
    <div class="l-article-image-container">
        <h2 class="l-article-title">{{ strtoupper($article->title) }}</h2>
        <h3 class="l-article-subtitle">{{ $article->subtitle }}</h3>
        <img class="l-article-image" src="{{ asset('storage/' . $article->image) }}" alt="image article">
        <p class="l-article-date">Posté le {{ \Carbon\Carbon::parse($article->created_at)->format('d M Y') }}</p>
    </div>
    <div class="l-article-body">
        <p class="l-article-text">{{ $article->content }}</p>
    </div>
    <footer class='l-article-footer'>
        <header class="l-article-comments-header">
            <p class="l-article-comments-title">Commentaires ({{ $article->comments->count()}})</p>
        </header>
        @if ($article->comments->count() <= 2)
            <div class="l-article-comments" >
        @else
            <div class="l-article-comments is-closed" >
        @endif
        <div class="l-comments-veil"></div>
            @foreach ($article->comments as $comment)
            <div class="l-article-comment">
                <header>
                    <p >Par {{ $comment->username }} le {{ \Carbon\Carbon::parse($comment->created_at)->format('d M') }}</p>
                </header>
                <p class="l-article-comment-body">{{ $comment->content }}</p>
            </div>
            @endforeach
        </div>
        @if ($article->comments->count() > 2)
            <p class="l-article-comments-show">Voir commentaires</p>
        @endif
        @include('front.article.comment')
    </footer>
</article>

    <div class='l-articles-transition'>
        <a class="show-next-article" href="{{ route('article.next',  ['article' => $article])}}"></a>
    </div>