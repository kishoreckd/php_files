<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php foreach ($alluser as $index => $user):?>

        <form action="/edit" method="post">
                    <input type="hidden" name="id" value="<?php echo $user->id?>">
                    <input type="text" name="User_Name" value="<?php echo $user->name?>">
                    <input type="email" name="User_Email" value="<?php echo $user->email?>">
                    <input type="text" name="Password" value="<?php echo $user->pass?>">

                    <button type="submit" name="action"  value="edit">edit</button>
        </form>
    
<?php endforeach;?>
</body>
</html>