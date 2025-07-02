<!doctype html>
<html lang="pt-BR">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>CRUD Clientes</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
</head>

<body>
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">CRUD Clientes</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="?page=listar">Listar</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="?page=cadastrar">Cadastrar</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="?page=editar">Editar</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="?page=excluir">Excluir</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container">
    <div class="row">
      <div class="col mt-5">
        <?php
        include("config.php");

        switch (@$_REQUEST["page"]) {
          case "listar":
            include("listar_clientes.php");
            break;
          case "cadastrar":
            include("cadastro_cliente.php");
            break;
          case "editar":
            include("editar_cliente.php");
            break;
          case "excluir":
            include("excluir_cliente.php");
            break;
          case "service":
            include("cliente_service.php");
            break;
          default:
            include("listar_clientes.php");
            break;
        }
        ?>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q"
    crossorigin="anonymous"></script>
</body>

</html>

<?php
  include("config.php");

  $sql = "CREATE TABLE IF NOT EXISTS clientes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    telefone VARCHAR(20) NOT NULL UNIQUE,
    data_nascimento DATE NOT NULL,
    cpf VARCHAR(14) DEFAULT NULL,
    email VARCHAR(100) DEFAULT NULL
  )";
  $conn->query($sql);
?>