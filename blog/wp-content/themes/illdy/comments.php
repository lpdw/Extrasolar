<?php
/**
 *	The template for displaying comments.
 *
 *	This is the template that displays the area of the page that contains both the current comments
 *	and the comment form.
 *
 *	@link https://codex.wordpress.org/Template_Hierarchy
 *
 *	@package WordPress
 *	@subpackage illdy
 */
?>
<?php
if ( post_password_required() ) {
	return;
}
?>

<div id="comments">

	<div id="fb-root"></div>
	<script>(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = "//connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v2.8";
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>

	<div class="fb-comments" data-href="http://extrasolar.fr/" data-width="100%" data-numposts="5"></div>

</div><!--/#comments-->