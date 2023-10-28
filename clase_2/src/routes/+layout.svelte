<script>
    import '../style.css'
</script>

<header class="flex">
    <div class="flex">
        <a href="/" title="Ir a mi perfil">
            <img
                src="https://images.unsplash.com/photo-1595433707802-6b2626ef1c91?auto=format&fit=crop&q=80&w=1000&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxleHBsb3JlLWZlZWR8Mnx8fGVufDB8fHx8fA%3D%3D" 
                alt="Foto de perfil"
                height="48"
                width="48"
            >
        </a>
        <a href="/" title="Inicio" aria-current="page">miLogo</a>
    </div>
    <nav>
        <ul class="flex">
            <li><a href="/">About</a></li>
            <li><a href="/">Work</a>
            <li><a href="/">Blog</a></li>
            <li><a href="/">Store</a></li>
        </ul>
    </nav>
    <a href="/">Contact</a>
</header>

<slot />

<style>
    .flex {
        display: flex;
    }
    header {
        justify-content: space-between;
        align-items: center;
    }
    header>div:first-child {
        gap: 16px;
        align-items: center;
    }
    ul {
        list-style: none;
        gap: 12px;
    }
</style>