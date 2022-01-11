<?php
include('conexao.php');

$id = $_GET['id'];
//echo $id;
?>

<html>
  <head>
    <meta charset="utf-8">
    <title>Formulário de Cadastro de Usuarios</title>  
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  </head>
  <body>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <style type="text/css">
      #tamanhoContainer {
        width: 500px;
      }

      #botao {
        background-color: #FEC68D;
        color: #ffffff
      }

    </style>


    <?php //echo '<p>Hello World</p>'; ?> 



    <div class="container" id="tamanhoContainer" style="margin-top: 40px">

    <h4>Formulário de Cadastro </h4>

    <?php
    $sql = "select * from Users where id=$id";
    $busca = mysqli_query($conexao, $sql);
    while ($array = mysqli_fetch_array($busca)){
        $id = $array['id'];
        $nome = $array['name'];
        $email = $array['email'];
        $telefone = $array['Phone'];
        $documento = $array['Document'];
        $data_aniverssario = $array['Birth_date'];
    }

    $sql = "select * from Users_addressouser_id where id=$id";
    $busca = mysqli_query($conexao, $sql);
    while ($array = mysqli_fetch_array($busca)){
        $endereco = $array['address'];
        $numero = $array['number'];
        $complemento = $array['complement'];
        $bairro = $array['district'];
        $cidade = $array['city'];
        $estado = $array['state'];
    }
    ?>


    


      <form action="usuarios_update.php" method="post" style="margin-top: 20px">
      	<input type="text" class="form-control" id="modelo" autocomplete="off" name="id" value="<?php echo $id ?>" style="display: none;">

        <div class="form-group">
          <label>Nome</label>
          <input type="text" class="form-control" id="nome" autocomplete="off" name="nome" value="<?php echo $nome ?>">
        </div>
        <div class="form-group">
          <label>Email</label>
          <input type="text" class="form-control" id="Email" autocomplete="off" name="Email" value="<?php echo $email ?>">
        </div>
        <div class="form-group">
          <label>Telefone</label>
          <input type="text" class="form-control" id="Telefone" name="Telefone" value="<?php echo $telefone ?>" autocomplete="off">
        </div>
        <div class="form-group">
          <label>Documento</label>
          <input type="text" class="form-control" id="Documento(CPF)" name="Documento(CPF)" value="<?php echo $documento ?>" autocomplete="off">
        </div>
        <div class="form-group">
          <label>Data de Aniverssario</label>
          <input type="text" class="form-control" id="Data_de_aniverssario" name="Data_de_aniverssario" value="<?php echo $data_aniverssario ?>" autocomplete="off">
        </div>
        <div class="form-group">
          <label>Endereço</label>
          <input type="text" class="form-control" id="Endereco" name="Endereco" value="<?php echo $Endereco ?>" autocomplete="off">
        </div>
        <div class="form-group">
          <label>Numero</label>
          <input type="text" class="form-control" id="Numero" name="Numero" value="<?php echo $numero ?>" autocomplete="off">
        </div>
        <div class="form-group">
          <label>Complemento</label>
          <input type="text" class="form-control" id="Complemento" name="Complemento" value="<?php echo $complemento ?>" autocomplete="off">
        </div>
        <div class="form-group">
          <label>Bairro</label>
          <input type="text" class="form-control" id="Bairro" name="Bairro" value="<?php echo $bairro ?>" autocomplete="off">
        </div>
        <div class="form-group">
          <label>Cidade</label>
          <input type="text" class="form-control" id="Cidade" name="Cidade" value="<?php echo $cidade ?>" autocomplete="off">
        </div>
        <div class="form-group">
          <label>Estado</label>
          <input type="text" class="form-control" id="Estado" name="Estado" value="<?php echo $estado ?>" autocomplete="off">
        </div>

      <div style="text-align: right">
        <button type="submit" id="botao" class="btn btn-primary botao">Atualizar</button>
      </div>
    </form>
    </div>


  </body>
</html>