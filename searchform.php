<?php
if (is_home()):
    ?>
    <form role = "search" method = "get" action = "<?= esc_url(home_url('/')); ?>">
        <input type = "hidden" name = "s" value="<?= get_search_query(); ?>"/>
        <input type = "hidden" value = "imovel" name = "post_type" id = "post_type" />
        <div class = "form-row">
            <!--Escolha-->
            <div class = "form-group col-md-3">
                <label for = "inputEscolha">Comprar ou Alugar?</label>

                <?php
                $modelos = get_terms(
                        array(
                            'taxonomy' => 'modelo',
                            'hide_empty' => false,
                        )
                );
                ?>
                <select name="modelo" id = "inputEscolha" class = "form-control">
                    <option value="" selected>Escolha...</option>
                    <?php
                    if (!empty($modelos) && is_array($modelos)) {
                        // Run a loop and print them all
                        foreach ($modelos as $modelo) {
                            echo "<option value='{$modelo->name}'>" . $modelo->name . "</option>";
                        }
                    }
                    ?>
                </select>
            </div>
            <!--Status-->
            <div class = "form-group col-md-3">
                <label for = "inputStatus">Status</label>

                <?php
                $status = get_terms(
                        array(
                            'taxonomy' => 'status',
                            'hide_empty' => false,
                        )
                );
                ?>
                <select name="status" id = "inputStatus" class = "form-control">
                    <option value="" selected>Escolha...</option>
                    <?php
                    if (!empty($status) && is_array($status)) {
                        // Run a loop and print them all
                        foreach ($status as $statu) {
                            echo "<option value='{$statu->name}'>" . $statu->name . "</option>";
                        }
                    }
                    ?>
                </select>

            </div>
            <!--Tipo-->
            <div class = "form-group col-md-3">
                <label for = "inputTipo">Qual o tipo de imóvel?</label>

                <?php
                $tipos = get_terms(
                        array(
                            'taxonomy' => 'tipo',
                            'hide_empty' => false,
                        )
                );
                ?>
                <select name="tipo" id = "inputTipo" class = "form-control">
                    <option value="" selected>Escolha...</option>
                    <?php
                    if (!empty($tipos) && is_array($tipos)) {
                        // Run a loop and print them all
                        foreach ($tipos as $tipo) {
                            echo "<option value='{$tipo->name}'>" . $tipo->name . "</option>";
                        }
                    }
                    ?>
                </select>

            </div>
            <!--Localização-->
            <div class = "form-group col-md-3">
                <label for = "inputLocalizacao">Qual a localização?</label>

                <?php
                $regioes = get_terms(
                        array(
                            'taxonomy' => 'regiao',
                            'hide_empty' => false,
                        )
                );
                ?>
                <select name="regiao" id = "inputLocalizacao" class = "form-control">
                    <option value="" selected>Escolha...</option>
                    <?php
                    if (!empty($regioes) && is_array($regioes)) {
                        // Run a loop and print them all
                        foreach ($regioes as $regiao) {
                            echo "<option value='{$regiao->name}'>" . $regiao->name . "</option>";
                        }
                    }
                    ?>
                </select>
            </div>
        </div>
        <div class = "main_search_button">
            <button type = "submit" class = "btn btn-color1">
                <img src = "<?php echo get_template_directory_uri(); ?>/_cdn/img/vt-search.svg" alt = "Vetor Pesquisa">Pesquisar
            </button>
        </div>
    </form>

<?php else: ?>

    <form role = "search" method = "get" action = "<?= esc_url(home_url('/')); ?>">
        <input type = "hidden" name = "s" value="<?= get_search_query(); ?>"/>
        <input type = "hidden" value = "imovel" name = "post_type" id = "post_type" />
        <!--Escolha-->
        <div class = "form-group">
            <label for = "inputEscolha">Comprar ou Alugar?</label>

            <?php
            $modelos = get_terms(
                    array(
                        'taxonomy' => 'modelo',
                        'hide_empty' => false,
                    )
            );
            ?>
            <select name="modelo" id = "inputEscolha" class = "form-control">
                <option value="" selected>Escolha...</option>
                <?php
                if (!empty($modelos) && is_array($modelos)) {
                    // Run a loop and print them all
                    foreach ($modelos as $modelo) {
                        echo "<option value='{$modelo->name}'>" . $modelo->name . "</option>";
                    }
                }
                ?>
            </select>
        </div>
        <!--Status-->
        <div class = "form-group">
            <label for = "inputStatus">Status</label>

            <?php
            $status = get_terms(
                    array(
                        'taxonomy' => 'status',
                        'hide_empty' => false,
                    )
            );
            ?>
            <select name="status" id = "inputStatus" class = "form-control">
                <option value="" selected>Escolha...</option>
                <?php
                if (!empty($status) && is_array($status)) {
                    // Run a loop and print them all
                    foreach ($status as $statu) {
                        echo "<option value='{$statu->name}'>" . $statu->name . "</option>";
                    }
                }
                ?>
            </select>

        </div>
        <!--Tipo-->
        <div class = "form-group">
            <label for = "inputTipo">Qual o tipo de imóvel?</label>

            <?php
            $tipos = get_terms(
                    array(
                        'taxonomy' => 'tipo',
                        'hide_empty' => false,
                    )
            );
            ?>
            <select name="tipo" id = "inputTipo" class = "form-control">
                <option value="" selected>Escolha...</option>
                <?php
                if (!empty($tipos) && is_array($tipos)) {
                    // Run a loop and print them all
                    foreach ($tipos as $tipo) {
                        echo "<option value='{$tipo->name}'>" . $tipo->name . "</option>";
                    }
                }
                ?>
            </select>

        </div>
        <!--Localização-->
        <div class = "form-group">
            <label for = "inputLocalizacao">Qual a localização?</label>

            <?php
            $regioes = get_terms(
                    array(
                        'taxonomy' => 'regiao',
                        'hide_empty' => false,
                    )
            );
            ?>
            <select name="regiao" id = "inputLocalizacao" class = "form-control">
                <option value="" selected>Escolha...</option>
                <?php
                if (!empty($regioes) && is_array($regioes)) {
                    // Run a loop and print them all
                    foreach ($regioes as $regiao) {
                        echo "<option value='{$regiao->name}'>" . $regiao->name . "</option>";
                    }
                }
                ?>
            </select>
        </div>
        <!--dormitorios-->
        <div class="form-group">
            <label for="inputDormitorio">Dormitórios</label>
            <select name="dormitorio" id="inputDormitorio" class = "form-control">
                <option value="" selected>Escolha...</option>
                <?php
                for ($i = 1; $i <= 10; $i++) {
                    echo "<option value='{$i}'>" . $i . "</option>";
                }
                ?>
            </select>
        </div>
        <!--suites-->
        <div class="form-group">
            <label for="inputSuite">Suítes</label>
            <select name="suite" id="inputSuite" class = "form-control">
                <option value="" selected>Escolha...</option>
                <?php
                for ($i = 1; $i <= 10; $i++) {
                    echo "<option value='{$i}'>" . $i . "</option>";
                }
                ?>
            </select>
        </div>
        <!--banheiro-->
        <div class="form-group">
            <label for="inputBanheiro">Banheiros</label>
            <select name="banheiro" id="inputBanheiro" class = "form-control">
                <option value="" selected>Escolha...</option>
                <?php
                for ($i = 1; $i <= 10; $i++) {
                    echo "<option value='{$i}'>" . $i . "</option>";
                }
                ?>
            </select>
        </div>
        <!--garagem-->
        <div class="form-group">
            <label for="inputGaragem">Garagem</label>
            <select name="garagem" id="inputGaragem" class = "form-control">
                <option value="" selected>Escolha...</option>
                <?php
                for ($i = 1; $i <= 10; $i++) {
                    echo "<option value='{$i}'>" . $i . "</option>";
                }
                ?>
            </select>
        </div>

        <div class = "formButton">
            <button type = "submit" class = "btn btn-color1">
                <img src = "<?php echo get_template_directory_uri(); ?>/_cdn/img/vt-search.svg" alt = "Vetor Pesquisa">Pesquisar
            </button>
        </div>
    </form>

<?php endif; ?>