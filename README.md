# Sistema-de-Controle-de-Alunos
Um projeto simples para exercitar a construção do Crud utilizando a linguagem PHP com framework Laravel;

#### Sobre o Projeto: 
  Esse projeto é composto por três modulos:
  
    * Escolas
    * Turmas
    * Alunos
  
  No modulo de Escolas é possivel fazer o cadastro de novas escolas, visualizar escolas, editar escolas e deletar escolas.
Da mesma forma pode ser feito nos demais modulos, com a diferença que partindo do modulo de escola podemos ver os detalhes 
da escola seguido por todas as turmas desta escola, olhando os detalhes destas podemos ver todos os alunos da turma.

 #### Testando o Projeto: 
Para testar você precisa de algumas ferramentas:
    
    * Banco de dados Sql -> utilizei o MySql 5.5 ja instalado atravez do Xampp 3.2.4
    * PHP versao >= 7    -> utilizei a versao 8.00 
    * Composer           -> utilizei a versao 2.0.11
    * Npm                -> utilizei a versao 6.14.11
 
 ##### Testando o Projeto: 

Logo apos baixar o zip do projeto ou fazer um clone, você vai precisar preparar o arquivo  .env 
deixei o nome do banco de dados como **laravel** bem como o arquivo padrao.
Então em primeiro lugar copiar o arquivo .env em seguida criar um banco de dados Sql chamado **laravel** 
depois disso será necessario executar o seguinte comando:
```
composer install
```
após instalar todas as dependencias do php precisamos executar um:
```
npm Install
```
e uma vez que estes estejam instalados basta executar o comando para gerar as tabelas e popular o BD:
```
php artisan migrate:fresh --seed
```
pronto! agr já esta tudo pronto para funcionar!
agora so executar o comando 
```
php artisan serve
```
