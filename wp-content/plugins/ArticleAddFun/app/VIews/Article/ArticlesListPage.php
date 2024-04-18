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
         var defultSlug = 'article-categories';
        var pathName = window.location.pathname;
        var splitArr = pathName.split('/');
        var postType = splitArr[splitArr.indexOf(defultSlug) + 1];
        $(document).ready(function() {
            $.ajax({
                url: 'http://wordpress-laravel.com/api/articles/' + postType,
                type: 'GET',
                dataType: 'json',
                success: function(response) {
                    if (response.message === "成功") {
                        var tableElement = $('<table class="table"> <thead> <tr> <th> 標題 </th> <th> 發布時間 </th> <th> 詳細 </th> </tr> </thead> <tbody></tbody> </table>');
                        $('main').append(tableElement);
                        // 使用 $.each 遍歷 response.data
                        $.each(response.data, function(index, item) {
                            var row = $('<tr><td>'+ item.post_title + '</td>' + '<td>'+ item.post_date + '</td>' + '<td> <a class="btn btn-primary" href="http://wordpress.example.com/'+ item.ID + '/">詳細</td></tr>');
                            tableElement.find('tbody').append(row);
                        });

                        // 將整個 <ul> 元素添加到 main 中
                        $('main').append(ulElement);

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