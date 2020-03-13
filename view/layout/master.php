<html>
    <head>
        <title>Master Page</title>
        <link rel="stylesheet" href="<?= BASE_URL ?>public/css/app.css">
    </head>
    <body>
        <nav>
            <ul>
                <li>Home</li>
                <li>About</li>
                <li>Contact</li>
            </ul>
        </nav>
        <hr>
        <section>
            <?php include $content ?>
        </section>
        <hr>
        <footer>
            <h5>Copyright hoangnm at ows.vn</h5>
        </footer>

        <!-- scripts -->
        <script src="<?= BASE_URL ?>public/js/app.js"></script>
    </body>
</html>