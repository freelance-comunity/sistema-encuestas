<?php

namespace App;

class Permission extends \Spatie\Permission\Models\Permission
{

    public static function defaultPermissions()
    {
        return [
            'ver_planteles',
            'agregar_planteles',
            'editar_planteles',
            'eliminar_planteles',

            'ver_usuarios',
            'agregar_usuarios',
            'editar_usuarios',
            'eliminar_usuarios',

            'ver_roles',
            'agregar_roles',
            'editar_roles',
            'eliminar_roles',
        ];
    }
}
