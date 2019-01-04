<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->
<!--[if lt IE 9]>
<script src="assets/plugins/respond.min.js"></script>
<script src="assets/plugins/excanvas.min.js"></script> 
<![endif]-->
<script src="assets/plugins/jquery.min.js" type="text/javascript"></script>
<script src="assets/plugins/jquery-migrate.min.js" type="text/javascript"></script>
<script src="assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="assets/plugins/jquery.easing.js" type="text/javascript"></script>
<script src="assets/plugins/jquery.parallax.js" type="text/javascript"></script>
<script src="assets/plugins/smooth-scroll/smooth-scroll.js" type="text/javascript"></script>
<script src="assets/plugins/owl.carousel/owl.carousel.min.js" type="text/javascript"></script>
<!-- BEGIN CUBEPORTFOLIO -->
<script src="assets/plugins/cubeportfolio/cubeportfolio/js/jquery.cubeportfolio.min.js" type="text/javascript"></script>
<script src="assets/onepage2/scripts/portfolio.js" type="text/javascript"></script>
<!-- END CUBEPORTFOLIO -->
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="assets/onepage2/scripts/layout.js" type="text/javascript"></script>
<script src="assets/pages/scripts/bs-carousel.js" type="text/javascript"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<script>
    function hideCookiePanel(persist){
        $(".cookies-info").hide();

        if(persist === true && typeof(Storage) !== "undefined"){
             localStorage.setItem("cookie-info-hidden", true);
        }
    }

    function collapseCookiePanel(persist){
        $(".cookies-info").addClass("cookies-info-collapsed");

        if(persist === true && typeof(Storage) !== "undefined"){
            localStorage.setItem("cookie-info-collapsed", true);
        }
    }

    jQuery(document).ready(function() {    
        Layout.init();

        $(".close-cookie").on("click", function(){
            hideCookiePanel(true);
        })

        setTimeout(function(){
            collapseCookiePanel(true);
        }, 5000);

        if(typeof(Storage) !== "undefined"){
            var isHidden = localStorage.getItem("cookie-info-hidden");
            var isCollapsed = localStorage.getItem("cookie-info-collapsed");

            if(isHidden === "true"){
                hideCookiePanel(false);
            } else if(isCollapsed === "true") {
                collapseCookiePanel(false);
            }
        }
    });


</script>
<!-- END JAVASCRIPTS -->

<script>
        
        function onRecaptchaLoadCallback() {
            var clientId = grecaptcha.render('inline-badge', {
                'sitekey': '6Le0mYUUAAAAAKX0Hf0fHFOAZ4V3MCyF1UADshpN',
                'badge': 'inline',
                'size': 'invisible'
            });
    
            grecaptcha.ready(function() {
                grecaptcha.execute(clientId, {
                        action: 'action_name'
                    })
                    .then(function(token) {
                        // Verify the token on the server.
                    });
            });
        }
    </script>
