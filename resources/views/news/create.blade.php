<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <form action="/news" method="post">
        @csrf
        <input id="title" name="title" type="text">
        <input id="content" name="content" type="text">
        <input id="status" name="status" type="number">
        <input id="author_id" name="author_id" type="number">
        <input id="category_id" name="category_id" type="number">
        <input id="date_posted" name="date_posted" type="date">
        <input id="date_updated" name="date_updated" type="date">
        <button type="submit"></button>
    </form>
</body>

</html>
