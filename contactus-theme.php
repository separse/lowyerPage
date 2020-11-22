<?php 
/*
Template Name: تماس با ما
*/
?>

<?php get_header(); ?>

<div class="contactMap">
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1620.2894957300869!2d51.405089657991525!3d35.687367173572454!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMzXCsDQxJzE0LjUiTiA1McKwMjQnMjIuMyJF!5e0!3m2!1sen!2s!4v1605190113590!5m2!1sen!2s" width="100%" height="200" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
</div>

<div class="container">
  <div class="row">

    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 pull-right">

      <div class="contactInfo divShadow">

        <div class="contactTitle">
        <h1>اطلاعات تماس</h1>
        </div>

        <div class="contactContent">
          <ul>
              <li><i class="fas fa-phone-alt"></i> موبایل: 09180186198</li>
              <li><i class="fas fa-fax"></i> فکس: 021055496198</li>
              <li><i class="fas fa-at"></i> ایمیل: separse@gmail.com</li>
              <li><i class="fas fa-map-marked"></i> آدرس: تهران، میدان آرژانتین، شبکه جوان، کوچه عقاقیا، پلاک 10</li>
          </ul>
        </div>

      </div>

    </div>

    <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">

      <div class="contactInfo divShadow">

        <div class="contactTitle">
        <h1>فرم ثبت نام</h1>
        </div>

        <div class="contactContent">
          <p>با تکمیل فرم زیر با ما در تماس باشید</p>
          <div class="contactForm">
            <?php echo do_shortcode('[widget id="gform_widget-2"]'); ?>
          </div>
        </div>

      </div>

    </div>

  </div>
</div>

<?php get_footer(); ?>

