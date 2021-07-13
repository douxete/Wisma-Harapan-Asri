<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use DB;
use App\Models\User;

class UserController extends Controller
{
    public function index(){
        $users = DB::table('users')
            ->select('users.id', 'roleusers.description', 'pegawai.nama', 'users.username', 'users.status')
            ->leftJoin('roleusers', 'roleusers.id', 'users.roleid')
            ->leftJoin('pegawai', 'pegawai.id', 'users.pegawaiid')
            ->get();
        return view('admin.dataUser', compact('users'));
    }

    public function create(){
        $role = DB::table('roleusers')->get();
        $pegawai = DB::table('pegawai')->get();
        return view('auth.register', compact('role', 'pegawai'));
    }

    public function store(Request $request){
        $request->validate([
            'roleid' => 'required',
            'pegawaiid' => 'required',
            'username' => 'required|string|max:255|unique:users',
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'roleid' => $request->roleid,
            'pegawaiid' => $request->pegawaiid,
            'username' => $request->username,
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($user));

        return redirect('/admin/dataUser');
    }

    public function edit($id){
        $users = DB::table('users')
            ->select('users.id', 'users.roleid', 'roleusers.description', 'users.pegawaiid', 'pegawai.nama', 'users.username', 'users.status')
            ->where('users.id', $id)
            ->leftJoin('roleusers', 'roleusers.id', 'users.roleid')
            ->leftJoin('pegawai', 'pegawai.id', 'users.pegawaiid')
            ->first();
        // DD($users);
        $role = DB::table('roleusers')->get();
        $pegawai = DB::table('pegawai')->get();
        return view('admin.editUser', compact('users', 'role', 'pegawai'));
    }

    public function update(Request $request){
        $users = User::find($request->id);
        $users->roleid = $request->roleid;
        $users->pegawaiid = $request->pegawaiid;
        $users->username = $request->username;
        $users->status = $request->status;
        $users->save();
        return redirect('/admin/dataUser');
    }

    public function resetpw($id){
        $users = User::find($id);
        return view('auth.reset-password', ['users' => $users]);
    }

    public function updatepw(Request $request, $id){
        $users = User::find($id);
        $users->update(['password' => Hash::make($request->password)]);
        return redirect('/admin/dataUser');
    }
}
