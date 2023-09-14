<?php
/**
 * Template Name: Empreendimentos
 * Description: Pagina para listamento de todos empreendimentos adicionados
 *
 * @package WordPress
 * @subpackage JR_Calegari
 * @since JR Calegari 1.0
 */

get_header();
?>

<section class="container-fluid p-0">
    <div id="empreendimentos_empreendimentos" class="row no-gutters d-flex justify-content-center">
        <div class="col-12 d-flex justify-content-center mb-5 mt-5">
            <h1>
                Nossos Empreendimentos
            </h1>
        </div>
        <?php
        $args = array(
            'post_type' => 'empreendimento',
        );
        $query = new WP_Query($args);
        if ($query->have_posts()):
            $counter = 0;
            while ($query->have_posts()):
                $query->the_post();
                $counter++;
                ?>
                <?php
                // Check if a new row should be created (every third item)
                if ($counter % 3 == 1):
                    ?>
                    <div class="col-10 paineis_empreendimentos">
                    <?php endif; ?>

                    <a href="<?php the_permalink(); ?>" class="col-md-3 col-xl-3 card_menor_1">
                        <div class="text_inside_destaque_1">
                            <h2
                                style="<?php echo (get_field('status_empreendimento') === 'Lançamento') ? 'background-color: #0DCB9D; color: #fff;' : ''; ?>">
                                <?php echo get_field('status_empreendimento'); ?>
                            </h2>
                            <p class="descritivos_card localizacao">
                                <?php echo get_field('localização'); ?>
                            </p>
                            <h1 class="nome_local">
                                <?php echo get_field('titulo_empreendimento'); ?>
                            </h1>
                            <p class="descritivos_card tipo_construcao">
                                <?php echo get_field('tipo_de_construcao'); ?>
                            </p>
                            <p class="descritivos_card info_adicional">
                                <?php echo get_field('medidas_do_local'); ?>
                            </p>
                        </div>
                        <img class="img-fluid image_1" src="<?php echo get_field('imagem_de_capa'); ?>" alt="" />
                    </a>

                    <?php
                    // Check if the row should be closed (every third item)
                    if ($counter % 3 == 0):
                        ?>
                    </div>
                <?php endif; ?>

            <?php endwhile; ?>

            <?php
            // Check if the last row is not closed
            if ($counter % 3 !== 0):
                ?>
            </div>
        <?php endif; ?>

        <?php
        wp_reset_postdata();
        else:
            // No posts found
        endif;
        ?>
    </div>
    <?php get_footer(); ?>
</section>