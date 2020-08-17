<?php get_header(); ?>

<!--MAIN-->
<main class="main">
    <!-- home -->
    <div id="main_home"></div>
    <!-- contact -->
    <section id="main_contact">
        <div class="container">
            <!-- header -->
            <header class="main_contact_header">
                <h1>Faça parte da nossa <span>equipe!</span></h1>
                <hr />
            </header>
            <!-- content -->
            <div class="main_contact_content">
                <p>
                    A KBImob oferece um ambiente de trabalho dinâmico.
                </p>
                <p>
                    Existem inúmeras razões para você trabalhar conosco, oferecemos oportunidades de crescimento e
                    desenvolvimento profissional.
                </p>
                <p>Trabalhamos com ética, integridade, transparência e valorizando as pessoas.</p>
                <div class="row mt-5">
                    <div class="col-sm-7">
                        <div class="main_contact_content_form">
                            <p>
                                <img src="<?php echo get_template_directory_uri(); ?>/_cdn/img/vt-mail.svg" alt="Vetor KBImob" />Cadastre-se
                            </p>
                            <form>
                                <!-- name -->
                                <div class="form-group">
                                    <input id="name" type="text" class="form-control" placeholder="Insira seu nome"
                                           size="35" maxlength="100" required />
                                </div>
                                <!-- mail -->
                                <div class="form-group">
                                    <input id="mail" type="email" class="form-control"
                                           placeholder="Insira seu melhor e-mail" size="35" maxlength="70" required />
                                </div>
                                <!-- phone -->
                                <div class="form-group">
                                    <input id="phone" type="tel" class="form-control"
                                           placeholder="Insira seu telefone com DDD..." size="35" maxlength="70"
                                           required />
                                </div>
                                <!-- creci -->
                                <div class="form-group">
                                    <input id="phone" type="text" class="form-control"
                                           placeholder="Insira o seu número de registro CRECI ou Estágio" size="35"
                                           maxlength="70" required />
                                </div>
                                <!-- message -->
                                <div class="form-group">
                                    <label for="message" class="d-none">Escreva sua mensagem...</label>
                                    <textarea id="message" class="form-control"
                                              placeholder="Escreva sua mensagem..." rows="4" required></textarea>
                                </div>
                                <!-- button action -->
                                <div class="button_form">
                                    <button type="submit" name="submit" value="submit" class="btn btn-color1">
                                        Enviar contato
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-sm-5">
                        <img src="<?php echo get_template_directory_uri(); ?>/_cdn/img/img-parceiro.jpg" alt="Imagem parceiro KBImob" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- partners -->
    <section id="main_partners">
        <div class="container">
            <!-- header -->
            <header class="main_partners_header">
                <h1>Conheça algumas Incorporadoras <span>Parceiras!</span></h1>
                <hr />
            </header>
            <!-- content -->
            <div class="main_partners_content">
                <!-- card -->
                <div class="main_partners_content_card"><img src="<?php echo get_template_directory_uri(); ?>/_cdn/img/img-cyrela.jpg" alt="Parceiros KBImob"
                                                             class="img-fluid"></div>
                <!-- card -->
                <div class="main_partners_content_card"><img src="<?php echo get_template_directory_uri(); ?>/_cdn/img/img-trisul.jpg" alt="Parceiros KBImob"
                                                             class="img-fluid"></div>
                <!-- card -->
                <div class="main_partners_content_card"><img src="<?php echo get_template_directory_uri(); ?>/_cdn/img/img-gamaro.png" alt="Parceiros KBImob"
                                                             class="img-fluid"></div>
                <!-- card -->
                <div class="main_partners_content_card"><img src="<?php echo get_template_directory_uri(); ?>/_cdn/img/img-vitacon.jpg" alt="Parceiros KBImob"
                                                             class="img-fluid"></div>
                <!-- card -->
                <div class="main_partners_content_card"><img src="<?php echo get_template_directory_uri(); ?>/_cdn/img/img-mitre.jpg" alt="Parceiros KBImob"
                                                             class="img-fluid"></div>
                <!-- card -->
                <div class="main_partners_content_card"><img src="<?php echo get_template_directory_uri(); ?>/_cdn/img/img-mdl.jpg" alt="Parceiros KBImob"
                                                             class="img-fluid"></div>
                <!-- card -->
                <div class="main_partners_content_card"><img src="<?php echo get_template_directory_uri(); ?>/_cdn/img/img-barbara.jpg" alt="Parceiros KBImob"
                                                             class="img-fluid"></div>
                <!-- card -->
                <div class="main_partners_content_card"><img src="<?php echo get_template_directory_uri(); ?>/_cdn/img/img-ideal.jpg" alt="Parceiros KBImob"
                                                             class="img-fluid"></div>
            </div>
        </div>
    </section>
    <!-- information -->
    <section id="main_information">
        <div class="container">
            <!-- header -->
            <header class="main_information_header">
                <h1>Fale conosco</h1>
                <hr />
            </header>
            <!-- content -->
            <div class="main_information_content">
                <div class="row">
                    <!-- e-mail -->
                    <div class="mt-5 col-lg-3 col-md-6">
                        <article class="main_information_content_article">
                            <!-- header -->
                            <header class="main_information_content_article_header">
                                <h2>
                                    <img src="<?php echo get_template_directory_uri(); ?>/_cdn/img/vt-mail.svg" alt="Vetor KBImob" />Envie um e-mail
                                </h2>
                            </header>
                            <!-- content -->
                            <div class="main_information_content_article_content">
                                <p>
                                    Nossos atendentes irão entrar em contato
                                    com você assim que possível.
                                </p>
                                <a href="mailto:contato@kbimob.com.br">contato@kbimob.com.br</a>
                            </div>
                        </article>
                    </div>
                    <!-- phone -->
                    <div class="mt-5 col-lg-3 col-md-6">
                        <article class="main_information_content_article">
                            <!-- header -->
                            <header class="main_information_content_article_header">
                                <h2>
                                    <img src="<?php echo get_template_directory_uri(); ?>/_cdn/img/vt-phone-2.svg" alt="Vetor KBImob" />Por telefone
                                </h2>
                            </header>
                            <!-- content -->
                            <div class="main_information_content_article_content">
                                <p>
                                    Estamos disponíveis nos números abaixo
                                    no horário comercial.
                                </p>
                                <a href="tel:1155944278">(11) 5594-4278</a>
                            </div>
                        </article>
                    </div>
                    <!-- whatsapp -->
                    <div class="mt-5 col-lg-3 col-md-6">
                        <article class="main_information_content_article">
                            <!-- header -->
                            <header class="main_information_content_article_header">
                                <h2>
                                    <img src="<?php echo get_template_directory_uri(); ?>/_cdn/img/vt-whatsapp-3.svg" alt="Vetor KBImob" />Por whatsapp
                                </h2>
                            </header>
                            <!-- content -->
                            <div class="main_information_content_article_content">
                                <p>
                                    Estamos disponíveis no número abaixo no
                                    horário comercial.
                                </p>
                                <a href="https://api.whatsapp.com/send?l=pt_BR&phone=5511963840832">(11)
                                    96384-0832</a>
                            </div>
                        </article>
                    </div>
                    <!-- social media -->
                    <div class="mt-5 col-lg-3 col-md-6">
                        <article class="main_information_content_article">
                            <!-- header -->
                            <header class="main_information_content_article_header">
                                <h2>
                                    <img src="<?php echo get_template_directory_uri(); ?>/_cdn/img/vt-media.svg" alt="Vetor KBImob" />Redes Sociais
                                </h2>
                            </header>
                            <!-- content -->
                            <div class="main_information_content_article_content">
                                <p>
                                    Fique por dentro do tudo o que a gente
                                    compartilha em nossas redes sociais!
                                </p>
                                <a href="https://www.facebook.com/kalila.carla" target="_blank"><img
                                        src="<?php echo get_template_directory_uri(); ?>/_cdn/img/vt-facebook.svg" alt="Vetor Facebook" /></a>

                                <a href="https://www.linkedin.com/in/kalila-carla-324b51147" target="_blank"><img
                                        src="<?php echo get_template_directory_uri(); ?>/_cdn/img/vt-linkedin.svg" alt="Vetor LinkedIn" /></a>

                                <a href="https://instagram.com/kalilacarla?igshid=1pr3ruvvjtpsx"
                                   target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/_cdn/img/vt-instagram.svg"
                                                     alt="Vetor Instagram" /></a>
                            </div>
                        </article>
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
