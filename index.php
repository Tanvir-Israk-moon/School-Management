<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Management</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/index.css">
</head>
<body>
    <nav>
        <div class="nav"><a href="login.php">Login</a></div>
        
    </nav>
    <h1 class="heading">Welcome to Student Management System</h1>
    <table class="table">
        <th colspan="6">Student Information</th>
        <tr>
            <td>Choose class</td>
            <td><select name="" id="">
                <option value="Select Class">Select Class</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Roll Number</td>
            <td><input type="text" placeholder="Type Your Roll"></td>
        </tr>
        <th colspan="6"><input type="submit" value="Show Info" class="submit"></th>
    </table>
    <table class="table ">
        <tbody class="result">
            <td rowspan="6" class="img"></td>
        <tr>
            <td><strong>Name</strong></td>
            <td>Tanvir</td>
        </tr>
        <tr>
        <td><strong>Roll</strong></td>
        <td>650</td>
        </tr>
        <tr>
        <td><strong>Class</strong></td>
        <td>9</td>
        </tr>
        <tr>
        <td><strong>City</strong></td>
        <td>Khulna</td>
        </tr>
        <tr>
        <td><strong>Contact Number</strong></td>
        <td>+8801840585430</td>
        </tr>
        </tbody>       
</table>
<div class="list2">
    <a href="index.php"><i class="fa-solid fa-magnifying-glass"></i>Search</a>
    <a href="dashbord.php"><i class="fa-solid fa-chart-pie"></i>Dashboard</a>
</div>

<p class="footer">Copyright© 2024 All rights Reserved</p>
</body>
</html>