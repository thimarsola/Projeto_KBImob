<article class="main_cardAds">
    <!-- header -->
    <header class="main_cardAds_header">
        <img src="<?php echo get_template_directory_uri(); ?>/_cdn/img/img-example.jpg" class="img-fluid"
             alt="Imagem Anúncio KBImob" />
        <div class="main_cardAds_header_container">
            <h2>
                <strong><?php the_title(); ?></strong>
            </h2>
            <hr />
        </div>
    </header>
    <!-- content -->
    <div class="main_cardAds_content">
        <?php
        $types = get_terms('tipo');

        foreach ($types as $type) {

        }
        ?>
        <p><?php echo $type->name; ?></p>
        <p><small><?php the_field('localizacao_do_imovel'); ?></small></p>
        <br />
        <?php
        $models = get_terms('modelo');

        foreach ($models as $model) {

        }
        if ($model->name == 'Venda') {
            echo '<p class="price">R$ ' . number_format(get_field('valor_do_imovel'), 2, ',', '.') . '</p>';
        } else {
            echo '<p class="price">R$ ' . number_format(get_field('valor_do_imovel'), 2, ',', '.') . '/mês</p>';
        }
        ?>
        <a href="<?php echo get_permalink(); ?>" class="btn btn-color1 btn-block" target="_blank">Ver Imóvel</a>
    </div>
    <div class="main_cardAds_content_data">
        <!-- dormitory -->
        <div class="main_cardAds_content_data_content">
            <img src="<?php echo get_template_directory_uri(); ?>/_cdn/img/vt-dormitory.svg" alt="Vetor Dormitório" />
            <p><?php the_field('dormitorio'); ?></p>
        </div>
        <!-- garage -->
        <div class="main_cardAds_content_data_content">
            <img src="<?php echo get_template_directory_uri(); ?>/_cdn/img/vt-garage.svg" alt="Vetor Garagem" />
            <p><?php the_field('garagem'); ?></p>
        </div>
        <!-- size -->
        <div class="main_cardAds_content_data_content">
            <img src="<?php echo get_template_directory_uri(); ?>/_cdn/img/vt-size.svg" alt="Vetor Metragem" />
            <p><?php the_field('metragem'); ?></p>
        </div>
    </div>
</article>