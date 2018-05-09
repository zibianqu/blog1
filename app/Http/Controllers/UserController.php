<?php
namespace App\Http\Controllers;
use App\Http;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\URL;
class UserController extends Controller{
    
    public function show($id=0){
//         $this->middleware('auth');
//         echo "usercontroller控制器中的show方法".$id;
//         echo URL::current();
//         echo route('post.show',['post'=>1]);
        echo action('UserController@show',['id'=>1]);
        return view('one', ['name' => 'James']);
        
    }
}