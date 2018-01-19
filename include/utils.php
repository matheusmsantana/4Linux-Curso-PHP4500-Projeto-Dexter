<?php

	//Incluindo meu metodo de conexão com banco de dados e todos os metodos de cruds 
	require_once('banco.php');
	//require_once('../config.php');

	/**
	 * Esta função recebe como parametro o nome da pagina que estou
	 * se o nome da pagina for igual ao nome retornado pela minha função basename($_SERVER['PHP_SELF'])
	 * ele return para class 'active'se nao retorna ''
	 * 
	 * A Super Global $_SERVER['PHP_SELF'] contem o endereço da pagina que você esta acessano
	 * a Função basename() é uma função para retornar apenas o nome do arquivo ignorando as pastas
	 * @param string $paginaname (link da pagina)
	 * @return boolean 
	 */
	function VerificaPagina($paginaname)
	{
		$paginaAtual = basename($_SERVER['PHP_SELF']);
		return $paginaname == $paginaAtual ? 'active':'';
	}

	/**
	 * Função que verifica se cada valor do array $post passado como parametro esta setado
	 * @param array $post
	 * @param boolean return
	 */
	function validarCampos($post)
	{
		foreach($post as $value){
			if(empty($value)){
				return false;
			}
		}
		return true;
	}

	//Conecando com banco de dados
	conectar($config);