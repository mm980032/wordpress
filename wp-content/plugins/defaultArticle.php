<?php
/*
Plugin Name: Defult Article Content
*/

/**
 * 額外添加內容
 *
 * @return string
 * @author Lawson
 */
function addContent() : string {
    return "額外添加內容ddds";
} 

add_shortcode( 'addContent', 'addContent');

/**
 * 開啟外掛預設文字
 *
 * @return string
 * @author Lawson
 */
function openDefultMsg() : string {
    print_r( 
        "<p style='font-size:60px; color:red'>" .
        "已開啟額外添加內容" .
        "</p\>");
} 

add_action( "openDefultMsg", "openDefultMsg" );


/**
 * 加入額外內容
 *
 * @param object $post
 * @return Object
 * @author Lawson
 */
function addPostArticle(object $post) : Object {
    $post->post_content = do_shortcode( '[addContent]');
    // $post->post_content = addContent();
    return $post;
}

add_filter( 'addPostArticle' , 'addPostArticle');


// 添加自定义列
function custom_columns($columns) {
    // 在第二列后面添加一个名为 'custom_column' 的列
    $columns['custom_column'] = '自定义列';
    return $columns;
}
add_filter('manage_posts_columns', 'custom_columns');

// 填充自定义列内容
function fill_custom_column($column, $post_id) {
    // 如果当前列是 'custom_column'
    if ($column === 'custom_column') {
        // 获取当前文章的自定义数据（这里假设你要获取的数据是文章标题）
        $post_title = get_the_title($post_id);
        // 输出自定义数据到当前列
        echo $post_title;
    }
}
add_action('manage_posts_custom_column', 'fill_custom_column', 10, 2);

