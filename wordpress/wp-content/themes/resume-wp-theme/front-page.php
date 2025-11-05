<?php
/**
 * The front page template
 *
 * @package Resume_WP_Theme
 */

get_header(); ?>

<section class="resume-section p-3 p-lg-5 d-flex d-column" id="home">
    <div class="my-auto">
        <?php 
        $hero_label = get_field('hero_label');
        if ($hero_label) {
            echo '<div class="mb-2">' . esc_html($hero_label) . '</div>';
        }
        ?>
        <h1 class="mb-0">
            <?php echo esc_html(get_field('hero_first_name') ?: 'Peter'); ?>
            <span class="text-primary"><?php echo esc_html(get_field('hero_last_name') ?: 'Gorgone'); ?></span>
        </h1>
        <h3 class="mb-5"><?php echo esc_html(get_field('hero_title') ?: 'Freelance Web Developer'); ?></h3>
        <div class="subheading mb-5">
            <?php echo esc_html(get_field('hero_locations') ?: 'Las Vegas · Los Angeles · Chicago'); ?> · 
            <a href="mailto:peter@peltronic.com" class="tag-clickme_to_email">
                <script type="text/javascript"> var name="peter"; var domain="@peltronic.com"; var txtstr=name + domain; document.write(''+txtstr+''); </script>
            </a>
        </div>

        <div class="mb-5">
            <?php 
            $hero_summary = get_field('hero_summary');
            if ($hero_summary) {
                echo wp_kses_post($hero_summary);
            } else {
                echo '<p>Professional Custom Web Development for Small Business and Startups</p>';
            }
            ?>
        </div>
        <ul class="list-inline list-social-icons mb-0">
            <?php 
            // Social Links Repeater
            if (have_rows('hero_social_links')) {
                while (have_rows('hero_social_links')) {
                    the_row();
                    $social_url = get_sub_field('social_url');
                    $social_icon = get_sub_field('social_icon') ?: 'fa-link';
                    if ($social_url) {
                        ?>
                        <li class="list-inline-item">
                            <a href="<?php echo esc_url($social_url); ?>" target="_blank" rel="noopener noreferrer">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa <?php echo esc_attr($social_icon); ?> fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>
                        <?php
                    }
                }
            } else {
                // Fallback to default social links
                ?>
                <li class="list-inline-item">
                    <a href="https://www.linkedin.com/in/petergorgone/" target="_blank" rel="noopener noreferrer">
                        <span class="fa-stack fa-lg">
                            <i class="fa fa-circle fa-stack-2x"></i>
                            <i class="fa fa-linkedin fa-stack-1x fa-inverse"></i>
                        </span>
                    </a>
                </li>
                <li class="list-inline-item">
                    <a href="https://github.com/peltronic" target="_blank" rel="noopener noreferrer">
                        <span class="fa-stack fa-lg">
                            <i class="fa fa-circle fa-stack-2x"></i>
                            <i class="fa fa-github fa-stack-1x fa-inverse"></i>
                        </span>
                    </a>
                </li>
                <?php
            }
            ?>
        </ul>
    </div>
</section>

<section class="resume-section p-3 p-lg-5 d-flex flex-column" id="experience">
    <div class="my-auto">
        <h2 class="mb-4">Experience</h2>
        <?php 
        $experience_intro = get_field('experience_intro');
        if ($experience_intro) {
            echo '<p class="mb-4">' . esc_html($experience_intro) . '</p>';
        } else {
            echo '<p class="mb-4">I have over 10 years experience writing software. As a professional full-stack web developer, I am passionate about building web applications using modern technologies and best practices. The list below highlights a few of the sites I\'ve built for clients.</p>';
        }
        ?>

        <?php
        // Experience Items Repeater
        if (have_rows('experience_items')) {
            $experience_index = 0;
            while (have_rows('experience_items')) {
                the_row();
                $job_title = get_sub_field('job_title');
                $company_name = get_sub_field('company_name');
                $company_url = get_sub_field('company_url');
                $date_range = get_sub_field('date_range');
                $description = get_sub_field('description');
                $experience_index++;
                ?>
                <div class="resume-item d-flex flex-column flex-md-row mb-5">
                    <div class="resume-content mr-auto">
                        <?php if ($job_title) : ?>
                            <h3 class="mb-0"><?php echo esc_html($job_title); ?></h3>
                        <?php endif; ?>
                        <?php if ($company_name) : ?>
                            <div class="subheading mb-3">
                                <?php if ($company_url) : ?>
                                    <a href="<?php echo esc_url($company_url); ?>" target="_blank" rel="noopener noreferrer"><?php echo esc_html($company_name); ?></a>
                                <?php else : ?>
                                    <?php echo esc_html($company_name); ?>
                                <?php endif; ?>
                            </div>
                        <?php endif; ?>
                        <?php if ($description) : ?>
                            <div class="mb-3"><?php echo wp_kses_post($description); ?></div>
                        <?php endif; ?>

                        <?php
                        // Experience Modals Repeater (nested)
                        if (have_rows('experience_modals')) {
                            while (have_rows('experience_modals')) {
                                the_row();
                                $modal_img = get_sub_field('modal_image');
                                $modal_title = get_sub_field('modal_title') ?: 'Image';
                                $modal_alt = get_sub_field('modal_alt') ?: $modal_title;
                                $modal_desc = get_sub_field('modal_description');
                                $modal_target = 'modal-exp-' . $experience_index . '-' . get_row_index();
                                
                                if ($modal_img) {
                                    $modal_data = [
                                        'imgUrl' => is_array($modal_img) ? $modal_img['url'] : $modal_img,
                                        'desc' => $modal_desc ?: '',
                                        'alt' => $modal_alt,
                                        'title' => $modal_title,
                                        'target' => $modal_target,
                                    ];
                                    get_template_part('template-parts/modal', null, $modal_data);
                                }
                            }
                        }
                        ?>

                        <?php
                        // Experience Videos Repeater (nested)
                        if (have_rows('experience_videos')) {
                            while (have_rows('experience_videos')) {
                                the_row();
                                $video_url = get_sub_field('video_url');
                                $video_description = get_sub_field('video_description');
                                
                                if ($video_url) {
                                    ?>
                                    <div class="crate-image row mb-3">
                                        <div class="embed-responsive embed-responsive-16by9 col-sm-4">
                                            <iframe class="embed-responsive-item" src="<?php echo esc_url($video_url); ?>" allowfullscreen></iframe>
                                        </div>
                                        <?php if ($video_description) : ?>
                                            <div class="col-sm-8 align-self-center">
                                                <p><?php echo esc_html($video_description); ?></p>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                    <?php
                                }
                            }
                        }
                        ?>
                    </div>
                    <?php if ($date_range) : ?>
                        <div class="resume-date text-md-right">
                            <span class="text-primary"><?php echo esc_html($date_range); ?></span>
                        </div>
                    <?php endif; ?>
                </div>
                <?php
            }
        }
        ?>

    </div>
</section>

<section class="resume-section p-3 p-lg-5 d-flex flex-column" id="github">
    <div class="my-auto">
        <h2 class="mb-5"><?php echo esc_html(get_field('github_section_title') ?: 'Github &amp; Example Code'); ?></h2>

        <?php
        // GitHub Projects Repeater
        if (have_rows('github_projects')) {
            while (have_rows('github_projects')) {
                the_row();
                $project_title = get_sub_field('project_title');
                $project_description = get_sub_field('project_description');
                $project_url = get_sub_field('project_url');
                $project_image = get_sub_field('project_image');
                ?>
                <div class="resume-item d-flex flex-column flex-md-row mb-5">
                    <div class="resume-content mr-auto">
                        <?php if ($project_title) : ?>
                            <h3 class="mb-3"><?php echo esc_html($project_title); ?></h3>
                        <?php endif; ?>
                        <?php if ($project_description) : ?>
                            <div class="mb-3"><?php echo wp_kses_post($project_description); ?></div>
                        <?php endif; ?>
                        <?php if ($project_image) : ?>
                            <?php
                            $img_url = is_array($project_image) ? $project_image['url'] : $project_image;
                            $img_alt = is_array($project_image) ? $project_image['alt'] : $project_title;
                            ?>
                            <p class="mb-3">
                                <?php if ($project_url) : ?>
                                    <a href="<?php echo esc_url($project_url); ?>" target="_blank" rel="noopener noreferrer">
                                <?php endif; ?>
                                <img class="" src="<?php echo esc_url($img_url); ?>" style="max-width: 580px;max-height: 500px;" alt="<?php echo esc_attr($img_alt); ?>">
                                <?php if ($project_url) : ?>
                                    </a>
                                <?php endif; ?>
                            </p>
                        <?php endif; ?>
                        <?php if ($project_url) : ?>
                            <span><a href="<?php echo esc_url($project_url); ?>" target="_blank" rel="noopener noreferrer">Github</a></span>
                        <?php endif; ?>
                    </div>
                </div>
                <?php
            }
        }
        
        $github_footer_text = get_field('github_footer_text');
        if ($github_footer_text) {
            echo '<h4>' . esc_html($github_footer_text) . '</h4>';
        }
        ?>
    </div>
</section>

<section class="resume-section p-3 p-lg-5 d-flex flex-column" id="skills">
    <div class="my-auto">
        <h2 class="mb-5">Skills</h2>

        <?php
        // Skills Categories Repeater
        if (have_rows('skills_categories')) {
            while (have_rows('skills_categories')) {
                the_row();
                $category_title = get_sub_field('category_title');
                $category_class = get_sub_field('category_class') ?: 'skills-languages';
                ?>
                <article class="<?php echo esc_attr($category_class); ?>">
                    <?php if ($category_title) : ?>
                        <div class="subheading mb-3"><?php echo esc_html($category_title); ?></div>
                    <?php endif; ?>
                    <?php
                    // Skills Items Repeater (nested)
                    if (have_rows('skills_items')) {
                        ?>
                        <ul class="fa-ul mb-0">
                            <?php
                            while (have_rows('skills_items')) {
                                the_row();
                                $skill_text = get_sub_field('skill_text');
                                if ($skill_text) {
                                    ?>
                                    <li>
                                        <i class="fa-li fa fa-check"></i>
                                        <?php echo wp_kses_post($skill_text); ?>
                                    </li>
                                    <?php
                                }
                            }
                            ?>
                        </ul>
                        <?php
                    }
                    ?>
                </article>
                <?php
            }
        } else {
            // Fallback to default skills
            ?>
            <article class="skills-languages">
                <div class="subheading mb-3">Programming Languages &amp; Tools</div>
                <ul class="fa-ul mb-0">
                    <li>
                        <i class="fa-li fa fa-check"></i>
                        MERN-like stacks: NodeJS + Express + NestJS | React | MongoDB | PostgreSQL + Sequelize
                    </li>
                    <li>
                        <i class="fa-li fa fa-check"></i>
                        Fluency on all levels of the <a class="" href="http://en.wikipedia.org/wiki/LAMP_(software_bundle)" target="_blank">LAMP</a> Stack: Laravel + PHP7 | Linux+CLI | Apache | MySQL
                    </li>
                    <li>
                        <i class="fa-li fa fa-check"></i>
                        Javascript/ECMAScript 2017 | Typescript | AJAX/JSON | ReactJS | VueJS | JQuery
                    </li>
                    <li>
                        <i class="fa-li fa fa-check"></i>
                        Bootstrap 4 | HTML 5 | CSS 3
                    </li>
                    <li>
                        <i class="fa-li fa fa-check"></i>
                        Cloud Hosting: Amazon Web Services (AWS) EC2 &amp; Load Balancing, Rackspace Cloud, CPanel
                    </li>
                    <li>
                        <i class="fa-li fa fa-check"></i>
                        Version Control: github, mercurial, cvs
                    </li>
                    <li>
                        <i class="fa-li fa fa-check"></i>
                        C (expert), C++ (advanced)
                    </li>
                    <li>
                        <i class="fa-li fa fa-check"></i>
                        OAuth, Web 2.0 APIs (Facebook, Twitter, etc), REST, SSL, PHPUnit
                    </li>
                </ul>
            </article>

            <article class="skills-workflow">
                <div class="subheading mb-3">Workflow</div>
                <ul class="fa-ul mb-0">
                    <li>
                        <i class="fa-li fa fa-check"></i>
                        Rapid prototyping using Agile Development &amp; Iteration-based methodology
                    </li>
                    <li>
                        <i class="fa-li fa fa-check"></i>
                        Test-Driven Design (TDD)
                    </li>
                    <li>
                        <i class="fa-li fa fa-check"></i>
                        Excellent debug/troubleshooting skills: PHP Storm, Chrome Inspector, gdb
                    </li>
                </ul>
            </article>
            <?php
        }
        
        // Resume Download Link
        $resume_file = get_field('resume_download_file');
        if ($resume_file) {
            $resume_url = is_array($resume_file) ? $resume_file['url'] : $resume_file;
            ?>
            <div id="crate-resume">
                <a href="<?php echo esc_url($resume_url); ?>">Download Resume</a>
            </div>
            <?php
        } else {
            // Fallback
            ?>
            <div id="crate-resume">
                <a href="<?php echo get_template_directory_uri(); ?>/img/2019--PeterGorgone--WebDeveloper--Resume.pdf">Download Resume</a>
            </div>
            <?php
        }
        ?>
    </div>
</section>

<section class="references-section p-3 p-lg-5 d-flex flex-column" id="references">
    <div class="my-auto">
        <h2 class="mb-5"><?php echo esc_html(get_field('references_section_title') ?: 'References'); ?></h2>
        <?php
        $references_intro = get_field('references_intro');
        if ($references_intro) {
            echo '<p>' . wp_kses_post($references_intro) . '</p>';
        } else {
            echo '<p>A snippet from my <a class="" href="https://www.linkedin.com/in/petergorgone/" target="_blank">LinkedIn Profile</a> showing references and recommendations from past clients and co-workers</p>';
        }
        
        $references_image = get_field('references_image');
        if ($references_image) {
            $ref_img_url = is_array($references_image) ? $references_image['url'] : $references_image;
            $ref_img_alt = is_array($references_image) ? $references_image['alt'] : 'Client References';
            ?>
            <div id="crate-references">
                <img class="" src="<?php echo esc_url($ref_img_url); ?>" style="" alt="<?php echo esc_attr($ref_img_alt); ?>">
            </div>
            <?php
        } else {
            // Fallback
            ?>
            <div id="crate-references">
                <img class="" src="<?php echo get_template_directory_uri(); ?>/img/references.png" style="" alt="Client References">
            </div>
            <?php
        }
        ?>
    </div>
</section>

<section class="resume-section p-3 p-lg-5 d-flex flex-column" id="education">
    <div class="my-auto">
        <h2 class="mb-5"><?php echo esc_html(get_field('education_section_title') ?: 'Education'); ?></h2>

        <?php
        // Education Items Repeater
        if (have_rows('education_items')) {
            while (have_rows('education_items')) {
                the_row();
                $school_name = get_sub_field('school_name');
                $school_url = get_sub_field('school_url');
                $degree = get_sub_field('degree');
                $specialization = get_sub_field('specialization');
                ?>
                <div class="resume-item d-flex flex-column flex-md-row mb-5">
                    <div class="resume-content mr-auto">
                        <?php if ($school_name) : ?>
                            <h3 class="mb-0">
                                <?php if ($school_url) : ?>
                                    <a class="" href="<?php echo esc_url($school_url); ?>" target="_blank" rel="noopener noreferrer">
                                        <?php echo esc_html($school_name); ?>
                                    </a>
                                <?php else : ?>
                                    <?php echo esc_html($school_name); ?>
                                <?php endif; ?>
                            </h3>
                        <?php endif; ?>
                        <?php if ($degree) : ?>
                            <div class="subheading mb-3"><?php echo esc_html($degree); ?></div>
                        <?php endif; ?>
                        <?php if ($specialization) : ?>
                            <div><?php echo esc_html($specialization); ?></div>
                        <?php endif; ?>
                    </div>
                </div>
                <?php
            }
        }
        ?>
    </div>
</section>

<section class="resume-section p-3 p-lg-5 d-flex flex-column" id="about">
    <div class="my-auto">
        <h2 class="mb-4"><?php echo esc_html(get_field('about_section_title') ?: 'About'); ?></h2>
        <?php
        $about_intro = get_field('about_intro');
        if ($about_intro) {
            echo '<p class="mb-5">' . esc_html($about_intro) . '</p>';
        } else {
            echo '<p class="mb-5">A few questions that may be on your mind...</p>';
        }
        
        // FAQ Items Repeater
        if (have_rows('about_faq_items')) {
            ?>
            <ul>
                <?php
                while (have_rows('about_faq_items')) {
                    the_row();
                    $question = get_sub_field('question');
                    $answer = get_sub_field('answer');
                    if ($question || $answer) {
                        ?>
                        <li class="mb-5">
                            <?php if ($question) : ?>
                                <div class="mb-2"><?php echo esc_html($question); ?></div>
                            <?php endif; ?>
                            <?php if ($answer) : ?>
                                <div class="mb-2"><?php echo wp_kses_post($answer); ?></div>
                            <?php endif; ?>
                        </li>
                        <?php
                    }
                }
                ?>
            </ul>
            <?php
        }
        ?>
    </div>
</section>

<?php get_footer(); ?>

