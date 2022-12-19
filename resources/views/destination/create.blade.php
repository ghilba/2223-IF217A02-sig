<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <form action="/dashboard/destination" method="post">
        @csrf
        <input id="title" name="title" type="text">
        <input id="description" name="description" type="text">
        <input id="city" name="city" type="text">
        <input id="province" name="province" type="text">
        <input id="country" name="country" type="text">
        <input id="coordinates" name="coordinates" type="text">
        <input id="file_path" name="file_path" type="text">
        <button type="submit"></button>
    </form>
</body>

</html>
