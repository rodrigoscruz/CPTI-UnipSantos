<!DOCTYPE html>
<html lang="pt-br">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <!--BOOTSTRAP-->
    <link rel="stylesheet" href="Css/bootstrap.min.css">
    
    <!--ESTILO DO SITE-->
    <link rel="stylesheet" href="Css/stylePalestra.css">
    
    <!--ANIMAÇÕES-->
    <link rel="stylesheet" href="Css/aos.css">
    
    <!--ICONS-->
    <link rel="stylesheet" href="node_modules/@fortawesome/fontawesome-free/css/all.min.css">
    
    <!--FONTES-->
    <link href="https://fonts.googleapis.com/css?family=Archivo+Black|Baloo|Quicksand|Roboto|Staatliches&display=swap" rel="stylesheet">
    
    <title>Palestras</title>

</head>

<body>

    <!--NAVBAR-->
    <nav class="navbar navbar-expand-md">

        <div class="container">
            
            <a href="index.php" class="navbar-brand text-white"><img src="Img/Palestras/LogoCPTI.png" class="img-fluid"></a>
            
            <button class="navbar-toggler" data-toggle="collapse" data-target="#collapse">
                <i class="fas fa-bars text-white"></i>
            </button>
            
            <!--COLLAPSE-->
            <div class="collapse navbar-collapse" id="collapse">

                <ul class="navbar-nav ml-auto">

                    <li class="nav-item">
                        <a href="index.php" class="nav-link">Home</a>
                    </li>
                    
                    <li class="nav-item">
                        <a href="Palestra.php" class="nav-link" id="active">Palestras</a>
                    </li>
                    
                    <li class="nav-item">
                        <a href="Hackathon.php" class="nav-link">Hackathon</a>
                    </li>

                </ul>  

            </div>
            <!--Fim collapse-->

        </div>
        <!--Fim container-->

    </nav>
    <!---->


    <!--MATUTINO-->
    <section id="matutino">

        <div class="container">

            <h1>Matutino</h1>
            

            <ul class="nav nav-tabs" id="myTab" role="tablist">

                <li class="nav-item">
                    <a class="nav-link active linke" id="Dia1-tab" data-toggle="tab" href="#Dia1" role="tab">21/10/19</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link linke" id="Dia2-tab" data-toggle="tab" href="#Dia2" role="tab">22/10/19</a>
                </li>
                
            </ul>

            <!--Conteudo-->
            <div class="tab-content" id="myTabContent">

                <!--DIA 01-->
                <div class="tab-pane fade show active" id="Dia1" role="tabpanel">
                    
                    <!--Grid-->
                    <div class="row justify-content-center">

                        <!--Coluna-->
                        <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 col-12">

                            <div class="jumbotron mt-5">
                                <h4>Abertura</h4>
                                <hr>
                                <p>Uma breve introdução do evento.</p>
                                
                                <a href="#palestrantes"><h6>Palestrante: Prof. Dr. Edison Monteiro (UNIP - Santos)</h6></a>
                                <h5><span class="badge badge-dark">Horário: 09:00</span></h5>
                
                            </div>

                        </div>
                        
                        <!--Coluna-->
                        <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 col-12">

                            <div class="jumbotron mt-5">
                                <h4>Edge Computing</h4>
                                <hr>
                                <p>Ainda não possui uma descrição.</p>
                                                               
                                <a href="#palestrantes"><h6>Palestrante: Alexander Rodrigues Vieira (Schneider Electric)</h6></a>
                                <h5><span class="badge badge-dark">Horário: 09:15</span></h5>

                            </div>

                        </div>
                         
                              
                    </div>

                </div>
                <!---->  
                

                <!--DIA 02-->
                <div class="tab-pane fade" id="Dia2" role="tabpanel">
                    
                    <!--Grid-->
                    <div class="row justify-content-center">

                        <!--Coluna-->
                        <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 col-12">
                            
                            <div class="jumbotron mt-5">
                                <h4>O futuro da inteligência artificial é agora!</h4>
                                <hr>
                                <p>
                                    A Dell Technologies está na vanguarda da Inteligência 
                                    Artificial (AI), fornecendo a tecnologia que possibilita 
                                    o amanhã, hoje. A palestra abordará conceitos básicos de 
                                    AI e como a desenvolvemos soluções que sustentam implementações 
                                    bem-sucedidas de AI, Machine Learning e Deep Learning.
                                </p>
                                
                                <a href="#palestrantes"><h6>Palestrante: Fabricio Bronzati (Dell do Brazil)</h6></a>
                                <h5><span class="badge badge-dark">Horário: 09:15</span></h5>
                            </div>

                        </div>
                                                              
                    </div>

                </div>
                <!---->  


            </div>
            <!---->

        </div>
        <!---->
    </section>
    <!---->


    <!--NOTURNO-->
    <section id="noturno">
        
        <div class="container">

            <h1>Noturno</h1>
            
            <ul class="nav nav-tabs" id="myTab" role="tablist">

                <li class="nav-item">
                    <a class="nav-link active linke" id="Dia11-tab" data-toggle="tab" href="#Dia11" role="tab">21/10/19</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link linke" id="Dia22-tab" data-toggle="tab" href="#Dia22" role="tab">22/10/19</a>
                </li>
               
            </ul>


            <!--Conteudo-->
            <div class="tab-content" id="myTabContent">

                <!--DIA 01-->
                <div class="tab-pane fade show active" id="Dia11" role="tabpanel">
                    
                    <!--Grid-->
                    <div class="row justify-content-center">

                        <!--Coluna-->
                        <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 col-12">

                            <div class="jumbotron mt-5">
                                <h4>Abertura</h4>
                                <hr>
                                <p>Uma breve introdução do evento.</p>
                                
                                <a href="#palestrantes"><h6>Palestrante:Prof. Dr. Edison Monteiro (UNIP - Santos)</h6></a>
                                <h5><span class="badge badge-dark">Horário: 19:15</span></h5>
                            </div>

                        </div>
                        
                        <!--Coluna-->
                        <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 col-12">

                            <div class="jumbotron mt-5">
                                <h4>World of e-Sports</h4>
                                <hr>

                                <p>
                                    e-Sports é um fenómeno global que vai passar $1B USD 
                                    em faturamento em 2019.  Brasil é o terceiro maior páis 
                                    do mundo em fãs de e-Sports.  Como está este fenómeno de 
                                    e-Sports no Brasil em comparisão do mundo? O que e-Sports 
                                    traz para o Brasil para melhorar o país?  O que podemos fazer 
                                    no Brasil para gerar mais oportunidades com e-Sports e melhorar 
                                    o posicionamento do país e os jogadores profíssionais em comparisão 
                                    do resto do mundo?
                                </p>

                                
                                <a href="#palestrantes"><h6>Palestrante: Brent McCray</h6></a>
                                <h5><span class="badge badge-dark">Horário: 19:30</span></h5>
                            </div>

                        </div>
                         
                            
                    </div>

                </div>
                <!---->  
                

                <!--DIA 02-->
                <div class="tab-pane fade" id="Dia22" role="tabpanel">
                    
                    <!--Grid-->
                    <div class="row justify-content-center">

                        <!--Coluna-->
                        <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 col-12">
                            
                            <div class="jumbotron mt-5">
                                <h4>O futuro da inteligência artificial é agora!</h4>
                                <hr>
                                <p>
                                    A Dell Technologies está na vanguarda da Inteligência Artificial (AI), 
                                    fornecendo a tecnologia que possibilita o amanhã, hoje. A palestra abordará 
                                    conceitos básicos de AI e como a desenvolvemos soluções que sustentam 
                                    implementações bem-sucedidas de AI, Machine Learning e Deep Learning.
                                </p>
                                
                               
                                <a href="#palestrantes"><h6>Palestrante: Fabricio Bronzati (Dell do Brazil)</h6></a>
                                <h5><span class="badge badge-dark">Horário: 19:15</span></h5>
                            </div>

                        </div>
                        
                            
                    </div>

                </div>
                <!---->  



            </div>
            <!---->

        </div>
        <!---->

    </section>
    <!---->

    
    <!--PALESTRANTES-->
    <section id="palestrantes">

        <div class="container">

            <h1>Conheça os palestrantes</h1>
            
            <div class="row justify-content-center">
                
                <div class="col-12">
                    
                    <div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
                        
                        <div class="carousel-inner">
                            
                            <div class="carousel-item active">
                                
                                <div class="row justify-content-center">
                                    
                                    <!--div class="col-xl-4 col-lg-4 col-md-5 col-sm-5 col-5 mb-2">
                                        
                                        <div class="avatar">
                                            <img src="Img/Palestras/Sem título.png" class="img-fluid">
                                        </div>

                                    </div-->
                                    
                                    <div class="col-xl-6 col-lg-6 col-md-8 col-sm-10 col-10 align-self-center">
                                        
                                        <h2>Fabricio Bronzati</h2>
                                        <h6>Sr. Technology Strategist na Dell Technologies</h6> 

                                        <p>
                                            Formado em Engenharia Eletrônica pelo Instituto Mauá de Tecnologia, é aficionado por tecnologia, atua desde 2000 no mercado de TI com foco em infraestrutura de datacenters e atualmente é responsável pela pré-venda técnica e arquitetura de infraestrutura utilizadas para SAP, AI, HPC e Big Data.
                                        </p>

                                        

                                    </div>

                                </div>
                                
                            </div>
                            

                            <div class="carousel-item" >

                                <div class="row justify-content-center">

                                    <!--div class="col-xl-4 col-lg-4 col-md-5 col-sm-5 col-5 mb-2">
                                        
                                        <div class="avatar">
                                            <img src="Img/Palestras/Sem título.png" class="img-fluid">
                                        </div>

                                    </div-->
                                    
                                    <div class="col-xl-6 col-lg-6 col-md-8 col-sm-10 col-10 align-self-center">
                                        
                                        <h2>Brent McCray</h2> 
                                        <h6></h6>   

                                        <p>
                                            Era Diretor Mundial de Desenvolvimento de Negócios para Patriot - focado principalmente em ajudar a crescer os segmentos de jogos e eSports no Brasil e além. Antes da Patriot, o Brent passou 9 anos na Intel e foi Diretor Mundial de Marketing para o segmento de entusiastas da Intel - Gaming, eSports e Criação de Mídia. Ele foi responsável por trazer o primeiro evento internacional de eSports para o Brasil - Intel Extreme Masters em 2012 á 2014. Ele também era o "pai" do processador de overclocking "Série K" da Intel. Ele é um Mentor para estudantes do Grupo de Inovação da Universidade Estácio.
                                        </p>

                                       
                                    
                                    </div>

                                </div>
                                
                            </div>
                            

                            <div class="carousel-item">

                                <div class="row justify-content-center">

                                    <!--div class="col-xl-4 col-lg-4 col-md-5 col-sm-5 col-5 mb-2">
                                        
                                        <div class="avatar">
                                            <img src="Img/Palestras/Sem título.png" class="img-fluid">
                                        </div>

                                    </div-->
                                    
                                    <div class="col-xl-6 col-lg-6 col-md-8 col-sm-10 col-10 align-self-center">
                                        
                                        <h2>Alexander Rodrigues Vieira</h2>
                                        <h6></h6>  

                                        <p>
                                            Formado em Engenharia Elétrica pela Universidade Nove de Julho em 2013, iniciou sua carreira na Schneider Electric, como estagiário, passando por algumas funções até se tornar Engenheiro de Aplicação focado em negócios para Data Center. Atualmente é Engenheiro de Marketing de Produto na Schneider Electric, sendo responsável pelo desenvolvimento da oferta de EcoStruxure IT no mercado brasileiro, pela linha de nobreaks trifásicos, lançamento de produtos, além de ministrar treinamentos e palestras sobre sistemas de energia, Edge Computing e tecnologias de IoT para Data Center e TI distribuído.
                                        </p>

                                        
                                    
                                    </div>

                                </div>
                                
                            </div>
                            


                            <!--PREV-->
                            <a class="carousel-control-prev" id="prev" href="#carouselExampleInterval" role="button" data-slide="prev">
                               <i class="fas fa-chevron-left text-white"></i>
                            </a>

                            <!--NEXT-->
                            <a class="carousel-control-next" id="next" href="#carouselExampleInterval" role="button" data-slide="next">
                                <i class="fas fa-chevron-right text-white"></i>
                            </a>


                        </div>
                        
                    </div>

                </div>  

            </div>
            
        </div>       
    </section>
    <!---->


     <!--APOIADORES-->
    <section id="apoiadores">

        <div class="container">
            
            <h1>Envolvidos no evento</h1>

                <!--Carroseul-->
                <div id="carouselExampleControls" class="carousel slide mt-5 d-none d-sm-block" data-ride="carousel">
                            
                    <div class="carousel-inner">

                            <div class="carousel-item active" data-interval="2500">

                                <div class="row justify-content-center">

                                    <div class="col-3 py-3">
                                        <a href="https://www.dell.com/pt-br" target="_blank"><img src="Img/Apoiadores/Dell.png" class="img-fluid d-block mx-auto shadow"></a>
                                    </div>

                                    <div class="col-3 py-3">
                                        <a href="http://modalgr.com.br" target="_blank"><img src="Img/Apoiadores/Modalgr.png" class="img-fluid d-block mx-auto shadow"></a>
                                    </div>

                                    <div class="col-3 py-3">
                                        <a href="https://www.linkedin.com/in/brentmccray/" target="_blank"><img src="Img/Apoiadores/ROI.png" class="img-fluid d-block mx-auto shadow"></a>
                                    </div>
                                </div>
                              
                            </div>

                            
                            <div class="carousel-item" data-interval="2500">

                                <div class="row justify-content-center">

                                    <div class="col-3 py-3">
                                        <a href="http://btp.com.br" target="_blank"><img src="Img/Apoiadores/BTP.png" class="img-fluid d-block mx-auto shadow"></a>
                                    </div>

                                    <div class="col-3 py-3">
                                        <a href="https://www.santosbrasil.com.br" target="_blank"><img src="Img/Apoiadores/SantosBrasil.png" class="img-fluid d-block mx-auto shadow"></a>
                                    </div>

                                    <div class="col-3 py-3">
                                        <a href="http://www.bandeiranteslog.com.br" target="_blank"><img src="Img/Apoiadores/Band_deci.png" class="img-fluid d-block mx-auto shadow"></a>
                                    </div>

                                </div>  

                            </div>  
                            
                            
                             <div class="carousel-item" data-interval="2500">

                                <div class="row justify-content-center">

                                    <div class="col-3 py-3">
                                        <a href="https://www.caelum.com.br" target="_blank"><img src="Img/Apoiadores/Caelum.png" class="img-fluid d-block mx-auto shadow"></a>
                                    </div>

                                    <div class="col-3 py-3">
                                        <a href="https://www.casadocodigo.com.br" target="_blank"><img src="Img/Apoiadores/CasaDoCodigo.png" class="img-fluid d-block mx-auto shadow"></a>
                                    </div>

                                    <div class="col-3 py-3">
                                        <a href="https://www.concrete.com.br" target="_blank"><img src="Img/Apoiadores/Concrete.png" class="img-fluid d-block mx-auto shadow"></a>
                                    </div>

                                </div>  

                            </div>
                            
                            
                             <div class="carousel-item" data-interval="2500">

                                <div class="row justify-content-center">

                                    <div class="col-3 py-3">
                                        <a href="https://www.facebook.com/MovimentoBaixadaNerd/" target="_blank"><img src="Img/Apoiadores/Nerd.png" class="img-fluid d-block mx-auto shadow"></a>
                                    </div>

                                    <div class="col-3 py-3">
                                        <a href="https://ww2.soc.com.br" target="_blank"><img src="Img/Apoiadores/SOC.png" class="img-fluid d-block mx-auto shadow"></a>
                                    </div>

                                    <div class="col-3 py-3">
                                        <a href="https://www.se.com/br/pt/" target="_blank"><img src="Img/Apoiadores/SE_green.png" class="img-fluid d-block mx-auto shadow"></a>
                                    </div>

                                </div>  

                            </div>

                            <!--Novo-->
                            <div class="carousel-item" data-interval="2500">

                                <div class="row justify-content-center">

                                    <div class="col-3 py-3">
                                        <a href="http://a5solutions.com/" target="_blank"><img src="Img/Apoiadores/A5.png" class="img-fluid d-block mx-auto shadow"></a>
                                    </div>

                                    <div class="col-3 py-3">
                                        <a href="https://www.avanade.com/pt-br" target="_blank"><img src="Img/Apoiadores/Avanade.png" class="img-fluid d-block mx-auto shadow"></a>
                                    </div>

                                    <div class="col-3 py-3">
                                        <a href="http://meiuca.design/#first-section" target="_blank"><img src="Img/Apoiadores/Meiuca.png" class="img-fluid d-block mx-auto shadow"></a>
                                    </div>

                                </div>  

                            </div>


                            <div class="carousel-item" data-interval="2500">

                                    <div class="row justify-content-center">
    
                                        <div class="col-3 py-3">
                                            <a href="https://www.facebook.com/pg/kahvitech/posts/" target="_blank"><img src="Img/Apoiadores/Kahvitech.png" class="img-fluid d-block mx-auto shadow"></a>
                                        </div>
    
                                        <div class="col-3 py-3">
                                            <a href="http://www.magictv.com.br/" target="_blank"><img src="Img/Apoiadores/magic.png" class="img-fluid d-block mx-auto shadow"></a>
                                        </div>

                                        <div class="col-3 py-3">
                                            <a href="http://www.bdsdatasolution.com.br/" target="_blank"><img src="Img/Apoiadores/BDS.png" class="img-fluid d-block mx-auto shadow"></a>
                                        </div>
    
    
                                    </div>  
    
                            </div>

                            <div class="carousel-item" data-interval="2500">

                                <div class="row justify-content-center">

                                    <div class="col-3 py-3">
                                        <a href="http://www.mctic.gov.br/portal" target="_blank"><img src="Img/Apoiadores/MCTIC.png" class="img-fluid d-block mx-auto shadow"></a>
                                    </div>

                                    <div class="col-3 py-3">
                                        <a href="" target="_blank"><img src="Img/Apoiadores/Embracode.png" class="img-fluid d-block mx-auto shadow"></a>
                                    </div>

                                    <div class="col-3 py-3">
                                        <a href="https://www.ibm.com/br/university/" target="_blank"><img src="Img/Apoiadores/IBM.png" class="img-fluid d-block mx-auto shadow"></a>
                                    </div>

                                </div>  

                            </div>
                        

                    </div>

                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                            <h1 class="text-dark"><i class="fas fa-chevron-left"></i></h1>
                        </a>

                        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                            <h1 class="text-dark"><i class="fas fa-chevron-right"></i></h1>
                        </a>

                </div>

                <!--Carroseul celular-->
                <div id="carouselControls" class="carousel slide d-block d-sm-none" data-ride="carousel">
                    <div class="carousel-inner">
                          
                        <!--1-->  
                        <div class="carousel-item active">
                            <a href="https://www.dell.com/pt-br" target="_blank"><img src="Img/Apoiadores/Dell.png" class="img-fluid d-block mx-auto shadow w-50"></a>
                        </div>

                        <!--2-->
                        <div class="carousel-item">
                                <a href="http://modalgr.com.br" target="_blank"><img src="Img/Apoiadores/Modalgr.png" class="img-fluid d-block mx-auto shadow w-50"></a>
                        </div>

                        <!--3-->
                        <div class="carousel-item">
                            <a href="" target="_blank"><img src="Img/Apoiadores/ROI.png" class="img-fluid d-block mx-auto shadow w-50"></a>
                        </div>

                        <!--4-->
                        <div class="carousel-item">
                            <a href="http://btp.com.br" target="_blank"><img src="Img/Apoiadores/BTP.png" class="img-fluid d-block mx-auto shadow w-50"></a>
                        </div>

                        <!--5-->
                        <div class="carousel-item">
                            <a href="https://www.santosbrasil.com.br" target="_blank"><img src="Img/Apoiadores/SantosBrasil.png" class="img-fluid d-block mx-auto shadow w-50"></a>
                        </div>

                        <!--6-->
                        <div class="carousel-item">
                            <a href="http://www.bandeiranteslog.com.br" target="_blank"><img src="Img/Apoiadores/Band_deci.png" class="img-fluid d-block mx-auto shadow w-50"></a>
                        </div>

                        <!--7-->
                        <div class="carousel-item">
                            <a href="https://www.caelum.com.br" target="_blank"><img src="Img/Apoiadores/Caelum.png" class="img-fluid d-block mx-auto shadow w-50"></a>
                        </div>

                        <!--8-->
                        <div class="carousel-item">
                            <a href="https://www.casadocodigo.com.br" target="_blank"><img src="Img/Apoiadores/CasaDoCodigo.png" class="img-fluid d-block mx-auto shadow w-50"></a>
                        </div>

                        <!--9-->
                        <div class="carousel-item">
                            <a href="https://www.concrete.com.br" target="_blank"><img src="Img/Apoiadores/Concrete.png" class="img-fluid d-block mx-auto shadow w-50"></a>
                        </div>

                        <!--10-->
                        <div class="carousel-item">
                            <a href="https://www.facebook.com/MovimentoBaixadaNerd/" target="_blank"><img src="Img/Apoiadores/Nerd.png" class="img-fluid d-block mx-auto shadow w-50"></a>
                        </div>

                        <!--11-->
                        <div class="carousel-item">
                            <a href="https://ww2.soc.com.br" target="_blank"><img src="Img/Apoiadores/SOC.png" class="img-fluid d-block mx-auto shadow w-50"></a>
                        </div>

                        <!--12-->
                        <div class="carousel-item">
                            <a href="https://www.se.com/br/pt/" target="_blank"><img src="Img/Apoiadores/SE_green.png" class="img-fluid d-block mx-auto shadow w-50"></a>
                        </div>

                        <!--13-->
                        <div class="carousel-item">
                            <a href="http://a5solutions.com/" target="_blank"><img src="Img/Apoiadores/A5.png" class="img-fluid d-block mx-auto shadow"></a>
                        </div>

                        <!--14-->
                        <div class="carousel-item">
                            <a href="https://www.avanade.com/pt-br" target="_blank"><img src="Img/Apoiadores/Avanade.png" class="img-fluid d-block mx-auto shadow"></a>
                        </div>

                        <!--15-->
                        <div class="carousel-item">
                            <a href="http://meiuca.design/#first-section" target="_blank"><img src="Img/Apoiadores/Meiuca.png" class="img-fluid d-block mx-auto shadow"></a>
                        </div>

                        <!--16-->
                        <div class="carousel-item">
                            <a href="http://www.magictv.com.br/" target="_blank"><img src="Img/Apoiadores/magic.png" class="img-fluid d-block mx-auto shadow"></a>
                        </div>

                        <!--17-->
                        <div class="carousel-item">
                            <a href="http://www.bdsdatasolution.com.br/" target="_blank"><img src="Img/Apoiadores/BDS.png" class="img-fluid d-block mx-auto shadow"></a>
                        </div>

                        <!--18-->
                        <div class="carousel-item">    
                            <a href="https://www.facebook.com/pg/kahvitech/posts/" target="_blank"><img src="Img/Apoiadores/Kahvitech.png" class="img-fluid d-block mx-auto shadow w-50"></a>            
                        </div>

                        <!--19-->
                        <div class="carousel-item">
                            <a href="http://www.mctic.gov.br/portal" target="_blank"><img src="Img/Apoiadores/MCTIC.png" class="img-fluid d-block mx-auto shadow w-50"></a>
                        </div>

                        <div class="carousel-item">
                            <a href="" target="_blank"><img src="Img/Apoiadores/Embracode.png" class="img-fluid d-block mx-auto shadow w-50"></a>
                        </div>

                        <div class="carousel-item">
                            <a href="https://www.ibm.com/br/university/" target="_blank"><img src="Img/Apoiadores/IBM.png" class="img-fluid d-block mx-auto shadow w-50"></a>
                        </div>
                          

                    </div>

                        <a class="carousel-control-prev" href="#carouselControls" role="button" data-slide="prev">
                            <h3 class="text-dark"><i class="fas fa-chevron-left"></i></h3>
                        </a>

                        <a class="carousel-control-next" href="#carouselControls" role="button" data-slide="next">
                            <h3 class="text-dark"><i class="fas fa-chevron-right"></i></h3>
                        </a>
                </div>



            </div>

        </div>
        <!--Fim container-->
    </section>
    <!---->


     <!--RODAPÉ-->
     <section id="rodape">
         <div class="container">
             <footer class="text-center">
                 <h1><a href="#"><i class="fas fa-chevron-circle-up"></i></a></h1>
                
                <div class="row justify-content-center">
                    <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 my-5">
                        <h3>Menu</h3>
                        <hr>
                        <div class="row justify-content-center">
                            <div class="col-xl-4 col-lg-4 col-md-2 col-sm-12 col-12"><a href="index.php" class="linkRodape">Home</a></div>
                            <div class="col-xl-4 col-lg-4 col-md-2 col-sm-12 col-12"><a href="Palestra.php" class="linkRodape">Palestras</a></div>
                            <div class="col-xl-4 col-lg-4 col-md-2 col-sm-12 col-12"><a href="Hackathon.php" class="linkRodape">Hackathon</a></div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
                        <a href="https://www.unip.br/" target="_blank"><img src="Img/Home/logounip.png" class="img-fluid d-block mx-auto" width="250px"></a>
                    </div>

                    <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mt-5">
                        <h3>Redes sociais</h3>
                        <hr>
                        <div class="row justify-content-center">
                        <div class="col-xl-3 col-lg-2 col-md-1 col-sm-2 col-2"><h1><a href="https://www.facebook.com/UNIPoficial/?__tn__=%2Cd%2CP-R&eid=ARBem2GzIJqv9ucpxeKCpWmldLLkq_QFp6VSZneyauHoYoisz-GW-DWjBtHAqPeDFZBH5k7Ye1fD_vct" target="_blank"><i class="fab fa-facebook-f"></i></a></h1></div>
                        <div class="col-xl-3 col-lg-2 col-md-1 col-sm-2 col-2"><h1><a href="https://www.linkedin.com/school/unip/" target="_blank"><i class="fab fa-linkedin"></i></a></h1></div>
                        <div class="col-xl-3 col-lg-2 col-md-1 col-sm-2 col-2"><h1><a href="https://www.instagram.com/_unipoficial/" target="_blank"><i class="fab fa-instagram"></i></a></h1></div>
                        </div>
                    </div>

                </div> 

                
                
            </footer>
        </div>
        <div class="copyright text-center">
            <h3><i class="fas fa-copyright"></i> Copyright</h3>
            <p><a href="http://www.cpti-unipsantos.com/" class="linkRodape">www.cpti-unipsantos.com</a></p>
        </div>
     </section>               
     <!---->


    <!--SCRIPT-->
    <script src="Js/jquery.slim.min.js"></script>
    <script src="Js/popper.min.js"></script>
    <script src="Js/bootstrap.min.js"></script>
    <script src="Js/aos.js"></script> 
    <script src="Js/myscript.js"></script>

</body>
</html>