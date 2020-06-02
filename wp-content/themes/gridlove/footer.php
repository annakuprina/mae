<?php do_action('gridlove_before_end_content'); ?>

<?php get_template_part('template-parts/ads/above-footer'); ?>

<div class="float_contact">
	<a href="<?php echo site_url('/contact/');?>" class="feedback">Contact Us</a>
</div>
<div id="footer" class="gridlove-footer">
<div style="font-size: 23px; color: #fc0; line-height: 30px; text-align: center; padding-top: 45px; padding-bottom: 30px;  ">
Other Hunting and Shooting Products from JMS Sporting </div>
<div style="border-top:1px solid #5c5b5b; width:60%; margin:0 auto;"></div>
	<?php if( gridlove_get_option('footer_widgets') ): ?>

	        <div class="container">
	            <div class="row"style="border-bottom:1px solid #5c5b5b;">
	                <?php 
						$layout = explode( "_", gridlove_get_option('footer_layout') );
						$columns = $layout[0];
						$col_lg = $layout[1];
						$col_md = $columns > 1 ? 6 : 12;


					?>

					<?php for($i = 1; $i <= $columns; $i++) : ?>
						<div class="col-lg-<?php echo esc_attr($col_lg); ?> col-md-<?php echo esc_attr($col_md); ?> col-sm-12">
							<?php if( is_active_sidebar( 'gridlove_footer_sidebar_'.$i ) ) : ?>
								<?php dynamic_sidebar( 'gridlove_footer_sidebar_'.$i );?>
							<?php endif; ?>
						</div>
					<?php endfor; ?>

	            </div>
	        </div>

	<?php endif; ?>

    <?php if( gridlove_get_option('footer_bottom') ): ?>

	        <div class="gridlove-copyright">
                <div class="sg-social">
                    <a href="/contact/" class="fa fa-envelope" target="_blank"></a>
                </div>
	            <div class="container">
	               <!-- <?php echo wp_kses_post( str_replace('{current_year}', date('Y'), gridlove_get_option('footer_copyright') ) ); ?> -->
                    <p style="text-align: center"><!--<a style="color: #fff" href="http://maemoderators.digitalflexsolutions.com/wp-content/uploads/2019/04/calibre_recommendations_for_muzzle_cans_3.3.14.pdf">Download This Selection of Targets</a> --> <a href="/about/disclaimer-cokkies-privacy-statement/">Privacy and Web Terms Documents</a> - Copyright <?php echo date('Y') ?> MAE / JMS Sporting</p>
	            </div>
	        </div>

	<?php endif; ?>

</div>

<?php get_template_part('template-parts/header/side'); ?>

<?php wp_footer(); ?>
<script type="text/javascript">	
        jQuery('#tab-description > div:not(.vc_row )').remove();

</script>
</body>

</html>