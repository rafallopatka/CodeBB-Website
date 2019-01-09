
<script>
        /*! loadCSS. [c]2017 Filament Group, Inc. MIT License */
        /* This file is meant as a standalone workflow for
        - testing support for link[rel=preload]
        - enabling async CSS loading in browsers that do not support rel=preload
        - applying rel preload css once loaded, whether supported or not.
        */
        (function( w ){
            "use strict";
            // rel=preload support test
            if( !w.loadCSS ){
                w.loadCSS = function(){};
            }
            // define on the loadCSS obj
            var rp = loadCSS.relpreload = {};
            // rel=preload feature support test
            // runs once and returns a function for compat purposes
            rp.support = (function(){
                var ret;
                try {
                    ret = w.document.createElement( "link" ).relList.supports( "preload" );
                } catch (e) {
                    ret = false;
                }
                return function(){
                    return ret;
                };
            })();
        
            // if preload isn't supported, get an asynchronous load by using a non-matching media attribute
            // then change that media back to its intended value on load
            rp.bindMediaToggle = function( link ){
                // remember existing media attr for ultimate state, or default to 'all'
                var finalMedia = link.media || "all";
        
                function enableStylesheet(){
                    link.media = finalMedia;
                }
        
                // bind load handlers to enable media
                if( link.addEventListener ){
                    link.addEventListener( "load", enableStylesheet );
                } else if( link.attachEvent ){
                    link.attachEvent( "onload", enableStylesheet );
                }
        
                // Set rel and non-applicable media type to start an async request
                // note: timeout allows this to happen async to let rendering continue in IE
                setTimeout(function(){
                    link.rel = "stylesheet";
                    link.media = "only x";
                });
                // also enable media after 3 seconds,
                // which will catch very old browsers (android 2.x, old firefox) that don't support onload on link
                setTimeout( enableStylesheet, 3000 );
            };
        
            // loop through link elements in DOM
            rp.poly = function(){
                // double check this to prevent external calls from running
                if( rp.support() ){
                    return;
                }
                var links = w.document.getElementsByTagName( "link" );
                for( var i = 0; i < links.length; i++ ){
                    var link = links[ i ];
                    // qualify links to those with rel=preload and as=style attrs
                    if( link.rel === "preload" && link.getAttribute( "as" ) === "style" && !link.getAttribute( "data-loadcss" ) ){
                        // prevent rerunning on link
                        link.setAttribute( "data-loadcss", true );
                        // bind listeners to toggle media back
                        rp.bindMediaToggle( link );
                    }
                }
            };
        
            // if unsupported, run the polyfill
            if( !rp.support() ){
                // run once at least
                rp.poly();
        
                // rerun poly on an interval until onload
                var run = w.setInterval( rp.poly, 500 );
                if( w.addEventListener ){
                    w.addEventListener( "load", function(){
                        rp.poly();
                        w.clearInterval( run );
                    } );
                } else if( w.attachEvent ){
                    w.attachEvent( "onload", function(){
                        rp.poly();
                        w.clearInterval( run );
                    } );
                }
            }
        
        
            // commonjs
            if( typeof exports !== "undefined" ){
                exports.loadCSS = loadCSS;
            }
            else {
                w.loadCSS = loadCSS;
            }
        }( typeof global !== "undefined" ? global : this ) );
        </script>


<script src="assets/plugins/jquery.min.js" type="text/javascript"></script>
<script src="assets/plugins/jquery-migrate.min.js" type="text/javascript"></script>
<script src="assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>

<script src="assets/plugins/jquery.easing.js" type="text/javascript"></script>
<script src="assets/plugins/jquery.parallax.js" type="text/javascript"></script>
<script src="assets/plugins/smooth-scroll/smooth-scroll.js" type="text/javascript"></script>
<script src="assets/plugins/owl.carousel/owl.carousel.min.js" type="text/javascript"></script>
<script src="assets/plugins/cubeportfolio/cubeportfolio/js/jquery.cubeportfolio.min.js" type="text/javascript"></script>
<script src="assets/onepage2/scripts/portfolio.js" type="text/javascript"></script>

<script src="assets/onepage2/scripts/layout.js" type="text/javascript"></script>
<script src="assets/pages/scripts/bs-carousel.js" type="text/javascript"></script>



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
