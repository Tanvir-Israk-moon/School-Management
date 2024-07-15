<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="css/login.css">
    <title>Login</title>
</head>
<body>
    <div class="card">
        <div class="select_type">
        <h1 >login</h1>
        <h3 >Choose Account Type</h3>
        <form action="action/fetch_assoc.php" method="post">
        <div class="user_type">
            <label class="labl">
            <input type="radio" name="radioname" value="admin"/>
            <div class="admin">
                <div class="img"></div>
                <b>Admin</b>
                <span class="tick"></span>
            </div>
            </label>
            

            <label class="labl">
            <input type="radio" name="radioname" value="student"  checked="checked"/>
            <div class="student">
                <div class="img2"></div>
                <b>Student</b>
                <span class="tick"></span>
            </div>
            </label>
            
        </div>
    </div>
    <div class="txt">
        <p class="h_admin" id="h_admin">Hello User</p>
        <p>Please fill out the form below to get started</p>
    </div>
    
    <?php 
    if(isset($_GET['error'])){ ?>

    <div class="alert alert-danger" role="alert">
        <?=$_GET['error']?>
    </div>
    
    <?php }?>
    <div class="form">
    <div class="email">
            <label class="label">Email</label>
            <i class="fa-regular fa-envelope"></i>
            <input type="email" name="email" class="in_email">
        </div>
        
        <div class="password">
            <label class="label2">Password</label>
            <i class="fa-solid fa-key"></i>
            <input type="password" name="password" class="in_password">
            <span><a href="#" class="forget">Forget?</a></span>
        </div>

        <div class="submit">
            <input type="submit" value="Login" name="submit">
        </div>
    </div>
        
        
    </form>

    <div class="no_acc">
    <p>No account? <a href="#">Signup</a></p>
    </div>
    </div>
    

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</html>