<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Key;

class KeyController extends Controller
{
    public function generateKey()
    {
        $key = Key::generateKey();
        Key::create(['key' => $key]);
        return response()->json(['key' => $key]);
    }

    public function verifyKey(Request $request)
    {
        $key = Key::where('key', $request->key)->first();

        if ($key && $key->status == 'active') {
            $key->status = 'used';
            $key->save();

            return response()->json(['status' => 'success'], 200);
        }

        return response()->json(['status' => 'fail'], 400);
    }
}
