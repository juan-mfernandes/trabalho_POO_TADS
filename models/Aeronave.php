<?php 

class Aeronave {
    private string $modelo;
    private int $capacidade; 
    private string $status;

    public function __construct(string $modelo, int $capacidade)
    {
        $this->modelo = $modelo;
        $this->capacidade = $capacidade;
    }

    public function setStatus($status): void  {
        $this->status = $status;
    }

    public function getStatus(): string {
        return $this->status;
    }

    public function getModelo(): string {
        return $this->modelo;
    }

    public function getCapacidade(): int {
        return $this->capacidade;
    }
    
}