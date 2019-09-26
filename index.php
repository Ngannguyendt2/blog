
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php

use controller\BlogController;
include "controller/BlogController.php";
include "model/Blog.php";
include "model/BlogManager.php";
include "model/database/DBconnect.php";
$controller=new BlogController();
$page=$_GET['page']?$_GET['page']:NULL;
switch ($page){
    case 'add':
        $controller->add();
        break;
    case 'delete':
        $controller->delete();
        break;
    case 'update':
        $controller->update();
        break;
    default:
        $controller->index();
        break;
}
?>
</body>
</html>