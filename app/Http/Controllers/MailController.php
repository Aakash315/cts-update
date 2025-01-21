<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Mail\SendWelcomeMail;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function sendEmail() {
        try{
            $name = "Aakash";
            Mail::to('jaiswalaakash789@gmail.com')->send(new SendWelcomeMail($name));

        }
        catch(Exception $e) {
           
        }
    }
}
