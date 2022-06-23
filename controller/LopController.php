<?php

class LopController{
    public function index(): void
    {
        require 'model/lop.php';
        $arr = (new lop()) -> all();
        require 'view/lop/index.php';
    }
    public function create() : void {
        require 'view/lop/create.php';
    }
    public function store(){

        
        require 'model/lop.php';
        (new lop()) -> create($_POST);
        
    }
    public function edit() : void {
        $ma = $_GET['ma'];
        require 'model/lop.php';
        $each = (new lop()) -> find($ma);
        require 'view/lop/edit.php';
    }
    public function update() : void {

        require 'model/lop.php';
        (new lop()) -> update($_POST);
        
    }
    public function delete():void{
        $ma = $_POST['ma'];
        require 'model/lop.php';
        (new lop())-> destroy($ma);
    }
}