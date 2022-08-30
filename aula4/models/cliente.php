<?php

require_once('./database/database.php');

class Cliente extends Database
{

    public $id;
    public $nome;
    public $sobrenome;
    public $sexo;
    public $rg_ie;
    public $cpf_cnpj;

    function __construct($id = null, $nome = null, $sobrenome = null, $sexo = null, $rg_ie = null, $cpf_cnpj = null)
    {
        parent::__construct();
        $this->id = $id;
        $this->nome = $nome;
        $this->sobrenome = $sobrenome;
        $this->sexo = $sexo;
        $this->rg_ie = $rg_ie;
        $this->cpf_cnpj = $cpf_cnpj;
    }

    function getLabelSexo() {
        return $this->sexo === 'M' ? 'Masculino' : 'Feminino';
    }


    static function getClientes()
    {
        $db = new Database();
        $query = "SELECT * FROM `clientes`;";
        $result = $db->mysqli->query($query);
        if ($result) {

            $clientes = [];

            while ($obj = $result->fetch_assoc()) {
                $c = new Cliente($obj['id'], $obj['nome'], $obj['sobrenome'], $obj['sexo'], $obj['rg_ie'], $obj['cpf_cnpj']);
                array_push($clientes, $c);
            }

            return $clientes;
        }
        return [];
    }

    function save()
    {
        $query = "
        UPDATE `sistema`.`clientes`
        SET
        `nome` = ?,
        `sobrenome` = ?,
        `sexo` = ?,
        `rg_ie` = ?,
        `cpf_cnpj` = ?
        WHERE `id` = ?;
        ";
        $stmt = $this->mysqli->prepare($query);
        $stmt->bind_param('ssssss', $this->nome, $this->sobrenome, $this->sexo, $this->rg_ie, $this->cpf_cnpj, $this->id);
        $stmt->execute();
        $stmt->close();
    }

    function create()
    {
        $query = "
        INSERT INTO `clientes` (`nome`,`sobrenome`,`sexo`,`rg_ie`,`cpf_cnpj`)
        VALUES (?,?,?,?,?);
        ";
        $stmt = $this->mysqli->prepare($query);
        $stmt->bind_param('sssss', $this->nome, $this->sobrenome, $this->sexo, $this->rg_ie, $this->cpf_cnpj);
        $stmt->execute();
        $stmt->close();
    }

    function delete()
    {
        $query = "DELETE FROM `clientes` WHERE id = ?;";
        $stmt = $this->mysqli->prepare($query);
        $stmt->bind_param('s', $this->id);
        $stmt->execute();
        $stmt->close();
    }
}
