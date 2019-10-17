<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="Css/bootstrap.min.css">

    <link rel="stylesheet" href="node_modules/@fortawesome/fontawesome-free/css/all.min.css">

    <!--- Link com o CSS --->
    <link rel="stylesheet" href="Css/styleIndividual.css">

    <link href="https://fonts.googleapis.com/css?family=Quicksand|Roboto|Staatliches&display=swap" rel="stylesheet">

    

    <title>Cadastro individual</title>
  </head>

  <!----- Inicio corpo do código ----->
  <body>

    <div class="container mt-3">
        <h1>Cadastro Individual</h1>

        <div class="row justify-content-center">

            <div class="col-12">
            <form class="needs-validation" action="cadastro.php" method="POST">
                <div class="card">


                    <div class="card-body">
                                                
                            <div class="form">
                               <div class="row justify-content-around">

                                   <div class="col-xl-5 col-lg-5 col-md-10 col-sm-12 col-12">
                                        <!-------------------- Inicio campo "Nome Completo"---------------------->
                                    
                                        <label for="validationCustom01" class="my-3">Nome completo</label>
                                        <input type="text" class="form-control" name="nome" id="nome" maxlength="40" required>
                                
                                        <!----------------------------------------------------------------------->
        
        
                                        <!--------------------- Inicio campo "Email" --------------------------->
                                
                                        <label for="validationCustom02" class="my-3">Email</label>
                                        <input type="email" class="form-control" name="email" id="email" maxlength="50" required>
        
                                        <!----------------------------------------------------------------------->
        
        
        
                                        <!--------------------- Inicio campo "Celular" ------------------------->
                                    
                                        <label for="validationCustom03" class="my-3">Celular</label>
                                        <input type="text" class="form-control" name="cel" id="cel" 
                                         maxlength="11" data-mask="(00) 0 0000-0000" autocomplete="off" required>
        
                                        <!----------------------------------------------------------------------->
        
        
        
                                        <!---------------------- Inicio campo "Sexo" --------------------------->
                                    
                                        <label class="my-3">Sexo</label>
                                            <div class="custom-control custom-radio mb-2">
                                                <input type="radio" class="custom-control-input" id="sexom" name="sexo" required>
                                                <label class="custom-control-label" for="sexom">Masculino</label>
                                            </div>
        
                                            <div class="custom-control custom-radio mb-3">
                                                <input type="radio" class="custom-control-input" id="sexof" name="sexo" required>
                                                <label class="custom-control-label" for="sexof">Feminino</label>  
                                            </div>
        
                                        <!----------------------------------------------------------------------->   
        
        
                                
                                        <!---------------------- Inicio campo "RA" ----------------------------->
                                    
                                        <div class="form-row">
        
                                            <div class="form-group col">
                                                <label for="validationCustom04" class="my-3">RA</label>
                                                <input type="text" class="form-control" name="ra" id="ra" placeholder="Ex: F58f88"  maxlength="7" required>
                                            </div>
        
                                            <div class="form-group col">
                                                <label for="validationCustom04" class="my-3">Turma</label>
                                                <input type="text" class="form-control" name="turma" id="turma" placeholder="Ex: CC415A" maxlength="6" required>
                                            </div>
        
                                        </div>
                                        <!----------------------------------------------------------------------->   
                                   
                                    </div>
                                    
                                    <div class="col-xl-5 col-lg-5 col-md-10 col-sm-12 col-12">
                                        
                                        <!--------------------- Inicio campo "Curso" --------------------------->
                                    
                                        <div class="form-group">
                                            <label class="my-3">Curso</label>
                                            <input type="text" class="form-control" name="cursos" id="cursos" maxlength="50">
                                        </div>
        
                                        <!----------------------------------------------------------------------->   
                               
        
                                
                                        <!----------------------- Inicio campo "Posição" ----------------------->
                                   
                                        <div class="form-group">
                                            <label class="my-3">Habilidade</label>
                                            <select class="custom-select" name="habilidade" required>
                                                <option value="">Selecione sua habilidade</option>
                                                <option value="Business">Business</option>
                                                <option value="Developer">Developer</option>
                                                <option value="Designer">Designer</option>
                                            </select>
                                        </div>
        
                                        <!----------------------------------------------------------------------->
        
        
            
                                        <!--------------------- Inicio campo "GitHub" -------------------------->
                                     
                                        <label for="validationCustom02" class="my-3">GitHub (Opcional)</label>
                                        <input type="text" class="form-control" name="git" id="git" maxlength="50">
                                
                                        <!----------------------------------------------------------------------->    
        
                                
                                        <!-------------------- Inicio campo "Linkedin" ------------------------->
                                   
                                        <label for="validationCustom03" class="my-3">Linkedin (Opcional)</label>
                                        <input type="text" class="form-control" name="linke" id="linke" maxlength="50">
                                
                                        <!----------------------------------------------------------------------->  

                                        <label class="my-3">Com qual equipamento você irá trabalhar?</label>
                                            <select class="custom-select" name="ferramenta" required>
                                                <option value="">Selecione seu equipamento</option>
                                                <option value="Laptop">Notebook</option>
                                                <option value="Desktop">Desktop</option>
                                                <option value="Tablet">Tablet</option>
                                                <option value="Nenhum">Nenhum</option>
                                            </select>
                                   </div>

                               </div> 
                                
            
                                     
                            </div>
                                  
                    </div>

                    <div class="card-footer">
                        
                        <button class="btn btn-dark btn-lg d-block mx-auto" type="submit">CADASTRAR</button>
                          
                    </div>

                </div>
                <h6 class="text-center text-white mt-3">Ao clicar em "cadastrar estou ciente e aceito todas as condições disponíveis no regulamento do evento.</h6>
            </form>
            </div>
            <!--Fim coluna-->

        </div>
        <!--Fim Grid-->

    </div>
    <!--Fim container-->
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="Js/jquery.slim.min.js"></script>
    <script src="Js/popper.min.js"></script>
    <script src="Js/bootstrap.min.js"></script>
    <script src="Js/aos.js"></script>
    <script src="Js/myscript.js"></script>
    <script src="Js/jquery.mask.min.js"></script> 

  </body>
</html>