 <?php
   $user='root';
   $pass='';
   
   try{
    $con=new PDO('mysql:host=localhost;dbname=ajout',$user,$pass);
     $con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
   }catch(PDOException $e){
     echo"Erreur ! : " .$e->getMessage(). "<br>";
     die;
   }
//    if ($con) {
//     echo'good';
//  }else{
//   echo'false';
//  }
 
?>

