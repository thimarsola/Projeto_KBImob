<!-- cta -->
<section id="main_cta">
    <div class="container">
        <div class="row">
            <!-- information -->
            <div class="col-lg-7 col-md-6">
                <!-- header -->
                <header class="main_cta_header">
                    <h1><?php the_title(); ?></h1>
                    <hr />
                </header>
                <!-- content -->
                <div class="main_cta_content">
                    <!-- price -->
                    <div class="main_cta_content_price">
                        <?php
                        $model = get_the_terms($post, 'modelo');
                        $modelName = join(', ', wp_list_pluck($model, 'name'));

                        if ($modelName == 'Venda') {
                            echo '<p>R$ ' . number_format(get_field('valor_do_imovel'), 2, ',', '.') . '</p>';
                        } else {
                            echo '<p>R$ ' . number_format(get_field('valor_do_imovel'), 2, ',', '.') . '/mês</p>';
                        }
                        ?>

                    </div>
                    <!-- code -->
                    <div class="main_cta_content_code">
                        <p><span>Código do imóvel:</span> <?php the_field('codigo_do_imovel'); ?></p>
                    </div>
                    <!-- place -->
                    <div class="main_cta_content_place">
                        <p>
                            <img src="<?php echo get_template_directory_uri(); ?>/_cdn/img/vt-place.svg" alt="Vetor lugar" /><?php the_field('localizacao_do_imovel'); ?>
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
                            <p><?php the_field('descricao_do_imovel'); ?></p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- form -->
            <div class="col-lg-5 col-md-6">
                <div id="form" class="main_cta_form">
                    <header class="main_cta_form_header">
                        <p>
                            <img src="<?php echo get_template_directory_uri(); ?>/_cdn/img/vt-mail.svg" alt="Vetor e-mail" />Fale conosco
                        </p>
                    </header>
                    <?php echo do_shortcode('[contact-form-7 id="84" title="Single Page"]'); ?>
                </div>
            </div>
        </div>
    </div>
    <!-- information -->
    <div class="main_cta_information">
        <div class="container">
            <!-- square meters -->
            <div class="main_cta_information_card">
                <img src="<?php echo get_template_directory_uri(); ?>/_cdn/img/vt-square.svg" alt="Vetor tamanho" />
                <div class="main_cta_information_card_content">
                    <p><?php the_field('metragem'); ?></p>
                    <p>
                        <small>m<sub>2</sub></small>
                    </p>
                </div>
            </div>
            <!-- bedroom -->
            <div class="main_cta_information_card">
                <img src="<?php echo get_template_directory_uri(); ?>/_cdn/img/vt-bedroom.svg" alt="Vetor dormitório" />
                <div class="main_cta_information_card_content">
                    <p><?php the_field('dormitorio'); ?></p>
                    <p><small>Dormitórios</small></p>
                </div>
            </div>
            <!-- suite -->
            <div class="main_cta_information_card">
                <img src="<?php echo get_template_directory_uri(); ?>/_cdn/img/vt-bathroom.svg" alt="Vetor banheiro" />
                <div class="main_cta_information_card_content">
                    <p><?php the_field('suite'); ?></p>
                    <p><small>Suíte</small></p>
                </div>
            </div>
            <!-- bathroom -->
            <div class="main_cta_information_card">
                <img src="<?php echo get_template_directory_uri(); ?>/_cdn/img/vt-bathroom.svg" alt="Vetor banheiro" />
                <div class="main_cta_information_card_content">
                    <p><?php the_field('banheiro'); ?></p>
                    <p><small>Banheiro</small></p>
                </div>
            </div>
            <!-- garage -->
            <div class="main_cta_information_card">
                <img src="<?php echo get_template_directory_uri(); ?>/_cdn/img/vt-garage-color.svg" alt="Vetor banheiro" />
                <div class="main_cta_information_card_content">
                    <p><?php the_field('garagem'); ?></p>
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
            <?php
            $images = get_field('fotos');
            if ($images):
                ?>
                <div class="main_photos_content_grid">

                    <?php foreach ($images as $image): ?>

                        <!-- image -->
                        <div class="main_photos_content_grid_image">
                            <a href="<?= $image; ?>" data-lightbox="gallery">
                                <img src="<?= $image; ?>" alt="Imagens Imobiliária KBImob"
                                     class="img-fluid" />
                            </a>
                        </div>

                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>
<!-- leisure and service -->
<?php
$leisure = get_field('lazer_e_servicos');
if ($leisure != null):
    ?>

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
                <?php
                $listLeisure = explode(",", get_field('lazer_e_servicos'));
                if ($listLeisure):
                    ?>
                    <ul>
                        <?php foreach ($listLeisure as $keyLeisure): ?>
                            <li><?= $keyLeisure; ?></li>
                        <?php endforeach; ?>
                    </ul>
                <?php endif; ?>
            </div>
        </div>
    </section>
<?php endif; ?>

<!-- differentials -->
<?php
$differentials = get_field('diferenciais');
if ($differentials != null):
    ?>
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
                <?php
                $listDifferentials = explode(",", get_field('diferenciais'));
                if ($listDifferentials):
                    ?>
                    <ul>
                        <?php foreach ($listDifferentials as $keyDifferentials): ?>
                            <li><?= $keyDifferentials; ?></li>
                        <?php endforeach; ?>
                    </ul>
                <?php endif; ?>
            </div>
        </div>
    </section>
<?php endif; ?>

<!-- architectural plan -->
<?php
$architecturalPlan = get_field('plantas');
if ($architecturalPlan != null):
    ?>
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
                    <?php
                    if ($architecturalPlan):
                        ?>
                        <?php foreach ($architecturalPlan as $architecturalPlan): ?>

                            <!-- image -->
                            <div class="main_architecturalPlan_content_grid_image">
                                <a href="<?= $architecturalPlan; ?>" data-lightbox="architecturalPlan">
                                    <img src="<?= $architecturalPlan; ?>" alt="Imagens Imobiliária KBImob"
                                         class="img-fluid" />
                                </a>
                            </div>

                        <?php endforeach; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>

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
            <?php
            $location = get_field('localizacao');
            if ($location):
                ?>
                <?php the_field('localizacao'); ?>
            <?php endif; ?>
        </div>
    </div>
</section>