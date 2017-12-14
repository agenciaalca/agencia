<?php include_once 'header.php'; ?>
<?php include_once 'mail.php'; ?>

<main class="container">
    <!-- Serviços -->
    <section id="servicos" class="section servicos" >
        <div class="row">
            <div class="titulos-de-contexto col-xs-12">
                <h1>Serviços</h1>
                <h3>O que fazemos?</h3>
                <p class="title">Somos lobos famintos por Desenvolvimento Web, Design, Mídias Sociais e
                    Marketing. Atuantes há 3 anos, já participamos de diversos projetos em vários nichos do
                    mercado e resolvemos unir as nossas experiências para oferecer o que existe de melhor
                    do marketing para você.</p>
            </div>
            <div class="col-md-4 col-sm-12 col-xs-12">
                <h2>DESENVOLVIMENTO</h2>
                <p>Hoje, estar presente na web é essencial para qualquer mercado, deste modo a Alca
                    está preparada para o desenvolvimento estratégico da solução web mais adequada para o
                    seu negócio.</p>
            </div>
            <div class="col-md-4 col-xs-12">
                <h2>IDENTIDADE VISUAL</h2>
                <p>A identidade visual é responsável por representar graficamente a sua empresa. A
                    escolha da composição correta de símbolos e cores é essencial para que a sua marca seja
                    sempre lembrada pelo consumidor. Assim a Alca está pronta para identificar a essência
                    da sua marca e criar uma identidade visual compatível com os seus valores.</p>
            </div>

            <div class="col-md-4 col-xs-12">
                <h2>MARKETING</h2>
                <p>Estar presente no meio digital é essencial para alcançar novos negócios. No entanto
                    para se destacar é necessário muito mais do que um perfil em uma rede social.
                    Planejamento e pesquisa são as ferramentas chaves que a Alca oferece para a promoção
                    da sua marca através do marketing digital.</p>
            </div>
        </div>
    </section><!-- fim serviços -->

    <!--      portfolio   -->
    <section id="projetos" class="section projetos">
        <div class="row">
            <div class="titulos-de-contexto">
                <h1>Projetos</h1>
                <h3>Conheça nossos trabalhos</h3>
            </div>

            <div class="portfolio-filter text-center">
                <ul class="filter">
                    <li class="active" data-filter="*">TODOS</li>
                    <li  data-filter=".desenvolvimento">DESENVOLVIMENTO</li>
                    <li  data-filter=".identidade-visual">IDENTIDADE VISUAL</li>
                    <li  data-filter=".marketing">MARKETING</li>
                </ul>
            </div>


            <div id="posts" class="row">
                <div id="1" class="item identidade-visual col-md-4 col-sm-6 col-xs-12">
                    <div class="single_projeto">
                        <img src="img/projetos/arape.png" alt="Logo empresa Arape" />
                        <!--                        <div class="projeto_overlay">
                                                                            <div class="overflow_hover_text">
                                                                                    <h2>DESENVOLVIMENTO</h2>
                                                                                    <a href="#" class="btn btn-default botao">
                                                                                        Ver Projeto
                                                                                    </a>
                                                                                </div>
                                                </div>-->
                    </div>
                </div>

                <div id="2" class="item identidade-visual col-md-4 col-sm-6 col-xs-12">
                    <div class="single_projeto">
                        <img src="img/projetos/arteco.png" alt="Logo empresa arteco" />
                        <!--                        <div class="projeto_overlay">
                                                                                <div class="overflow_hover_text">
                                                                                    <h2>DESENVOLVIMENTO</h2>
                                                                                    <a href="#" class="btn btn-default botao">
                                                                                        Ver Projeto
                                                                                    </a>
                                                                                </div>
                                                </div>-->
                    </div>
                </div>
                <div id="3" class="item identidade-visual col-md-4 col-sm-6 col-xs-12">
                    <div class="single_projeto">
                        <img src="img/projetos/cenoura-frita.png" alt="Logo empresa cenoura frita" />
                        <!--                        <div class="projeto_overlay">
                                                                                <div class="overflow_hover_text">
                                                                                    <h2>MARKETING</h2>
                                                                                    <a href="#" class="btn btn-default botao">
                                                                                        Ver Projeto
                                                                                    </a>
                                                                                </div>
                                                </div>-->
                    </div>
                </div>
                <div id="4" class="item marketing desenvolvimento col-md-4 col-sm-6 col-xs-12">
                    <div class="single_projeto">
                        <img src="img/projetos/grupo-conceito.png" alt="Logo grupo-conceito" />
                        <!--                        <div class="projeto_overlay">
                                                                                <div class="overflow_hover_text">
                                                                                    <h2>MARKETING</h2>
                                                                                    <a href="#" class="btn btn-default botao">
                                                                                        Ver Projeto
                                                                                    </a>
                                                                                </div>
                                                </div>-->
                    </div>
                </div>
                <div id="5" class="item identidade-visual desenvolvimento marketing col-md-4 col-sm-6 col-xs-12">
                    <div class="single_projeto">
                        <img src="img/projetos/tom-valin.png" alt="Logo tom valin" />
                        <!--                        <div class="projeto_overlay">
                                                                                <div class="overflow_hover_text">
                                                                                    <h2>IDENTIDADE VISUAL</h2>
                                                                                    <a href="#" class="btn btn-default botao">
                                                                                        Ver Projeto
                                                                                    </a>
                                                                                </div>
                                                </div>-->
                    </div>
                </div>
                <div id="6" class="item marketing col-md-4 col-sm-6 col-xs-12">
                    <div class="single_projeto">
                        <img src="img/projetos/pizza-na-pedra.png" alt="Logo pizza na pedra" />
                        <!--                        <div class="projeto_overlay">
                                                                                <div class="overflow_hover_text">
                                                                                    <h2>IDENTIDADE VISUAL</h2>
                                                                                    <a href="#" class="btn btn-default botao">
                                                                                        Ver Projeto
                                                                                    </a>
                                                </div>-->
                    </div>
                </div>
            </div>

        </div>
    </section> 
    <!--fim portfolio--> 

</main>

<!--  sobre a empresa -->
<section id="sobre" class="section sobre">
    <div class="container-fluid">
        <div class="row">
            <div class="titulos-de-contexto">
                <h1>Sobre</h1>
                <h3>Conheça nossa empresa</h3>
            </div>
            <div id="myCarousel" class="carousel slide" data-ride="carousel" data-pause="hover">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>

                <section class="container" >
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        <div class="item active">
                            <div class="sobre-texto col-xs-12">
                                A Agência Alca nasceu da junção de ideias e experiências de um estudantes do 
                                ramo da tecnologia que também é apaixonado por inovação e comunicação. Inspirada 
                                na ação impetuosa dos lobos, a Alca se espelhou na união de uma Alcateia para romper
                                barreiras, e solucionar problemas com a garra de quem está à procura dos melhores 
                                resultados possíveis.
                            </div>
                        </div>
                        <div class="item">
                            <div class="sobre-texto">
                                O nosso diferencial baseia-se na autenticidade dos projetos,
                                na eficiência para resolução de problemas, na criação e inovação
                                durante a execução dos projetos e no  planejamento estratégico que almeja
                                garantir boa execução do projeto conforme os anseios do mercado.
                            </div>
                        </div>
                        <div class="item">
                            <div class="sobre-texto">
                                A nossa missão é resolver problemas e solucionar necessidades
                                de marketing de empresas e profissionais liberais que procuram
                                agregar valor ao seu produto/serviço e alcançar mais competitividade
                                no mercado garantindo uma boa imagem corporativa.
                            </div>
                        </div>
                        <a class="left carousel-control" href="#myCarousel" data-slide="prev"></a>
                        <a class="right carousel-control" href="#myCarousel" data-slide="next"></a>
                    </div>
                </section>
            </div>
        </div>
    </div>
</section><!--  sobre a empresa -->

<main div class="container">   

    <!-- contato-->
    <section class="section contato container" id="contato">
        <div class="row">
            <div class="titulos-de-contexto col-xs-12">
                <h1>Contato</h1>
                <h3>Entre em contato conosco</h3>
            </div>
            <div class="row">
                <div class="col-md-8 col-xs-12">

                    <form method="post" action="index.php#formulario" name="formulario-contato" data-toggle="validator" role="form">
                        <div class="row">
                            <div class="col-md-6 col-xs-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="nome" id="nome" value="" placeholder="nome*" required />
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-6 col-xs-12">
                                <div class="form-group">
                                    <input type="email" class="form-control" name="email" id="email" value="" placeholder="email*" required
                                           data-error="Por favor, informe um e-mail válido.">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-xs-12">
                                <div class="form-group">
                                    <input type="number" class="form-control" name="telefone" id="telefone" value="" placeholder="telefone*" required />
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-6 col-xs-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="assunto" id="assunto" placeholder="assunto*" required/>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="form-group">
                                    <textarea class="form-control" id="exampleTextarea" rows="6" 
                                              id="mensagem" name="mensagem" placeholder="mensagem*" required></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class = "botao">
                                <input class = "btn btn-default" id = "submit" name = "submit" type = "submit" value = "ENVIAR">
                            </div>
                            <br>
                            <a name="formulario"></a>
                            <div class="mensagem-alerta"><?php echo $msg ?></div>
                        </div>
                    </form>
                </div>
                <div class = "col-md-4 col-xs-12">
                    <div class = "informacoes-contato">
                        <h4>EMAIL</h4>
                        <p>contato@agenciaalca.com</p>

                        <h4>TELEFONE</h4>
                        <p>(062) 4001-6530</p>
                        <p>(062) 9 9559-8809</p>

                        <h4>ENDEREÇO</h4>
                        <p>Rua 88-B, nº 73, Setor Sul, Goiânia - GO</p>
                    </div>
                </div>
            </div>
        </div>
    </section><!--fim contato -->
</main>

<?php include_once 'footer.php';
?>