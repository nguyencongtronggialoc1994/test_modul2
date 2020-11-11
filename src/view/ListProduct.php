<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body >
<h1 style="text-align: center">LIST PRODUCT</h1>
<form method="post" action="index.php?page=search" >
    <input type="text" name="search" placeholder="search">
    <input type="submit" value="search" class="btn btn-primary">
</form>

<a href="index.php?page=add" class="btn btn-secondary">ADD PRODUCT</a>
<table class="table">
    <tr style="background-color: green">
        <td>#</td>
        <td>ProductName</td>
        <td>Type</td>
        <td>Action</td>
    </tr>
    <?php if (empty($product)): ?>
        <tr>No Data</tr>
    <?php else: ?>
        <?php foreach ($product as $key => $item): ?>
            <tr>
                <td><?php echo $key + 1 ?></td>
                <td><?php echo $item->getProductName(); ?></td>
                <td><?php echo $item->getType(); ?></td>
                <td>
                    <a href="index.php?page=delete&id=<?php echo $item->getProductCode(); ?>" class="btn btn-danger">DELETE</a>
                    <a href="index.php?page=edit&id=<?php echo $item->getProductCode(); ?>" class="btn btn-success">EDIT</a>
                </td>
            </tr>
        <?php endforeach; ?>
    <?php endif; ?>
</table>
</body>
</html>
