        <!-- Start Footer -->
        <footer class="bodyFooter">

            <div class="container">
                <div class="row">

                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 pull-right">
                        <div class="footerTitle">
                            <h4>آخرین مطالب سایت</h4>
                        </div>
                        <div class="footerContent">
                            <ul>
                                <li>
                                <a href=""><h3><i class="fas fa-caret-left"></i>برگزاری دوره انگولار 10</a></h3>
                                </li>
                                <li>
                                    <a href=""><h3><i class="fas fa-caret-left"></i>برگزاری دوره انگولار 10</a></h3>
                                </li>
                                <li>
                                    <a href=""><h3><i class="fas fa-caret-left"></i>برگزاری دوره انگولار 10</a></h3>
                                </li>
                                <li>
                                    <a href=""><h3><i class="fas fa-caret-left"></i>برگزاری دوره انگولار 10</a></h3>
                                </li>
                                <li>
                                    <a href="#"><h3><i class="fas fa-caret-left"></i> مشخص شدن نفرات اول تا دهم آزمون وکالت دادگستری وزارت علوم و فناوری</h3></a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 pull-right">
                        <div class="footerTitle">
                            <h4>لینک های مفید</h4>
                        </div>
                        <div class="footerContent">
                            <ul>
                                <li>
                                <a href=""><h3><i class="fas fa-caret-left"></i>وزارت صنعت معدن تجارت</a></h3>
                                </li>
                                <li>
                                    <a href=""><h3><i class="fas fa-caret-left"></i>جام جهانی برنامه نویسی</a></h3>
                                </li>
                                <li>
                                    <a href=""><h3><i class="fas fa-caret-left"></i>آموزش فراگیر</a></h3>
                                </li>
                                <li>
                                    <a href=""><h3><i class="fas fa-caret-left"></i>صدای مردمی</a></h3>
                                </li>
                                <li>
                                    <a href="#"><h3><i class="fas fa-caret-left"></i>جتگ های نیابتی</h3></a>
                                </li>
                                <li>
                                    <a href="#"><h3><i class="fas fa-caret-left"></i>استعدادیابی</h3></a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 pull-right">
                        <div class="footerTitle">
                            <h4>درباره ما</h4>
                        </div>
                        <div class="footerPhoto">
                            <img src="<?php bloginfo('template_url'); ?>/img/separse-logo.png" alt="لوگو">
                        </div>
                        <div class="footerPhotoContent">
                            <p>برگزاری یخواهید که یک فریم ورک برای طراحی پروژه های متوسط و بزرگ یاد بگیرید که کار با آن راحت باشد میتوانید به سراغ React بر سازمانی را دارید از Angular استفاده کنید چرا که امکانات بالایی را در اختیار شما قردوره انگولار 10</p>
                        </div>
                    </div>

                </div>
            </div>

            <div class="designer">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <p>این وبسایت توسط گروه برنامه نویسی اول طراحی شده است.</p>
                        </div>
                    </div>
                </div>
            </div>

        </footer>
        <!-- End Footer -->

        <!-- Sticky Navbar Script -->
        <script>
            // When the user scrolls down 20px from the top of the document, slide down the navbar
            window.onscroll = function() {scrollFunction()};
            
            function scrollFunction() {
                if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
                    document.getElementById("stickyNavbar").style.top = "0";
                } else {
                    document.getElementById("stickyNavbar").style.top = "-90px";
                }
            }
        </script>
        
        <!--- Bootstrap --->
        <script src="<?php bloginfo('template_url'); ?>/js/bootstrap.min.js"></script>

        <!-- Back To Top Button -->
        <script>
            $(window).scroll(function() {
                var height = $(window).scrollTop();
                if(height > 100) {
                    $('#back2Top').fadeIn();
                } else {
                    $('back2Top').fadeOut();
                }
            });
        </script>

        <?php wp_footer(); ?>

    </body>

</html>