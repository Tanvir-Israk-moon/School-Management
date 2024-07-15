<?php 
$title ="All Users";
include_once('include/head.php');
?>

<link rel="stylesheet" href="css/all_users.css">
<?php include_once('include/header.php') ?>

        <main>
            <div class="head">
                <h1>All Users</h1>
                <p>All Users</p>
            </div>
            <h2>New Students</h2>

            <section>
                
            <div class="entries_search">
                <div class="entries">
                    <p>show</p>
                    <select>
                        <option value="5">5</option>
                        <option value="10">10</option>
                        <option value="20">20</option>
                        <option value="all">All</option>
                    </select>
                    <p>entries</p> 
                </div>
                <div class="search">
                    <p>Search :</p>
                    <input type="search">
                </div>
            </div>
            <table class="table">
                <tr>
                    <td><strong>Name</strong></td>
                    <td><strong>Email</strong></td>
                    <td><strong>Username</strong></td>
                    <td><strong>Photo</strong></td>
                </tr>
                <tr>
                    <td>Tanvir</td>
                    <td>tanvir123@gmail.com</td>
                    <td>tanvir123</td>
                    <td><img src="images/oldman.png" alt="img"></td>
                </tr>
                <tr>
                    <td>Ruhani</td>
                    <td>ruhani123@gmail.com</td>
                    <td>ruhani123</td>
                    <td><img src="images/oldman.png" alt="img"></td>
                </tr>
            </table>
            
            <div class="show_entries">
                <span><p>Showing 1 to 2 of 2 entries</p></span>
                <div class="🤐"><input type="button" value="Previous"><b>1</b><input type="button" value="Next"></div>
        </div>
        </section>
    </main>
        
    </div>
    
    
    
    <hr>
    <p class="footer">Copyright© 2024 All rights Reserved</p>
</body>
</html>