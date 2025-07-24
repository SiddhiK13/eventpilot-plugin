<div class="ep-event-list">
    <h2>Upcoming Events</h2>
    <ul>
        <?php
        $events = new WP_Query(['post_type' => 'ep_event']);
        while ($events->have_posts()) : $events->the_post();
            echo '<li><a href="' . get_permalink() . '">' . get_the_title() . '</a></li>';
        endwhile;
        wp_reset_postdata();
        ?>
    </ul>
</div>