<footer class="row no-gutters">
    <div id="inside_footer">
        <div class="col-2">
            <img id="logo_header" src="<?php echo get_template_directory_uri(); ?>/src/images/Logo_footer.svg" />
        </div>
        <div class="col-3">
            <ul id="lista_footer">
                <li><a href="<?php echo home_url(); ?>">Home</a></li>
                <li>
                    <a href="<?php echo site_url('/empreendimentos'); ?>">Empreendimentos</a>
                    <ul id="footer_empreendimentos">
                        <li><a href="#">The Club</a></li>
                        <li><a href="#">Vila Leme I</a></li>
                        <li><a href="#">Vila Leme II</a></li>
                    </ul>
                </li>
                <li><a href="<?php echo site_url('/sobre'); ?>">Sobre</a></li>
                <li><a href="<?php echo site_url('/contato'); ?>">Contato</a></li>
            </ul>
        </div>
        <div class="col-2">
            <div id="icons_footer">
                <img src="<?php echo get_template_directory_uri(); ?>/src/images/Insta_footer.svg" alt="instagram" />
                <img id="facebook" src="<?php echo get_template_directory_uri(); ?>/src/images/face.svg"
                    alt="facebook" />
            </div>
            <div id="info_footer">
                <p>contato@jrcalegari.com</p>
                <p>+55 (15) 91234-5678</p>
            </div>
        </div>
    </div>
    <div class="row no-gutters d-flex justify-content-center">
        <p id="info_last">
            2023 © JR Caleragi Empreendimantos. Todos os direitos reservados.
            Produzido por Maisvgv®
        </p>
    </div>
</footer>
<?php wp_footer(); ?>
<script>

</script>