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
         var defultSlug = 'articles';
        var pathName = decodeURIComponent(window.location.pathname);
        var splitArr = pathName.split('/');
        var articleTitle = splitArr[splitArr.indexOf(defultSlug) + 1];
        $(document).ready(function() {
            $.ajax({
                url: 'http://wordpress-laravel.com/api/articles/' + articleTitle,
                type: 'GET',
                dataType: 'json',
                success: function(response) {
                    if (response.message === "成功") {
                        $('.wp-block-post-title').append('<h2>' + response.data.post_title + '</h2>')
                        // var content = $('<div class content>')
                        var contentElement = $('<div class="text-cxenter">' + response.data.post_content + '</div>');
                        $('main').append(contentElement);
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