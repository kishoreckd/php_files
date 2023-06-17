<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table>
<tr>
        <th rowspan>id</th>
        <th>Name</th>
        <th>Email</th>
        <th>Password</th>
        <th>User</th>
    </tr>
        <?php foreach ($alluser as $index => $user):?>

    <tr>
        <td><?php echo $index+1?></td>
        <td><?php echo $user->name?></td>
        <td><?php echo $user->email?></td>
        <td><?php echo $user->pass?></td>

        <td>
            <form action="/view" method="post">
                <input type="hidden" name="view" value="<?php echo $user->id?>">
            <button type="submit" name="action"  value="view">edit</button>
            </form>
            <form action="/delete" method="post">
                <input type="hidden" name="delete" value="<?php echo $user->id?>">
                <button type="submit" name="action"  value="delete">delete</button>
            </form>
        </td>

    </tr>

    <?php endforeach;?>
<!--<a href="./views/user/create.php"> create new one</a>-->

<form action="/create" method="post">
    <button type ="submit"  >Create new one</button>
</form>
    
   

</table>
  

</body>
</html>