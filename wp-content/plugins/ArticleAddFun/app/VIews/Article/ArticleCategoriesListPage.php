<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>API数据展示</title>
</head>
<body>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="script.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script>
        
        $(document).ready(function() {
            $.ajax({
                url: 'http://wordpress-laravel.com/api/article/category',
                type: 'GET',
                dataType: 'json',
                success: function(response) {
                    if (response.message === "成功") {
                        $.each(response.data, function(index, item) {
                            // 添加 <nav> 元素
                            var navElement = $('<nav class="navbar navbar-light bg-light"></nav>');
                            // 添加 <div class="container-fluid"> 元素
                            var containerElement = $('<div class="container-fluid justify-content-center"></div>');
                            // 添加 <a> 元素作為連結
                            var linkElement = $('<a class="navbar-brand" href="http://wordpress.example.com/category-articles?id=' + item.term_taxonomy_id + '">' + item.name + '</a>');
                            
                            // 將元素組合在一起
                            containerElement.append(linkElement);
                            navElement.append(containerElement);
                            
                            // 將整個 <nav> 元素添加到 main 中
                            $('main').append(navElement);
                        });
                    } else {
                        $('main').html('<p>API失敗: ' + response.message + '</p>');
                    }
                },
                error: function(xhr, status, error) {
                    $('main').html('<p>API失敗: ' + error + '</p>');
                }
            });
        });
    </script>
</body>
</html>