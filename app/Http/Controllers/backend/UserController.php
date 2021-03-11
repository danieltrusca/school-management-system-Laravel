<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function userView()
    {
        $data['users']=User::all();
        return view('backend.users.view_users',$data);
    }

    public function userAdd()
    {
        return view('backend.users.add_users');
    }

    public function userStore(Request $request)
    {
        $validatedData=$request->validate([
            'email'=>'required|unique:users',
            'name'=>'required|max:100'
        ]);

        $newUser=new User();
        $newUser->usertype=$request->usertype;
        $newUser->name=$request->name;
        $newUser->email=$request->email;
        $newUser->password=bcrypt($request->password);

        $newUser->save();

        $notification = array(
    		'message' => 'User Inserted Successfully',
    		'alert-type' => 'success'
    	);

        return redirect()->route('user.view')->with($notification);
    }

    public function userEdit($userId)
    {
        $userToEdit=User::find($userId);
        return view('backend.users.edit_users', compact('userToEdit'));
    }

    public function userUpdate(Request $request, $userId)
    {
        $userToEdit=User::find($userId);

        if($userToEdit){
            // $validatedData=$request->validate([
            //     'email'=>'required|unique:users',
            //     'name'=>'required|max:100'
            // ]);

            $userToEdit->usertype=$request->usertype;
            $userToEdit->name=$request->name;
            $userToEdit->email=$request->email;

            $userToEdit->save();

            $notification = array(
                'message' => 'User Updated Successfully',
                'alert-type' => 'info'
            );

            return redirect()->route('user.view')->with($notification);
        } else {
            $notification = array(
                'message' => 'User Not Found',
                'alert-type' => 'warning'
            );

            return redirect()->route('user.view')->with($notification);
        }


    }

    public function userDelete($userId)
    {
        $userToDelete=User::find($userId);

        if($userToDelete)
        {
            $userToDelete->delete();
            $notification = array(
                'message' => 'User Deleted Successfully',
                'alert-type' => 'info'
            );

            return redirect()->route('user.view')->with($notification);
        } else {
            $notification = array(
                'message' => 'User Not Found',
                'alert-type' => 'warning'
            );

            return redirect()->route('user.view')->with($notification);
        }
    }
}
