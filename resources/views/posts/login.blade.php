<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Connexion - Blog</title>
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

    .login-card {
      background: var(--card-bg);
      border: 1px solid var(--border);
      padding: 3rem 2.5rem;
      border-radius: 14px;
      box-shadow: 0 6px 16px rgba(0,0,0,0.1);
      width: 380px;
      text-align: center;
    }

    h1 {
      margin-bottom: 2rem;
      color: var(--accent);
      font-size: 2rem;
      font-weight: bold;
    }

    .form-group {
      margin-bottom: 1.5rem;
      text-align: center;
    }

    label {
      display: block;
      margin-bottom: 0.5rem;
      color: var(--muted);
      font-size: 0.9rem;
      text-align: left;
    }

    input {
      width: 90%;
      padding: 0.9rem;
      border: 1px solid var(--border);
      border-radius: 8px;
      background-color: #fff;
      font-size: 1rem;
      color: var(--ink);
      margin: 0 auto;
      display: block;
    }

    input:focus {
      outline: none;
      border-color: var(--accent);
      box-shadow: 0 0 6px rgba(192,57,43,0.4);
    }

    button {
      margin-top: 1rem;
      width: 90%;
      padding: 0.9rem;
      background-color: var(--accent);
      color: #fff;
      border: none;
      border-radius: 8px;
      font-size: 1rem;
      cursor: pointer;
      transition: background 0.3s ease;
    }

    button:hover {
      background-color: #a93226;
    }

    .footer {
      margin-top: 1.5rem;
      font-size: 0.9rem;
      color: var(--muted);
    }

    .footer a {
      color: var(--accent);
      text-decoration: none;
      font-weight: 500;
    }

    .footer a:hover {
      text-decoration: underline;
    }
  </style>
</head>
<body>
  <div class="login-card">
    <h1>Connexion</h1>
    <form method="POST" action="{{ route('login.post') }}">
        @csrf
      <div class="form-group">
        <label for="email">Adresse e-mail</label>
        <input type="email" id="email" name="email" required>
      </div>
      <div class="form-group">
        <label for="password">Mot de passe</label>
        <input type="password" id="password" name="password" required>
      </div>
      <button type="submit">Se connecter</button>
    </form>
    <div class="footer">
      <p>Pas encore inscrit ? <a href="#">Créer un compte</a></p>
    </div>
  </div>
</body>
</html>
