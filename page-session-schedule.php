<?php

/**
 * The template for displaying all single pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 * 
 * This all super-duper violates DRY as we've got a query for each day of the week
 * but it will never ever be more than 5 days and I prefer the verbosity to cleverness.
 * 
 */
get_header();
/* Start the Loop */
while (have_posts()) :
    the_post();

?>

    <div id="content">
        <div class="d-flex p-4 p-md-5 align-items-center bg-gov-blue bg-gradient" style="height: 12vh; min-height: 100px;">
            <div class="container-lg py-4 py-lg-5">
                <h1 class="text-white title"><?php the_title() ?></h1>
            </div>
        </div>
        <div class="bg-secondary-subtle">
            <div class="container-lg py-lg-5 p-4 px-lg-5 bg-light-subtle">
                <div id="schedule" class="row my-md-5">
                    <div class="col-lg-8 mb-4 mb-lg-0">
                        <h2 class="mb-2">L@WW 2025 Schedule</h2>
                        <p>Select a session to get more details about the event and register to attend. </p>
                        <p><strong>All times are shown for the Pacific Time Zone. </strong></p>
                    </div>
                    <!-- Sidebar Section -->
                    <div class="col-lg-4">
                        <div class="card shadow-sm rounded">
                            <div class="card-body fs-6">
                                <h3 class="card-title fs-4">Daily Newsletter</h3>
                                <p class="card-text">Receive daily updates highlighting the L@WW sessions of the day, along with relevant resources to help reinforce your learning or catch up on sessions you may have missed.</p>
                                <a href="https://submit.digital.gov.bc.ca/app/form/submit?f=fd03b54b-84aa-4a05-b5ff-c5536b733f57" class="btn btn-primary">Subscribe to the newsletter</a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php get_template_part('template-parts/schedule') ?>

            </div>
            <div class="d-md-flex d-none justify-content-center" style="height: 12rem;">
                <img src="https://learn.bcpublicservice.gov.bc.ca/latww/latww2025/img/latww-swoop.svg">
            </div>
            <div id="sessions" class="mt-lg-4">
                <h2>Sessions</h2>
                <h3 class="text-bg-secondary rounded p-2 mt-4">Monday</h3>
                <div class="row mx-0 row-cols-1 row-cols-md-2 mt-3">
                    <?php $monday = get_children(array('post_type' => 'page', 'post_parent' => 15, 'orderby' => 'menu_order', 'order' => 'ASC')) ?>
                    <?php if (!empty($monday)) : ?>
                        <?php foreach ($monday as $event) : ?>
                            <div class="col">

                                <h4><a class="text-decoration-none" href="/latww2025/monday/<?= $event->post_name ?>"><?= $event->post_title ?></a></h4>
                                <?php $start = get_post_meta($event->ID, 'startTime', TRUE) ?>
                                <?php $end = get_post_meta($event->ID, 'endTime', TRUE) ?>
                                <h5 class="text-dark-emphasis"><?= $start ?> to <?= $end ?></h5>
                                <?php $shortDesc = get_post_meta($event->ID, 'shortDesc', TRUE) ?>
                                <p><?= $shortDesc ?></p>
                                <?php
                                $eventDateTime = get_post_meta($event->ID, 'eventDateTime', TRUE);
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
                                <?php if ($current_timestamp < $datetime_timestamp): ?>
                                    <?php if (!empty($registrationLink) && empty($sessionFull)): ?>
                                        <?php $tt = get_the_title() ?>
                                        <a href="<?= $registrationLink ?>" class="btn btn-primary">Register: <?= mb_strimwidth($tt, 0, 45, '...') ?></a>
                                    <?php else: ?>
                                        <?php if (!empty($sessionFull)): ?>
                                            <div class="alert alert-secondary">This session is now full!</div>
                                        <?php else: ?>
                                            <div class="alert alert-secondary">Not open for registration yet.</div>
                                        <?php endif ?>
                                    <?php endif ?>
                                <?php else: ?>
                                    <div class="alert alert-secondary">No longer open for registration.</div>
                                <?php endif ?>

                            </div>
                        <?php endforeach ?>
                    <?php else: ?>
                        <p>No events found.</p>
                    <?php endif ?>

                </div>
                <h3 class="text-bg-secondary rounded p-2 mt-4">Tuesday</h3>
                <div class="row row-cols-1 row-cols-md-2 mt-3">
                    <?php $tuesday = get_children(array('post_type' => 'page', 'post_parent' => 17, 'orderby' => 'menu_order', 'order' => 'ASC')) ?>
                    <?php if (!empty($tuesday)) : ?>
                        <?php foreach ($tuesday as $event) : ?>
                            <div class="col">

                                <h4><a class="text-decoration-none" href="/latww2025/tuesday/<?= $event->post_name ?>"><?= $event->post_title ?></a></h4>
                                <?php $start = get_post_meta($event->ID, 'startTime', TRUE) ?>
                                <?php $end = get_post_meta($event->ID, 'endTime', TRUE) ?>
                                <h5 class="text-dark-emphasis"><?= $start ?> to <?= $end ?></h5>
                                <?php $shortDesc = get_post_meta($event->ID, 'shortDesc', TRUE) ?>
                                <p><?= $shortDesc ?></p>
                                <?php
                                $eventDateTime = get_post_meta($event->ID, 'eventDateTime', TRUE);
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
                                <?php if ($current_timestamp < $datetime_timestamp): ?>
                                    <?php if (!empty($registrationLink) && empty($sessionFull)): ?>
                                        <?php $tt = get_the_title() ?>
                                        <a href="<?= $registrationLink ?>" class="btn btn-primary">Register: <?= mb_strimwidth($tt, 0, 45, '...') ?></a>
                                    <?php else: ?>
                                        <?php if (!empty($sessionFull)): ?>
                                            <div class="alert alert-secondary">This session is now full!</div>
                                        <?php else: ?>
                                            <div class="alert alert-secondary">Not open for registration yet.</div>
                                        <?php endif ?>
                                    <?php endif ?>
                                <?php else: ?>
                                    <div class="alert alert-secondary">No longer open for registration.</div>
                                <?php endif ?>

                            </div>
                        <?php endforeach ?>
                    <?php else: ?>
                        <p>No events found.</p>
                    <?php endif ?>
                </div>
                <h3 class="text-bg-secondary rounded p-2 mt-4">Wednesday</h3>
                <div class="row row-cols-1 row-cols-md-2 mt-3">
                    <?php $wednesday = get_children(array('post_type' => 'page', 'post_parent' => 19, 'orderby' => 'menu_order', 'order' => 'ASC')) ?>
                    <?php if (!empty($wednesday)) : ?>
                        <?php foreach ($wednesday as $event) : ?>
                            <div class="col">

                                <h4><a class="text-decoration-none" href="/latww2025/wednesday/<?= $event->post_name ?>"><?= $event->post_title ?></a></h4>
                                <?php $start = get_post_meta($event->ID, 'startTime', TRUE) ?>
                                <?php $end = get_post_meta($event->ID, 'endTime', TRUE) ?>
                                <h5 class="text-dark-emphasis"><?= $start ?> to <?= $end ?></h5>
                                <?php $shortDesc = get_post_meta($event->ID, 'shortDesc', TRUE) ?>
                                <p><?= $shortDesc ?></p>
                                <?php
                                $eventDateTime = get_post_meta($event->ID, 'eventDateTime', TRUE);
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
                                <?php if ($current_timestamp < $datetime_timestamp): ?>
                                    <?php if (!empty($registrationLink) && empty($sessionFull)): ?>
                                        <?php $tt = get_the_title() ?>
                                        <a href="<?= $registrationLink ?>" class="btn btn-primary">Register: <?= mb_strimwidth($tt, 0, 45, '...') ?></a>
                                    <?php else: ?>
                                        <?php if (!empty($sessionFull)): ?>
                                            <div class="alert alert-secondary">This session is now full!</div>
                                        <?php else: ?>
                                            <div class="alert alert-secondary">Not open for registration yet.</div>
                                        <?php endif ?>
                                    <?php endif ?>
                                <?php else: ?>
                                    <div class="alert alert-secondary">No longer open for registration.</div>
                                <?php endif ?>

                            </div>
                        <?php endforeach ?>
                    <?php else: ?>
                        <p>No events found.</p>
                    <?php endif ?>
                </div>
                <h3 class="text-bg-secondary rounded p-2 mt-4">Thursday</h3>
                <div class="row row-cols-1 row-cols-md-2 mt-3">
                    <?php $thursday = get_children(array('post_type' => 'page', 'post_parent' => 21, 'orderby' => 'menu_order', 'order' => 'ASC')) ?>
                    <?php if (!empty($thursday)) : ?>
                        <?php foreach ($thursday as $event) : ?>
                            <div class="col">

                                <h4><a class="text-decoration-none" href="/latww2025/thursday/<?= $event->post_name ?>"><?= $event->post_title ?></a></h4>
                                <?php $start = get_post_meta($event->ID, 'startTime', TRUE) ?>
                                <?php $end = get_post_meta($event->ID, 'endTime', TRUE) ?>
                                <h5 class="text-dark-emphasis"><?= $start ?> to <?= $end ?></h5>
                                <?php $shortDesc = get_post_meta($event->ID, 'shortDesc', TRUE) ?>
                                <p><?= $shortDesc ?></p>
                                <?php
                                $eventDateTime = get_post_meta($event->ID, 'eventDateTime', TRUE);
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
                                <?php if ($current_timestamp < $datetime_timestamp): ?>
                                    <?php if (!empty($registrationLink) && empty($sessionFull)): ?>
                                        <?php $tt = get_the_title() ?>
                                        <a href="<?= $registrationLink ?>" class="btn btn-primary">Register: <?= mb_strimwidth($tt, 0, 45, '...') ?></a>
                                    <?php else: ?>
                                        <?php if (!empty($sessionFull)): ?>
                                            <div class="alert alert-secondary">This session is now full!</div>
                                        <?php else: ?>
                                            <div class="alert alert-secondary">Not open for registration yet.</div>
                                        <?php endif ?>
                                    <?php endif ?>
                                <?php else: ?>
                                    <div class="alert alert-secondary">No longer open for registration.</div>
                                <?php endif ?>
                            </div>
                        <?php endforeach ?>
                    <?php else: ?>
                        <p>No events found.</p>
                    <?php endif ?>
                </div>
                <h3 class="text-bg-secondary rounded p-2 mt-4">Friday</h3>
                <div class="row row-cols-1 row-cols-md-2 mt-3">
                    <?php $friday = get_children(array('post_type' => 'page', 'post_parent' => 23, 'orderby' => 'menu_order', 'order' => 'ASC')) ?>
                    <?php if (!empty($friday)) : ?>
                        <?php foreach ($friday as $event) : ?>
                            <div class="col">

                                <h4><a class="text-decoration-none" href="/latww2025/friday/<?= $event->post_name ?>"><?= $event->post_title ?></a></h4>
                                <?php $start = get_post_meta($event->ID, 'startTime', TRUE) ?>
                                <?php $end = get_post_meta($event->ID, 'endTime', TRUE) ?>
                                <h5 class="text-dark-emphasis"><?= $start ?> to <?= $end ?></h5>
                                <?php $shortDesc = get_post_meta($event->ID, 'shortDesc', TRUE) ?>
                                <p><?= $shortDesc ?></p>
                                <?php
                                $eventDateTime = get_post_meta($event->ID, 'eventDateTime', TRUE);
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
                                <?php if ($current_timestamp < $datetime_timestamp): ?>
                                    <?php if (!empty($registrationLink) && empty($sessionFull)): ?>
                                        <?php $tt = get_the_title() ?>
                                        <a href="<?= $registrationLink ?>" class="btn btn-primary">Register: <?= mb_strimwidth($tt, 0, 45, '...') ?></a>
                                    <?php else: ?>
                                        <?php if (!empty($sessionFull)): ?>
                                            <div class="alert alert-secondary">This session is now full!</div>
                                        <?php else: ?>
                                            <div class="alert alert-secondary">Not open for registration yet.</div>
                                        <?php endif ?>
                                    <?php endif ?>
                                <?php else: ?>
                                    <div class="alert alert-secondary">No longer open for registration.</div>
                                <?php endif ?>

                            </div>
                        <?php endforeach ?>
                    <?php else: ?>
                        <p>No events found.</p>
                    <?php endif ?>
                </div>
            </div>
        </div>
    </div>
    </div>
<?php
endwhile; // End of the loop.
get_footer();
