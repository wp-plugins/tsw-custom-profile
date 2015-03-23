<?php
/**
 * secondary file for Plugin: TSW Custom Profile
 * @since 0.1
 */

// Add Custom Post Type to a feed
function add_tswcust_to_feed( $qv ) {
    if ( isset($qv['feed']) && !isset($qv['post_type']) )
        $qv['post_type'] = array('post', '<custom_profile>');
    return $qv;
}
add_filter( 'request', 'add_tswcust_to_feed' );
?>