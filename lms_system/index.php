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
    <!__Video background__>
        <video autoplay muted loop id="backVid">
            <source src="../assets/img/video.mp4" type="video/mp4">
        </video>
        <!__Content_Main__>
            <section>
                <p>test123</p>
            </section>
            <!__Dark mode__>
                <!__Dark mode toggle button__>
                    <button onclick="darklight()">Toggle dark mode</button>
                    <!__Dark mode script__>
                        <script>
                        function darklight() {
                            var element = document.body;
                            element.classList.toggle("dark-mode");
                        }
                        </script>
</body>

</html>