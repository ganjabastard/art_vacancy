<?php

namespace App\Http\Controllers;

use App\Http\Requests\UsersRequest;
use App\Role;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Hash;
use Auth;

class UsersController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $users = new User();
        if($request->name != '')
            $users = $users->where('name', 'like', "%" . $request->name . "%")->orWhere('email', 'like', "%" . $request->name . "%");
        if($request->role != '') {
            $users = $users->whereHas('roles', function ($query) use ($request) {
                $query->where('role_id', $request->role);
            });
        }
        $users = $users->paginate(10);
        $roles = Role::all();
        return view('users.index', compact('users', 'request', 'roles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::all()->pluck('display_name', 'id');
        return view('users.create', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UsersRequest $request)
    {
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->birthdate = Carbon::parse($request->birthdate)->format('Y-m-d');
        $user->active = $request->active != 1 ? 1 : 0;
        $user->password = Hash::make($request->password);
        $user->save();
        $user->roles()->sync([$request->role]);
        return redirect('users')->with('success', 'Пользователь успешно добавлен.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        $roles = Role::all()->pluck('display_name', 'id');
        return view('users.edit', compact('user', 'roles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UsersRequest $request, $id)
    {
        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->birthdate = Carbon::parse($request->birthdate)->format('Y-m-d');
        $user->active = $request->active == 1 ? 1 : 0;
        if(isset($request->password))
            $user->password = Hash::make($request->password);
        $user->update();
        $user->roles()->sync([$request->role]);
        return redirect('users')->with('success', 'Пользователь успешно обнолен.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
