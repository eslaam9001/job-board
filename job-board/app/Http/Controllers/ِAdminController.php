<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $users = User::all(); // جلب جميع المستخدمين
        return view('admin.index', compact('users'));
    }

    public function show($id)
    {
        $user = User::findOrFail($id); // جلب المستخدم بناءً على الـ id
        return view('admin.show', compact('user'));
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete(); // حذف المستخدم
        return redirect()->route('admin.index')->with('success', 'User deleted successfully');
    }
}
