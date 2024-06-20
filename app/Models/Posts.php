<?php

namespace App\Models;

use CodeIgniter\Model;

class Posts extends Model
{
    protected $table            = 'posts';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'object';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        "id_usuario",
        "caminho_post",
        "titulo"
    ];

    protected bool $allowEmptyInserts = true;
    protected bool $updateOnlyChanged = true;

    protected array $casts = [];
    protected array $castHandlers = [];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];

    public function BuscaPosts(){

        // return $this->findAll();
        
        $builder = $this->db->table('users');
        $builder->select('users.nome, users.caminho_foto_perfil, posts.id_usuario, posts.caminho_post, posts.titulo');
        $builder->join('posts', 'posts.id_usuario = users.id');
        $query = $builder->get();
    
        $usuarios = $query->getResult();
        return $usuarios;
    }

    public function Postar($id, $titulo, $postagem){

        $retorno = false;

        $dados = [
            "id_usuario"       =>       $id,
            "titulo"           =>       $titulo,
            "caminho_post"     =>       $postagem
        ];

        $postar = $this->insert($dados);

        if($postar){
            $retorno = true;
        }

        return $retorno;
    }
}
