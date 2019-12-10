<?php // Code within app\Helpers\Helper.php
namespace App\Helpers;
use App\User;
use Mail;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
class Helper{
    public static function sendContactFormEmail(){
    	$name =  Input::get('name');
    	$from =  Input::get('from');
    	$msg =   Input::get('msg');
		$msg= "<b>Message: </b>".$msg."<br><br><br><b>Name: </b>".$name."<br><b>From: </b>".$from;
         Mail::send('emails.contactform', ['msg' => $msg], function ($m){
            $m->to('rakshyabista25@gmail.com', 'user')->subject('Contact form- HBWSCN');
        });
        return Redirect::back()->with('success_message','Your message has been sent.');
    }

/*currently working from backup controller
 purpose of making Backup controller is to manage multiple backup options like backing up/restoring selected tables, files etc but have not done*/

    public function fullDownload(){     
        Artisan::call('backup:run');
    } 

}