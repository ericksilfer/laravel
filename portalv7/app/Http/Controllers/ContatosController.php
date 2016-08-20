<?php

namespace ericksf\Http\Controllers;

use Illuminate\Http\Request;

use ericksf\Http\Requests;
use ericksf\ContatosModel;

class ContatosController extends Controller
{
	protected $_contato;

    function __controller(ContatosModel $contato)
    {
    	$this->_contato = $contato;
    }

    public function getIndex()
    {
    	return View('contatos.index');
    }
}
