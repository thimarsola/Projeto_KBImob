<?php
/**
 * Template Name: Venda
 */
?>

<?php get_header(); ?>

    <!--MAIN-->
    <main class="main">
        <!-- home -->
        <div id="main_home"></div>

        <!-- sale -->
        <section id="main_pageImmobile">
            <div class="container">
                <!-- header -->
                <header class="main_pageImmobile_header">
                    <h1>Imóveis que estão <span>À Venda!</span></h1>
                    <hr />
                    <p>Veja abaixo os nossos imóveis!</p>
                </header>
                <div class="row">
                    <!-- filter -->
                    <div class="col-sm-4">
                        <aside id="main_pageImmobile_filter">
                            <p><img src="<?php echo get_template_directory_uri(); ?>/_cdn/img/vt-filter.svg" alt="Vetor KBImob" />Filtro</p>
                            <form>
                                <!-- choice -->
                                <div class="form-group">
                                    <label for="formChoice">Comprar ou Alugar?</label>
                                    <select class="form-control" id="formChoice">
                                        <option>Escolha...</option>
                                    </select>
                                </div>
                                <!-- status -->
                                <div class="form-group">
                                    <label for="formStatus">Status</label>
                                    <select class="form-control" id="formStatus">
                                        <option>Escolha...</option>
                                    </select>
                                </div>
                                <!-- type -->
                                <div class="form-group">
                                    <label for="formType">Qual o tipo de imóvel?</label>
                                    <select class="form-control" id="formType">
                                        <option>Escolha...</option>
                                    </select>
                                </div>
                                <!-- location -->
                                <div class="form-group">
                                    <label for="formLocation">Qual a localização?</label>
                                    <select class="form-control" id="formLocation">
                                        <option>Escolha...</option>
                                    </select>
                                </div>
                                <!-- bedroom -->
                                <div class="form-group">
                                    <label for="formBedroom">Dormitórios</label>
                                    <select class="form-control" id="formBedroom">
                                        <option>Escolha...</option>
                                    </select>
                                </div>
                                <!-- suite -->
                                <div class="form-group">
                                    <label for="formSuite">Suítes</label>
                                    <select class="form-control" id="formSuite">
                                        <option>Escolha...</option>
                                    </select>
                                </div>
                                <!-- bathroom -->
                                <div class="form-group">
                                    <label for="formBathroom">Banheiros</label>
                                    <select class="form-control" id="formBathroom">
                                        <option>Escolha...</option>
                                    </select>
                                </div>
                                <!-- garage -->
                                <div class="form-group">
                                    <label for="formGarage">Garagem</label>
                                    <select class="form-control" id="formGarage">
                                        <option>Escolha...</option>
                                    </select>
                                </div>
                                <!-- button -->
                                <div class="formButton">
                                    <button type="submit" class="btn btn-color1"><img src="<?php echo get_template_directory_uri(); ?>/_cdn/img/vt-search.svg"
                                            alt="Vetor Pesquisa">Pesquisar</button>
                                </div>

                            </form>
                        </aside>
                    </div>
                    <div class="col-sm-8">
                        <!-- content -->
                        <div class="main_cardAds_content">
                            <!-- card ads -->
                            <article class="main_cardAds">
                                <!-- header -->
                                <header class="main_cardAds_header">
                                    <img src="<?php echo get_template_directory_uri(); ?>/_cdn/img/img-example.jpg" class="img-fluid" alt="Imagem Anúncio KBImob" />
                                    <div class="main_cardAds_header_container">
                                        <h2>
                                            <strong>Casa com 3 quartos no
                                                Brooklyn</strong>
                                        </h2>
                                        <hr />
                                    </div>
                                </header>
                                <!-- content -->
                                <div class="main_cardAds_content">
                                    <p>Imóvel Residencial</p>
                                    <p><small>Brooklyn, São Paulo</small></p>
                                    <br />
                                    <p class="price">R$ 300.000,00</p>
                                    <a href="#" class="btn btn-color1 btn-block">Ver Imóvel</a>
                                </div>
                                <div class="main_cardAds_content_data">
                                    <!-- dormitory -->
                                    <div class="main_cardAds_content_data_content">
                                        <img src="<?php echo get_template_directory_uri(); ?>/_cdn/img/vt-dormitory.svg" alt="Vetor Dormitório" />
                                        <p>2</p>
                                    </div>
                                    <!-- garage -->
                                    <div class="main_cardAds_content_data_content">
                                        <img src="<?php echo get_template_directory_uri(); ?>/_cdn/img/vt-garage.svg" alt="Vetor Garagem" />
                                        <p>2</p>
                                    </div>
                                    <!-- size -->
                                    <div class="main_cardAds_content_data_content">
                                        <img src="<?php echo get_template_directory_uri(); ?>/_cdn/img/vt-size.svg" alt="Vetor Metragem" />
                                        <p>2</p>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <!-- pagination -->
                        <div class="main_auctions_pagination mt-5">
                            <nav aria-label="Page navigation">
                                <ul class="pagination justify-content-center">
                                    <li class="page-item">
                                        <a class="page-link" href="#" aria-label="Previous">
                                            <span aria-hidden="true">&laquo;</span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="#" aria-label="Next">
                                            <span aria-hidden="true">&raquo;</span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- cta form -->
        <section id="main_ctaForm">
            <div class="container">
                <!-- header -->
                <header class="main_ctaForm_header">
                    <h1>Quer ficar por dentro de novidades?</h1>
                    <hr />
                </header>
                <!-- content -->
                <div class="main_ctaForm_content">
                    <p>
                        Deixe o seu nome e o seu melhor e-mail nos campos
                        abaixo e nós vamos lhe informar sobre os melhores
                        negócios e todos os lançamentos!
                    </p>
                    <!-- form -->
                    <form>
                        <!-- input -->
                        <div class="form-group">
                            <input id="ctaName" class="form-control" type="text" placeholder="Digite seu nome" />
                        </div>
                        <!-- input -->
                        <div class="form-group">
                            <input id="inputEscolha" class="form-control" type="email"
                                placeholder="Digite seu melhor e-mail" />
                        </div>
                        <!-- button -->
                        <div class="main_ctaForm_content_button">
                            <button type="submit" class="btn btn-color1 btn-block">
                                Me avise!
                            </button>
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
                    <hr />
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
                                        <hr />
                                    </header>
                                    <!-- content -->
                                    <div class="main_realState_content_article_content">
                                        <p>
                                            Nossa maior satisfação é lhe
                                            ajudar a encontrar o imóvel dos
                                            seus sonhos.
                                        </p>
                                    </div>
                                </article>
                                <!-- article -->
                                <article class="main_realState_content_article">
                                    <!-- header -->
                                    <header class="main_realState_content_article_header">
                                        <h2>Quer <span>Investir?</span></h2>
                                        <hr />
                                    </header>
                                    <!-- content -->
                                    <div class="main_realState_content_article_content">
                                        <p>
                                            Entre em contato com a nossa
                                            equipe e vamos lhe informar
                                            sempre sobre os melhores
                                            negócios.
                                        </p>
                                    </div>
                                </article>
                            </div>
                        </div>
                        <!-- col -->
                        <div class="col-lg-5">
                            <div class="main_realState_content_media">
                                <div class="main_realState_content_media_container">
                                    <a href="https://www.facebook.com/kalila.carla" target="_blank"><img
                                            src="<?php echo get_template_directory_uri(); ?>/_cdn/img/vt-facebook.svg" alt="Vetor Facebook" /></a>

                                    <a href="https://www.linkedin.com/in/kalila-carla-324b51147" target="_blank"><img
                                            src="<?php echo get_template_directory_uri(); ?>/_cdn/img/vt-linkedin.svg" alt="Vetor LinkedIn" /></a>

                                    <a href="https://instagram.com/kalilacarla?igshid=1pr3ruvvjtpsx"
                                        target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/_cdn/img/vt-instagram.svg"
                                            alt="Vetor Instagram" /></a>
                                    <a href="https://api.whatsapp.com/send?l=pt_BR&phone=5511963840832"
                                        target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/_cdn/img/vt-whatsapp-2.svg"
                                            alt="Vetor WhatsApp" /></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

<?php get_footer(); ?>
