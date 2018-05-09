<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function __construct(){
         redirect("/console/login");
        empty(session("console")) && ( redirect("/console/login"));//验证是否登陆
    }
    
    /**
     * 主体
     */
    public function m(){
        return view("admin/main");
    }
    /**
     * 头部
     */
    public function t(){
        return view("admin/top");
    }
    /**
     * 左部菜单
     */
    public function l(){
        return view("admin/left");
    }
    
    /**
     * 首页
     */
    public function index(){
        return view("admin/index");
    }
    
    
    
    
}