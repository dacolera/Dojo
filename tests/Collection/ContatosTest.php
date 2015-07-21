<?php

namespace Contatos\Collection;

use PHPUnit_Framework_TestCase;

class ContatosTest extends PHPUnit_Framework_TestCase
{
    /**
     * @expectedException Contatos\Collection\ValorErradoException
     */
    public function testPassandoContatoArrayRetornaException()
    {
        $collection = new Contatos();
        $collection[] = array(
            'nome' => 'João',
            'email' => 'joao@catho.com'
        );
    }

    /**
     * @expectedException Contatos\Collection\ValorErradoException
     */
    public function testPassandoContatoArrayNoConstrutorRetornaException()
    {
        $collection = new Contatos(
            array(
                array(
                    'nome' => 'João',
                    'email' => 'joao@catho.com'
                )
            )
        );      
    }
}
