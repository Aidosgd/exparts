<!--Contact Section-->

<section class="Contact-Section">

    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-6">
                <h3>Contact info</h3>
                <h2>Contact Us</h2>
                <p>Lorem ipsum dolor sit amet adipi elit sed do eiusmod.</p>

                <div class="locationcont">abc raod, 41 street, Rome</div>
                <div class="mailcont"><a href="mailto:rome-expats@Hotmail.com ">rome-expats@Hotmail.com </a></div>
                <div class="phonecont">+(35) 123 456</div>


            </div>
            <div class="col-md-3 col-sm-6 socialmediaicons">
                <h3>Social Media</h3>
                <h2>following Us</h2>

                <ul>
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                </ul>


            </div>
            <div class="col-md-6 col-sm-12 subscribe-cont">

                <h3>SUBSCRIBE TO Expats living in Rome</h3>
                <h2>Sign up for our newsletter here</h2>
                <form action="" method="post">
                    <div class="NewsletterCont">
                        <span class="add-on"><i class="fa fa-envelope-o"></i></span>
                        <input type="text" id="" name="" placeholder="Your@email.com">
                        <input type="submit" value="Subscribe" class="btn btn-large btn-info"/>
                    </div>
                </form>
                <p>&nbsp;</p>
                <p><a href="#" class="btn-danger">Become a sponsor</a></p>

            </div>
        </div>
    </div>


</section>

<!--Contact Section-->

<footer>
    <nav class="container">
        <ul class="nav navbar-nav main-nav">
            <li><a href="index.html">Home</a></li>
            <li><a href="about-us.html">ABOUT US</a></li>
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">EVENTS <span
                        class="caret caret-up"></span></a>
                <ul class="dropdown-menu  drop-up">
                    <li><a href="upcoming-events.html">UPCOMING EVENTS</a></li>
                    <li><a href="other-events.html">OTHER EVENTS</a></li>
                    <li><a href="gallery.html">GALLERY</a></li>
                </ul>
            </li>

            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">LANGUAGE COURSES <span
                        class="caret caret-up"></span></a>
                <ul class="dropdown-menu  drop-up">
                    <li><a href="italian-lessons.html">ITALIAN LESSONS </a></li>
                    <li><a href="english-lessons.html">ENGLISH LESSONS </a></li>
                </ul>
            </li>


            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">LOOKING FOR <span
                        class="caret caret-up"></span></a>
                <ul class="dropdown-menu  drop-up">
                    <li><a href="jobs.html">JOBS </a></li>
                    <li><a href="rooms-for-rent.html">ROOMS FOR RENT</a></li>
                    <li><a href="businesses-services.html">BUSINESSES &amp; SERVICES </a></li>
                </ul>
            </li>

            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">ADVERTISING <span
                        class="caret caret-up"></span></a>
                <ul class="dropdown-menu  drop-up">
                    <li><a href="sponsorships.html">SPONSORSHIPS </a></li>
                    <li><a href="classifieds.html">CLASSIFIEDS</a></li>
                </ul>
            </li>


            <li><a href="blog-press.html">BLOG &amp; PRESS </a></li>
            <li><a href="contact-us.html">CONTACT US </a></li>
        </ul>

    </nav>
    <div class="copyright container text-center">&copy; Rome Expats All Rights Reserved</div>

</footer>

</div>
<!--MainBodycontainer-->

<!-- jQuery -->
<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>-->
<script src="/wp-content/themes/exparts/js/bootstrap/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="/wp-content/themes/exparts/js/bootstrap/bootstrap.min.js"></script>

<script src="/wp-content/themes/exparts/dist/jquery.superslides.js" type="text/javascript" charset="utf-8"></script>

<!-- Theme JavaScript -->
<script src="/wp-content/themes/exparts/js/main.js"></script>

<script>
    $('#slides').superslides({
        animation: 'fade',
        play: 5000
    });
</script>

<script type="text/javascript">
    $('.responsive-tabs').responsiveTabs({
        accordionOn: ['xs', 'sm'] // xs, sm, md, lg
    });
</script>
<script src="/wp-content/themes/exparts/js/jquery.flexslider.js" type="text/javascript"></script>
<script type="text/javascript">
    $(window).load(function () {
        $('.flexslider').flexslider({
            animation: "slide",
            animationLoop: false,
            itemWidth: 320,
            itemMargin: 0,
            pausePlay: true,
            start: function (slider) {
                $('body').removeClass('loading');
            }
        });
    });
    $(document).ready(function(){
        $("ul.sub-menu").parent().addClass("dropdown");
        $("ul.sub-menu").addClass("dropdown-menu");
        $("ul#header li.dropdown a").addClass("dropdown-toggle");
        $("ul.sub-menu li a").removeClass("dropdown-toggle");
        $('.navbar .dropdown-toggle').append('<b class="caret"></b>');
        $('a.dropdown-toggle').attr('data-toggle', 'dropdown');
    });
</script>
</body>

</html>