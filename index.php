<?php get_header(); ?>
    <!--MAIN-->
    <main class="main">
        <!-- cta -->
        <section id="main_cta">
            <div class="main_cta_container">
                <!-- header -->
                <header class="main_cta_header">
                    <h1>Oportunidades únicas,<br><span>Realize já seu sonho!</span></h1>
                </header>
                <!-- content -->
                <div class="main_cta_content">
                    <a href="<?php echo get_permalink(get_page_by_title('Venda')); ?>" class="btn btn-color1">Quero <strong>Comprar</strong> <img
                            src="<?php echo get_template_directory_uri(); ?>/_cdn/img/vt-arrow.svg" alt="Vetor Seta"></a>
                    <a href="<?php echo get_permalink(get_page_by_title('Aluguel')); ?>" class="btn btn-color1">Quero <strong>Alugar</strong> <img
                            src="<?php echo get_template_directory_uri(); ?>/_cdn/img/vt-arrow.svg" alt="Vetor Seta"></a>
                </div>
                <!-- scroll -->
                <div class="main_cta_scroll">
                    <a href="#main_search"><span></span></a>
                </div>
            </div>
        </section>
        <!-- search -->
        <div id="main_search">
            <div class="container">
                <!-- form -->
                <form>
                    <div class="form-row">
                        <!-- Escolha -->
                        <div class="form-group col-md-3">
                            <label for="inputEscolha">Comprar ou Alugar?</label>
                            <select id="inputEscolha" class="form-control">
                                <option selected>Escolha...</option>
                                <option>Comprar</option>
                                <option>Alugar</option>
                            </select>
                        </div>
                        <!-- Status -->
                        <div class="form-group col-md-3">
                            <label for="inputStatus">Status</label>
                            <select id="inputStatus" class="form-control">
                                <option selected>Escolha...</option>
                            </select>
                        </div>
                        <!-- Tipo -->
                        <div class="form-group col-md-3">
                            <label for="inputTipo">Qual o tipo de imóvel?</label>
                            <select id="inputTipo" class="form-control">
                                <option selected>Escolha...</option>
                            </select>
                        </div>
                        <!-- Localização -->
                        <div class="form-group col-md-3">
                            <label for="inputLocalizacao">Qual a localização?</label>
                            <select id="inputLocalizacao" class="form-control">
                                <option selected>Escolha...</option>
                            </select>
                        </div>
                    </div>
                    <div class="main_search_button">
                        <button type="submit" class="btn btn-color1"><img src="<?php echo get_template_directory_uri(); ?>/_cdn/img/vt-search.svg"
                                alt="Vetor Pesquisa">Pesquisar</button>
                    </div>
                </form>
            </div>
        </div>
        <!-- spotlight -->
        <section id="main_spotlight">
            <div class="container">
                <!-- header -->
                <header class="main_spotlight_header">
                    <h1>Seu imóvel com o seu <span>estilo</span></h1>
                    <hr>
                    <p>Encontre o imóvel com a experiência que você quer viver!</p>
                </header>
                <!-- content -->
                <div class="main_cardAds_content">
                    <!-- card ads -->
                    <article class="main_cardAds">
                        <!-- header -->
                        <header class="main_cardAds_header">
                            <img src="<?php echo get_template_directory_uri(); ?>/_cdn/img/img-example.jpg" class="img-fluid" alt="Imagem Anúncio KBImob">
                            <div class="main_cardAds_header_container">
                                <h2><strong>Casa com 3 quartos no Brooklyn</strong></h2>
                                <hr>
                            </div>
                        </header>
                        <!-- content -->
                        <div class="main_cardAds_content">
                            <p>Imóvel Residencial</p>
                            <p><small>Brooklyn, São Paulo</small></p>
                            <br>
                            <p class="price">R$ 300.000,00</p>
                            <a href="#" class="btn btn-color1 btn-block">Ver Imóvel</a>
                        </div>
                        <div class="main_cardAds_content_data">
                            <!-- dormitory -->
                            <div class="main_cardAds_content_data_content">
                                <img src="<?php echo get_template_directory_uri(); ?>/_cdn/img/vt-dormitory.svg" alt="Vetor Dormitório">
                                <p>2</p>
                            </div>
                            <!-- garage -->
                            <div class="main_cardAds_content_data_content">
                                <img src="<?php echo get_template_directory_uri(); ?>/_cdn/img/vt-garage.svg" alt="Vetor Garagem">
                                <p>2</p>
                            </div>
                            <!-- size -->
                            <div class="main_cardAds_content_data_content">
                                <img src="<?php echo get_template_directory_uri(); ?>/_cdn/img/vt-size.svg" alt="Vetor Metragem">
                                <p>2</p>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="main_cardAds_content_button">
                    <a href="<?php echo get_permalink(get_page_by_title('Imóveis')); ?>" class="btn btn-color1">veja mais<img src="<?php echo get_template_directory_uri(); ?>/_cdn/img/vt-plus.svg" alt="Vetor Mais"></a>
                </div>
            </div>
        </section>
        <!-- pillar -->
        <section id="main_pillars">
            <div class="container">
                <!-- header -->
                <header class="main_pillars_header">
                    <h1>KBImob a imobiliária ideal para você<span>!</span></h1>
                    <hr>
                </header>
                <!-- content -->
                <div class="main_pillars_content">
                    <div class="row">
                        <!-- ads -->
                        <div class="col-sm-4">
                            <article class="main_pillars_content_card">
                                <header class="main_pillars_content_card_header">
                                    <img src="<?php echo get_template_directory_uri(); ?>/_cdn/img/vt-ads.svg" alt="Vetor Anúncio">
                                    <h2>Anuncie seu imóvel</h2>
                                </header>
                                <div class="main_pillars_content_card_content">
                                    <p>Anuncie aqui seu imóvel, postaremos em todos os portais com um
                                        grande alcance do público comprador, e você, terá todo o retorno
                                        dos clientes e o acompanhamento total de um especialista, com
                                        dicas pontuais sobre seu imóvel para melhor performance de
                                        venda.</p>
                                </div>
                            </article>
                        </div>
                        <!-- vip -->
                        <div class="col-sm-4">
                            <article class="main_pillars_content_card">
                                <header class="main_pillars_content_card_header">
                                    <img src="<?php echo get_template_directory_uri(); ?>/_cdn/img/vt-vip.svg" alt="Vetor VIP">
                                    <h2>Atendimento VIP</h2>
                                </header>
                                <div class="main_pillars_content_card_content">
                                    <p>Conte para nós todos os detalhes de imóvel que procura, somos uma Imobiliária
                                        Digital, e com toda a nossa estratégia e trabalho na área de marketing digital,
                                        encontramos as melhores ações na busca do seu imóvel.</p>
                                </div>
                            </article>
                        </div>
                        <!-- us -->
                        <div class="col-sm-4">
                            <article class="main_pillars_content_card">
                                <header class="main_pillars_content_card_header">
                                    <img src="<?php echo get_template_directory_uri(); ?>/_cdn/img/vt-us.svg" alt="Vetor Imobiliária">
                                    <h2>A Imobiliária</h2>
                                </header>
                                <div class="main_pillars_content_card_content">
                                    <p>A KBImob com a sua excelência em atendimento e alta performance no seu trabalho,
                                        nasceu para transformar o sonho do seu imóvel em realidade.</p>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- sale -->
        <section id="main_sale">
            <div class="container">
                <!-- header -->
                <header class="main_sale_header">
                    <h1>À Venda</h1>
                    <p>Conheça os nossos imóveis em destaque que estão à venda!</p>
                </header>
                <!-- content -->
                <div class="main_cardAds_content">
                    <!-- card ads -->
                    <article class="main_cardAds">
                        <!-- header -->
                        <header class="main_cardAds_header">
                            <img src="<?php echo get_template_directory_uri(); ?>/_cdn/img/img-example.jpg" class="img-fluid" alt="Imagem Anúncio KBImob">
                            <div class="main_cardAds_header_container">
                                <h2><strong>Casa com 3 quartos no Brooklyn</strong></h2>
                                <hr>
                            </div>
                        </header>
                        <!-- content -->
                        <div class="main_cardAds_content">
                            <p>Imóvel Residencial</p>
                            <p><small>Brooklyn, São Paulo</small></p>
                            <br>
                            <p class="price">R$ 300.000,00</p>
                            <a href="#" class="btn btn-color1 btn-block">Ver Imóvel</a>
                        </div>
                        <div class="main_cardAds_content_data">
                            <!-- dormitory -->
                            <div class="main_cardAds_content_data_content">
                                <img src="<?php echo get_template_directory_uri(); ?>/_cdn/img/vt-dormitory.svg" alt="Vetor Dormitório">
                                <p>2</p>
                            </div>
                            <!-- garage -->
                            <div class="main_cardAds_content_data_content">
                                <img src="<?php echo get_template_directory_uri(); ?>/_cdn/img/vt-garage.svg" alt="Vetor Garagem">
                                <p>2</p>
                            </div>
                            <!-- size -->
                            <div class="main_cardAds_content_data_content">
                                <img src="<?php echo get_template_directory_uri(); ?>/_cdn/img/vt-size.svg" alt="Vetor Metragem">
                                <p>2</p>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="main_cardAds_content_button">
                    <a href="<?php echo get_permalink(get_page_by_title('Venda')); ?>" class="btn btn-color1">veja mais<img src="<?php echo get_template_directory_uri(); ?>/_cdn/img/vt-plus.svg" alt="Vetor Mais"></a>
                </div>
            </div>
        </section>
        <!-- hire -->
        <section id="main_hire">
            <div class="container">
                <!-- header -->
                <header class="main_hire_header">
                    <h1>Para Alugar</h1>
                    <p>Conheça os nossos imóveis em destaque que estão para alugar!</p>
                </header>
                <!-- content -->
                <div class="main_cardAds_content">
                    <!-- card ads -->
                    <article class="main_cardAds">
                        <!-- header -->
                        <header class="main_cardAds_header">
                            <img src="<?php echo get_template_directory_uri(); ?>/_cdn/img/img-example.jpg" class="img-fluid" alt="Imagem Anúncio KBImob">
                            <div class="main_cardAds_header_container">
                                <h2><strong>Casa com 3 quartos no Brooklyn</strong></h2>
                                <hr>
                            </div>
                        </header>
                        <!-- content -->
                        <div class="main_cardAds_content">
                            <p>Imóvel Residencial</p>
                            <p><small>Brooklyn, São Paulo</small></p>
                            <br>
                            <p class="price">R$ 1.800,00/mês</p>
                            <a href="#" class="btn btn-color1 btn-block">Ver Imóvel</a>
                        </div>
                        <div class="main_cardAds_content_data">
                            <!-- dormitory -->
                            <div class="main_cardAds_content_data_content">
                                <img src="<?php echo get_template_directory_uri(); ?>/_cdn/img/vt-dormitory.svg" alt="Vetor Dormitório">
                                <p>2</p>
                            </div>
                            <!-- garage -->
                            <div class="main_cardAds_content_data_content">
                                <img src="<?php echo get_template_directory_uri(); ?>/_cdn/img/vt-garage.svg" alt="Vetor Garagem">
                                <p>2</p>
                            </div>
                            <!-- size -->
                            <div class="main_cardAds_content_data_content">
                                <img src="<?php echo get_template_directory_uri(); ?>/_cdn/img/vt-size.svg" alt="Vetor Metragem">
                                <p>2</p>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="main_cardAds_content_button">
                    <a href="<?php echo get_permalink(get_page_by_title('Aluguel')); ?>" class="btn btn-color1">veja mais<img src="<?php echo get_template_directory_uri(); ?>/_cdn/img/vt-plus.svg" alt="Vetor Mais"></a>
                </div>
            </div>
        </section>
        <!-- cta form -->
        <section id="main_ctaForm">
            <div class="container">
                <!-- header -->
                <header class="main_ctaForm_header">
                    <h1>Quer ficar por dentro de novidades?</h1>
                    <hr>
                </header>
                <!-- content -->
                <div class="main_ctaForm_content">
                    <p>Deixe o seu nome e o seu melhor e-mail nos campos abaixo e nós vamos lhe informar sobre os
                        melhores negócios e todos os lançamentos!</p>
                    <!-- form -->
                    <form>
                        <!-- input -->
                        <div class="form-group">
                            <input id="ctaName" class="form-control" type="text" placeholder="Digite seu nome">
                        </div>
                        <!-- input -->
                        <div class="form-group">
                            <input id="inputEscolha" class="form-control" type="email"
                                placeholder="Digite seu melhor e-mail">
                        </div>
                        <!-- button -->
                        <div class="main_ctaForm_content_button">
                            <button type="submit" class="btn btn-color1 btn-block">Me avise!</button>
                        </div>
                    </form>
                </div>
            </div>
        </section>
        <!-- real estate -->
        <section id="main_realState">
            <div class="container">
                <!-- header -->
                <header class="main_realState_header">
                    <h1>KBImob sua Imobiliária Digital!</h1>
                    <hr>
                </header>
                <!-- content -->
                <div class="main_realState_content">
                    <div class="row">
                        <!-- col -->
                        <div class="col-lg-7">
                            <!-- about us -->
                            <div class="main_realState_content_article">
                                <!-- article -->
                                <article class="main_realState_content_article">
                                    <!-- header -->
                                    <header class="main_realState_content_article_header">
                                        <h2>Nos <span>Conheça!</span></h2>
                                        <hr>
                                    </header>
                                    <!-- content -->
                                    <div class="main_realState_content_article_content">
                                        <p>Nossa maior satisfação é lhe ajudar a encontrar o imóvel dos seus sonhos.</p>
                                    </div>
                                </article>
                                <!-- article -->
                                <article class="main_realState_content_article">
                                    <!-- header -->
                                    <header class="main_realState_content_article_header">
                                        <h2>Quer <span>Investir?</span></h2>
                                        <hr>
                                    </header>
                                    <!-- content -->
                                    <div class="main_realState_content_article_content">
                                        <p>Entre em contato com a nossa equipe e vamos lhe informar sempre sobre os
                                            melhores negócios.</p>
                                    </div>
                                </article>
                            </div>
                        </div>
                        <!-- col -->
                        <div class="col-lg-5">
                            <div class="main_realState_content_media">
                                <div class="main_realState_content_media_container">
                                    <a href="https://www.facebook.com/kalila.carla" target="_blank"><img
                                            src="<?php echo get_template_directory_uri(); ?>/_cdn/img/vt-facebook.svg" alt="Vetor Facebook"></a>
                                    <a href="https://www.linkedin.com/in/kalila-carla-324b51147" target="_blank"><img
                                            src="<?php echo get_template_directory_uri(); ?>/_cdn/img/vt-linkedin.svg" alt="Vetor LinkedIn"></a>
                                    <a href="https://instagram.com/kalilacarla?igshid=1pr3ruvvjtpsx"
                                        target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/_cdn/img/vt-instagram.svg" alt="Vetor Instagram"></a>
                                    <a href="https://api.whatsapp.com/send?l=pt_BR&phone=5511963840832"
                                        target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/_cdn/img/vt-whatsapp-2.svg" alt="Vetor WhatsApp"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- footer -->
<?php echo get_footer() ?>
