<?php

class LayoutView
{
    public static function head($title = "Iskolai nyilvántartó rendszer")
    {
        echo <<<HTML
        <!DOCTYPE html>
        <html lang="hu">
        <head>
            <meta charset="UTF-8">
            <title>{$title}</title>
        </head>
        <body>
        HTML;
    }

    public static function menu()
    {
        echo <<<HTML
        <nav>
            <a href="index.php?view=home">Kezdőlap</a> |
            <a href="index.php?view=subjects">Tantárgyak</a> |
            <a href="index.php?view=classes">Osztályok</a>
        </nav>
        <hr>
        HTML;
    }

    public static function footer()
    {
        echo <<<HTML
        <hr>
        <footer>
            <p>Baradlai Patrik - v7 &copy; 2026</p>
        </footer>
        </body>
        </html>
        HTML;
    }
}
