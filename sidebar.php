<div class="sidebar">

  <div class="sidebarLinks">

    <div class="sidebarTitle">
      <h3> مطالب پربازدید</h3>
    </div>

    <div class="sidebarContent">
      <ul>
        <?php query_posts('showposts=5&orderby=rand'); while (have_posts()): the_post(); ?>
          <li>
            <a href="<?php the_permalink(); ?>">
              <i class="fas fa-caret-left"></i>
              <?php the_title(); ?>
            </a>
          </li>
        <?php endwhile; ?>
        <?php wp_reset_query(); ?>
      </ul>
    </div>

  </div>

  <div class="sidebarBanner">
    <a href="#"><img src="<?php bloginfo('template_url'); ?>/img/banner.png" alt=""></a>
  </div>

</div>