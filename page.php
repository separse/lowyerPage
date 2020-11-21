<?php get_header(); ?>

<div class="singleHeader">
  <style>
    .singleHeader {
      background-image: url("<?php the_post_thumbnail_url(); ?>");
    }
  </style>
</div>

<div class="singleBody">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pull-right">
        <div class="singleMain">
          <div class="singleTitle">
            <h1> <?php the_title(); ?> </h1>
          </div>
          <div class="singleContent">
            <?php if(have_posts()): ?>
            <?php while(have_posts()): the_post(); ?>
            <?php the_content(); ?>
            <?php endwhile; ?>
            <?php endif ?>
         
          </div>
          <div class="singleTile">
            <div class="singleTileInformation">
              <ul>
                <li>اشتراک گذاری</li>
                
              </ul>
          
            </div>
            <div class="singleTileShare">
              <ul>
                <li><a><i class="fab fa-whatsapp"></i></a></li>
                <li><a><i class="fab fa-telegram-plane"></i></a></li>
                <li><a><i class="fab fa-facebook-f"></i></a></li>
              </ul>
            </div>
          </div>
          <div class="singleTag">
            <?php the_tags(''); ?>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>

<?php get_footer(); ?>

