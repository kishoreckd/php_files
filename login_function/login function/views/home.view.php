<!DOCTYPE html>
<html lang="en">
<head>
    <title>Home Page</title>
    <!--    <link href="style.css" rel="stylesheet">-->
</head>
<body>

<h1>Hello, <?php echo $_SESSION['name']['name']; ?></h1>

<a href="/about"></a>

<a href="/logout">Log out</a>

</body>
</html>