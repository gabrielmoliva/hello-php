<?php
    switch ($_REQUEST["acao"]) {
        case "cadastro":
            $nome = $_REQUEST["nome"];
            $telefone = preg_replace('/[^0-9]/', '', $_REQUEST["telefone"]);
            $data_nascimento = $_REQUEST["data_nascimento"];
            $cpf = !empty($_POST["cpf"]) ? preg_replace('/[^0-9]/', '', $_REQUEST["cpf"]) : null;
            $email = !empty($_REQUEST["email"]) ? $_REQUEST["email"] : null;

            if ($telefone == null || $nome ==null || $data_nascimento == null || $cpf == null) {
                print "<script>alert('Erro ao inserir no banco: algum campo obrigatório recebeu um valor inválido.');</script>";
                print "<script>location.href='?page=cadastro'</script>";
                break;
            }

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
            $nome = $_REQUEST["nome"];
            $telefone = preg_replace('/[^0-9]/', '', $_REQUEST["telefone"]);
            $data_nascimento = $_REQUEST["data_nascimento"];
            $cpf = !empty($_POST["cpf"]) ? preg_replace('/[^0-9]/', '', $_REQUEST["cpf"]) : null;
            $email = !empty($_REQUEST["email"]) ? $_REQUEST["email"] : null;
            $id = $_REQUEST["id"];

            if ($telefone == null || $nome ==null || $data_nascimento == null || $cpf == null) {
                print "<script>alert('Erro ao inserir no banco: algum campo obrigatório recebeu um valor inválido.');</script>";
                print "<script>location.href='?page=cadastro'</script>";
                break;
            }

            $stmt = $conn->prepare("UPDATE clientes SET nome = ?, telefone = ?, data_nascimento = ?, cpf = ?, email = ? WHERE id = ?");
            $stmt->bind_param("sssssi", $nome, $telefone, $data_nascimento, $cpf, $email, $id);

            if ($stmt->execute()) {
                print "<script>alert ('Cliente editado com sucesso')</script>";
                print "<script>location.href='?page=listar'</script>";
            } else {
                print "<script>window.onload = function() {
                    alert('Erro ao editar cliente: " . $stmt->error . "');
                    location.href='?page=cadastro';
                    }</script>";
            }
            break;
        case "excluir":
            $id = $_REQUEST["id"];

            $stmt = $conn->prepare("DELETE FROM clientes WHERE id = ?");
            $stmt->bind_param("i", $id);

            if ($stmt->execute()) {
                print "<script>alert ('Cliente excluído com sucesso')</script>";
                print "<script>location.href='?page=listar'</script>";
            } else {
                print "<script>window.onload = function() {
                    alert('Erro ao excluir cliente: " . $stmt->error . "');
                    location.href='?page=cadastro';
                    }</script>";
            }
            break;
    }