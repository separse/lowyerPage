<?php get_header(); ?>

<div class="singleHeader">
  <style>
    .singleHeader {
      background-image: url("<?php bloginfo('template_url'); ?>/img/poker.jpg");
      height: 200px;
    }
  </style>
</div>

<div class="singleBody">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pull-right">

        <div class="category">

          <div class="categoryTitle">
            <h1> <?php the_category(' , '); ?> </h1>
          </div>

          <div class="row">

            <?php if(have_posts()): ?>
            <?php while(have_posts()): the_post(); ?>
              <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 pull-right">
                <div class="categoryItem divShadow">

                  <div class="categoryPhoto">
                      <a href="<?php the_permalink(); ?>">
                          <img src="<?php the_post_thumbnail_url(); ?>"></img>
                      </a>
                  </div>
                  <div class="categoryItemTitle">
                      <a href="<?php the_permalink(); ?>">
                          <h3><?php the_title(); ?></h3>
                      </a>
                  </div>
                  <div class="categorytButton">
                      <a href="<?php the_permalink(); ?>">کلیک کنید</a>
                  </div>

                </div>
              </div>
            <?php endwhile; ?>
            <?php endif ?>

          </div>

        </div>
      </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>

