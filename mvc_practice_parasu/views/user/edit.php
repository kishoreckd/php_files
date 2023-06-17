<html>
    <head>
        <title>Edit user</title>
    </head>
    <body>
        <?php foreach ($Edituser as $Editusers  ):?>
        <form action="/update" method="post">
            <input type="text" name="username" placeholder="username" value="<?php echo $Editusers["name"]?>">
            <input type="email" name="email" placeholder="email" value="<?php echo $Editusers["email"]?>">
            <input type="password" name="password" placeholder="password" value="<?php echo $Editusers["pass"]?>">
            <input type="hidden" name="update"  value="<?php echo $Editusers["id"]?>">
            <input type="submit" value="update">
        </form>
        <?php endforeach;?>

    </body>
</html>