<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package luna
 */
?>

	</div><!-- #content -->
    
   

	<footer id="colophon" class="site-footer" role="contentinfo">
    	<div class="grid grid-pad">
        	<?php if ( get_theme_mod( 'luna_footer_title' ) ) : ?> 
        		
				<h3 class="footer-contact-title"><?php echo wp_kses_post( get_theme_mod( 'luna_footer_title' )); ?></h3>
							
			<?php endif; ?>
            
            <?php if ( get_theme_mod( 'luna_footer_text' ) ) : ?> 
        		
				<div class="footer-contact">
					<?php echo wp_kses_post( get_theme_mod( 'luna_footer_text' )); ?>
                </div> 
							
			<?php endif; ?>
        </div>
		<div class="site-info">
            <div class="grid grid-pad">
                <div class="col-1-1">
                
                    	<div class="col-1-2">
                        
                        	<?php if( get_theme_mod( 'active_byline' ) == '') : ?>
            
							<?php if ( get_theme_mod( 'luna_footerid' ) ) : ?> 
                            
        						<?php echo wp_kses_post( get_theme_mod( 'luna_footerid' )); // footer id ?>
                                
							<?php else : ?>
                            
    							<?php printf( esc_html__( 'Theme: %1$s by %2$s', 'luna' ), 'luna', '<a href="http://modernthemes.net" rel="designer">modernthemes.net</a>' ); ?> 
                                
							<?php endif; ?>
                            
                            <?php endif; ?> 
                        
                        </div>
                
                
                    	<?php if( get_theme_mod( 'active_social' ) == '') : ?> 
                        
                    		<?php if ( is_active_sidebar('social-widget-area') ) : ?>
                        
                        		<div class="col-1-2">
                            		<?php dynamic_sidebar('social-widget-area');  ?>
                            	</div>
                            
                    		<?php endif; ?> 
                            
                    	<?php endif; ?> 
                        
                    
                </div>
            </div>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
