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
<body style="background-color: grey">
<h1 style="text-align: center">EDIT PRODUCT</h1>

<form method="post" class="form-group">
    ProductName <input class="form-control" type="text" name="productName" value="<?php echo $product->getProductName(); ?>">
    Type <input class="form-control" type="text" name="type" value="<?php echo $product->getType(); ?>">
    Price <input class="form-control" type="text" name="price" value="<?php echo $product->getPrice(); ?>">
    Quantity <input class="form-control" type="text" name="quantity" value="<?php echo $product->getQuantity(); ?>">
    Description <input  class="form-control" type="text" name="description" value="<?php echo $product->getDescription(); ?>">
    <button type="submit">UPDATE</button>
</form>
</body>
</html>
