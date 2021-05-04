<!-- <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/full-calendar.css" />
<div id="calendar" style='margin: 5px 20px 0px 5px'></div>
<script src="<?php echo base_url() ?>assets/js/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/locale/id.js" integrity="sha512-yx7T1zyRttM8NI4IYfUDT5nZQvmYDiB2A8XgssZce97V49SJLJ2s+PIBJje8OToaQVZZA7T69xM77qemTBqF5A==" crossorigin="anonymous"></script>
<script>
    $(document).ready(function() {
        var scrollTime = moment().format("HH") + ":00:00";
        var calendar = $('#calendar').fullCalendar({
            height: 1000,
            locale: 'id',
            minTime: "05:00:00",
            maxTime: "24:00:00",
            defaultView: 'agendaWeek',
            slotDuration: '00:30:00',
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
            events: "<?php echo base_url(); ?>Media/loadEvent"
        });
    });
</script> -->
<?php echo date("H:i:s") ?>