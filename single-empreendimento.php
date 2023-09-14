<?php
/*
 * Template Name: Pagina de produto template
 * Description: Custom template for your page.
 */
get_template_part('custom-empreendimento-template');
get_header();

$diferenciais_internos = get_field('diferenciais_internos');
$diferenciais_externos = get_field('diferenciais_externos');

?>
<script
    src="<?php echo get_template_directory_uri(); ?>/simplelightbox-master/dist/simple-lightbox.legacy.min.js"></script>


<script src="<?php echo get_template_directory_uri(); ?>/simplelightbox-master/dist/simple-lightbox.min.js"></script>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const svg = document.getElementById("ring1");

        const pathLength = document.getElementById("ring1").getTotalLength();


        const ringPath = svg.querySelector("path");
        const percentage = 25
        const offset = ((100 - percentage) / 100) * pathLength;
        console.log("pathLength:", pathLength);
        console.log("ringPath:", ringPath);
        console.log("offset:", offset);
        ringPath.style.strokeDashoffset = 125;
    });


    var gallery = new SimpleLightbox('.gallery a', {
        sourceAttr: 'href',
        captions: true,
        close: true,
        nav: true,
        history: true,
    });
</script>
<style>
    #imagem_galeria_principal {
        width: 900px !important;
        height: 500px;
        object-fit: cover;
        /* Fit the image inside the container without stretching */
        object-position: center center;
        /* Center the image within the container */
    }

    .pai_galeria_seletor {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        margin-bottom: 50px;
    }

    .miniature-gallery {
        display: flex;
        /* overflow: auto; */
        justify-content: center;
        width: 100%;
        flex-wrap: wrap;
    }

    .miniature-gallery img {
        height: auto;
        /* Maintain the image's aspect ratio */
        margin: 1px;
        /* Add margin between images (adjust as needed) */
    }
</style>
<script
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDAKtEv7-awMlUc7ZWaVdmgjAWKlr615lI&callback=Function.prototype"></script>

<!-- Include Slick Carousel CSS -->
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />

<!-- Include Slick Carousel JS -->
<script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

<script type="text/javascript">
    $(document).ready(function () {
        $('.main-image').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: true, // Display navigation arrows
            prevArrow: '<button class="slick-prev" aria-label="Previous" type="button">Previous</button>',
            nextArrow: '<button class="slick-next" aria-label="Next" type="button">Next</button>',
        });

        // Find the main image element
        var $mainImage = $('.main-image img');

        // Handle click events on miniature images
        $('.miniature-gallery .miniature-image').on('click', function () {
            // Get the source of the clicked miniature image
            var newImageSrc = $(this).attr('alt');

            // Update the source of the main image
            $mainImage.attr('src', newImageSrc);
        });
    });
</script>

<link href="<?php echo get_template_directory_uri(); ?>/simplelightbox-master/dist/simple-lightbox.min.css"
    rel="stylesheet">

<section class="container-fluid p-0">
    <div id="empreendimento_capa">
        <div id="empreendimento_capa_texto">
            <div class="mb-3" id="lancamento_div">
                <p>
                    <?php echo get_field('status_empreendimento'); ?>
                </p>
            </div>

            <h1>
                <?php echo get_field('titulo_empreendimento'); ?>
            </h1>
        </div>
        <img src="<?php echo get_template_directory_uri(); ?>/src/images/Piscina_The Club_Final_1.png" alt="" />
    </div>


    <div class="d-flex justify-content-center flex-column align-items-center mb-5 mt-4">
        <div class="col-10 d-flex flex-row justify-content-between">
            <img class="col-6 object-fit-contain" src="<?php echo get_field('imagem_de_capa'); ?>" alt="" />
            <div id="empreendimento_texto" class="col-5">
                <h1>O Empreendimento</h1>
                <p>
                    <?php echo get_field('descricao_empreendimento'); ?>
                </p>
            </div>
        </div>
        <div class="d-flex mt-5 col-10" id="icones_info">
            <div>
                <div class="d-flex icones_info_text">
                    <img class="icones_margin" src="<?php echo get_template_directory_uri(); ?>/src/images/metragem.svg"
                        alt="" />
                    <h2>METRAGEM</h2>
                </div>
                <p class="desc_icones">
                    <?php echo get_field('medidas_do_local') ?>
                </p>
            </div>
            <div>
                <div class="d-flex icones_info_text">
                    <img class="icones_margin" src="<?php echo get_template_directory_uri(); ?>/src/images/quartos.svg"
                        alt="" />
                    <h2>QUARTOS</h2>
                </div>
                <p class="desc_icones">
                    <?php echo get_field('quartos') ?>
                </p>
            </div>
            <div>
                <div class="d-flex icones_info_text">
                    <img class="icones_margin" src="<?php echo get_template_directory_uri(); ?>/src/images/tipo.svg"
                        alt="" />
                    <h2>TIPO</h2>
                </div>
                <p class="desc_icones">
                    <?php echo get_field('tipo_de_construcao') ?>
                </p>
            </div>
        </div>
    </div>
    <div class="d-flex justify-content-center flex-column align-items-center mb-5 mt-4">
        <div class="pai_galeria_seletor ">
            <div class="carousel d-flex justify-content-center col-10">
                <div class="main-image">
                    <img id="imagem_galeria_principal" src="<?php echo get_field('imagem_de_capa'); ?>" alt="Image 1">
                </div>
            </div>
            <div class="miniature-gallery">
                <?php
                $gallery_images = get_field('imagens_empreendimento_galeria'); // Replace with your ACF field name
                
                if (!empty($gallery_images) && is_array($gallery_images)) {
                    echo '<div class="miniature-gallery">';

                    foreach ($gallery_images as $image) {
                        echo '<img src="' . esc_url($image['thumbnail_image_url']) . '" alt="' . esc_attr($image['full_image_url']) . '" class="miniature-image" />';
                    }

                    echo '</div>';
                }
                ?>


            </div>
        </div>

        <div id="diferencias" class="d-flex justify-content-center flex-column align-items-center mb-5 col-10">
            <div>
                <h1>Diferenciais</h1>
                <p>
                    Um lugar perfeito para famílias que querem viver em um ambiente
                    seguro, com áreas de lazer <br />
                    exclusivas e espaços pensados para o convívio.
                </p>
            </div>
            <div id="diferencias" class="d-flex justify-content-center flex-column align-items-center mb-5 col-10">
                <div class="d-flex flex-column mt-4 col-12">
                    <h2 id="diferenciais_titulo">Diferenciais internos</h2>
                    <div class="d-flex">
                        <?php foreach ($diferenciais_internos as $item): ?>
                            <div class="d-flex col-3 align-items-center">
                                <img src="<?php echo get_template_directory_uri(); ?>/src/images/icone_ok.svg" alt="" />
                                <p class="diferenciais_texto_opcoes">
                                    <?php echo $item; ?>
                                </p>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                <div class="d-flex flex-column mt-4 col-12">
                    <h2 id="diferenciais_titulo">Diferenciais Externos</h2>
                    <div class="d-flex">
                        <?php foreach ($diferenciais_externos as $item): ?>
                            <div class="d-flex col-3 align-items-center">
                                <img src="<?php echo get_template_directory_uri(); ?>/src/images/icone_ok.svg" alt="" />
                                <p class="diferenciais_texto_opcoes">
                                    <?php echo $item; ?>
                                </p>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>

        </div>
        <div id="diferencias" class="d-flex justify-content-center flex-column align-items-center mb-5 col-10">
            <div>
                <h1>Diário de Obra</h1>
                <p>
                    Acompanhe por aqui o percentual da obra desse empreendimento
                </p>
            </div>
            <div class="d-flex justify-content-between flex-row align-items-center mt-4 mb-5 col-10">
                <div>
                    <svg id="progress-ring" width="86" height="86" xmlns="http://www.w3.org/2000/svg">
                        <!-- Background Circle -->
                        <circle cx="43" cy="43" r="40" stroke="#ABABAB" stroke-width="7" fill="none" />

                        <!-- Filled Ring -->
                        <path d="M43 3.5
          a 39.5 39.5 0 0 1 0 79
          a 39.5 39.5 0 0 1 0 -79" fill="transparent" stroke="#28566E" stroke-width="7"
                            stroke-dasharray="<?php echo get_field('valor_de_porcentagem_do_projeto') * 2.51; ?>, 251"
                            stroke-dashoffset="0" id="ring1" />
                    </svg>
                    <p>
                        Projeto
                    </p>
                    <p>
                        <?php echo get_field('valor_de_porcentagem_do_projeto') ?>%
                    </p>
                </div>
                <div>
                    <svg id="progress-ring<?php echo $i; ?>" width="86" height="86" xmlns="http://www.w3.org/2000/svg">
                        <!-- Background Circle -->
                        <circle cx="43" cy="43" r="40" stroke="#ABABAB" stroke-width="7" fill="none" />

                        <!-- Filled Ring -->
                        <path d="M43 3.5
          a 39.5 39.5 0 0 1 0 79
          a 39.5 39.5 0 0 1 0 -79" fill="transparent" stroke="#28566E" stroke-width="7"
                            stroke-dasharray="<?php echo get_field('valor_de_porcentagem_da_fundacao') * 2.51; ?>, 251"
                            stroke-dashoffset="0" id="ring<?php echo $i; ?>" />
                    </svg>
                    <p>
                        Fundação
                    </p>
                    <p>
                        <?php echo get_field('valor_de_porcentagem_da_fundacao') ?>%
                    </p>

                </div>
                <div>
                    <svg id="progress-ring<?php echo $i; ?>" width="86" height="86" xmlns="http://www.w3.org/2000/svg">
                        <!-- Background Circle -->
                        <circle cx="43" cy="43" r="40" stroke="#ABABAB" stroke-width="7" fill="none" />

                        <!-- Filled Ring -->
                        <path d="M43 3.5
          a 39.5 39.5 0 0 1 0 79
          a 39.5 39.5 0 0 1 0 -79" fill="transparent" stroke="#28566E" stroke-width="7"
                            stroke-dasharray="<?php echo get_field('valor_de_porcentagem_da_estrutura') * 2.51; ?>, 251"
                            stroke-dashoffset="0" id="ring<?php echo $i; ?>" />
                    </svg>
                    <p>
                        Estrutura
                    </p>
                    <p>
                        <?php echo get_field('valor_de_porcentagem_da_estrutura') ?>%
                    </p>

                </div>
                <div>
                    <svg id="progress-ring<?php echo $i; ?>" width="86" height="86" xmlns="http://www.w3.org/2000/svg">
                        <!-- Background Circle -->
                        <circle cx="43" cy="43" r="40" stroke="#ABABAB" stroke-width="7" fill="none" />

                        <!-- Filled Ring -->
                        <path d="M43 3.5
          a 39.5 39.5 0 0 1 0 79
          a 39.5 39.5 0 0 1 0 -79" fill="transparent" stroke="#28566E" stroke-width="7"
                            stroke-dasharray="<?php echo get_field('valor_de_porcentagem_da_alvenaria') * 2.51; ?>, 251"
                            stroke-dashoffset="0" id="ring<?php echo $i; ?>" />
                    </svg>
                    <p>
                        Alvenaria
                    </p>
                    <p>
                        <?php echo get_field('valor_de_porcentagem_da_alvenaria') ?>%
                    </p>

                </div>
                <div>
                    <svg id="progress-ring<?php echo $i; ?>" width="86" height="86" xmlns="http://www.w3.org/2000/svg">
                        <!-- Background Circle -->
                        <circle cx="43" cy="43" r="40" stroke="#ABABAB" stroke-width="7" fill="none" />

                        <!-- Filled Ring -->
                        <path d="M43 3.5
          a 39.5 39.5 0 0 1 0 79
          a 39.5 39.5 0 0 1 0 -79" fill="transparent" stroke="#28566E" stroke-width="7"
                            stroke-dasharray="<?php echo get_field('valor_de_porcentagem_da_instalacoes') * 2.51; ?>, 251"
                            stroke-dashoffset="0" id="ring<?php echo $i; ?>" />
                    </svg>
                    <p>
                        Instalações
                    </p>
                    <p>
                        <?php echo get_field('valor_de_porcentagem_da_instalacoes') ?>%
                    </p>

                </div>
                <div>
                    <svg id="progress-ring<?php echo $i; ?>" width="86" height="86" xmlns="http://www.w3.org/2000/svg">
                        <!-- Background Circle -->
                        <circle cx="43" cy="43" r="40" stroke="#ABABAB" stroke-width="7" fill="none" />

                        <!-- Filled Ring -->
                        <path d="M43 3.5
          a 39.5 39.5 0 0 1 0 79
          a 39.5 39.5 0 0 1 0 -79" fill="transparent" stroke="#28566E" stroke-width="7"
                            stroke-dasharray="<?php echo get_field('valor_de_porcentagem_da_acabamento') * 2.51; ?>, 251"
                            stroke-dashoffset="0" id="ring<?php echo $i; ?>" />
                    </svg>
                    <p>
                        Acabamento
                    </p>
                    <p>
                        <?php echo get_field('valor_de_porcentagem_da_acabamento') ?>%
                    </p>

                </div>
                <div>
                    <svg id="progress-ring<?php echo $i; ?>" width="86" height="86" xmlns="http://www.w3.org/2000/svg">
                        <!-- Background Circle -->
                        <circle cx="43" cy="43" r="40" stroke="#ABABAB" stroke-width="7" fill="none" />

                        <!-- Filled Ring -->
                        <path d="M43 3.5
          a 39.5 39.5 0 0 1 0 79
          a 39.5 39.5 0 0 1 0 -79" fill="transparent" stroke="#28566E" stroke-width="7"
                            stroke-dasharray="<?php echo get_field('valor_de_porcentagem_do_paisagismo') * 2.51; ?>, 251"
                            stroke-dashoffset="0" id="ring1" />
                    </svg>
                    <p>
                        Paisagismo
                    </p>
                    <p>
                        <?php echo get_field('valor_de_porcentagem_do_paisagismo') ?>%
                    </p>

                </div>
            </div>
        </div>
        <div id="diferencias" class="d-flex justify-content-center flex-column align-items-center mb-5 col-10">
            <div>
                <h1>Localização</h1>
                <p>

                    Localizado na Rua Costábile Matarazzo, 500 - Vila Asem, Itapetininga. <br>
                    A poucos minutos do Centro e próximo à Rodovia Raposo Tavares, uma importante ligação a São Paulo
                    Capital.
                </p>
                <div class="col-12 d-flex justify-content-center align-items-center">
                    <?php $map_location = get_field('mapa_de_localizacao'); ?>
                    <?php if (!empty($map_location['lat']) && !empty($map_location['lng'])): ?>
                        <iframe
                            src="https://www.google.com/maps/embed/v1/place?key=AIzaSyDAKtEv7-awMlUc7ZWaVdmgjAWKlr615lI&q=<?php echo esc_attr("{$map_location['lat']},{$map_location['lng']}&zoom=16"); ?>"
                            width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""
                            loading="lazy"></iframe>
                    <?php else: ?>
                        <p>No map coordinates found.</p>
                    <?php endif; ?>
                </div>

            </div>
        </div>
        <div id="plantas" class="d-flex justify-content-center flex-column align-items-center mb-5 col-10">
            <div class="mb-3">
                <h1>Plantas</h1>
            </div>

            <div class="gallery d-flex flex-row justify-content-evenly col-12">

                <a href="<?php echo get_template_directory_uri(); ?>/src/images/plantas/planta1.png"
                    class="big plantas_img" rel="rel1">
                    <img src="<?php echo get_template_directory_uri(); ?>/src/images/plantas/planta1.png" alt=""
                        title="Image 1">
                </a>

                <a href="<?php echo get_template_directory_uri(); ?>/src/images/plantas/planta2.png"
                    class="big plantas_img" rel="rel1">
                    <img src="<?php echo get_template_directory_uri(); ?>/src/images/plantas/planta2.png" alt=""
                        title="Image 2">
                </a>

                <a href="<?php echo get_template_directory_uri(); ?>/src/images/plantas/planta3.png"
                    class="big plantas_img" rel="rel1">
                    <img src="<?php echo get_template_directory_uri(); ?>/src/images/plantas/planta3.png" alt=""
                        title="Image 3">
                </a>
            </div>
            <div class="gallery d-flex flex-row justify-content-evenly col-12 mt-3">
                <a href="<?php echo get_template_directory_uri(); ?>/src/images/plantas/planta4.png"
                    class="big plantas_img" rel="rel1">
                    <img src="<?php echo get_template_directory_uri(); ?>/src/images/plantas/planta4.png" alt=""
                        title="Image 4">
                </a>
                <a href="<?php echo get_template_directory_uri(); ?>/src/images/plantas/planta5.png"
                    class="big plantas_img" rel="rel1">
                    <img src="<?php echo get_template_directory_uri(); ?>/src/images/plantas/planta5.png" alt=""
                        title="Image 5">
                </a>
                <a href="<?php echo get_template_directory_uri(); ?>/src/images/plantas/planta6.png"
                    class="big plantas_img" rel="rel1">
                    <img src="<?php echo get_template_directory_uri(); ?>/src/images/plantas/planta6.png" alt=""
                        title="Image 6">
                </a>
            </div>
        </div>
        <div id="cadastro_empreendimento_footer" class="col-12">
            <div id="cadastre" class="col-7">
                <div id="title_and_p">
                    <h1>GOSTOU DESSE <br> EMPREENDIMENTO?</h1>
                    <p class="mt-1">Entre em contato</p>
                </div>
                <div class="input-group mb-3" id="inputs">
                    <div class="campos_pai">
                        <input type="text" class="form-control campos" placeholder="Nome Completo" aria-label="Default"
                            aria-describedby="inputGroup-sizing-default" />
                    </div>
                    <div class="campos_pai">
                        <input type="text" class="form-control campos" placeholder="Telefone" aria-label="Default"
                            aria-describedby="inputGroup-sizing-default" />
                    </div>
                    <div class="campos_pai">
                        <input type="text" class="form-control campos" placeholder="Digite seu melhor e-mail"
                            aria-label="Default" aria-describedby="inputGroup-sizing-default" />
                    </div>
                </div>
                <div class="campos_pai align-self-end">
                    <button type="button" class="btn btn-success cadastrar">
                        Cadastrar
                    </button>
                </div>
            </div>
        </div>
    </div>
    <?php get_footer(); ?>
</section>