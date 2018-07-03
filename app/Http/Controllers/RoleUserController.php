<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\RoleUser;
use App\User;
use Auth;
use View;

class RoleUserController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        //
        $data['role_id']=$request->role_id;
        //echo $data['role_id'];
        //die();
        RoleUser::where('user_id', '=', $request->id)->update($data);
        return redirect('user');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function show(RoleUser $roleuser)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function edit($id)//(RoleUser $roleuser)
    {
        //

        $compactData['roleuserdata']=RoleUser::join('roles', 'role_id', '=', 'roles.id')->join('users','users.id','=','user_id')->where('user_id', '=', $id)->first();
        //echo $compactData['roleuserdata'];
        //die();
        return View::make('user.edit')->with($compactData);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RoleUser $roleuser)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function destroy(RoleUser $roleuser)
    {
        //
    }
}
