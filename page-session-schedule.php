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
            <div class="container-lg py-4 py-md-5">
                <h1 class="text-white title"><?php the_title() ?></h1>
            </div>
        </div>
        <div class="bg-secondary-subtle">
            <div class="container-lg py-md-5 py-4 ps-3 pe-4 pe-md-5 bg-light-subtle">
                <div class="d-flex justify-content-between gap-5">
                    <div class="d-none d-md-flex flex-column gap-3 flex-no-wrap flex-shrink-0 flex-grow-0">
                        <img src="https://learn.bcpublicservice.gov.bc.ca/latww/latww2024/img/values/integrity-round.png" height="90" width="90" style="max-width: 8vw; max-height: 8vw;" class="object-fit-contain rounded-circle shadow-sm">
                        <img src="https://learn.bcpublicservice.gov.bc.ca/latww/latww2024/img/values/curiosity-round.png" height="90" width="90" style="max-width: 8vw; max-height: 8vw;" class="object-fit-contain rounded-circle shadow-sm">
                        <img src="https://learn.bcpublicservice.gov.bc.ca/latww/latww2024/img/values/service-round.png" height="90" width="90" style="max-width: 8vw; max-height: 8vw;" class="object-fit-contain rounded-circle shadow-sm">
                        <img src="https://learn.bcpublicservice.gov.bc.ca/latww/latww2024/img/values/passion-round.png" height="90" width="90" style="max-width: 8vw; max-height: 8vw;" class="object-fit-contain rounded-circle shadow-sm">
                        <img src="https://learn.bcpublicservice.gov.bc.ca/latww/latww2024/img/values/teamwork-round.png" height="90" width="90" style="max-width: 8vw; max-height: 8vw;" class="object-fit-contain rounded-circle shadow-sm">
                        <img src="https://learn.bcpublicservice.gov.bc.ca/latww/latww2024/img/values/accountability-round.png" height="90" width="90" style="max-width: 8vw; max-height: 8vw;" class="object-fit-contain rounded-circle shadow-sm">
                        <img src="https://learn.bcpublicservice.gov.bc.ca/latww/latww2024/img/values/courage-round.png" height="90" width="90" style="max-width: 8vw; max-height: 8vw;" class="object-fit-contain rounded-circle shadow-sm">
                    </div>
                    <div class="flex-grow-1 d-flex gap-5">
                        <div class="flex-column">
                            <div id="schedule">
                                <h2 class="mb-2">Schedule</h2>
                                <p>Select a session to get more details about the event and register to attend. </p>
                                <p><strong>All times are shown for the Pacific Time Zone. </strong></p>
                                
                                <?php get_template_part('template-parts/schedule') ?>


                            </div>
                            <div id="sessions" class="mt-md-5">
                                <h2>Sessions</h2>
                                <h3 class="text-bg-secondary rounded p-2 mt-4">Monday</h3>
                                <div class="row row-cols-1 row-cols-md-2 mt-3">
                                <?php $monday = get_children( array( 'post_type' => 'page', 'post_parent' => 8, 'orderby' => 'postorder', 'order' => 'ASC') ) ?>
                                <?php if( !empty( $monday ) ) : ?>
                                <?php foreach ( $monday as $event ) : ?>
                                <div class="col">

                                    <h4><?= $event->post_title ?></h4>
                                    <?php $start = get_post_meta($event->ID, 'startTime', TRUE) ?>
                                    <?php $end = get_post_meta($event->ID, 'endTime', TRUE) ?>
                                    <h5 class="text-dark-emphasis"><?= $start ?> to <?= $end ?></h5>
                                    <?php $shortDesc = get_post_meta($event->ID, 'shortDesc', TRUE) ?>
                                    <p><?= $shortDesc ?></p>
                                    <?php if(!empty($registrationLink)): ?>
                                    <?php $tt = get_the_title() ?>
                                    <a href="#<?= $registrationLink ?>" class="btn btn-primary">Register: <?= mb_strimwidth($tt, 0, 45, '...') ?></a>
                                    <?php else: ?>
                                        <div class="alert alert-warning">Not open for registration yet.</div>
                                    <?php endif ?>

                                </div>
                                <?php endforeach ?>
                                <?php else: ?>
                                <p>No events found.</p>
                                <?php endif ?>
                                    
                                </div>
                                <h3 class="text-bg-secondary rounded p-2 mt-4">Tuesday</h3>
                                <div class="row row-cols-1 row-cols-md-2 mt-3">
                                <?php $tuesday = get_children( array( 'post_type' => 'page', 'post_parent' => 17, 'orderby' => 'postorder', 'order' => 'ASC') ) ?>
                                <?php if( !empty( $tuesday ) ) : ?>
                                <?php foreach ( $tuesday as $event ) : ?>
                                <div class="col">

                                    <h4><?= $event->post_title ?></h4>
                                    <?php $start = get_post_meta($event->ID, 'startTime', TRUE) ?>
                                    <?php $end = get_post_meta($event->ID, 'endTime', TRUE) ?>
                                    <h5 class="text-dark-emphasis"><?= $start ?> to <?= $end ?></h5>
                                    <?php $shortDesc = get_post_meta($event->ID, 'shortDesc', TRUE) ?>
                                    <p><?= $shortDesc ?></p>
                                    <?php if(!empty($registrationLink)): ?>
                                    <?php $tt = get_the_title() ?>
                                    <a href="#<?= $registrationLink ?>" class="btn btn-primary">Register: <?= mb_strimwidth($tt, 0, 45, '...') ?></a>
                                    <?php else: ?>
                                        <div class="alert alert-warning">Not open for registration yet.</div>
                                    <?php endif ?>

                                </div>
                                <?php endforeach ?>
                                <?php else: ?>
                                <p>No events found.</p>
                                <?php endif ?>
                                </div>
                                <h3 class="text-bg-secondary rounded p-2 mt-4">Wednesday</h3>
                                <div class="row row-cols-1 row-cols-md-2 mt-3">
                                <?php $wednesday = get_children( array( 'post_type' => 'page', 'post_parent' => 19, 'orderby' => 'postorder', 'order' => 'ASC') ) ?>
                                <?php if( !empty( $wednesday ) ) : ?>
                                <?php foreach ( $wednesday as $event ) : ?>
                                <div class="col">

                                    <h4><?= $event->post_title ?></h4>
                                    <?php $start = get_post_meta($event->ID, 'startTime', TRUE) ?>
                                    <?php $end = get_post_meta($event->ID, 'endTime', TRUE) ?>
                                    <h5 class="text-dark-emphasis"><?= $start ?> to <?= $end ?></h5>
                                    <?php $shortDesc = get_post_meta($event->ID, 'shortDesc', TRUE) ?>
                                    <p><?= $shortDesc ?></p>
                                    <?php if(!empty($registrationLink)): ?>
                                    <?php $tt = get_the_title() ?>
                                    <a href="#<?= $registrationLink ?>" class="btn btn-primary">Register: <?= mb_strimwidth($tt, 0, 45, '...') ?></a>
                                    <?php else: ?>
                                        <div class="alert alert-warning">Not open for registration yet.</div>
                                    <?php endif ?>

                                </div>
                                <?php endforeach ?>
                                <?php else: ?>
                                <p>No events found.</p>
                                <?php endif ?>
                                </div>
                                <h3 class="text-bg-secondary rounded p-2 mt-4">Thursday</h3>
                                <div class="row row-cols-1 row-cols-md-2 mt-3">
                                <?php $thursday = get_children( array( 'post_type' => 'page', 'post_parent' => 21, 'orderby' => 'postorder', 'order' => 'ASC') ) ?>
                                <?php if( !empty( $thursday ) ) : ?>
                                <?php foreach ( $thursday as $event ) : ?>
                                <div class="col">

                                    <h4><?= $event->post_title ?></h4>
                                    <?php $start = get_post_meta($event->ID, 'startTime', TRUE) ?>
                                    <?php $end = get_post_meta($event->ID, 'endTime', TRUE) ?>
                                    <h5 class="text-dark-emphasis"><?= $start ?> to <?= $end ?></h5>
                                    <?php $shortDesc = get_post_meta($event->ID, 'shortDesc', TRUE) ?>
                                    <p><?= $shortDesc ?></p>
                                    <?php if(!empty($registrationLink)): ?>
                                    <?php $tt = get_the_title() ?>
                                    <a href="#<?= $registrationLink ?>" class="btn btn-primary">Register: <?= mb_strimwidth($tt, 0, 45, '...') ?></a>
                                    <?php else: ?>
                                        <div class="alert alert-warning">Not open for registration yet.</div>
                                    <?php endif ?>

                                </div>
                                <?php endforeach ?>
                                <?php else: ?>
                                <p>No events found.</p>
                                <?php endif ?>
                                </div>
                                <h3 class="text-bg-secondary rounded p-2 mt-4">Friday</h3>
                                <div class="row row-cols-1 row-cols-md-2 mt-3">
                                <?php $friday = get_children( array( 'post_type' => 'page', 'post_parent' => 23, 'orderby' => 'postorder', 'order' => 'ASC') ) ?>
                                <?php if( !empty( $friday ) ) : ?>
                                <?php foreach ( $friday as $event ) : ?>
                                <div class="col">

                                    <h4><?= $event->post_title ?></h4>
                                    <?php $start = get_post_meta($event->ID, 'startTime', TRUE) ?>
                                    <?php $end = get_post_meta($event->ID, 'endTime', TRUE) ?>
                                    <h5 class="text-dark-emphasis"><?= $start ?> to <?= $end ?></h5>
                                    <?php $shortDesc = get_post_meta($event->ID, 'shortDesc', TRUE) ?>
                                    <p><?= $shortDesc ?></p>
                                    <?php if(!empty($registrationLink)): ?>
                                    <?php $tt = get_the_title() ?>
                                    <a href="#<?= $registrationLink ?>" class="btn btn-primary">Register: <?= mb_strimwidth($tt, 0, 45, '...') ?></a>
                                    <?php else: ?>
                                        <div class="alert alert-warning">Not open for registration yet.</div>
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
            </div>
        </div>
    </div>
<?php
endwhile; // End of the loop.
get_footer();
