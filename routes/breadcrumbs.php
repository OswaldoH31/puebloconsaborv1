<?php // routes/breadcrumbs.php

// Note: Laravel will automatically resolve `Breadcrumbs::` without
// this import. This is nice for IDE syntax and refactoring.

use App\Models\Local;
use Diglactic\Breadcrumbs\Breadcrumbs;


// This import is also not required, and you could replace `BreadcrumbTrail $trail`
//  with `$trail`. This is nice for IDE type checking and completion.
use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;

// Home - User
Breadcrumbs::for('Usuario', function (BreadcrumbTrail $trail) {
    $trail->push('Home', route('home'));
     
});

Breadcrumbs::for('busqueda', function (BreadcrumbTrail $trail,$id) {
    $trail->parent('Usuario');
    $trail->push('Resultado búsqueda:'.$id, route('buscar.show'));
});


Breadcrumbs::for('Directorio', function (BreadcrumbTrail $trail) {
    $trail->parent('Usuario');
    $trail->push('Directorio', route('Directorio.index'));
});

Breadcrumbs::for('Directorio.menu', function (BreadcrumbTrail $trail, $id) {
    $trail->parent('Directorio');
    $trail->push($id, route('Directorio.index',$id));
});

Breadcrumbs::for('Comentario', function (BreadcrumbTrail $trail,$id) {
    $trail->parent('Directorio.menu',$id);
    $trail->push('Comentario', route('Opinion.index',$id));
});

Breadcrumbs::for('PerfilU', function (BreadcrumbTrail $trail) {
    $trail->parent('Usuario');
    $trail->push('Perfil', route('profile.edit'));
});

//Login
Breadcrumbs::for('Login', function (BreadcrumbTrail $trail) {
    $trail->parent('Usuario');
    $trail->push('Login', route('login'));
});


Breadcrumbs::for('Registro', function (BreadcrumbTrail $trail) {
    $trail->parent('Usuario');
    $trail->push('Registro', route('register'));
});




// Home - Proveedor
Breadcrumbs::for('Proveedor', function (BreadcrumbTrail $trail) {
    $trail->push('Home', route('Proveedor.index'));
});

// Locales
Breadcrumbs::for('Locales', function (BreadcrumbTrail $trail) {
    $trail->parent('Proveedor');
    $trail->push('Locales', route('local.locales'));
});
Breadcrumbs::for('Locales.agregar', function (BreadcrumbTrail $trail) {
    $trail->parent('Locales');
    $trail->push('Agregar', route('local.index'));
});

Breadcrumbs::for('Locales.menu', function (BreadcrumbTrail $trail,  $local) {
    $trail->parent('Locales');
    $trail->push($local, route('Menu.show',$local));
});

Breadcrumbs::for('Menu.agregar', function (BreadcrumbTrail $trail,$id) {
    $trail->parent('Locales.menu',$id);
    $trail->push('Agregar Menu', route('Menu.index',$id));
});

Breadcrumbs::for('ListaPlatillo', function (BreadcrumbTrail $trail,$id) {
    $trail->parent('Locales.menu',$id);
    $trail->push('Platillos', route('platillo.mostrarplatillo'));
});

Breadcrumbs::for('ListaBebida', function (BreadcrumbTrail $trail,$id) {
    $trail->parent('Locales.menu',$id);
    $trail->push('Bebidas', route('Menu.mostrar',$id));
});




Breadcrumbs::for('PerfilP', function (BreadcrumbTrail $trail) {
    $trail->parent('Proveedor');
    $trail->push('Perfil', route('profile.editProveedor'));
});

// Admin


// Home - Admin
Breadcrumbs::for('Admin', function (BreadcrumbTrail $trail) {
    $trail->push('Home', route('Proveedor.index'));
});

Breadcrumbs::for('ListadoLocales', function (BreadcrumbTrail $trail) {
    $trail->parent('Admin');
    $trail->push('Lista Locales', route('Locales.show'));
});

Breadcrumbs::for('ListadoUsuarios', function (BreadcrumbTrail $trail) {
    $trail->parent('Admin');
    $trail->push('Lista Usuarios', route('Usuarios.index'));
});

Breadcrumbs::for('Solicitudes', function (BreadcrumbTrail $trail) {
    $trail->parent('Admin');
    $trail->push('Solicitudes', route('Solicitudes.index'));
});

Breadcrumbs::for('Piepagina', function (BreadcrumbTrail $trail) {
    $trail->parent('Admin');
    $trail->push('Pie de pagina', route('pie.index'));
});

Breadcrumbs::for('Piepagina.editar', function (BreadcrumbTrail $trail, $id) {
    $trail->parent('Piepagina');
    $trail->push('Editar', route('pie.edit',$id));
});


Breadcrumbs::for('Huejutla', function (BreadcrumbTrail $trail) {
    $trail->parent('Admin');
    $trail->push('Huejutla', route('Huejutla.Huejutla'));
});

Breadcrumbs::for('Huejutla.editar', function (BreadcrumbTrail $trail,$id) {
    $trail->parent('Huejutla');
    $trail->push('Editar', route('Huejutla.edit',$id));
});

Breadcrumbs::for('Perfil', function (BreadcrumbTrail $trail) {
    $trail->parent('Admin');
    $trail->push('Perfil', route('profile.editAdmin'));
});







