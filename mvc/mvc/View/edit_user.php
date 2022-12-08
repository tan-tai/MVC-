<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Thêm mới người dùng</h1>
    <form action="" method="POST">

    <table>
        <tr>
            <td>Fullname:</td>
            <td><input type="text" name="fullname" value="<?php echo $user['fullname']?>"></td>
        </tr>
        <tr>
            <td>Username:</td>
            <td><input type="text" name="username" value="<?php echo $user['username']?>"></td>
        </tr>
        <tr>
            <td>Password:</td>
            <td><input type="text" name="password" value="<?php echo $user['password']?>"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="edit_user" value="submit"></td>
        </tr>
    </table>
    </form>


    <a href="index.php?controller=user">Xem danh sách</a>
</body>
</html>