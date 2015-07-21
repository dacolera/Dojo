<?php

namespace Contatos;

use Contatos\Collection\Contatos as ContatosCollection;
use Contatos\Renderizador\RenderizadorInterface;

class Agenda
{
    protected $contatos;

    public function __construct(ContatosCollection $contatos)
    {
        $this->contatos = $contatos;
    }

    public function exibirContatos(RenderizadorInterface $renderizador)
    {
        return $renderizador->renderizar($this->contatos);
    }
}
