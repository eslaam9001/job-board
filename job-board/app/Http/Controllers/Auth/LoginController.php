<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    // الدالة التي تعرض صفحة تسجيل الدخول
    public function showLoginForm()
    {
        return view('auth.login');
    }

    // الدالة التي تعالج طلب تسجيل الدخول
    public function login(Request $request)
    {
        // التحقق من صحة البيانات المدخلة
        $credentials = $request->only('email', 'password');
        $validator = Validator::make($credentials, [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        // محاولة تسجيل الدخول
        if (Auth::attempt($credentials)) {
            // تسجيل الدخول ناجح
            return redirect()->intended('home'); // توجه إلى الصفحة المطلوبة بعد تسجيل الدخول
        } else {
            // تسجيل الدخول غير ناجح
            return redirect()->back()
                ->withErrors(['error' => 'بيانات الدخول غير صحيحة'])
                ->withInput();
        }
    }

    // الدالة التي تقوم بتسجيل خروج المستخدم
    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}
