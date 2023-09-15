<?php
use App\Http\Controllers\AdminController;


Route::get('/admin/usuarios', [AdminController::class, 'verUsuariosRegistrados'])->name('admin.usuarios.index');
Route::get('/admin/usuarios-reportados', [AdminController::class, 'verUsuariosReportados'])->name('admin.usuarios.reportados');


Route::get('/admin/publicaciones', [AdminController::class, 'verPublicaciones'])->name('admin.publicaciones.index');
Route::get('/admin/publicaciones-reportadas', [AdminController::class, 'verPublicacionesReportadas'])->name('admin.publicaciones.reportadas');

Route::get('/admin/usuarios/suspendidos', [AdminController::class, 'verUsuariosSuspendidos'])->name('admin.usuarios.suspendidos');
Route::post('/admin/usuarios/suspendidos/eliminar', [AdminController::class, 'eliminarUsuarioSuspendido'])->name('admin.usuarios.suspendidos.eliminar');
Route::post('/admin/usuarios/reportados/suspender', [AdminController::class, 'suspenderUsuariosReportados'])->name('admin.usuarios.reportados.suspender');


