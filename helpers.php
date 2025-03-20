<?php

if (! function_exists('nativephp_openInBrowser')) {
    function nativephp_openInBrowser($url): void
    {
        $os = strtoupper(substr(PHP_OS, 0, 3));
        switch ($os) {
            case 'WIN':
                exec("start $url");
                break;
            case 'DAR':
                exec("open $url");
                break;
            case 'LIN':
                exec("xdg-open $url");
                break;
            default:
                throw new Exception('Unsupported OS');
        }
    }
}
