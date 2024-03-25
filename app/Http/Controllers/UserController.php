<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function showAccount(){
        $account = User::find(Auth::id());

        return view('Account.ShowAccount',compact('account'));
    }

    public function accountEditForm($id){
        $account = User::find($id);
        return view('Account.editForm',compact('account'));
    }

    public function accountUpdate(Request $request){
        $input = $request->all();

        $account = User::where('id',Auth::id())
            ->update([
                'name'=>$input['name'],
                'email'=>$input['email'],
            ]);

        if( $account){
            return redirect()->route('account.show');
        }
        else{
            return view('general.error');
        }

    }
}
