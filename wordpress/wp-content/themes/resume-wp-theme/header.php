<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="<?php echo esc_attr(get_bloginfo('description')); ?>">
    <meta name="author" content="Peter S Gorgone">
    
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?> id="page-top">

<nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
    <a class="d-none d-lg-block navbar-brand js-scroll-trigger" href="#page-top">
        <span class="d-none d-lg-block">
            <img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="<?php echo get_template_directory_uri(); ?>/img/profile.jpg" alt="<?php echo esc_attr(get_bloginfo('name')); ?>">
        </span>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav">
            <?php if (is_front_page()): ?>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#experience">Experience</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#github">Github</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#skills">Skills</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#references">References</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#education">Education</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#about">About</a>
                </li>
            <?php else: ?>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo esc_url(home_url('/')); ?>">Home</a>
                </li>
            <?php endif; ?>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo get_template_directory_uri(); ?>/img/2020--PeterGorgone--WebDeveloper--Resume.pdf">Resume</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo esc_url(get_permalink(get_option('page_for_posts')) ?: home_url('/blog')); ?>">Blog</a>
            </li>
        </ul>
    </div>
    <div class="OFF-d-none OFF-d-md-block">
        <p class="tag-nav_footer">
            <script type="text/javascript"> var name="peter"; var domain="@peltronic.com"; var txtstr=name + domain; document.write('<a href="mailto:'+txtstr+'">'+txtstr+'</a>'); </script>
        </p>
        <hr class="d-none d-lg-block" />
        <p id="tag-copyright" class="tag-nav_footer">Copyright &copy; <?php echo date('Y'); ?> Peter S. Gorgone. All rights reserved.</p>
    </div>
</nav>

<div class="container-fluid p-0">

