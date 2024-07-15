<?php 
session_start();
include("../include/Data_Base.php");

function hackingPrevent($Text){
    $Text = trim($Text);
    $Text = stripcslashes($Text);
    $Text = htmlspecialchars($Text);
    return $Text;
}

if(isset($_POST["submit"])){
    $S_Name = $_SESSION['S_Name']= hackingPrevent($_POST["name"]);
    $S_Roll= $_SESSION['S_Roll']= hackingPrevent($_POST["roll"]);
    $S_City= $_SESSION['S_City']= hackingPrevent($_POST["city"]);
    $S_Contact= $_SESSION['S_Contact']= hackingPrevent($_POST["contact"]);
    $S_Class= $_SESSION['S_Class']= hackingPrevent($_POST["class"]);
    $S_Photo= $_FILES['photo'];

    if(empty($S_Name)){
        header("location: ../Add_Students.php?error=Student Name is Required");
       }elseif (empty($S_Roll)){
        header("location: ../Add_Students.php?error=Student Roll is Required");
       }elseif (empty($S_Roll)){
        header("location: ../Add_Students.php?error=Student Roll is Required");
       }elseif (empty($S_City)){
        header("location: ../Add_Students.php?error=Student City is Required");
       }elseif (empty($S_Contact)){
        header("location: ../Add_Students.php?error=Student Contact Number is Required");
       }elseif (empty($S_Class)){
        header("location: ../Add_Students.php?error=Student Class is Required");
       }elseif ($S_Photo['size'] == 0){
        header("location: ../Add_Students.php?error=Student Photo is Required");
       }else{
        if(!empty($S_Name) && !empty($S_Roll) && !empty($S_City) && $S_Class !== null && !empty($S_Contact) && $S_Photo['size'] !== 0){

                $extensions= explode(".", $S_Photo['name']);
                $extension= end($extensions);
                $newfilename= time().".".$extension;
                
                if ($S_Photo["size"] < 1000000){

                    $insert = "INSERT INTO `students`(`Name`, `Roll`, `City`, `Contact`, `Class`, `Photo`) VALUES ('$S_Name','$S_Roll','$S_City','$S_Contact','$S_Class','$newfilename') ";
            
                    $success= $conn -> query($insert);
            
                    if(isset($success)){
                        move_uploaded_file($S_Photo['tmp_name'] ,"../images/students/" . $newfilename);
                        echo "Stored in: " . "../images/students/" .$newfilename;
                        
                        unset($_SESSION["S_Name"]);
                        unset($_SESSION["S_Roll"]);
                        unset($_SESSION["S_City"]);
                        unset($_SESSION["S_Contact"]);
                        unset($_SESSION["S_Class"]);

                        header('location:../Add_Students.php');
                    }
                }else{
                    header("location: ../Add_Students.php?error=Student Photo must be less than 1MB in size");
                }
        }   
    }      
}


?>