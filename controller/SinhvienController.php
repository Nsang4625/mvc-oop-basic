<?php

class SinhvienController{
    public function index(): void
    {
        require 'model/sinhvien.php';
        $arr = (new sinhvien()) -> all();
        require 'view/sinhvien/index.php';
    }
    public function create() : void {
        require 'model/lop.php';
        $lops = (new lop()) -> all();
        require 'view/sinhvien/create.php';
    }
    public function store(){
        require 'model/sinhvien.php';
        (new sinhvien()) -> create($_POST);   
    }
    public function edit() : void {
        $ma = $_GET['ma'];
        require 'model/sinhvien.php';
        $each = (new sinhvien()) -> find($ma);
        require 'view/sinhvien/edit.php';
    }
    public function update() : void {

        require 'model/sinhvien.php';
        (new sinhvien()) -> update($_POST);
        
    }
    public function delete():void{
        $ma = $_POST['ma'];
        require 'model/sinhvien.php';
        (new sinhvien())-> destroy($ma);
    }
}