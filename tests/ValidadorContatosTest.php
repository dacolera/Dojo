<?php

namespace Contatos;

use PHPUnit_Framework_TestCase;
use Contatos\Collection\Contatos;
use Contatos\Entity\Contato as ContatoEntity;

class ValidadorContatosTest extends PHPUnit_Framework_TestCase
{
    /**
    * @test
    * @expectedException  Contatos\Exception\SemContatosException
    * @expectedExceptionMessage Sem Contatos
    */
   public function validacaoDeContatosVazios()
   {
        $validador = new ValidadorContatos();
        $validador->validar(new Contatos());
   }

    /**
    * @test
    * @expectedException Contatos\Exception\ContatoInvalidoException
    * @expectedExceptionMessage Contato nao possui nome
    */
   public function validacaoDeContatosSemNome()
   {
        $contatosCollection = new Contatos(
            array(
                new ContatoEntity('', 'contatoSemNome@catho.com')
            )
        );

        $validador = new ValidadorContatos();
        $validador->validar($contatosCollection);
   }

    /**
    * @test
    * @expectedException Contatos\Exception\ContatoInvalidoException
    * @expectedExceptionMessage Contato nao possui email
    */
   public function validacaoDeContatosSemEmail()
   {
        $contatosCollection = new Contatos(
            array(
                new ContatoEntity('João', '')
            )
        );

        $validador = new ValidadorContatos();
        $validador->validar($contatosCollection);
   }
}