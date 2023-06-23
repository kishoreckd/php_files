<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">
<head>
    <meta charset="UTF-8">
    <title>project managment</title>
    <script src = "https://cdn.tailwindcss.com"></script>

</head>
<body class="h-full">

<nav class="fixed top-0 z-50 w-full bg-white border-b border-gray-200 dark:bg-gray-800 dark:border-gray-700">
    <div class="px-3 py-3 lg:px-5 lg:pl-3">
        <div class="flex items-center justify-between">
            <div class="flex items-center justify-start">
                <button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar" aria-controls="logo-sidebar" type="button" class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
                    <span class="sr-only">Open sidebar</span>
                    <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path>
                    </svg>
                </button>
                <form action="/" method="post">
                <span class="self-center text-xl font-semibold sm:text-2xl whitespace-nowrap dark:text-white">Project Management</span>

                </form>
               
            </div>
            <div class="flex items-center">
                <div class="flex items-center">
                    <div>
                        <form action="/undeleted" method="post" >
                            <button name="projectId" class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800" type ="submit" value="<?php  echo $projectid?>">Un Deleted task</button>
                        </form>
                    </div>
                    <div class="div" style="visibility: hidden" >
                        empty
                    </div>
                    <div>
                        <form action="/deleted" method="post" >
                            <button name="projectId" class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900" type ="submit" value="<?php  echo $projectid?>">Deleted task</button>
                        </form>
                    </div>
               <div class="div" style="visibility: hidden" >
                empty
               </div>
                    <div>
                      <form action="/create" method="post">
                        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"> Create projects</button>
                      </form>
                    </div>
                    <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded shadow dark:bg-gray-700 dark:divide-gray-600" id="dropdown-user">
                        <div class="px-4 py-3" role="none">
                            <p class="text-sm text-gray-900 dark:text-white" role="none">
                                Neil Sims
                            </p>
                            <p class="text-sm font-medium text-gray-900 truncate dark:text-gray-300" role="none">
                                neil.sims@flowbite.com
                            </p>
                        </div>
                        <ul class="py-1" role="none">
                           

                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>

<aside id="logo-sidebar" class="fixed top-0 left-0 z-40 w-64 h-screen pt-20 transition-transform -translate-x-full bg-white border-r border-gray-200 sm:translate-x-0 dark:bg-gray-800 dark:border-gray-700" aria-label="Sidebar">
    <div class="h-full px-3 pb-4 overflow-y-auto bg-white dark:bg-gray-800">
        <ul class="space-y-2 font-medium">
                      <?php foreach ($allprojects as $projects):?>
                            <form action="/project" method="post">
                                <button name="projectId" class="text-blue-700 hover:text-white border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:hover:bg-blue-500 dark:focus:ring-blue-800" type ="submit" value="<?php echo $projects->id?>"><?php echo $projects->project_name?></button>
                            </form>
                                    <?php endforeach;?>
        </ul>
    </div>
</aside>
<div class="p-4 sm:ml-64">
    <div class="p-4 border-2 border-gray-100 border-dashed rounded-lg dark:border-gray-100 mt-14">
        <div>
            <form action="/createtask" method="post">
                
<!--                <input type="text" value="--><?php // echo $projectid?><!--" >-->
                <button type="submit" name="projectid" value ="<?php  echo $projectid?>" class="text-white bg-[#1da1f2] hover:bg-[#1da1f2]/90 focus:ring-4 focus:outline-none focus:ring-[#1da1f2]/50 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:focus:ring-[#1da1f2]/55 mr-2 mb-2">create new task</button>
            </form>
            <?php foreach ($particularTask as  $task):?>

            <form action="/taskdescription" method="post">
                <button class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700" style="width:15rem;height:6rem;">
                    <h6 class="mb-2 text-1xl font-bold tracking-tight text-gray-900 dark:text-white"><?php echo $task->task?></h6>
                    <input type="hidden" name="id" value ="<?php echo $task->id?>">
                </button>
            </form>
            <?php endforeach; ?>
        </div>


</body>
</html>