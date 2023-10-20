<?php
session_start();
  include 'config.php';
  //$con = mysqli_connect('localhost', 'root', '','fruits_store');
//set cookies

  //  $sql = "SELECT username FROM users";
  //  $results =$conn->query($sql);

  //  if ($results->num_rows > 0){
  //   while ($row=$results->fetch_assoc()) {
  //     $username=$row['username'];
  //     setcookie("username" . $username, $username, time() + 3600*24*31, "/");


  //   }
  //  }


  //mysqli_select_db($con, 'fruits_store');

  if(isset($_POST['submit_btn'])){
    $name = $_POST['username'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $number = $_POST['number'];
    $password = $_POST['password'];
    $confirm_password =$_POST['confirm_password'];

    $password_hash=password_hash($password,PASSWORD_DEFAULT);

    $error =array();

    if (empty($name) || empty($email) || empty($address) || empty($number) || empty($password)) {
       array_push($error,"all the fields are requuired");
       $_SESSION['error']="please check your password";
       header('location:register.php');
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      array_push($error, "email is not valid");
      $_SESSION['error']="please check your password";
      header('location:register.php');
    }
    if (strlen($password)<8){
      array_push($error,"password must be at least 8 characters");
      $_SESSION['error']="please check your password";
      header('location:register.php');

    }
    if($password!=$confirm_password){
      array_push($error,"please check your password");
      $_SESSION['error']="please check your password";
      header('location:register.php');

     
    }
    

    if(count($error)>0){
      foreach($error as $error){
        echo "<div class='alert alert-danger'>$error()</div>";
      }
    }else {
      //insert data
      require_once "config.php" ;
      $query = "INSERT INTO users (username, email, address, number, password) VALUES(?,? ,? ,? ,? )";
      $stmt = mysqli_stmt_init($conn);
      $preparestmt =mysqli_stmt_prepare($stmt,$query);

      if($preparestmt) {
        mysqli_stmt_bind_param($stmt,"sssss",$name,$email,$address,$number,$password_hash);
        mysqli_stmt_execute($stmt);

        echo "<div class='alert alert-success'>you are registerd successfully";
        header('location:login.php');

      }else {
        echo "something went wrong ";
      }
    }

  }

?>
