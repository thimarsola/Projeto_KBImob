<?php get_header(); ?>

    <!--MAIN-->
    <main class="main">
        <!-- home -->
        <div id="main_home"></div>
        <!-- cta -->
        <section id="main_cta">
            <div class="container">
                <div class="row">
                    <!-- information -->
                    <div class="col-lg-7 col-md-6">
                        <!-- header -->
                        <header class="main_cta_header">
                            <h1>Apartamento com 3 quartos no Brooklyn</h1>
                            <hr />
                        </header>
                        <!-- content -->
                        <div class="main_cta_content">
                            <!-- price -->
                            <div class="main_cta_content_price">
                                <p>R$350.000,00</p>
                            </div>
                            <!-- code -->
                            <div class="main_cta_content_code">
                                <p><span>Código do imóvel:</span> IM001</p>
                            </div>
                            <!-- place -->
                            <div class="main_cta_content_place">
                                <p>
                                    <img src="_cdn/img/vt-place.svg" alt="Vetor lugar" />Morumbi, São Paulo
                                </p>
                            </div>
                            <!-- description -->
                            <div class="main_cta_content_description">
                                <!-- header -->
                                <div class="main_cta_content_description_header">
                                    <p><strong>Descrição:</strong></p>
                                </div>
                                <!-- content -->
                                <div class="main_cta_content_description_content">
                                    <p>
                                        Lorem ipsum dolor sit amet,
                                        consectetur adipiscing elit.
                                        Maecenas tristique mauris et
                                        fermentum condimentum. Integer
                                        imperdiet eget tortor ac lacinia.
                                        Quisque bibendum sem a ligula
                                        venenatis malesuada. Ut ut augue
                                        ante.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- form -->
                    <div class="col-lg-5 col-md-6">
                        <div id="form" class="main_cta_form">
                            <header class="main_cta_form_header">
                                <p>
                                    <img src="_cdn/img/vt-mail.svg" alt="Vetor e-mail" />Fale conosco
                                </p>
                            </header>
                            <form action="#">
                                <!-- code -->
                                <div class="form-group">
                                    <input id="code" type="text" class="form-control" value="IM001" size="35"
                                        maxlength="100" disabled />
                                </div>
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
                                <!-- contact -->
                                <label for="checkForm">Como deseja ser contatado?</label>
                                <div id="checkForm" class="form-group">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1"
                                            value="Ligação" />
                                        <label class="form-check-label" for="inlineCheckbox1">Ligação</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2"
                                            value="WhatsApp" />
                                        <label class="form-check-label" for="inlineCheckbox2">WhatsApp</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox3"
                                            value="E-mail" />
                                        <label class="form-check-label" for="inlineCheckbox3">E-mail</label>
                                    </div>
                                </div>
                                <!-- message -->
                                <div class="form-group">
                                    <label for="message" class="d-none">Escreva sua mensagem...</label>
                                    <textarea id="message" class="form-control" placeholder="Escreva sua mensagem..."
                                        rows="4" required></textarea>
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
                </div>
            </div>
            <!-- information -->
            <div class="main_cta_information">
                <div class="container">
                    <!-- square meters -->
                    <div class="main_cta_information_card">
                        <img src="_cdn/img/vt-square.svg" alt="Vetor tamanho" />
                        <div class="main_cta_information_card_content">
                            <p>126</p>
                            <p>
                                <small>m<sub>2</sub></small>
                            </p>
                        </div>
                    </div>
                    <!-- bedroom -->
                    <div class="main_cta_information_card">
                        <img src="_cdn/img/vt-bedroom.svg" alt="Vetor dormitório" />
                        <div class="main_cta_information_card_content">
                            <p>3</p>
                            <p><small>Dormitórios</small></p>
                        </div>
                    </div>
                    <!-- suite -->
                    <div class="main_cta_information_card">
                        <img src="_cdn/img/vt-bathroom.svg" alt="Vetor banheiro" />
                        <div class="main_cta_information_card_content">
                            <p>1</p>
                            <p><small>Suíte</small></p>
                        </div>
                    </div>
                    <!-- bathroom -->
                    <div class="main_cta_information_card">
                        <img src="_cdn/img/vt-bathroom.svg" alt="Vetor banheiro" />
                        <div class="main_cta_information_card_content">
                            <p>1</p>
                            <p><small>Banheiro</small></p>
                        </div>
                    </div>
                    <!-- garage -->
                    <div class="main_cta_information_card">
                        <img src="_cdn/img/vt-garage-color.svg" alt="Vetor banheiro" />
                        <div class="main_cta_information_card_content">
                            <p>1</p>
                            <p><small>Garagem</small></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- photos -->
        <section id="main_photos">
            <div class="container">
                <!-- header -->
                <header class="main_photos_header">
                    <h1>Fotos</h1>
                    <hr />
                    <p>Veja abaixo as fotos deste incrível imóvel!</p>
                </header>
                <!-- content -->
                <div class="main_photos_content">
                    <!-- image -->
                    <div class="main_photos_content_grid">
                        <!-- image -->
                        <div class="main_photos_content_grid_image">
                            <a href="https://picsum.photos/id/1/200/300" data-lightbox="gallery">
                                <img src="https://picsum.photos/id/1/200/300" alt="Espaço Vital Pets"
                                    class="img-fluid" />
                            </a>
                        </div>
                        <!-- image -->
                        <div class="main_photos_content_grid_image">
                            <a href="https://picsum.photos/id/1/200/300" data-lightbox="gallery">
                                <img src="https://picsum.photos/id/1/200/300" alt="Espaço Vital Pets"
                                    class="img-fluid" />
                            </a>
                        </div>
                        <!-- image -->
                        <div class="main_photos_content_grid_image">
                            <a href="https://picsum.photos/id/1/200/300" data-lightbox="gallery">
                                <img src="https://picsum.photos/id/1/200/300" alt="Espaço Vital Pets"
                                    class="img-fluid" />
                            </a>
                        </div>
                        <!-- image -->
                        <div class="main_photos_content_grid_image">
                            <a href="https://picsum.photos/id/1/200/300" data-lightbox="gallery">
                                <img src="https://picsum.photos/id/1/200/300" alt="Espaço Vital Pets"
                                    class="img-fluid" />
                            </a>
                        </div>
                        <!-- image -->
                        <div class="main_photos_content_grid_image">
                            <a href="https://picsum.photos/id/1/200/300" data-lightbox="gallery">
                                <img src="https://picsum.photos/id/1/200/300" alt="Espaço Vital Pets"
                                    class="img-fluid" />
                            </a>
                        </div>
                        <!-- image -->
                        <div class="main_photos_content_grid_image">
                            <a href="https://picsum.photos/id/1/200/300" data-lightbox="gallery">
                                <img src="https://picsum.photos/id/1/200/300" alt="Espaço Vital Pets"
                                    class="img-fluid" />
                            </a>
                        </div>
                        <!-- image -->
                        <div class="main_photos_content_grid_image">
                            <a href="https://picsum.photos/id/1/200/300" data-lightbox="gallery">
                                <img src="https://picsum.photos/id/1/200/300" alt="Espaço Vital Pets"
                                    class="img-fluid" />
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- leisure and service -->
        <section id="main_leisure">
            <div class="container">
                <!-- header -->
                <header class="main_leisure_header">
                    <h1>Lazer & Serviços</h1>
                    <hr />
                    <p>Veja abaixo os grandes diferenciais deste imóvel</p>
                </header>
                <!-- content -->
                <div class="main_leisure_content">
                    <ul>
                        <li>Bike Station</li>
                        <li>Fechadura eletrônica</li>
                        <li>Fitness</li>
                        <li>Co-working</li>
                        <li>Sala Delivery</li>
                        <li>Laundry</li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- differentials -->
        <section id="main_differentials">
            <div class="container">
                <!-- header -->
                <header class="main_differentials_header">
                    <h1>Diferenciais</h1>
                    <hr />
                    <p>Veja abaixo os grandes diferenciais deste imóvel</p>
                </header>
                <!-- content -->
                <div class="main_differentials_content">
                    <ul>
                        <li>Bike Station</li>
                        <li>Fechadura eletrônica</li>
                        <li>Fitness</li>
                        <li>Co-working</li>
                        <li>Sala Delivery</li>
                        <li>Laundry</li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- architectural plan -->
        <section id="main_architecturalPlan">
            <div class="container">
                <!-- header -->
                <header class="main_architecturalPlan_header">
                    <h1>Plantas</h1>
                    <hr />
                </header>
                <!-- content -->
                <div class="main_architecturalPlan_content">
                    <div class="main_architecturalPlan_content_grid">
                        <!-- architectural plan -->
                        <div class="main_architecturalPlan_content_grid_image">
                            <img src="_cdn/img/img-example-plant.jpg" alt="Planta Arquitetônica - KBImob" />
                        </div>
                        <!-- architectural plan -->
                        <div class="main_architecturalPlan_content_grid_image">
                            <img src="_cdn/img/img-example-plant.jpg" alt="Planta Arquitetônica - KBImob" />
                        </div>
                        <!-- architectural plan -->
                        <div class="main_architecturalPlan_content_grid_image">
                            <img src="_cdn/img/img-example-plant.jpg" alt="Planta Arquitetônica - KBImob" />
                        </div>
                        <!-- architectural plan -->
                        <div class="main_architecturalPlan_content_grid_image">
                            <img src="_cdn/img/img-example-plant.jpg" alt="Planta Arquitetônica - KBImob" />
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- location -->
        <section id="main_location">
            <div class="container">
                <!-- header -->
                <header class="main_location_header">
                    <h1>Localização</h1>
                    <hr />
                </header>
                <!-- content -->
                <div class="main_location_content">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d913.8592611508396!2d-46.693974770822884!3d-23.624514499040703!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce514f5fd2db6b%3A0x36fa9f52846ee49a!2sO%20Parque%20-%20Naturalmente%20Incompar%C3%A1vel!5e0!3m2!1spt-BR!2sbr!4v1571455779019!5m2!1spt-BR!2sbr"
                        allowfullscreen=""></iframe>
                </div>
            </div>
        </section>
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
                                            src="_cdn/img/vt-facebook.svg" alt="Vetor Facebook" /></a>

                                    <a href="https://www.linkedin.com/in/kalila-carla-324b51147" target="_blank"><img
                                            src="_cdn/img/vt-linkedin.svg" alt="Vetor LinkedIn" /></a>

                                    <a href="https://instagram.com/kalilacarla?igshid=1pr3ruvvjtpsx"
                                        target="_blank"><img src="_cdn/img/vt-instagram.svg"
                                            alt="Vetor Instagram" /></a>
                                    <a href="https://api.whatsapp.com/send?l=pt_BR&phone=5511963840832"
                                        target="_blank"><img src="_cdn/img/vt-whatsapp-2.svg"
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
