<?php
/**
 * The default template for displaying content.
 *
 * Used for both single and index/archive/author/catagory/search/tag.
 *
 * @package Odin
 * @since 2.2.0
 */
?>
<?php
$class = '';

if ( !is_home() && $i < 3 ) {
	$class = " full";
}

if ( !is_home() && $j % 4 == 0 && $j > 1 ) {
	$class = " last";
}
?>
<li class="entry-meta News-item u-xs-sizeFull<?php echo $class; ?>">
	<time class="entry-date"  datetime="<?php echo esc_attr( get_the_date( 'c' ) ) ?>">
		<svg>
			<use xlink:href="#icon-calendario-preto"/>
		</svg>
		<span><?php echo esc_html( get_the_date( 'd/m/Y' ) ) ?></span>
	</time>
	<h3 <?php if(!is_home()) : ?>class="News-title"<?php endif ?>><a href="<?php echo esc_url( get_permalink() ) ?>" title="<?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a></h3>
	<h4 class="<?php echo (is_home()) ? 'u-xs-hidden' : 'News-teaser'; ?>"><?php the_excerpt( 10 ); ?></h4>
</li>
<?php
if ( !is_home() ) {
	$i++;
	if ( $i > 2 ) {
		$j++;
	}
}
?>
