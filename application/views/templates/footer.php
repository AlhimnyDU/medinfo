<div class="row fixed-bottom">
    <div class="col-md-1" style="background-color: #EEEEEE;padding:10px;">
        <div style="margin-top : 5px;font-size: 28px; font-family: Franklin Gothic;color: black;">
            <center><b><?php echo date("H:i") ?></b></center>
        </div>
    </div>
    <div class="col-md-10" style="background-color: #FF5000; padding:10px;">
        <marquee style="margin-top : 5px;font-size: 24px; font-family: Franklin Gothic;color: white;"><?php echo $run ?> &#10209</marquee>
    </div>
    <div class="col-md-1" style="background-color: #EEEEEE;padding:10px;">
        <div style="margin-top : 5px; font-family: Arial, Helvetica, sans-serif;color: black;">
            <img src="<?php echo base_url() ?>assets/img/logo.png" style="width: 150px;height:auto;">
        </div>
    </div>
</div>
<!--footer end -->

<!-- jquery -->
<script src="<?php echo base_url() ?>assets/js/jquery.min.js"></script>
<!-- bootstrap -->
<script src="<?php echo base_url() ?>assets/js/popper.js"></script>
<script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/waypoints.min.js"></script>
<!--slick carousel -->
<script src="<?php echo base_url() ?>assets/js/owl.carousel.min.js"></script>
<!--parallax -->
<script src="<?php echo base_url() ?>assets/js/parallax.min.js"></script>
<!--Counter up -->
<script src="<?php echo base_url() ?>assets/js/jquery.counterup.min.js"></script>
<!--Counter down -->
<script src="<?php echo base_url() ?>assets/js/jquery.countdown.min.js"></script>
<!-- WOW JS -->
<script src="<?php echo base_url() ?>assets/js/wow.min.js"></script>
<!-- Custom js -->
<script src="<?php echo base_url() ?>assets/js/main.js"></script>
<script src="https://vjs.zencdn.net/7.10.2/video.min.js"></script>
<script>
    var i = 1;
    var slide = [];
    var player = [];
</script>
<?php $count = $count; ?>
<script>
    for (var a = 1; a <= <?php echo $count ?>; a++) {
        slide[a] = $("#slide" + a).data('value');
        if (slide[a] == "video") {
            player[a] = videojs('my-video' + a);
            player[a].on('ended', function() {
                owl.trigger('play.owl.autoplay');
            });
        }
        console.log(slide[a]);
    }
    var owl = $('.cover_slider');

    $(".cover_slider").owlCarousel({
        loop: true,
        autoplay: true,
        smartSpeed: 1000,
        autoplayHoverPause: false,
        autoplayTimeout: 8000,
        dots: true,
        nav: false,
        mouseDrag: false,
        items: 1,
        animateOut: 'fadeOut',
        animateIn: 'fadeIn',
        dotsContainer: '.cover_dots'
    });
    owl.on('changed.owl.carousel', function(e) {
        i = i + 1;
        console.log(i);
        if (slide[i] == "video") {
            player[i].play();
            owl.trigger('stop.owl.autoplay');
        }
        if (i > <?php echo $count ?>) {
            i = 1;
            // player.play();
        }
    });
    $(".cover_slider2").owlCarousel({
        loop: true,
        autoplay: true,
        smartSpeed: 1500,
        autoplayHoverPause: false,
        autoplayTimeout: 8000,
        dots: true,
        nav: false,
        mouseDrag: false,
        items: 1,
        animateOut: 'fadeOut',
        animateIn: 'fadeIn',
        dotsContainer: '.cover_dots'
    });
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/locale/id.js" integrity="sha512-yx7T1zyRttM8NI4IYfUDT5nZQvmYDiB2A8XgssZce97V49SJLJ2s+PIBJje8OToaQVZZA7T69xM77qemTBqF5A==" crossorigin="anonymous"></script>
<script>
    $(document).ready(function() {
        var scrollTime = moment().format("HH") + ":00:00";
        var calendar = $('#calendar').fullCalendar({
            height: 440,
            locale: 'id',
            minTime: "08:00:00",
            maxTime: "24:00:00",
            defaultView: 'agendaWeek',
            slotDuration: '00:20:00',
            slotLabelFormat: 'H:mm',
            scrollTime: scrollTime,
            allDaySlot: false,
            header: {
                left: '',
                center: "",
                right: ''
            },
            views: {
                agendaWeek: { // name of view
                    titleFormat: 'DD MMMM YYYY',
                    columnFormat: 'dddd D/M',

                    // other view-specific options here
                }
            },
            events: "<?php echo base_url(); ?>Media/loadEvent",
            eventRender: function(eventObj, $el) {
                $el.popover({
                    title: eventObj.title,
                    content: eventObj.description,
                    trigger: 'hover',
                    placement: 'top',
                    container: 'body'
                });
            }
        });
        setInterval(function() {
            $('#calendar').fullCalendar('removeEvents');
            $('#calendar').fullCalendar('addEventSource', "<?php echo base_url(); ?>Media/loadEvent");
            $('#calendar').fullCalendar('rerenderEvents');
            calendar.scrollToTime(moment().format("HH") + ":00:00");
            console.log("update fc");
        }, 60000);
    });
</script>
<script>
    var $el = $(".calendar");

    function anim() {
        var st = $el.scrollTop();
        var sb = $el.prop("scrollHeight") - $el.innerHeight();
        $el.animate({
            scrollTop: st < sb / 2 ? sb : 0
        }, 80000, anim);
    }

    function stop() {
        $el.stop();
    }
    anim();
    $el.hover(stop, anim);
</script>
</body>

</html>