<form action="?action=update&&controller=sinhvien" method="post">
    <input type="hidden" name="ma" value="<?php $each -> getMa()?>">
    <br>
    Tên sinh viên 
    <input type="text" name="ten" value ="<?php $each -> getTen()?>">
    <br>
    Tên lớp 
    <select name="ten_lop" >
        <?php foreach($lops as $lop){ ?>
            <option value="<?php $lop->getMa()?>">
                <?php echo $lop->getTen()?>
            </option>
        <?php } ?>
    </select>
</form>