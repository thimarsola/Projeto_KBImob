<footer id="footer">
    <div class="footer_copyright">
        <div class="container">
            <hr>
            <div class="footer_copyright_content">
                <img src="<?php echo get_template_directory_uri(); ?>/_cdn/img/logo-footer.svg" alt="Logo">
                <p>Todos os direitos reservados - CRECI 34072-J</p>
            </div>
        </div>
    </div>
    <!-- developer -->
    <div class="footer_developer">
        <div class="container">
            <div class="footer_developer_container">
                <!-- goognet -->
                <div class="footer_developer_goognet">
                    <p>Desenvolvido por: <strong><a href="http://www.goognet.com.br"
                                                    title="Desenvolvido por Goognet Solução Digital" target="_blank">Goognet Solução
                                Digital</a></strong></p>
                </div>
                <!-- W3C validator -->
                <div class="footer_developer_validator">
                    <p>
                        <?php
                        $protocols = array('http://', 'http://www.', 'www.');

                        if (is_home()) {
                            $urlBase = str_replace($protocols, '', get_bloginfo('wpurl'));
                        } else {
                            $urlBase = str_replace($protocols, '', get_bloginfo('wpurl')) . '/' . (get_page_uri());
                        }
                        ?>
                        <a href="https://validator.w3.org/nu/?showsource=yes&showoutline=yes&showimagereport=yes&doc=https%3A%2F%2F<?= $urlBase ?>%2F"
                           target="_blank" title="Tecnologia W3C"><img src="<?php echo get_template_directory_uri(); ?>/_cdn/img/vt-html.svg"
                                                                    alt="Vetor W3C Validator">W3C Validator</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
