<?php //https://portal.oxyhospedagem.com.br/index.php?rp=/knowledgebase/1/Carregar-o-bootstrap-4-no-wordpress.html ?>

<?php 
	//https://github.com/rvsanches/BS4-WP/blob/master/tema/wp-content/themes/bs4wp/front-page.php
	$my_args_banner = array(
	'post_type' => 'banners',
	'posts_per_page' => 3,
	);
	$my_query_banner = new WP_Query ( $my_args_banner );
?>	

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
	<ol class="carousel-indicators">
		<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
		<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
		<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
	</ol>
    <div class="carousel-inner ">
		<?php 
			if( $my_query_banner->have_posts()) : 
				//$banner = $banners[0];
				$c = 0;
				while( $my_query_banner->have_posts() ) : 
					$my_query_banner->the_post(); 
					?>
					<div class="carousel-item <?php $c++; if($c == 1) { echo ' active'; } ?>">
							<?php the_post_thumbnail( 'large', array('class' => 'img-fluid rounded d-block w-100')) ?>
						<div class="carousel-caption d-none d-md-block">
							<h1 class="text-primary">
								<?php the_title(); ?>
							</h1>
							<div class="p-3 mb-2 bg-dark text-white">
								<?php the_excerpt(); ?>
							</div>
						</div>
					</div>
		<?php 	endwhile; 
			endif; ?>
		<?php wp_reset_query(); ?>
    </div>
	<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
		<span class="carousel-control-prev-icon fonteIcon" aria-hidden="true"></span>

		<span class="sr-only">Anterior</span>
	</a>
	<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
		<span class="carousel-control-next-icon fonteIcon" aria-hidden="true"></span>
		<span class="sr-only">Próximo</span>
	</a>
</div>
