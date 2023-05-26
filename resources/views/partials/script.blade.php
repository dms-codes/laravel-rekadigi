<script id="facebook-jssdk" src="https://connect.facebook.net/id_ID/sdk/xfbml.customerchat.js"></script>    
<script id="facebook-jssdk" src="https://connect.facebook.net/id_ID/sdk/xfbml.customerchat.js"></script>
<script type="text/javascript">var global_url = "https://gas.id/";var global_var = "c83867930f54d4f4695f6c4cca3f9e8abb7133e47ac3a903279bbe827b3ba598";var current_date = "26 May 2023";var dateNow = "26";var monthNow = "May";var yearNow = "2023";</script>
<script type="text/javascript">
        function openmenu() {
            jQuery(".close_window").addClass('open');
            jQuery("#leftmenu").animate({
                width: '240px'
            });
            return;
        }

        function closemenu() {
            jQuery(".close_window").removeClass('open');
            jQuery("#leftmenu").animate({
                width: '0px'
            });
            return;
        }
    </script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script type="text/javascript" src="https://gas.id/js/slick/slick/slick.js"></script>
<script type="text/javascript" src="https://gas.id/js/main-feature.js"></script>
<script type="text/javascript" src="https://gas.id/js/modernizr.custom.js"></script>
<script type="text/javascript" src="https://gas.id/js/classie.js"></script>
<script type="text/javascript" src="https://gas.id/js/sidebarEffects.js"></script>
<script type="text/javascript" src="https://gas.id/js/slick/slick/slick.min.js"></script>
<script type="text/javascript" src="https://gas.id/js/feedback.js"></script>
<script>
    function open_descjob(value) {
        $('#descmodal_' + value).fadeIn();
        $('#jobrequired_' + value).fadeIn();
    }

    function close_descjob(value) {
        $('#descmodal_' + value).fadeOut();
        $('#jobrequired_' + value).fadeOut();
    }

    function open_contactus() {
        $('#contactus, #wrap_form_feedback').fadeIn();
    }
    var span = document.getElementById("close_pop");
    span.onclick = function() {
        $('#contactus, #wrap_form_feedback').fadeOut();
    }
    // if ($('body').hasClass('page-template')) { $('#navbar_collapse,#navbar_burger').hide(); $('.titleback').show();}
</script>
<script>
    var OSName = 'https://play.google.com/store/apps/details?id=id.gas.app&amp;amp;hl=en';
    var userAgent = navigator.userAgent || navigator.vendor || window.opera;

    function button_open() {
        if (/android/i.test(userAgent)) {
            OSName = 'https://play.google.com/store/apps/details?id=id.gas.app&amp;amp;hl=en';
        }

        if (/iPad|iPhone|iPod/.test(userAgent) && !window.MSStream) {
            OSName = '';
        }
        window.open(OSName);
    }
</script>
<script>
    AOS.init();
</script>