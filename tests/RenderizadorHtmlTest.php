<?php

namespace Contatos;

use PHPUnit_Framework_TestCase;
use Contatos\Collection\Contatos as ContatosCollection;
use Contatos\Entity\Contato as ContatoEntity;
class RenderizadorHtmlTest extends PHPUnit_Framework_TestCase
{
    public function testRenderizarUmContato()
    {
        $renderizador = new RenderizadorHtml();
        $contatos = new ContatosCollection();
        $contatos[] = new ContatoEntity(
            'João',
            'joao@catho.com'
        );
        $esperado = '<ul><li>João (joao@catho.com)</li></ul>';
        $this->assertEquals($esperado, $renderizador->renderizar($contatos));
    }

    public function testRenderizarDoisContatos()
    {
        $renderizador = new RenderizadorHtml();
        $contatos = new ContatosCollection();
        $contatos[] = new ContatoEntity(
            'João',
            'joao@catho.com'
        );
        $contatos[] = new ContatoEntity(
            'Maria',
            'maria@catho.com'
        );
        $esperado = '<ul><li>João (joao@catho.com)</li><li>Maria (maria@catho.com)</li></ul>';
        $this->assertEquals($esperado, $renderizador->renderizar($contatos));
    }

    public function testRenderizarZeroContato()
    {
        $renderizador = new RenderizadorHtml();
        $contatos = new ContatosCollection();
        $this->assertNull($renderizador->renderizar($contatos));
    }
}
