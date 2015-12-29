<?php get_header(); ?>
<section id="content" role="main">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<header>
<?php if ( is_singular() ) { echo '<h1 class="entry-title">'; } else { echo '<h2 class="entry-title underline-on-hover">'; } ?><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark"><?php the_title(); ?></a><?php if ( is_singular() ) { echo '</h1>'; } else { echo '</h2>'; } ?>
<section class="entry-meta">
<span class="entry-date"><?php the_time( get_option( 'date_format' ) ); ?></span>
</section>
</header>
<section class="entry-content">
<?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?>
<?php the_content(); ?>
<div class="entry-links"><?php wp_link_pages(); ?></div>
</section>
</article>
<?php endwhile; endif; ?>
<?php global $wp_query; if ( $wp_query->max_num_pages > 1 ) { ?>
<nav id="nav-below" class="navigation" role="navigation">
<div class="nav-previous"><?php next_posts_link( sprintf(__( '%s older', 'writer' ), '<span class="meta-nav">&larr;</span>' ) ) ?></div>
<div class="nav-next"><?php previous_posts_link( sprintf(__( 'newer %s', 'writer' ), '<span class="meta-nav">&rarr;</span>' ) ) ?></div>
</nav>
<?php } ?>
</section>
<?php get_footer(); ?>