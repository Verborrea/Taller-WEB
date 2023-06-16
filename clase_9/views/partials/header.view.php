<header>
    <h1>LOGO</h1>
    <nav>
        <ul>
            <li><a href="/" <?php if (urlIs("/")) {echo 'aria-current="page"';}?> >Home</a></li>
            <li><a href="/about" <?php if (urlIs("/about")) {echo 'aria-current="page"';}?> >About</a></li>
            <li><a href="/contact" <?php if (urlIs("/contact")) {echo 'aria-current="page"';}?> >Contact</a></li>
        </ul>
    </nav>
</header>