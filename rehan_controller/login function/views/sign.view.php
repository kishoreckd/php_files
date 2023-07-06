<!DOCTYPE html>
<html lang="en">
<head>
    <title>Sign in</title>
    <!--    <link href="style.css" rel="stylesheet">-->
</head>
<body>

<form action="/sign_in" method="post" class="html-form">
    <?php if (isset($_SESSION['already-exist'])): ?>
        <span><?php echo $_SESSION['already-exist'] ?></span>
    <?php endif; ?>
    <label>Name: </label> <input type="text" name="name" placeholder="Enter name..."><br><br>
    <label>E-mail: </label> <input type="email" name="email" placeholder="Enter e-mail..."><br><br>
    <label>Password: </label> <input type="password" name="pwd" placeholder="Enter password..."><br><br>
    <button type="submit" name="submit">Sign in</button>

    <a href="/login">Already have an account</a>
</form>


</body>
</html>