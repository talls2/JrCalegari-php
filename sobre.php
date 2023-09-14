<?php
/*
 * Template Name: Sobre pagina template
 * Description: Pagina de informações "sobre".
 */
get_header();
?>
<section class="container-fluid p-0">
    <div class="mb-4">
        <img id="header_foto" src="<?php echo get_template_directory_uri(); ?>/src/images/sobre_foto_topo.png" alt="" />
    </div>
    <div class="d-flex flex-row justify-content-center align-content-center flex-wrap sobre_texto_1">
        <div class="col-10 d-flex justify-content-center align-content-center flex-wrap">
            <h1 class="mt-4 mb-5">
                Construindo em Itapetininga,<br />
                10 anos de excelência.
            </h1>
            <p class="mt-5">
                Há uma década, a JR Calegari tem tido o privilégio de fazer parte da história de Itapetininga,
                deixando sua marca por meio de empreendimentos que transformam sonhos em realidade. A empresa
                começou com imóveis pequenos construindo e vendendo casas por toda a cidade, até que em 2013 lançou
                seu primeiro empreendimento imobiliário: o Condomínio São Bento.
            </p>
            <p class="mb-5">
                Como uma empresa comprometida com a excelência e a qualidade, nos dedicamos a criar projetos únicos
                que refletem nosso compromisso em satisfazer nossos clientes.
            </p>
        </div>
    </div>
    <div class="col-12 d-flex justify-content-around align-content-center flex-wrap">
        <div class="col-11 d-flex justify-content-around mb-5">
            <div class="images_4_father">
                <img class="images_4" src="<?php echo get_template_directory_uri(); ?>/src/images/div_sobre_1.png"
                    alt="" />
            </div>
            <div class="images_4_father">
                <img class="images_4" src="<?php echo get_template_directory_uri(); ?>/src/images/div_sobre_2.png"
                    alt="" />
            </div>
            <div class="images_4_father">
                <img class="images_4" src="<?php echo get_template_directory_uri(); ?>/src/images/div_sobre_3.png"
                    alt="" />
            </div>
            <div class="images_4_father">
                <img class="images_4" src="<?php echo get_template_directory_uri(); ?>/src/images/div_sobre_4.png"
                    alt="" />
            </div>
        </div>
    </div>
    <div class="d-flex flex-column justify-content-center align-content-center flex-wrap sobre_texto_1">
        <div class="col-10 d-flex justify-content-center align-content-center flex-wrap">
            <p id="texto_acima_divisa-foto" class="mt-1">
                Ao longo desses 10 anos, construímos uma sólida reputação fundamentada em valores essenciais, como
                transparência, inovação e dedicação. Cada empreendimento desenvolvido pela JR Calegari é resultado
                do trabalho de uma equipe experiente e apaixonada, que se esforça para entregar não apenas imóveis
                de alta qualidade, mas também soluções que atendam às necessidades e superem as expectativas dos
                clientes.
            </p>
        </div>
    </div>
    <div>
        <img id="divisa_foto" src="<?php echo get_template_directory_uri(); ?>/src/images/WES_3312.png" alt="" />
    </div>
    <div class="d-flex flex-column justify-content-center align-content-center flex-wrap sobre_texto_1">
        <div class="col-10 d-flex justify-content-center align-content-center flex-wrap">
            <p class="mt-5 mb-5">
                Itapetininga é nossa casa e o principal cenário de atuação. Conhecemos cada detalhe dessa cidade
                encantadora e temos orgulho de contribuir para seu desenvolvimento, criando espaços que valorizam o
                ambiente urbano e melhoram a qualidade de vida de seus habitantes. Nosso compromisso vai além da
                construção de edifícios; nosso objetivo é criar comunidades vibrantes, onde as pessoas possam viver,
                trabalhar e desfrutar com conforto e segurança.
            </p>
            <p class="mb-5">
                JR Calegari: 10 anos de compromisso, qualidade e satisfação em Itapetininga. Estamos ansiosos para
                continuar sendo parte do crescimento desta cidade, proporcionando experiências excepcionais aos
                nossos clientes e ajudando a construir um futuro ainda mais promissor.
            </p>
            <div>
                <img id="sobre_footer_image" class="mb-5"
                    src="<?php echo get_template_directory_uri(); ?>/src/images/WES_3277.png" alt="" />
            </div>
        </div>
    </div>

    <?php
    get_footer();
    ?>
</section>