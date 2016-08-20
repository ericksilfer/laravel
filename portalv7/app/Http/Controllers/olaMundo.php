<?php

namespace ericksf\Http\Controllers;

use Illuminate\Http\Request;

use ericksf\Http\Requests;
use ericksf\olaMundoModel;
 
class olaMundo extends Controller
{
	protected $dados;

	public function __construct(olaMundoModel $dados)
	{
		$this->dados = $dados;
	}
    
    public function getOlaMundo()
    {
    	return View('olamundo');
    }
}
