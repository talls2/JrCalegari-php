<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
    <title>
        <?php bloginfo('name'); ?> -
        <?php bloginfo('description'); ?>
    </title>
    <?php wp_head(); ?>


</head>

<?php
$current_url = home_url(add_query_arg(array(), $wp->request));


$home = home_url('');
$empreendimentos_url = home_url('/empreendimentos');
$sobre_url = home_url('/sobre');
$contato = home_url('/contato');

$is_empreendimentos_page = ($current_url === $empreendimentos_url);
?>

<header id="site-header" class="container-fluid p-0" style="display: flex; justify-content: center;">
    <nav class="navbar navbar-expand-lg navbar-light col-10"
        style="justify-content: center !important; display: flex !important;">
        <a class="navbar-brand" href="#">
            <img src="<?php echo get_template_directory_uri(); ?>/src/images/Logo.svg" alt="Logo" id="logo_header"
                class="navbar-brand">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto" style="width: 100%; display: flex; justify-content: space-evenly;">
                <li class="nav-item">
                    <a class="" style="<?php echo $home === $current_url ? 'color: #0dcb9d;' : ''; ?>"
                        href="/index">HOME</a>
                </li>
                <li class="nav-item">
                    <a class="" style="<?php echo $empreendimentos_url === $current_url ? 'color: #0dcb9d;' : ''; ?>"
                        href="/empreendimentos">EMPREENDIMENTOS</a>
                </li>
                <li class="nav-item">
                    <a class="" style="<?php echo $sobre_url === $current_url ? 'color: #0dcb9d;' : ''; ?>"
                        href="/sobre">SOBRE</a>
                </li>
                <li class="nav-item">
                    <a class="" style="<?php echo $contato === $current_url ? 'color: #0dcb9d;' : ''; ?>"
                        href="/contato">CONTATO</a>
                </li>
            </ul>
            <li class="nav-item">
                <a class="" href="#">
                    <img src="<?php echo get_template_directory_uri(); ?>/src/images/Insta.svg" alt="Instagram"
                        id="insta_logo">
                </a>
            </li>
        </div>
    </nav>
</header>

<script>
    // Store the last scroll position
    let lastScrollTop = 0;

    // Get the header element
    const header = document.getElementById("site-header");

    window.addEventListener("scroll", () => {
        // Get the current scroll position
        const scrollTop = window.pageYOffset || document.documentElement.scrollTop;

        // Define a threshold for when to switch from sticky to fixed
        const threshold = 10; // Adjust this value as needed

        // Check the scroll direction
        if (scrollTop > lastScrollTop) {
            // Scrolling down, make the header fixed
            header.style.position = "sticky";
            header.style.opacity = 0;
        } else if (scrollTop <= threshold) {
            // Scrolling up and above the threshold, make the header sticky
            header.style.position = "sticky";
            header.style.opacity = 1;
        } else {
            // Scrolling up and at or below the threshold, make the header fixed
            header.style.position = "fixed";
            header.style.opacity = 1;
        }

        // Update the last scroll position
        lastScrollTop = scrollTop;
    });


</script>