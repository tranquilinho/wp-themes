<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package _s
 */

?>

	</div><!-- #content -->

<footer id="colophon" class="site-footer" role="contentinfo">

    <div id="contact">
	      Find us at <a href="http://www.cnb.csic.es">Centro Nacional de Biotecnología</a> (CNB). <a href="/directions">Darwin 3</a>.<br>
	      Campus de Cantoblanco. 28049 Madrid (Spain)<br/>
	      <strong>Phone</strong>: (+34) 91 585 4922<br>
	      <strong>E-mail</strong>: bioinfo@cnb.csic.es<br><strong>Fax</strong>: (+34) 91 372 0112 <br/>
	      <a href="http://www.csic.es"><img border="0" alt="[ CSIC ]" src="/wp-content/uploads/2010/06/logoCSICpeq.jpg" width="181" height="49"/></a><br/>

    </div><!-- /contact -->       
           
    <div id="site-info">
      <a href="<?php echo esc_url( __( 'https://wordpress.org/', '_s' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', '_s' ), 'WordPress' ); ?></a>
      <span class="sep"> | </span>
      <?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'bcu' ), 'bcu', '<a href="http://biocomp.cnb.csic.es/" rel="designer">BCU@CNB-CSIC</a>' ); ?>
    </div><!-- /site-info -->
  
<script type='text/javascript'>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
  
  ga('create', 'UA-49826393-1', 'csic.es');
  ga('send', 'pageview');
  
</script>

</footer><!-- /colophon -->
</div><!-- /page -->

<?php wp_footer(); ?>

</body>
</html>
