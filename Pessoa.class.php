<?php

class Pessoa {

    //Declaração de váriaveis com tipagem privada, o que significa que outras classes não podem acessá-las.

    private $nome; //Receberá o nome do usuário
    private $endereco; //Receberá o endereço do usuário
    private $bairro; //Receberá o bairro do usuário
    private $cep; //Receberá o cep do usuário
    private $cidade; //Receberá a cidade do usuário
    private $estado; //Receberá o estado do usuário

    //Utilização dos métodos getters e setters como forma de acessar o conteúdo das variáveis que foram declaradas como privadas.
        //SET = É o método usado para definirmos o valor de um atributo, e ter o controle de suas alterações.
        //GET = É o método usado para receber o valor de um atributo.
        //THIS = É usado para referenciar uma variável que está fora do método, e não a que está sendo passada como parâmetro (local).

    public function setNome($nome) { //Define-se o valor da variável "$nome".
        $this->nome = $nome; //Aqui, a variável global "$nome" está sendo declarada como equivalente à variável local.
    }

    public function setEndereco($endereco) { //Define-se o valor da variável "$endereco".
        $this->endereco = $endereco; //Aqui, a variável global "$endereco" está sendo declarada como equivalente à variável local.
    }

    public function setBairro($bairro) { //Define-se o valor da variável "$bairro".
        $this->bairro = $bairro; //Aqui, a variável global "$bairro" está sendo declarada como equivalente à variável local.
    }

    public function setCep($cep) { //Define-se o valor da variável "$cep".
        $this->cep = $cep; //Aqui, a variável global "$cep" está sendo declarada como equivalente à variável local.
    }

    public function setCidade($cidade) { //Define-se o valor da variável "$cidade".
        $this->cidade = $cidade; //Aqui, a variável global "$cidade" está sendo declarada como equivalente à variável local.
    }

    public function setEstado($estado) { //Define-se o valor da variável "$estado".
        $this->estado = $estado; //Aqui, a variável global "$estado" está sendo declarada como equivalente à variável local.
    }

    public function getNome() { { //Recebe-se o valor da variável "nome".
        return $this->nome; //Aqui, o conteúdo da variável "nome" será retornado.
    }

    public function getEndereco() { { //Recebe-se o valor da variável "endereco".
        return $this->endereco; //Aqui, o conteúdo da variável "endereco" será retornado.
    }

    public function getBairro() { { //Recebe-se o valor da variável "bairro".
        return $this->bairro; //Aqui, o conteúdo da variável "bairro" será retornado.
    }

    public function getCep() { { //Recebe-se o valor da variável "cep".
        return $this->cep; //Aqui, o conteúdo da variável "cep" será retornado.
    }

    public function getCidade() { { //Recebe-se o valor da variável "cidade".
        return $this->cidade; //Aqui, o conteúdo da variável "cidade" será retornado.
    }

    public function getEstado() { //Recebe-se o valor da variável "estado".
        return $this->estado; //Aqui, o conteúdo da variável "estado" será retornado.
    }
}
?>