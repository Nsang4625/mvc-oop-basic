<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách lớp</title>
</head>
<body>
    <a href="?action=create">Thêm</a>
    <table>
        <tr>
            <th>Mã lớp</th>
            <th>Tên lớp</th>
            <th>Sửa</th>
            <th>Xoá</th>
        </tr>
        <?php foreach($arr as $row){?>
            <td><?php echo $row -> getMa() ?></td>
            <td><?php echo $row -> getTen()?></td>
            <td><a href="?action=edit&ma=<?php echo $row -> getMa()?>">Sửa</a></td>
            <td><a href="?action=deletema=<?php echo $row -> getMa()?>">Xoá</a></td>
        <?php } ?>
    </table>
</body>
</html>