<?php
session_start();
include_once("conexao.php");


$sqlid = "SELECT max(cad_id) FROM cad_cv";
   $sqlresposta        = mysqli_query($conn, $sqlid);
   $dadosrecebidos = mysqli_fetch_array($sqlresposta);
   $id             = $dadosrecebidos['max(cad_id)'];
   
	$id = $id + 1;




if(($_POST['curso']) > 0 ){
	$nome = addslashes($_POST['nome']);
	$email = addslashes($_POST['email']);
	$nascimento =addslashes($_POST['nascimento']);
	$estado =addslashes($_POST['estado']);
	$cidade =addslashes($_POST['cidade']);
	$bairro =addslashes($_POST['bairro']);
	$endereco =addslashes($_POST['endereco']);
	$cep =addslashes($_POST['cep']);
	$telefone =addslashes($_POST['telefone']);
	$telefone2 =addslashes($_POST['telefone2']);
	$cargo =addslashes($_POST['cargo']);
	$setor =addslashes($_POST['setor']);
	if($setor != null and $setor != ''){
		$cargo = $cargo.' - '.$setor;
		};
	$cnh =addslashes($_POST['cnh']);
	$curso =addslashes($_POST['curso']);
	$vcnh =addslashes($_POST['validade']);
	$especial =addslashes($_POST['especial']);
	$ds_especial =addslashes($_POST['ds_especial']);
	$indicacao =addslashes($_POST['indicacao']);
	$ds_indicacao =addslashes($_POST['ds_indicacao']);
	$escolaridade =addslashes($_POST['escolaridade']);
	$grau =addslashes($_POST['grau']);
	$escolaridade = $escolaridade.' '.$grau;
	$instituicao =addslashes($_POST['instituicao']);
	$ex_func =addslashes($_POST['ex_func']);
	$historia =addslashes($_POST['historia']);
	$empresa =addslashes($_POST['empresa']);




	


//Salvar no banco de dados
//$sql = "INSERT INTO cad_cv (cad_nome, cad_email, cad_nascimento,cad_estado,cad_cidade,cad_bairro, cad_cep,cad_endereco , cad_telefone,cad_telefone2,cad_cargo,cad_cnh,cad_curso,cad_validade,cad_pcd,cad_ds_pcd,cad_indicacao,cad_ds_indicacao,cad_ds_indicacao,cad_escolaridade,cad_ex_func,cad_dt_cadastro,cad_ds_historia,cad_empresa)  
//VALUES ('$nome','$email', '$nascimento','$estado','$cidade','$bairro','$cep','$endereco','$telefone','$telefone2','$cargo','$cnh','$curso','$vcnh','$especial','$ds_especial','$indicacao','$ds_especial','$escolaridade' ,'$ex_func',NOW(),'$historia','$empresa');"; 

$sql = "INSERT INTO cad_cv (cad_nome, cad_email, cad_nascimento,cad_estado,cad_cidade,cad_bairro, cad_cep ,cad_endereco, cad_telefone,cad_telefone2,cad_cargo,cad_cnh,cad_curso,cad_validade,cad_pcd,cad_ds_pcd,cad_indicacao,cad_ds_indicacao,cad_escolaridade,cad_ex_func,cad_dt_cadastro,cad_ds_historia,cad_empresa,cad_instituicao) 
VALUES ('$nome','$email', '$nascimento', '$estado','$cidade','$bairro','$cep','$endereco','$telefone','$telefone2','$cargo','$cnh','$curso','$vcnh','$especial','$ds_especial','$indicacao','$ds_especial','$escolaridade' ,'$ex_func',NOW(),'$historia','$empresa','$instituicao');"; 



$x1 = 1 ;


while($x1 <= $_POST['empregos']) {
  
  $emp = 'empresa'.$x1;
  $ad = 'admissao'.$x1;
  $de = 'demissão'.$x1;
  $crg = 'hcargo'.$x1;
  $mv = 'motivo'.$x1;
  
  $empresa1 = addslashes($_POST[$emp]);
  $dt_admissao = addslashes($_POST[$ad]);
  $dt_demissao =addslashes($_POST[$de]);
  $h_cargo =addslashes($_POST[$crg]);
  $motivo =addslashes($_POST[$mv]);

  $sql .= "INSERT INTO vagas.cad_emp
(cad_cv_id, cad_cd_nome_empresa, cad_dt_adimissao, cad_dt_demissao, cad_cargo_ant, cad_motivo_demissao)
VALUES ('$id','$empresa1','$dt_admissao','$dt_demissao','$h_cargo','$motivo');";
$x1 ++; 
}



if ($conn -> multi_query($sql)) {
	do {
	  // Store first result set
	  if ($result = $conn -> store_result()) {
		while ($row = $result -> fetch_row()) {
		  printf("%s\n", $row[0]);
		}
	   $result -> free_result();
	  }
	  // if there are more result-sets, the print a divider
	  if ($conn -> more_results()) {
		printf("$id -------------\n");
		
	  }
	   //Prepare next result set
	} while ($conn -> next_result());
  }

  

// Pasta onde o arquivo vai ser salvo
$_UP['pasta'] = 'upload/';
 
// Tamanho máximo do arquivo (em Bytes)
$_UP['tamanho'] = 1024 * 1024 * 2; // 2Mb
 
// Array com as extensões permitidas
$_UP['extensoes'] = array('pdf', 'PDF');
 
// Renomeia o arquivo? (Se true, o arquivo será salvo como .jpg e um nome único)
$_UP['renomeia'] = false;
 
// Array com os tipos de erros de upload do PHP
$_UP['erros'][0] = 'Não houve erro';
$_UP['erros'][1] = 'O arquivo no upload é maior do que o limite do PHP';
$_UP['erros'][2] = 'O arquivo ultrapassa o limite de tamanho especifiado no HTML';
$_UP['erros'][3] = 'O upload do arquivo foi feito parcialmente';
$_UP['erros'][4] = 'Não foi feito o upload do arquivo';
 
// Verifica se houve algum erro com o upload. Se sim, exibe a mensagem do erro
if ($_FILES['arquivo']['error'] != 0) {
die("Não foi possível fazer o upload, erro:<br />" . $_UP['erros'][$_FILES['arquivo']['error']]);
exit; // Para a execução do script
}
 
// Caso script chegue a esse ponto, não houve erro com o upload e o PHP pode continuar
 
// Faz a verificação da extensão do arquivo
$extensao = strtolower(end(explode('.', $_FILES['arquivo']['name'])));
if (array_search($extensao, $_UP['extensoes']) === false) {
echo "Por favor, envie arquivos com as seguintes extensões: PDF";
}
 
// Faz a verificação do tamanho do arquivo
else if ($_UP['tamanho'] < $_FILES['arquivo']['size']) {
echo "O arquivo enviado é muito grande, envie arquivos de até 2Mb.";
}
 
// O arquivo passou em todas as verificações, hora de tentar movê-lo para a pasta
else {
// Primeiro verifica se deve trocar o nome do arquivo
if ($_UP['renomeia'] == true) {
// Cria um nome baseado no UNIX TIMESTAMP atual e com extensão .jpg
$nome_final = $id.'.pdf';
} else {
// Mantém o nome original do arquivo
//$nome_final = $_FILES['arquivo']['name'];
$nome_final = $id.'.pdf';
}
 
// Depois verifica se é possível mover o arquivo para a pasta escolhida
if (move_uploaded_file($_FILES['arquivo']['tmp_name'], $_UP['pasta'] . $nome_final)) {
// Upload efetuado com sucesso, exibe uma mensagem e um link para o arquivo
echo "Upload efetuado com sucesso!";
setcookie('msgsucess', "Os dados foram enviados com Sucesso", time() + (1), "/"); // 86400 = 1 day
header("Location:index.php");

die();
//echo '<br /><a href="' . $_UP['pasta'] . $nome_final . '">Clique aqui para acessar o arquivo</a>';
} else {
// Não foi possível fazer o upload, provavelmente a pasta está incorreta
echo "Não foi possível enviar o arquivo, tente novamente";
}
 
}

  
	

  $conn -> close();


	//$resultado = mysqli_query($conn, $result);
	//$resultado = mysqli_multi_query($conn, $result);


}else if(($_POST['cargo']) > 1 ){
	


	$nome = addslashes($_POST['nome']);
	$email = addslashes($_POST['email']);
	$nascimento =addslashes($_POST['nascimento']);
	$estado =addslashes($_POST['estado']);
	$cidade =addslashes($_POST['cidade']);
	$bairro =addslashes($_POST['bairro']);
	$cep =addslashes($_POST['cep']);
	$endereco =addslashes($_POST['endereco']);
	$telefone =addslashes($_POST['telefone']);
	$telefone2 =addslashes($_POST['telefone2']);
	$cargo =addslashes($_POST['cargo']);
	$setor =addslashes($_POST['setor']);
	if($setor != null and $setor != ''){
	$cargo = $cargo.' - '.$setor;
	};
	$especial =addslashes($_POST['especial']);
	$ds_especial =addslashes($_POST['ds_especial']);
	$indicacao =addslashes($_POST['indicacao']);
	$ds_indicacao =addslashes($_POST['ds_indicacao']);
	$escolaridade =addslashes($_POST['escolaridade']);
	$grau =addslashes($_POST['grau']);
	$escolaridade = $escolaridade.' '.$grau;
	$instituicao =addslashes($_POST['instituicao']);
	$ex_func =addslashes($_POST['ex_func']);
	$historia =addslashes($_POST['historia']);
	$empresa =addslashes($_POST['empresa']);






//Salvar no banco de dados
$sql = "INSERT INTO cad_cv (cad_nome, cad_email, cad_nascimento,cad_estado,cad_cidade,cad_bairro, cad_cep ,cad_endereco, cad_telefone,cad_telefone2,cad_cargo,cad_pcd,cad_ds_pcd,cad_indicacao,cad_ds_indicacao,cad_escolaridade,cad_ex_func,cad_dt_cadastro,cad_ds_historia,cad_empresa,cad_instituicao) 
VALUES ('$nome','$email', '$nascimento', '$estado','$cidade','$bairro','$cep','$endereco','$telefone','$telefone2','$cargo','$especial','$ds_especial','$indicacao','$ds_especial','$escolaridade' ,'$ex_func',NOW(),'$historia','$empresa','$instituicao');"; 


$x1 = 1;


while($x1 <= $_POST['empregos']) {
  
  $emp = 'empresa'.$x1;
  $ad = 'admissao'.$x1;
  $de = 'demissão'.$x1;
  $crg = 'hcargo'.$x1;
  $mv = 'motivo'.$x1;
  
  $empresa1 = addslashes($_POST[$emp]);
  $dt_admissao = addslashes($_POST[$ad]);
  $dt_demissao =addslashes($_POST[$de]);
  $h_cargo =addslashes($_POST[$crg]);
  $motivo =addslashes($_POST[$mv]);

  $sql .= "INSERT INTO vagas.cad_emp
(cad_cv_id, cad_cd_nome_empresa, cad_dt_adimissao, cad_dt_demissao, cad_cargo_ant, cad_motivo_demissao)
VALUES ('$id','$empresa1','$dt_admissao','$dt_demissao','$h_cargo','$motivo');";

$x1 ++; 
}




if ($conn -> multi_query($sql)) {
	do {
	  // Store first result set
	  if ($result = $conn -> store_result()) {
		while ($row = $result -> fetch_row()) {
		  printf("%s\n", $row[0]);
		}
	   $result -> free_result();
	  }
	  // if there are more result-sets, the print a divider
	  if ($conn -> more_results()) {
		printf("$id -------------\n");

	  }
	   //Prepare next result set
	} while ($conn -> next_result());
  }

 

  

// Pasta onde o arquivo vai ser salvo
$_UP['pasta'] = 'upload/';
 
// Tamanho máximo do arquivo (em Bytes)
$_UP['tamanho'] = 1024 * 1024 * 2; // 2Mb
 
// Array com as extensões permitidas
$_UP['extensoes'] = array('pdf', 'PDF');
 
// Renomeia o arquivo? (Se true, o arquivo será salvo como .jpg e um nome único)
$_UP['renomeia'] = false;
 
// Array com os tipos de erros de upload do PHP
$_UP['erros'][0] = 'Não houve erro';
$_UP['erros'][1] = 'O arquivo no upload é maior do que o limite do PHP';
$_UP['erros'][2] = 'O arquivo ultrapassa o limite de tamanho especifiado no HTML';
$_UP['erros'][3] = 'O upload do arquivo foi feito parcialmente';
$_UP['erros'][4] = 'Não foi feito o upload do arquivo';
 
// Verifica se houve algum erro com o upload. Se sim, exibe a mensagem do erro
if ($_FILES['arquivo']['error'] != 0) {
die("Não foi possível fazer o upload, erro:<br />" . $_UP['erros'][$_FILES['arquivo']['error']]);
exit; // Para a execução do script
}
 
// Caso script chegue a esse ponto, não houve erro com o upload e o PHP pode continuar
 
// Faz a verificação da extensão do arquivo
$extensao = strtolower(end(explode('.', $_FILES['arquivo']['name'])));
if (array_search($extensao, $_UP['extensoes']) === false) {
echo "Por favor, envie arquivos com as seguintes extensões: PDF";
}
 
// Faz a verificação do tamanho do arquivo
else if ($_UP['tamanho'] < $_FILES['arquivo']['size']) {
echo "O arquivo enviado é muito grande, envie arquivos de até 2Mb.";
}
 
// O arquivo passou em todas as verificações, hora de tentar movê-lo para a pasta
else {
// Primeiro verifica se deve trocar o nome do arquivo
if ($_UP['renomeia'] == true) {
// Cria um nome baseado no UNIX TIMESTAMP atual e com extensão .jpg
$nome_final = $id.'.pdf';
} else {
// Mantém o nome original do arquivo
//$nome_final = $_FILES['arquivo']['name'];
$nome_final = $id.'.pdf';
}
 
// Depois verifica se é possível mover o arquivo para a pasta escolhida
if (move_uploaded_file($_FILES['arquivo']['tmp_name'], $_UP['pasta'] . $nome_final)) {
// Upload efetuado com sucesso, exibe uma mensagem e um link para o arquivo
echo "Upload efetuado com sucesso!";

setcookie('msgsucess', "Os dados foram enviados com Sucesso", time() + (1), "/"); // 86400 = 1 day
header("Location:index.php");

die();
//echo '<br /><a href="' . $_UP['pasta'] . $nome_final . '">Clique aqui para acessar o arquivo</a>';
} else {
// Não foi possível fazer o upload, provavelmente a pasta está incorreta
echo "Não foi possível enviar o arquivo, tente novamente";
}
 
}

  
	


  $conn -> close();


	//$resultado = mysqli_query($conn, $result);
	//$resultado = mysqli_multi_query($conn, $result);





}else{

	
	$_COOKIE['msg'] =  "Revise os campos";
	header("Location:index.php");
	//header("Location: error2.php");
}



