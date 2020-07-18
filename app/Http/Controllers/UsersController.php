<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UsersController extends Controller
{
    //
    public function index() {

    	$users = DB::table('users')->paginate(10);

    	return view('users', ['users' => $users]);
    }

    public function hapus($id) {
    	DB::table('users')->where('id_user', $id)->delete();

    	return redirect('users');
    }
}
