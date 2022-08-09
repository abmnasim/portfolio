<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AdminController extends Controller
{

    /**
     * Destroy an authenticated session.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        $notification = array(
            'message' => "User logged out Successfully",
            'alert-type' => 'success'
        );

        return redirect('/login')->with($notification);
    }

    public function profile() {
        $id = Auth::user()->id;
        $adminData = User::find($id);
        return view('admin.profile', compact('adminData'));
    }

    public function editprofile() {
        $id = Auth::user()->id;
        $editData = User::find($id);
        return view('admin.profile-edit', compact('editData'));
    }

    public function store(Request $request) {
        $id = Auth::user()->id;
        $data = User::find($id);
        $data->name = $request->name;
        // $data->email = $request->email; 

        if ($request->file('image')) {
            $file = $request->file('image');

            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/admin_images'),$filename);
            $data['image'] = $filename;
        }
        $data->save();


        $notification = array(
            'message' => "Admin Profile Updated Successfully",
            'alert-type' => 'success'
        );

        return redirect()->route('admin.profile')->with($notification);
    }




    function changepassword() {
        return view('admin.change-password');
    }

    function updatePassword(Request $request) {
        $validateData = $request->validate([
            'old_password' => 'required',
            'new_password' => 'required|different:old_password',
            'confirm_password' => 'required|same:new_password'
        ]);

        $hassedpassword = Auth::user()->password;
        
        if (Hash::check($request->old_password,$hassedpassword)) {
            $users = User::find(Auth::id());
            $users->password = bcrypt($request->new_password);
            $users->save();

            $notification = array(
                'message' => "Password updated successfully",
                'alert-type' => 'success'
            );
            return redirect()->back()->with($notification);
        }else{
            $notification = array(
                'message' => "Password not mached",
                'alert-type' => 'info'
            );
            return redirect()->back()->with($notification);
        }
    }
}
