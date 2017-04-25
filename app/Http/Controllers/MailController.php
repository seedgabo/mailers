<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Config;
use App\Mail\miamicre;
class MailController extends Controller
{
    public function miamicremail(Request $request){
        $data = $request->input('data');
        Log::debug($request->all());
        if(!isset($data)){
            return "ok";
        }
        $email  = $data["merges"]["EMAIL"];
        $name   = $data['merges']['FNAME'];
        $title = "MIAMI CRE INVESTMENTS";
        Config::set('mail.from.address','support@miamicreinvestments.com');
        Config::set('mail.from.name','Guilherme');
        Config::set('mail.MAIL_HOST','smtp.office365.com');
        Config::set('mail.MAIL_PORT','587');
        Config::set('mail.MAIL_USERNAME','support@miamicreinvestments.com');
        Config::set('mail.MAIL_PASSWORD','Gca101977');
        Config::set('mail.MAIL_ENCRYPTION','tls');
        try {

        Mail::to($email)
        ->send(new miamicre($email,$name,$title,"Welcome Message" ,$data));
        return response()->json(['response' => 'true', "enviado a " => $email]);
        }
        catch (Exception $e){
            log::debug("error" . $e->getMessage());
            return "error";
        }
    }
}
