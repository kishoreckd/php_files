<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <form action="../../index.php" method="post" enctype="multipart/form-data" >
        <div class="mb-3">
        <input type="text" class="form-control"  name="User_Name" placeholder="Your name">
        </div>
        <div class="mb-3">

        <input type="email" class="form-control"  name="User_Email" placeholder="Your Email">

        </div>
        <div class="mb-3">
        <input type="password" class="form-control" name="Password" placeholder="Your Password">
        </div>
        <button type="submit" name="action" value="create">submit</button>

    </form>
    
</body>
</html>