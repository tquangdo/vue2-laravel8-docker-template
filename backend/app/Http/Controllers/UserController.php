<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserChangePass;
use App\Http\Requests\UserLogin;
use App\Http\Requests\UserRegister;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function onSignup(UserRegister $request)
    {
        $validated = $request->validated();
        $validated["password"] = bcrypt($validated["password"]);
        $user = User::create($validated);
        return response()->json([
            "user" => $user,
            "msg" => "Dang ky thanh cong",
        ], 200);
    }
    public function onLogout(Request $request)
    {
        $request->user()->token()->revoke();
        return response()->json([
            'message' => 'Successfully logged out'
        ]);
    }
    // Dang nhap
    public function onLogin(UserLogin $request)
    {
        $validated = $request->validated();

        if (auth()->attempt($validated)) {
            $user = auth()->user();
            $token = $user->createToken('Personal Access Token')->accessToken;
            return response()->json(['user' => $user, 'token' => $token, 'msg' => "Dang nhap thanh cong"], 200);
        } else {
            return response()->json(['msg' => "Dang nhap that bai"], 211);
        }
    }
    // Get me
    public function getMe()
    {
        $user = auth()->user();
        return response()->json(['user' => $user], 200);
    }
    // Change pass
    public function changePassword(UserChangePass $request)
    {

        $validated = $request->validated();
        $user = auth()->user();
        $isUpdate = User::where('id', $user->id)
            ->update(["password" => bcrypt($validated["password"])]);
        if ($isUpdate) {
            return response()->json(['msg' => "Doi mat khau thanh cong"], 200);
        } else {
            return response()->json(['msg' => "Doi mat khau that bai"], 211);
        }
    }
}
