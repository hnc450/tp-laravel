<footer>
    <span>© 2026 Le Blog. Tous droits réservés.</span>
    <div>
        <a href="#">Mentions légales</a>
        <a href="#">Confidentialité</a>
        @auth
         <a href="{{ route('dashboard.index') }}">Admin</a>
        @endauth
    </div>
</footer>