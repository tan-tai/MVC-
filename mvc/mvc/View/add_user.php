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
            <td><input type="text" name="fullname"></td>
        </tr>
        <tr>
            <td>Username:</td>
            <td><input type="text" name="username"></td>
        </tr>
        <tr>
            <td>Password:</td>
            <td><input type="text" name="password"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="add_user" value="submit"></td>
        </tr>
    </table>
    </form>
    <?php
    //kiểm tra có mảng chứa message thành công , nếu có thì hiển thị
        if(isset($success)&& in_array('add_success',$success)) {
            echo"<p style='color:green'>Tạo người dùng thành công</p>";
        }
     ?>

    <a href="index.php?controller=user">Xem danh sách</a>
</body>
</html>