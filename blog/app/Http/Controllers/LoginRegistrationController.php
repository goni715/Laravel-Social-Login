<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Session;

class LoginRegistrationController extends Controller
{

    function Logout(Request $request){
        $request->Session()->flush();
        return redirect('/');
    }
    

    function CallGitHub(){
        $CallGithubLoginService = Socialite::driver('github')->redirect();
        return $CallGithubLoginService;
    }


    function GitHubCallBack(){
        $user = Socialite::driver('github')->stateless()->user();
        
        $token = $user->token;
        $userId = $user->getId();
        $nickName = $user->getNickname();
        $name = $user->getName();
        $email = $user->getEmail();
        $img = $user->getAvatar();

        Session::put('token', $token);
        Session::put('userId', $userId);
        Session::put('nickName', $nickName);
        Session::put('name', $name);
        Session::put('email', $email);
        Session::put('img', $img);



        $countValue = DB::table('users')->where('email','=',$email)->count();

        if($countValue==0){
            DB::table('users')->insert([
                'name'=>$name,
                'email'=>$email,
                'user_id'=>$userId,
                'nick_name'=>$nickName
            ]);


             return redirect('/dashboard');
    

        }else{

              return redirect('/dashboard');

        }




         
    }





}
