<?php 
$title ="All Students";
include_once('include/head.php');
?>

<link rel="stylesheet" href="css/add_students.css">
<?php include_once('include/header.php') ?>
    <main>
        <div class="add">
            <h1>Add Students</h1>
            <p>Add Students</p>
        </div>
        <section>
        <?php 
    if(isset($_GET['error'])){ ?>
    <div class="alert danger"> 
        <strong>Warning! </strong><?=$_GET['error']?>
        <span class="close" onclick="this.parentElement.style.display='none'">×</span>
    </div>
    
    <?php }?>
            <form action="action/add_students.php" method="post" enctype="multipart/form-data">
            <b>Student Name :</b>
            <input type="text" placeholder="Student Name" Name="name" value="<?php if(isset($_SESSION['S_Name'])){echo $_SESSION['S_Name'];} ?>" >
            <b>Student Roll :</b>
            <input type="text" placeholder="Student Roll" Name="roll" value="<?php if(isset($_SESSION['S_Roll'])){echo $_SESSION['S_Roll'];} ?>" >
            <b>City Name :</b>
            <input type="text" placeholder="City" name="city" value="<?php if(isset($_SESSION['S_City'])){echo $_SESSION['S_City'];} ?>" >
            <b>Personal Contact :</b>
            <input type="text" placeholder="Mobile Number" name="contact" value="<?php if(isset($_SESSION['S_Contact'])){echo $_SESSION['S_Contact'];} ?>" >
            <div class="select_file">
                <div class="select">
                <b>Class</b>
                <select name="class">
                <option value="0">Select Class</option>
                <option value="1"<?php if(isset($_SESSION['S_Class']) && $_SESSION['S_Class'] == 1){ echo 'selected';} ?>>1</option>
                <option value="2"<?php if(isset($_SESSION['S_Class']) && $_SESSION['S_Class'] == 2){ echo 'selected';} ?>>2</option>
                <option value="3"<?php if(isset($_SESSION['S_Class']) && $_SESSION['S_Class'] == 3){ echo 'selected';} ?>>3</option>
                <option value="4"<?php if(isset($_SESSION['S_Class']) && $_SESSION['S_Class'] == 4){ echo 'selected';} ?>>4</option>
                <option value="5"<?php if(isset($_SESSION['S_Class']) && $_SESSION['S_Class'] == 5){ echo 'selected';} ?>>5</option>
                <option value="6"<?php if(isset($_SESSION['S_Class']) && $_SESSION['S_Class'] == 6){ echo 'selected';} ?>>6</option>
                <option value="7"<?php if(isset($_SESSION['S_Class']) && $_SESSION['S_Class'] == 7){ echo 'selected';} ?>>7</option>
                <option value="8"<?php if(isset($_SESSION['S_Class']) && $_SESSION['S_Class'] == 8){ echo 'selected';} ?>>8</option>
                <option value="9"<?php if(isset($_SESSION['S_Class']) && $_SESSION['S_Class'] == 9){ echo 'selected';} ?>>9</option>
                <option value="10"<?php if(isset($_SESSION['S_Class']) && $_SESSION['S_Class'] == 10){ echo 'selected';} ?>>10</option>
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
    </div>
    
    <p class="footer">Copyright© 2024 All rights Reserved</p>

</body>
</html>