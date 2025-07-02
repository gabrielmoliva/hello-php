# Case CRUD Clientes

Projeto de um CRUD básico para clientes utilizando php e bootstrap 5.

Respostas das perguntas técnicas:
> Qual parte do código escrito deveria ser prioritariamente testada e por quê?
- O teste deve prioritariamente ocorrer nos formulários de criar e editar clientes para verificar se as validações de dados estão ocorrendo como esperado. Em conjunto, também é importante testar se a inserção de dados no banco está ocorrendo como esperado (ex.: remoção de máscaras de telefone e cpf, entre outras).

> Quais ferramentas poderiam ser utilizadas para testar a parte do código sugerida?
- Na parte de formulários pode-se testar o código via navegador, preenchendo os campos com edge cases ou utilizando ferramentas de teste de API como o postman. Já para teste das inserções no banco, o ideal é a utilização de alguma ferramenta de conexão em banco de dados como o TablePlus. Também é importante ressaltar que é necessário a avaliação do código fonte nessas seções, para garantir o comportamento esperado da solução.

> Qual estratégia de teste você considera ideal para ser utilizada neste cenário?
- Primeiro a verificação do código fonte, analisando as validações e queries. Depois, utilizaria o próprio navegador, tentando diversos edge cases para cada campo (ex.: menos de 3 caracteres para nome; número menor ou maior que 10 de digitos para o telefone ou se o formulário permite colocar caracteres inválidos como letras ou símbolos; datas de nascimento inválidas; cpfs com letras e símbolos e número incorreto de digitos; emails inválidos, ou seja, sem @, sem domínio após o @, sem ., etc.). Para o testedo banco utilizaria o TablePlus verificando se os dados inseridos condizem com o formulário preenchido e são válidos no contexto do problema.
## Instruções de execução

Para executar o código basta:
- Inicializar sua engine do docker;
- Na linha de comando, dentro do diretório do projeto, rode o comando: 
```
docker compose up -d
```
- Após a inicialização do contêiner, rode o comando: 
```
php -S localhost:8000
```
- Agora é só abrir o link no seu navegador.