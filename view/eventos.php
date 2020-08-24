<!DOCTYPE php>
<php>

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/theme.css" type="text/css">
  </head>

  <body>
    <nav class="navbar navbar-expand-md navbar-orange bg-orange">
      <div class="container">
        <a class="nav-link" href="index.php">Ver todos os Eventos</a>
        <button class="navbar-toggler navbar-toggler-right-active" type="button" data-toggle="collapse"
          data-target="#navbar2SupportedContent">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse text-center justify-content-end" id="navbar2SupportedContent">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="index.php">Agendar Evento</a> </li>
          </ul>
        </div>
      </div>
    </nav>

    <h1 class="h1-2">Todos os Eventos</h1>

    <!-- <div class="py-1">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h3 class=""><b>Todos os Eventos</b></h3>
          </div>
        </div>
      </div>
    </div> -->

  <div class="py-1">
    <div class="container2">
      <div class="row">
        <div class="col-md-12">
          <table class="table" style="">
            <thead>
              <tr>
                <th>Título</th>
                <th>Descrição</th>
                <th>Data</th>
                <th>Hora</th>
                <th>E-mail</th>
                <th>Telefone</th>
                <th>Presencial?</th>
                <th>Link</th>
                <th>Cep</th>
                <th>Rua</th>
                <th>Bairro</th>
                <th>Cidade</th>
              </tr>
            </thead>
            <tbody>
          
              <?php
                  include '../model/crudEventos.php';
                  $resultado = eventos();
                  if($resultado){
                    while($linha=mysqli_fetch_assoc($resultado)){
                      $id_evento=$linha["id_evento"];
                      $titulo=$linha["titulo"];
                      $descricao=$linha["descricao"];
                      $dataEvento=$linha["dataEvento"];
                      $hora=$linha["hora"];
                      $email=$linha["email"];
                      $telefone=$linha["telefone"];
                      $presencial=$linha["presencial"];
                      $link=$linha["link"];
                      $cep=$linha["cep"];
                      $rua=$linha["rua"];
                      $bairro=$linha["bairro"];
                      $cidade=$linha["cidade"];

                      
                        echo "
                            <tr>
                                <td>$titulo</td>
                                <td>$descricao</td>
                                <td>$dataEvento</td>
                                <td>$hora</td>
                                <td>$email</td>
                                <td>$telefone</td>
                                <td>$presencial</td>
                                <td>$link</td>
                                <td>$cep</td>
                                <td>$rua</td>
                                <td>$bairro</td>
                                <td>$cidade</td>
                                <td>
                                 <a class='btn btn-dark' name='opcao' href='eventosSelecionados.php?id_evento=$id_evento'>Editar</a>                 
                                </td>                       
                            </tr>";
                    }
                  }
              ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <div class="py-5">
    <div class="container">
      <div class="row">
      </div>
    </div>
  </div>
    <div class="card-footer">
      Eventos Online e Presenciais &copy;
      <p>Contato: eventos@eventos.teste.com</p>
    </div>
    <script src="scripts/script.js"></script>
  </body>

</php>