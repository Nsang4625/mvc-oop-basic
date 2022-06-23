<form action="?action=store&&controller=sinhvien" method="post">
    Mã sinh viên 
    <input type="text" name="ma"><br>
    Họ tên
    <input type="text" name="ten"><br>
    Tên lớp 
    <select name="ten_lop" >
        <?php foreach($lops as $lop){ ?>
            <option value="<?php $lop->getMa()?>">
                <?php echo $lop->getTen()?>
            </option>
        <?php } ?>
    </select>
</form>