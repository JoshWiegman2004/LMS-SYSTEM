<!DOCTYPE html>
<html>
    <head>
        <link rel="apple-touch-icon" sizes="180x180" href="../assets/img/favicons/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="../assets/img/favicons/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="../assets/img/favicons/favicon-16x16.png">
        <link rel="manifest" href="../assets/img/favicons/site.webmanifest">
        <link rel="mask-icon" href="../assets/img/favicons/safari-pinned-tab.svg" color="#000000">
        <meta name="msapplication-TileColor" content="#2d89ef">
        <meta name="theme-color" content="#ffffff">
        <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="../assets/css/dark-mode.css">
    </head>
<body>

    </head>
    <body>

    <div class="parallax"></div>
        <div class="section">
        Scroll Up and Down this page to see the parallax scrolling effect.
        This div is just here to enable scrolling.
        Tip: Try to remove the background-attachment property to remove the scrolling effect.
        </div>
    <div class="parallax"></div>

    <button onclick="darklight()">Toggle dark mode</button>

    <script>
    function darklight() {
        var element = document.body;
        element.classList.toggle("dark-mode");
    }
    </script>
</body>

</html>