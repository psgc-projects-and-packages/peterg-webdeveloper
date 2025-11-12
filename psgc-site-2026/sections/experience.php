            <!-- Experience-->
            <section class="resume-section" id="experience">
                <div class="resume-section-content">

                    <h2 class="mb-5">Experience</h2>
                    <p class="mb-5">I have over 10 years experience writing software. As a professional full-stack web developer, I am passionate about building web applications using modern technologies and best practices. The list below highlights a few of the sites I've built for clients.</p>

                    <!-- Macmillan Learning -->
                    <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                        <div class="flex-grow-1">
                            <h3 class="mb-0">Full-Stack Node/React Developer</h3>
                            <div class="subheading mb-3"><a href="https://www.macmillanlearning.com/college/us/digital/achieve">Macmillan Learning <i class="fa-solid fa-external-link-alt fa-xs"></i></a></div>
                            <p>Contributed to the <strong><em>Achieve</em></strong> personalized learning platform, modernizing quiz and assessment modules used by thousands of students. Refactored tightly-coupled backend logic into clean, reusable Node.js libraries with unit tests, improving maintainability and reducing regression risk. Collaborated with cross-functional teams to deliver UI enhancements in React/Redux and optimize MySQL queries for faster response times.</p>
                        </div>
                        <div class="flex-shrink-0"><span class="text-primary">Jan 2022 - Sep 2025</span></div>
                    </div>

                    <!-- Taxaroo -->
                    <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                        <div class="flex-grow-1">
                            <h3 class="mb-0">Full-Stack Node/React Developer</h3>
                            <div class="subheading mb-3"><a href="https://www.taxaroo.com/">Taxaroo <i class="fa-solid fa-external-link-alt fa-xs"></i></a></div>
                            <p>Developed features for the Taxaroo SaaS platform for accounting professionals, enhancing core subscription and authentication systems that power the company's service. Implemented Stripe billing integration, strengthened secure login and KBA identity verification, and refactored backend logic for better maintainability. Delivered UI updates in React to improve account management and onboarding flows.</p>
                        </div>
                        <div class="flex-shrink-0"><span class="text-primary">Mar 2020 - Nov 2020</span></div>
                    </div>

                    <!-- JMBM -->
                    <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                        <div class="flex-grow-1">
                            <h3 class="mb-0">Lead Full-Stack Laravel Developer</h3>
                            <div class="subheading mb-3"><a href="#">JMBM</a></div>
                            <p>Architected and delivered a full rebuild of the LA-based law firm’s internal intranet platform, replacing an aging CMS with a modern Laravel-based system. Implemented a dynamic, searchable attorney directory with advanced filtering by practice area and office, and developed a role-based content editor that empowered non-technical staff to manage pages autonomously. Improved internal workflows and reduced maintenance overhead.</p>
                        </div>
                        <div class="flex-shrink-0"><span class="text-primary">Jan 2019 - Sep 2019</span></div>
                    </div>

                    <!-- Newlogix -->
                    <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                        <div class="flex-grow-1">
                            <h3 class="mb-0">Senior Web Developer/Architect</h3>
                            <div class="subheading mb-3"><a href="http://www.newlogix.com/">Newlogix Inc. <i class="fa-solid fa-external-link-alt fa-xs"></i></a></div>
                            <p>Product architect and lead responsible for end-to-end development of 2 major projects. The first, called <a href="http://www.logixsynergy.com">Synergy</a>, is a project management tool with CMS and CRM-type features customized for utility companies to help them manage schedules, budgets, and other items for the many vendors they work with. The second, called <a href="http://www.civixapp.com">Civix</a> is an online portal for submitting and managing permit or license applications. Bootstraped enginering team and managed developement, testing, and deployment operations.</p>
                            <?php
                            $_mdata = [
                                'imgUrl'=>'/assets/img/portfolio/newlogix/ls-project_list.png',
                                'desc'=>'Project Dashboard with sorting and search capabilities. Sidebar utilizes charts to analyze project data in meaningful ways.',
                                'alt'=>'Synergy Project Dashboard',
                                'title'=>'Project Dashboard',
                                'target'=>'modal-synergy_project_list',
                            ];
                            include("./_modal.php");

                            $_mdata = [
                                'imgUrl'=>'/assets/img/portfolio/newlogix/ls-fb-template_builder.png',
                                'desc'=>'The forms used to track project data can be constructed dynamically in an administration area. This page shows building a form from \'components\' (commonly used sub-forms). The user can drag & drop a component from the list on the right into the center area to add it to a form, which will then be available on the site (or possibly a mobile app) for filling out by contractors and engineers in the field.',
                                'title'=>'Form Builder',
                                'alt'=>'Form Builder',
                                'target'=>'modal-synergy_formbuilder',
                            ];
                            include("./_modal.php");
                            ?>
                        </div>
                        <div class="flex-shrink-0"><span class="text-primary">Apr 2016 - Nov 2018</span></div>
                    </div>

                    <!-- Axiom Images -->
                    <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                        <div class="flex-grow-1">
                            <h3 class="mb-0">Senior Web Developer</h3>
                            <div class="subheading mb-3"><a href="http://www.axiomimages.com/">Axiom Images <i class="fa-solid fa-external-link-alt fa-xs"></i></a></div>
                            <p>Implemented features such as dynamic playlist, and intelligent search filtering for leading aerial stock footage website. Work also included a complete re-write of the website's admin panel using Laravel MVC Framework.</p>
                            <?php
                            $_mdata = [
                                'imgUrl'=>'/assets/img/portfolio/axiom-images/ai-search-with_playlist.png',
                                'desc'=>'Search with sophisticated filtering UI (left), results (right), and customizable playlist (bottom).',
                                'title'=>'Filtered Search Results',
                                'alt'=>'Filtered Search Results',
                                'target'=>'modal-axiom_search_results',
                            ];
                            include("./_modal.php");
                            ?>
                        </div>
                        <div class="flex-shrink-0"><span class="text-primary">2014 - 2015</span></div>
                    </div>

                    <!-- ODOE -->
                    <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                        <div class="flex-grow-1">
                            <h3 class="mb-0">Lead Web Developer</h3>
                            <div class="subheading mb-3"><a href="https://www.onedayonearth.org/">One Day on Earth <i class="fa-solid fa-external-link-alt fa-xs"></i></a></div>
                            <p>One Day on Earth was an annual project founded by a Santa Monica-based filmmaker. Starting on October 10, 2010 (10/10/10), thousands of volunteers worldwide shot footage documenting life on that day. The 'archive' lets viewers browse and watch the videos by location, keywords, and categories. I built the archive site implementing features such as keyword-based search, commenting, and user ratings. I also integrated the site with the Vimeo API to support both video playback, as well as the ability to upload new videos.</p>
                            <?php
                            $_mdata = [
                                'imgUrl'=>'/assets/img/portfolio/odoe/odoe-map.png',
                                'desc'=>'Map-based UI showing locations where videos were shot on 10/10/2010. \'Cluster\' icons in green show groups of videos, which can be clicked on to zoom into.',
                                'title'=>'Archive map',
                                'alt'=>'One Day on Earth Archive Map',
                                'target'=>'modal-odoe_map',
                            ];
                            include("./_modal.php");
                            $_mdata = [
                                'imgUrl'=>'/assets/img/portfolio/odoe/odoe-video.png',
                                'desc'=>'Pop-out sidebar contains video player, along with other information about the work, plus a playlist of related videos at the bottom.',
                                'title'=>'One Day on Earth Sidebar with Embedded Video Player',
                                'alt'=>'Sidebar',
                                'target'=>'modal-odoe_sidebar',
                            ];
                            include("./_modal.php");
                            ?>
                        </div>
                        <div class="flex-shrink-0"><span class="text-primary">2010 - 2013</span></div>
                    </div>

                </div>
            </section>

            <hr class="m-0" />

