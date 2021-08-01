<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Throwable;

class AdminController extends Controller
{
    public function dashboard(){
        date_default_timezone_set('Europe/Warsaw');
        try {
            $weather = Http::get('http://api.openweathermap.org/data/2.5/weather?q=Legnica&appid=0e34f2ba8295f5551be27eaf6245994b')->json();
            return view('admin.dashboard',compact('weather'));
        }catch (Throwable $e) {
            return view('peoples.index');
        }

    }
}
