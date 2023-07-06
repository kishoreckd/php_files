<?php
if (!isset($_SESSION['check'])){
    header("location:/");
}
   session_destroy();
   header("location:/");