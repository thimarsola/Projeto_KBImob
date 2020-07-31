<?php get_header('error'); ?>

    <main id="main">
        <div class="container">
            <!-- error -->
            <div class="main_image">
                <img src="<?php echo get_template_directory_uri(); ?>/_cdn/img/vt-404.svg" class="img-fluid" alt="Página de erro">
            </div>
            <!-- content -->
            <div class="main_content">
                <p>A página que você está procurando não existe. Você pode ter digitado o endereço errado ou a página
                    pode ter sido removida.</p>
                <div class="main_content_button">
                    <a href="<?php echo get_home_url(); ?>" class="btn btn-color1">Voltar para o início</a>
                </div>
            </div>
        </div>
    </main>

<?php get_footer(); ?>
