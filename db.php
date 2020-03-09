<?php
$link = mysqli_connect(
    'localhost',
    'root',
    '',
    'todolist_php'
);

if(isset($link)){
    echo 'Db is connected';
}
?>