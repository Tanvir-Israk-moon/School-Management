<?php 
$title ="Edit Students";
include_once('include/head.php');

$ID =$_GET['id'];

$studentSQL = "SELECT * FROM `students` WHERE `ID` = '$ID'";
$studentData = $conn->query($studentSQL);
$rOw = mysqli_fetch_assoc($studentData);
?>

<?php
function hackingPrevent($Text){
    $Text = trim($Text);
    $Text = stripcslashes($Text);
    $Text = htmlspecialchars($Text);
    return $Text;
}

if(isset($_POST["submit"])){
    $S_Name = hackingPrevent($_POST["name"]);
    $S_Roll= hackingPrevent($_POST["roll"]);
    $S_City= hackingPrevent($_POST["city"]);
    $S_Contact= hackingPrevent($_POST["contact"]);
    $S_Class= hackingPrevent($_POST["class"]);
    $S_Photo= $_FILES['photo'];


    if ($S_Photo["size"] < 1000000){

        if($S_Photo['size'] == 0){
            $newfilename= $rOw['Photo'];
        }else{
            $extensions= explode(".", $S_Photo['name']);
            $extension= end($extensions);
            $newfilename= time().".".$extension;
            $insert = " UPDATE `students` SET `Name`='$S_Name',`Roll`='$S_Roll',`City`='$S_City',`Contact`='$S_Contact',`Class`='$S_Class',`Photo`='$newfilename' WHERE `ID` = '$ID'";
                
            $success= $conn -> query($insert);
                    
            if(isset($success)){
                move_uploaded_file($S_Photo['tmp_name'] ,"images/students/" . $newfilename);
                header("location:all_students.php");
            }else{
                header("location: ../edit_students.php?error=Somethings went wrong ! ");
            }
        }
    }else{
        header("location: ../edit_students.php?error=Student Photo must be less than 1MB in size");
    }


        
     
}


?>
<link rel="stylesheet" href="css/add_students.css">
<?php include_once('include/header.php') ?>
    <main>
        <div class="add">
            <h1>Edit Students</h1>
            <p><?php echo $rOw['Name']; ?></p>
        </div>
        <section>
        <?php 
    if(isset($_GET['error'])){ ?>
    <div class="alert danger"> 
        <strong>Warning! </strong><?=$_GET['error']?>
        <span class="close" onclick="this.parentElement.style.display='none'">×</span>
    </div>
    
    <?php }?>
            <form method="post" enctype="multipart/form-data">
            <b>Student Name :</b>
            <input type="text" placeholder="Student Name" Name="name" value="<?php echo $rOw['Name']; ?>" >
            <b>Student Roll :</b>
            <input type="text" placeholder="Student Roll" Name="roll" value="<?php echo $rOw['Roll']; ?>" >
            <b>City Name :</b>
            <input type="text" placeholder="City" name="city" value="<?php echo $rOw['City']; ?>" >
            <b>Personal Contact :</b>
            <input type="text" placeholder="Mobile Number" name="contact" value="<?php echo $rOw['Contact']; ?>" >
            <div class="select_file">
                <div class="select">
                <b>Class</b>
                <select name="class">
                <option value="0">Select Class</option>
                <option value="1"<?php if(isset($S_Class) && $S_Class == 1){ echo 'selected';}elseif($rOw['Class'] == 1){echo 'selected';} ?>>1</option>
                <option value="2"<?php if(isset($S_Class) && $S_Class == 2){ echo 'selected';}elseif($rOw['Class'] == 2){echo 'selected';} ?>>2</option>
                <option value="3"<?php if(isset($S_Class) && $S_Class == 3){ echo 'selected';}elseif($rOw['Class'] == 3){echo 'selected';} ?>>3</option>
                <option value="4"<?php if(isset($S_Class) && $S_Class == 4){ echo 'selected';}elseif($rOw['Class'] == 4){echo 'selected';} ?>>4</option>
                <option value="5"<?php if(isset($S_Class) && $S_Class == 5){ echo 'selected';}elseif($rOw['Class'] == 5){echo 'selected';} ?>>5</option>
                <option value="6"<?php if(isset($S_Class) && $S_Class == 6){ echo 'selected';}elseif($rOw['Class'] == 6){echo 'selected';} ?>>6</option>
                <option value="7"<?php if(isset($S_Class) && $S_Class == 7){ echo 'selected';}elseif($rOw['Class'] == 7){echo 'selected';} ?>>7</option>
                <option value="8"<?php if(isset($S_Class) && $S_Class == 8){ echo 'selected';}elseif($rOw['Class'] == 8){echo 'selected';} ?>>8</option>
                <option value="9"<?php if(isset($S_Class) && $S_Class == 9){ echo 'selected';}elseif($rOw['Class'] == 9){echo 'selected';} ?>>9</option>
                <option value="10"<?php if(isset($S_Class) && $S_Class == 10){ echo 'selected';}elseif($rOw['Class'] == 10){echo 'selected';} ?>>10</option>
                </select> 
                </div>
                <div class="file_area">
                    <b>Your Picture</b>
                    <input type="file" class="file" name="photo">
                </div>
            
            </div>
            
            <input type="submit" value="Add Student" class="submit" Name="submit">

            </form>
            
        </section>
    </main>
    <div class="student_image frame">
        <img src="images/students/<?php echo $rOw['Photo']; ?>" alt="">
        <style>
            .student_image{
                margin-top: 4%;
                width: 250px;
                height: fit-content;
                position: relative;
                border-radius: 10px;
                background-color:#ddc;
                border:solid 30px #eee;
                border-bottom-color:#fff;
                border-left-color:#eee;
                border-radius:5px;
                border-right-color:#eee;
                border-top-color:#ddd;
                box-shadow:0 0 5px 0 rgba(0,0,0,.25) inset, 0 5px 10px 5px rgba(0,0,0,.25);
                box-sizing:border-box;
                align-items: center;
                display:flex;
                text-align: center;
                justify-content: center;
            }
            .student_image img{
                
                width: 250px;
                border:solid 2px;
                border-bottom-color:#ffe;
                border-left-color:#eed;
                border-right-color:#eed;
                border-top-color:#ccb;
                max-height:100%;
                max-width:100%;
            }

            .frame::before {
                border-radius:2px;
                bottom:-12px;
                box-shadow:0 2px 5px 0 rgba(0,0,0,.25) inset;
                content:"";
                left:-12px;
                position:absolute;
                right:-12px;
                top:-12px;
            }
            .frame::after {
                border-radius:2px;
                bottom:-15px;
                box-shadow: 0 2px 5px 0 rgba(0,0,0,.25);
                content:"";
                left:-15px;
                position:absolute;
                right:-15px;
                top:-15px;
            }
        </style>
    </div>
    
    </div>
    
    <p class="footer">Copyright© 2024 All rights Reserved</p>

</body>
</html>
