<?php

namespace App\Http\Controllers;

use App\Http\Requests\RoleCreateRequest;
use App\Http\Requests\RoleEditRequest;
use Caffeinated\Shinobi\Models\Permission;
use Caffeinated\Shinobi\Models\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    /**
     * Configuración de middlewares para cada uno de los métodos de este controlador
     * La ruta de este controlador se encuentra agrupada por el middleware auth
     *      por lo que sólo hace falta especificar el middleware de roles y permisos en cada metodo
     *      del mismo
     * @return null
     */

    public function __construct()
    {
        // Para sistemas complejos, es frecuente la ausencia de controladores de recursos, ya que en ocasiones hacen falta mas o menos métodos, por tanto, el enfoque de asignar middlewares en las rutas es el más indicado para dichos casos.
        $this->middleware('can:roles.index')->only('index');
        $this->middleware('can:roles.show')->only('show');
        $this->middleware('can:roles.destroy')->only('destroy');
        $this->middleware('can:roles.create')->only(['create', 'store']);
        $this->middleware('can:roles.edit')->only(['edit', 'update']);
    }

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
    public function store(RoleCreateRequest $request)
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
    public function update(RoleEditRequest $request, Role $role)
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
