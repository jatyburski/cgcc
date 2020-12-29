<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class App extends Controller
{
    public static function siteName()
    {
        return get_bloginfo('name');
    }

    public static function title()
    {
        if (is_front_page()) {
            return the_content();
        }
        if (is_archive()) {
            return the_archive_title('<h1>', '</h1>');
        }
        if (is_404()) {
            return __('Not Found', 'sage');
        }
        return the_title('<h1>', "</h1>");
    }
}
