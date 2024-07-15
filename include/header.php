<?php 
$emaiL = $_SESSION["e1m2a3i4l5"];
$userSQL = "SELECT * FROM `users` WHERE `Email` = '$emaiL'";
$UserData = $conn->query($userSQL);
$roW = mysqli_fetch_assoc($UserData);
?>

<body>
<nav>
        <h1>Student Management System</h1>
        <div class="nav2">
        <a href="index.php" class="search2"><i class="fa-solid fa-magnifying-glass search"></i>Search</a>
        <a href="dashbord.php"><i class="fa-solid fa-crown"></i>Welcome <?php echo $roW['Name'];?></a>
        <a href="user_profile.php"><i class="fa-solid fa-user"></i>Profile</a>
            <a href="logout.php"><i class="fa-solid fa-right-from-bracket"></i>Logout</a>
        </div>
    </nav>
    <div class="list_main">
    <div class="list">
        <ul>
        <a href="dashbord.php"><li><i class="fa-solid fa-gauge-high" id="GFG"></i>Dashboard</li></a>
        <a href="Add_Students.php"><li><i class="fa-solid fa-user-plus" id="GFG"></i>Add Student</li></a>
        <a href="#"><li><i class="fa-solid fa-user-pen" id="GFG"></i>Edit Student</li></a>
        <a href="all_students.php"><li><i class="fa-solid fa-users-line" id="GFG"></i>All Student</li></a>
        <a href="all_users.php"><li><i class="fa-solid fa-people-roof" id="GFG"></i>All Users</li></a>
    </ul>
    </div>