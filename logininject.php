<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Login</title>
    </head>
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <body class="bg-white">
        <div class="card-header"><h3 class="text-center font-weight-light my-4">Login Inject</h3></div>
        <div class="card-body">
            <form method="post">
                <div class="form-grup">
                    <input class="form-control" id="inputUsername" name="username" type="text" placeholder="Enter Username" />
                    <label for="inputUsername">Username</label>
                </div>
                <div class="form-grup">
                    <input class="form-control" id="inputPassword" name="password" type="password" placeholder="Password" />
                    <label for="inputPassword">Password</label>
                </div>
                <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                    <button type="submit" name="login" class="btn btn-primary" href="index.html">LoginIject</button>
                </div>
            </form>
            <div><a href="login.php">Login</a></div>
            <?php
            include ('koneksi.php');
            //login
            if(isset($_POST['login'])){
                //variable
                $username = $_POST['username'];
                $password = $_POST['password'];
                // $username = mysqli_real_escape_string($koneksi, $_POST['username']);
                // $password = mysqli_real_escape_string($koneksi, $_POST['password']);
                $datas = mysqli_query($koneksi, "SELECT * FROM user WHERE username='{$username}' and password='{$password}'");
                //SELECT * FROM user WHERE username='yyy' OR 1=1 LIMIT 1 -- ' AND password='xxx'
                $hitung = mysqli_num_rows($datas);
                if($hitung>0){
                    $_SESSION['login'] = 'true';
                    header('location:home.php');
                } else {
                    echo '<script>alert("username dan password salah");
                    window.location.href="login.php"</script>';
                }
            }
            ?>
        </div>           
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>
