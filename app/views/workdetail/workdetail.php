<!-- Hero Workpage Detail -->
<section id="hero-image">
    <div class="row">
        <div class="hero-image-workdetail col-lg-12 col-12">
            <img src="<?= BASE_URL; ?>/assets/img/hero-housing-management.svg" class="hero-image img-fluid" alt="">
        </div>
    </div>
</section>
<!-- End Hero Workpage Detail -->

<div class="container">

    <!-- Background And Client -->
    <section id="background-and-client">
        <div class="row">
            <div class="background-app col-lg-6 col-6">
                <div class="background-title">
                    Background
                </div>
                <div class="background-subtitle">
                    <?= $data['background-subtitle']; ?>
                </div>
            </div>
            <div class="client-app offset-lg-1 col-lg-4 col-4">
                <div class="title-on-sub-client">Client</div>
                <div class="sutitle-on-sub-client"><?= $data['client']; ?></div>
                <hr>
                <div class="title-on-sub-client">Dicipline</div>
                <div class="sutitle-on-sub-client"><?= $data['dicipline']; ?></div>
                <hr>
                <div class="title-on-sub-client">Product Designer</div>
                <div class="sutitle-on-sub-client"><?= $data['engineer-type']; ?></div>
                <hr>
                <div class="title-on-sub-client"><?= $data['engineer']; ?></div>
                <div class="sutitle-on-sub-client">Feri Winarta</div>
                <hr>
                <span class="share-socmed">
                    <span class="share">Share : </span>
                    <a href="http://">
                        <img alt="instagram.svg" src="<?= BASE_URL; ?>/assets/img/instagram.svg">
                    </a>
                    <a href="http://">
                        <img alt="facebook.svg" src="<?= BASE_URL; ?>/assets/img/facebook.svg">
                    </a>
                    <a href="http://">
                        <img alt="twitter.svg" src="<?= BASE_URL; ?>/assets/img/twitter.svg">
                    </a>
                </span>
            </div>
        </div>
    </section>
    <!-- End Background And Client -->
</div>

<!-- The Process -->
<section id="the-process">
    <div class="container">
        <div class="container-the-process">
            <div class="text-center title-the-process">The Process</div>
            <!-- process 1 dan 2 -->
            <div class="row sub-process">
                <div class="col-6 col-lg-6">
                    <div class="title-process">
                        1- Understanding
                    </div>
                    <div class="subtitle-process">
                        The process that is done first is to really understand what Stakeholders, Management and also users want from this application.
                        This is an important phase to ensure and understand how we can help the company achieve its goals.
                    </div>
                </div>
                <div class="col-6 col-lg-6">
                    <div class="title-process">
                        2- Research
                    </div>
                    <div class="subtitle-process">
                        After that, we start by conducting a competitive benchmark to identify what aspects are needed in this Housing Management product and find out the pros and cons of existing similar products.
                    </div>
                </div>
            </div>

            <!-- process 3 dan 4 -->
            <div class="row sub-process">
                <div class="col-6 col-lg-6">
                    <div class="title-process">
                        3- Wireframing
                    </div>
                    <div class="subtitle-process">
                        In this process, we create wireframes to visualize our ideas and also do a lot of discussion to gather initial design ideas and flow before going to the next stage of development.
                    </div>
                </div>
                <div class="col-6 col-lg-6">
                    <div class="title-process">
                        4- Visual Design
                    </div>
                    <div class="subtitle-process">
                        Once the wireframing and flow is complete, we proceed to convert the approved frame design into a hi-fi design, and at the same time create a style guide.
                        <br><br>
                        This style guide is very important to maintain the consistency of the design and can also be reused for further development.
                    </div>
                </div>
            </div>

            <!-- process 5 dan 6 -->
            <div class="row sub-process">
                <div class="col-6 col-lg-6">
                    <div class="title-process">
                        5- Development
                    </div>
                    <div class="subtitle-process">
                        The final design implementation process that has been made into a line of code so that the design can be used by users later.
                    </div>
                </div>
                <div class="col-6 col-lg-6">
                    <div class="title-process">
                        6- Test & Deployment
                    </div>
                    <div class="subtitle-process">
                        after the development phase is complete we conduct testing by the quality assurance team, after all really successful now is the time to deploy the application so that users can download the application and install it on their mobile devices
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- End The Process -->

<!-- Section The Result -->
<section id="the-results">
    <img src="<?= BASE_URL; ?>/assets/img/the-result-housing-management.svg" class="image-center" alt="">
</section>
<!-- End Section The Result -->