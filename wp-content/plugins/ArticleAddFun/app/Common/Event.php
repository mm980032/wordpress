<?php

namespace App\Common;

class Event {

    public static function articlePageRedirection() {
        add_action("init", function() {
            add_rewrite_rule('article-categories\/(.*)', 'index.php?pagename=article-categories&args=$matches[1]', 'top');
        });
    }
}

