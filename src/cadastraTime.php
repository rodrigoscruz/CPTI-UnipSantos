<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="Css/bootstrap.min.css">

        <link rel="stylesheet" href="node_modules/@fortawesome/fontawesome-free/css/all.min.css">

        <!--- Link com o CSS --->
        <link rel="stylesheet" href="Css/styleTime.css">

        <link href="https://fonts.googleapis.com/css?family=Quicksand|Roboto|Staatliches&display=swap" rel="stylesheet">

        <title>Cadastro de equipe</title>
    </head>
    <body>

        <div class="container">
            <h1 class="mt-5">Cadastro de Equipe</h1>

            <form action="cadastroTime.php" method="post">

            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="accordion" id="accordionExample">
    
                        <!--LIDER-->
                        <div class="card">
                            <div class="card-header" id="heading1">
                                <h2 class="mb-0">
                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse1">
                                        1° Membro (LIDER) <i class="fas fa-chevron-down"></i> 
                                    </button>
                                </h2>
                            </div>
    
                            <div id="collapse1" class="collapse show" data-parent="#accordionExample">
    
                            
                                <div class="card-body">
    
                                    <div class="row justify-content-around">
    
                                        <div class="col-xl-5 col-lg-5 col-md-10 col-sm-12 col-12">
    
                                            <div class="form">
    
                                                <!------------------------------Inicio campo "Nome da equipe"------------>
                                                <label for="validationCustom01" class="my-3">Nome da Equipe</label>
                                                <input type="text" class="form-control" name="time" id="demo" required>
                                                <!----------------------------------------------------------------------->
    
                                                <!-------------------- Inicio campo "Nome Completo"---------------------->
            
                                                <label for="validationCustom01" class="my-3">Nome completo</label>
                                                <input type="text" class="form-control" name="nome1" id="nome1" maxlength="40" required>
        
                                                <!----------------------------------------------------------------------->
    
    
                                                <!--------------------- Inicio campo "Email" --------------------------->
        
                                                <label for="validationCustom02" class="my-3">Email (Use seu melhor email)</label>
                                                <input type="email" class="form-control" name="email1" id="email1" maxlength="50" required>
    
                                                <!----------------------------------------------------------------------->
    
    
    
                                                <!--------------------- Inicio campo "Celular" ------------------------->
            
                                                <label for="validationCustom03" class="my-3">Celular</label>
                                                <input type="text" class="form-control" name="cel1" id="cel1" 
                                                maxlength="11" data-mask="(00) 0 0000-0000" autocomplete="off" required>
    
                                                <!----------------------------------------------------------------------->
    
    
    
                                                <!---------------------- Inicio campo "Sexo" --------------------------->
        
                                                <label class="my-3">Sexo</label>
                                                <div class="custom-control custom-radio mb-2">
                                                    <input type="radio" class="custom-control-input" id="sexom1" name="sexo1" value="Masculino" required>
                                                    <label class="custom-control-label" for="sexom1">Masculino</label>
                                                </div>
    
                                                <div class="custom-control custom-radio mb-3">
                                                    <input type="radio" class="custom-control-input" id="sexof1" name="sexo1" value="Feminino" required>
                                                    <label class="custom-control-label"  for="sexof1">Feminino</label>  
                                                </div>
    
                                                <!-----------------------------------------------------------------------> 
                                                
                                                <label class="my-3">Qual tema escolhido? <a href="" data-toggle="modal" data-target="#Tema">Ver temas <i class="fas fa-external-link-alt"></i></a></label>
                                                    <select class="custom-select" name="tema">
                                                        <option value="">Selecione o tema pelo número</option>
                                                        <option value="tema1">1</option>
                                                        <option value="tema2">2</option>
                                                        <option value="tema3">3</option>
                                                              
                                                    </select>

                                                 <div class="form-group my-3">
                                                    <label for="desafio">Resuma sua solução <a href="" data-toggle="modal" data-target="#solucao"><i class="far fa-question-circle"></i> Leia</a></label>
                                                    <textarea class="form-control" name="desafio" id="desafio" rows="3"></textarea>
                                                </div>
                                
    
                                            </div>
                                        </div>
    
    
                                        <div class="col-xl-5 col-lg-5 col-md-10 col-sm-12 col-12">
    
                                            <div class="form">
    
                                                <!---------------------- Inicio campo "RA" ----------------------------->
        
                                                <div class="form-row">
    
                                                    <div class="form-group col">
                                                        <label for="validationCustom04" class="my-3">RA</label>
                                                        <input type="text" class="form-control" name="ra1" id="ra1" maxlength="7" required>
                                                    </div>
    
                                                    <div class="form-group col">
                                                        <label for="validationCustom04" class="my-3">Turma</label>
                                                        <input type="text" class="form-control" name="turma1" id="turma1" placeholder="Ex: CC415A" maxlength="6" required>
                                                    </div>
    
                                                </div>
                                                <!----------------------------------------------------------------------->   
    
    
                                                <!--------------------- Inicio campo "Curso" e "Habilidade" ------------->
                                               
    
                                                        
                                                    <label for="validationCustom04" class="my-3">Curso</label>
                                                    <input type="text" class="form-control" name="curso1" id="" placeholder="Ex: Ciência da computação" maxlength="40" required>
                                                        
    
                                                       
                                                    <label class="my-3">Habilidade</label>
                                                    <select class="custom-select" name="habili1" required>
                                                        <option value="">Selecione uma habilidade</option>
                                                        <option value="Leader">Lider</option>
                                                              
                                                    </select>
                                                       
    
                                            
                                                <!----------------------------------------------------------------------->  
            
            
    
                                                <!--------------------- Inicio campo "GitHub" -------------------------->
         
                                                <label for="validationCustom02" class="my-3">GitHub (Opcional)</label>
                                                <input type="text" class="form-control" name="git1" id="git1" maxlength="50">
    
                                                <!----------------------------------------------------------------------->    
    
    
                                                <!-------------------- Inicio campo "Linkedin" ------------------------->
       
                                                <label for="validationCustom03" class="my-3">Linkedin (Opcional)</label>
                                                <input type="text" class="form-control" name="linke1" id="linke1" maxlength="50">
    
                                                <!----------------------------------------------------------------------->
    
            
                                                <label class="my-3">Com qual equipamento você irá trabalhar?</label>
                                                    <select class="custom-select" name="ferra1" required>
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
    
                            </div>
                            
                        </div>
    
    
                        <!--MEMBRO 2-->
                        <div class="card">
                            <div class="card-header" id="heading2">
                                <h2 class="mb-0">
                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse2">
                                        2° Membro <i class="fas fa-chevron-down"></i>
                                    </button>
                                </h2>
                            </div>
    
                            <div id="collapse2" class="collapse" data-parent="#accordionExample">
    
                                <div class="card-body">
                                     <div class="row justify-content-around">
    
                                        <div class="col-xl-5 col-lg-5 col-md-10 col-sm-12 col-12">
    
                                            <div class="form">
    
                                               
                                                <!-------------------- Inicio campo "Nome Completo"---------------------->
            
                                                <label for="validationCustom01" class="my-3">Nome completo</label>
                                                <input type="text" class="form-control" name="nome2" id="nome2" maxlength="40" required>
        
                                                <!----------------------------------------------------------------------->
    
    
                                                <!--------------------- Inicio campo "Email" --------------------------->
        
                                                <label for="validationCustom02" class="my-3">Email (Use seu melhor email)</label>
                                                <input type="email" class="form-control" name="email2" id="email2" maxlength="50" required>
    
                                                <!----------------------------------------------------------------------->
    
    
    
                                                <!--------------------- Inicio campo "Celular" ------------------------->
            
                                                <label for="validationCustom03" class="my-3">Celular</label>
                                                <input type="text" class="form-control" name="cel2" id="cel2" 
                                                maxlength="11" data-mask="(00) 0 0000-0000" autocomplete="off" required>
    
                                                <!----------------------------------------------------------------------->
    
    
    
                                                <!---------------------- Inicio campo "Sexo" --------------------------->
        
                                                <label class="my-3">Sexo</label>
                                                <div class="custom-control custom-radio mb-2">
                                                    <input type="radio" class="custom-control-input" id="sexom2" name="sexo2" value="Masculino" required>
                                                    <label class="custom-control-label" for="sexom2">Masculino</label>
                                                </div>
    
                                                <div class="custom-control custom-radio mb-2">
                                                    <input type="radio" class="custom-control-input" id="sexof2" name="sexo2" value="Feminino" required>
                                                    <label class="custom-control-label"  for="sexof2">Feminino</label>  
                                                </div>
    
                                                <!-----------------------------------------------------------------------> 
    
    
                                                <!---------------------- Inicio campo "RA" ----------------------------->
        
                                                <div class="form-row">
    
                                                    <div class="form-group col">
                                                        <label for="validationCustom04" class="my-1">RA</label>
                                                        <input type="text" class="form-control" name="ra2" id="ra2" maxlength="7" required>
                                                    </div>
    
                                                    <div class="form-group col">
                                                        <label for="validationCustom04" class="my-1">Turma</label>
                                                        <input type="text" class="form-control" name="turma2" id="turma2" placeholder="Ex: CC415A" maxlength="6" required>
                                                    </div>
    
                                                </div>
                                                <!----------------------------------------------------------------------->   
                                           
                                           
                                           
                                           
                                            </div>
                                        </div>
    
    
                                        <div class="col-xl-5 col-lg-5 col-md-10 col-sm-12 col-12">
    
                                            <div class="form">
    
                                
                                                <!--------------------- Inicio campo "Curso" e "Habilidade" ------------->
                                               
    
                                                        
                                                    <label for="validationCustom04" class="my-3">Curso</label>
                                                    <input type="text" class="form-control" name="curso2" id="" placeholder="Ex: Ciência da computação" maxlength="40" required>
                                                        
    
                                                       
                                                    <label class="my-3">Habilidade</label>
                                                    <select class="custom-select" name="habili2" required>
                                                        <option value="">Selecione uma habilidade</option>
                                                        <option value="Business">Business</option>
                                                        <option value="Developer">Developer</option>
                                                        <option value="Designer">Designer</option>                                                                            
                                                    </select>
                                                       
    
                                            
                                                <!----------------------------------------------------------------------->  
            
            
    
                                                <!--------------------- Inicio campo "GitHub" -------------------------->
         
                                                <label for="validationCustom02" class="my-3">GitHub (Opcional)</label>
                                                <input type="text" class="form-control" name="git2" id="git2" maxlength="50">
    
                                                <!----------------------------------------------------------------------->    
    
    
                                                <!-------------------- Inicio campo "Linkedin" ------------------------->
       
                                                <label for="validationCustom03" class="my-3">Linkedin (Opcional)</label>
                                                <input type="text" class="form-control" name="linke2" id="linke2" maxlength="50">
    
                                                <!----------------------------------------------------------------------->
    
            
                                                <label class="my-3">Com qual equipamento você irá trabalhar?</label>
                                                    <select class="custom-select" name="ferra2" required>
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
    
                            </div>
                        </div>
    
    
                        <!--MEMBRO 3-->
                        <div class="card">
                            <div class="card-header" id="heading3">
                                <h2 class="mb-0">
                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse3">
                                        3° Membro <i class="fas fa-chevron-down"></i>
                                    </button>
                                </h2>
                            </div>
    
                            <div id="collapse3" class="collapse" data-parent="#accordionExample">
                                <div class="card-body">
    
                                     <div class="row justify-content-around">
    
                                        <div class="col-xl-5 col-lg-5 col-md-10 col-sm-12 col-12">
    
                                            <div class="form">
    
                                               
                                                <!-------------------- Inicio campo "Nome Completo"---------------------->
            
                                                <label for="validationCustom01" class="my-3">Nome completo</label>
                                                <input type="text" class="form-control" name="nome3" id="nome3" maxlength="40" required>
        
                                                <!----------------------------------------------------------------------->
    
    
                                                <!--------------------- Inicio campo "Email" --------------------------->
        
                                                <label for="validationCustom02" class="my-3">Email (Use seu melhor email)</label>
                                                <input type="email" class="form-control" name="email3" id="email3" maxlength="50" required>
    
                                                <!----------------------------------------------------------------------->
    
    
    
                                                <!--------------------- Inicio campo "Celular" ------------------------->
            
                                                <label for="validationCustom03" class="my-3">Celular</label>
                                                <input type="text" class="form-control" name="cel3" id="cel3" 
                                                maxlength="11" data-mask="(00) 0 0000-0000" autocomplete="off" required>
    
                                                <!----------------------------------------------------------------------->
    
    
    
                                                <!---------------------- Inicio campo "Sexo" --------------------------->
        
                                                <label class="my-3">Sexo</label>
                                                <div class="custom-control custom-radio mb-2">
                                                    <input type="radio" class="custom-control-input" id="sexom3" name="sexo3" value="Masculino" required>
                                                    <label class="custom-control-label" for="sexom3">Masculino</label>
                                                </div>
    
                                                <div class="custom-control custom-radio mb-2">
                                                    <input type="radio" class="custom-control-input" id="sexof3" name="sexo3" value="Feminino" required>
                                                    <label class="custom-control-label"  for="sexof3">Feminino</label>  
                                                </div>
    
                                                <!-----------------------------------------------------------------------> 
    
    
                                                <!---------------------- Inicio campo "RA" ----------------------------->
        
                                                <div class="form-row">
    
                                                    <div class="form-group col">
                                                        <label for="validationCustom04" class="my-1">RA</label>
                                                        <input type="text" class="form-control" name="ra3" id="ra3" maxlength="7" required>
                                                    </div>
    
                                                    <div class="form-group col">
                                                        <label for="validationCustom04" class="my-1">Turma</label>
                                                        <input type="text" class="form-control" name="turma3" id="turma3" placeholder="Ex: CC415A" maxlength="6" required>
                                                    </div>
    
                                                </div>
                                                <!----------------------------------------------------------------------->   
                                           
                                           
                                           
                                           
                                            </div>
                                        </div>
    
    
                                        <div class="col-xl-5 col-lg-5 col-md-10 col-sm-12 col-12">
    
                                            <div class="form">
    
                                
                                                <!--------------------- Inicio campo "Curso" e "Habilidade" ------------->
                                               
    
                                                        
                                                    <label for="validationCustom04" class="my-3">Curso</label>
                                                    <input type="text" class="form-control" name="curso3" id="" placeholder="Ex: Ciência da computação" maxlength="40" required>
                                                        
    
                                                       
                                                    <label class="my-3">Habilidade</label>
                                                    <select class="custom-select" name="habili3" required>
                                                        <option value="">Selecione uma habilidade</option>
                                                        <option value="Business">Business</option>
                                                        <option value="Developer">Developer</option>
                                                        <option value="Designer">Designer</option>                                                                            
                                                    </select>
                                                       
    
                                            
                                                <!----------------------------------------------------------------------->  
            
            
    
                                                <!--------------------- Inicio campo "GitHub" -------------------------->
         
                                                <label for="validationCustom02" class="my-3">GitHub (Opcional)</label>
                                                <input type="text" class="form-control" name="git3" id="git3" maxlength="50">
    
                                                <!----------------------------------------------------------------------->    
    
    
                                                <!-------------------- Inicio campo "Linkedin" ------------------------->
       
                                                <label for="validationCustom03" class="my-3">Linkedin (Opcional)</label>
                                                <input type="text" class="form-control" name="linke3" id="linke3" maxlength="50">
    
                                                <!----------------------------------------------------------------------->
    
            
                                                <label class="my-3">Com qual equipamento você irá trabalhar?</label>
                                                    <select class="custom-select" name="ferra3" required>
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
                            </div>
                        </div>
    
    
                        <!--MEMBRO 4-->
                        <div class="card">
                            <div class="card-header" id="heading4">
                                <h2 class="mb-0">
                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse4">
                                      4° Membro (Opcional)<i class="fas fa-chevron-down"></i>
                                    </button>
                                </h2>
                            </div>
    
                            <div id="collapse4" class="collapse" data-parent="#accordionExample">
                                <div class="card-body">
    
                                     <div class="row justify-content-around">
    
                                        <div class="col-xl-5 col-lg-5 col-md-10 col-sm-12 col-12">
    
                                            <div class="form">
    
                                               
                                                <!-------------------- Inicio campo "Nome Completo"---------------------->
            
                                                <label for="validationCustom01" class="my-3">Nome completo</label>
                                                <input type="text" class="form-control" name="nome4" id="nome4" maxlength="40">
        
                                                <!----------------------------------------------------------------------->
    
    
                                                <!--------------------- Inicio campo "Email" --------------------------->
        
                                                <label for="validationCustom02" class="my-3">Email (Use seu melhor email)</label>
                                                <input type="email" class="form-control" name="email4" id="email4" maxlength="50">
    
                                                <!----------------------------------------------------------------------->
    
    
    
                                                <!--------------------- Inicio campo "Celular" ------------------------->
            
                                                <label for="validationCustom03" class="my-3">Celular</label>
                                                <input type="text" class="form-control" name="cel4" id="cel4" 
                                                maxlength="11" data-mask="(00) 0 0000-0000" autocomplete="off">
    
                                                <!----------------------------------------------------------------------->
    
    
    
                                                <!---------------------- Inicio campo "Sexo" --------------------------->
        
                                                <label class="my-3">Sexo</label>
                                                <div class="custom-control custom-radio mb-2">
                                                    <input type="radio" class="custom-control-input" id="sexom4" name="sexo4" value="Masculino">
                                                    <label class="custom-control-label" for="sexom4">Masculino</label>
                                                </div>
    
                                                <div class="custom-control custom-radio mb-2">
                                                    <input type="radio" class="custom-control-input" id="sexof4" name="sexo4" value="Feminino">
                                                    <label class="custom-control-label"  for="sexof4">Feminino</label>  
                                                </div>
    
                                                <!-----------------------------------------------------------------------> 
    
    
                                                <!---------------------- Inicio campo "RA" ----------------------------->
        
                                                <div class="form-row">
    
                                                    <div class="form-group col">
                                                        <label for="validationCustom04" class="my-1">RA</label>
                                                        <input type="text" class="form-control" name="ra4" id="ra4" maxlength="7">
                                                    </div>
    
                                                    <div class="form-group col">
                                                        <label for="validationCustom04" class="my-1">Turma</label>
                                                        <input type="text" class="form-control" name="turma4" id="turma4" placeholder="Ex: CC415A" maxlength="6">
                                                    </div>
    
                                                </div>
                                                <!----------------------------------------------------------------------->   
                                           
                                           
                                           
                                           
                                            </div>
                                        </div>
    
    
                                        <div class="col-xl-5 col-lg-5 col-md-10 col-sm-12 col-12">
    
                                            <div class="form">
    
                                
                                                <!--------------------- Inicio campo "Curso" e "Habilidade" ------------->
                                               
    
                                                        
                                                    <label for="validationCustom04" class="my-3">Curso</label>
                                                    <input type="text" class="form-control" name="curso4" id="" placeholder="Ex: Ciência da computação" maxlength="40">
                                                        
    
                                                       
                                                    <label class="my-3">Habilidade</label>
                                                    <select class="custom-select" name="habili4">
                                                        <option value="">Selecione uma habilidade</option>
                                                        <option value="Business">Business</option>
                                                        <option value="Developer">Developer</option>
                                                        <option value="Designer">Designer</option>                                                                            
                                                    </select>
                                                       
    
                                            
                                                <!----------------------------------------------------------------------->  
            
            
    
                                                <!--------------------- Inicio campo "GitHub" -------------------------->
         
                                                <label for="validationCustom02" class="my-3">GitHub (Opcional)</label>
                                                <input type="text" class="form-control" name="git4" id="git4" maxlength="50">
    
                                                <!----------------------------------------------------------------------->    
    
    
                                                <!-------------------- Inicio campo "Linkedin" ------------------------->
       
                                                <label for="validationCustom03" class="my-3">Linkedin (Opcional)</label>
                                                <input type="text" class="form-control" name="linke4" id="linke4" maxlength="50">
    
                                                <!----------------------------------------------------------------------->
    
            
                                                <label class="my-3">Com qual equipamento você irá trabalhar?</label>
                                                    <select class="custom-select" name="ferra4">
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
                            </div>
                        </div>
    
    
                        <!--MEMBRO 5-->
                        <div class="card">
                            <div class="card-header" id="heading5">
                                <h2 class="mb-0">
                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse5">
                                       5° Membro (Opcional)<i class="fas fa-chevron-down"></i>
                                    </button>
                                </h2>
                            </div>
    
                            <div id="collapse5" class="collapse" data-parent="#accordionExample">
                                <div class="card-body">
    
                                     <div class="row justify-content-around">
    
                                        <div class="col-xl-5 col-lg-5 col-md-10 col-sm-12 col-12">
    
                                            <div class="form">
    
                                               
                                                <!-------------------- Inicio campo "Nome Completo"---------------------->
            
                                                <label for="validationCustom01" class="my-3">Nome completo</label>
                                                <input type="text" class="form-control" name="nome5" id="nome5" maxlength="40">
        
                                                <!----------------------------------------------------------------------->
    
    
                                                <!--------------------- Inicio campo "Email" --------------------------->
        
                                                <label for="validationCustom02" class="my-3">Email (Use seu melhor email)</label>
                                                <input type="email" class="form-control" name="email5" id="email5" maxlength="50">
    
                                                <!----------------------------------------------------------------------->
    
    
    
                                                <!--------------------- Inicio campo "Celular" ------------------------->
            
                                                <label for="validationCustom03" class="my-3">Celular</label>
                                                <input type="text" class="form-control" name="cel5" id="cel5" 
                                                maxlength="11" data-mask="(00) 0 0000-0000" autocomplete="off">
    
                                                <!----------------------------------------------------------------------->
    
    
    
                                                <!---------------------- Inicio campo "Sexo" --------------------------->
        
                                                <label class="my-3">Sexo</label>
                                                <div class="custom-control custom-radio mb-2">
                                                    <input type="radio" class="custom-control-input" id="sexom5" name="sexo5" value="Masculino">
                                                    <label class="custom-control-label" for="sexom5">Masculino</label>
                                                </div>
    
                                                <div class="custom-control custom-radio mb-2">
                                                    <input type="radio" class="custom-control-input" id="sexof5" name="sexo5" value="Feminino">
                                                    <label class="custom-control-label"  for="sexof5">Feminino</label>  
                                                </div>
    
                                                <!-----------------------------------------------------------------------> 
    
    
                                                <!---------------------- Inicio campo "RA" ----------------------------->
        
                                                <div class="form-row">
    
                                                    <div class="form-group col">
                                                        <label for="validationCustom04" class="my-1">RA</label>
                                                        <input type="text" class="form-control" name="ra5" id="ra5" maxlength="7">
                                                    </div>
    
                                                    <div class="form-group col">
                                                        <label for="validationCustom04" class="my-1">Turma</label>
                                                        <input type="text" class="form-control" name="turma5" id="turma5" placeholder="Ex: CC415A" maxlength="6">
                                                    </div>
    
                                                </div>
                                                <!----------------------------------------------------------------------->   
                                           
                                           
                                           
                                           
                                            </div>
                                        </div>
    
    
                                        <div class="col-xl-5 col-lg-5 col-md-10 col-sm-12 col-12">
    
                                            <div class="form">
    
                                
                                                <!--------------------- Inicio campo "Curso" e "Habilidade" ------------->
                                               
    
                                                        
                                                    <label for="validationCustom04" class="my-3">Curso</label>
                                                    <input type="text" class="form-control" name="curso5" id="" placeholder="Ex: Ciência da computação" maxlength="40">
                                                        
    
                                                       
                                                    <label class="my-3">Habilidade</label>
                                                    <select class="custom-select" name="habili5">
                                                        <option value="">Selecione uma habilidade</option>
                                                        <option value="Business">Business</option>
                                                        <option value="Developer">Developer</option>
                                                        <option value="Designer">Designer</option>                                                                            
                                                    </select>
                                                       
    
                                            
                                                <!----------------------------------------------------------------------->  
            
            
    
                                                <!--------------------- Inicio campo "GitHub" -------------------------->
         
                                                <label for="validationCustom02" class="my-3">GitHub (Opcional)</label>
                                                <input type="text" class="form-control" name="git5" id="git5" maxlength="50">
    
                                                <!----------------------------------------------------------------------->    
    
    
                                                <!-------------------- Inicio campo "Linkedin" ------------------------->
       
                                                <label for="validationCustom03" class="my-3">Linkedin (Opcional)</label>
                                                <input type="text" class="form-control" name="linke5" id="linke5" maxlength="50">
    
                                                <!----------------------------------------------------------------------->
    
            
                                                <label class="my-3">Com qual equipamento você irá trabalhar?</label>
                                                    <select class="custom-select" name="ferra5">
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
                            </div>
                        </div>
    
                    </div>
                </div>
            </div>

                <button class="btn btn-dark btn-lg d-block mx-auto my-5" type="submit">Cadastrar <i class="fas fa-paper-plane"></i></button>
                <h6 class="text-center text-white">Ao clicar em "cadastrar estou ciente e aceito todas as condições disponíveis no regulamento do evento.</h6>
            </form> 

        </div>
        <!---->
    </div>
    <!---->

    <!-- Modal -->
<div class="modal fade" id="Tema" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header border-0">
          <h5>TEMAS</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
        <h6 class="mb-4"><span class="num">1 -</span> Criar solução de software de Planejamento de Pátio para rastreamento de carga com Rfid</h6>
        <h6 class="my-4"><span class="num">2 -</span> Criar solução de software que possibilite que o usuário tenha uma melhor experiência ao acessar o portal/app interno da Santos Brasil.</h6>
        <h6 class="mt-4"><span class="num">3 -</span> Criar uma solução de software para autenticação através de reconhecimento facial, que permita integrar o app e que seja expansível para os sistemas legados.</h6>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="solucao" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header border-0">
          <h5>Campo opcional</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      O resumo da solução é opcional, entretanto, o líder deverá enviar um e-mail com essa informação no prazo de 3 dias após o cadastro do grupo. (Cpti.unipsantos@gmail.com)
      </div>
    </div>
  </div>
</div>


    
    <!--SCRIPT -->
    <script>
        window.alert("Bem-vindo ao sistema de cadastro de time! \n\n Aqui vão algumas orientações: \n\n - Antes de enviar os dados, verifique se todos os campos foram preenchidos corretamente; \n\n- Os campos linkedin, github e a seção do 4° e 5° membro são opcionais.");
    </script>
    <script src="Js/jquery.slim.min.js"></script>
    <script src="Js/popper.min.js"></script>
    <script src="Js/bootstrap.min.js"></script>
    <script src="Js/aos.js"></script>
    <script src="Js/jquery.mask.min.js"></script>
    
    </body>
</html>