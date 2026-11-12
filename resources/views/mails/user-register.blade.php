<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Templates — Gestion Utilisateurs</title>
    <link
        href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,600;1,400&family=DM+Sans:wght@300;400;500&display=swap"
        rel="stylesheet">
    <style>
        :root {
            --bg: #F5F0E8;
            --ink: #1A1410;
            --accent: #C0392B;
            --muted: #8C7B6B;
            --card-bg: #FDFBF7;
            --border: #E0D8CC;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background: #2C2420;
            font-family: 'DM Sans', sans-serif;
            padding: 40px 20px;
            min-height: 100vh;
        }

        .page-title {
            text-align: center;
            color: var(--bg);
            font-family: 'Playfair Display', serif;
            font-size: 2rem;
            letter-spacing: 0.02em;
            margin-bottom: 8px;
        }

        .page-subtitle {
            text-align: center;
            color: #8C7B6B;
            font-size: 0.85rem;
            letter-spacing: 0.12em;
            text-transform: uppercase;
            margin-bottom: 60px;
        }

        .section-label {
            color: var(--accent);
            font-size: 0.72rem;
            letter-spacing: 0.18em;
            text-transform: uppercase;
            font-weight: 500;
            text-align: center;
            margin-bottom: 24px;
            padding: 8px 20px;
            border: 1px solid #4A3028;
            display: inline-block;
            border-radius: 2px;
        }

        .section-wrap {
            text-align: center;
            margin-bottom: 20px;
        }

        /* ─── EMAIL SHELL ─── */
        .email-wrapper {
            max-width: 600px;
            margin: 0 auto 60px;
            background: var(--bg);
            border-radius: 4px;
            overflow: hidden;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.4);
        }

        /* ─── HEADER ─── */
        .email-header {
            background: var(--ink);
            padding: 36px 48px;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .email-header .logo {
            font-family: 'Playfair Display', serif;
            color: var(--bg);
            font-size: 1.4rem;
            letter-spacing: 0.04em;
        }

        .email-header .logo span {
            color: var(--accent);
        }

        .email-header .badge {
            font-size: 0.68rem;
            letter-spacing: 0.15em;
            text-transform: uppercase;
            color: var(--muted);
            border: 1px solid #3A3028;
            padding: 4px 10px;
            border-radius: 2px;
        }

        /* ─── HERO BAND ─── */
        .hero-band {
            height: 4px;
            background: linear-gradient(90deg, var(--accent) 0%, #E85D4A 50%, var(--accent) 100%);
        }

        /* ─── BODY ─── */
        .email-body {
            padding: 48px 48px 40px;
            background: var(--card-bg);
        }

        .email-type-label {
            font-size: 0.68rem;
            letter-spacing: 0.2em;
            text-transform: uppercase;
            color: var(--accent);
            font-weight: 500;
            margin-bottom: 20px;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .email-type-label::after {
            content: '';
            flex: 1;
            height: 1px;
            background: var(--border);
        }

        .email-title {
            font-family: 'Playfair Display', serif;
            font-size: 2rem;
            color: var(--ink);
            line-height: 1.2;
            margin-bottom: 8px;
        }

        .email-title em {
            font-style: italic;
            color: var(--accent);
        }

        .divider-ornament {
            display: flex;
            align-items: center;
            gap: 12px;
            margin: 24px 0;
        }

        .divider-ornament::before,
        .divider-ornament::after {
            content: '';
            flex: 1;
            height: 1px;
            background: var(--border);
        }

        .divider-ornament span {
            width: 6px;
            height: 6px;
            background: var(--accent);
            transform: rotate(45deg);
            display: inline-block;
            flex-shrink: 0;
        }

        .greeting {
            font-size: 1.05rem;
            color: var(--ink);
            margin-bottom: 16px;
            font-weight: 400;
        }

        .greeting strong {
            font-weight: 500;
        }

        .body-text {
            font-size: 0.925rem;
            line-height: 1.75;
            color: #4A3C30;
            margin-bottom: 16px;
        }

        /* ─── INFO BOX ─── */
        .info-box {
            background: var(--bg);
            border: 1px solid var(--border);
            border-left: 3px solid var(--accent);
            border-radius: 2px;
            padding: 20px 24px;
            margin: 28px 0;
        }

        .info-box .info-row {
            display: flex;
            justify-content: space-between;
            align-items: baseline;
            padding: 8px 0;
            border-bottom: 1px solid var(--border);
            font-size: 0.875rem;
        }

        .info-box .info-row:last-child {
            border-bottom: none;
        }

        .info-box .info-label {
            color: var(--muted);
            letter-spacing: 0.06em;
            text-transform: uppercase;
            font-size: 0.72rem;
            font-weight: 500;
        }

        .info-box .info-value {
            color: var(--ink);
            font-weight: 500;
            font-size: 0.9rem;
        }

        /* ─── CTA BUTTON ─── */
        .cta-wrap {
            text-align: center;
            margin: 36px 0 28px;
        }

        .cta-btn {
            display: inline-block;
            background: var(--accent);
            color: #FDFBF7;
            text-decoration: none;
            font-size: 0.8rem;
            letter-spacing: 0.16em;
            text-transform: uppercase;
            font-weight: 500;
            padding: 16px 40px;
            border-radius: 2px;
            transition: background 0.2s;
        }

        .cta-btn.secondary {
            background: transparent;
            color: var(--ink);
            border: 1px solid var(--border);
        }

        .cta-url {
            font-size: 0.75rem;
            color: var(--muted);
            text-align: center;
            margin-top: 10px;
            word-break: break-all;
        }

        /* ─── OTP BOX ─── */
        .otp-box {
            background: var(--ink);
            border-radius: 3px;
            padding: 28px;
            text-align: center;
            margin: 32px 0;
        }

        .otp-label {
            font-size: 0.68rem;
            letter-spacing: 0.2em;
            text-transform: uppercase;
            color: var(--muted);
            margin-bottom: 14px;
        }

        .otp-code {
            font-family: 'Playfair Display', serif;
            font-size: 2.8rem;
            letter-spacing: 0.3em;
            color: var(--bg);
            font-weight: 600;
            line-height: 1;
            margin-bottom: 14px;
        }

        .otp-expiry {
            font-size: 0.75rem;
            color: #6B5A50;
            letter-spacing: 0.08em;
        }

        .otp-expiry strong {
            color: var(--accent);
        }

        /* ─── WARNING BOX ─── */
        .warning-box {
            background: #FFF5F5;
            border: 1px solid #F5C6C6;
            border-left: 3px solid var(--accent);
            border-radius: 2px;
            padding: 16px 20px;
            margin: 24px 0;
            display: flex;
            gap: 12px;
            align-items: flex-start;
        }

        .warning-icon {
            width: 18px;
            height: 18px;
            background: var(--accent);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
            margin-top: 1px;
            color: white;
            font-size: 11px;
            font-weight: 700;
        }

        .warning-text {
            font-size: 0.84rem;
            line-height: 1.55;
            color: #7A2020;
        }

        /* ─── SUCCESS BOX ─── */
        .success-box {
            background: #F4FBF4;
            border: 1px solid #C6E6C6;
            border-left: 3px solid #3A9A4A;
            border-radius: 2px;
            padding: 16px 20px;
            margin: 24px 0;
            display: flex;
            gap: 12px;
            align-items: flex-start;
        }

        .success-icon {
            width: 18px;
            height: 18px;
            background: #3A9A4A;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
            margin-top: 1px;
            color: white;
            font-size: 11px;
            font-weight: 700;
        }

        .success-text {
            font-size: 0.84rem;
            line-height: 1.55;
            color: #1A4A20;
        }

        /* ─── PERMISSIONS TABLE ─── */
        .permissions-table {
            width: 100%;
            border-collapse: collapse;
            margin: 24px 0;
            font-size: 0.85rem;
        }

        .permissions-table th {
            text-align: left;
            font-size: 0.68rem;
            letter-spacing: 0.15em;
            text-transform: uppercase;
            color: var(--muted);
            font-weight: 500;
            padding: 8px 12px;
            border-bottom: 2px solid var(--border);
        }

        .permissions-table td {
            padding: 10px 12px;
            color: var(--ink);
            border-bottom: 1px solid var(--border);
        }

        .permissions-table tr:last-child td {
            border-bottom: none;
        }

        .perm-badge {
            display: inline-block;
            padding: 3px 10px;
            border-radius: 2px;
            font-size: 0.7rem;
            letter-spacing: 0.1em;
            text-transform: uppercase;
            font-weight: 500;
        }

        .perm-badge.added {
            background: #E8F5E8;
            color: #2A6A2A;
        }

        .perm-badge.removed {
            background: #FAE8E8;
            color: #8A2020;
        }

        .perm-badge.unchanged {
            background: var(--bg);
            color: var(--muted);
        }

        /* ─── ACTIVITY LOG ─── */
        .activity-log {
            margin: 24px 0;
        }

        .activity-item {
            display: flex;
            gap: 16px;
            padding: 14px 0;
            border-bottom: 1px solid var(--border);
            align-items: flex-start;
        }

        .activity-item:last-child {
            border-bottom: none;
        }

        .activity-dot {
            width: 8px;
            height: 8px;
            border-radius: 50%;
            background: var(--accent);
            margin-top: 5px;
            flex-shrink: 0;
        }

        .activity-dot.muted {
            background: var(--border);
        }

        .activity-content {
            flex: 1;
        }

        .activity-action {
            font-size: 0.875rem;
            color: var(--ink);
            font-weight: 500;
            margin-bottom: 3px;
        }

        .activity-meta {
            font-size: 0.75rem;
            color: var(--muted);
            letter-spacing: 0.04em;
        }

        /* ─── FOOTER ─── */
        .email-footer {
            background: var(--ink);
            padding: 28px 48px;
        }

        .footer-top {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding-bottom: 20px;
            border-bottom: 1px solid #2E2420;
            margin-bottom: 20px;
        }

        .footer-logo {
            font-family: 'Playfair Display', serif;
            font-size: 1rem;
            color: #4A3C30;
            letter-spacing: 0.04em;
        }

        .footer-links {
            display: flex;
            gap: 20px;
        }

        .footer-links a {
            font-size: 0.72rem;
            letter-spacing: 0.12em;
            text-transform: uppercase;
            color: #4A3C30;
            text-decoration: none;
        }

        .footer-copy {
            font-size: 0.75rem;
            color: #3A2E28;
            line-height: 1.6;
        }

        .footer-copy a {
            color: #5A4A40;
            text-decoration: underline;
        }

        /* ─── PROGRESS BAR (password strength) ─── */
        .progress-wrap {
            margin: 28px 0;
        }

        .progress-label {
            display: flex;
            justify-content: space-between;
            font-size: 0.78rem;
            color: var(--muted);
            margin-bottom: 8px;
        }

        .progress-bar {
            height: 4px;
            background: var(--border);
            border-radius: 2px;
            overflow: hidden;
        }

        .progress-fill {
            height: 100%;
            background: linear-gradient(90deg, var(--accent), #E85D4A);
            border-radius: 2px;
        }

        /* ─── CHECKLIST ─── */
        .checklist {
            list-style: none;
            margin: 20px 0;
        }

        .checklist li {
            display: flex;
            align-items: center;
            gap: 10px;
            padding: 8px 0;
            font-size: 0.875rem;
            color: var(--ink);
            border-bottom: 1px solid var(--border);
        }

        .checklist li:last-child {
            border-bottom: none;
        }

        .check-icon {
            width: 16px;
            height: 16px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
            font-size: 9px;
            font-weight: 700;
        }

        .check-icon.ok {
            background: #3A9A4A;
            color: white;
        }

        .check-icon.fail {
            background: var(--accent);
            color: white;
        }

        /* ─── AVATAR ─── */
        .user-avatar {
            width: 48px;
            height: 48px;
            border-radius: 50%;
            background: var(--ink);
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: 'Playfair Display', serif;
            font-size: 1.1rem;
            color: var(--bg);
            flex-shrink: 0;
        }

        .user-card {
            display: flex;
            align-items: center;
            gap: 16px;
            background: var(--bg);
            border: 1px solid var(--border);
            border-radius: 3px;
            padding: 16px 20px;
            margin: 24px 0;
        }

        .user-card-info .name {
            font-weight: 500;
            color: var(--ink);
            font-size: 1rem;
            margin-bottom: 3px;
        }

        .user-card-info .role {
            font-size: 0.75rem;
            letter-spacing: 0.1em;
            text-transform: uppercase;
            color: var(--muted);
        }

        /* ─── TABS (nav) ─── */
        .template-nav {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 10px;
            margin-bottom: 48px;
        }

        .template-nav a {
            font-size: 0.72rem;
            letter-spacing: 0.12em;
            text-transform: uppercase;
            color: var(--bg);
            text-decoration: none;
            padding: 6px 16px;
            border: 1px solid #4A3028;
            border-radius: 2px;
            opacity: 0.7;
            transition: opacity 0.2s, border-color 0.2s;
        }

        .template-nav a:hover {
            opacity: 1;
            border-color: var(--accent);
            color: #F5C0B8;
        }
    </style>
</head>

<body>

 
    <div class="section-wrap">
        <span class="section-label">01 — Création de compte</span>
    </div>
    <div class="email-wrapper" id="bienvenue">
        <div class="email-header">
            <div class="logo">Mon<span>App</span></div>
            <div class="badge">Nouveau compte</div>
        </div>
        <div class="hero-band"></div>
        <div class="email-body">
            <div class="email-type-label">Bienvenue</div>
            <h1 class="email-title">Bon retour,<br><em>{{ $user->name }}</em></h1>
            <div class="divider-ornament"><span></span></div>
            <p class="greeting">Bonjour <strong>{{ $user->name }}</strong>,</p>
            <p class="body-text">
                Votre compte a été créé avec succès. Vous faites maintenant partie de notre communauté et pouvez accéder
                à l'ensemble des fonctionnalités de la plateforme.
            </p>
            <div class="info-box">
                <div class="info-row">
                    <span class="info-label">Identifiant</span>
                    <span class="info-value">sophie.marchand</span>
                </div>
                <div class="info-row">
                    <span class="info-label">Adresse email</span>
                    <span class="info-value">sophie@exemple.fr</span>
                </div>
                <div class="info-row">
                    <span class="info-label">Rôle</span>
                    <span class="info-value">Éditeur</span>
                </div>
                <div class="info-row">
                    <span class="info-label">Créé le</span>
                    <span class="info-value">5 juin 2026</span>
                </div>
            </div>
            <p class="body-text">
                Pour commencer, nous vous invitons à compléter votre profil et à personnaliser vos préférences depuis
                votre tableau de bord.
            </p>
            <div class="cta-wrap">
                <a class="cta-btn" href="#">Accéder à mon espace</a>
            </div>
        </div>
        <div class="email-footer">
            <div class="footer-top">
                <div class="footer-logo">MonApp</div>
                <div class="footer-links">
                    <a href="#">Confidentialité</a>
                    <a href="#">CGU</a>
                    <a href="#">Aide</a>
                </div>
            </div>
            <p class="footer-copy">
                Vous recevez cet email car un compte vient d'être créé avec votre adresse. Si vous n'êtes pas à
                l'origine de cette action, <a href="#">contactez-nous</a> immédiatement.
            </p>
        </div>
    </div>
</body>

</html>