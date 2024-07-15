<?php 
session_start();
include_once('../include/Data_Base.php');

if(isset($_POST['submit'])){ 
    function code_prevent($data){
        $data= trim($data);
        $data= stripslashes($data);
        $data= htmlspecialchars($data);
        return $data;
    }
    
    $radio= code_prevent($_POST['radioname']);
    $email= code_prevent($_POST['email']);
    $password= code_prevent($_POST['password']);
    $submit= code_prevent($_POST['submit']);

   if(empty($email)){
    header("location: ../login.php?error=Email Address is Required");
   }elseif (empty($password)){
    header("location: ../login.php?error=Password is Required");
   }else{
    $password= md5($password);

    $sql= " SELECT * FROM users WHERE `Email`='$email' AND `Password`='$password'";

    $result= mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) === 1) {
        $row= mysqli_fetch_assoc($result);
        
        if ($row['Password'] === $password && $row['Role'] === $radio && $row['Email'] === $email) {
            $_SESSION["e1m2a3i4l5"] =$row['Email'];
            $_SESSION['r1o2l3e4']= $row['Role'];
            $_SESSION['p1a2ss3w4o5r6d7']= $row['Password'];

            if ($row['Role'] === 'admin') {
                header('location:../dashbord.php');
            }elseif ($row['Role'] === 'student') {
                header('location:../Student_Dashboard/index.php');
            } else {
                echo "Good you are a failure!";
            }
            
        }else{
            header("location:../login.php?error=Incorect Email or Password");
        }
    }else {
    header("location:../login.php?error=Incorect Email or Password");
   }
   
   } 

}

?>