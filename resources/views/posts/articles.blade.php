<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Articles — Le Blog</title>
    <link
        href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,700;1,400&family=DM+Sans:wght@300;400;500&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
</head>

<body>

    @include('layouts.header')

    <div class="page-header">
        <div class="page-tag">Blog</div>
        <h1 class="page-title">Tous les articles</h1>
        <p class="page-count">50 articles publiés dans 5 catégories</p>
    </div>

    <div class="filters-bar">
        <div class="search-wrap">
            <input type="search" placeholder="Rechercher un article...">
        </div>
        <div class="filter-cats">
            <a href="#" class="cat-pill active">Tout</a>
            <a href="#" class="cat-pill">Vitae</a>
            <a href="#" class="cat-pill">Dignissimos</a>
            <a href="#" class="cat-pill">Optio</a>
            <a href="#" class="cat-pill">Aperiam</a>
            <a href="#" class="cat-pill">Tenetur</a>
        </div>
        <select class="sort-select">
            <option>Plus récents</option>
            <option>Plus anciens</option>
            <option>Plus commentés</option>
        </select>
    </div>

    <div class="main-layout">
        <div class="articles-col">
            <div class="articles-list">
                
                @forelse ($articles as $article)
                   <a href="{{ route('articles.show',['slug' => $article->slug ])}}" class="article-item">
                      <div>
                          <div class="ai-cat">Vitae</div>
                          <div class="ai-title">{{ $article->title}}</div>
                          <div class="ai-excerpt">{{ $article->content }}</div>
                          <div class="ai-meta">
                              <span>{{ $article->user->name }}</span>
                              <span>{{ $article->created_at }}</span>
                              <span>{{ $article->comment->count() }} commentaires</span>
                          </div>
                      </div>
                      <div class="ai-thumb c3">T</div>
                   </a>

                @empty
                  <p>Aucun article trouvé</p>
                @endforelse
            </div>
            <div class="pagination">
                <a href="#" class="page-btn active">1</a>
                <a href="#" class="page-btn">2</a>
                <a href="#" class="page-btn">3</a>
                <a href="#" class="page-btn">4</a>
                <a href="#" class="page-btn">5</a>
                <a href="#" class="page-btn">→</a>
            </div>
        </div>

        <aside class="sidebar-col">
            <div class="sidebar-block">
                <div class="sidebar-label">Catégories</div>
                <a href="#" class="cat-item">Vitae <span class="cat-count">10 articles</span></a>
                <a href="#" class="cat-item">Dignissimos <span class="cat-count">10 articles</span></a>
                <a href="#" class="cat-item">Optio <span class="cat-count">10 articles</span></a>
                <a href="#" class="cat-item">Aperiam <span class="cat-count">10 articles</span></a>
                <a href="#" class="cat-item">Tenetur <span class="cat-count">10 articles</span></a>
            </div>

            <div class="sidebar-block">
                <div class="sidebar-label">Articles populaires</div>
                <a href="article.html" class="popular-item">
                    <div class="pop-num">01</div>
                    <div>
                        <div class="pop-title">Excepturi eligendi aliquid iste laboriosam</div>
                        <div class="pop-cat">Optio</div>
                    </div>
                </a>
                <a href="article.html" class="popular-item">
                    <div class="pop-num">02</div>
                    <div>
                        <div class="pop-title">Aut repellat ut qui et</div>
                        <div class="pop-cat">Aperiam</div>
                    </div>
                </a>
                <a href="article.html" class="popular-item">
                    <div class="pop-num">03</div>
                    <div>
                        <div class="pop-title">Blanditiis commodi qui iure optio</div>
                        <div class="pop-cat">Dignissimos</div>
                    </div>
                </a>
                <a href="article.html" class="popular-item">
                    <div class="pop-num">04</div>
                    <div>
                        <div class="pop-title">Veritatis ut corrupti minus harum</div>
                        <div class="pop-cat">Optio</div>
                    </div>
                </a>
                <a href="article.html" class="popular-item">
                    <div class="pop-num">05</div>
                    <div>
                        <div class="pop-title">Sed laudantium facilis dolore non sunt</div>
                        <div class="pop-cat">Tenetur</div>
                    </div>
                </a>
            </div>

            <div class="sidebar-block">
                <div class="sidebar-label">Tags</div>
                <div class="tag-cloud">
                    <a href="#" class="tag">Vitae</a>
                    <a href="#" class="tag">Eligendi</a>
                    <a href="#" class="tag">Laboriosam</a>
                    <a href="#" class="tag">Optio</a>
                    <a href="#" class="tag">Soluta</a>
                    <a href="#" class="tag">Repellat</a>
                    <a href="#" class="tag">Blanditiis</a>
                    <a href="#" class="tag">Veniam</a>
                </div>
            </div>
        </aside>
    </div>

    <footer>
        <span>© 2026 Le Blog. Tous droits réservés.</span>
        <div>
            <a href="#">Mentions légales</a>
            <a href="#">Confidentialité</a>
            <a href="dashboard.html">Admin</a>
        </div>
    </footer>

</body>

</html>
