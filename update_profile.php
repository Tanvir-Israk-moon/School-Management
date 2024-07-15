<?php 
$title ="Update your Profile";
include_once('include/head.php');
?>

<link rel="stylesheet" href="css/update_profile.css">

<?php include_once('include/header.php') ?>

    <main>
        <div class="head">
        <h1>Update Your Profile</h1>
        <p>My Profile</p>
    </div>
    <form action="action/update_profile.php">
        <label for="">Name :</label>
        <input type="text" placeholder="<?php echo $roW['Name'];?>">
        <label for="">Email :</label>
        <input type="email" name="" id="" placeholder="<?php echo $roW['Email'];?>">
        <input type="submit" value="Update">
    </form>
    </main>
    </div>
    
    
    <p class="footer">Copyright© 2024 All rights Reserved</p>
</body>
</html>