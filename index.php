<!doctype html>
<html>

<body>

    <?php
    /**
     * The template for displaying the JR Calegari WordPress theme.
     *
     * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
     *
     * @package WordPress
     * @subpackage JR_Calegari
     * @since JR Calegari 1.0
     */

    get_header();
    ?>

    <section class="container-fluid p-0">


        <div class="row no-gutters" id="banner_top">
            <img class="img-fluid" id="banner_top_img"
                src="<?php echo get_template_directory_uri(); ?>/src/images/BANNER_TOPO.png" alt="" />
        </div>
        <div id="construindo" class="row no-gutters">
            <div class="col-10" id="construindo_pai">
                <div id="construindo_conteudo" class="">
                    <img id="JR_img" src="<?php echo get_template_directory_uri(); ?>/src/images/JR.svg" alt="" />
                    <div class="">
                        <h1>
                            Construindo espaços que encantam Itapê, sua cidade, nosso compromisso.
                        </h1>
                    </div>
                    <div class="">
                        <p>
                            A JR Calegari é uma construtora dedicada a criar espaços que valorizem o ambiente urbano
                            tendo
                            como prioridade a satisfação do cliente.
                        </p>
                        <p>
                            Para nós, Itapetininga é mais do que um mercado, é o nosso lar, e é com essa paixão que
                            construímos laços duradouros com a comunidade, oferecendo empreendimentos imobiliários que
                            transformam sonhos em realidade.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div id="empreendimentos" class="row no-gutters">
            <div class="col-12">
                <h1>NOSSOS EMPREENDIMENTOS</h1>
            </div>
            <div id="paineis" class="col-12">

                <div id="painel_principal" class="col-7">

                    <img class="img-fluid" id="J_image"
                        src="<?php echo get_template_directory_uri(); ?>/src/images/J.svg" alt="" />

                    <div class="col-md-12 col-xl-12 card_menor_1">

                        <img class="img-fluid"
                            src="<?php echo get_template_directory_uri(); ?>/src/images/the_club_residencial.png" />
                        <div id="text_inside_big_destaque_1">
                            <h2>Lançamento</h2>
                            <p class="descritivos_card localizacao">Itapetininga, SP</p>
                            <h1 class="nome_local">The Club Residencial</h1>
                            <p class="descritivos_card tipo_construcao">Apartamentos</p>
                            <p class="descritivos_card info_adicional">54m² • 2Q • 1 Suíte</p>
                        </div>
                    </div>

                </div>
                <div id="paineis_menores" class="col-6">
                    <img id="R_image" src="<?php echo get_template_directory_uri(); ?>/src/images/R.svg" alt="" />
                    <div class="col-md-5 col-xl-5 card_menor_1 so_z_index">
                        <div class="text_inside_destaque_1">
                            <h2>Entregue</h2>
                            <p class="descritivos_card localizacao">Itapetininga, SP</p>
                            <h1 class="nome_local">Vila Leme 2</h1>
                            <p class="descritivos_card tipo_construcao">Apartamentos</p>
                            <p class="descritivos_card info_adicional">xxm² • xQ • x Suíte</p>
                        </div>
                        <img class="img-fluid image_1"
                            src="<?php echo get_template_directory_uri(); ?>/src/images/vila_leme_2.png" alt="" />
                    </div>
                    <div class="col-md-5 col-xl-5 card_menor_1">
                        <div class="text_inside_destaque_1">
                            <h2>Entregue</h2>
                            <p class="descritivos_card localizacao">Itapetininga, SP</p>
                            <h1 class="nome_local">Vila Leme 1</h1>
                            <p class="descritivos_card tipo_construcao">Apartamentos</p>
                            <p class="descritivos_card info_adicional">xxm² • xQ • x Suíte</p>
                        </div>
                        <img id="image_1" class="img-fluid"
                            src="<?php echo get_template_directory_uri(); ?>/src/images/vila_leme_2.png" alt="" />
                    </div>
                </div>
            </div>
        </div>
        <div id="anos" class="row no-gutters">
            <div id="anos_conteudo" class="col-12">
                <h1>
                    10 Anos Construindo <br />
                    Sonhos em Itapetininga
                </h1>
                <p>
                    Com vasta experiência no mercado de Itapetininga, atuando há mais de
                    10 anos, A JR Calegari tem sua dedicação refletida nos
                    empreendimentos que lança, os quais são cuidadosamente projetados
                    levando em consideração cada detalhe de Itapê. Com seu conhecimento
                    e compromisso com Itapetininga, a JR Calegari tem se estabelecido
                    como uma referência no mercado imobiliário local.
                </p>
                <div class="d-grid gap-2">
                    <button type="button" name="" id="botao_saber" class="btn">
                        Quero saber mais
                    </button>
                </div>
            </div>
        </div>

        <div class="row no-gutters">
            <div id="family" class="col-12">
                <div id="cadastre" class="col-10">
                    <div id="title_and_p">
                        <h1>CADASTRE-SE</h1>
                        <p>E receba novidades da JR Calegari!</p>
                    </div>
                    <div class="input-group mb-5" id="inputs">
                        <div class="col-3 campos_pai">
                            <input type="text" class="form-control campos" placeholder="Nome Completo"
                                aria-label="Default" aria-describedby="inputGroup-sizing-default" />
                        </div>
                        <div class="col-3 campos_pai">
                            <input type="text" class="form-control campos" placeholder="Digite seu melhor e-mail"
                                aria-label="Default" aria-describedby="inputGroup-sizing-default" />
                        </div>
                        <div class="col-3 campos_pai">
                            <input type="text" class="form-control campos" placeholder="Telefone" aria-label="Default"
                                aria-describedby="inputGroup-sizing-default" />
                        </div>
                        <div class="col-2" id="botao_div">
                            <button type="button" class="btn btn-success cadastrar">
                                Cadastrar
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="trabalhamos">
            <div class="col-12 trabalhamos_div">
                <h1>
                    trabalhamos incansavelmente <br />para superar suas expectativas.
                </h1>
                <img src="<?php echo get_template_directory_uri(); ?>/src/images/Logo.svg" alt="" />
            </div>
        </div>

        <div class="happy_family col-12"></div>


        <?php get_footer(); ?>
    </section>

</body>

</html>