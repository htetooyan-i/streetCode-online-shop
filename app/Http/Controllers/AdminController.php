<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Acc;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $accs = Acc::all();
        return view('admin/admin-home');
    }
    public function userTable(){
        
        $accs = Acc::all();
        return view('admin/admin-user-table',['accs' => $accs]);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin/create-acc');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required|email|unique:accs,email',
            'password' => 'required|min:6', // Add validation for password
        ]);
    
        // Create a new user
        $user = Acc::create([
            'firstname' => $request->firstName,
            'lastname' => $request->lastName,
            'role' => $request->role,
            'profile' => '',
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);
    
        // Redirect to home
        return redirect()->route('userTable');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = Acc::find($id);
        $user->delete();
        return redirect()->back();
    }
}
