<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Laravel\Socialite\Facades\Socialite;

class LoginRegistrationController extends Controller
{
    
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
       

        $countValue = DB::table('users')->where('email','=',$email)->count();

        if($countValue==0){
            DB::table('users')->insert([
                'name'=>$name,
                'email'=>$email,
                'user_id'=>$userId,
                'nick_name'=>$nickName
            ]);
    

        }




         
    }





}
