<?php

namespace Contatos\Renderizador;

use Contatos\Collection\Contatos as ContatosCollection;

interface RenderizadorInterface
{
    public function renderizar(ContatosCollection $contatos);
}