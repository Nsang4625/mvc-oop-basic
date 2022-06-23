<?php
require_once 'model/connect.php';
require 'model/lopObject.php';
class lop{
    
    public function all(){
        
        $sql = "SELECT * from lop";
        $result = (new Connect()) -> select($sql);

        $arr = [];
        foreach($result as $row){
            $object = new lopObject($row);
            $arr[] = $object;
        }
        
        return $arr;
    }
    public function create($params){
        $object = new lopObject($params);
        $sql = "INSERT into lop(ma, ten) values ('{$object->getMa()}', '{$object->getTen()}')";
        $result = (new Connect()) -> select($sql);
    }
    public function find($ma): object{
        
        $sql = "SELECT * from lop where ma = '$ma'";
        $result = (new Connect()) -> select($sql);
        $each = mysqli_fetch_array($result);// hàm này kh ràng buộc bởi connect(tức kh bắt buộc bật) 

        $object = new lopObject($each);
       
        
        return $object;
    }
    public function update($params):void{
        $object = new lopObject($params);
        ;
        
        $sql = "UPDATE lop set ten ='$object -> ten' where ma = '$object -> getMa'";   
        (new Connect())->execute($sql);
    }
    public function destroy($ma):void{
        $sql = "DELETE from lop where ma = '$ma'";
        (new Connect())->execute($sql);
    }
}