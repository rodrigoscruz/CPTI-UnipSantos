<?php
$host="localhost";
$user="root";
$pass="";
$banco="dbcadastros";
$conexao=mysqli_connect($host, $user, $pass) or die(mysqli_error());
mysqli_select_db($conexao,$banco) or die(mysqli_error($conexao));
?>


<?php
$time = $_POST['time'];

//array ra
$ra1 = $_POST['ra1'];
$ra2 = $_POST['ra2'];
$ra3 = $_POST['ra3'];
$ra4 = $_POST['ra4'];
$ra5 = $_POST['ra5'];

//array nomes
$nome1 = $_POST['nome1'];
$nome2 = $_POST['nome2'];
$nome3 = $_POST['nome3'];
$nome4 = $_POST['nome4'];
$nome5 = $_POST['nome5'];

//array turma
$turma1 = $_POST['turma1'];
$turma2 = $_POST['turma2'];
$turma3 = $_POST['turma3'];
$turma4 = $_POST['turma4'];
$turma5 = $_POST['turma5'];

//array cursos
$curso1 = $_POST['curso1'];
$curso2 = $_POST['curso2'];
$curso3 = $_POST['curso3'];
$curso4 = $_POST['curso4'];
$curso5 = $_POST['curso5'];

//array emails
$email1 = $_POST['email1'];
$email2 = $_POST['email2'];
$email3 = $_POST['email3'];
$email4 = $_POST['email4'];
$email5 = $_POST['email5'];

//array celulares
$celular1 = $_POST['cel1'];
$celular2 = $_POST['cel2'];
$celular3 = $_POST['cel3'];
$celular4 = $_POST['cel4'];
$celular5 = $_POST['cel5'];

//array sexo
$sexo1 = $_POST['sexo1'];
$sexo2 = $_POST['sexo2'];
$sexo3 = $_POST['sexo3'];
$sexo4 = $_POST['sexo4'];
$sexo5 = $_POST['sexo5'];

//array linkedin
$linke1 = $_POST['linke1'];
$linke2 = $_POST['linke2'];
$linke3 = $_POST['linke3'];
$linke4 = $_POST['linke4'];
$linke5 = $_POST['linke5'];

//array github
$git1 = $_POST['git1'];
$git2 = $_POST['git2'];
$git3 = $_POST['git3'];
$git4 = $_POST['git4'];
$git5 = $_POST['git5'];

//array habilidades
$habili1 = $_POST['habili1'];
$habili2 = $_POST['habili2'];
$habili3 = $_POST['habili3'];
$habili4 = $_POST['habili4'];
$habili5 = $_POST['habili5'];

$ferra1 = $_POST['ferra1'];
$ferra2 = $_POST['ferra2'];
$ferra3 = $_POST['ferra3'];
$ferra4 = $_POST['ferra4'];
$ferra5 = $_POST['ferra5'];
$desafio = $_POST['desafio'];
$tema = $_POST['tema'];


$sql=mysqli_query($conexao,"INSERT INTO tb_time( tbtime, tbra1, tbnome1, tbturma1, tbcurso1, tbmail1, tbcel1, tbsexo1, tblinke1, tbgit1, tbhabili1, tbra2, tbnome2, tbturma2, tbcurso2, tbmail2, tbcel2, tbsexo2, tblinke2, tbgit2, tbhabili2, tbra3, tbnome3, tbturma3, tbcurso3, tbmail3, tbcel3, tbsexo3, tblinke3, tbgit3, tbhabili3, tbra4, tbnome4, tbturma4, tbcurso4, tbmail4, tbcel4, tbsexo4, tblinke4, tbgit4, tbhabili4, tbra5, tbnome5, tbturma5, tbcurso5, tbmail5, tbcel5, tbsexo5, tblinke5, tbgit5, tbhabili5, tbferra1, tbferra2, tbferra3, tbferra4, tbferra5, tbdesafio, tbtema)

	VALUES ('$time', '$ra1', '$nome1', '$turma1', '$curso1', '$email1', '$celular1' , '$sexo1', '$linke1', '$git1', '$habili1', '$ra2', '$nome2', '$turma2', '$curso2', '$email2', '$celular2' , '$sexo2', '$linke2', '$git2', '$habili2', '$ra3', '$nome3', '$turma3', '$curso3', '$email3', '$celular3' , '$sexo3', '$linke3', '$git3', '$habili3', '$ra4', '$nome4', '$turma4', '$curso4', '$email4', '$celular4' , '$sexo4', '$linke4', '$git4', '$habili4', '$ra5', '$nome5', '$turma5', '$curso5', '$email5', '$celular5' , '$sexo5', '$linke5', '$git5', '$habili5', '$ferra1', '$ferra2', '$ferra3', '$ferra4', '$ferra5','$desafio', '$tema')");

echo "<script>window.alert('Sua equipe foi cadastrada com sucesso!');window.location='Hackathon.php'</script>";
mysqli_close($conexao);

?>
</body>
</html>