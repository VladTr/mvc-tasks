<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="/app/css/styles.css">
    <title>Тестовое приложение-задачник</title>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3 col-md-offset-9" id="enter">
                <a href="/login/show">войти</a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <h4>Приложение-задачник</h4>
                <ul class="nav nav-tabs">
                    <li role="presentation" ><a href="/task/showtask">показать задачи</a></li>
                    <li role="presentation"><a href="/task/addtask">добавить задачу</a></li>
                </ul>
                <?php include 'app/views/content/'.$content_page; ?>
            </div>
        </div>
    </div>
    <script src="/app/js/my-script.js"></script>
</body>
</html>