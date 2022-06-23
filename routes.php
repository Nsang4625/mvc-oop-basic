<?php
include 'controller/LopController.php';
require 'controller/Controller.php';
require 'controller/SinhvienController.php';
$action = $_GET['action'] ?? 'index';
$controller = $_GET['controller'] ?? 'base';

switch($controller){
    case 'base':
        (new controller()) -> menu();
        break;
    case 'lop':
        switch($action){
            case 'index':
                (new LopController()) -> index();
                break;
            case 'create':
                (new LopController()) -> create();
                break;
            case 'store':
                (new LopController()) -> store();
                break;
            case 'edit':
                (new LopController()) -> edit();
                break;
            case 'update':
                (new LopController()) -> update();
                break;
            case 'delete':
                (new LopController()) -> delete();
                break;
            default:
                echo 'không tồn tại action này';
                break;
        }
        case 'sinhvien':
            switch($action){
                case 'index':
                    (new SinhvienController()) -> index();
                    break;
                case 'create':
                    (new SinhvienController()) -> create();
                    break;
                case 'store':
                    (new SinhvienController()) -> store();
                    break;
                case 'edit':
                    (new SinhvienController()) -> edit();
                    break;
                case 'update':
                    (new SinhvienController()) -> update();
                    break;
                case 'delete':
                    (new SinhvienController()) -> delete();
                    break;
                default:
                    echo 'không tồn tại action này';
                    break;
            }
}
