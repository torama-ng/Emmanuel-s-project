<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
    
        <title>{{ config('app.name', 'Laravel') }}</title>
    
                <link href="{{ asset('css/style.css') }}" rel="stylesheet">
                <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
                <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
                <link href="{{ asset('css/css/jquery.datetimepicker.css') }}" rel="stylesheet">
                <link href="{{ asset('css/chosen.css') }}" rel="stylesheet">
            
                <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Droid+Serif:100,300,400,700,900,300italic,400italic,700italic,900italic' type='text/css' media='all'/>
                <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Montserrat:100,300,400,700,900,300italic,400italic,700italic,900italic' type='text/css' media='all'/>
                
        
                <script src="{{ asset('js/app.js') }}" defer></script>
                <script src="{{ asset('js/hoverIntent-r7.min.js') }}" defer></script>
                <script src="{{ asset('js/superfish-1.7.4.min.js') }}" defer></script>
                <script src="{{ asset('js/jquery.cookie.js') }}" defer></script>
                <script src="{{ asset('js/jquery.blockUI.min.js') }}" defer></script>
                <script src="{{ asset('js/imagesloaded.pkgd.min.js') }}" defer></script>
                <script src="{{ asset('js/jquery.js') }}" defer></script>
                <script src="{{ asset('js/jquery-migrate.min.js') }}" defer></script>
                <script src="{{ asset('js/modernizr-2.7.1.min.js') }}" defer></script>
                {{-- <script src="{{ asset('js/bootstrap.min.js') }}" defer></script> --}}
                <script src="{{ asset('js/jquery.touchSwipe.min.js') }}" defer></script>
                <script src="{{ asset('js/isotope-2.0.0.min.js') }}" defer></script>
                <script src="{{ asset('js/jquery.datetimepicker.js') }}" defer></script>
                <script src="{{ asset('js/jquery.parallax-1.1.3.js') }}" defer></script>    
                <script src="{{ asset('js/jquery.carouFredSel-6.2.1-packed.js') }}" defer></script>
                <script src="{{ asset('js/bootstrap.min.js') }}" defer></script>
                <script src="{{ asset('js/chosen.jquery.min.js') }}" defer></script>
                <script src="{{ asset('js/custom.js') }}" defer></script>
                <script src="{{ asset('js/script.js') }}" defer></script>
                <script>
                        jQuery('document').ready(function ($) {
                            $('#noo-slider-3 .sliders').carouFredSel({
                                infinite: true,
                                circular: true,
                                responsive: true,
                                debug : false,
                                items: {
                                  start: 0
                                },
                                scroll: {
                                  items: 1,
                                  duration: 400,
                
                                  fx: "scroll"
                                },
                                auto: {
                                  timeoutDuration: 3000,
                
                                  play: true
                                },
                
                                pagination: {
                                  container: "#noo-slider-3-pagination"
                                },
                                swipe: {
                                  onTouch: true,
                                  onMouse: true
                                }
                            });
                            $('#noo-tabs-2 a:eq(0)').tab('show');
                        });
                    </script>
                
            
    </head>