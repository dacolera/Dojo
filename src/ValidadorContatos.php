<?php
namespace Contatos;

use Contatos\Collection\Contatos as ContatosCollection;
use Contatos\Exception\SemContatosException;
use Contatos\Exception\ContatoInvalidoException;
use Contatos\Entity\Contato as ContatoEntity;

class ValidadorContatos
{
    public function validar(ContatosCollection $contatos)
    {
       if (count($contatos) < 1) {
            throw new SemContatosException('Sem Contatos');
        }

        foreach ($contatos as $contato) {

            if (empty($contato->getEmail())) {
                throw new ContatoInvalidoException('Contato nao possui email');
            }

            if (empty($contato->getNome())) {
                throw new ContatoInvalidoException('Contato nao possui nome');
            }
        }
    }
}