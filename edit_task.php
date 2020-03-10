<?php
    include('db.php');
    
    if(isset($_POST['update'])){
        $id = $_GET['id'];
        $title = $_POST['title'];
        $description = $_POST['description'];

        $query = "UPDATE task SET titletask = '$title', descriptiontask = '$description' WHERE idtask='$id'";
        mysqli_query($link, $query);

        $_SESSION['message'] = 'Task updated succesfully.';
        $_SESSION['message_type'] = 'primary';
        header("Location: index.php");
    }
?>