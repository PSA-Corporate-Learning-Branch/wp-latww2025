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
            <div id="schedule" class="container-lg py-lg-5 p-4 px-lg-5 bg-light-subtle">
                <div class="row my-md-5">
                    <div class="col-lg-8 mb-4 mb-lg-0">
                        <h2 class="mb-2">Live Session</h2>
                        <h3>Your Time to Ask and Learn</h3>
                        <p>This live session is your chance to get learning support from the Corporate Learning Branch. Join our panel for an hour of demos, practical tips, and answers to your questions about corporate learning.</p>
                        <p>Your Time to Ask and Learn is a casual, interactive drop-in session designed to give learners direct access to the Corporate Learning Branch. Participants can stay for as long as they need to ask questions, see short demos, and receive practical guidance on corporate learning tools, processes, and resources.</p>
                        <p>A panel of hosts, learning partners, technical specialists, and facilitators will offer tips, answer questions, and provide clarity on topics such as learning records, planning, registration, and navigating key learning platforms. The session is flexible, learner driven, and designed to support employees at any stage of their learning journey. </p>
                        <h4>Learning outcomes</h4>
                        <p>By the end of this session, learners will be able to: </p>
                        <ul>
                            <li>Navigate key corporate learning platforms, including Moodle, the Learning Hub, and the Employee Learning Management System.</li>
                            <li>Check their learning record, locate required resources, and understand where to find course information.</li>
                            <li>Register for courses and understand how to manage course-related tasks such as finding materials or adding items to their calendar.</li>
                            <li>Ask questions and receive real-time guidance or follow-up responses, with the full Q&A posted on the Learn at Work Week website.</li>
                        </ul>
                        <hr>
                        <div class="row">
                            <div class="col">
                                <h4>Tuesday session</h4>
                                <ul class="list-unstyled">
                                    <li><strong>Date:</strong> Tuesday, February 3, 2026</li>
                                    <li><strong>Start time:</strong> 10 a.m.</li>
                                    <li><strong>End time:</strong> 11 a.m.</li>
                                    <li><strong>Platform:</strong> Microsoft Teams</li>
                                </ul>
                                <a href="#" class="btn btn-primary">Register for the Tuesday session</a>
                            </div>
                            <div class="col">
                                <h4>Thursday session</h4>
                                <ul class="list-unstyled">
                                    <li><strong>Date:</strong> Thursday, February 5, 2026</li>
                                    <li><strong>Start time:</strong> 1:30 p.m.</li>
                                    <li><strong>End time:</strong> 2:30 p.m.</li>
                                    <li><strong>Platform:</strong> Microsoft Teams</li>
                                </ul>
                                <a href="#" class="btn btn-primary">Register for the Thursday session</a>
                            </div>
                        </div>
                        <p class="small text-muted text-center mt-5">All times shown in the Pacific Time Zone.</p>
                    </div>
                    <!-- Sidebar Section -->
                    <div class="col-lg-4">
                        <div class="card shadow-sm rounded">
                            <div class="card-body fs-6">
                                <h3 class="card-title fs-4">Choose how to use the time</h3>
                                <ul class="card-text">
                                    <li><strong>Calendar block:</strong> Show your commitment to learning by planning time to learn. Register in a session to block time in your calendar, then use the time to take any self-paced e-learning</li>
                                    <li><strong>Participation:</strong> Join the session to ask questions and get an introduction to the topic. Two session times are offered for maximum flexibility</li>
                                </ul>
                                <h3 class="card-title fs-4">Q&A</h3>
                                <p class="card-text">Questions asked during the session in the Q&A will be collected and addressed during the session or afterwards if you include your name in the post.</p>
                                <p class="card-text">The full Q&A will be posted on the L@WW website after the session for reference.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <?php
endwhile; // End of the loop.
get_footer();
