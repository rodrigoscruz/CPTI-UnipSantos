<?php
    require 'conexao.php'; //chamou o arquivo de conexao
    
    //verificou se o campo ra está preenchido e nao vazio
    if(isset($_POST['nome']) && !empty($_POST['nome']) && isset($_POST['email']) && !empty($_POST['email']) 
    && isset($_POST['cel']) && !empty($_POST['cel']) && isset($_POST['sexo']) && !empty($_POST['sexo']) &&
    isset($_POST['ra']) && !empty($_POST['ra']) && isset($_POST['turma']) && !empty($_POST['turma']) && 
    isset($_POST['cursos']) && !empty($_POST['cursos']) && isset($_POST['habilidade']) && !empty($_POST['habilidade'])) {
         //pegou as informaçoes do usuario
         $nome = $_POST['nome'];
         $email = $_POST['email'];
         $celular = $_POST['cel'];
         $sexo = $_POST['sexo'];
         $ra = $_POST['ra'];
         $turma = $_POST['turma'];
         $cursos = $_POST['cursos'];
         $github = $_POST['git'];
         $linkedin = $_POST['linke'];
         $habilidade = $_POST['habilidade'];

         /*salvando a data
         date('d-m-Y', strtotime($data));
         $data = date("Y-m-d",strtotime(str_replace('/','-',$data)));  
         date('Y-m-d', strtotime($data));*/
         
        
         //inseriu a tabela
         $sql = "INSERT INTO tb_individual SET tb_nome = ?, tb_email = ?, tb_celular = ?, 
         tb_sexo = ?, tb_ra = ?, tb_turma = ?, tb_curso = ?, tb_github = ?, 
         tb_linkedin = ?, tb_habilidade = ?";
         $sql = $pdo->prepare($sql);
         
         //executou a query "prepare" passando as informaçoes dentro de um array
         $sql->execute(array($nome, $email, $celular, $sexo, $ra, $turma, $cursos, $github, $linkedin, $habilidade));
         
         
         echo "<script>window.alert('Você foi cadastrado com sucesso!');window.location='Hackathon.php'</script>";

         

         
         
        }
?>