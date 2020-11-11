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

<table class="table">
    <tr>
        <td>#</td>
        <td>ProductName</td>
        <td>Type</td>

    </tr>
    <?php if (empty($product)): ?>
        <tr>khong tim thay san pham</tr>
    <?php else: ?>
        <?php foreach ($product as $key => $item): ?>
            <tr>
                <td><?php echo $key + 1 ?></td>
                <td><?php echo $item->getProductName(); ?></td>
                <td><?php echo $item->getType(); ?></td>

            </tr>
        <?php endforeach; ?>
    <?php endif; ?>
</table>
</body>
</html>

