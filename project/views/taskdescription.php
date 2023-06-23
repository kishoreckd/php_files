<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src = "https://cdn.tailwindcss.com"></script>

</head>
<body>
<?php foreach ($task as  $task):?>

<form action="/project" method="post">
<!-- <input type="text" value="<?php echo $task->project_id?>"> -->
    <button type="submit" name="projectId" value ="<?php echo $task->project_id?>" class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2"> back toprojects</button>
    </form>
   
<form action="/deletingtask" method="post">
       
<dl class="max-w-md text-gray-900 divide-y divide-gray-200 dark:text-white dark:divide-gray-700">
    <div class="flex flex-col pb-3">
        <h4 class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">Task_name</h4>
        <p class="text-lg font-semibold"><?php echo $task->task?></p>
    </div>
    <div class="flex flex-col py-3">
        <h4 class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">Task_Description</h4>
        <p class="text-lg font-semibold"><?php echo $task->task_description?></p>
    </div>
    <input type="hidden" name ="project_id" value="<?php echo $task->project_id?>">
    <button type="submit" name="taskid" value="<?php echo $task->id?>" class="text-white bg-gradient-to-r from-red-400 via-red-500 to-red-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">delete task</button>

</form>
<?php endforeach;?>

    
</body>
</html>