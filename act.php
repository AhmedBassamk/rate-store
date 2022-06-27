<?php
if (!empty($_POST['c___name']) && !empty($_POST['c___description'])) {
     $c_name = $_POST['c___name'];
     $c_description = $_POST['c___description'];
     include('dashboard/db_connection.php');

    $qu_insert = "INSERT INTO category(category_name , description) VALUES ('$c_name' , '$c_description')";
    $query = mysqli_query($con,$qu_insert);
    if ($query) {
        echo "Successfuly add" ;
        header("Location: http://localhost/final%20project%20alagha/public.php");  
    }


  }else{
      echo "empty";
  }
  $con = mysqli_connect('localhost' , 'root' , '' , 'aghaproj');
  if($con){
       echo "Successfuly Connect" ;
     }else{
        die( "failed". mysqli_connect_error()) ;
}
$category_select = "SELECT id ,category_name, description, status FROM category ";
$qu = mysqli_query($con, $category_select);
while ($row = mysqli_fetch_assoc($qu)) {
    $get_id = $row['id'];
}
  if (!empty($_POST['id'])) {

    $del = "DELETE FROM category WHERE id = '$get_id'";
    $res = mysqli_query($con, $del);
    if ($res) {
        echo "succ";
        header("Location: http://localhost/final%20project%20alagha/dashboard/show_category.php");  

    } else {
        echo "dd";
    }
} else {
    echo "sgs";
}
