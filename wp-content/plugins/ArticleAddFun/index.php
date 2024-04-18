<?php
use App\Common\Event;
use App\Common\ShortCode;
/*
Plugin Name: Article Add Function
Description: 1.取得當前所有分類 2.取得分類底下所有文章  3.文章詳細內容
*/

require __DIR__ . '/vendor/autoload.php';

Event::articlePageRedirection();

ShortCode::builderCategoriesPage();
ShortCode::builderCategoryArticlesPage();