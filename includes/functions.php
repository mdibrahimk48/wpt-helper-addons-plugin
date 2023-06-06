<?php

/**
 * Here is a Sample Function with Action Hook
 * If you want to add anyone, Please copy and paste and change function name
 * And Use
 */
if( !function_exists( 'ultraaddons_addons_sample_function' ) ){
   function ultraaddons_addons_sample_function() {
 
   }
}
add_filter( 'filter_hook_name', 'ultraaddons_addons_sample_function' );

/**
 * Start Writing your script for action or Filter.
 * Normally write Filter here, for action, an another file name action-hook.php file is available to this same directory
 * 
 */

 if( !function_exists( 'wpt_new_custom_column' ) ){
   function wpt_new_custom_column( $column_array ) {
       $column_array['new_custom_column'] = 'Custom Column';
       return $column_array;
   }
}
add_filter( 'wpto_default_column_arr', 'wpt_new_custom_column' );
