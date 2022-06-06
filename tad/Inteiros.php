<?php

class Inteiros {

    /** @var int[] */
    private array $inteiros = [];

    public function getElementos() : array 
    {
        return $this->inteiros;
    }

    public function inserirInicio(int $numero) : void
    {
        array_unshift($this->inteiros, $numero);
    }

    public function inserirFinal(int $numero) : void
    {
        $this->inteiros[] = $numero;
    }

    public function removerInicio() : void
    {
        if(array_key_exists(0, $this->inteiros)) {
            unset($this->inteiros[0]);
        }
    }

    public function removerFinal() : void
    {
        array_pop($this->inteiros);
    }

    public function interseccao(Inteiros $inteiros) : Inteiros 
    {
        $interseccao = new Inteiros();

        foreach ($this->getElementos() as $numero) {
            if(in_array($numero, $inteiros->getElementos())) {
                $interseccao->inserirFinal($numero);
            }
        }

        return $interseccao;
    }

    public function diferenca(Inteiros $inteiros) : Inteiros
    {
        $diferenca = new Inteiros();

        foreach (array_diff($this->getElementos(), $inteiros->getElementos()) as $numero) {
            $diferenca->inserirFinal($numero);
        }

        return $diferenca;
    }

    public function pertence(int $numero) : bool
    {
        return in_array($numero, $this->getElementos());
    }

    public function maior() : int | null
    {
        if($this->isVazio()) {
            return null;
        }

        $maior = $this->getElementos()[0];

        foreach ($this->getElementos() as $numero) {
            if($numero > $maior) {
                $maior = $numero;
            }
        }

        return $maior;
    }
    
    public function menor() : int | null
    {
        if($this->isVazio()) {
            return null;
        }

        $menor = $this->getElementos()[0];

        foreach ($this->getElementos() as $numero) {
            if($numero < $menor) {
                $menor = $numero;
            }
        }

        return $menor;
    }

    public function igual(Inteiros $inteiros) : bool
    {
        if($this->tamanho() !== $inteiros->tamanho()) {
            return false;
        }

        foreach ($this->getElementos() as $numero) {
            if(!in_array($numero, $inteiros->getElementos())) {
                return false;
            }
        }

        return true;
    }

    public function tamanho() : int
    {
        return count($this->getElementos());
    }

    public function isVazio() : bool 
    {
        return $this->tamanho() === 0;
    }
}