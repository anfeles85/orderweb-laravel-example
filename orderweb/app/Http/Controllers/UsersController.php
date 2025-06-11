<?php

namespace App\Http\Controllers;

use App\Mail\UsersMailable;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::where('role_id', 2)->get();
        return view('users.index', compact('users'));
    }

    public function send_email(Request $request)
    {
        $supervisor = User::find($request['user_id']);
        Mail::to($supervisor->email)->send(new UsersMailable($supervisor, $request['content']));
        session()->flash('message', 'Correo enviado exitosamente');
        return redirect()->route('users.index');
    }

    
}
