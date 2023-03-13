<!doctype html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link REL="SHORTCUT ICON" HREF="img/logo-titulo.png">
    <title>Grupo Gevan - Trabalhe Conosco</title>
    <meta charset="UTF-8"> <link href="estilo.css" rel="stylesheet" type="text/css"> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<script type="text/javascript" src="function.js">
</script>
<script type="text/javascript" src="cep.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>
<script type="text/javascript">
    $("#telefone, #telefone2").mask("(00)00000-0000");

$("input, select", "form") // busca input e select no form

    </script>
<script> 
  jQuery(window).load(function () {
      $(".loader").delay().fadeOut("slow"); //retire o delay quando for copiar!
    $("#tudo_page").toggle("fast");
});
</script>

   
  </head>
  <header class="cabecalho"> <h1> <img src="img/logo.png"> </h1> 
</header>
  <body>
  <div id="loader" class="loader"></div>
<div class="container-fluid" style="display:none" id="tudo_page" >
<?php 
session_start();
$erro = $_COOKIE['msg'];
  if($erro != null and $erro != ''){
      echo "<h3 class='text-center'  style='color: #f00;'>$erro</h3>";
    }; 
    $sucess = $_COOKIE['msgsucess'];
    if($sucess != null and $sucess != ''){
      echo "<h3 class='text-center' style='color: #00FF00;'>$sucess</h3>";
    }; 
  ?>
<form method="POST"  action="processa.php" enctype="multipart/form-data">

<div class="text-left form-group row">
    <div class="row text-center">
      <p></p>
        <h2>Trabalhe Conosco</h2>
    </div>
 <!-- Button trigger modal -->
<button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#dadospessoais">
  Dados Pessoais
</button>

<!-- Modal -->
<div class="modal fade" id="dadospessoais" tabindex="-1" aria-labelledby="dadospessoais" aria-hidden="true">
  <div class="modal-dialog modal-xl modal-dialog-centered ">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-dark" id="dadospessoais">Dados Pessoais</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body text-dark">
 <div class="row col-sm pb-3">
    <label class="col-sm col-form-label col-form-label-lg">Nome Completo *</label>
      <div class="col-sm-8">
      <input class="form-control text-uppercase"  oninvalid="alert('Preencha  corretamente o Nome no Campo de dados Pessoais!')" name="nome" value="" type="text" required="required"   placeholder="Digite seu Nome Completo"> 
      </div>
  </div>
  <div class="row col-sm pb-3">
    <label class="col-sm col-form-label col-form-label-lg">Email *</label>
      <div class="col-sm-8">
      <input class="form-control text-uppercase"  oninvalid="alert('Preencha  corretamente o Email no Campo de dados Pessoais!')" name="email" value="" type="email"  required="required" placeholder="Digite seu E-mail"> 
      </div>
  </div>
  <div class="row col-sm pb-3">
    <label class="col-sm col-form-label col-form-label-lg">Data de Nascimento *</label>
      <div class="col-sm-8">
      <input class="form-control text-uppercase" id="nascimento" min="1940-01-01" max="2100-12-31" name="nascimento" oninvalid="alert('Preencha  corretamente a Data de Nascimento no Campo de dados Pessoais!')" value="" pattern="\d{1,2}/\d{1,2}/\d{4}" type="date"  required="required"  placeholder="Digite sua data de Nascimento"> 
     
      </div>
  </div>
  <div class="row col-sm pb-3">
    <label class="col-sm col-form-label col-form-label-lg">Celular *</label>
      <div class="col-sm-8">
      <input class="form-control text-uppercase" id="telefone" name="telefone" value="" oninvalid="alert('Preencha  corretamente o Celular no Campo de dados Pessoais!')" type="tel" required="required"   placeholder="Somente Números"> 
      </div>
  </div>
  <div class="row col-sm pb-3">
    <label class="col-sm col-form-label col-form-label-lg">Celular 2</label>
      <div class="col-sm-8">
      <input class="form-control text-uppercase" id="telefone2" name="telefone2" value="" type="tel" placeholder="Somente Números"> 
      </div>
  </div>
  <div class="row col-sm pb-3">
    
    

<label class="col-sm col-form-label col-form-label-lg">Escolaridade</label>
      <div class="col-sm-8">
    <select class="form-select" id="validationServer01"  name="escolaridade" aria-label="Default select example"  required>
   <!---- <option selected>Selecione uma opção</option> -->
        <option selected  value="Fundamental">Fundamental</option>
        <option value="Médio">Médio </option>
        <option value="Superior">Superior</option>
        <option value="Pós-graduação">Pós-graduação</option>
        </select>
    </div>
  </div>
  <div class="row col-sm pb-3">
    <label class="col-sm-5 col-form-label col-form-label-lg" ></label>
    
        <div class="row col-sm-2 pt-2">
        <div class="form-check" onchange="exibir_grau(this)">
          <input class="form-check-input" value="Cursando" type="radio" name="grau" id="flexRadioDefault8">
          <label class="form-check-label"  for="flexRadioDefault8">
          Cursando
          </label>
          </div>
          </div>
          <div class="row col-sm-2 pt-2">
          <div class="form-check" onchange="exibir_grau(this)">
          <input class="form-check-input"  value="Completo" type="radio"   name="grau" id="flexRadioDefault9" >
          <label class="form-check-label" for="flexRadioDefault9">
          Completo
          </label>
          </div>
          </div>
  </div>

  <div class="row col-sm pr-80">
    <label class="col-sm-4 col-form-label col-form-label-lg" id="tgrau">Instituição de ensino *</label>
      <div class="col-sm">
      <input class="form-control text-uppercase" id="grau" name="instituicao" value="" type="text" required  oninvalid="alert('Preencha  corretamente a Instituição de ensino no campo  de dados Pessoais!')"  placeholder="Digite onde você estuda/estudou ?"> 
      </div>
  </div>
  
      </div>
      <div class="modal-footer justify-content-between">
      <button type="button" class="btn btn-danger" data-bs-dismiss="modal" >Fechar</button>
        <button type="button" class="btn btn-success" data-bs-dismiss="modal" data-bs-toggle="modal" data-bs-target="#endereco" >Próximo</button>

      </div>
    </div>
  </div>
</div>
  <!-- Button trigger modal -->
<button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#endereco">
  Endereço
</button>


<!-- Modal -->
<div class="modal fade" id="endereco" tabindex="-1" aria-labelledby="endereco" aria-hidden="true">
  <div class="modal-dialog modal-xl modal-dialog-centered ">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-dark" id="endereco">Endereço</h5>
        <button type="button" class="btn-close"  data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body text-dark">
  <div class="row col-sm pb-3">
    <label class="col-sm col-form-label col-form-label-lg">CEP *</label>
      <div class="col-sm-10">
      <input class="form-control text-uppercase"  onblur="pesquisacep(this.value);" id="cep" for="cep" name="cep" value="" type="text" oninvalid="alert('Preencha  corretamente o CEP no campo de Endereço!')" required="required"  placeholder="Digite seu cep"> 
      </div>
  </div>
 <div class="row col-sm pb-3">
    <label class="col-sm col-form-label col-form-label-lg">Estado *</label>
      <div class="col-sm-10">
      <select class="form-select text-uppercase" id="uf" name="estado" id="validationServer01" oninvalid="alert('Preencha  corretamente o Estado no campo de Endereço!')"  name="cargo" aria-label="Default select example"  required>
   <!---- <option selected>Selecione uma opção</option> -->
   <option selected value=""></option>
   <option value="AC">Acre</option>
	<option value="AL">Alagoas</option>
	<option value="AP">Amapá</option>
	<option value="AM">Amazonas</option>
	<option value="BA">Bahia</option>
	<option value="CE">Ceará</option>
	<option value="DF">Distrito Federal</option>
	<option value="ES">Espírito Santo</option>
	<option value="GO">Goiás</option>
	<option value="MA">Maranhão</option>
	<option value="MT">Mato Grosso</option>
	<option value="MS">Mato Grosso do Sul</option>
	<option value="MG">Minas Gerais</option>
	<option value="PA">Pará</option>
	<option value="PB">Paraíba</option>
	<option value="PR">Paraná</option>
	<option value="PE">Pernambuco</option>
	<option value="PI">Piauí</option>
	<option value="RJ">Rio de Janeiro</option>
	<option value="RN">Rio Grande do Norte</option>
	<option value="RS">Rio Grande do Sul</option>
	<option value="RO">Rondônia</option>
	<option value="RR">Roraima</option>
	<option value="SC">Santa Catarina</option>
	<option value="SP">São Paulo</option>
	<option value="SE">Sergipe</option>
	<option value="TO">Tocantins</option>
        </select>
  </div>
 </div>
  <div class="row col-sm pb-3">
    <label class="col-sm col-form-label col-form-label-lg">Cidade *</label>
      <div class="col-sm-10">
      <input class="form-control text-uppercase" id="cidade" name="cidade" value="" type="text" oninvalid="alert('Preencha  corretamente a Cidade no campo de Endereço!')" pattern="([aA-zZ ]+)" required="required" placeholder="Digite seu Bairro"> 
      </div>
  </div>
  <div class="row col-sm pb-3">
    <label class="col-sm col-form-label col-form-label-lg">Bairro *</label>
      <div class="col-sm-10">
      <input class="form-control text-uppercase"  id="bairro" name="bairro" value=""  type="text" oninvalid="alert('Preencha  corretamente o Bairro no campo de Endereço!')" required="required" placeholder="Digite seu Bairro"> 
      </div>
  </div>
  <div class="row col-sm pb-3">
    <label class="col-sm col-form-label col-form-label-lg">Endereço *</label>
      <div class="col-sm-10">
      <input class="form-control text-uppercase" id="rua"  name="endereco" oninvalid="alert('Preencha  corretamente o Endreço!')" value="" type="text"  required="required"  placeholder="Digite seu Endereço completo"> 
      </div>
  </div>
      </div>
      <div class="modal-footer justify-content-between justify-content-between">
      <button type="button" class="btn btn-warning" data-bs-dismiss="modal"  data-bs-toggle="modal" data-bs-target="#dadospessoais">Voltar</button>
        <button type="button" class="btn btn-success" data-bs-dismiss="modal" data-bs-toggle="modal" data-bs-target="#vaga" >Próximo</button>


      </div>
    </div>
  </div>
</div>
  


  <!-- Button trigger modal -->
<button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#vaga">
  Vaga a se Candidatar
</button>

<!-- Modal -->
<div class="modal fade" id="vaga" tabindex="-1" aria-labelledby="vaga" aria-hidden="true">
  <div class="modal-dialog modal-xl modal-dialog-centered ">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-dark" id="vaga">Função </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body text-dark">
 <div class="row col-sm pb-3">
    


<label class="col-sm col-form-label col-form-label-lg">Função</label>
      <div class="col-sm-8">
    <select class="form-select" onchange="exibir_ocultar(this)" id="validationServer01"  name="cargo" aria-label="Default select example"  required>
   <!---- <option selected>Selecione uma opção</option> -->
   <option value="Motorista">Motorista</option>
        <option  value="Cobrador">Cobrador</option>
        <option value="Manutenção de ônibus">Manutenção de Ônibus</option>
        <option  selected value="Administrativo">Administrativo</option>
        </select>
        <label id="text1">Motorista é necessário carteira D com experiência </label>
        <label id="text2"> Cobrardor é necessário carteira B , ter 25 anos e ensino médio completo</label>
        <label id="text3"> Manutenção de ônibus (Mecânico) </label>
        </div>
  </div>

  <div class="row col-sm pr-80">
    <label class="col-sm-4 col-form-label col-form-label-lg" id="tsetor">Setor que deseja</label>
      <div class="col-sm">
      <input class="form-control text-uppercase" id="setor" name="setor" value="" type="text"    placeholder="Digite o setor em que deseja trabalhar"> 
      </div>
  </div>

  <div class="row col-sm pb-3">
    <label class="col-sm-4 col-form-label col-form-label-lg" id="cnhtitulo" >CNH</label>
      <div class="col-sm">
      <input class="form-control text-uppercase"  name="cnh" id="cnh" value="" type="text" pattern="[0-9]+$" placeholder="Digite sua CNH">  
      </div>
  </div>
  <div class="row col-sm pb-3">
    <label class="col-sm-4 col-form-label col-form-label-lg" id="validadetitulo" > Data de validade da CNH </label>
      <div class="col-sm">
      <input class="form-control text-uppercase" id="validade" name="validade" value="" type="date"  min="1940-01-01" max="2100-12-31" placeholder="Digite sua data de Nascimento"> 
      </div>
  </div>


  <div class="row col-sm pb-3">
    <label class="col-sm-4 col-form-label col-form-label-lg" id="cursotitulo" >Curso CONTRAN </label>
      <div class="col-sm">
      <input class="form-control text-uppercase"  name="curso" id="curso" value="" type="text" pattern="[0-9]+$" placeholder="Digite seu Curso CONTRAN"> 
      </div>
  </div>




  <div class="row col-sm">
    <label class="col-sm-4 col-form-label col-form-label-lg">Deseja ingressar na : </label>
          <div class="col-sm">
        <select class="form-select" id="validationServer01"  name="empresa" aria-label="Default select example"  required>
       <!---- <option selected>Selecione uma opção</option> -->
            <option selected  value="Integra Plataforma">Integra Plataforma </option>
            <option value="Expresso Metropolitano">Expresso Metropolitano</option>
            <option value="Litoral Norte">Litoral Norte </option>
            </select>
            </div>
      </div>

  <div class="row col-sm">
    <label class="col-sm-5 col-form-label col-form-label-lg" id="validadetitulo" > Portador de necessidades especiais ?</label>
   
        <div class="row col-sm-2 pt-2">
        <div class="form-check" onchange="exibir_necessidade(this)">
          <input class="form-check-input" value="sim" type="radio" name="especial" id="flexRadioDefault1">
          <label class="form-check-label"  for="flexRadioDefault1">
          Sim
          </label>
          </div>
          </div>
          <div class="row col-sm-2 pt-2">
          <div class="form-check" onchange="ocultar_necessidade(this)">
          <input class="form-check-input"  value="nao" type="radio" checked name="especial" id="flexRadioDefault2" >
          <label class="form-check-label" for="flexRadioDefault2">
          Não
          </label>
          </div>
          </div>
  </div>


  <div class="row col-sm pr-80">
    <label class="col-sm-4 col-form-label col-form-label-lg" id="simptitulo">Qual a necessidade ?</label>
      <div class="col-sm">
      <input class="form-control text-uppercase" id="simp" name="ds_especial" value="" type="text"    placeholder="Digite sua necessidade especial"> 
      </div>
  </div>



  <div class="row col-sm">
    <label class="col-sm-5 col-form-label col-form-label-lg" id="validadetitulo" >Tem indicação ?</label>
    
        <div class="row col-sm-2 pt-2">
        <div class="form-check" onchange="exibir_indicacao(this)">
          <input class="form-check-input" value="sim" type="radio" name="indicacao" id="flexRadioDefault3">
          <label class="form-check-label"  for="flexRadioDefault3">
          Sim
          </label>
          </div>
          </div>
          <div class="row col-sm-2 pt-2">
          <div class="form-check" onchange="ocultar_indicacao(this)">
          <input class="form-check-input"  value="nao" type="radio"  checked name="indicacao" id="flexRadioDefault4" >
          <label class="form-check-label" for="flexRadioDefault4">
          Não
          </label>
          </div>
          </div>
  </div>


  <div class="row col-sm pr-80">
    <label class="col-sm-4 col-form-label col-form-label-lg" id="tindicacao">Matricula e Nome de quem indicou</label>
      <div class="col-sm">
      <input class="form-control text-uppercase" id="indicacao" name="ds_especial" value="" type="text"    placeholder="Digite a matricula e nome de quem indicou"> 
      </div>
  </div>

  <div class="row col-sm">
    <label class="col-sm-5 col-form-label col-form-label-lg" id="validadetitulo" > Ex-funcionário  ?</label>
   
        <div class="row col-sm-2 pt-2">
        <div class="form-check" onchange="exibir_func(this)">
          <input class="form-check-input" value="sim" type="radio" name="func" id="flexRadioDefault5">
          <label class="form-check-label"  for="flexRadioDefault5">
          Sim
          </label>
          </div>
          </div>
          <div class="row col-sm-2 pt-2">
          <div class="form-check" onchange="ocultar_func(this)">
          <input class="form-check-input"  value="nao" type="radio" checked name="func" id="flexRadioDefault6" >
          <label class="form-check-label" for="flexRadioDefault6">
          Não
          </label>
          </div>
          </div>
  </div>


  <div class="row col-sm pr-80">
    <label class="col-sm-4 col-form-label col-form-label-lg" id="func">Digite sua Antiga matricula</label>
      <div class="col-sm">
      <input class="form-control text-uppercase" id="dsfunc" name="func" value="" type="text"    placeholder="Digite sua Matricula antiga"> 
      </div>
  </div>
  <div class="row col-sm-4 pb-3">
      </div>
      <div class="modal-footer justify-content-between">
      <button type="button" class="pull-right btn btn-warning" data-bs-dismiss="modal"  data-bs-toggle="modal" data-bs-target="#endereco">Voltar</button>
        <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#historico" data-bs-dismiss="modal">Próximo</button>

      </div>
    </div>
  </div>
</div>
</div>

<!-- Button trigger modal -->
<button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#historico">
  Experiência de Trabalho
</button>

<!-- Modal -->
<div class="modal fade" id="historico" tabindex="-1" aria-labelledby="historico" aria-hidden="true">
  <div class="modal-dialog modal-xl modal-dialog-centered ">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-dark" id="historico">Experiência </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body text-dark">
    
<div class="row col-sm pb-3">
    <label class="col-sm-4  col-form-label col-form-label-lg"> Possui Experiência ? </label>
          <div class="col-sm">
        <select class="form-select" onchange="exibir_historico(this)" id="validationServer01"  name="empregos" aria-label="Default select example"  required>
       <!---- <option selected>Selecione uma opção</option> -->
            <option selected  value="0"> Não</option>
            <option value="1">1ª Experiência</option>
            <option value="2">2ª Experiência </option>
            <option value="3">3ª Experiência </option>
            <option value="4">4ª Experiência </option>
            <option value="5">5ª Experiência </option>
            </select>
            </div>
      </div>
  

  <div class="row col-sm pb-2">
    <label class="col-sm-4 col-form-label col-form-label-lg" id="dsn1">* Empresa 1 </label>
      <div class="col-sm">
      <input class="form-control text-uppercase" id="nm1" name="empresa1" value="" type="text" placeholder="Digite o nome da empresa"> 
      </div>
  </div>
  <div class="row col-sm pb-2">
    <label class="col-sm-4 col-form-label col-form-label-lg" id="dsd1">Admissão </label>
      <div class="col-sm">
      <input class="form-control text-uppercase" id="dt1" name="admissao1" value="" min="1940-01-01" max="2100-12-31" type="date"> 
      </div>
  </div>
  <div class="row col-sm pb-2">
    <label class="col-sm-4 col-form-label col-form-label-lg" id="dsdd1">Demissão</label>
      <div class="col-sm">
      <input class="form-control text-uppercase" id="dtd1" name="demissão1" min="1940-01-01" max="2100-12-31"  value="" type="date"> 
      </div>
  </div>
  <div class="row col-sm pb-2">
    <label class="col-sm-4 col-form-label col-form-label-lg" id="dsc1">Cargo</label>
      <div class="col-sm">
      <input class="form-control text-uppercase" id="hcargo1" name="hcargo1" value="" type="text"  placeholder="Digite seu cargo"> 
      </div>
  </div>
  <div class="row col-sm pb-2">
    <label class="col-sm-4 col-form-label col-form-label-lg" id="dsm1">Motivo da Demissão</label>
      <div class="col-sm">
      <input class="form-control text-uppercase" id="motivo1" name="motivo1" value="" type="text"  placeholder="Digite o motivo da sua demissão"> 
      </div>
  </div>

  <div class="row col-sm pb-2">
    <label class="col-sm-4 col-form-label col-form-label-lg" id="dsn2">* Empresa 2 </label>
      <div class="col-sm">
      <input class="form-control text-uppercase" id="nm2" name="empresa2" value="" type="text" placeholder="Digite o nome da empresa"> 
      </div>
  </div>
  <div class="row col-sm pb-2">
    <label class="col-sm-4 col-form-label col-form-label-lg" id="dsd2">Admissão </label>
      <div class="col-sm">
      <input class="form-control text-uppercase" id="dt2" name="admissao2" value="" min="1940-01-01" max="2100-12-31" type="date"> 
      </div>
  </div>
  <div class="row col-sm pb-2">
    <label class="col-sm-4 col-form-label col-form-label-lg" id="dsdd2">Demissão</label>
      <div class="col-sm">
      <input class="form-control text-uppercase" id="dtd2" name="demissão2" value="" min="1940-01-01" max="2100-12-31" type="date"> 
      </div>
  </div>
  <div class="row col-sm pb-2">
    <label class="col-sm-4 col-form-label col-form-label-lg" id="dsc2">Cargo</label>
      <div class="col-sm">
      <input class="form-control text-uppercase" id="hcargo2" name="hcargo2" value="" type="text"  placeholder="Digite seu cargo"> 
      </div>
  </div>
  <div class="row col-sm pb-2">
    <label class="col-sm-4 col-form-label col-form-label-lg" id="dsm2">Motivo da Demissão</label>
      <div class="col-sm">
      <input class="form-control text-uppercase" id="motivo2" name="motivo2" value="" type="text"  placeholder="Digite o motivo da sua demissão"> 
      </div>
  </div>
  <div class="row col-sm pb-2">
    <label class="col-sm-4 col-form-label col-form-label-lg" id="dsn3">* Empresa 3 </label>
      <div class="col-sm">
      <input class="form-control text-uppercase" id="nm3" name="empresa3" value="" type="text" placeholder="Digite o nome da empresa"> 
      </div>
  </div>
  <div class="row col-sm pb-2">
    <label class="col-sm-4 col-form-label col-form-label-lg" id="dsd3">Admissão </label>
      <div class="col-sm">
      <input class="form-control text-uppercase" id="dt3" name="admissao3" min="1940-01-01" max="2100-12-31" value="" type="date"> 
      </div>
  </div>
  <div class="row col-sm pb-2">
    <label class="col-sm-4 col-form-label col-form-label-lg" id="dsdd3">Demissão</label>
      <div class="col-sm">
      <input class="form-control text-uppercase" id="dtd3" name="demissão3" min="1940-01-01" max="2100-12-31" value="" type="date"> 
      </div>
  </div>
  <div class="row col-sm pb-2">
    <label class="col-sm-4 col-form-label col-form-label-lg" id="dsc3">Cargo</label>
      <div class="col-sm">
      <input class="form-control text-uppercase" id="hcargo3" name="hcargo3" value="" type="text"  placeholder="Digite seu cargo"> 
      </div>
  </div>
  <div class="row col-sm pb-2">
    <label class="col-sm-4 col-form-label col-form-label-lg" id="dsm3">Motivo da Demissão</label>
      <div class="col-sm">
      <input class="form-control text-uppercase" id="motivo3" name="motivo3" value="" type="text"  placeholder="Digite o motivo da sua demissão"> 
      </div>
  </div>

  <div class="row col-sm pb-2">
    <label class="col-sm-4 col-form-label col-form-label-lg" id="dsn4">* Empresa 4</label>
      <div class="col-sm">
      <input class="form-control text-uppercase" id="nm4" name="empresa4" value="" type="text" placeholder="Digite o nome da empresa"> 
      </div>
  </div>
  <div class="row col-sm pb-2">
    <label class="col-sm-4 col-form-label col-form-label-lg" id="dsd4">Admissão </label>
      <div class="col-sm">
      <input class="form-control text-uppercase" id="dt4" name="admissao4" value=""  min="1940-01-01" max="2100-12-31"type="date"> 
      </div>
  </div>
  <div class="row col-sm pb-2">
    <label class="col-sm-4 col-form-label col-form-label-lg" id="dsdd4">Demissão</label>
      <div class="col-sm">
      <input class="form-control text-uppercase" id="dtd4" name="demissão4" value="" min="1940-01-01" max="2100-12-31" type="date"> 
      </div>
  </div>
  <div class="row col-sm pb-2">
    <label class="col-sm-4 col-form-label col-form-label-lg" id="dsc4">Cargo</label>
      <div class="col-sm">
      <input class="form-control text-uppercase" id="hcargo4" name="hcargo4" value="" type="text"  placeholder="Digite seu cargo"> 
      </div>
  </div>
  <div class="row col-sm pb-2">
    <label class="col-sm-4 col-form-label col-form-label-lg" id="dsm4">Motivo da Demissão</label>
      <div class="col-sm">
      <input class="form-control text-uppercase" id="motivo4" name="motivo4" value="" type="text"  placeholder="Digite o motivo da sua demissão"> 
      </div>
  </div>
  <div class="row col-sm pb-2">
    <label class="col-sm-4 col-form-label col-form-label-lg" id="dsn5">* Empresa 5 </label>
      <div class="col-sm">
      <input class="form-control text-uppercase" id="nm5" name="empresa5" value="" type="text" placeholder="Digite o nome da empresa"> 
      </div>
  </div>
  <div class="row col-sm pb-2">
    <label class="col-sm-4 col-form-label col-form-label-lg" id="dsd5">Admissão </label>
      <div class="col-sm">
      <input class="form-control text-uppercase" id="dt5" name="admissao5" value="" min="1940-01-01" max="2100-12-31" type="date"> 
      </div>
  </div>
  <div class="row col-sm pb-2">
    <label class="col-sm-4 col-form-label col-form-label-lg" id="dsdd5">Demissão</label>
      <div class="col-sm">
      <input class="form-control text-uppercase" id="dtd5" name="demissão5" value="" min="1940-01-01" max="2100-12-31" type="date"> 
      </div>
  </div>
  <div class="row col-sm pb-2">
    <label class="col-sm-4 col-form-label col-form-label-lg" id="dsc5">Cargo</label>
      <div class="col-sm">
      <input class="form-control text-uppercase" id="hcargo5" name="hcargo5" value="" type="text"  placeholder="Digite seu cargo"> 
      </div>
  </div>
  <div class="row col-sm pb-2">
    <label class="col-sm-4 col-form-label col-form-label-lg" id="dsm5">Motivo da Demissão</label>
      <div class="col-sm">
      <input class="form-control text-uppercase" id="motivo5" name="motivo5" value="" type="text"  placeholder="Digite o motivo da sua demissão"> 
      </div>
  </div>


      </div>
      <div class="modal-footer justify-content-between">
        <button type="button" class="btn btn-warning" data-bs-dismiss="modal"  data-bs-toggle="modal" data-bs-target="#vaga">Voltar</button>
        <button type="button" class="btn btn-success" data-bs-dismiss="modal"  data-bs-toggle="modal" data-bs-target="#historia ">Próximo</button>
      </div>
    </div>
  </div>
</div>



<!-- Button trigger modal -->
<button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#historia">
 Conte sua História
</button>

<!-- Modal -->
<div class="modal fade" id="historia" tabindex="-1" aria-labelledby="historia" aria-hidden="true">
  <div class="modal-dialog modal-xl modal-dialog-centered ">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-dark" id="historia">Conte sua História </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body text-dark">
 <div class="row col-sm pb-3">
    <label class="col-sm-3 col-form-label col-form-label-lg" id="dsh">Conte sua História</label>
      <div class="col-sm mb-3">
      <textarea class="form-control h-auto text-uppercase" id="historia" name="historia" rows="10" value="" type="text" placeholder="Digite sua historia "></textarea>
      </div>
  </div>
  
  <div class="row col-sm pb-3 ">
        <?php if ($msg != false) echo "<div class=\"alert $class\" role=\"alert\">$msg</div>"; ?>
           <label class="col-sm-3 col-form-label col-form-label-lg" > Anexar CNIS *</label>
           <input type="hidden" name="enviou" oninvalid="alert('Favor anexar o CNIS')" value="1">
           <div class="col-sm"
          <center> <input type="file" class="form-control" oninvalid="alert('Favor anexar o CNIS no campo conte sua história!')" required name="arquivo"> </center>
  </div>
      <div class="modal-footer justify-content-between">
      <button type="button" class="btn btn-warning" data-bs-dismiss="modal"  data-bs-toggle="modal" data-bs-target="#historico">Voltar</button>
        <button type="button" class="btn btn-success" data-bs-dismiss="modal">Fechar</button>

      </div>
    </div>
  </div>
</div>
  
       
     

    </div>

  

  </div>




<br>
  
<div class="row pb-4"></div>

  <div class="row text-center">
    
    <div class="col-sm pb-3 ">
  <label class="font-weight-bold text-light"> <h5> Termo de Aceite <h5> </label>
  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" required="required" >
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Exibir Termo
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-dark center " id="exampleModalLabel" >Termo de Aceite</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body text-dark">
      Leia o nosso termo de adesão, caso opte por enviar, você poderá aceitar automaticamente os termos abaixo. Em caso de recusa, 
      saia da página de cadastro, caso ACEITE, clique em ENVIAR <p></p>

TERMOS E CONDIÇÕES GERAIS PARA CADASTRAMENTO DE CURRÍCULO NA PLATAFORMA TRANSPORTES SPE S/A<p></p> 
Os termos e condições abaixo se aplicam aos benefícios e serviços disponibilizados pela PLATAFORMA TRANSPORTES SPE S/A para inclusão 
em seu banco de currículos, seja ele físico (impresso) ou online. <p></p>1. CONSIDERAÇÕES INICIAIS 1.1. O(A) CANDIDATO(A) DECLARA TER CONHECIMENTO 
QUE AO ENVIAR UM CURRÍCULO À PLATAFORMA TRANSPORTES SPE S/A IMPLICARÁ NA ACEITAÇÃO DE TODOS OS TERMOS DESTE CONTRATO. <p></p>2. CADASTRO DO CURRÍCULO 
DO(A) CANDIDATO(A) 2.1. Ao se cadastrar, O(A) CANDIDATO(A) compromete-se a fornecer informações verdadeiras, atualizadas e completas. 2.2. 
A inserção, correção, bem como a veracidade de todos os dados e informações fornecidos pelo (a) CANDIDATO(A) no cadastramento de seu currículo, 
serão de sua inteira responsabilidade. 2.3. Fica proibido o cadastramento do currículo por parte de PESSOAS JURÍDICAS e o uso dos dados desta, 
este cadastro é reservado para PESSOAS FÍSICAS. <p></p> 3. E-MAIL E ARMAZENAMENTO DE E-MAIL 3.1. O(A) CANDIDATO(A) autoriza expressamente a 
PLATAFORMA TRANSPORTES SPE S/A a enviar e-mail pertinente a toda e qualquer comunicação da empresa e das VAGAS oferecidas. 
<p></p>4. PREÇO E LIMITE DE ACESSO 4.1. O cadastramento e a permanência do currículo são GRATUITOS, não havendo limite de tempo para que O(A) 
CANDIDATO(A) permaneça cadastrado. <p></p>5. PRIVACIDADE E USO DE INFORMAÇÕES DO(A) CANDIDATO(A) 5.1. É política da PLATAFORMA TRANSPORTES SPE S/A 
respeitar a privacidade de seus USUÁRIOS. Assim sendo, a PLATAFORMA TRANSPORTES SPE S/A não monitorará, editará ou revelará nenhuma informação 
DO(A) CANDIDATO(A) ou sobre o uso destes serviços PELO(A) CANDIDATO(A), sem sua permissão, ou sem o exclusivo fim de participação em processo de 
seleção. 5.2. Não possuímos parceria com nenhum outro site ou empresa, os dados dos candidatos não serão comercializados emprestados ou cedidos 
para qualquer outro fim que não seja o objetivo sugerido pela PLATAFORMA TRANSPORTES SPE S/A. 5.3. O(A) CANDIDATO(A) AUTORIZA A PLATAFORMA 
TRANSPORTES SPE S/A, A ENVIAR INFORMAÇÕES ATRAVÉS DE TORPEDO SMS PARA SEU CELULAR OU AINDA ATRAVÉS DE E-MAIL. <p>
</p> 6. OBRIGAÇÕES DO(A) CANDIDATO(A) 
6.1. O(A) CANDIDATO(A) compromete-se a comparecer às entrevistas nas agências, ou local indicado pela mesma, ou na empresa contratante, 
caso seja agendado esse compromisso; 6.2. Ser honesto, verdadeiro e sincero em todo o tempo no relacionamento com a PLATAFORMA TRANSPORTES SPE S/A, 
dizendo realmente o que deseja em sua vida profissional. 6.3. Candidatar-se somente a vagas que sejam realmente de seu interesse profissional, 
especificar durante o cadastramento. 6.4. NÃO enviar/divulgar para os e-mails da PLATAFORMA TRANSPORTES SPE S/A, e-mails contendo quaisquer 
tipos de vírus ou que possam causar danos ao seu destinatário ou terceiros, correntes ou mensagens similares. Utilizar os e-mails de contato da 
PLATAFORMA TRANSPORTES SPE S/A apenas para fins profissionais e não pessoais. 6.5. Informar à PLATAFORMA TRANSPORTES SPE S/A, quando já estiver 
trabalhando, e quanto não tiver mais interesse de manter o cadastro, ou mesmo não for do interesse ser encaminhado ou avisado de possíveis vagas; 
6.6. Na hipótese de a PLATAFORMA TRANSPORTES SPE S/A constatar que O(A) CANDIDATO(A) descumpriu qualquer das obrigações estabelecidas nas 
Cláusulas 6.1, 6.2, 6.3, 6.4 e 6.5 acima, fica assegurado o direito da PLATAFORMA TRANSPORTES SPE S/A de SUSPENDER o cadastro DO(A) CANDIDATO(A), 
ficando o mesmo em situação profissional negativa, no que diz respeito a ética e conduta profissional. <p></p>7. A PLATAFORMA TRANSPORTES SPE S/A não 
exige apresentação de números de documentos como identidade, CPF, Carteira de Trabalho ou Título de Eleitor no ato do cadastro. Essas informações 
poderão vir a ser solicitadas posteriormente durante o processo seletivo. <p></p> 8. RENOVAÇÃO E RESCISÃO DO CONTRATO 8.1. O presente contrato é de duração 
indeterminada permanecendo válido enquanto O(A) CANDIDATO(A) mantiver seu currículo cadastrado na PLATAFORMA TRANSPORTES SPE S/A observadas todas as 
disposições dos artigos 6º e 7º deste termo. 8.2. Nos casos em que o CANDIDATO(A) já tenha solicitado a retira de seu currículo de nosso banco de 
dados, mas a posterior decidir incluir novamente poderá fazer renovação dos dados sem restrições durante o cadastramento, a seu critério, a 
PLATAFORMA TRANSPORTES SPE S/A irá fazer uma varredura para disponibilizar os dados mais atualizados do CANDIDATO(A); 8.2.1. A Ressalva no texto 
acima será apenas em caso o CANDIDATO(A) tenha sido BANIDO dos banco de dados, por algo que tenha causado de grave a PLATAFORMA TRANSPORTES SPE S/A, 
ou por ter descumprido pontos relevantes deste TERMO DE ADESÃO, assim não será permitida a RENOVAÇÃO. 8.3. Nos casos em que as regras de 
cadastramento sejam quebradas, a seu critério, a PLATAFORMA TRANSPORTES SPE S/A irá bloquear novas inclusões do currículo do usuário, sem a 
necessidade de comunicar ao usuário.

      </div>
      <div class="modal-footer justify-content-between">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>

      </div>
    </div>
  </div>
</div>
</div>
    </div>



        <Center><input type="submit" id="enviar" value="Enviar"></Center>
</form>









  </body>
</html>