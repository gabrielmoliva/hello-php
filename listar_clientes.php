<h1>Clientes</h1>
<?php
    $sql = "SELECT * FROM clientes";

    $res = $conn->query($sql);

    $qtd = $res->num_rows;
    print "<table class='table table-over table-striped table-bordered'>";
    print "<th>ID</th>";
    print "<th>Nome</th>";
    print "<th>Telefone</th>";
    print "<th>Data de Nascimento</th>";
    print "<th>CPF</th>";
    print "<th>E-mail</th>";
    while ($row = $res->fetch_object()) {
        // Aplicando as mascaras de telefone e cpf 
        $telefone = preg_replace('/(\d{2})(\d{4})(\d{4})/', '($1) $2-$3', $row->telefone);;
        $cpf = preg_replace('/(\d{3})(\d{3})(\d{3})(\d{2})/', '$1.$2.$3-$4', $row->cpf);

        print "<tr>";
        print "<td>".$row->id."</td>";
        print "<td>".$row->nome."</td>";
        print "<td>".$telefone."</td>";
        print "<td>".$row->data_nascimento."</td>";
        print "<td>".$cpf."</td>";
        print "<td>".$row->email."</td>";
        print "</tr>";
    }
    print "</table>";