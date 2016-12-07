<?php print $doctype; ?>
<html lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>"<?php print $rdf->version . $rdf->namespaces; ?>>
    <head<?php print $rdf->profile; ?>>
        <?php print $head; ?>
        <title><?php print $head_title; ?></title>  
        <?php print $styles; ?>
        <?php print $scripts; ?>
		<script type='text/javascript'>//<![CDATA[ 
		jQuery(function(){
		jQuery('body').bind('contextmenu', function(e){
		return false;
		}); 
		});//]]>  
		</script>
        <!--<script type="text/javascript">var switchTo3x = true;</script>-->
       <!-- <script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>-->
       <!-- <script type="text/javascript">stLight.options({publisher: "27e8f864-9fd9-4848-9012-178a4532041a", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script>-->
          <!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->


    </head>
    <body<?php print $attributes; ?>>
        <div id="skip-link">
            <a href="#main-content" class="element-invisible element-focusable"><?php print t('Skip to main content'); ?></a>
        </div>
        <?php print $page_top; ?>
        <?php print $page; ?>
        <?php print $page_bottom; ?>
     <a style="display:none;" href="http://butvietnhatban.vn/"></a>
    </body>

</html>
