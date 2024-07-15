<?php 
$title ="All Students";
include_once('include/head.php');
?>

<link rel="stylesheet" href="css/all_students.css">
<?php include_once('include/header.php');

$Students = "SELECT * FROM `students`";
$StudentsData = $conn->query($Students);

?>

    <main>
    <div class="head">
        <h1>All Students</h1>
        <p>All Students</p>
    </div>

    <section>
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
                    <td>Action</td>
                </tr>
                <?php while ($totalStudents = mysqli_fetch_assoc($StudentsData)) { ?>
                <tr>
                    <td><?php echo $totalStudents['ID'];?></td>
                    <td><?php echo $totalStudents['Name'];?></td>
                    <td><?php echo $totalStudents['Roll'];?></td>
                    <td><?php echo $totalStudents['Class'];?></td>
                    <td><?php echo $totalStudents['City'];?></td>
                    <td><?php echo $totalStudents['Contact'];?></td>
                    <td class="img" style="background-image: url(images/students/<?php echo $totalStudents['Photo'];?>);" ></td> 
                    <td>
                        <a href="edit_students.php?id=<?php echo $totalStudents['ID'];?>" class="edit_btn">Edit</a> 
                        <a href="delete_students.php?id=<?php echo $totalStudents['ID'];?>" class="delete_btn">Delete</a>                     
                    </td>
                </tr>
                <?php } ?>
            </table>
            
        </div>
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