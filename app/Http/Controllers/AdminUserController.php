<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use App\Models\User;

class AdminUserController extends Controller
{
    public function settings(){
        $message_count = Contact::count();

        $user = User::all();
        return view('admin.pages.userSettings',compact('message_count','user'));
    }

    public function profile(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|string|email|unique:users,email',
            'password' => 'required|string|min:6',
        ]);

        $user = new User();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = bcrypt($request->input('password')); // Şifreyi hash'liyoruz

        $user->save();

        return redirect()->route('admin.user.profile')->with('success', 'Kullanıcı başarıyla eklendi');
    }

    public function edit($id)
    {

        $message_count = Contact::count();
        $user = User::findOrFail($id);
        return view('admin.pages.user_edit', compact('user','message_count'));
    }

    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);

        $request->validate([
            'name' => 'required|string',
            'email' => 'required|string|email|unique:users,email,' . $id,
            'password' => 'nullable|string|min:6',
        ]);

        $user->name = $request->input('name');
        $user->email = $request->input('email');

        if ($request->filled('password')) {
            $user->password = bcrypt($request->input('password'));
        }

        $user->save();

        return redirect()->route('admin.settings')->with('success', 'Kullanıcı başarıyla güncellendi');
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return redirect()->route('admin.settings')->with('success', 'Kullanıcı silindi!');
    }

}
