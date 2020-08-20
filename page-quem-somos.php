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
                            <p>"Respeito, Transparência e Qualidade, sobre esses três pilares sustenta-se a fundação da KBImob.</p>
                            <br>
                            <p>Trabalhamos focados sempre, assim podemos entregar ao nosso cliente o melhor em atendimento, na busca do imóvel dos seus sonhos, da mudança, do investimento, da racionalidade... Enfim, em todos os motivos a certeza da melhor busca.</p>
                            <br>
                            <p>Organizamos todas as informações do imóvel que procura, do seu momento de vida e do seu perfil, agregando nossa honestidade, informações corretas e transparência. Entregaremos a você toda a excelência em atendimento e, por consequência, a busca do imóvel e a realização da compra certa!</p>
                            <br>
                            <p>Por isso buscamos sempre melhorar, atualizar, treinar e capacitar nossos especialistas, e assim, sermos reconhecidos pelo nosso ótimo trabalho para o cliente."</p>
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
                <?php echo do_shortcode('[contact-form-7 id="82" title="CTA Form"]'); ?>
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
                                <a href="https://www.facebook.com/kbimoboficial" target="_blank"><img
                                        src="<?php echo get_template_directory_uri(); ?>/_cdn/img/vt-facebook.svg" alt="Vetor Facebook"></a>
                                <a href="https://www.linkedin.com/in/kbi-kalila-business-intelligence-ab564b1a2/" target="_blank"><img
                                        src="<?php echo get_template_directory_uri(); ?>/_cdn/img/vt-linkedin.svg" alt="Vetor LinkedIn"></a>
                                <a href="https://www.instagram.com/kbimob/"
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
