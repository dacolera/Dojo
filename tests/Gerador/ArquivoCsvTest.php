<?php

namespace Contatos\Gerador;

use PHPUnit_Framework_TestCase;
use Contatos\Collection\Contatos as ContatosCollection;
use Contatos\Entity\Contato as ContatoEntity;

class ArquivoCsvTest extends PHPUnit_Framework_TestCase
{
    public function testGetContatos()
    {
        $arquivoCsv = new ArquivoCsv(
            __DIR__ . '/../resources/contatos.csv'
        );

        $expected = new ContatosCollection(
            array(
                new ContatoEntity('Jamal', 'jamal@dojo.com'),
                new ContatoEntity('Marroquino', 'marroquino@dojo.com'),
            )
        );

        $this->assertEquals(
            $expected,
            $arquivoCsv->getContatos()
        );
    }
}