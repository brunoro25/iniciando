<?php

namespace Contato\Controller;

use Zend\Mvc\Controller\AbstractActionController;

class ContatosController extends AbstractActionController
{
    // GET /contatos
    public function indexAction()
    {
    }

    // GET /contatos/novo
    public function novoAction()
    {
    }

    // POST /contatos/adicionar
    public function adicionarAction()
    {
        // obt�m a requisi��o
        $request = $this->getRequest();

        // verifica se a requisi��o � do tipo post
        if ($request->isPost()) {
            // obter e armazenar valores do post
            $postData = $request->getPost()->toArray();
            $formularioValido = true;

            // verifica se o formul�rio segue a valida��o proposta
            if ($formularioValido) {
                // aqui vai a l�gica para adicionar os dados � tabela no banco
                // 1 - solicitar servi�o para pegar o model respons�vel pela adi��o
                // 2 - inserir dados no banco pelo model
                // adicionar mensagem de sucesso
                $this->flashMessenger()->addSuccessMessage("Contato criado com sucesso");

                // redirecionar para action index no controller contatos
                return $this->redirect()->toRoute('contatos');
            } else {
                // adicionar mensagem de erro
                $this->flashMessenger()->addErrorMessage("Erro ao criar contato");

                // redirecionar para action novo no controllers contatos
                return $this->redirect()->toRoute('contatos', array('action' => 'novo'));
            }
        }
    }

    // GET /contatos/detalhes/id
    public function detalhesAction()
    {
    }

    // GET /contatos/editar/id
    public function editarAction()
    {
    }

    // PUT /contatos/editar/id
    public function atualizarAction()
    {
    }

    // DELETE /contatos/deletar/id
    public function deletarAction()
    {
    }
}