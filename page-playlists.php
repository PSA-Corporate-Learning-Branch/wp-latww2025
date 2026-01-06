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
                <h2 class="mb-2">About the playlists</h2>
                <div class="row my-md-5">
                    <div class="col-lg-8 mb-4 mb-lg-0">
                        <p>L@WW: Your Time to Learn is an opportunity for all employees to dedicate focused time to their learning. </p>
                        <p>Throughout the week, we invite you to explore a curated selection of self-paced learning playlists designed to support a range of interests. Each playlist highlights a short list of recommended learning activities, organized by theme or topic. Whether you want to build foundational skills, strengthen inclusive leadership practices or focus on a specific area of development, you can choose the playlist that best fits your learning goals.</p>
                        <p>You are encouraged to make time during the week to complete any course or activity that supports your learning. There is no expectation to complete every item in a playlist, even spending 10 minutes a week can make a difference! </p>
                        <p>We invite you to review the playlists, select what is most meaningful to you and make this week your time to learn.</p>
                    </div>
                    <!-- Sidebar Section -->
                    <div class="col-lg-4">
                        <div class="card shadow-sm rounded">
                            <div class="card-body fs-6">
                                <h3 class="card-title fs-4">Learning tips</h3>
                                <p class="card-text">
                                    These playlists will remain available on the Learn @ Work Week website, so you can return to a playlist at any time to build on what you learned this week or explore new topics.</p>
                                <p class="card-text">Break longer courses into manageable chunks that fit your schedule. For example, during Learn @ Work Week, start with the first module. Then block time in your calendar to complete the remaining modules later. </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-3 mb-5">
                    <div class="col-md-4">
                        <ul class="nav nav-pills flex-column mb-2 mb-md-0" id="playlists" role="tablist" aria-orientation="vertical">
                            <li class="nav-item" role="presentation"><button class="nav-link active" id="playlist1-tab" data-bs-toggle="tab" data-bs-target="#playlist1" role="tab" aria-controls="playlist1" aria-selected="true">1. Plan, Prepare, Learn</button></li>
                            <li class="nav-item" role="presentation"><button class="nav-link" id="playlist2-tab" data-bs-toggle="tab" data-bs-target="#playlist2" role="tab" aria-controls="playlist2" aria-selected="false">2. Leadership</button></li>
                            <li class="nav-item" role="presentation"><button class="nav-link" id="playlist3-tab" data-bs-toggle="tab" data-bs-target="#playlist3" role="tab" aria-controls="playlist3" aria-selected="false">3. Ethics and Respect at Work</button></li>
                            <li class="nav-item" role="presentation"><button class="nav-link" id="playlist4-tab" data-bs-toggle="tab" data-bs-target="#playlist4" role="tab" aria-controls="playlist4" aria-selected="false">4. Building Inclusion</button></li>
                            <li class="nav-item" role="presentation"><button class="nav-link" id="playlist5-tab" data-bs-toggle="tab" data-bs-target="#playlist5" role="tab" aria-controls="playlist5" aria-selected="false">5. Essential Skills</button></li>
                        </ul>
                    </div>
                    <div class="col-md-8 pl-md-0">
                        <div class="nav-pills tab-content" id="playlistsContent">
                            <div class="tab-pane fade show active" id="playlist1" role="tabpanel" aria-labelledby="playlist1-tab" tabindex="0">
                                <h3 class="mt-0">Playlist 1: Plan, Prepare, Learn</h3>
                                <p>Taking time to prepare isn't separate from learning—it's a key step that sets you up for success. This playlist guides you through reviewing your progress, updating your goals, and planning ahead so the time you spend learning is focused and meaningful. Investing in preparation builds a strong foundation and ensures your efforts lead to the growth and skills that matter most to you.</p>
                                <h4>Time commitment</h4>
                                <p>How much time do you have? Here are some options for how to use your time:</p>
                                <ul>
                                    <li><strong>10 minutes:</strong> Read the short journal article about self-regulated learning or review your learning record</li>
                                    <li><strong>20 minutes:</strong> Learn how (and why) to block time for learning in your calendar and/or schedule time to complete your foundational learning</li>
                                    <li><strong>30 minutes:</strong> Brainstorm some learning goals and/or add them to your PDP profile</li>
                                    <li><strong>2 hours:</strong> Complete the full playlist of activities</li>
                                </ul>
                                <h4 class="mb-0">1. Understand how preparation supports learning</h4>
                                <p class="small text-muted"><i class="bi bi-clock me-2"></i>Time: 5&ndash;7 min</p>
                                <p><a href="https://files.eric.ed.gov/fulltext/EJ1126934.pdf" target="_blank" rel="noopener noreferrer">Read this short article</a> to learn how strong preparation helps you become a more effective learner. The authors explain how successful learners take time to think about the task, set goals, and make a plan before they begin. As you read, notice any strategies you might want to try as you prepare for your own learning.</p>
                                <h4 class="mb-0">2. Review your learning record</h4>
                                <p class="small text-muted"><i class="bi bi-clock me-2"></i>Time: 10&ndash;15 min</p>
                                <p>Open <a href="https://learning.gov.bc.ca/psc/CHIPSPLM/EMPLOYEE/ELM/c/LM_OD_EMPLOYEE_FL.LM_MYCOURSES_FL.GBL?Page=LM_MYCOURSES_FL&Action=U&ForceSearch=Y&TargetFrameName=None" target="_blank" rel="noopener noreferrer">your learning record</a> and note any unfinished courses or upcoming deadlines. Choose one or two priority items to schedule this week.</p>
                                <h4 class="mb-0">3. Block dedicated learning time in your calendar</h4>
                                <p class="small text-muted"><i class="bi bi-clock me-2"></i>Time: 20&ndash;30 min</p>
                                <p>Add recurring learning blocks to your calendar (Check out the <a href="https://bcgov.sharepoint.com/SitePages/Tech-Tuesday--the-return-of-the-schedule.aspx?web=1" target="_blank" rel="noopener noreferrer">Tech Tuesday Outlook session</a> for tips). Visit the <a href="/latww2025/how-to-register/">L@WW How to register page</a> to learn how to add courses to your Outlook calendar.</p>
                                <h4 class="mb-0">4. Review Mandatory & Foundational Learning</h4>
                                <p class="small text-muted"><i class="bi bi-clock me-2"></i>Time: 15&ndash;20 min</p>
                                <p>Review the <a href="https://corporatelearning.gww.gov.bc.ca/learninghub/foundational-corporate-learning/" target="_blank" rel="noopener noreferrer">Mandatory and Foundational Learning page on the LearningHub</a>. Identify items that apply to your role and decide which ones you will complete next.</p>
                                <h4 class="mb-0">5. Set a personal learning goal</h4>
                                <p class="small text-muted"><i class="bi bi-clock me-2"></i>Time: 30 min</p>
                                <p>Check out the <a href="https://www2.gov.bc.ca/gov/content/careers-myhr/all-employees/career-development/performancedevelopment/goal-setting-resources" target="_blank" rel="noopener noreferrer">goal setting resources</a>. Reflect on what skills you want to build in the next few months and write down 1 to 3 clear learning goals.</p>
                                <h4 class="mb-0">6. Add Learning Goals to Your Performance Development Plan</h4>
                                <p class="small text-muted"><i class="bi bi-clock me-2"></i>Time: 30 min</p>
                                <p>Update <a href="https://performance.gov.bc.ca/login" target="_blank" rel="noopener noreferrer">your PDP</a> with new learning goals or courses that support your development priorities.</p>

                            </div>
                            <div class="tab-pane fade" id="playlist2" role="tabpanel" aria-labelledby="playlist2-tab" tabindex="0">
                                <h3 class="mt-0">Playlist 2: Leadership</h3>
                                <p>Build on your leadership foundation with short, practical lessons designed for current and aspiring people leaders in the BC Public Service. This playlist introduces essential topics such as leading in the BCPS, change leadership, coaching, conflict competence and effective communication. Each self-paced course offers clear, actionable ideas you can apply in your day‑to‑day work while continuing to grow your leadership impact over time.</p>
                                <h4>Time commitment</h4>
                                <p>How much time do you have? Here are some options for how to use your time:</p>
                                <ul>
                                    <li><strong>10 minutes:</strong> Complete one microlesson from one of the courses</li>
                                    <li><strong>30 minutes:</strong> Complete one full course: Intro to Leading in the BCPS or Intro to Effective Communication</li>
                                    <li><strong>1 hour:</strong> Complete one full course: Intro to Change Leadership, Intro to Coaching or Intro to Conflict Competence</li>
                                    <li><strong>4 hours:</strong> Complete the full playlist of courses</li>
                                </ul>
                                <h4 class="mb-0">1. Intro to Leading in the BCPS</h4>
                                <p class="small text-muted"><i class="bi bi-clock me-2"></i>Time: 30 min</p>
                                <p>The <a href="https://corporatelearning.gww.gov.bc.ca/learninghub/course/intro-leading-bcps/" target="_blank" rel="noopener noreferrer">Intro to Leading in the BCPS</a> eLearning offers an accessible introduction to what makes leadership in the BC Public Service distinct. It shares practical insights from experienced leaders and provides a strong starting point for further learning.</p>
                                <h4 class="mb-0">2. Intro to Effective Communication</h4>
                                <p class="small text-muted"><i class="bi bi-clock me-2"></i>Time: 30 min</p>
                                <p>The <a href="https://corporatelearning.gww.gov.bc.ca/learninghub/course/intro-effective-communication/" target="_blank" rel="noopener noreferrer">Intro to Effective Communication</a> eLearning focuses on the communication practices that support strong and effective leadership. It offers useful strategies you can apply in your day-to-day interactions and continue to strengthen as part of your professional development.</p>
                                <h4 class="mb-0">3. Intro to Coaching</h4>
                                <p class="small text-muted"><i class="bi bi-clock me-2"></i>Time: 60 min</p>
                                <p>The <a href="https://corporatelearning.gww.gov.bc.ca/learninghub/course/intro-coaching/" target="_blank" rel="noopener noreferrer">Intro to Coaching</a> microlessons introduce the principles of coaching and its role as a core leadership skill. The series offers accessible, actionable ideas you can apply immediately and continue to develop over time.</p>
                                <h4 class="mb-0">4. Intro to Conflict Competence</h4>
                                <p class="small text-muted"><i class="bi bi-clock me-2"></i>Time: 60 min</p>
                                <p>The <a href="https://corporatelearning.gww.gov.bc.ca/learninghub/course/intro-conflict-competence/" target="_blank" rel="noopener noreferrer">Intro to Conflict Competence</a> set of self-paced lessons invites you to reflect on your relationship to conflict and your responsibilities as a leader. You will explore practical approaches for navigating conflict more effectively in a variety of workplace situations.</p>
                                <h4 class="mb-0">5. Intro to Change Leadership</h4>
                                <p class="small text-muted"><i class="bi bi-clock me-2"></i>Time: 60 min</p>
                                <p>The <a href="https://corporatelearning.gww.gov.bc.ca/learninghub/course/intro-change-leadership/" target="_blank" rel="noopener noreferrer">Intro to Change Leadership</a> series of short virtual microlessons helps you build a foundational understanding of change leadership at your own pace. You will explore why leading change is a core leadership skill and how you can begin strengthening it.</p>


                            </div>
                            <div class="tab-pane fade" id="playlist3" role="tabpanel" aria-labelledby="playlist3-tab" tabindex="0">
                                <h3 class="mt-0">Playlist 3: Ethics and Respect at Work</h3>
                                <p>Build the skills and knowledge to create a workplace where everyone feels valued and supported. This playlist highlights practical approaches to acting with integrity, fostering respect, navigating workplace culture, and making ethical decisions. Each resource offers tools you can apply in your daily work to strengthen your team and contribute to a positive, inclusive environment.</p>
                                <h4>Time commitment</h4>
                                <p>How much time do you have? Here are some options for how to use your time:</p>
                                <ul>
                                    <li><strong>10 minutes:</strong> Review the Standards of Conduct or complete one activity in one of the pathways</li>
                                    <li><strong>30 minutes:</strong> Complete one full course: Orientation to Psychological Health and Safety in the Workplace or Addressing Discrimination, Bullying and Harassment in the Workplace</li>
                                    <li><strong>2 hours:</strong> Complete the Ethics for Everyone course</li>
                                    <li><strong>3.5+ hours:</strong> Complete the full playlist of activities</li>
                                </ul>
                                <h4 class="mb-0">1. Review the Standards of Conduct for BC Public Service employees</h4>
                                <p class="small text-muted"><i class="bi bi-clock me-2"></i>Time: 10 min</p>
                                <p>Review the <a href="https://www2.gov.bc.ca/gov/content?id=0F130A55BFDD4DA1B0ED7FA0AC8D3041" target="_blank" rel="noopener noreferrer">Standards of Conduct</a> to understand how they guide your responsibilities as a BC Public Service employee and shape expectations for professional behaviour. Use Your Time to Learn during L@WW to reflect on how these standards apply to your day-to-day decisions and interactions.</p>
                                <h4 class="mb-0">2. Respectful Workplace Curated Pathway</h4>
                                <p class="small text-muted"><i class="bi bi-clock me-2"></i>Time: 15+ min</p>
                                <p>The <a href="https://corporatelearning.gww.gov.bc.ca/learninghub/course/respectful-workplace/" target="_blank" rel="noopener noreferrer">Respectful Workplace Curated Pathway</a> is a comprehensive pathway on building respectful workplaces. It takes only a few minutes to look through the steps and add it to your learning goals. You are not expected to complete the full collection during Learn @ Work Week. Registering now gives you a clear goal you can return to throughout the year.</p>
                                <h4 class="mb-0">3. Orientation to Psychological Health and Safety in the Workplace</h4>
                                <p class="small text-muted"><i class="bi bi-clock me-2"></i>Time: 22 min</p>
                                <p>The <a href="https://corporatelearning.gww.gov.bc.ca/learninghub/course/orientation-psychological-health-safety-workplace/" target="_blank" rel="noopener noreferrer">Orientation to Psychological Health and Safety in the Workplace</a> course highlights the essentials of psychological health and safety, including key psychosocial factors and the shared responsibilities of employers and employees. Taking time for this learning during Learn at Work Week helps you spot psychosocial hazards and support a healthier, safer workplace.</p>
                                <h4 class="mb-0">4. Addressing Discrimination, Bullying and Harassment in the Workplace</h4>
                                <p class="small text-muted"><i class="bi bi-clock me-2"></i>Time: 30 min</p>
                                <p>The <a href="https://corporatelearning.gww.gov.bc.ca/learninghub/course/addressing-discrimination-bullying-harassment-workplace/" target="_blank" rel="noopener noreferrer">Addressing Discrimination, Bullying and Harassment in the Workplace</a> course focuses on workplace policies and regulations, as set in the Standards of Conduct, Collective Agreement and WorkSafe BC. By making time for this learning during L@WW, you strengthen your understanding of these expectations so you can work with clarity, confidence and consistency in your role.</p>
                                <h4 class="mb-0">5. Ethics for Everyone</h4>
                                <p class="small text-muted"><i class="bi bi-clock me-2"></i>Time: 2 hours</p>
                                <p>The <a href="https://corporatelearning.gww.gov.bc.ca/learninghub/course/ethics-everyone/" target="_blank" rel="noopener noreferrer">Ethics for Everyone</a> course supports public servants in making ethical choices by helping them recognize unethical conduct, potential conflicts of interest, and situations that call for speaking up. Setting aside time for this learning strengthens your ability to act with integrity in your day-to-day work, reinforcing the trust the public places in all of us.</p>

                            </div>
                            <div class="tab-pane fade" id="playlist4" role="tabpanel" aria-labelledby="playlist4-tab" tabindex="0">
                                <h3 class="mt-0">Playlist 4: Building Inclusion</h3>
                                <p>This playlist brings together key learning that supports more inclusive and culturally aware workplaces across the BC Public Service. The collection is broad, so you are not expected to complete everything. Instead, use your time to learn to choose the pieces that align with your role and set meaningful learning goals for the months ahead.</p>
                                <h4>Time commitment</h4>
                                <p>How much time do you have? Here are some options for how to use your time:</p>
                                <ul>
                                    <li><strong>10 minutes:</strong> Read the Writing Guide for Indigenous Content or complete one activity in one of the pathways</li>
                                    <li><strong>30 minutes:</strong> Complete the Diversity and Inclusion Essentials course</li>
                                    <li><strong>1 hour:</strong> Complete the Inclusive Language course</li>
                                    <li><strong>2.5+ hours:</strong> Complete the full playlist of activities</li>
                                </ul>
                                <h4 class="mb-0">1. Writing Guide for Indigenous Content</h4>
                                <p class="small text-muted"><i class="bi bi-clock me-2"></i>Time: 10 min</p>
                                <p>The <a href="https://www2.gov.bc.ca/gov/content/governments/services-for-government/service-experience-digital-delivery/web-content-development-guides/web-style-guide/writing-guide-for-indigenous-content" target="_blank" rel="noopener noreferrer">Writing Guide for Indigenous Content</a> supports writers in creating content that respects the cultural integrity of Indigenous Peoples and reflects the goals of reconciliation through recognition of Indigenous rights. Take a few minutes to review the guide and reflect on how its principles apply to your work.</p>
                                <h4 class="mb-0">2. Basics of Diversity in the BCPS Pathway</h4>
                                <p class="small text-muted"><i class="bi bi-clock me-2"></i>Time: 15+ min</p>
                                <p>The <a href="https://corporatelearning.gww.gov.bc.ca/learninghub/course/basics-diversity-bcps/" target="_blank" rel="noopener noreferrer">Basics of Diversity in the BCPS Pathway</a> introduces key concepts that shape the BC Public Service's commitment to diversity and inclusion. Take a few minutes to scan the steps, register and/or add the pathway to your learning goals. </p>
                                <h4 class="mb-0">3. Neurodiversity and Experiences of Neurodivergent People Pathway</h4>
                                <p class="small text-muted"><i class="bi bi-clock me-2"></i>Time: 15+ min</p>
                                <p>The <a href="https://corporatelearning.gww.gov.bc.ca/learninghub/course/neurodiversity-experiences-neurodivergent-people/" target="_blank" rel="noopener noreferrer">Neurodiversity and Experiences of Neurodivergent People Pathway</a> supports an inclusive workplace culture by increasing awareness and understanding about neurodiversity and how some neurodivergent people experience the world, and the workplace. Take a few minutes to scan the steps, register and/or add the pathway to your learning goals.</p>
                                <h4 class="mb-0">4. Remove Barriers to Shift Culture Pathway</h4>
                                <p class="small text-muted"><i class="bi bi-clock me-2"></i>Time: 15+ min</p>
                                <p>The <a href="https://corporatelearning.gww.gov.bc.ca/learninghub/course/remove-barriers-shift-culture/ " target="_blank" rel="noopener noreferrer">Remove Barriers to Shift Culture Pathway</a> introduces practical, everyday actions you can take to be an effective ally and help remove barriers in the workplace. Take a few minutes to scan the steps, register and/or add the pathway to your learning goals.</p>
                                <h4 class="mb-0">5. Consultation and Cooperation in the BC Public Service Pathway</h4>
                                <p class="small text-muted"><i class="bi bi-clock me-2"></i>Time: 15+ min</p>
                                <p>The <a href="https://corporatelearning.gww.gov.bc.ca/learninghub/course/consultation-cooperation-bc-public-service/" target="_blank" rel="noopener noreferrer">Consultation and Cooperation in the BC Public Service Pathway</a> aims to provide BC Public Service employees with foundational knowledge of consultation and co-operation, particularly in the complex and evolving context of aligning laws with the UN Declaration on the Rights of Indigenous Peoples. Take a few minutes to scan the steps, register and/or add the pathway to your learning goals.</p>
                                <h4 class="mb-0">6. Diversity and Inclusion Essentials</h4>
                                <p class="small text-muted"><i class="bi bi-clock me-2"></i>Time: 25 min</p>
                                <p>In <a href="https://corporatelearning.gww.gov.bc.ca/learninghub/course/diversity-inclusion-essentials/" target="_blank" rel="noopener noreferrer">Diversity and Inclusion Essentials</a>, build a strong foundation in diversity and inclusion by learning how the BC Public Service defines these concepts and the policies and legislation that support them. This eLearning course also shows how diversity and inclusion connect to our shared values and shape everyday decisions in the workplace.</p>
                                <h4 class="mb-0">7. Inclusive Language</h4>
                                <p class="small text-muted"><i class="bi bi-clock me-2"></i>Time: 60 min</p>
                                <p>In the <a href="https://corporatelearning.gww.gov.bc.ca/learninghub/course/inclusive-language/" target="_blank" rel="noopener noreferrer">Inclusive Language</a> course, strengthen your communication skills by exploring the foundations of inclusive language in this course. You will examine key concepts, understand important nuances and practise approaches that support more respectful and inclusive interactions at work.</p>

                            </div>
                            <div class="tab-pane fade" id="playlist5" role="tabpanel" aria-labelledby="playlist5-tab" tabindex="0">
                                <h3 class="mt-0">Playlist 5: Essential Skills</h3>
                                <p>Get the essential skills every BC Public Service employee needs to work effectively and confidently. This playlist includes practical, foundational courses to help you succeed in a modern workplace. Learn how to create accessible documents with UPLIFT, get started with Microsoft 365, and build your understanding of change management, Lean principles, and project management fundamentals. Plus, explore AI fundamentals for public servants to understand opportunities, risks, and strategies for the future. These short, focused courses give you tools you can apply right away to strengthen your skills and stay ahead.</p>
                                <h4>Time commitment</h4>
                                <p>How much time do you have? Here are some options for how to use your time:</p>
                                <ul>
                                    <li><strong>10 minutes:</strong> Review the Apolitical AI Fundamentals course details and schedule time in your calendar to complete the full course</li>
                                    <li><strong>1 hour:</strong> Complete one full course: Lean Foundations or Getting Started: Microsoft 365</li>
                                    <li><strong>2 hours:</strong> Complete one full course: Change Management Foundations eLearning, UPLIFT: Accessible Documents Training or PM 100: Project Foundations</li>
                                    <li><strong>13 hours:</strong> Learning marathon! Complete the full playlist of courses</li>
                                </ul>
                                <h4 class="mb-0">1. Getting Started: Microsoft 365</h4>
                                <p class="small text-muted"><i class="bi bi-clock me-2"></i>Time: 60 min</p>
                                <p>If you want to build confidence with the basics of M365 digital tools, explore the <a href="https://corporatelearning.gww.gov.bc.ca/learninghub/course/getting-started-microsoft-365/" target="_blank" rel="noopener noreferrer">selection of Getting Started sessions</a> and choose the ones that match your needs. Review the available sessions, register for an upcoming session or watch a recording of a previous session.</p>
                                <h4 class="mb-0">2. Lean Foundations</h4>
                                <p class="small text-muted"><i class="bi bi-clock me-2"></i>Time: 60&ndash;90 min</p>
                                <p>In <a href="https://corporatelearning.gww.gov.bc.ca/learninghub/course/lean-foundations/" target="_blank" rel="noopener noreferrer">Lean Foundations</a>, learn practical ways to improve efficiency and add value in your day-to-day work. This course introduces the Lean methodology and key tools that support continuous improvement. Review the course details, register and plan a time to complete the course. </p>
                                <h4 class="mb-0">3. Change Management Foundations eLearning</h4>
                                <p class="small text-muted"><i class="bi bi-clock me-2"></i>Time: 2 hours</p>
                                <p>In the <a href="https://corporatelearning.gww.gov.bc.ca/learninghub/course/change-management-foundations-elearning/" target="_blank" rel="noopener noreferrer">Change Management Foundations eLearning</a>, explore how change affects people and learn the core principles of effective change management. This eLearning covers four key areas: an introduction to change, the change management process, change sponsorship, and change communication. Review the course details, register and plan a time to complete the course. </p>
                                <h4 class="mb-0">4. UPLIFT: Accessible Documents Training</h4>
                                <p class="small text-muted"><i class="bi bi-clock me-2"></i>Time: 2 hours</p>
                                <p>In <a href="https://corporatelearning.gww.gov.bc.ca/learninghub/course/uplift-accessible-documents-training/" target="_blank" rel="noopener noreferrer">UPLIFT: Accessible Documents Training</a>, learn how to create accessible Microsoft documents using the UPLIFT guidelines, which focus on contrast, plain language, links, images, fonts and headings, and tables. Review the course details, register and plan a time to complete the course.</p>
                                <h4 class="mb-0">5. PM 100: Project Foundations</h4>
                                <p class="small text-muted"><i class="bi bi-clock me-2"></i>Time: 2 hours</p>
                                <p>In <a href="https://corporatelearning.gww.gov.bc.ca/learninghub/course/pm-100-project-foundations/" target="_blank" rel="noopener noreferrer">PM 100: Project Foundations</a>, learn the foundational project management concepts used across the BC Public Service and how they support effective participation on any project team. Review the course details, register and plan a time to complete the course.</p>
                                <h4 class="mb-0">6. AI Fundamentals for Public Servants: Opportunities, Risks and Strategies </h4>
                                <p class="small text-muted"><i class="bi bi-clock me-2"></i>Time: 5 hours</p>
                                <p>This <a href="https://apolitical.co/en/courses/ai-fundamentals-for-public-servants/default" target="_blank" rel="noopener noreferrer">Apolitical learning resource</a> introduces public servants to the fundamentals of artificial intelligence, focusing on opportunities, risks and practical strategies for responsible use in government. Review the course details and schedule time in your calendar to complete the full Apolitical course (free Apolitical account required).</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php
endwhile; // End of the loop.
get_footer();
