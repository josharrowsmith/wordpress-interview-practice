<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg"
        crossorigin="anonymous">
    <?php wp_head(); ?>
</head>
<style type="text/css">
    body {
        background: #<?php echo get_theme_mod('background_color', '#fff');
        ?>;
    }
</style>

<body>
    /* This nav bar is hell. */
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="<?php echo home_url() ?>" <b style="font-size: 23px">Josh</b>
            <label style="font-size: 15px">TEST</label>
        </a>

        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <?php
    wp_nav_menu( array(
        'theme_location'  => 'primary',
        'depth'           => 2,
        'container'       => 'div',
        'container_class' => 'collapse navbar-collapse',
        'menu_class'      => 'nav navbar-nav ml-auto',
        'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
        'walker'          => new WP_Bootstrap_Navwalker()
    ) );
    ?>
        </div>
    </nav>

    /* ohhh bootstrap */
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="<?php echo get_template_directory_uri()?>/css/img/slide-img.png" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="<?php echo get_template_directory_uri()?>/css/img/cs1.png" alt="Second slide">
                <div class="carousel-caption">
                    <h1>
                        <?php echo get_theme_mod('showcase_heading', 'Custom Bootstrap Wordpress Theme'); ?>
                    </h1>
                    <p>
                        <?php echo get_theme_mod('showcase_text', 'Sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean eu leo quam'); ?>
                    </p>

                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>


    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md tab mr-4">
                <div class="tab-icon">
                    <i class="far fa-thumbs-up"></i>
                </div>
                <div class="tab-title">
                    <h5>NETWORKING</h5>
                </div>
                <div class="tab-details">
                    <p>w.efnmilwrjf wekqodfweoifkkm ddd kewjdf</p>
                </div>
                <div class="tab-btn">
                    <button class="btn">Button</button>
                </div>
            </div>
            <div class="col-md tab mr-4">
                <div class="tab-icon">
                    <i class="fas fa-key"></i>
                </div>
                <div class="tab-title">
                    <h5>FRONT-END</h5>
                </div>
                <div class="tab-details">
                    <p>wlfenjowrjfiowrjf wpfjkeporgk weipfjpowerm</p>
                </div>
                <div class="tab-btn">
                    <button class="btn">Button</button>
                </div>
            </div>
            <div class="col-md tab mr-4">
                <div class="tab-icon">
                    <i class="fas fa-flag"></i>
                </div>
                <div class="tab-title">
                    <h5>BACK-END</h5>
                </div>
                <div class="tab-details">
                    <p>jlwefhiowf ewodfjweoiwenofwoenfdweofnmmn 2ejkdhejkw weoqudfjk </p>
                </div>
                <div class="tab-btn">
                    <button class="btn">Button</button>
                </div>
            </div>
            <div class="col-md tab mr-4">
                <div class="tab-icon">
                    <i class="fas fa-flask"></i>
                </div>
                <div class="tab-title">
                    <h5>CLOUD</h5>
                </div>
                <div class="tab-details">
                    <p>ewfkljwjo wejlfjo edjklwekl jlweioeoi djdj ddje dje </p>
                </div>
                <div class="tab-btn">
                    <button class="btn">Button</button>
                </div>
            </div>
        </div>
    </div>


    <?php get_footer(); ?>