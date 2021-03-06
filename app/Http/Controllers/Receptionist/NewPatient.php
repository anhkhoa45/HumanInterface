<?php


namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Storage;

class NewPatient extends Controller
{
    /**
     * admin dashboard
     */
    public function index()
    {
        return view('receptionist.dashboard');
    }
    public function checkin()
    {
        return view('receptionist.checkin');
    }

    public function checkout()
    {
        return view('receptionist.checkout');
    }

    public function pay_for_test()
    {
        return view('receptionist.pay_for_test');
    }
    public function getAudio($filename){
        $fileContents = Storage::disk('local')->get('HI_06/audio/'.$filename);
        $response = Response::make($fileContents, 200);
        $response->header('Content-Type', "audio/mpeg");
        return $response;

    }
}
