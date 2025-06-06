<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Auth\Events\Verified;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Redirect;

class VerifyEmailController extends Controller
{
    public function __invoke(Request $request)
    {
        /** @var \App\Models\User $user */
        $user = User::findOrFail($request->route('id'));

        if (! hash_equals((string) $request->route('hash'),
                          sha1($user->getEmailForVerification()))) {
            abort(403, 'Liên kết xác thực không hợp lệ.');
        }

        if ($user->hasVerifiedEmail()) {
            return redirect()->route('login')->with('status', 'Email đã xác thực.');
        }

        if ($user->markEmailAsVerified()) {
            event(new Verified($user));
        }

        return redirect()->route('login')->with('status', 'Email xác thực thành công. Bạn có thể đăng nhập.');
    }
    

}
