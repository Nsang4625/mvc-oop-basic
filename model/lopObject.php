<?php
class lopObject{
private $ma;
private $ten;

public function __construct($row)
{
    $this->ma = $row['ma'];
    $this->ten = $row['ten'];
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
}