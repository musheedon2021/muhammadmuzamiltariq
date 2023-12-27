<?php
/**
 * Title: Hidden No Results Content
 * Slug: muhammadmuzamiltariq/hidden-no-results-content
 * Inserter: no
 */
?>
<!-- wp:paragraph -->
<p>
<?php echo esc_html_x( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'Message explaining that there are no results returned from a search', 'muhammadmuzamiltariq' ); ?>
</p>
<!-- /wp:paragraph -->

<!-- wp:search {"label":"<?php echo esc_html_x( 'Search', 'label', 'muhammadmuzamiltariq' ); ?>","placeholder":"<?php echo esc_attr_x( 'Search...', 'placeholder for search field', 'muhammadmuzamiltariq' ); ?>","showLabel":false,"buttonText":"<?php esc_attr_e( 'Search', 'muhammadmuzamiltariq' ); ?>","buttonUseIcon":true} /-->
