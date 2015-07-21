<?php

namespace Contatos;

use Contatos\Collection\Contatos as ContatosCollection;
use Contatos\Entity\Contato as ContatoEntity;
use Contatos\Renderizador\RenderizadorInterface;

class RenderizadorHtml implements RenderizadorInterface
{
    public function renderizar(ContatosCollection $contatos)
    {
        if (count($contatos) < 1) {
            return null;
        }

        $contatosHtml = null;

        foreach ($contatos as $contato) {
            $contatosHtml .= $this->renderizarContato($contato);
        }

        return sprintf('<ul>%s</ul>', $contatosHtml);
    }

    private function renderizarContato(ContatoEntity $contato)
    {
        return sprintf(
            '<li>%s (%s)</li>',
            $contato->getNome(),
            $contato->getEmail()
        );
    }
}
