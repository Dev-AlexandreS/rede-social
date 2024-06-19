<?php

namespace App\Models;

use App\Controllers\Cadastro;
use CodeIgniter\Model;

class ModelUsuario extends Model
{
    protected $table            = 'users';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'object';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        "nome",
        "email",
        "senha",
        "caminho_foto_perfil",
        "caminho_foto_fundo"
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

    public function cadastrar($nome, $email, $senha, $caminhoft){
        $dados = [
            "nome" => $nome,
            "email" => $email,
            "senha" => $senha,
            "caminho_foto_perfil" => $caminhoft
        ];
        
        $cadastro = $this->insert($dados);
        
        $retorno = false;

        if($cadastro){
            $retorno = $cadastro;
        }
        
        return $retorno;
    }

    public function login($email, $senha){

        $valida = $this->where('email', $email)->first();
        if($valida){
            if($this->where('senha', $senha)){
                return $valida;
            }
        }
        return false;

    }

    public function BuscaId($id){
        $valida = $this->where('id', $id)->first();

        return $valida;
    }

    public function Editar($id, $dados){

        $this->update($id, $dados);
        
        return true;

    }

    public function Deletar($id){
        
        $this->delete($id);

        return true;
    }
}
