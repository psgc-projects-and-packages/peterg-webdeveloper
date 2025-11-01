<?php
/**
 * The front page template
 *
 * @package Resume_WP_Theme
 */

get_header(); ?>

<section class="resume-section p-3 p-lg-5 d-flex d-column" id="home">
    <div class="my-auto">
        <h1 class="mb-0">Peter
            <span class="text-primary">Gorgone</span>
        </h1>
        <h3 class="OFF-mb-5">Freelance Web Developer</h3>
        <div class="subheading mb-5">Las Vegas · Los Angeles · Chicago · 
            · 
            <a href="mailto:peter@peltronic.com" class="tag-clickme_to_email">
                <script type="text/javascript"> var name="peter"; var domain="@peltronic.com"; var txtstr=name + domain; document.write(''+txtstr+''); </script>
            </a>
        </div>

        <p class="mb-5">Professional Custom Web Development for Small Business and Startups</p>
        <ul class="list-inline list-social-icons mb-0">
            <li class="list-inline-item">
                <a href="https://www.linkedin.com/in/petergorgone/">
                    <span class="fa-stack fa-lg">
                        <i class="fa fa-circle fa-stack-2x"></i>
                        <i class="fa fa-linkedin fa-stack-1x fa-inverse"></i>
                    </span>
                </a>
            </li>
            <li class="list-inline-item">
                <a href="https://github.com/peltronic">
                    <span class="fa-stack fa-lg">
                        <i class="fa fa-circle fa-stack-2x"></i>
                        <i class="fa fa-github fa-stack-1x fa-inverse"></i>
                    </span>
                </a>
            </li>
        </ul>
    </div>
</section>

<section class="resume-section p-3 p-lg-5 d-flex flex-column" id="experience">
    <div class="my-auto">
        <h2 class="mb-4">Experience</h2>
        <p class="mb-4">I have over 10 years experience writing software. As a professional full-stack web developer, I am passionate about building web applications using modern technologies and best practices. The list below highlights a few of the sites I've built for clients.</p>

        <!-- NewLogix -->
        <div class="resume-item d-flex flex-column flex-md-row mb-5">
            <div class="resume-content mr-auto">
                <h3 class="mb-0">Senior Web Developer/Architect</h3>
                <div class="subheading mb-3"><a href="http://www.newlogix.com/">Newlogix Inc.</a></div>
                <p>Product architect and lead responsible for end-to-end development of 2 major projects. The first, called <a href="http://www.logixsynergy.com">Synergy</a>, is a project management tool with CMS and CRM-type features customized for utility companies to help them manage schedules, budgets, and other items for the many vendors they work with. The second, called <a href="http://www.civixapp.com">Civix</a> is an online portal for submitting and managing permit or license applications. Bootstraped enginering team and managed developement, testing, and deployment operations.</p>

                <?php
                $modal_data = [
                    'imgUrl' => get_template_directory_uri() . '/img/portfolio/newlogix/ls-project_list.png',
                    'desc' => 'Project Dashboard with sorting and search capabilities. Sidebar utilizes charts to analyze project data in meaningful ways.',
                    'alt' => 'Synergy Project Dashboard',
                    'title' => 'Project Dashboard',
                    'target' => 'modal-synergy_project_list',
                ];
                get_template_part('template-parts/modal', null, $modal_data);

                $modal_data = [
                    'imgUrl' => get_template_directory_uri() . '/img/portfolio/newlogix/ls-fb-template_builder.png',
                    'desc' => 'The forms used to track project data can be constructed dynamically in an administration area. This page shows building a form from \'components\' (commonly used sub-forms). The user can drag & drop a component from the list on the right into the center area to add it to a form, which will then be available on the site (or possibly a mobile app) for filling out by contractors and engineers in the field.',
                    'title' => 'Form Builder',
                    'alt' => 'Form Builder',
                    'target' => 'modal-synergy_formbuilder',
                ];
                get_template_part('template-parts/modal', null, $modal_data);
                ?>

            </div>
            <div class="resume-date text-md-right">
                <span class="text-primary">2016 - Present</span>
            </div>
        </div>

        <!-- Write Evolution -->
        <div class="resume-item d-flex flex-column flex-md-row mb-5">
            <div class="resume-content mr-auto">
                <h3 class="mb-0">Senior Web Developer/Architect</h3>
                <div class="subheading mb-3"><a href="http://www.writeevolution.com/">Write Evolution</a></div>
                <p>Designed and built 'collaborative writing' web application, allowing writers and editors to create novels and short stories working together online. Features included a simple chapter 'versioning system' allowing authors to save and retrieve previous versions of a chapter, internal voting system, and built-in notifications and direct messaging capabilities.</p>

                <div class="crate-image row">
                    <div class="embed-responsive embed-responsive-16by9 col-sm-4">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/-6rlGsBxaQU" allowfullscreen></iframe> 
                    </div>
                    <div class="col-sm-8 align-self-center"><p>Demo video showing built-in private messaging system</p></div>
                </div>

                <div class="crate-image row">
                    <div class="embed-responsive embed-responsive-16by9 col-sm-4">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/pZqS-sczZgk" allowfullscreen></iframe>
                    </div>
                    <div class="col-sm-8 align-self-center"><p>Demo video showing archiving and periodic auto-saving of chapter drafts</p></div>
                </div>

            </div>
            <div class="resume-date text-md-right">
                <span class="text-primary">2015 - 2016</span>
            </div>
        </div>

        <!-- Axiom Images -->
        <div class="resume-item d-flex flex-column flex-md-row mb-5">
            <div class="resume-content mr-auto">
                <h3 class="mb-0">Senior Web Developer</h3>
                <div class="subheading mb-3"><a href="http://www.axiomimages.com/">Axiom Images</a></div>
                <p>Implemented features such as dynamic playlist, and intelligent search filtering for leading aerial stock footage website. Work also included a complete re-write of the website's admin panel using Laravel MVC Framework.</p>
                <?php
                $modal_data = [
                    'imgUrl' => get_template_directory_uri() . '/img/portfolio/axiom-images/ai-search-with_playlist.png',
                    'desc' => 'Search with sophisticated filtering UI (left), results (right), and customizable playlist (bottom).',
                    'title' => 'Filtered Search Results',
                    'alt' => 'Filtered Search Results',
                    'target' => 'modal-axiom_search_results',
                ];
                get_template_part('template-parts/modal', null, $modal_data);
                ?>
            </div>
            <div class="resume-date text-md-right">
                <span class="text-primary">2014 - 2015</span>
            </div>
        </div>

        <!-- ODOE -->
        <div class="resume-item d-flex flex-column flex-md-row mb-5">
            <div class="resume-content mr-auto">
                <h3 class="mb-0">Lead Web Developer</h3>
                <div class="subheading mb-3"><a href="https://www.onedayonearth.org/">One Day on Earth</a></div>
                <p>One Day on Earth was an annual project founded by a Santa Monica-based filmmaker. Starting on October 10, 2010 (10/10/10), thousands of volunteers worldwide shot footage documenting life on that day. The 'archive' lets viewers browse and watch the videos by location, keywords, and categories. I built the archive site implementing features such as keyword-based search, commenting, and user ratings. I also integrated the site with the Vimeo API to support both video playback, as well as the ability to upload new videos.</p>

                <?php
                $modal_data = [
                    'imgUrl' => get_template_directory_uri() . '/img/portfolio/odoe/odoe-map.png',
                    'desc' => 'Map-based UI showing locations where videos were shot on 10/10/2010. \'Cluster\' icons in green show groups of videos, which can be clicked on to zoom into.',
                    'title' => 'Archive map',
                    'alt' => 'One Day on Earth Archive Map',
                    'target' => 'modal-odoe_map',
                ];
                get_template_part('template-parts/modal', null, $modal_data);
                
                $modal_data = [
                    'imgUrl' => get_template_directory_uri() . '/img/portfolio/odoe/odoe-video.png',
                    'desc' => 'Pop-out sidebar contains video player, along with other information about the work, plus a playlist of related videos at the bottom.',
                    'title' => 'One Day on Earth Sidebar with Embedded Video Player',
                    'alt' => 'Sidebar',
                    'target' => 'modal-odoe_sidebar',
                ];
                get_template_part('template-parts/modal', null, $modal_data);
                ?>

            </div>
            <div class="resume-date text-md-right">
                <span class="text-primary">2010 - 2013</span>
            </div>
        </div>

        <!-- Misc. -->
        <div class="resume-item d-flex flex-column flex-md-row mb-5">
            <div class="resume-content mr-auto">
                <h3 class="mb-0">Software Engineer</h3>
                <div class="subheading mb-3"><a href="#">Various Companies</a></div>
                <p>Before launching my freelance business, I worked as a full-time developer/engineer at several companies including Silicon Graphics, Equator, Pixelworks, Open Interface, and Pavia Systems. Tasks included VLSI design, embedded programming (C, C++), and PHP-based web development.</p>
            </div>
        </div>

    </div>
</section>

<section class="resume-section p-3 p-lg-5 d-flex flex-column" id="github">
    <div class="my-auto">
        <h2 class="mb-5">Github &amp; Example Code</h2>

        <div class="resume-item d-flex flex-column flex-md-row mb-5">
            <div class="resume-content mr-auto">
                <h3 class="mb-3">List Collector</h3>
                <p class="mb-0">A Laravel 5.x package inspired by iOS/Swift-style 'delegation' that allows clients to easily query 'listable' data with filtering, sorting, paging, etc.</p>
                <p class="mb-0">A common use case is grabbing records from a database to feed to the DataTables jquery plugin.</p>
                <span><a href="https://github.com/psgc-laravel-packages/collector/blob/master/README.md" target="_blank">Github</a></span>
            </div>
        </div>

        <div class="resume-item d-flex flex-column flex-md-row mb-5">
            <div class="resume-content mr-auto">
                <h3 class="mb-3">Laravel Access Control</h3>
                <p class="mb-0">An alternative, role-based custom access control library for use in Laravel 5.x apps.</p>
                <p class="mb-3"><a class="" href="https://github.com/psgc-laravel-packages/accessControl/blob/master/README.md" target="_blank">
                    <img class="" src="<?php echo get_template_directory_uri(); ?>/img/access-control-code-sample.png" style="max-width: 580px;max-height: 500px;" alt="Github Access Control Code Snippet">
                </a></p>
                <span><a href="https://github.com/psgc-laravel-packages/accessControl/blob/master/README.md" target="_blank">Github</a></span>
            </div>
        </div>

        <div class="resume-item d-flex flex-column flex-md-row mb-5">
            <div class="resume-content mr-auto">
                <h3 class="mb-3">Vue.JS "Note Taker" App</h3>
                <p class="mb-0">A Single-Page App that lets the user crate and edit notes. The UI also lets the user select a color for each note. Built with VueJS (no persitent storage)</p>
                <span><a href="https://github.com/peltronic/note-taker" target="_blank">Github</a></span>
            </div>
        </div>

        <h4>More coming soon...</h4>
    </div>
</section>

<section class="resume-section p-3 p-lg-5 d-flex flex-column" id="skills">
    <div class="my-auto">
        <h2 class="mb-5">Skills</h2>

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
            <div id="crate-resume">
                <a href="<?php echo get_template_directory_uri(); ?>/img/2019--PeterGorgone--WebDeveloper--Resume.pdf">Download Resume</a>
            </div>
        </article>
    </div>
</section>

<section class="references-section p-3 p-lg-5 d-flex flex-column" id="references">
    <div class="my-auto">
        <h2 class="mb-5">References</h2>
        <p>A snippet from my <a class="" href="https://www.linkedin.com/in/petergorgone/" target="_blank">LinkedIn Profile</a> showing references and recommendations from past clients and co-workers</p>
        <div id="crate-references">
            <img class="" src="<?php echo get_template_directory_uri(); ?>/img/references.png" style="" alt="Client References">
        </div>
    </div>
</section>

<section class="resume-section p-3 p-lg-5 d-flex flex-column" id="education">
    <div class="my-auto">
        <h2 class="mb-5">Education</h2>

        <div class="resume-item d-flex flex-column flex-md-row mb-5">
            <div class="resume-content mr-auto">
                <h3 class="mb-0">
                    <a class="" href="https://www.ee.washington.edu" target="_blank">
                        University of Washington, Seattle WA
                    </a>
                </h3>
                <div class="subheading mb-3">Masters in Electrical Engineering</div>
                <div>Specialized in Image Processing and Embedded Programming</div>
            </div>
        </div>

        <div class="resume-item d-flex flex-column flex-md-row">
            <div class="resume-content mr-auto">
                <h3 class="mb-0">
                    <a class="" href="http://www.wesleyan.edu/physics" target="_blank">
                        Wesleyan University, Middletown CT
                    </a>
                </h3>
                <div class="subheading mb-3">Bahcelor of Arts in Physics</div>
            </div>
        </div>
    </div>
</section>

<section class="resume-section p-3 p-lg-5 d-flex flex-column" id="about">
    <div class="my-auto">
        <h2 class="mb-4">About</h2>
        <p class="mb-5">A few questions that may be on your mind...</p>
        <ul>
            <li class="mb-5">
                <div class="mb-2">Q: Las Vegas, Chicago, LA? Where exactly are you based?</div>
                <div class="mb-2">A: I'm based out of Las Vegas. After living in several west coast cities (Seattle, San Fran, and LA), I decided Las Vegas was the best place to grow a consulting business...good weather, low overhead, not too much traffic. Best of all, the airport is easily accessible and there are cheap flights to most major US cities (more on that below).</div>
            </li>
            <li class="mb-5">
                <div class="mb-2">Q: So what's up with Chicago and LA?</div>
                <div class="mb-2">
                    <p class="mb-1">A: Chicago and LA are where most of my recent clients have been based. I lived in LA for several years and love the city, and I've been traveling to Chicago regularly the last 2 years to work onsite with a client there. Chicago has been growing on me with each trip and it's a place where I don't mind spending some time.</p>
                    <p class="mb-1">As you may have guessed I don't mind traveling occasionally to work on-site with a client.</p>
                </div>
            </li>
            <li class="mb-5">
                <div class="mb-2">Q: How can I contact you?</div>
                <div class="mb-2">
                    <p class="mb-1">A: Please shoot me an email or text and we can setup a time to chat about your project!</p>
                    <p class="mb-0">
                        <script type="text/javascript"> var name="peter"; var domain="@peltronic.com"; var txtstr=name + domain; document.write(''+txtstr+''); </script>
                    </p>
                </div>
            </li>
        </ul>
    </div>
</section>

<?php get_footer(); ?>

