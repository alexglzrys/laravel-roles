<?php

namespace App\Http\Controllers;

use Caffeinated\Shinobi\Models\Permission;
use Caffeinated\Shinobi\Models\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roles = Role::paginate();
        return view('roles.index', compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Obtener todos los permisos registrados en el sistema, para que en la vista le sean asignados al nuevo rol
        $permissions = Permission::get();
        return view('roles.create', compact('permissions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Guardar la información referente al rol
        $role = Role::create($request->all());
        // Asignar los permisos especificados en el nuevo rol
        $role->permissions()->sync($request->input('permissions'));
        return redirect()->route('roles.edit', $role->id)->with('info', 'Rol almacenado satisfactoriamente en el sistema');
    }

    /**
     * Display the specified resource.
     *
     * @param  Caffeinated\Shinobi\Models\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function show(Role $role)
    {
        return view('roles.show', compact('role'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Caffeinated\Shinobi\Models\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function edit(Role $role)
    {
        // Recuperar todos los permisos registrados en el sistema, y mostrarlos en el formulario de edición.
        $permissions = Permission::get();
        return view('roles.edit', compact('role', 'permissions'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Caffeinated\Shinobi\Models\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Role $role)
    {
        // Actualizar la información del rol
        $role->update($request->all());
        // Actualizar los permisos especificados en el rol
        $role->permissions()->sync($request->input('permissions'));
        return redirect()->route('roles.edit', $role->id)->with('info', 'Rol actualizado satisfactoriamente en el sistema');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Caffeinated\Shinobi\Models\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function destroy(Role $role)
    {
        $role->delete();
        return back()->with('info', 'Rol eliminado correctamente del sistema');
    }
}
