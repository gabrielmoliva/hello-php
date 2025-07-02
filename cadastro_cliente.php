<h1>Novo Cliente</h1>
<form action="?page=service" method="POST" class="needs-validation" novalidate>
    <input type="hidden" name="acao" value="cadastro">
    <div class="mb-3">
        <label>Nome</label>
        <input type="text" name="nome" placeholder="Insira o nome do cliente aqui..." class="form-control" minlength="3"
            required>
        <div class="invalid-feedback">
            O nome deve ser informado e deve ter 3 ou mais caracteres.
        </div>
        <label>Telefone</label>
        <input type="text" name="telefone" id="telefone" placeholder="Insira o telefone do cliente aqui..." class="form-control" minlength = "14"
            required>
        <label>Data de nascimento</label>
        <input type="date" name="data_nascimento" class="form-control" required>
        <label>CPF</label>
        <input type="text" name="cpf" id="cpf" placeholder="Insira o cpf do cliente aqui..." class="form-control" minlength = "14">
        <label>E-mail</label>
        <input type="email" name="email" placeholder="Insira o email do cliente aqui..." class="form-control">
        <div class="invalid-feedback">
            Formato de e-mail inválido.
        </div>
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Cadastrar</button>
    </div>
</form>

<script>
    (function () {
        'use strict'

        var forms = document.querySelectorAll('.needs-validation')

        Array.prototype.slice.call(forms)
            .forEach(function (form) {
                form.addEventListener('submit', function (event) {
                    if (!form.checkValidity()) {
                        event.preventDefault()
                        event.stopPropagation()
                    }

                    form.classList.add('was-validated')
                }, false)
            })
    })()
</script>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>

<script type="text/javascript">
	$(document).ready(function(){
		$("#cpf").mask("999.999.999-99");
	});
</script>

<script>
    $("#telefone").mask("(00) 0000-0000");
</script>