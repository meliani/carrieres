<?php

namespace App\Http\Controllers\Backend\User;

use App\Http\Controllers\Backend\BaseController;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Auth;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Session;

class PermissionController extends BaseController
{
    public function __construct() 
    {
        $this->middleware(['auth', 'Admin']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $permissions = Permission::all();

        return view('backend.profiles.users.permissions.index')->with('permissions', $permissions);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::get();

        return view('backend.profiles.users.permissions.create')->with('roles', $roles);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $this->validate($request, [
            'name'=>'required|max:40',
        ]);

        $name = $request['name'];
        $permission = new Permission();
        $permission->name = $name;

        $roles = $request['roles'];
        
        $permission->save();

        if (!empty($request['roles'])) {
            foreach ($roles as $role) {
                $r = Role::where('id', '=', $role)->firstOrFail(); //Match input role to db record

                $permission = Permission::where('name', '=', $name)->first();   
                $r->givePermissionTo($permission);
            }
        }

        return redirect()->route('backend.permissions.index')
            ->with('flash_message',
             'Permission'. $permission->name.' added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return redirect('permissions');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $permission = Permission::find($id);
        
        return view('backend.profiles.users.permissions.edit', compact('permission'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $permission = Permission::findOrFail($id);

        $this->validate($request, [
            'name'=>'required|max:40',
        ]);
        
        $input = $request->all();
        $permission->fill($input)->save();

        return redirect()->route('backend.permissions.index')
            ->with('flash_message',
             'Permission'. $permission->name.' updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $permission = Permission::findOrFail($id);
        
        if ($permission->name == "Administer roles & permissions") {
            return redirect()->route('backend.permissions.index')
            ->with('flash_message',
             'Cannot delete this Permission!');
        }
        
        $permission->delete();

        return redirect()->route('backend.permissions.index')
            ->with('flash_message',
             'Permission deleted!');
    }
}
