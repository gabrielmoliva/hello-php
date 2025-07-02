<?php
    switch ($_REQUEST["acao"]) {
        case "cadastro":
            $nome = $_REQUEST["nome"];
            $telefone = preg_replace('/[^0-9]/', '', $_REQUEST["telefone"]);
            $data_nascimento = $_REQUEST["data_nascimento"];
            $cpf = !empty($_POST["cpf"]) ? preg_replace('/[^0-9]/', '', $_REQUEST["cpf"]) : null;
            $email = !empty($_REQUEST["email"]) ? $_REQUEST["email"] : null;

            $stmt = $conn->prepare("INSERT INTO clientes (nome, telefone, data_nascimento, cpf, email) VALUES (?, ?, ?, ?, ?)");
            $stmt->bind_param("sssss", $nome, $telefone, $data_nascimento, $cpf, $email);

            if ($stmt->execute()) {
                print "<script>alert ('Cadastro realizado com sucesso')</script>";
                print "<script>location.href='?page=listar'</script>";
            } else {
                print "<script>alert('Erro ao inserir no banco: " . $stmt->error . "');</script>";
                print "<script>location.href='?page=cadastro'</script>";
            }
            break;
        case "editar":
            break;
        case "excluir":
            break;
        default:
            echo "dadadadad";
            break;
    }