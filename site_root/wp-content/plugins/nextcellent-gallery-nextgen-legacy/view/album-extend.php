<?php 
/**
Template Page for the album overview (extended)

Follow variables are useable :

	$album     	 : Contain information about the album
	$galleries   : Contain all galleries inside this album
	$pagination  : Contain the pagination content

 You can check the content when you insert the tag <?php var_dump($variable) ?>
 If you would like to show the timestamp of the image ,you can use <?php echo $exif['created_timestamp'] ?>
**/
?>
<?php if (!defined ('ABSPATH')) die ('No direct access allowed'); ?><?php if (!empty ($galleries)) : ?>

<div class="ngg-albumoverview">	
	<!-- List of galleries -->
	<?php foreach ($galleries as $gallery) : ?>

	<div class="ngg-album">
		<div class="ngg-albumcontent">
			<a href="<?php echo $gallery->pagelink ?>">
				<div class="ngg-thumbnail">
					<img class="Thumb" alt="<?php echo $gallery->title ?>" src="<?php echo $gallery->previewurl ?>"/>
				</div>
				<div class="ngg-description">
					<div class="ngg-albumtitle"><?php echo $gallery->title ?></div>
					<p><?php echo $gallery->galdesc ?></p>
					<?php if ($gallery->counter > 0) : ?>
					<p><strong><?php echo $gallery->counter ?></strong> <?php _e('Photos', 'nggallery') ?></p>
					<?php endif; ?>
				</div>
			</a>
		</div>
	</div>

 	<?php endforeach; ?>
 	
	<!-- Pagination -->
 	<?php echo $pagination ?>
 	
</div>

<?php endif; ?>