<?php
// Minimum viable theme, taken from https://github.com/cbirdsong/minimum-viable-wordpress/blob/main/index.php
?>
<!doctype html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<style>
:root{--border-radius:5px;--box-shadow:2px 2px 10px;--color:#118bee;--color-accent:#118bee15;--color-bg:#fff;--color-bg-secondary:#e9e9e9;--color-secondary:#920de9;--color-secondary-accent:#920de90b;--color-shadow:#f4f4f4;--color-text:#000;--color-text-secondary:#999;--font-family:-apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", sans-serif;--hover-brightness:1.2;--justify-important:center;--justify-normal:left;--line-height:1.5;--width-card:285px;--width-card-medium:460px;--width-card-wide:800px;--width-content:1080px}body{background:var(--color-bg);color:var(--color-text);font-family:var(--font-family);line-height:var(--line-height);margin:0;overflow-x:hidden;padding:1rem 0;font-size:calc(0.25vmin + 1rem);font-size:clamp(0.9rem, 0.5vw + 1rem, 2.2rem);text-align:center}body > hr{margin:0.5rem 0}body > header{font-size:1.25em}body > footer{font-size:0.85em}footer,header,main{margin:0 auto;max-width:var(--width-content);padding:2rem 1rem}main{text-align:left}hr{background-color:var(--color-bg-secondary);border:none;height:1px;margin:4rem 0}section{display:flex;flex-wrap:wrap;justify-content:var(--justify-important)}section aside{border:1px solid var(--color-bg-secondary);border-radius:var(--border-radius);box-shadow:var(--box-shadow) var(--color-shadow);margin:1rem;padding:1.25rem;width:var(--width-card)}section aside:hover{box-shadow:var(--box-shadow) var(--color-bg-secondary)}section aside img{max-width:100%}[hidden]{display:none}article header,div header,main header{padding-top:0}header{text-align:var(--justify-important)}header a b,header a em,header a i,header a strong{margin-left:0.5rem;margin-right:0.5rem}header nav img{margin:1rem 0}section header{padding-top:0;width:100%}nav{display:flex;align-items:center;flex-direction:column;justify-content:space-between;width:100%;margin-top:5rem;margin-bottom:2rem;font-weight:bold}nav + nav{margin-top:2rem}nav h1,nav h2,nav h3,nav h4,nav h5,nav h6{flex-basis:100%;margin-bottom:0}nav ul{list-style:none;padding:0}nav ul li{display:inline-block;margin:0 0.5rem;position:relative;text-align:left}nav ul li:hover ul{display:block}nav ul li ul{background:var(--color-bg);border:1px solid var(--color-bg-secondary);border-radius:var(--border-radius);box-shadow:var(--box-shadow) var(--color-shadow);display:none;height:auto;left:-2px;padding:0.5rem 1rem;position:absolute;top:1.7rem;white-space:nowrap;width:auto}nav ul li ul li,nav ul li ul li a{display:block}code,samp{background-color:var(--color-accent);border-radius:var(--border-radius);color:var(--color-text);display:inline-block;margin:0 0.1rem;padding:0 0.5rem}details{display:inline-block;margin:1.3rem 0}details[open]{background-color:var(--color-bg-secondary)}details summary{font-weight:bold;cursor:pointer}h1,h2,h3,h4,h5,h6{margin:0.5rem 0;line-height:1.2}mark{padding:0.1rem}ol li,ul li{padding:0.2rem 0}p{margin:0.75rem 0;padding:0}pre{margin:1rem 0;max-width:var(--width-card-wide);padding:1rem 0}pre code,pre samp{display:block;max-width:var(--width-card-wide);padding:0.5rem 2rem;white-space:pre-wrap}strong{font-weight:bold}small{color:var(--color-text-secondary)}sup{background-color:var(--color-secondary);border-radius:var(--border-radius);color:var(--color-bg);font-size:xx-small;font-weight:bold;margin:0.2rem;padding:0.2rem 0.3rem;position:relative;top:-2px}a{color:var(--color-secondary);display:inline-block;font-weight:bold;text-decoration:none}a:hover{filter: brightness(var(--hover-brightness));text-decoration:underline}a b,a em,a i,a strong,button{border-radius:var(--border-radius);display:inline-block;font-size:medium;font-weight:bold;line-height:var(--line-height);margin:0.5rem 0;padding:1rem 2rem}button{font-family:var(--font-family)}button:hover{cursor:pointer;filter: brightness(var(--hover-brightness))}a b,a strong,button{background-color:var(--color);border:2px solid var(--color);color:var(--color-bg)}a em,a i{border:2px solid var(--color);border-radius:var(--border-radius);color:var(--color);display:inline-block;padding:1rem 2rem}img{max-width:100%;height:auto}figure{margin:0;padding:0}figure img{}figure figcaption{color:var(--color-text-secondary);font-size:0.9em;line-height:1.2}button:disabled,input:disabled{background:var(--color-bg-secondary);border-color:var(--color-bg-secondary);color:var(--color-text-secondary);cursor:not-allowed}button[disabled]:hover{filter: none}form{border:1px solid var(--color-bg-secondary);border-radius:var(--border-radius);box-shadow:var(--box-shadow) var(--color-shadow);display:block;max-width:var(--width-card-wide);min-width:var(--width-card);padding:1.5rem;text-align:var(--justify-normal)}form header{margin:1.5rem 0;padding:1.5rem 0}input,label,select,textarea{display:block;font-size:inherit;max-width:var(--width-card-wide)}input[type="checkbox"],input[type="radio"]{display:inline-block}input[type="checkbox"] + label,input[type="radio"] + label{display:inline-block;font-weight:normal;position:relative;top:1px}input,select,textarea{border:1px solid var(--color-bg-secondary);border-radius:var(--border-radius);margin-bottom:1rem;padding:0.4rem 0.8rem}input[readonly],textarea[readonly]{background-color:var(--color-bg-secondary)}label{font-weight:bold;margin-bottom:0.2rem}table{border:1px solid var(--color-bg-secondary);border-radius:var(--border-radius);border-spacing:0;display:inline-block;max-width:100%;overflow-x:auto;padding:0;white-space:nowrap}table td,table th,table tr{padding:0.4rem 0.8rem;text-align:var(--justify-important)}table thead{background-color:var(--color);border-collapse:collapse;border-radius:var(--border-radius);color:var(--color-bg);margin:0;padding:0}table thead th:first-child{border-top-left-radius:var(--border-radius)}table thead th:last-child{border-top-right-radius:var(--border-radius)}table thead th:first-child,table tr td:first-child{text-align:var(--justify-normal)}table tr:nth-child(even){background-color:var(--color-accent)}blockquote{display:block;font-size:x-large;line-height:var(--line-height);margin:1rem auto;max-width:var(--width-card-medium);padding:1.5rem 1rem;text-align:var(--justify-important)}blockquote footer{color:var(--color-text-secondary);display:block;font-size:small;line-height:var(--line-height);padding:1.5rem 0}article{padding:2rem}article + article{margin-top:3rem}article:nth-child(even){background-color:var(--color-bg-secondary)}article > * + *{margin-top:1em;margin-bottom:0}article header,div header,main header{padding:0;text-align:left}article footer,div footer,main footer{padding:2rem 0 0;font-size:0.9em}article aside{background:var(--color-secondary-accent);border-left:4px solid var(--color-secondary);padding:0.01rem 0.8rem}.screen-reader-text{position:absolute;clip:rect(1px, 1px, 1px, 1px);clip-path:inset(50%);width:1px;height:1px;overflow:hidden;padding:0;border:0;white-space:nowrap}
		</style>

		<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
		<p class="screen-reader-text"><a href="#content">Skip to main content</a></p>

		<header>
			<?php
			if ( is_front_page() ) :
				?>
				<h1><?php endif; ?>

			<strong>
				<a href="<?php echo esc_url( home_url() ); ?>" rel="home">
					
					<?php echo wp_get_attachment_image( get_theme_mod( 'custom_logo' ), 'medium' ); ?>
					<span 
					<?php
					if ( has_custom_logo() ) {
						?>
						class="screen-reader-text"<?php } ?>>
						<?php bloginfo( 'name' ); ?>
					</span>
				</a>
			</strong>

			<?php
			if ( is_front_page() ) :
				?>
				</h1><?php endif; ?>

			<?php if ( $tagline = get_bloginfo( 'description' ) ) : ?>
			<p><strong><?php echo $tagline; ?></strong></p>
			<?php endif; ?>
		</header>

		<?php if ( $menus = wp_get_nav_menus() ) : ?>
		<details>
			<summary>Menu</summary>
			<?php
			foreach ( $menus as $menu ) :
				if ( $menu->count > 0 ) :
					?>
				<nav aria-labelledby="menu-<?php echo $menu->slug; ?>-label">
					<h2 id="menu-<?php echo $menu->slug; ?>-label">
										<?php echo $menu->name; ?>
					</h2>
									<?php
									wp_nav_menu(
										array(
											'menu'         => $menu,
											'menu_id'      => '',
											'menu_class'   => '',
											'container'    => '',
											'container_id' => '',
											'container_class' => '',
										)
									);
									?>
				</nav>
							<?php
			endif;
endforeach;
			?>
		</details>
		<?php endif; ?>

		<hr />

		<main id="content">
			<?php if ( is_archive() ) : ?>
				<header>
				<?php
					the_archive_title( '<h1>', '</h1>' );
					the_archive_description( '<p>', '</p>' );
				?>
				</header>
				<hr />
			<?php endif; ?>
			
			<?php if ( have_posts() ) : ?>
				<?php
				while ( have_posts() ) :
					the_post();
					?>
					<article>

						<header>
							<?php if ( is_singular() && ! is_front_page() ) : ?>
								<?php the_title( '<h1>', '</h1>' ); ?>
							<?php else : ?>
								<?php the_title( '<h2><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' ); ?>
							<?php endif; ?>

							<?php if ( get_post_type() === 'post' ) : ?>
							<time datetime="<?php echo get_the_date( 'c' ); ?>">
								<?php echo get_the_date(); ?>
							</time>
							<?php endif; ?>
						</header>


						<?php if ( has_post_thumbnail() ) : ?>
						<figure>
							<?php if ( is_singular() ) : ?>
								<?php the_post_thumbnail( 'full' ); ?>
							<?php else : ?>
								<?php the_post_thumbnail( 'large' ); ?>
							<?php endif; ?>

							<figcaption><?php the_post_thumbnail_caption(); ?></figcaption>
						</figure>
						<?php endif; ?>

						<?php if ( is_singular() ) : ?>
							<?php the_content(); ?>
						<?php else : ?>
							<?php the_excerpt(); ?>
							
							<a href="<?php echo esc_url( get_permalink() ); ?>'" rel="bookmark">
								Continue Reading
								<span class="screen-reader-text"> <?php the_title( '<h1>', '</h1>' ); ?></span>
								<span aria-hidden="true"> &raquo;</span>
							</a>
						<?php endif; ?>

						<footer>
							Published: 
							<time datetime="<?php echo get_the_date( 'c' ); ?>">
								<strong><?php echo get_the_date( 'F j, Y, g:i a' ); ?></strong>
							</time>
							<?php if ( get_the_terms( $post->ID, 'category' ) || get_the_terms( $post->ID, 'post_tag' ) ) : ?>
							<div>
								<?php the_terms( $post->ID, 'category', 'Categories: ', ', ' ); ?>
							</div>
							<div>
								<?php the_terms( $post->ID, 'post_tag', 'Tags: ', ', ' ); ?>
							</div>
							<?php endif; ?>
						</footer>
					</article>
				<?php endwhile; ?>
			<?php endif; ?>

			<?php
			if (
					$pagination = get_the_posts_pagination(
						array(
							'mid_size'           => 2,
							'prev_text'          => __( '<span aria-hidden="true">&laquo; </span>Newer Posts' ),
							'next_text'          => __( 'Older Posts<span aria-hidden="true"> &raquo;</span>' ),
							'type'               => 'list',
							'before_page_number' => '<span class="screen-reader-text">Page </span>',
						)
					)
				) :
				?>
				<hr />

				<?php
					echo $pagination;
				?>
			<?php endif; ?>
		</main>

		<hr />
		
		<footer>
			<small>&copy; <?php echo date( 'Y' ); ?> <?php echo get_bloginfo( 'name' ); ?></small>
		</footer>

		<?php wp_footer(); ?>
	</body>
</html>
