<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Spatie\Permission\Models\Role;
use App\Permission;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;

class RoleController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $roles = Role::all();
        $permissions = Permission::all();
        return view('backEnd.admin.role.index', compact('roles', 'permissions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('backEnd.admin.role.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validate($request, ['name' => 'required', ]);

        Role::create($request->all());

        Session::flash('message', 'Rol agregado.');
        Session::flash('status', 'success');

        return redirect('admin/role');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return Response
     */
    public function show($id)
    {
        $role = Role::findOrFail($id);

        return view('backEnd.admin.role.show', compact('role'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $role = Role::findOrFail($id);

        return view('backEnd.admin.role.edit', compact('role'));
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
        if ($role = Role::findOrFail($id)) {
            // admin role has everything
            if ($role->name === 'Admin') {
                $role->syncPermissions(Permission::all());
                return redirect()->route('roles.index');
            }

            $permissions = $request->get('permissions', []);

            $role->syncPermissions($permissions);

            //flash($role->name . ' permissions has been updated.');
            Session::flash('message', 'Los permisos han sido actualizados.');
            Session::flash('status', 'success');
        } else {
            Session::flash('message', 'Rol no encontrado.');
            Session::flash('status', 'success');
        }

        return redirect()->route('role.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $role = Role::findOrFail($id);

        $role->delete();

        Session::flash('message', 'Rol eliminado!');
        Session::flash('status', 'success');

        return redirect('admin/role');
    }

    public function permisos()
    {
        $role = Role::findOrFail(7);
        $role->syncPermissions(Permission::all());
        echo "bien";
    }
}
