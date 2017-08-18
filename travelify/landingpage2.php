<?php    
/*
Template name:Landing-Page2
*/
include"header-landing-page2.php";
?>



<div class="main">
<div class="header">
<!--<div class="htop">
<img src="<?php bloginfo('template_url'); ?>/images/yelpp.png" />
</div>
-->
<!---htop-->
</div>
<!---header-->
</div>
<!--main-->
<div class="contents">
<div id="right">
<div class="hright">

<div class="sform">

<div id="WFItem9707803" class="wf-formTpl">
    <form accept-charset="utf-8" action="https://app.getresponse.com/add_contact_webform.html?u=3vNY"
    method="post">
        <div class="wf-box">
            <div id="WFIheader" class="wf-header el" style="height: 75px; display:  none !important;">
                <div class="actTinyMceElBodyContent">
                    <p></p>
                </div>
                <em class="clearfix clearer"></em>
            </div>
            <div id="WFIcenter" class="wf-body">
                <ul class="wf-sortable" id="wf-sort-id">
                    <li class="wf-name" rel="undefined" style="display:  block !important;">
                        <div class="wf-contbox">
                            <div class="wf-labelpos">
                                <label class="wf-label">Name:</label>
                            </div>
                            <div class="wf-inputpos">
                                <input type="text" class="wf-input wf-req wf-valid__required" name="name"></input>
                            </div>
                            <em class="clearfix clearer"></em>
                        </div>
                    </li>
                    <li class="wf-email" rel="undefined" style="display:  block !important;">
                        <div class="wf-contbox">
                            <div class="wf-labelpos">
                                <label class="wf-label">Email:</label>
                            </div>
                            <div class="wf-inputpos">
                                <input type="text" class="wf-input wf-req wf-valid__email" name="email"></input>
                            </div>
                            <em class="clearfix clearer"></em>
                        </div>
                    </li>
                    <li class="wf-submit" rel="undefined" style="display:  block !important;">
                        <div class="wf-contbox">
                            <div class="wf-inputpos">
                            <input type="image" src="http://obwithlowcesareandeliveryrate.com/wp-content/uploads/2015/02/button.png" onclick="form.submit()" class="sub">
                            
                               <!-- <input type="image" src=""style="width: 108px ! important; display:  inline !important;"
                                value="Submit" class="wf-button" name="submit"></input>-->
                            </div>
                            <em class="clearfix clearer"></em>
                        </div>
                    </li>
                    <li class="wf-counter" rel="undefined" style="display:  none !important;">
                        <div class="wf-contbox">
                            <div>
                                <span style="padding: 4px 6px 8px 24px; background: url(https://app.getresponse.com/images/core/webforms/countertemplates.png) no-repeat scroll 0% 0px transparent;"
                                class="wf-counterbox">
                                    <span class="wf-counterboxbg" style="padding: 4px 12px 8px 5px; background: url(https://app.getresponse.com/images/core/webforms/countertemplates.png) no-repeat scroll 100% -36px transparent;">
                                        <span class="wf-counterbox0" style="padding: 5px 0px;">subscribed:</span>
                                        <span style="padding: 5px;" name="https://app.getresponse.com/display_subscribers_count.js?campaign_name=danfarzad&var=0"
                                        class="wf-counterbox1 wf-counterq">1</span>
                                        <span style="padding: 5px 0px;" class="wf-counterbox2"></span>
                                    </span>
                                </span>
                            </div>
                        </div>
                    </li>
                    <li class="wf-captcha" rel="undefined" style="display:  none !important;">
                        <div class="wf-contbox wf-captcha-1" id="wf-captcha-1" wf-captchaword="Enter the words above:"
                        wf-captchasound="Enter the numbers you hear:" wf-captchaerror="Incorrect please try again"></div>
                    </li>
                    <li class="wf-privacy" rel="undefined temporary" style="display:  none !important;">
                        <div class="wf-contbox">
                            <div>
                                <a value="temporary" style="height: 0px ! important; display: inline ! important;"
                                class="wf-privacy wf-privacyico" href="http://www.getresponse.com/permission-seal?lang=en"
                                target="_blank"></a>
                            </div>
                            <em class="clearfix clearer"></em>
                        </div>
                    </li>
                    <li class="wf-poweredby" rel="undefined temporary" style="display:  none !important;">
                        <div class="wf-contbox">
                            <div>
                                <span value="temporary" style="display:  none !important;" class="wf-poweredby wf-poweredbyico">
                                    <a value="temporary" class="wf-poweredbylink wf-poweredby" href="http://www.getresponse.com/"
                                    style="display:  inline !important; color: inherit ! important;" target="_blank">Email Marketing</a>by GetResponse</span>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <div id="WFIfooter" class="wf-footer el" style="height: 20px; display:  none !important;">
                <div class="actTinyMceElBodyContent">
                    <p></p>
                </div>
                <em class="clearfix clearer"></em>
            </div>
        </div>
        <input type="hidden" name="webform_id" value="9707803" />
        
    </form>

</div>
<p class="white">We respect your privacy and never share your <br />information</p>
</div>
  </div>
<div class="cleft">
<script src="<?php bloginfo('template_url'); ?>/jquery-1.9.1.js"></script>

<?php if ( !function_exists('dynamic_sidebar')    || !dynamic_sidebar('cright') ) : ?>
<?php endif; ?> 

</div>
<!--cleft-->


<!---htop-->

</div>

<!--RIGHT-->
<div class="content-left">

 <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			  <?php the_content('<p class="serif">Read the rest of this page &raquo;</p>'); ?>
           
	                       <!--if you paginate pages-->
				<?php link_pages('<p><strong>Pages:</strong> ', '</p>', 'number'); ?>
	<!--end of post and end of loop-->
		  <?php endwhile; endif; ?>

</div>


</div>
<!--content-->

<div class="footer">

<div class="logo">
<img src="<?php bloginfo('template_url'); ?>/images/flogo.png" />
</div>
<div class="copyright">
<?php if ( !function_exists('dynamic_sidebar')    || !dynamic_sidebar('copyright') ) : ?>
<?php endif; ?> 
</div>

<div class="clear"></div>
</div>
<!--copyright-->
<?php wp_footer() ?>