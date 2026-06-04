<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catégories — Dashboard</title>
    <link
        href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&family=DM+Sans:wght@300;400;500&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
</head>

<body>
   {{-- @dd($categories) --}}
    @include('layouts.sidebar')

    <div class="main">
        <div class="topbar">
            <div class="topbar-title">Catégories</div>
            <a href="{{route('home')}}" 
                style="font-size:0.78rem;color:var(--muted);text-decoration:none;padding:0.45rem 1rem;border:1px solid var(--border)">↗
                Voir le blog</a>
        </div>

        <div class="content">
            <div class="grid-layout">

                <!-- LISTE -->
                <div class="panel">
                    <div class="panel-header">
                        <div class="panel-title">Toutes les catégories (5)</div>
                    </div>
                    <table>
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nom</th>
                                <th>Slug</th>
                                <th>Articles</th>
                                <th>Créée le</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($categories as $category)
                                <tr>
                                    <td class="text-muted">{{ $loop->iteration }}</td>
                                    <td><strong>{{ $category->name }}</strong></td>
                                    <td class="text-muted">{{ $category->slug }}</td>
                                    <td><span class="cat-count">{{ $category->posts->count() }} articles</span></td>
                                    <td class="text-muted">{{ $category->created_at->format('d M Y') }}</td>
                                    <td>
                                        <div class="actions"><button class="btn btn-edit"
                                                onclick="openEditCat('{{ $category->name }}','{{ $category->slug }}')">Éditer</button><button
                                                class="btn btn-danger">Suppr.</button></div>
                                    </td>
                                </tr>
                                
                            @empty
                                <tr>
                                    <td colspan="6" class="text-center text-muted">Aucune catégorie trouvée.</td>
                                </tr>
                                
                            @endforelse
                        </tbody>
                    </table>
                </div>

                <!-- CREATE FORM -->
                <div class="panel">
                    <div class="panel-header">
                        <div class="panel-title">Nouvelle catégorie</div>
                    </div>
                    <div class="panel-body">
                        <div class="form-group">
                            <label class="form-label">Nom <span class="required">*</span></label>
                            <input type="text" class="form-control" name="name" placeholder="Nom de la catégorie"
                                required>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Slug</label>
                            <input type="text" class="form-control" name="slug"
                                placeholder="slug-de-la-categorie">
                            <div class="form-hint" style="margin-top:0.3rem">Généré automatiquement depuis le nom si
                                laissé vide.</div>
                        </div>
                        <button class="btn btn-primary" style="width:100%;margin-top:0.5rem">Créer la
                            catégorie</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- EDIT MODAL -->
    <div class="modal-overlay" id="editModal">
        <div class="modal">
            <div class="modal-header">
                <div class="modal-title">Modifier la catégorie</div>
                <button class="modal-close"
                    onclick="document.getElementById('editModal').classList.remove('open')">✕</button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label class="form-label">Nom <span class="required">*</span></label>
                    <input type="text" class="form-control" id="edit-name" required>
                </div>
                <div class="form-group">
                    <label class="form-label">Slug</label>
                    <input type="text" class="form-control" id="edit-slug">
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-ghost"
                    onclick="document.getElementById('editModal').classList.remove('open')">Annuler</button>
                <button class="btn btn-primary">Sauvegarder</button>
            </div>
        </div>
    </div>

    <script>
        function openEditCat(name, slug) {
            document.getElementById('edit-name').value = name;
            document.getElementById('edit-slug').value = slug;
            document.getElementById('editModal').classList.add('open');
        }
        document.querySelectorAll('.modal-overlay').forEach(overlay => {
            overlay.addEventListener('click', e => {
                if (e.target === overlay) overlay.classList.remove('open');
            });
        });
    </script>
</body>

</html>
