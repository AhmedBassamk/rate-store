<?php
session_start();
$id = $_GET['id'];
include('dashboard/db_connection.php');
$selcom = "SELECT * FROM comments Where story_id = $id";
          $query = mysqli_query($con, $selcom);
          if (mysqli_num_rows($query) >= 0) {
            if (!empty($_POST['comment'])) {
              $comment = $_POST['comment'];
              $idu = $_SESSION['user_id'];
              $query22 = "INSERT INTO comments(comment , user_id , story_id) VALUES ('$comment' , '$idu' , '$id')";
              $qu = mysqli_query($con, $query22);


              if ($qu) {
               $_SESSION['operation_is'] =  "<div class='show alert alert-success'>
                    Send Comment is Successfuly
                    </div>";
                    header("Location: http://localhost/final%20project%20alagha/generic.php?id=$id");
              } else {
                $_SESSION['operation_is'] = "<div class='show alert alert-danger'>
                    Send Comment is Failed
                    </div>";
              }
            }else{
                $_SESSION['value'] = "<div class='show alert alert-danger'>
                please enter a comment.
                </div>";
                header("Location: http://localhost/final%20project%20alagha/generic.php?id=$id");

            }
        }