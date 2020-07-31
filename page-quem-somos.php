<?php
/**
 * Template Name: Quem somos
 */
?>

<?php get_header(); ?>

    <!--MAIN-->
    <main class="main">
        <!-- home -->
        <div id="main_home"></div>
        <!-- about -->
        <section id="main_about">
            <div class="container">
                <!-- header -->
                <header class="main_about_header">
                    <h1>Quem somos!</h1>
                    <hr>
                </header>
                <!-- content -->
                <div class="main_about_content">
                    <div class="row">
                        <!-- image -->
                        <div class="col-lg-5 col-md-6">
                            <div class="main_about_content_image">
                                <img src="<?php echo get_template_directory_uri(); ?>/_cdn/img/img-home.jpg" alt="Imagem Quem Somos">
                            </div>
                        </div>
                        <!-- content -->
                        <div class="col-lg-7 col-md-6">
                            <div class="main_about_content_text">
                                <p>''Respeito, transparência e qualidade, sobre esses 3
                                    pilares, sustentasse a fundação da
                                    KBImob.</p>
                                <br>
                                <p>Trabalhamos focados sempre, podemos assim, entregar ao
                                    nosso cliente o melhor em
                                    atendimento, tanto na busca do imóvel dos seus sonhos, da
                                    mudança, do investimento, da
                                    racionalidade, enfim, em todos os motivos, a certeza da
                                    melhor busca.</p>
                                <br>
                                <p>Organizando todas as informações do imóvel que procura, do
                                    seu momento de vida, do seu
                                    perfil e, juntando a isso, nossa honestidade, informações
                                    corretas e transparência,
                                    entregaremos a você nosso cliente, toda a excelência em
                                    atendimento e por consequência,
                                    a busca correta do imóvel e a realização da compra certa!!
                                </p>
                                <br>
                                <p>Por isso, estamos sempre em busca de melhorar, atualizar,
                                    treinar e capacitar nossos
                                    especialistas, e poder assim, ter o reconhecimento do
                                    cliente de um ótimo trabalho."
                                </p>
                            </div>
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

<?php get_footer(); ?>
