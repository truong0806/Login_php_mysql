<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Đăng nhập</title>
</head>
<body>
 <form action="Login.php" method="post">
    <h2>Đăng nhập</h2>
        <?php if(isset($_GET['error'])){ ?>
            <p class="error"><?php echo $_GET['error']; ?></p>
        <?php } ?>
        <label>Tên đăng nhập</label>
        <input type="text" name= "uname" placeholder = "Tên đang nhập"><br>
        
        <label>Mật khẩu</label>
        <input type="password" name= "password" placeholder = "Mật khẩu"><br>
        <a class="qmk" href="#">Quên mật khẩu ?</a>
        <button type = "submit">Đăng nhập</button>
    </form>
</body>
</html>