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
<h1 style="text-align: center">ADD PRODUCT</h1>
<form method="post">
    ProductName <input class="form-control" type="text" name="productName" placeholder="productName">
    Type <input class="form-control" type="text" name="type" placeholder="type">
    Price <input class="form-control" type="text" name="price" placeholder="price">
    Quantity <input class="form-control" type="text" name="quantity" placeholder="quantity">
    Description <textarea class="form-control" name="description"></textarea>
    <button type="submit">ADD</button>
</form>
</body>
</html>
