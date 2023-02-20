<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function userlist(Request $request)
    {
        $user=User::where('status', 'inactive')->orWhere('level', '2')->get();

        return view('admin.pages.user.index-user', ['user'=>$user]);
    }

    public function edit($id)
    {
        $user=User::findOrFail($id);

        return view('admin.pages.user.edit-user', ['user'=>$user]);
    }

    public function show($id)
    {
        $user=User::findOrFail($id);

        return view('admin.pages.user.show-user', ['user'=>$user]);
    }

    public function update(Request $request, $id)
    {
        $user=User::findOrFail($id);

        $user->update([
            'status'=>$request->status,
        ]);

        return redirect()->route('userlist.index');
    }

    public function destroy($id)
    {
        $user=User::findOrFail($id);

        $user->delete();

        return redirect()->route('userlist.index');
    }
}
