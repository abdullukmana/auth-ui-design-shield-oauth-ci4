<!doctype html>
<html lang="en">
    <head>
        <title><?= $this->renderSection('title') ?></title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />
        <!-- Untuk Chrome & Opera -->
        <meta name="theme-color" content="#1C1C1C"/>
        <!-- Untuk Safari iOS -->
        <meta name="apple-mobile-web-app-status-bar-style" content="#1C1C1C"/>
        <!-- Untuk Windows Phone -->
        <meta name="msapplication-navbutton-color" content="#1C1C1C"/>
        <link rel="icon" href="favicon.ico" type="image/x-icon" />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
        
        <?= $this->renderSection('head') ?>

    </head>

    <body data-bs-theme="system">
        <?= $this->renderSection('body') ?>    

        <!-- Bootstrap JavaScript Libraries -->
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
        <script src="https://cdn.jsdelivr.net/npm/@docsearch/js@3"></script>

        <?= $this->renderSection('script') ?>
        <script>
            document.addEventListener("DOMContentLoaded", function () {

                function updateOrCreateMeta(name, content) {
                    let meta = document.querySelector(`meta[name="${name}"]`);
                    if (!meta) {
                        meta = document.createElement("meta");
                        meta.setAttribute("name", name);
                        document.head.appendChild(meta);
                    }
                    meta.setAttribute("content", content);
                }

                function getBodyBgColor() {
                    color = window.matchMedia("(prefers-color-scheme: dark)").matches ? "#212529" : "#ffffff";
                    return color;
                }

                function updateTheme() {
                    const isDark = window.matchMedia("(prefers-color-scheme: dark)").matches;
                    const theme = isDark ? "dark" : "light";
                    document.body.setAttribute("data-bs-theme", theme);

                    const themeColor = getBodyBgColor();

                    updateOrCreateMeta("theme-color", themeColor);
                    updateOrCreateMeta("apple-mobile-web-app-status-bar-style", themeColor); 
                    updateOrCreateMeta("msapplication-navbutton-color", themeColor); 
                }

                updateTheme();

                window.matchMedia("(prefers-color-scheme: dark)").addEventListener("change", updateTheme);
            });

        </script>
    </body>
</html>
