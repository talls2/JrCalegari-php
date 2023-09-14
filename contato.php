<?php
/**
 * Template Name: Contato
 * Description: Pagina para contato
 *
 * @package WordPress
 * @subpackage JR_Calegari
 * @since JR Calegari 1.0
 */

get_header();
?>

<section class="container-fluid p-0">
    <div class="row no-gutters d-flex justify-content-center mb-5">
        <div class="col-10 d-flex justify-content-center flex-d flex-column" id="contato_div">
            <h1 class="mt-5">FALE COM A GENTE</h1>
            <div class="d-flex justify-content-between flex-d flex-row">
                <div class="col-6 d-flex justify-content-center flex-d flex-column">
                    <p>
                        Envie agora mesmo uma mensagem para nossa equipe de atendimento
                        preenchendo o formulário abaixo.
                    </p>
                    <form>
                        <div class="form-group">
                            <input type="email" class="form-control form-contato" id="nome"
                                placeholder="Nome Completo" />
                            <div class="col-12 d-flex justify-content-around mt-3">
                                <div class="col-6">
                                    <input type="email" class="form-control form-contato email_tel" id="tel"
                                        placeholder="E-mail" />
                                </div>
                                <div class="col-6" id="e-mail_div">
                                    <input type="email" class="form-control form-contato email_tel" id="e-mail"
                                        placeholder="Telefone" />
                                </div>
                            </div>
                            <textarea class="form-control mt-3" id="exampleFormControlTextarea1" rows="5"
                                placeholder="Sua Mensagem"></textarea>
                            <div class="d-grid gap-2 flex-d justify-content-end">
                                <button type="button" name="" id="" class="btn btn-success mt-3">
                                    Enviar
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-5">
                    <img src="<?php echo get_template_directory_uri(); ?>/src/images/mulher.png" alt="" />
                </div>
            </div>
        </div>
    </div>


    <?php get_footer(); ?>
</section>