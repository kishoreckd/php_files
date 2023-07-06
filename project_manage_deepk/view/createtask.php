<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>addTask</title>
</head>
<body>
<form action="/addtask" method="post">

<label for="">Task name</label>
<input type="text" name="task_name">
<label for="">Task description</label>
<input type="text" name="task_description">
    <h2><?= $projectid?></h2>

<button type ="submit" name ="project_id" value ="<?= $projectid?>"> Add Task</button>

</form>
    
</body>
</html>