<?php

namespace Contatos\Collection;

use Contatos\Entity\Contato as ContatoEntity;

class Contatos extends \ArrayIterator
{
    public function __construct($contatos = array())
    {
        foreach ($contatos as $key => $contato) {
            $this->offsetSet($key, $contato);
        }
    }
    
    public function offsetSet($key, $contato)
    {
        if (!$contato instanceof ContatoEntity) {
            throw new ValorErradoException();
        }

        parent::offsetSet($key, $contato);
    }
}
