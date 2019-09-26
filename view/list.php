<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>
<a href="index.php?page=add">ADD</a>
<table class="table table-striped">
    <thead>
    <tr>
        <td>STT</td>
        <td>Title</td>
        <td>Teaser</td>
        <td>Content</td>
        <td>Created</td>
        <td></td>
    </tr>
    </thead>
    <tbody>
    <?php
    foreach ($blogs as $key=> $blog):
    ?>
    <tr>
        <td><?php ++$key ?></td>
        <td><?php echo $blog->getTitle()?></td>
        <td><?php echo $blog->getTeaser()?></td>
        <td><?php echo $blog->getContent()?></td>
        <td><?php echo $blog->getCreatea()?></td>
        <td>
            <a href="index.php?page=delete&id=<?php echo $blog->getId()?>" onclick="return confirm('Are you sure want to delete?')">Delete</a>|
            <a href="index.php?page=update&id=<?php echo $blog->getId()?>">Update</a>
        </td>
    </tr>
    <?php endforeach; ?>
    </tbody>
</table>
</body>
</html>