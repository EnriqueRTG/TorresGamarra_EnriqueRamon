<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;
use CodeIgniter\Validation\StrictRules\CreditCardRules;
use CodeIgniter\Validation\StrictRules\FileRules;
use CodeIgniter\Validation\StrictRules\FormatRules;
use CodeIgniter\Validation\StrictRules\Rules;

class Validation extends BaseConfig
{
    // --------------------------------------------------------------------
    // Setup
    // --------------------------------------------------------------------

    /**
     * Stores the classes that contain the
     * rules that are available.
     *
     * @var string[]
     */
    public array $ruleSets = [
        Rules::class,
        FormatRules::class,
        FileRules::class,
        CreditCardRules::class,
    ];

    /**
     * Specifies the views that are used to display the
     * errors.
     *
     * @var array<string, string>
     */
    public array $templates = [
        'list'   => 'CodeIgniter\Validation\Views\list',
        'single' => 'CodeIgniter\Validation\Views\single',
    ];

    // --------------------------------------------------------------------
    // Rules
    // --------------------------------------------------------------------
    
    public $categorias = [
      'nombre' => 'required|min_length[4]|max_length[125]|is_unique[categorias.nombre, id, {id}]', 
    ];
    
    public $subcategorias = [
      'nombre' => 'required|min_length[4]|max_length[125]|is_unique[subcategorias.nombre, id, {id}]',
    ];
    
    public $marcas = [
        'nombre' => 'required|min_length[3]|max_length[125]|is_unique[marcas.nombre, id, {id}]',
    ];
    
    // revisar: crear y modificar
    public $usuarios = [
        'nombre'       => 'required|min_length[4]|max_length[125]|alpha_space',
        'apellido'     => 'required|min_length[4]|max_length[125]|alpha_space',
        'email'        => 'required_with[password,pass_confirm]|min_length[4]|max_length[125]|valid_email|is_unique[usuarios.email, id, {id}]',
        'password'     => 'required_with[email,pass_confirm]|min_length[8]|max_length[20]|alpha_dash',
        'pass_confirm' => 'required_with[password,email]|min_length[8]|max_length[20]|alpha_dash|matches[password]',
        'direccion'    => 'required|max_length[125]|alpha_numeric_space',
        'telefono'     => 'required|max_length[15]|numeric',
    ];
    
    public  $productos = [
        'codigo_SKU'      => 'required|min_length[4]|max_length[10]|alpha_numeric|is_unique[productos.codigo_SKU, id, {id}]',
        'nombre'          => 'required|min_length[4]|max_length[125]|alpha_numeric_space|is_unique[productos.nombre, id, {id}]',
        'descripcion'     => 'required|string',
        'precio'          => 'required|decimal',
        'stock'           => 'required|is_natural_no_zero',
        'marca_id'        => 'required',
        'subcategoria_id' => 'required',
        //'peso'            => 'required|min_length[4]|max_length[125]|alpha_numeric_space',
        //'dimension'       => 'required|min_length[4]|max_length[125]|alpha_numeric_space',
        //'imagen'          => 'required|min_length[4]|max_length[125]|alpha_space',
    ];
    
}
