<?php
namespace App\Http\Controllers;
use App\Http;
use App\Http\Controllers\Controller;
class TestController extends Controller{
    public function __invoke(){
        echo 'test ¿ØÖÆÆ÷';
    }
}