            <!-- Experience-->
            <section class="resume-section" id="experience-3">
                <div class="resume-section-content">

                    <h2 class="mb-5">Experience</h2>
                    <p class="mb-5">I have over 10 years experience writing software. As a professional full-stack web developer, I am passionate about building web applications using modern technologies and best practices. The list below highlights a few of the sites I've built for clients.</p>

                    <!-- Macmillan Learning -->
                    <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                        <div class="flex-grow-1">
                            <h3 class="mb-0">Full-Stack Node/React Developer</h3>
                            <div class="subheading mb-3"><a href="https://www.macmillanlearning.com/college/us/digital/achieve">Macmillan Learning</a></div>
                            <p>Contributed to the **Achieve** personalized learning platform, modernizing quiz and assessment modules used by thousands of students. Refactored tightly-coupled backend logic into clean, reusable Node.js libraries with unit tests, improving maintainability and reducing regression risk. Collaborated with cross-functional teams to deliver UI enhancements in React/Redux and optimize MySQL queries for faster response times.</p>
                        </div>
                        <div class="flex-shrink-0"><span class="text-primary">Jan 2022 - Sep 2025</span></div>
                    </div>

                    <!-- JMBM -->
                    <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                        <div class="flex-grow-1">
                            <h3 class="mb-0">Lead Full-Stack Laravel Developer</h3>
                            <div class="subheading mb-3"><a href="#">JMBM</a></div>
                            <p>Architected and delivered a full rebuild of the firm’s internal intranet platform, replacing an aging CMS with a modern Laravel-based system. Implemented a dynamic, searchable attorney directory with advanced filtering by practice area and office, and developed a role-based content editor that empowered non-technical staff to manage pages autonomously. Improved internal workflows and reduced maintenance overhead.</p>
                        </div>
                        <div class="flex-shrink-0"><span class="text-primary">Jan 2019 - Sep 2019</span></div>
                    </div>

                    <!-- Newlogix -->
                    <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                        <div class="flex-grow-1">
                        <h3 class="mb-0">Senior Web Developer/Architect</h3>
                        <div class="subheading mb-3"><a href="http://www.newlogix.com/">Newlogix Inc.</a></div>
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

                    <!-- TBD -->
                    <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                        <div class="flex-grow-1">
                            <h3 class="mb-0">Junior Web Designer</h3>
                            <div class="subheading mb-3">Shout! Media Productions</div>
                            <p>Podcasting operational change management inside of workflows to establish a framework. Taking seamless key performance indicators offline to maximise the long tail. Keeping your eye on the ball while performing a deep dive on the start-up mentality to derive convergence on cross-platform integration.</p>
                        </div>
                        <div class="flex-shrink-0"><span class="text-primary">July 2010 - December 2011</span></div>
                    </div>
                    <div class="d-flex flex-column flex-md-row justify-content-between">
                        <div class="flex-grow-1">
                            <h3 class="mb-0">Web Design Intern</h3>
                            <div class="subheading mb-3">Shout! Media Productions</div>
                            <p>Collaboratively administrate empowered markets via plug-and-play networks. Dynamically procrastinate B2C users after installed base benefits. Dramatically visualize customer directed convergence without revolutionary ROI.</p>
                        </div>
                        <div class="flex-shrink-0"><span class="text-primary">September 2008 - June 2010</span></div>
                    </div>
                </div>
            </section>

            <hr class="m-0" />

