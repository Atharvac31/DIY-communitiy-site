<?php
  	 $server = "localhost";
       $username = "root";
       $password = "";
       $dbname = "ecomm";
       $conn = mysqli_connect($server, $username, $password,$dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$fname=$_POST['firstname'];
$lname=$_POST['lastname'];
$email=$_POST['email'];
$em = password_hash($email, PASSWORD_DEFAULT);

$phno=$_POST['phno'];

include 'includes/session.php';
try{
    $sql = "INSERT INTO contact (fname, lname, email,phno)
    VALUES ('$fname','$lname','$em','$phno')";
    
    if ($conn->query($sql) === TRUE) {
      echo "New record created successfully";
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
    $conn->close();

 
    header("Location: contact.php");
    
                     

}
catch(PDOException $e){
    $_SESSION['error'] = $e->getMessage();
    header('location: feedback.php');
}


?>