<?php 
$title ="User Profile";
include_once('include/head.php');
?>
<link rel="stylesheet" href="css/profile.css">

<?php include_once('include/header.php');

if (isset($_POST['upload'])) {
    $photo= $_FILES['photo'];
    if ($photo['size'] == 0) {
        echo 'good';
    }elseif(isset($photo)) {
        $photoname= explode('.',$_FILES['photo']['name']);
        $photoname= end($photoname);
        $photoRename= $_SESSION["e1m2a3i4l5"].time().'.'.$photoname;
    }

    if(!empty($photo)){
        $emaiL= $_SESSION["e1m2a3i4l5"];
        $photoInsert = "UPDATE `users` SET `Photo`='$photoRename' WHERE `Role` = 'admin' AND `Email` = '$emaiL'";
        $dataConnection =$conn->query($photoInsert);
        $adminPhoto = "SELECT * FROM `users` WHERE `Role` = 'admin' AND `Email` = '$emaiL'";
        $adminPhotoData = $conn->query($adminPhoto);
        $adminData= mysqli_fetch_assoc($adminPhotoData);
    }

    if ($dataConnection) {
        move_uploaded_file($_FILES['photo']['tmp_name'],'images/admins/'.$photoRename);
    }

}

?>

    <main>
    <div class="head">
        <h1>User Profile</h1>
        <p>My Profile</p>
    </div>
    <h5>About You</h5>

    <section>
        <div class="table">
            <table>
            <tr>
                <td><strong>User ID</strong></td>
                <td>1</td>
            </tr>
            <tr>
                <td><strong>Name</strong></td>
                <td><?php echo $roW['Name'];?></td>
            </tr>
            <tr>
                <td><strong>Email</strong></td>
                <td><?php echo $roW['Email'];?></td>
            </tr>
            <tr>
                <td><strong>Status</strong></td>
                <td>Active</td>
            </tr>
            <tr>
                <td><strong>Signup Date</strong></td>
                <td></td>
            </tr>
        </table>
        <a href="update_profile.php"><input type="button" value="Edit Profile"></a>

        </div>
        
        <div class="fropic">
            <form enctype="multipart/form-data" method="post">
                <img src="images/admins/<?php echo $roW['Photo'];?>" alt="img">
                <br>
                <input type="file" name="photo" class="file"><br>
                <input type="submit" name="upload" value="Upload">
            </form>   
        </div>
    </section>
    </main>
    </div>
    
    
    
    <hr>
    <p class="footer">Copyright© 2024 All rights Reserved</p>

</body>
</html>