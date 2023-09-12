<?php

namespace App\Http\Controllers;

use App\Models\ContactUs;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    public function create(Request $request){
        $val = Validator::make($request->all(), [
            'name' => ['required'],
            'email' => ['required', 'email:rfc,dns'],
            'message' => ['required']
        ]);

        if ($val->fails()) {
            return response()->json(["code" => 400]);
        }

        ContactUs::create([
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message,
        ]);

        return response()->json(["code" => 200]);
    }

    public function read(){
        $messages = ContactUs::all();

        return $messages;
    }
}
