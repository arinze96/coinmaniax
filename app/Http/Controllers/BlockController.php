<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlockController extends Controller
{
    public function showBlockedPage(Request $request)
    {
        $user = $request->user();
        return view('customer.blocked',["user"=>$user]);
    }
    public function id_verification(Request $request)
    {
        $user = $request->user();
        return view('customer.id_verify',["user"=>$user]);
    }
}
