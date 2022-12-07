<?php

include_once 'php/config.php';
session_start();
if (isset($_SESSION['unique_id'])) {
}

if(isset($_POST['update_profile'])){

    $update_fname = mysqli_real_escape_string($conn, $_POST['update_fname']);
    $update_lname = mysqli_real_escape_string($conn, $_POST['update_lname']);
    $update_email = mysqli_real_escape_string($conn, $_POST['update_email']);

   mysqli_query($conn, "UPDATE `users` SET fname = '$update_fname', lname = '$update_lname', email = '$update_email' WHERE unique_id = {$_SESSION['unique_id']}");

   $old_pass = $_POST['old_pass'];
   $update_pass = mysqli_real_escape_string($conn, $_POST['update_pass']);
   $new_pass = mysqli_real_escape_string($conn, $_POST['new_pass']);
   $confirm_pass = mysqli_real_escape_string($conn, $_POST['confirm_pass']);

   if(!empty($update_pass) || !empty($new_pass) || !empty($confirm_pass)){
      if($update_pass != $old_pass){
         $message[] = 'sua senha não corresponde!';
      }elseif($new_pass != $confirm_pass){
         $message[] = 'confime a senha!';
      }else{
         mysqli_query($conn, "UPDATE `users` SET password = '$confirm_pass' WHERE unique_id = {$_SESSION['unique_id']}");
         $message[] = 'senha atualizada com sucesso!';
      }
   }

   $update_image = $_FILES['update_image']['name'];
   $update_image_size = $_FILES['update_image']['size'];
   $update_image_tmp_name = $_FILES['update_image']['tmp_name'];
   $update_image_folder = 'php/images/'.$update_image;

   if(!empty($update_image)){
      if($update_image_size > 2000000){
         $message[] = 'Imagem é muito grande!';
      }else{
         $image_update_query = mysqli_query($conn, "UPDATE `users` SET img = '$update_image' WHERE unique_id = {$_SESSION['unique_id']}");
         if($image_update_query){
            move_uploaded_file($update_image_tmp_name, $update_image_folder);
         }
         $message[] = 'imagem atualizada com sucesso!';
      }
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Configurações</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="conta.css">

</head>
<body>
   
<div class="update-profile">
    <?php
    include_once "php/config.php";
        $sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$_SESSION['unique_id']}");
        if (mysqli_num_rows($sql) > 0) {
            $row = mysqli_fetch_assoc($sql);
        }
    ?>
   <form action="" method="post" enctype="multipart/form-data">
      <?php
         if(isset($message)){
            foreach($message as $message){
               echo '<div class="message">'.$message.'</div>';
            }
         }
      ?>
      <img src="php/images/<?php echo $row['img']; ?>" >
      <div class="flex">
          
         <div class="inputBox">
            <span>Nome :</span>
            <input type="text" name="update_fname" value="<?php echo $row['fname']; ?>" class="box">
            <span>Sobrenome :</span>
            <input type="text" name="update_lname" value="<?php echo $row['lname']; ?>" class="box">
            <span>E-mail :</span>
            <input type="email" name="update_email" value="<?php echo $row['email']; ?>" class="box">
            <span>Atualize sua foto :</span>
            <input type="file" name="update_image" accept="image/jpg, image/jpeg, image/png" class="box">
         </div>
         <div class="inputBox">
            <input type="hidden" name="old_pass" value="<?php echo $row['password']; ?>">
            <span>Sua antiga senha :</span>
            <input type="password" name="update_pass" placeholder="informe sua antiga senha" class="box">
            <span>Sua nova senha :</span>
            <input type="password" name="new_pass" placeholder="Informe sua nova senha" class="box">
            <span>Confirme sua senha :</span>
            <input type="password" name="confirm_pass" placeholder="confirme sua nova senha" class="box">
         </div>
      </div>
      <input type="submit" value="Atualizar Conta" name="update_profile" class="btn">
      <a href="inicio.php" class="delete-btn">Voltar</a>
      <?php
      if(isset($_POST['delete_profile'])){
        include_once "php/config.php";
        $delete = ("DELETE FROM users WHERE unique_id = {$_SESSION['unique_id']}");
        $resultdel = mysqli_query($conn,$delete);
        header('Location: login.php'); 
      }  
      ?>
      <br><br>
      <input type="submit" value="Encerrar Conta" name="delete_profile" class="btndelet">
   </form>

</div>

</body>
</html>