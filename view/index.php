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
        <a class="nav-link" href="eventos.php">Ver todos os Eventos</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
          data-target="#navbar2SupportedContent">
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
    </nav>

    <h1 class="h1-2">Agendar Evento</h1>

    <div class="py-1">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h3 class=""><b>Agende abaixo o seu evento</b></h3>
          </div>
        </div>
      </div>
    </div>
    <div class="py-1">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <form class="" method="post" action="../controller/eventoController.php">
              <div class="form-group">
                <label for="titulo"><b>Título do Evento:</b></label>
                <input type="text" class="form-control" id="titulo" name="titulo"
                  placeholder="digite o título do seu evento" required>
              </div>
              <div class="form-group">
                <label for="descricao"><b>Descrição:</b></label>
                <input type="text" class="form-control" id="descricao" name="descricao"
                  placeholder="digite uma breve descrição do seu evento" required>
              </div>
              <div class="form-group">
                <label for="dataEvento"><b>Data:</b></label>
                <input type="date" class="form-control" id="dataEvento" name="dataEvento" required>
              </div>
              <div class="form-group">
                <label for="hora"><b>Hora do Evento:</b></label>
                <input type="time" class="form-control" id="hora" name="hora" required>
              </div>
              <div class="form-group">
                <label for="email"><b>E-mail de contato:</b></label>
                <input type="email" class="form-control" id="email" name="email"
                  placeholder="digite um e-mail para entrarmos em contato" required>
              </div>
              <div class="form-group">
                <label for="telefone"><b>Telefone para contato:</b></label>
                <input type="text" class="form-control" id="telefone" name="telefone" placeholder="DDD+número"
                  maxlength="15" required>
              </div>

              <div id="divTipoEvento" class="form-group">
                <label for="presencial"><b>O seu evento é presencial?</b></label>
                <select id="presencial"  name="presencial" onchange="verificaEvento()" required>
                  <option value="">Selecione a resposta</option>
                  <option value="nao">Não</option>
                  <option value="sim">Sim</option>
                </select>
              </div>
              <div id="divLink" class="form-group">
                <input type="hidden" class="form-control" id="link" name="link" placeholder="cole aqui o link do evento" required>
              </div>
              <div id="divCep" class="form-group">
                <input type="hidden" class="form-control" id="cep" name="cep" placeholder="digite o cep do evento"
                  onkeypress="mascaraCep(this, '#####-###')" maxlength="9" required>
              </div>
              <div id="divRua" class="form-group">
                <input type="hidden"  class="form-control" id="rua" name="rua" placeholder="digite a rua do evento" required>
              </div>
              <div id="divBairro" class="form-group">
                <input type="hidden" class="form-control" id="bairro" name="bairro" placeholder="digite o bairro do evento" required>
              </div>
              <div id="divCidade" class="form-group">
                <input type="hidden" class="form-control" id="cidade" name="cidade" placeholder="digite a cidade do evento" required>
              </div>
              <div>
                <input type="submit" class="btn-dark" name="opcao" id="opcao" value="Agendar Evento" onclick="retorno()">
                <h6 id="retorno"></h6>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <div class="py-1">
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