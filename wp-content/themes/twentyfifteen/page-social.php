<?php get_header(); ?>
<div data-role="page" id="trainerlist" class="secondarypage ui-page ui-page-theme-b ui-page-header-fixed ui-page-active" data-theme="b" data-url="blog" style="padding-top: 50px; min-height: 555px;">
	<div data-role="header" data-position="fixed" role="banner" class="ui-header ui-bar-inherit ui-header-fixed slidedown ui-fixed-hidden">
		<h2 style="color:white;font-size:20px;"><?php echo get_the_title(); ?></h2>
	</div>
	<div class="ui-panel-wrapper">
		<div role="main" class="ui-content">
			<div class="pages_maincontent">
				<div class="page_content">
					<ul id="photoslist" class="photo_gallery_13">
						<li>
							<a rel="gallery-1" href="<?php echo get_site_url(); ?>/socialupload/photo1.jpg" title="今天第一次来打卡，大家加油，么么哒..." class="swipebox ui-link">
								<div class="evo_social_picture" style="background-image:url('<?php echo get_site_url(); ?>/socialupload/thumbnail/photo1.jpg');"></div>
							</a>
							<div class="evo_social_content">
								今天第一次来打卡，大家加油，么么哒...
								<hr style="border:1px solid #e1dfe2;width:80%;"/>
							</div>
							<div class="evo_social_head_thumb">
								<div class="evo_social_head_thumbnail" style="background-image:url('<?php echo esc_url( get_template_directory_uri() ); ?>/images/t1.jpg');"></div>
								<div class="evo_social_head_banner">
									<span style="font-size:12px;font-weight:bold;">小汤姆</span>
									<br />
									<span style="font-size:10px;color:grey;line-height:8px;">2015-07-11 12:05:33</span>
								</div>
								<div style="clear:both;"></div>
							</div>
							
						</li>
						
						<div class="clear"></div>
					</ul>
					<div class="clear"></div>
					<div id="loadMore"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/load_posts.png" alt="" title=""></div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php get_footer(); ?>
