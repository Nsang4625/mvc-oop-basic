<?php
require_once 'model/connect.php';
require 'model/sinhvienObject.php';
require 'model/lop.php';
class sinhvien{
    private $table = 'sinh_vien';

    public function all(): array
    {
        
        $sql = "SELECT t.*, lop.ten as ten_lop
        from $this->table as t join lop
        on t.ma_lop = lop.ma";
        $result = (new Connect()) -> select($sql);

        $arr = [];
        foreach($result as $row){
            $object = new sinhvienObject($row);
            
            $arr[] = $object;
        }
        
        return $arr;
    }
    public function create($params){
        $object = new sinhvienObject($params);
        $sql = "INSERT into $this->table(ma, ten, ma_lop) values ('{$object->getMa()}', 
        '{$object->getTen()}', '{$object->getMa_lop()}')";
        $result = (new Connect()) -> select($sql);
    }
    public function find($ma): object{
        
        $sql = "SELECT * from $this->table where ma = '$ma'";
        $result = (new Connect()) -> select($sql);
        $each = mysqli_fetch_array($result);// hàm này kh ràng buộc bởi connect(tức kh bắt buộc bật) 

        $object = new sinhvienObject($each);
       
        
        return $object;
    }
    public function update($params):void{
        $object = new sinhvienObject($params);
        ;
        
        $sql = "UPDATE $this->table set ten ='$object -> ten' where ma = '$object -> getMa'";   
        (new Connect())->execute($sql);
    }
    public function destroy($ma):void{
        $sql = "DELETE from $this->table where ma = '$ma'";
        (new Connect())->execute($sql);
    }
}