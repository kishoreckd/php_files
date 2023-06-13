    <?php
require 'controllers/UserController.php';



//echo "hi";

$controller = new UserController();
//echo $_POST['actio$gettingallusern'];
if ($_POST['action']) {
    $action = $_POST['action'];

    switch ($action) {
        case 'create':
            $controller->create($_POST);
            break;
        case 'edit':
            $controller->edit($_POST);
            break;
        case 'delete':
            $controller->delete($_POST['delete']);
            break;
        case 'view':
            $controller->view($_POST['view']);
            break;
        default:
            $controller->index();
            break;
    }
} else {
    $controller->index();
}


