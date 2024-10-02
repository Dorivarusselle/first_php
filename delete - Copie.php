<?php
    include('join.php');
    
    $id =$_GET['id'];
    $DelSql ="DELETE FROM studentessa WHERE id=$id";
    $res =$con->query($DelSql);
    if ($res) {
        header("location:seeAll.php?delete");
         
    }else{
        header("location:seeAll.php?erreur");   
    }
    
?>