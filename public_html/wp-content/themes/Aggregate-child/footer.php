										<?php if ( !is_home() ) echo '<div id="index-top-shadow"></div>'; ?>
									</div> <!-- end #main-content -->
									
									<?php if ( is_home() ) { ?>
										<div id="additional-widgets" class="clearfix">
											<?php if ( is_active_sidebar( 'bottom-area-1' ) || is_active_sidebar( 'bottom-area-2' ) || is_active_sidebar( 'bottom-area-3' ) ) { ?>
												<?php if ( is_active_sidebar( 'bottom-area-1' ) && !dynamic_sidebar('bottom-area-1') ) : ?> 
												<?php endif; ?>
												
												<?php if ( is_active_sidebar( 'bottom-area-2' ) && !dynamic_sidebar('bottom-area-2') ) : ?> 
												<?php endif; ?>
												
												<?php if ( is_active_sidebar( 'bottom-area-3' ) && !dynamic_sidebar('bottom-area-3') ) : ?> 
												<?php endif; ?>
											<?php } ?>
										</div> <!-- end #additional-widgets -->
									<?php } ?>
								</div> <!-- end #content-bottom-shadow -->
							</div> <!-- end #content-top-shadow -->
						</div> <!-- end #content-shadow -->
					</div> <!-- end #inner-border -->
				</div> <!-- end #content -->
				
				<?php if ( is_active_sidebar( '728area' ) ) { ?>
					<?php if ( !dynamic_sidebar('728area') ) : ?> 
					<?php endif; ?>
				<?php } ?>	
				
			</div> <!-- end .container -->
		</div> <!-- end #content-top-light -->
		<div id="bottom-stitch"></div>
	</div> <!-- end #content-area -->

	<div id="footer">
		<div id="footer-top-shadow" class="clearfix">
			<div class="container">
				<div id="footer-widgets" class="clearfix">
					<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer') ) : ?>
					<?php endif; ?>
				</div> <!-- end #footer-widgets -->
			</div> <!-- end .container -->
		</div> <!-- end #footer-top-shadow -->
		<div id="footer-bottom-shadow"></div>
		<div id="footer-bottom">
			<div class="container clearfix">
				<p style="position:absolute; left: 20px; margin: 10px;"><!--LiveInternet counter--><script type="text/javascript"><!--
document.write("<a href='http://www.liveinternet.ru/click' "+
"target=_blank><img src='//counter.yadro.ru/hit?t43.6;r"+
escape(document.referrer)+((typeof(screen)=="undefined")?"":
";s"+screen.width+"*"+screen.height+"*"+(screen.colorDepth?
screen.colorDepth:screen.pixelDepth))+";u"+escape(document.URL)+
";"+Math.random()+
"' alt='' title='LiveInternet' "+
"border='0' width='31' height='31'><\/a>")
//--></script><!--/LiveInternet--> <a rel="license" href="http://creativecommons.org/licenses/by/4.0/"><img src="/cc.png" alt="Creative Commons 
Attribution 4.0 International" title="Creative Commons 
Attribution 4.0 International"></a>
<img src="http://research-journal.org/wp-content/themes/Aggregate-child/images/oa.png" style="width: 40%; height: auto;" alt="This journal is Open Access">
</p>
				 <p id="copyright">Все права защищены Международный научно-исследовательский журнал 2011-2015, Mezdunarodnyj naucno-issledovatel'skij zurnal</p>

			</div> <!-- end .container -->
		</div> <!-- end #footer-bottom -->
	</div> <!-- end #footer -->

	<?php include(TEMPLATEPATH . '/includes/scripts.php'); ?>
	<?php wp_footer(); ?>

</body>
</html>