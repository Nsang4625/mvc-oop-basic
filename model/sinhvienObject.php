<?php
class sinhvienObject{
    private $ma;
    private $ten;
    private $ma_lop;
    private $ten_lop;
    public function __construct($row)
    {
        $this->ma = $row['ma'];
        $this->ten = $row['ten'];
        $this->ma_lop = $row['ma_lop'];
        $this->ten_lop = $row['ten_lop'] ?? '';
    }

    public function getMa(){
        return $this->ma;
    }
    public function getTen(){
        return $this->ten;
    }


    public function setTen($ten)
    {
        $this->ten = $ten;
        return $this;
    }


    public function setMa($ma)
    {
        $this->ma = $ma;

        return $this;
    }
    public function getMa_lop(){
        return $this->ma_lop;
    }


    public function setMa_lop($ma_lop)
    {
        $this->ma_lop = $ma_lop;
        return $this;
    }
    public function setTen_lop(){
        return $this->ma_lop;
    }
}