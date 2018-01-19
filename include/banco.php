<?php

/**
 * Metedo para conexão com banco de dados postgresSQL
 * @param array $config
 * @return resource 
 */
function conectar($config) 
{
    return pg_connect("host={$config['host']} dbname={$config['dbname']} user={$config['user']} password={$config['password']} ");
}

/**
 * Metodo para inserir dados em uma tabela espera receber como parametro:
 * nome da $tabela e a global $_POST com os campos e os valores a serem inseridos
 * @param string $tabela
 * @param array $dados
 * @return resource $result
 */
function inserir($tabela, $dados) 
{
    foreach($dados as $campo => $valor){
        /*Atribuindo cada $campo e $valor percorrido nos arrays $campos e $valores*/
        $campos[] = $campo;
        $valores[] = "'$valor'";
    }
    /*trasformando meus arrays em strings para que possa ser feita a inserção*/
    $campos = implode(',',$campos);
    $valores = implode(',',$valores); 

    $query = " INSERT INTO $tabela ($campos) ";
    $query.= " VALUES($valores) ";
    //echo $query;

    //executando a $query e atribuindo em $result
    $result = pg_query($query);

    return $result;
}

/**
 * Metodo para alterar dados em uma tabela espera receber como parametro:
 * nome da $tabela, $onde sera alterado e a global $_POST com os campos e os valores a serem inseridos
 * @param string $tabela
 * @param string $onde
 * @param array $dados
 * @return resource $result
 */
function editar($tabela, $onde, $dados) 
{
    foreach($dados as $campo => $valor){
        $sets[] = "$campo = '$valor'";
    }
    $sets = implode(',',$sets);

    $query = " UPDATE $tabela SET $sets WHERE $onde ";
    //executando a query
    $result = pg_query($query);
    return $result;
}

/**
 * Metodo para excluir dados em uma tabela espera receber como parametro:
 * nome da $tabela e $onde sera alterado
 * @param string $tabela
 * @param string $onde
 * @return resource $result
 */
function excluir($tabela, $onde) 
{
    $query = " DELETE FROM $tabela WHERE $onde ";
    $result = pg_query($query);
    return $result;
}

/**
 * Metodo para selecionar dados em uma tabela espera receber como parametro:
 * nome da $tabela, os $campos, $onde, $filtro, $ordem, $limite
 * @param string $tabela
 * @param string $campos
 * @param string $onde
 * @param string $filtro
 * @param string $filtro
 * @param string $limite
 * @return array $registros
 */
function listar($tabela, $campos='*', $onde=null, $filtro=null, $ordem=null, $limite=null) 
{
    $query = " SELECT $campos FROM $tabela ";

    if($onde){
        $query.= " WHERE $onde ";
    }elseif($filtro){
        $query.= " LIKE $filtro ";
    }

    if($ordem){
        $query.= " ORDER BY $ordem ";
    }

    if($limite){
        $query.= " LIMIT $limite ";
    }
    //Executando a query
    $result = pg_query($query);
    //Tranformando meu resource de dados em um array e atribuindo em $registros
    $registros = pg_fetch_all($result);
    return $registros;

}

/**
 * Metodo para selecionar um dado em uma tabela espera receber como parametro:
 * nome da $tabela, os $campos, e $onde
 * @param string $tabela
 * @param string $campos
 * @param string $onde
 * @return array $registro
 */
function ver($tabela, $onde, $campos='*') 
{
    $query = " SELECT $campos FROM $tabela WHERE $onde";
    //Executando a query
    $result = pg_query($query);
    //Tranformando meu resource de dados em um array e atribuindo em $registro
    $registro = pg_fetch_assoc($result);
    return $registro;
}

/*Array que contem valores para conexão com bd*/
/*$config = ['host' => 'localhost', 'dbname' => 'projetodexter', 'user' => 'dexter', 'password' => '63970719'];
conectar($config);

//Executando metodo de conexão com bd    
var_dump(conectar($config));*/

/*----------------------------------------------------------------------------------------*/

//Array com os campos e os valores para serem inserios na tab clientes
/*$cliente = [
    'nome_razao' => 'Instituto Edusa',
    'cpf_cnpj' => '41167936809',
    'email' => 'instituto.edusa@hotmail.com',
    'telefone' => '1141413487',
    'celular' => '11984744415',
    'cep' => '06665080',
    'endereco' => 'Rua Luiz Belli nº133 AP 52A',
    'bairro' => 'Centro',
    'cidade' => 'Barueri',
    'estado' => 'SP',
    'ip' => '63970719'
    ];*/
    
/*----------------------------------------------------------------------------------------*/
//Executando metodo de inserção
//var_dump(inserir('clientes', $cliente));

/*----------------------------------------------------------------------------------------*/
//Executando metodo de alteração
//var_dump(editar('clientes','id=26', $cliente));

/*----------------------------------------------------------------------------------------*/
//Executando metodo de exclusao
//var_dump(excluir('clientes','id=27'));

/*----------------------------------------------------------------------------------------*/
//Executando metodo de seleção
//print_r(listar('clientes'));

/*----------------------------------------------------------------------------------------*/
//Executando metodo de seleção
//print_r(ver('clientes', 'id=26'));