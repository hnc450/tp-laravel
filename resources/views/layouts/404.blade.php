<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Page non trouvée - 404</title>
  <style>
    :root {
      --bg: #F5F0E8;
      --ink: #1A1410;
      --accent: #C0392B;
      --muted: #8C7B6B;
      --card-bg: #FDFBF7;
      --border: #E0D8CC;
    }

    body {
      margin: 0;
      font-family: "Segoe UI", sans-serif;
      background-color: var(--bg);
      color: var(--ink);
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .card {
      background: var(--card-bg);
      border: 1px solid var(--border);
      padding: 3rem;
      text-align: center;
      border-radius: 12px;
      box-shadow: 0 4px 12px rgba(0,0,0,0.1);
    }

    h1 {
      font-size: 5rem;
      margin: 0;
      color: var(--accent);
    }

    h2 {
      margin: 1rem 0;
      font-weight: normal;
      color: var(--muted);
    }

    p {
      margin: 1rem 0;
    }

    a {
      display: inline-block;
      margin-top: 1.5rem;
      padding: 0.75rem 1.5rem;
      background-color: var(--accent);
      color: #fff;
      text-decoration: none;
      border-radius: 6px;
      transition: background 0.3s ease;
    }

    a:hover {
      background-color: #a93226;
    }
  </style>
</head>
<body>
  <div class="card">
    <h1>404</h1>
    <h2>Page non trouvée</h2>
    <p>Oups ! La page que vous cherchez n’existe pas ou a été déplacée.</p>
    <a href="{{ route('home') }}">Retour à l’accueil</a>
  </div>
</body>
</html>
