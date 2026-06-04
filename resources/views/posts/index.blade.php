@extends('app.app')
@section('title','home')
@section('content')
    <section class="hero">
        <div>
            <p class="hero-tag">Bienvenue sur notre blog</p>
            <h1 class="hero-title">Des idées qui valent la peine d'être lues</h1>
            <p class="hero-desc">Un espace de réflexion, d'exploration et de partage. Nous publions des articles soignés
                sur des sujets qui comptent vraiment.</p>
            <div class="hero-stats">
                @foreach ($counts as $key => $count )
                <div>
                    <div class="stat-num">{{ $count ?: 0 }}</div>
                    <div class="stat-label">{{ ucfirst($key) === 'Articles' ? 'Articles publiés' : (ucfirst($key) === 'Comments' ? 'Commentaires' : 'Catégories') }}</div>
                </div>
                @endforeach

            </div>
        </div>
        <div class="hero-visual">
            <div class="stack-card">
                <div class="card-label">Vitae</div>
                <div class="card-title-sm">Sed molestiae omnis ratione ea enim</div>
                <div class="card-excerpt-sm">Un article fascinant sur les mystères de la vie quotidienne...</div>
            </div>
            <div class="stack-card">
                <div class="card-label">Dignissimos</div>
                <div class="card-title-sm">Veniam maxime autem enim</div>
                <div class="card-excerpt-sm">Explorer les chemins inattendus de la connaissance...</div>
            </div>
            <div class="stack-card">
                <div class="card-label" style="color:var(--accent)">À la une</div>
                <div class="card-title-sm" style="color:#F5F0E8">Excepturi eligendi aliquid iste laboriosam</div>
                <div class="card-excerpt-sm" style="color:#8C7B6B">Le dernier article qui fait parler tout le monde...
                </div>
            </div>
        </div>
    </section>

    <section class="section" style="padding-bottom:0">
        <div class="section-header">
            <h2 class="section-title">Catégories</h2>
            <a href="{{route('categories.index')}}" class="section-link">Voir toutes →</a>
        </div>
        <div class="categories-row">
            <a href="#" class="cat-pill active">Tout</a>
            @foreach ($categories as $category )
                <a href="#" class="cat-pill">{{ $category->name }}</a>
            @endforeach
        </div>
    </section>

    <section class="section">
        <div class="section-header">
            <h2 class="section-title">Derniers articles</h2>
            <a href="{{ route('articles.index') }}" class="section-link">Voir tout →</a>
        </div>
        <div class="articles-grid">

          @foreach ($articles as $article )
         
            <a href="{{route('articles.show', ['slug' => $article->slug])}}" class="article-card">
                <div class="article-cat">Optio</div>
                <h3 class="article-title">{{ $article->title }}</h3>
                <p class="article-excerpt">{{ substr($article->content, 0, 50) }}...</p>
                <div class="article-meta">
                    <span>{{ $article->user->name }}</span>
                    <span>{{ $article->created_at->format('d M Y') }}</span>
                </div>
            </a>
          @endforeach
        </div>
    </section>

    <div class="newsletter">
        <div>
            <h2 class="newsletter-title">Ne manquez aucun <em>article</em></h2>
            <p class="newsletter-sub">Inscrivez-vous et recevez nos meilleurs articles directement dans votre boîte
                mail.</p>
        </div>
        <div>
            <div class="newsletter-form">
                <input type="email" class="newsletter-input" placeholder="votre@email.com">
                <button class="newsletter-btn">S'inscrire</button>
            </div>
            <p style="color:#5A4A38;font-size:0.72rem;margin-top:0.7rem">Pas de spam. Désabonnement en un clic.</p>
        </div>
    </div>
@endsection