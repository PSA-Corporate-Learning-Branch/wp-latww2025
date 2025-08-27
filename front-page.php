<?php get_header() ?>
<div id="content">
    <!-- Banner Section -->
    <div class="banner-container">
        <div class="banner-image">
            <h1 class="visually-hidden">Your Career Journey: Upskilling at Every Stage</h1>
        </div>
    </div>
    <h2 class="mb-0 p-3 text-center text-white" style="background-color: #2f3442;">Learn @ Work Week: October 27 to 31, 2025</h2>
    <!-- Main Content Section -->
    <div class="container-lg px-4 px-md-5">
        <div class="row my-md-5">
            <!-- Main Content -->
            <div class="col-lg-8 mb-4 mb-lg-0">
                <h2>About Learn @ Work Week</h2>
                <p>Learn @ Work Week (L@WW) is a fully virtual event that aims to reach all BC Public Service employees. Learning activities raise awareness and encourage conversations about key topics relevant to everyone. </p>
                <h3>Theme: Your Career Journey: Upskilling at Every Stage</h3>
                <p>This theme focuses on how the BC Public Service can support employee learning goals throughout their entire career. It highlights the value of continuous learning and shows the many learning and development opportunities available to employees.</p>
                <p>Each session focuses on a different topic around career growth, from new employees through mid-career development, leadership opportunities and more. Join us to:</p>
                <ul>
                    <li>Explore tools, resources and strategies that support career growth within the BC Public Service
                    </li>
                    <li>Identify how skills, concepts, or approaches introduced during the sessions can support your development or career progression</li>
                </ul>
                <!-- Event Description Section -->
            </div>
            <!-- Sidebar Section -->
            <div class="col-lg-4">
                <div class="card shadow-sm rounded">
                    <div class="card-body fs-6">
                        <h3 class="card-title fs-4">Accessibility</h3>
                        <p class="card-text">All sessions include ASL interpretation and CART services.</p>
                        <!-- <a href="https://www.streamtext.net/player?event=bcpsa" target="_blank" class="btn btn-primary mb-3">Access CART services with Streamtext</a> -->
                        <p class="card-text">If you need any accommodations to participate in L@WW, please <a href="https://sfs7.gov.bc.ca/affwebservices/public/saml2sso?SPID=urn:ca:bc:gov:customerportal:prod">submit an AskMyHR service request</a> using the category "Corporate Learning".</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Schedule Section -->
    <div class="bg-dark-subtle">
        <div class="container-xl p-4 p-md-5">
            <h3 class="mb-2">Learn @ Work Week 2025 Schedule</h3>
            <p>Select a session to get more details about the event and register. </p>
            <p><strong>All times are shown for the Pacific Time Zone. </strong></p>
            <?php get_template_part('template-parts/schedule') ?>
        </div>
    </div>
    <!-- Keynote promo -->
    <div class="container-lg p-4 p-md-5">
        <div class="row">
            <div class="col-md-8">
                <?php $keynote = get_page(16) ?>
                <?php
                $eventDateTime = get_post_meta($keynote->ID, 'eventDateTime', TRUE);
                $iso8601_datetime = $eventDateTime;
                // Create a new DateTime object from the ISO8601 string
                $datetime = new DateTime($iso8601_datetime, new DateTimeZone('UTC'));
                // Convert to the "America/Vancouver" timezone
                $datetime->setTimezone(new DateTimeZone('America/Vancouver'));
                // Get the current time in the "America/Vancouver" timezone
                $current_time = new DateTime('now', new DateTimeZone('America/Vancouver'));
                // Convert both DateTime objects to timestamps
                $datetime_timestamp = $datetime->getTimestamp();
                $current_timestamp = $current_time->getTimestamp();
                ?>

                <h3><a class="text-decoration-none" href="/latww2025/monday/<?= $keynote->post_name ?>"><?= $keynote->post_title ?></a></h3>
                <h4 class="text-secondary-emphasis">Speaker: <?= $keynote->speakerOne ?>, <?= $keynote->speakerOneTitle ?></h4>
                <p><?= $keynote->shortDesc ?></p>
                <?php if ($current_timestamp < $datetime_timestamp): ?>
                    <?php if (!empty($keynote->registrationLink) && empty($keynote->sessionFull)): ?>
                        <?php $tt = get_the_title() ?>
                        <a href="<?= $keynote->registrationLink ?>" class="btn btn-primary">Register: <?= mb_strimwidth($tt, 0, 45, '...') ?></a>
                    <?php else: ?>
                        <?php if (!empty($keynote->sessionFull)): ?>
                            <div class="alert alert-secondary">This session is now full!</div>
                        <?php else: ?>
                            <div class="alert alert-secondary">Not open for registration yet.</div>
                        <?php endif ?>
                    <?php endif ?>
                <?php else: ?>
                    <div class="alert alert-secondary">No longer open for registration.</div>
                <?php endif ?>
            </div>
            <div class="col-md-4">
                <div class="d-flex justify-content-center align-items-center">
                    <img src="<?= $keynote->speakerOneImg ?>" height="300" width="300" class="rounded-circle shadow-sm mb-3" alt="<?= $keynote->speakerOne ?>" style="max-width: 20vw;">
                </div>
                <?php if (!empty($keynote->speakerOneQuote)): ?>
                    <figure>
                        <blockquote class="blockquote">
                            <p><?= $keynote->speakerOneQuote ?></p>
                        </blockquote>
                        <figcaption class="blockquote-footer text-center">
                            <?= $keynote->speakerOne ?><br>
                            <cite title="Source Title"><?= $keynote->speakerOneQuoteSource ?></cite>
                        </figcaption>
                    </figure>
                <?php endif ?>
            </div>
        </div>
    </div>


    <?php get_footer() ?>