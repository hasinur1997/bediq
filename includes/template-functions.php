<?php

/*  --------------------------------------------------
:: Room template Hooks
-------------------------------------------------- */

add_action( 'bediq_before_single_room', 'bediq_template_featured_image', 10 );

add_action( 'bediq_before_single_room_summary', 'bediq_template_post_title', 10 );
add_action( 'bediq_before_single_room_summary', 'bediq_template_room_schema', 15 );
add_action( 'bediq_before_single_room_summary', 'bediq_template_room_book_now', 20 );

add_action( 'bediq_single_room_summary', 'bediq_template_post_content', 10 );
add_action( 'bediq_single_room_summary', 'bediq_template_room_tabs', 15 );
add_action( 'bediq_single_room_summary', 'bediq_template_room_offers', 20 );

/*  --------------------------------------------------
:: Event template Hooks
-------------------------------------------------- */

add_action( 'bediq_before_single_event_summary', 'bediq_template_post_title', 10 );
add_action( 'bediq_before_single_event_summary', 'bediq_template_event_schema', 15 );
add_action( 'bediq_before_single_event_summary', 'bediq_template_event_image_overlay', 20 );

add_action( 'bediq_single_event_summary', 'bediq_template_event_details', 10 );
add_action( 'bediq_single_event_summary', 'bediq_template_event_organizer', 20 );
add_action( 'bediq_single_event_summary', 'bediq_template_post_content', 20 );


/*  --------------------------------------------------
:: Offer template Hooks
-------------------------------------------------- */

add_action( 'bediq_before_single_offer_summary', 'bediq_template_offer_header', 10 );
add_action( 'bediq_before_single_offer_summary', 'bediq_template_offer_book_button', 15 );

add_action( 'bediq_single_offer_summary', 'bediq_template_offer_schema', 10 );
add_action( 'bediq_single_offer_summary', 'bediq_template_offer_tabs', 15 );


/*  --------------------------------------------------
:: Outlet template Hooks
-------------------------------------------------- */

add_action( 'bediq_before_single_outlet_summary', 'bediq_template_post_title', 10 );
add_action( 'bediq_before_single_outlet_summary', 'bediq_template_outlet_image', 15 );
add_action( 'bediq_before_single_outlet_summary', 'bediq_template_outlet_schema', 20 );

add_action( 'bediq_single_outlet_summary', 'bediq_template_post_content', 10 );
add_action( 'bediq_single_outlet_summary', 'bediq_template_outlet_details', 15 );
add_action( 'bediq_single_outlet_summary', 'bediq_template_outlet_event', 20 );
add_action( 'bediq_single_outlet_summary', 'bediq_template_outlet_offer', 25 );
add_action( 'bediq_single_outlet_summary', 'bediq_template_outlet_activity', 30 );



/*  --------------------------------------------------
:: Activity template Hooks
-------------------------------------------------- */
add_action( 'bediq_before_single_activity_summary', 'bediq_template_activity_title', 10 );
add_action( 'bediq_before_single_activity_summary', 'bediq_template_activity_schema', 15 );
add_action( 'bediq_before_single_activity_summary', 'bediq_template_activity_image_overlay', 20 );

add_action( 'bediq_single_activity_summary', 'bediq_template_activity_details', 10 );
add_action( 'bediq_single_activity_summary', 'bediq_template_post_content', 15 );

/*  --------------------------------------------------
:: Leisure template Hooks
-------------------------------------------------- */
add_action( 'bediq_before_single_leisure_summary', 'bediq_template_post_title', 10 );
add_action( 'bediq_before_single_leisure_summary', 'bediq_template_leisure_schema', 15 );

add_action( 'bediq_single_leisure_summary', 'bediq_template_leisure_image', 10 );
add_action( 'bediq_single_leisure_summary', 'bediq_template_leisure_facility_widget', 15 );
add_action( 'bediq_single_leisure_summary', 'bediq_template_post_content', 20 );
add_action( 'bediq_single_leisure_summary', 'bediq_template_leisure_connected_offers', 25 );
add_action( 'bediq_single_leisure_summary', 'bediq_template_leisure_connected_events', 30 );
add_action( 'bediq_single_leisure_summary', 'bediq_template_leisure_connected_activities', 35 );


/*  --------------------------------------------------
:: Facility template Hooks
-------------------------------------------------- */
add_action( 'bediq_before_single_facility_summary', 'bediq_template_post_title', 10 );
add_action( 'bediq_before_single_facility_summary', 'bediq_template_facility_schema', 15 );

add_action( 'bediq_single_facility_summary', 'bediq_template_facility_image', 10 );
add_action( 'bediq_single_facility_summary', 'bediq_template_facility_facility_widget', 15 );
add_action( 'bediq_single_facility_summary', 'bediq_template_post_content', 20 );
add_action( 'bediq_single_facility_summary', 'bediq_template_facility_connected_offers', 25 );
add_action( 'bediq_single_facility_summary', 'bediq_template_facility_connected_events', 30 );
add_action( 'bediq_single_facility_summary', 'bediq_template_facility_connected_activities', 35 );


/*  --------------------------------------------------
:: Services template Hooks
-------------------------------------------------- */
add_action( 'bediq_before_single_sercices_summary', 'bediq_template_post_title', 10 );
add_action( 'bediq_before_single_sercices_summary', 'bediq_template_services_schema', 15 );

add_action( 'bediq_single_services_summary', 'bediq_template_featured_image', 10 );
add_action( 'bediq_single_services_summary', 'bediq_template_post_content', 15 );
add_action( 'bediq_single_services_summary', 'bediq_template_services_connected_offers', 20 );


/*  --------------------------------------------------
:: Room functions
-------------------------------------------------- */

function bediq_template_post_title() {
    ?>
    <header class="entry-header">
        <h1 class="entry-title" itemprop="name"><?php the_title(); ?></h1>
    </header><!-- .entry-header -->
    <?php
}

function bediq_template_post_content() {
    ?>
    <div itemprop="description">
        <?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'bediq' ) ); ?>
    </div>
    <?php
}

function bediq_template_room_schema() {
    bediq_get_template( 'room/schema.php' );
}

function bediq_template_room_tabs() {
    bediq_get_template( 'room/tab.php' );
}

function bediq_template_room_offers() {
    bediq_get_template( 'room/offers.php' );
}

function bediq_template_room_book_now() {
    global $post;
    ?>
    <div align="right">
        <a href="<?php echo esc_url( get_post_meta( $post->ID, 'ibe_room', true ) ); ?>" target="_blank" class="btn btn-danger">
            <?php _e( 'Book from', 'bediq' ); ?> <?php echo get_post_meta( $post->ID, 'min_price', true ); ?>
        </a>
    </div>
    <?php
}

function bediq_template_featured_image() {
    if ( has_post_thumbnail() ) {
        the_post_thumbnail( 'full', array('class' => 'flex-container', 'itemprop' => 'image') );
    }
}

/*  --------------------------------------------------
:: Event functions
-------------------------------------------------- */

function bediq_template_event_schema() {
    bediq_get_template( 'event/schema.php' );
}

function bediq_template_event_image_overlay() {
    bediq_get_template( 'event/image-overlay.php' );
}

function bediq_template_event_details() {
    bediq_get_template( 'event/details.php' );
}

function bediq_template_event_organizer() {
    bediq_get_template( 'event/organizer.php' );
}

/*  --------------------------------------------------
:: Offer functions
-------------------------------------------------- */


function bediq_template_offer_header() {
    bediq_get_template( 'offers/header.php' );
}

function bediq_template_offer_rooms() {
    bediq_get_template( 'offers/rooms.php' );
}

function bediq_template_offer_schema() {
    bediq_get_template( 'offers/schema.php' );
}

function bediq_template_offer_tabs() {
    bediq_get_template( 'offers/tabs.php' );
}

function bediq_template_offer_book_button() {
    global $post;

    $url = esc_url( get_post_meta( $post->ID, 'url', true ) );
    ?>
    <div align="right">
        <a href="<?php echo $url; ?>" taget="_blank" class="btn btn-danger"><?php _e( 'Book Now!', 'bediq' ); ?></a>
    </div>
    <?php
}


/*  --------------------------------------------------
:: Outlet functions
-------------------------------------------------- */

function bediq_template_outlet_image() {
    bediq_get_template( 'outlet/image.php' );
}

function bediq_template_outlet_activity() {
    bediq_get_template( 'outlet/activities.php' );
}

function bediq_template_outlet_event() {
    bediq_get_template( 'outlet/events.php' );
}

function bediq_template_outlet_offer() {
    bediq_get_template( 'outlet/offers.php' );
}

function bediq_template_outlet_schema() {
    bediq_get_template( 'outlet/schema.php' );
}

function bediq_template_outlet_details() {
    bediq_get_template( 'outlet/details.php' );
}



/*  --------------------------------------------------
:: Activity functions
-------------------------------------------------- */

function bediq_template_activity_title() {
    ?>
    <header class="entry-header">
        <div class="alignleft" itemprop="name">
            <h1><?php the_title(); ?></h1>
        </div>
        <div class="alignright">
            <?php bediq_print_tax_link( 'things-to-do' ); ?>
        </div>
    </header><!-- .entry-header -->
  
    <?php
}

function bediq_template_activity_schema() {
    bediq_get_template( 'activity/schema.php' );
}

function bediq_template_activity_image_overlay() {
    bediq_get_template( 'activity/image-overlay.php' );
}

function bediq_template_activity_details() {
    bediq_get_template( 'acivity/details.php' );
}

/*  --------------------------------------------------
:: leisure functions
-------------------------------------------------- */

function bediq_template_leisure_schema() {
    bediq_get_template( 'leisure/schema.php' );
}

function bediq_template_leisure_image() {
    bediq_get_template( 'leisure/image.php' );
}

function bediq_template_leisure_facility_widget() {
    bediq_get_template( 'leisure/facility-wiget.php' );
}
function bediq_template_leisure_connected_offers() {
    bediq_get_template( 'leisure/conected-offers.php' );
}
function bediq_template_leisure_connected_events() {
    bediq_get_template( 'leisure/conected-events.php' );
}
function bediq_template_leisure_connected_activities() {
    bediq_get_template( 'leisure/conected-activities.php' );
}

/*  --------------------------------------------------
:: Facility functions
-------------------------------------------------- */

function bediq_template_facility_schema() {
    bediq_get_template( 'facility/schema.php' );
}

function bediq_template_facility_image() {
    bediq_get_template( 'facility/image.php' );
}

function bediq_template_facility_facility_widget() {
    bediq_get_template( 'facility/facility-widget.php' );
}
function bediq_template_facility_connected_offers() {
    bediq_get_template( 'facility/conected-offers.php' );
}

function bediq_template_facility_connected_events() {
    bediq_get_template( 'facility/conected-events.php' );
}
function bediq_template_facility_connected_activities() {
    bediq_get_template( 'facility/conected-activities.php' );
}

/*  --------------------------------------------------
:: Services functions
-------------------------------------------------- */

function bediq_template_services_schema() {
    bediq_get_template( 'services/schema.php' );
}

function bediq_template_services_image() {
    bediq_get_template( 'services/image.php' );
}

function bediq_template_services_connected_offers() {
    bediq_get_template( 'services/conected-offers.php' );
}