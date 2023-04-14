<?php
	get_header();
	global $post;
	
    $img_url = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' )[0];
    $title = $post->post_title;
    $desc = $post->post_excerpt;
    $desc = $post->post_excerpt;
    $banner_icon_display = get_field('banner_icon_display', $post);
    $banner_customized = get_field('banner_customized', $post);

?>
	<div class="service-single-banner" style="background-image: url(<?php echo $img_url; ?>);">
        <div class="service-single-banner-warp">
            <p class="title"><?php echo $title; ?></p>
            <p class="desc"><?php echo $desc; ?></p>
            <?php if(!empty($banner_icon_display)): ?>
                <div class="icon-warp">
                    <a class="icon info" href="#info-cont">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icon-info.svg" alt="資訊介紹">
                        <p>資訊介紹</p>
                    </a>
                    <a class="icon project" href="#projecto-cont">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icon-project.svg" alt="搭配專案">
                        <p>搭配專案</p>
                    </a>
                </div>
            <?php endif; ?>

            <?php if(!empty($banner_customized)): ?>
                <?php echo $banner_customized;?>
            <?php endif; ?>

        </div>
	</div>
    <section class="service-content">
        <?php the_content();?>
    </section>
	
<?php
		

	get_footer();
?>
