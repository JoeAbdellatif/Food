<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;
use Session;

class UserController extends Controller
{
    //

    public function UserCreate (Request $request)
    {
        $request -> validate([
            'firstname'=> 'required',
            'lastname'=> 'required',
            'password'=> 'max:10 | min :3 | required',
            'email'=> 'required | unique:users',
            'gender'=> 'required',
        ]);
     $verify = User::where('email','=',$request->input('email'))->first();

     if($verify ==null)
     {
       $user=new User();
       $user->firstName=$request->input('firstname');
       $user->lastName=$request->input('lastname');
       $user->email=$request->input('email');
       $user->password= Hash::make($request->input('password'));
       $user->Gender=$request->input('gender');
       $user->RoleId=2;
       if ($request->hasfile('image')) {
        $file = $request->file('image');
        $extension = $file->getClientOriginalExtension();
        $filename = time()."." .$extension;
        $destinationPath = 'uploads/avatar/';
        $file->move($destinationPath, $filename);
        $user->avatar=$filename;
        }
        $user->save();
       return redirect('/');
     }
     else{
       echo 'You are already registered';
     }

    }
    function login(Request $req)
    {
        $validatedData = $req->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $result = User::where('email', $req->input('email'))
            ->get();

        $res = json_decode($result, true);

        if (sizeof($res) == 0) {
            $req->session()->flash('error', 'Email Id does not exist. Please register yourself first');
            echo "Email Id Does not Exist.";
            return redirect('login');
        } else {
            echo "Hello";
            $encrypted_password = $result[0]->password;
            $decrypted_password =  Hash::make($req->input('password'));

            if (password_verify($req->input('password'),$result[0]->password))
            {
                echo "You are logged in Successfully";
                $req->session()->put('userid', $result[0]->id);
                $req->session()->put('useremail', $result[0]->email);
                $req->session()->put('userfirstname', $result[0]->firstName);
                $req->session()->put('userlastname', $result[0]->lastName);
                $req->session()->put('useravatar', $result[0]->avatar);
                $req->session()->put('usergender', $result[0]->Gender);
                $req->session()->put('role',$result[0]->RoleId);
                if($result[0]->RoleId==2){
                    return redirect('/');
                }
                else{
                    return redirect('/Dashboard');
                }
            } else {
                $req->session()->flash('error', 'Password Incorrect!!!');
                echo "Email Id Does not Exist.";
                return redirect()->back()->with('alertLogin','Incorret Username or Password!');
            }
        }
    }
    function getUserById()
    {
        $id = Session::get('userid');
        $user = User::where('id', $id)->first();
        return view('UpdateProfile', compact('user'));
    }
    public function Logout(Request $req){
        $req->session()->flush();
        return redirect('/');
    }
}
