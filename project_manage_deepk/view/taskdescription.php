<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="/listoftask" method="post">
        <input type="hidden" name="project_id" value="<?=$projectid ?>">
        <button name ="project_id" value="<?= $projectid?>">back to home</button>
    </form>
<?php foreach($particularTask as $task) :?>
    <label for="">Task Name</label>
    <h2><?=$task->task_name ?></h2>
    <label for="">Task description</label>
    <h2><?=$task->task_description ?></h2>

    <?php endforeach;?>
    <form action="/delete" method="post">
        <input type="hidden" name ="task_id" value="<?=$task->id?>">
        <button name ="project_id" value ="<?=$task->project_id?>">delete</button>
    </form>


    
</body>
</html>