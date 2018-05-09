<?php 
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Admin;

class LoginController extends Controller
{
    /**
     * 登陆页面
     */
    public function login(){
//         echo $sites["static"];exit;
//         app('Comm')->test();
        return view('admin/login');
    }
    
    /**
     * 登陆操作
     * @param Request $request 
     */
    public function postLogin(Request $request){
        if($request->session()->has('console')) return $this->returnJson(1,'',array('url'=>route("console.main")));
        $username = $request->input('user');
        $pass = $request->input('pass');
        $user=Admin::where("user",$username)->first();
        if (is_null($user))return $this->returnJson(0,'用户或密码不正确',array('url'=>'http://xy.shop.com/console/login?username='.$username.'&pass='.$pass));
        if($user->pass!=md5(md5($pass))){
            return $this->returnJson(0,'用户或密码不正确',array('url'=>'http://xy.shop.com/console/login?username='.$username.'&pass='.$pass));
        }
        unset($user->pass);
        $request->session()->put("console",$user->toArray());
        $request->session()->save();
        return $this->returnJson(1,'登陆成功',array('url'=>route("console.main")));
    }
    
    /**
     * 登出操作
     * @param Request $request
     * @return \Illuminate\Routing\Redirector|\Illuminate\Http\RedirectResponse
     */
    public function loginOut(Request $request){
        $request->session()->flush();
//      $sessions = $request->session()->all();
//      dd($sessions);
        return redirect("/console/login");
    }
}
?>