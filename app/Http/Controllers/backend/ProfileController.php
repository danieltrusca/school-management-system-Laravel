<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class ProfileController extends Controller
{
    public function ProfileView()
    {
        $id=Auth::user()->id;
        $user=User::find($id);

        return view('backend.users.view_profile',compact('user'));
    }

    public function ProfileEdit()
    {
        $id = Auth::user()->id;
    	$editData = User::find($id);
    	return view('backend.users.edit_profile',compact('editData'));
    }

    public function ProfileStore(Request $request)
    {
        $data = User::find(Auth::user()->id);
    	$data->name = $request->name;
    	$data->email = $request->email;
    	$data->mobile = $request->mobile;
    	$data->address = $request->address;
    	$data->gender = $request->gender;

        if ($request->file('image')) {
    		$file = $request->file('image');
    		@unlink(public_path('upload/user_image/'.$data->image));
    		$filename = date('YmdHi').$file->getClientOriginalName();
    		$file->move(public_path('upload/user_image'),$filename);
    		$data['image'] = $filename;
    	}
    	$data->save();

    	$notification = array(
    		'message' => 'User Profile Updated Successfully',
    		'alert-type' => 'success'
    	);

    	return redirect()->route('profile.view')->with($notification);
    }
}
