<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
</head>
<body>
      
<form action="/create" method="post">
    <button type ="submit">create project</button>
</form>

<h3>list of projects</h3>
<?php foreach ($allprojects as $project):?>
<form action="/listoftask" method="post">
<!--    <input type="text" >-->
    <button name="project_id" value="<?php echo $project->id ?>" ><?php echo $project->project_name ?></button>
</form>

<?php endforeach;?>

<br>

<?php if (isset($_SESSION['project_id'])):?>
    <form action="/createtask" method="post">
        <button name="project_id" value="<?= $projectid ?>" >create task</button>
    </form>
    <form action="/deleted" method="post">
        <button name="project_id" value="<?= $projectid ?>" >deleted</button>
    </form>
    <form action="/listoftask" method="post">
        <button name="project_id" value="<?= $projectid ?>" >undeleted</button>
    </form>
<?php endif;?>


<br>
<?php foreach ($listtask as $task):?>
<form action="/taskdescription" method="post">
    <input type="hidden"  name="project_id" value="<?= $projectid ?>">
    <button name="task_id" value="<?= $task->id ?>" ><?= $task->task_name ?></button>
</form>
  <?php endforeach;?>
</body>
</html>