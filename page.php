<?php

/**
 * The template for displaying all single pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */
get_header();
date_default_timezone_set('America/Vancouver');
/* Start the Loop */
while (have_posts()) :
    the_post();

    $start = get_post_meta(get_the_ID(), 'startTime', TRUE);
    $end = get_post_meta(get_the_ID(), 'endTime', TRUE);
    $dayOfWeek = get_post_meta(get_the_ID(), 'dayOfWeek', TRUE);
    $shortDesc = get_post_meta(get_the_ID(), 'shortDesc', TRUE);
    $abstract = get_post_meta(get_the_ID(), 'abstract', TRUE);
    $platform = get_post_meta(get_the_ID(), 'platform', TRUE);
    $registrationLink = get_post_meta(get_the_ID(), 'registrationLink', TRUE);
    $sessionFull = get_post_meta(get_the_ID(), 'sessionFull', TRUE);
    $slideDeck = get_post_meta(get_the_ID(), 'slideDeck', TRUE);
    $toBeRecorded = get_post_meta(get_the_ID(), 'toBeRecorded', TRUE);
    $resourceOneName = get_post_meta(get_the_ID(), 'resourceOneName', TRUE);
    $resourceOneLink = get_post_meta(get_the_ID(), 'resourceOneLink', TRUE);
    $resourceTwoName = get_post_meta(get_the_ID(), 'resourceTwoName', TRUE);
    $resourceTwoLink = get_post_meta(get_the_ID(), 'resourceTwoLink', TRUE);
    $resourceThreeName = get_post_meta(get_the_ID(), 'resourceThreeName', TRUE);
    $resourceThreeLink = get_post_meta(get_the_ID(), 'resourceThreeLink', TRUE);
    $resourceFourName = get_post_meta(get_the_ID(), 'resourceFourName', TRUE);
    $resourceFourLink = get_post_meta(get_the_ID(), 'resourceFourLink', TRUE);
    $eventDateTime = get_post_meta(get_the_ID(), 'eventDateTime', TRUE);
    $recordingURL = get_post_meta(get_the_ID(), 'recordingURL', TRUE);
    $recordingVTT = get_post_meta(get_the_ID(), 'recordingVTT', TRUE);
    $recordingPoster = get_post_meta(get_the_ID(), 'recordingPoster', TRUE);
    $recordingTranscript = get_post_meta(get_the_ID(), 'recordingTranscript', TRUE);

    $iso8601_datetime = $eventDateTime;
    // Create a new DateTime object from the ISO8601 string
    $datetime = new DateTime($iso8601_datetime, new DateTimeZone('UTC'));
    // Convert to the "America/Vancouver" timezone
    $datetime->setTimezone(new DateTimeZone('America/Vancouver'));
    // Get the current time in the "America/Vancouver" timezone
    $current_time = new DateTime('now', new DateTimeZone('America/Vancouver'));
    // Convert both DateTime objects to timestamps
    $datetime_timestamp = $datetime->getTimestamp();
    $current_timestamp = $current_time->getTimestamp(); ?> 
    <div id="content">
    <div class="d-flex p-4 p-md-5 align-items-center bg-gov-blue bg-gradient" style="min-height: 100px;">
        <div class="container-lg">
            <h1 class="text-white title"><?php the_title() ?></h1>
        </div>
    </div>
    <div class="bg-secondary-subtle">
        <div class="container-lg p-md-5 p-4 bg-light-subtle">
            <div id="main">
                <?= the_content() ?>
            </div>
        </div>
    </div>
</div> <?php
endwhile; // End of the loop.
get_footer();