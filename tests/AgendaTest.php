<?php

namespace Contatos;

use PHPUnit_Framework_TestCase;
use Contatos\Collection\Contatos as ContatosCollection;
use Contatos\Entity\Contato as ContatoEntity;

class AgendaTest extends PHPUnit_Framework_TestCase
{
    public function testExibirContatos()
    {
        $renderizador = $this->getMock('Contatos\Renderizador\RenderizadorInterface');
        $renderizador
            ->expects($this->once())
            ->method('renderizar');
    
        $contatosCollection = new ContatosCollection(
            array(
                new ContatoEntity('Jamal', 'jamal@dojo.com')
            )
        );
    
        $agenda = new Agenda($contatosCollection);
        $agenda->exibirContatos($renderizador);
    }
}
