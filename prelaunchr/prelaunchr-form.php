<?php
/**
 * File Security Check
 */
if ( ! empty( $_SERVER['SCRIPT_FILENAME'] ) && basename( __FILE__ ) == basename( $_SERVER['SCRIPT_FILENAME'] ) ) {
	die ( 'You do not have sufficient permissions to access this page!' );
}
 
/**
 * prelaunchr_before_form hook
 *
 * @hooked prelaunchr_wrapper_start - 10 (outputs prelaunchr wrapper div)
 * @hooked prelaunchr_response - 20 (outputs response div for form feedback/validation messages)
 * 
 */
do_action( 'prelaunchr_before_form'); ?>

<div id="home">
	<div class="hero">
    	<p class="large brandon">Show your true colors</p>
    	<p class="small brandon">High Quality, Performance Sunshades<br>that Accentuate Your Expression</p>
	</div>

	<div class="form-wrap clearfix ">
        <div class="key"></div>
        <p class="byline brandon">Be the first to get savings</p>
    </div>

    <div class="form-wrap">
		<form class="pform" action="" novalidate class="new_user" id="new_user">
			<?php 
			/**
			 * prelaunchr_form hook
			 *
			 * @hooked prelaunchr_input_honeypot - 10 (outputs honeypot name field)
			 * @hooked prelaunchr_input_email - 20 (outputs email field)
			 * @hooked prelaunchr_button_submit - 30 (outputs submit button)
			 * 
			 */
			do_action( 'prelaunchr_form');
			?>
		</form><!-- end .pform -->
	</div>
</div><!-- end #home -->

<?php 
/**
 * prelaunchr_after_form hook
 *
 * @hooked prelaunchr_wrapper_end - 10 (closes the prelaunchr wrapper div)
 * 
 */
do_action( 'prelaunchr_after_form');
?>