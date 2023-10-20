<?php
 include 'config.php' ;

 
if(isset($_POST["add_to_cart"])){
    $product_name = $_POST ['product_name'];
    $product_price = $_POST ['product_price'];
    $product_image = $_POST ['product_image'];
    $product_quantity= 1;
    $id = $_COOKIE['user_id'];

  
    $insert_product = mysqli_query($conn, "INSERT INTO cart(Name,Quantity,Price,image,user_id) VALUES('{$product_name}',1,{$product_price},'{$product_image}',{$id})");
    // echo "item added to the table" ;
    header("Location:./Menu.php");
    
    // $insert_count = mysqli_query($conn,$insert_product);

   
  
  }

?>