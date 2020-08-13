<?php get_header(); ?>

<!--MAIN-->
<main class="main">
    <!-- home -->
    <div id="main_home"></div>

    <?php
    if (have_posts()) :
        while (have_posts()) : the_post();
            ?>
            <?php get_template_part('template-parts/content', 'single'); ?>
        <?php endwhile; ?>
    <?php else: ?>
        <p>Não existem produtos cadastrados no momento.</p>
    <?php endif; ?>

    <!-- cta -->
    <section id="main_ctaImmobile">
        <div class="container">
            <!-- header -->
            <header class="main_cta_header">
                <h1>Gostou deste <span>imóvel?</span></h1>
                <p>
                    Quer conversar com um especialista em imóveis e ter
                    um atendimento diferenciado sobre este imóvel?
                </p>
            </header>
            <!-- content -->
            <div class="main_cta_content">
                <p>
                    Clique no botão abaixo e preencha o nosso
                    formulário, entraremos em contato o mais breve
                    possível!
                </p>
                <a href="#form" class="btn btn-color1">Preencher formulário</a>
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
