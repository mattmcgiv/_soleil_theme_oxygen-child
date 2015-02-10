<?php
/**
 * File Security Check
 */
if ( ! empty( $_SERVER['SCRIPT_FILENAME'] ) && basename( __FILE__ ) == basename( $_SERVER['SCRIPT_FILENAME'] ) ) {
	die ( 'You do not have sufficient permissions to access this page!' );
}
?>

<?php

function solc_add_fb_meta() {
	echo "<meta property='og:url' content='http://soleiloptics.com/launch'/> 
	<meta property='og:title' content='Show your True Colors'/>
	<meta property='og:description' content='I want to invite you to sign up with Soleil Optics, to receive exclusive savings on designer sunglasses, and also to earn free products just for signing up!  Sign up at Soleil Optics by clicking the link.'/> 
	<meta property='og:image' content='http://soleiloptics.com/wp-content/uploads/2015/01/soleil-logo2.png'/>";
}

function solc_add_fb_sdk() {
	echo "
	<script>
	//load FB JS SDK
	  window.fbAsyncInit = function() {
	    FB.init({
	      appId      : '441085886042083',
	      xfbml      : true,
	      version    : 'v2.2'
	    });
	  };

	  (function(d, s, id){
	     var js, fjs = d.getElementsByTagName(s)[0];
	     if (d.getElementById(id)) {return;}
	     js = d.createElement(s); js.id = id;
	     js.src = '//connect.facebook.net/en_US/sdk.js';
	     fjs.parentNode.insertBefore(js, fjs);
	   }(document, 'script', 'facebook-jssdk'));
	</script>
	";
}

function solc_add_fb_share() {
	//set url here
	$pid = Prelaunchr()->valid_uuid( $_GET['pid'] );

	$solc_base_url=get_permalink();

	$solc_ref_url = $solc_base_url . "?ref=$pid";

	echo "
	<script>
		function solcShareFB() {
			myCaption = 'Earn free products just for signing up!';
			myDescription = 'I want to invite you to sign up with Soleil Optics, to receive exclusive savings on designer sunglasses.  Sign up at SoleilOptics.com by clicking this link.'; 
			FB.ui({
			  method: 'feed',
			  link: '$solc_ref_url',
			  caption: myCaption,
			  description: myDescription,
			  picture: 'http://soleiloptics.com/wp-content/uploads/2014/12/autmn-580x341.jpg'
			}, function(response){});
		}
	</script>
	";
}

function solc_add_redeem_confirm() {
	echo "
	<script>
		function solcRedeemConfirm() {
			message = 'Redeeming will generate a coupon for rewards you have earned and then end your participation in this promotion. Proceed?';
			if (confirm(message)) {
				message = 'Are you SURE? This will cash out your rewards and end your campaign.  If you want to continue earning rewards, click Cancel.';
				if (confirm(message)) {
					return true;
				}
				else {
					return false;
				}
			}
			else {
				return false;
			}
		}
	</script>
	";
}

function solc_add_dialog_message() {
	echo "
	<script>
		function solc_dialog_message() {
			jQuery(function() {
    			jQuery( '#dialog' ).dialog({
    				dialogClass: 'no-close',
	    			buttons: [
					    {
					      text: 'Ok',
					      click: function() {
					        jQuery( this ).dialog( 'close' );
					      }
					    }
	    			]
    			});
  			});
		}
	</script>
	";
}

/**
 * prelaunchr_before_thankyou hook
 *
 * @hooked prelaunchr_wrapper_start - 10 (outputs prelaunchr wrapper div)
 * 
 */
add_action('prelaunchr_before_thankyou','solc_add_fb_sdk');
add_action('prelaunchr_before_thankyou','solc_add_fb_share');
add_action('prelaunchr_before_thankyou','solc_add_fb_meta');
add_action('prelaunchr_before_thankyou','solc_add_redeem_confirm');
add_action('prelaunchr_before_thankyou','solc_add_dialog_message');

do_action( 'prelaunchr_before_thankyou'); ?>

	<div class="pthanks">

		<?php 
		/**
		 * prelaunchr_thankyou hook
		 *
		 * @hooked prelaunchr_thankyou_intro - 10 (outputs .prelaunchr wrapper)
		 * @hooked prelaunchr_referral_link - 20 (outputs the users referral link)
		 * @hooked prelaunchr_social_share - 30 (outputs the social share buttons)
		 * @hooked prelaunchr_referral_stats - 40 (outputs the users referral stats)
		 * 
		 */
		do_action( 'prelaunchr_thankyou');
		?>

	</div>

	<div id="dialog" title="You must confirm your account!" style="display:none;">
  		<p>Our records show you haven't confirmed your account by clicking the link in the email we sent.  Please check your email and follow the link.</p>
	</div>
<?php 
/**
 * prelaunchr_after_thankyou hook
 *
 * @hooked prelaunchr_wrapper_end - 10 (closes the prelaunchr wrapper div)
 * 
 */
do_action( 'prelaunchr_after_thankyou');
?>