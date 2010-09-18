<?php
/**
 * @package WordPress
 * @subpackage minimal_theme
 */
?>
	<div id="footer">
		<p>&copy; <?php echo date('Y');?>&nbsp;<?php bloginfo('name');?>&nbsp;-&nbsp;<?php credits();?></p>
	</div>
	<?php wp_footer(); ?>
<script>
var _gaq = [['_setAccount', 'UA-18446191-1'], ['_trackPageview']];
(function(d, t) {
var g = d.createElement(t),
    s = d.getElementsByTagName(t)[0];
g.async = true;
g.src = '//www.google-analytics.com/ga.js';
s.parentNode.insertBefore(g, s);
})(document, 'script');
</script>
</body>
</html>