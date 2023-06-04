<?php

namespace App\Helpers;

class Alert
{
    public static function SetSuccessMessage(string $message)
    {
        
        session()->flash("message:success", $message);
    }
    public static function SetErrorxMessage(string $message)
    {
        
        session()->flash("message:error", $message);
    }
    public static function SetInfoMessage(string $message)
    {
        
        session()->flash("message:info", $message);
    }
}
