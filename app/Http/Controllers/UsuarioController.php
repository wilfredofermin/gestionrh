<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Caffeinated\Shinobi\Models\Role;
use Caffeinated\Shinobi\Models\Permission;
use app\User;


class UsuarioController extends Controller
{
	    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('roles:admin');
    }


    //USUARIOS
	public function index(){

		$usuarios=User::all();
		return view('usuario.index',compact('usuarios'));
	}

    //ROLES
    public function roles(){

		$roles=Role::all();
    	return view('usuario.roles',compact('roles','permisos'));
    }
    //PERMISOS
	 public function permisos(){
	 	$permisos=Permission::all();
    	return view('usuario.permisos',compact('permisos'));

	    }


	//NUEVO ROL    
    public function crearRol(Request $request){

	$rol=new Role;

	$rol->name=$request->input('rol_nombre');
	$rol->slug=$request->input('rol_slug');
	$rol->description=$request->input('rol_descripcion');
	$rol->save();

    }

    public function crearUsuario(Request $request){

    	$usuarios=new User;

    	$usuario->name=$request->input('name');
    	$usuario->email=$request->input('email');
    	$usuario->password=$request->input(bcrypt('password'));
    	$usuario->assignRole(3);
    	$usuario->save();
    	return back();
    }

	public function asignarRol($id){

	dd($id);

	}
   

}
