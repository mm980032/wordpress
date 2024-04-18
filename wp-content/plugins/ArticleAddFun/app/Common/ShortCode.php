<?php

namespace App\Common;
use App\Controllers\Controller;


class ShortCode {
    
    public static function builderCategoriesPage() {

        $controller = new Controller();

        add_shortcode( "articleCategoryList", [$controller, "showArticleCategoriesListPage"]);
    }

    public static function builderCategoryArticlesPage() {
        
        $controller = new Controller();

        add_shortcode( "articlesList", [$controller, "showArticlesListPage"]);
    }
}