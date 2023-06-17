<html>
    <head>
        <title>List uset</title>
    </head>
    <body>
        <table>
            <tr>
                <th>Id</th>
                <th>Username</th>
                <th>Email</th>
                <th>Password</th>
            </tr>
            <?php foreach ($alluserData as $alluserDatas  ): ?>
                <tr>
                    <td><?php echo $alluserDatas["id"]?></td>
                    <td><?php echo $alluserDatas["name"]?></td>
                    <td><?php echo $alluserDatas["email"]?></td>
                    <td><?php echo $alluserDatas["pass"]?></td>
                    <td>
                        <form action="/delete" method="post">
                            <input type="hidden" name="delete" value="<?php echo $alluserDatas["id"]?>">
                            <button type="submit">Delete</button>
                        </form>
                    </td>
                    <td>
                        <form action="/edit" method="post">
                            <input type="hidden" name="edit" value="<?php echo $alluserDatas["id"]?>">
                            <button type="submit">Edit</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
        <form action="/" method="post">
            <button type="submit">back to main page</button>
        </form>
    </body>
</html>