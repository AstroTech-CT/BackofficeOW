<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\DB;
use Tests\TestCase;

class AdminControllerTest extends TestCase
{
    use RefreshDatabase;

   

    public function testPuedeVerUsuariosRegistrados()
    {
        $response = $this->get(route('admin.usuarios'));

        $response->assertStatus(200)
            ->assertViewIs('admin.users')
            ->assertSee('Lista de usuarios registrados');
    }

    public function testPuedeVerUsuariosReportados()
    {
        $response = $this->get(route('admin.reported_users'));

        $response->assertStatus(200)
            ->assertViewIs('admin.reported_users')
            ->assertSee('Lista de usuarios reportados');
    }

    public function testPuedeVerPublicaciones()
    {
        $response = $this->get(route('admin.posts'));

        $response->assertStatus(200)
            ->assertViewIs('admin.posts')
            ->assertSee('Lista de publicaciones');
    }

    public function testPuedeVerPublicacionesReportadas()
    {
        $response = $this->get(route('admin.reported_posts'));

        $response->assertStatus(200)
            ->assertViewIs('admin.reported_posts')
            ->assertSee('Lista de publicaciones reportadas');
    }


    public function testPuedeVerUsuariosSuspendidos()
    {
        $response = $this->get(route('admin.suspendidos'));

        $response->assertStatus(200)
            ->assertViewIs('admin.suspendidos')
            ->assertSee('Lista de usuarios suspendidos');
    }

    public function testPuedeEliminarUsuariosSuspendidos()
    {
       
        $response = $this->post(route('admin.eliminar_usuarios_suspendidos'));

        $response->assertRedirect(route('admin.usuarios'))
            ->assertSessionHas('success', 'Usuarios suspendidos eliminados con éxito');

       
        $this->assertEquals(0, DB::table('users')->where('suspendido', 1)->count());
    }

    
    public function testPuedeSuspenderUsuariosReportados()
    {

        $response = $this->post(route('admin.suspender_usuarios_reportados'));

        $response->assertRedirect(route('admin.usuarios'))
            ->assertSessionHas('success', 'Usuarios reportados suspendidos con éxito');

        
        $this->assertEquals(0, DB::table('users')->whereIn('ci', $usuariosReportados)->where('suspendido', 1)->count());
    }
}
