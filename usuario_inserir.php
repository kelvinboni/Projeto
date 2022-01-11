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

    <div class="container" id="tamanhoContainer" style="margin-top: 40px">

    <h4>Formulário de Cadastro </h4>


      <form action="usuario_insert.php" method="post" style="margin-top: 20px">

        <div class="form-group">
          <label>Nome</label>
          <input type="text" class="form-control" id="nome" autocomplete="off" name="nome" placeholder="Digite o Nome" required>
        </div>
        <div class="form-group">
          <label>Email</label>
          <input type="text" class="form-control" id="Email" autocomplete="off" name="Email" placeholder="Digite o Email" required>
        </div>
        <div class="form-group">
          <label>Telefone</label>
          <input type="text" class="form-control" id="Telefone" name="Telefone" placeholder="Digite o Telefone" autocomplete="off" required>
        </div>
        <div class="form-group">
          <label>Documento</label>
          <input type="text" class="form-control" id="Documento(CPF)" name="Documento(CPF)" placeholder="Digite seu CPF" autocomplete="off" required>
        </div>
        <div class="form-group">
          <label>Data de Aniverssario</label>
          <input type="text" class="form-control" id="Data_de_aniverssario" name="Data_de_aniverssario" placeholder="Digite sua data de aniverssario" autocomplete="off" required>
        </div>
        <div class="form-group">
          <label>Endereço</label>
          <input type="text" class="form-control" id="Endereco" name="Endereco" placeholder="Digite seu endereço" autocomplete="off" required>
        </div>
        <div class="form-group">
          <label>Numero</label>
          <input type="text" class="form-control" id="Numero" name="Numero" placeholder="Digite seu numero" autocomplete="off" required>
        </div>
        <div class="form-group">
          <label>complemento</label>
          <input type="text" class="form-control" id="Complemento" name="Complemento" placeholder="Digite um Complemento" autocomplete="off" required>
        </div>
        <div class="form-group">
          <label>Bairro</label>
          <input type="text" class="form-control" id="Bairro" name="Bairro" placeholder="Digite seu Bairro" autocomplete="off" required>
        </div>
        <div class="form-group">
          <label>Cidade</label>
          <input type="text" class="form-control" id="Cidade" name="Cidade" placeholder="Digite sua Cidade" autocomplete="off" required>
        </div>
        <div class="form-group">
          <label>Estado</label>
          <input type="text" class="form-control" id="Estado" name="Estado" placeholder="Digite seu Estado" autocomplete="off" required>
        </div>
        

      <div style="text-align: right">
        <a href="index.php" role="button" class="btn btn-sm btn-primary">Voltar</a>
        <button type="submit" id="botao" class="btn btn-primary botao">Cadastrar</button>
      </div>
    </form>
    </div>


  </body>
</html>