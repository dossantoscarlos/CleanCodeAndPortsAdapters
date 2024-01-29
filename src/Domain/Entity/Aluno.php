<?php 
declare(strict_types=1);

namespace App\Domain\Entity;

class Aluno 
{
    private $id;

    private string $nome_completo;
    private string $data_nascimento;
    private string $nome_mae;
    private string $nome_pai;
    private string $matricula;

    public function __construct($id=null, $nome_completo, $data_nascimento, $nome_mae, $nome_pai) 
    {
        $this->matricula;
        $this->setNomeCompleto($nome_completo);
    }

    private function setNomeCompleto($nome_completo)
    {
        $this->nome_completo = trim(strtolower($nome_completo));
    }


}