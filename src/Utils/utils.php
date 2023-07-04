<?php

/**
 * render cars/show (exemple)
 *
 * @param string $path
 * @param array $variables
 * @return void
 */
function render(string $path, array $variables = [])
{
    extract($variables);
    ob_start();
    require('../Views/' . $path . '_html.php');
    $pageContent = ob_get_clean();

    require('../Views/layout_html.php');
}

/**
 * Redirection de page
 *
 * @param string $url
 * @return void
 */
function redirection(string $url): void
{
 header("Location: $url");
}


/**
 * Undocumented function
 *
 * @return void
 */
function run() {
    $uri = $_SERVER['REQUEST_URI'];
    if (!empty($uri) && $uri[-1] === "/") {
        header('Location: ' . substr($uri, 0, -1));
        header('HTTP/1.1 301 Moved Permanently');
        exit();
    }
}
?>

