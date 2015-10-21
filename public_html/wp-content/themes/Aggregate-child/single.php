<?php get_header(); ?>

<div id="main-content" class="clearfix">
	<div id="left-area">
                 
		<?php 
$citation_doi = get_post_custom_values('citation_doi');
if( !empty( $citation_doi ) ) {
    foreach ($citation_doi as $key => $value ) {
        echo "<p style='text-align: center;'><strong>DOI: $value</strong></p>";
    }
}
get_template_part('loop','single'); 
?>
	</div> <!-- end #left-area -->

	<?php get_sidebar(); ?>

<?php get_footer(); ?>