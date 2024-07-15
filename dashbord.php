<?php 
$title ="Dashboard";
include_once('include/head.php');

?>

<link rel="stylesheet" href="css/dashboard.css">

<?php include_once('include/header.php');

$users = "SELECT * FROM `users`";
$UsersData = $conn->query($users);
$totalUsers = mysqli_num_rows($UsersData);

$students = "SELECT * FROM `users` WHERE `Role` = 'student'";
$studentsData = $conn->query($students);
$studentsUsers = mysqli_num_rows($studentsData);
?>


    <div class="status">
        <header>
            <h2><i class="fa-solid fa-chart-pie"></i>Dashboard</h2>
            <p>Statistics Overview</p>
        </header>
        <h4 class="mini_dash"><i class="fa-solid fa-gauge-high"></i>Dashboard</h4>
        <main style="margin-bottom:25px;">
            <div class="card">
                <div class="card1">
                    <div class="view_all_users">
                    <div class="view_all_users_icon">
                        <i class="fa-solid fa-users users_icon"></i>
                    </div>
                    <div class="users_count">
                        <h1><?php echo $totalUsers;?></h1>
                        <h5>All Users</h5>
                    </div>
                </div>
                
                <div class="users_btn">
                    <a href="all_users.php" class="users_btn_txt">
                            View All Users
                    </a>
                    <a href="all_users.php" class="users_btn_icon">
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>
                    
                </div>
                </div>
                <div class="card1">
                    <div class="view_all_users">
                    <div class="view_all_users_icon">
                        <i class="fa-solid fa-graduation-cap"></i>
                    </div>
                    <div class="users_count">
                        <h1><?php echo $studentsUsers;?></h1>
                        <h5>All Students</h5>
                    </div>
                </div>
                
                <div class="users_btn">
                    <a href="all_students.php" class="users_btn_txt">
                            View All Students
                    </a>
                    <a href="all_students.php" class="users_btn_icon">
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>
                    
                </div>
                </div>
            </div>    
        </main>
        
    </div>
    </div>
    
    <hr>
    <section>
        <div class="section">
            <h1>New Students</h1>
            <div class="entries_search">
                <div class="entries">
                <i>show</i>
                <select>
                    <option value="5">5</option>
                    <option value="10">10</option>
                    <option value="20">20</option>
                    <option value="all">All</option>
                </select>
                <i>entries</i> 
            </div>
            <div class="search">
                <b>Search :</b>
                <input type="search">
            </div>
            </div>
            
        </div>
        <div class="table">
            <table>
                <tr>
                    <td>ID</td>
                    <td>Name</td>
                    <td>Roll</td>
                    <td>Class</td>
                    <td>City</td>
                    <td>Contact</td>
                    <td>Photo</td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Tanvir</td>
                    <td>650</td>
                    <td>9</td>
                    <td>Khulna</td>
                    <td>+8801840585430</td>
                    <td><img src="images/oldman.png" alt="img"></td> 
                </tr>
                <tr>
                    <td>2</td>
                    <td>Ruhani</td>
                    <td>35</td>
                    <td>2</td>
                    <td>Khulna</td>
                    <td>+8801788756867</td>
                    <td><img src="images/oldman.png" alt="img"></td>
                </tr>
            </table>
        </div>

        
    </section>
    <p class="footer">Copyright© 2024 All rights Reserved</p>

    
</body>
</html>