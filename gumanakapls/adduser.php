<?php 

include "dbcon.php";

  if (isset($_POST['submit'])) {
    $id = $_POST['id'];

    $fname = $_POST['fname'];

    $mname = $_POST['mname'];

    $lname = $_POST['lname'];
    
    $username = $_POST['username'];

    $password = $_POST['password'];

    $email = $_POST['email'];

    $sql = "INSERT INTO users (id, fname, mname, lname, username, password, email)VALUES
    ('$id','$fname','$mname', '$lname', '$username', '$password', '$email')";

    $result = $conn->query($sql);

    if ($result == TRUE) {
      echo  " <div class='form'>
        <h3>New account successfully saved.</h3><br/>
        </div>";
        }else{

        echo "Error:". $sql . "<br>". $conn->error;

        } 

    $conn->close(); 

  }

?>