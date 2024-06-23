<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use function Laravel\Prompts\alert;

class AdminController extends Controller
{
    public function fetchData() {
        $dataUsers = User::all();
        return view('pages.home' , compact('dataUsers'));
    }


    public function addData(Request $request) {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'line' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'birthdate' => 'required',
            'profile_picture' => 'required',
            'qualification' => 'required',
            'graduation_year' => 'required',
        ]);

        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
            'line' => $request->line,
            'phone' => $request->phone,
            'address' => $request->address,
            'birthdate' => $request->birthdate,
            'profile_picture' => $request->profile_picture,
            'qualification' => $request->qualification,
            'graduation_year' => $request->graduation_year,
        ];

        DB::table('users')->insert($data);
        $dataUsers = User::all();
        return view('pages.home' , compact('dataUsers'));
    }


    public function editData($id) {
        $dataEdit = User::find($id);
        return view('pages.edit', compact('dataEdit'));
    }
    
    public function updateData(Request $request, $id) {
        $dataUser = User::find($id);

        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'line' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'birthdate' => 'required',
            'profile_picture' => 'required',
            'qualification' => 'required',
            'graduation_year' => 'required',
        ]);

        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
            'line' => $request->line,
            'phone' => $request->phone,
            'address' => $request->address,
            'birthdate' => $request->birthdate,
            'profile_picture' => $request->profile_picture,
            'qualification' => $request->qualification,
            'graduation_year' => $request->graduation_year,
        ];

        $dataUser->update($data);
        return redirect()->route('fetchData');
    }



    public function deleteData($id) {
        User::find($id)->delete();
        return redirect()->route('fetchData');
    }
}
