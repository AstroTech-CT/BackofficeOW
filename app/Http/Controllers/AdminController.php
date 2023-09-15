<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Publicacion;
use App\Models\ReportePublicacion;

class AdminController extends Controller
{
    public function verUsuariosRegistrados() {

        try {
            $users = User::all(); 
    
            return view('admin.users', compact('users'));

        } catch (\Exception $e) {
            return view('admin.error')->with('error', 'Error al obtener usuarios.');
        }
    }
    
    public function verUsuariosReportados() {
        try {
           
            $reportedUsers = User::where('reportado', 1)->get();
    
            return view('admin.reported_users', compact('reportedUsers'));
        } catch (\Exception $e) {
            return view('admin.error')->with('error', 'Error al obtener usuarios reportados.');
        }
    }

    public function verPublicaciones() {
        try {
            $posts = Publicacion::all(); 
    
            return view('admin.posts', compact('posts'));
        } catch (\Exception $e) {
            return view('admin.error')->with('error', 'Error al obtener publicaciones.');
        }
    }
    
    public function verPublicacionesReportadas() {
        try {
            $reportedPosts = ReportePublicacion::all(); 
    
            return view('admin.reported_posts', compact('reportedPosts'));
        } catch (\Exception $e) {
            return view('admin.error')->with('error', 'Error al obtener publicaciones reportadas.');
        }
    }

    public function verUsuariosSuspendidos() {
        try {
           
            $reportedUsers = User::where('suspendido', 1)->get();
    
            return view('admin.suspendidos', compact('suspendidos'));
        } catch (\Exception $e) {
            return view('admin.error')->with('error', 'Error al obtener usuarios suspendidos.');
        }
    }

    public function eliminarUsuariosSuspendidos(){

        try {
           
            DB::table('users')->where('suspendido', 1)->delete();
    
            return redirect()->route('admin.usuarios')->with('success', 'Usuarios suspendidos eliminados con éxito.');
        } catch (\Exception $e) {
            
            return view('admin.error')->with('error', 'Error al eliminar usuarios suspendidos.');
        }
    }    


    public function suspenderUsuariosReportados(){

        try {
           
            $usuariosReportados = DB::table('reporte_publicacion')
                ->select('ci')
                ->groupBy('ci')
                ->havingRaw('COUNT(*) >= 3')
                ->pluck('ci'); //sirve para agarrar la cedula del usuario que tiene mas de 3 reportes de publicaciones para asi poder suspenderlo
    
            DB::table('users')->whereIn('ci', $usuariosReportados)->update(['suspendido' => 1]);
    
            return redirect()->route('admin.usuarios')->with('success', 'Usuarios reportados suspendidos con éxito.');
        } catch (\Exception $e) {
            
            return view('admin.error')->with('error', 'Error al suspender usuarios reportados.');
        }
    }

    
}
