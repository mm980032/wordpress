<?php

namespace App\Controllers;

class Controller {

    public function articleAddBtn(): void
    {
        include_once dirname(dirname(__FILE__)) . '/Views/Article/ArticleBtn.php';
    }
    
    public function showArticleCategoriesListPage(): void
    {
        include_once dirname(dirname(__FILE__)) . '/Views/Article/ArticleCategoriesListPage.php';
    }

    public function showArticlesListPage(): void
    {
        include_once dirname(dirname(__FILE__)) . '/Views/Article/ArticlesListPage.php';
    }

    public function showArticlesDetailPage(): void
    {
        include_once dirname(dirname(__FILE__)) . '/Views/Article/ArticlesDetailPage.php';
    }
}