<div class="row mx-0 row-cols-1 row-cols-md-3 row-cols-lg-5 mb-2">
    <!-- Monday -->
    <div class="col p-1 mb-4 mb-lg-1">
        <h3 class="card-title h4">Monday</h3>
        <!-- <h4 class="card-subtitle text-body-secondary h5">October 27</h4> -->
        <div class="d-flex flex-column mt-2">
            <?php $monday = get_children(array('post_type' => 'page', 'post_parent' => 15, 'orderby' => 'menu_order', 'order' => 'ASC')) ?>
            <?php if (!empty($monday)) : ?>
                <?php foreach ($monday as $event) : ?>
                    <div class="card mb-2">
                        <div class="card-body">
                            <h5 class="card-title">
                                <a class="text-decoration-none stretched-link" href="<?= get_permalink($event->ID) ?>"><?= $event->post_title ?></a>
                            </h5>
                            <?php $start = get_post_meta($event->ID, 'startTime', TRUE) ?>
                            <?php $end = get_post_meta($event->ID, 'endTime', TRUE) ?>
                            <p class="card-text fs-6"><?= $start ?> to <?= $end ?></p>
                        </div>
                    </div>
                <?php endforeach ?>
            <?php else: ?>
                <p>No events found.</p>
            <?php endif ?>

        </div>
    </div>
    <!-- Tuesday -->
    <div class="col p-1 mb-4">
        <h3 class="card-title h4">Tuesday</h3>
        <!-- <h4 class="card-subtitle text-body-secondary h5">October 28</h4> -->
        <div class="d-flex flex-column mt-2">
            <?php $tuesday = get_children(array('post_type' => 'page', 'post_parent' => 17, 'orderby' => 'menu_order', 'order' => 'ASC')) ?>
            <?php if (!empty($tuesday)) : ?>
                <?php foreach ($tuesday as $event) : ?>
                    <div class="card mb-2">
                        <div class="card-body">
                            <h5 class="card-title">
                                <a class="text-decoration-none stretched-link" href="<?= get_permalink($event->ID) ?>"><?= $event->post_title ?></a>
                            </h5>
                            <?php $start = get_post_meta($event->ID, 'startTime', TRUE) ?>
                            <?php $end = get_post_meta($event->ID, 'endTime', TRUE) ?>
                            <p class="card-text fs-6"><?= $start ?> to <?= $end ?></p>
                        </div>
                    </div>
                <?php endforeach ?>
            <?php else: ?>
                <p>No events found.</p>
            <?php endif ?>
        </div>
    </div>
    <!-- Wednesday -->
    <div class="col p-1 mb-4">
        <h3 class="card-title h4">Wednesday</h3>
        <!--  <h4 class="card-subtitle text-body-secondary h5">October 29</h4> -->
        <div class="d-flex flex-column mt-2">
            <?php $wednesday = get_children(array('post_type' => 'page', 'post_parent' => 19, 'orderby' => 'menu_order', 'order' => 'ASC')) ?>
            <?php if (!empty($wednesday)) : ?>
                <?php foreach ($wednesday as $event) : ?>
                    <div class="card mb-2">
                        <div class="card-body">
                            <h5 class="card-title">
                                <a class="text-decoration-none stretched-link" href="<?= get_permalink($event->ID) ?>"><?= $event->post_title ?></a>
                            </h5>
                            <?php $start = get_post_meta($event->ID, 'startTime', TRUE) ?>
                            <?php $end = get_post_meta($event->ID, 'endTime', TRUE) ?>
                            <p class="card-text fs-6"><?= $start ?> to <?= $end ?></p>
                        </div>
                    </div>
                <?php endforeach ?>
            <?php else: ?>
                <p>No events found.</p>
            <?php endif ?>
        </div>
    </div>
    <!-- Thursday -->
    <div class="col p-1 mb-4">
        <h3 class="card-title h4">Thursday</h3>
        <!--  <h4 class="card-subtitle text-body-secondary h5">October 30</h4> -->
        <div class="d-flex flex-column mt-2">
            <?php $thursday = get_children(array('post_type' => 'page', 'post_parent' => 21, 'orderby' => 'menu_order', 'order' => 'ASC')) ?>
            <?php if (!empty($thursday)) : ?>
                <?php foreach ($thursday as $event) : ?>
                    <div class="card mb-2">
                        <div class="card-body">
                            <h5 class="card-title">
                                <a class="text-decoration-none stretched-link" href="<?= get_permalink($event->ID) ?>"><?= $event->post_title ?></a>
                            </h5>
                            <?php $start = get_post_meta($event->ID, 'startTime', TRUE) ?>
                            <?php $end = get_post_meta($event->ID, 'endTime', TRUE) ?>
                            <p class="card-text fs-6"><?= $start ?> to <?= $end ?></p>
                        </div>
                    </div>
                <?php endforeach ?>
            <?php else: ?>
                <p>No events found.</p>
            <?php endif ?>
        </div>
    </div>
    <!-- Friday -->
    <div class="col p-1 mb-4">
        <h3 class="card-title h4">Friday</h3>
        <!--  <h4 class="card-subtitle text-body-secondary h5">October 31</h4> -->
        <div class="d-flex flex-column mt-2">
            <?php $friday = get_children(array('post_type' => 'page', 'post_parent' => 23, 'orderby' => 'menu_order', 'order' => 'ASC')) ?>
            <?php if (!empty($friday)) : ?>
                <?php foreach ($friday as $event) : ?>
                    <div class="card mb-2">
                        <div class="card-body">
                            <h5 class="card-title">
                                <a class="text-decoration-none stretched-link" href="<?= get_permalink($event->ID) ?>"><?= $event->post_title ?></a>
                            </h5>
                            <?php $start = get_post_meta($event->ID, 'startTime', TRUE) ?>
                            <?php $end = get_post_meta($event->ID, 'endTime', TRUE) ?>
                            <p class="card-text fs-6"><?= $start ?> to <?= $end ?></p>
                        </div>
                    </div>
                <?php endforeach ?>
            <?php else: ?>
                <p>No events found.</p>
            <?php endif ?>
        </div>
    </div>
</div>
