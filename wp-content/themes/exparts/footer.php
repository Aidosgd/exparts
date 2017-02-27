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