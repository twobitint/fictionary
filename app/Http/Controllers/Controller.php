<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Str;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function welcome(Request $request)
    {
        $room = $request->input('room');

        if (!$room) {
            return view('welcome');
        }

        session()->put('room', Str::upper($room));
        return redirect()->route('app');
    }

    public function app()
    {
        return view('app', [
            'room' => session('room'),
        ]);
    }
}
