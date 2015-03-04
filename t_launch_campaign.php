<?php
/*
Template Name: Launch Campaign
 */

the_post();

get_header();

# Analyze page content

?>
<?php the_content(); ?>

<style>

/*For the sharing page */

#solc-redeem-now {
	margin: 0px auto;
	display: block;
	font-size: 200%;
}

@media (max-width: 390px) {
	body, html { 
		overflow-x:hidden; 
	}

	#refer div.share-wrap {
		width: auto;
	}

	#refer div.hero {
		height: auto;
	}
}

@media (max-width: 768px) {
	.oxygen-top-menu > .wrapper > .top-menu.main-menu-top {
		display: none;
	}
}

@media (max-width: 991px) {
	.prelaunchr .referrals ul.referral-progress {
		width: 75%;
	}

	div.referrals p {
		text-align: center;
	}
}

@media (max-width: 1080px) {
	#refer div.hero {
		overflow: visible;
	}

	div.mammoth {
		display: none;
	}

	#refer div.share-wrap {
		float: none;
		margin: 0px auto;
	}

	#refer div.page-content.clearfix {
		width: auto;
		text-align: center;
	}
}

/*For the reg page */
@media (max-width: 732px) {
	#home .hero {
	  height: auto !important;
	}
}

@media (max-width: 590px) {
	#home .hero p.large.brandon {
		width: auto;
		margin-left: auto;
		margin-right: auto;
		text-align: center;
	}

	#home .hero p.small.brandon {
		width: auto;
		margin: 0px auto;
	}
}

@media (max-width: 400px) {
	#home div.form-wrap {
		width: auto;
	}

	.spinner {
		margin-top: 8px;
		margin-left: auto;
		margin-right: auto;
		float: none;
	}

	#home .form-wrap input#email.email.brandon {
		display: block;
		margin: 0px auto;
		margin-bottom: 1rem;
		float: none;
	}

	#home .form-wrap button.submit.brandon {
		display: block;
		margin: 0px auto;
		float: none;
	}
}

.col-sm-12 {
	display: none;
}

.mammoth {
	background: no-repeat; 
	/*background-image: url(<?php echo get_theme_root_uri() . '/oxygen-child/prelaunchr/sharing.jpg'?>); */
	background-size: contain;
}

.no-close .ui-dialog-titlebar-close {
  display: none;
}

.top-menu {
	display: none;
}

.footer_widgets {
	display: none;
}

form{
	margin-bottom: 0;
}

.clearfix:before,
.clearfix:after {
    content: " "; /* 1 */
    display: table; /* 2 */
}

.clearfix:after {
    clear: both;
}


/* Home */

html.home{
	background: #EDECEA;
}

#home{
	padding-bottom: 50px;
}

#home .page-content{
	width: 1400px;
	margin: 0 auto;
}

#home .hero{
	width: auto;
	height: 250px;
	/*background: url(<?php echo get_theme_root_uri() . '/oxygen-child/prelaunchr/registration.jpg'?>) no-repeat;*/
	background-size: cover;
	overflow: hidden;
	position: relative;
	letter-spacing: .09em;
	margin: 0 auto;
}

#home .hero .large{
	font-weight: bold;
	font-size: 40px;
	color: #074E6F;
	text-transform: uppercase;
	margin: 85px 0 0 136px;
	position: relative;
	/*z-index: 2;*/
	letter-spacing: 2px;
}

#home .hero .small{
	font-weight: bold;
	color: white;
	font-size: 18px;
	margin: 10px 0 0 115px;
	line-height: 30px;
	position: relative;
	/*z-index: 2;*/
	text-transform: uppercase;
	text-align: center;
	width: 500px;
	letter-spacing: 1px;
}

#home .form-wrap{
	height: 80px;
	width: 411px;
	margin: 23px auto 0;
	margin-top: 0px;
}

#home .form-wrap .key{
	width: 46px;
	height: 19px;
	margin: 0 auto;
	/*background: url(/assets/home/key.png) 0 0 no-repeat;*/
	background-size: 46px 19px;
}

#home .form-wrap .byline{
	font-size: 15px;
	text-transform: uppercase;
	color: #074E6F;
	text-align: center;
	font-weight: bold;
	letter-spacing: 2px;
	margin: 15px 0;
}

#home .form-wrap .email{
	float: left;
	font-size: 13px;
	padding: 8px 0 8px 10px;
	border: 1px solid #074E6F;
	width: 256px;
	outline: none;
	letter-spacing: 1px;
}

#home .form-wrap .submit{
	width: 143px;
	background: #074E6F;
	float: left;
	height: 37px;
	line-height: 37px;
	color: #FFF;
	font-size: 13px;
	text-transform: uppercase;
	border: 0;
	letter-spacing: 2px;
}

#home .form-wrap .submit:hover {
	background: #0099CC;
}

#home .form-wrap .submit:active {
	background: #35586C;
}

#home .form-wrap.ended{
	width: 500px;
	margin-top: 27px;
}

#home .form-wrap.ended .thanks{
	text-transform: uppercase;
	font-weight: 500;
	color: #074e6f;
	text-align: center;
	font-size: 22px;
	letter-spacing: 1px;
	line-height: 36px;
	margin-bottom: 14px;
}

#home .form-wrap.ended .compiling{
	text-transform: uppercase;
	letter-spacing: 1px;
	font-size: 14px;
	line-height: 30px;
	color: #555556;
	text-align: center;
	font-weight: 500;
	margin-bottom: 24px;
}

#home .form-wrap.ended .go-to{
	font-style: italic;
	font-size: 16px;
	letter-spacing: 1px;
	text-align: center;
	margin-bottom: 25px;
}

#home .form-wrap.ended .go-to a{
	color: #074e6f;
	font-size: 19px;
	font-weight:bold;
	text-transform: uppercase;
	font-style: normal;
	text-decoration: none;
}

#home .form-wrap.ended .go-to a:hover{
	color: #955F5D;
}

#home .form-wrap.ended .again{
	font-weight: 500;
	color: #555556;
	text-transform: uppercase;
	font-size: 14px;
	text-align: center;
}

#home .form-wrap.ended{
	width: 500px;
	margin-top: 27px;
}

#home .form-wrap.ended .thanks{
	text-transform: uppercase;
	font-weight: 500;
	color: #074e6f;
	text-align: center;
	font-size: 22px;
	letter-spacing: 1px;
	line-height: 36px;
	margin-bottom: 14px;
}

#home .form-wrap.ended .compiling{
	text-transform: uppercase;
	letter-spacing: 1px;
	font-size: 14px;
	line-height: 30px;
	color: #555556;
	text-align: center;
	font-weight: 500;
	margin-bottom: 24px;
}

#home .form-wrap.ended .go-to{
	font-style: italic;
	font-size: 16px;
	letter-spacing: 1px;
	text-align: center;
	margin-bottom: 25px;
}

#home .form-wrap.ended .go-to a{
	color: #074e6f;
	font-size: 19px;
	font-weight:bold;
	text-transform: uppercase;
	font-style: normal;
	text-decoration: none;
}

#home .form-wrap.ended .go-to a:hover{
	color: #955F5D;
}

#home .form-wrap.ended .again{
	font-weight: 500;
	color: #555556;
	text-transform: uppercase;
	font-size: 14px;
	text-align: center;
}
 


/* Refer a friend page */

.wf-loading .brandon{
	visibility: hidden;
}

.brandon{
	font-family: "Brandon Grotesque", "brandon-grotesque", "HelveticaNeue", "Helvetica", "Arial", sans-serif;
}

#refer{
	background: #FFF;
}

div.referrals p {
	text-align: center;
}

#refer p.callout {
	text-align: center;
	font-size: 16px;
	color: #074E6F;
	font-weight: bold;
	margin: 20px 0 0 0;
	letter-spacing: 2px;
	text-transform: uppercase;
	margin-bottom: 20px;
}

#refer .page-content{
	width: 1120px;
	margin: 0 auto;
	/*z-index: 0;*/
	position: relative;
}

#refer .header{
	height: 50px;
	background: #074E6F;
	width: 100%;
	overflow:hidden;
	/*z-index: 1;*/
	position: relative;
}

#refer .header .content{
	width: 315px;
	margin: 0 auto;
}

#refer .header p{
	float: left;
	color: #FFF;
	font-weight: 500;
	text-transform: uppercase;
	line-height: 50px;
}

#refer .header .byline{
	font-size: 14px;
}

#refer .header .logo{
	font-weight: normal;
	font-size: 0;
	line-height: 0;
	margin-right: 14px;
	letter-spacing: 1px;
	/*background: url(/assets/refer/logo.png) 0 0 no-repeat;*/
	background-size: 106px 19px;
	height: 19px;
	width: 106px;
	margin-top: 15px;
}

#refer .hero{
	background: #F1F0EE;
	height: 391px;
	overflow: hidden;
}

#refer .mammoth{
	width: 612px;
	height: 394px;
	/*background: url(/assets/refer/mammoth.png) 0 0 no-repeat;*/
	background-size: 610px 394px;
	overflow: hidden;
	margin-top: 15px;
	float: left;
}

#refer .mammoth .need{
	color: black;
	font-size: 38px;
	text-transform: uppercase;
	font-weight: bold;
	margin: 50px 0 0 250px;
	display: block;
	line-height: 56px;
	letter-spacing: 4px;
	text-align: center;
	width: 284px;
}

#refer .share-wrap{
	float: right;
	width: 400px;
	text-align: center;
	text-transform: uppercase;
	letter-spacing: .13em;
	margin-right: 60px;
}

#refer .share-wrap .why{
	font-size: 16px;
	color: #555556;
	font-weight: bold;
	margin-top: 42px;
}

#refer .share-wrap .title{
	font-size: 30px;
	line-height: 40px;
	text-transform: uppercase;
	font-weight: bold;
	color: #074E6F;
	margin-top: 18px;
	letter-spacing: .13em;
}

#refer .share-wrap .subtitle{
	color: #565656;
	font-size: 14px;
	text-transform: none;
	margin-top: 15px;
}

#refer .share-wrap .copy-link{
	border: 1px solid #D1D0C7;
	background: #FFF;
	padding: 10px 0;
	width: 320px;
	text-transform: none;
	font-size: 11px;
	margin: 20px auto 0;
}

#refer .share-wrap .social-links{
	/*width: 120px;*/
	height: 37px;
	margin: 25px auto 0;
	text-align: center;
}

#refer .share-wrap .social-links a, #refer .share-wrap .social-links div{
	display: inline-block;
}

#refer .share-wrap .social-links .mail{
	background: url(/wp-content/plugins/soleil-optics-launch-campaign/assets/images/mail.png);
	background-size: 27px 27px;
	width: 27px;
	height: 27px;
}

#refer .share-wrap .social-links .fb{
	background: url(/wp-content/plugins/soleil-optics-launch-campaign/assets/images/fb.png);
	background-size: 27px 27px;
	width: 27px;
	height: 27px;
}

#refer .share-wrap .social-links .twit{
	background: url(/wp-content/plugins/soleil-optics-launch-campaign/assets/images/twit.png);
	background-size: 27px 27px;
	width: 27px;
	height: 27px;
}

#refer .share-wrap .social-links .sep{
	height: 28px;
	width: 1px;
	background: #BAB9BA;
	margin: 0 20px;
}

#refer .prizes{
	width: 100%;
	background: #FFF;
	border-top: 1px solid #D2D1C8;
	padding-bottom: 100px;
}

#refer .prizes .page-content{
	position: relative;
}

#refer .prizes .callout{
	text-align: center;
	font-size: 16px;
	color: #074E6F;
	font-weight: bold;
	margin: 20px 0 0 0;
	letter-spacing: 2px;
	text-transform: uppercase;
}

#refer .prizes .progress{
	height: 4px;
	width: 100%;
	/*background: url(/assets/refer/progress-bg.png) 0 0 repeat-x;*/
	background-size: 1px 4px;
	position: absolute;
	top: 100px;
	/*z-index: 0;*/
}

#refer .prizes .progress .mover{
	position: absolute;
	top: 0;
	left: 0;
}

#refer .prizes .progress .mover .bar{
	/*background: url(/assets/refer/progress-done.png) 0 0 repeat-x;*/
	width: 165px;
	height: 4px;
	-webkit-background-size: 1px 4px;
	background-size: 1px 4px;
}

#refer .prize-two .progress .mover .bar{ width: 312px; }
#refer .prize-three .progress .mover .bar{ width: 566px; }
#refer .prize-four .progress .mover .bar{ width: 820px; }
#refer .prize-five .progress .mover .bar{ width: 1120px; }


#refer .prizes ul.products{
	height: 105px;
	width: 100%;
	margin-top: 30px;
	position: relative;
	/*z-index: 1;*/
}

#refer .prizes .products li.title{
	height: 100%;
	text-transform: uppercase;
	color: #074E6F;
	font-weight: 500;
	font-size: 14px;
	float: left;
	margin-right: 68px;
	width: 165px;
	font-weight: bold;
}

#refer .prizes .products li.title .friends{
	margin-top: 7px;
	letter-spacing: 2px;
}

#refer .prizes .products li.title .rewards{
	margin-top: 45px;
	letter-spacing: 2px;
}

#refer .prizes .products li.product{
	height: 100%;
	color: #074E6F;
	width: 125px;
	margin-right: 129px;
	float: left;
	position: relative;
}

#refer .prizes .products li.product .circle{
	height: 30px;
	width: 30px;
	border-radius: 15px;
	border: 1px solid #DAD9D2;
	text-align: center;
	line-height: 30px;
	color: #868282;
	overflow: hidden;
	background: #F1F0EE;
	font-weight: bold;
	margin: 0 auto;
}

#refer .prizes .products li.product .sep{
	width: 12px;
	height: 2px;
	background: transparent;
	margin: 13px auto 13px;
}

#refer .prizes .products li.product .caret{
	width: 100%;
	height: 10px;
	/*background: url(/assets/refer/caret.png) center center no-repeat;*/
	background-size: 16px 10px;
	position: absolute;
	bottom: -15px;
}

#refer .prizes .products li.product.selected .caret{
	/*background: url(/assets/refer/caret-selected.png) center center no-repeat;*/
	background-size: 16px 10px;
}

#refer .prizes .products li.product p{
	text-align: center;
	font-weight: 500;
}

#refer .prizes .products li.product:last-child{
	margin-right: 0;
}

#refer .prizes .products li.product.last{
	margin-right: 0;
}

#refer .prizes .products li.product.selected .circle{
	background: #995F5E !important;
	border-color: #995F5E !important;
	color: #FFF !important;
}


#refer .prizes .products li.product.selected p{
	color: #995F5E !important;
}

#refer .prizes .products li.product:hover .circle{
	color: #FFF;
	background: #074E6F;
	border-color: #074E6F;
}

#refer .prizes .products li.product .tooltip{
	height: 254px;
	width: 190px;
	border: 4px solid #074E6F;
	position: absolute;
	top: -285px;
	left: -32px;
	display: none;
	background: #FFF;
}

#refer .prizes .products li.product .tooltip img{
	margin: 0 auto;
	display: block;
}

#refer .prizes .products li.product:hover .tooltip{
	display: block;
}

#refer .prizes p.place{
	text-align: center;
	font-size: 16px;
	color: #074E6F;
	width: 100%;
	font-weight: 500;
	margin-top: 30px;
}

#refer .prizes p.place span{
	color: #995F5E;
}

#refer .prizes p.check{
	text-align: center;
	font-size: 16px;
	color: #858181;
	width: 100%;
	font-weight: 500;
	margin-top: 5px;
}

#refer .prizes p.ship{
	text-align: center;
	font-size: 16px;
	color: #858181;
	width: 100%;
	font-weight: 500;
	margin-top: 50px;
}

#refer .prizes a.policy{
	text-align: center;
	font-size: 12px;
	color: #CCCCCC;
	width: 100%;
	font-weight: 500;
	margin-top: 5px;
	display: block;
	text-decoration: none;
}



/*
	RETINA

@media only screen and (min--moz-device-pixel-ratio: 2),
only screen and (-o-min-device-pixel-ratio: 2/1),
only screen and (-webkit-min-device-pixel-ratio: 2),
only screen and (min-device-pixel-ratio: 2) {
	#home .hero{
		background: url(/assets/home/hero@2x.jpg) center center no-repeat;
		background-size: 1600px 446px;
	}

	#home .form-wrap .key{
		background: url(/assets/home/key@2x.png) 0 0 no-repeat;
		background-size: 46px 19px;
	}

	#refer .header .logo{
		background: url(/assets/refer/logo@2x.png) 0 0 no-repeat;
		background-size: 106px 19px;
	}

	#refer .mammoth{
		background: url(/assets/refer/mammoth@2x.png) 0 0 no-repeat;
		background-size: 610px 394px;
	}

	#refer .share-wrap .social-links .fb{
		background: url(/assets/refer/fb@2x.png);
		background-size: 27px 27px;
	}

	#refer .share-wrap .social-links .twit{
		background: url(/assets/refer/twit@2x.png);
		background-size: 27px 27px;
	}

	#refer .prizes .progress{
		background: url(/assets/refer/progress-bg@2x.png) 0 0 repeat-x;
		background-size: 1px 4px;
	}

	#refer .prizes .progress .mover .bar{
		background: url(/assets/refer/progress-done@2x.png) 0 0 repeat-x;
		background-size: 1px 4px;
	}

	#refer .prizes .progress .mover .razor{
		background: url(/assets/refer/razor@2x.png) 0 0 no-repeat;
		background-size: 82px 23px;
	}

	#refer .prizes .products li.product .caret{
		background: url(/assets/refer/caret@2x.png) center center no-repeat;
		background-size: 16px 10px;
	}

	#refer .prizes .products li.product.selected .caret{
		background: url(/assets/refer/caret-selected@2x.png) center center no-repeat;
		background-size: 16px 10px;
	}
}
*/
</style>
<?php
get_footer();