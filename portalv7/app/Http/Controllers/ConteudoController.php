<?php

namespace ericksf\Http\Controllers;

use Illuminate\Http\Request;

use ericksf\Http\Requests;
use ericksf\ConteudoModel;

class ConteudoController extends Controller
{
	protected $_conteudo;

    function __construct(ConteudoModel $conteudo)
    {
    	$this->_conteudo = $conteudo;
    }

    public function getIndex()
    {
    	return View('conteudo.index');
    }
}
