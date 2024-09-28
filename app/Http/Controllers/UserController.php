<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Acc;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function userControl(Request $request, String $formType)
    {
        if ($formType === 'login') {
            return $this->login($request);
        } elseif ($formType === 'signup') {
            return $this->store($request);
        }
        
        // Handle unknown formType or return a 404 if not handled
        abort(404);
    }
    
    public function store(Request $request)
    {
        // Validate the request
        $request->validate([
            'email' => 'required|email|unique:accs,email',
            'password' => 'required|min:6', // Add validation for password
        ]);
    
        // Create a new user
        $user = Acc::create([
            'firstname' => $request->firstName,
            'lastname' => $request->lastName,
            'role' => 'user',
            'profile' => '',
            'email' => $request->email,
            'password' => bcrypt($request->password), // Hash the password
        ]);
    
        // Store user details in session
        session([
            'userId' => $user->id,
            'firstname' => $request->firstName,
            'lastname' => $request->lastName,
            'email' => $request->email,
            'role' => $user->role,
        ]);
    
        // Redirect to home
        return redirect()->route('home');
    }
    
    public function login(Request $request)
    {
        // Validate the request
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
    
        // Find the user by email
        $user = Acc::where('email', $request->email)->first();

        // Check if user exists and password is correct
        if (Hash::check($request->password, $user->password)) {
            // Store user details in session
            session([
                'userId' => $user->id,
                'firstname' => $user->firstname,
                'lastname' => $user->lastname,
                'profile' => $user->profile,
                'email' => $user->email,
                'role' => $user->role,
            ]);
            return redirect()->route('home');
        }  else {
            // Redirect back with error message
            return redirect()->back()->withErrors(['password' => 'Your password or email is incorrect.']);
        }
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
        
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $user = Acc::find($id);
        // $request->validate([
        //     'profileImage' => 'mimes:jpeg,png,jpg,gif,svg',
        // ]);

        $image = $request->file('profileImage');
        if ($image !== null){
            $imageName = uniqid().' '.$image->getClientOriginalName();
            $image->storeAs('public/AccImages', $imageName);
            $user->profile = $imageName;
            session(['profile' => $imageName]);
        }

        $user->firstname = $request->firstName;
        $user->lastname = $request->lastName;
        $user->email = $request->email;
        
        $user->save();

        session([
            'userId' => $user->id,
            'firstname' => $request->firstName,
            'lastname' => $request->lastName,
            'email' => $request->email,
            'password' => $request->password,     
            'role' => $user->role
        ]);
        return redirect()->route('editProfile', ['id' => $user->id])->with('success', 'Profile image updated successfully.');

    }
    public function destroy(string $id)
    {
        $user = Acc::find($id);
        $user->delete();
        session()->flush();
        return redirect()->route('home');
    }
    public function logout()
    {
        session()->flush();
        return redirect()->route('home');
    }
}
