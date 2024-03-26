<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace App\Models;
use CodeIgniter\Model;

/**
 * Description of UsuarioModel
 *
 * @author Torres Gamarra Enrique Ramon
 */
class UsuarioModel extends Model{
    protected $table      = 'usuarios';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nombre', 'apellido', 'email', 'password', 'direccion', 'telefono', 'fecha_alta', 'fecha_actualizacion', 'rol_id', 'baja'];
    protected $returnType = 'object';
}
