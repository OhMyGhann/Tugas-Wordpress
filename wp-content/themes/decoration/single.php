<?php get_header(); ?>

<main class="wrap">
  <section class="content-area content-full-width">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <article class="article-full">
        <header>
          <h2><?php the_title(); ?></h2>
          <p class="author">By: <?php the_author(); ?></p>
        </header>
        <div class="post-content">
          <?php the_content(); ?>
        </div>
      </article>
    <?php endwhile; else : ?>
      <article>
        <p>Sorry, no post was found!</p>
      </article>
    <?php endif; ?>
  </section>
</main>

<?php get_footer(); ?>
