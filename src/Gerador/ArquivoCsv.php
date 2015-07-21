<?php

namespace Contatos\Gerador;

use Contatos\Collection\Contatos as ContatosCollection;
use Contatos\Entity\Contato as ContatoEntity;

class ArquivoCsv
{
    public function getContatos()
    {
        return new ContatosCollection();
    }
}