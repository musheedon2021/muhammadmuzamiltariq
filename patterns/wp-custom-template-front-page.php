<?php
/**
 * Title: wp-custom-template-front-page
 * Slug: muhammadmuzamiltariq/wp-custom-template-front-page
 * Categories: hidden
 * Inserter: no
 */
?>
<!-- wp:template-part {"slug":"header","tagName":"header"} /-->

<!-- wp:cover {"url":"<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/kool-catz.png","id":7,"dimRatio":0,"focalPoint":{"x":0.16,"y":0.54},"minHeight":759,"minHeightUnit":"px","contentPosition":"center left","style":{"spacing":{"padding":{"left":"var:preset|spacing|70","top":"0"},"margin":{"top":"0"}}}} -->
<div class="wp-block-cover has-custom-content-position is-position-center-left" style="margin-top:0;padding-top:0;padding-left:var(--wp--preset--spacing--70);min-height:759px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-7" alt="" src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/kool-catz.png" style="object-position:16% 54%" data-object-fit="cover" data-object-position="16% 54%"/><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"large"} -->
<p class="has-text-align-center has-large-font-size">Catz Cool</p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:cover -->

<!-- wp:group {"tagName":"main","style":{"spacing":{"margin":{"top":"var:preset|spacing|50"}}}} -->
<main class="wp-block-group" style="margin-top:var(--wp--preset--spacing--50)"><!-- wp:post-content {"layout":{"type":"constrained"}} /-->

<!-- wp:template-part {"slug":"comments","tagName":"section"} /--></main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","tagName":"footer"} /-->