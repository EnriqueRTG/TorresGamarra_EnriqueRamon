<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace App\Models;
use CodeIgniter\Model;

/**
 * Description of MarcaModel
 *
 * @author Torres Gamarra Enrique Ramon
 */
class MarcaModel extends Model{
    protected $table      = 'marcas';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nombre', 'baja'];
    protected $returnType = 'object';
}
