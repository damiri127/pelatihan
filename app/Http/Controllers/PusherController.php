<?php

namespace App\Http\Controllers;

use App\Events\PusherBroadcast;
use Illuminate\Http\Request;

class PusherController extends Controller
{
    public function index(){
        return view('kemahasiswaan.message.index');
    }

    public function broadcast(Request $request){
        broadcast(new PusherBroadcast($request->get('message')))->toOthers();

        return view('recieve', ['message' => $request->get('message')]);
    }


    public function receive(Request $request){
        return view('recieve', ['message' => $request->get('message')]);
    }


}
