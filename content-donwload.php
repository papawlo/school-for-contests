<?php
global $current_user;

$userRole = $current_user->roles;
?>
<tr>
	<?php
	if ( is_user_logged_in() && $userRole[0] == 'customer' ) {
		?>
		<td><a href="<?php echo get_post_meta( get_the_ID(), 'download_arquivo', true ); ?>" title=""><?php the_title(); ?></a></td>
		<td><a href="<?php echo get_post_meta( get_the_ID(), 'download_arquivo', true ); ?>" class="icon-quadrado-download"></a></td> 
		<?php
	} else {
		?>
		<td><a href="#" title=""><?php the_title(); ?></a></td>
		<td><a href="#" class="icon-quadrado-download"></a></td> 
		<?php } ?>
</tr>		

