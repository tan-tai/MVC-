<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Danh sách</h1>
    <a href="index.php?controller=user&action=add"> Thêm mới</a>
    <table>
        <thead>
            <tr>
                <th>Fullname</th>
                <th>Username</th>
                <th>Password</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            if(!empty($data)) {
                foreach($data as $value) {
             ?>
                <tr>
                    <td><?php echo $value['fullname']?></td>
                    <td><?php echo $value['username']?></td>
                    <td><?php echo $value['password']?></td>
                    <td>
                        <a href="index.php?controller=user&action=edit&id=<?php echo $value['id']?>">Edit</a>
                        <a  href="index.php?controller=user&action=delete&id=<?php echo $value['id']?>">Delete</a>
                    </td>
                </tr>
            <?php 
                
                }
            }
             ?>
        </tbody>
    </table>
</body>
</html>