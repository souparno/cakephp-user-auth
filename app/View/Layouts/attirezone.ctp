<html style="" class=" js cssanimations csstransforms">
    <head>
        <title>Home :: attirezone.com</title>
        <meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport">
        <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
        <link media="all" type="text/css" rel="stylesheet" href="/css/attirezone/style.css">
        <link media="all" type="text/css" rel="stylesheet" href="/css/attirezone/form.css">
        <link type="text/css" rel="stylesheet" href="http://fonts.googleapis.com/css?family=Exo+2">
        <link href="/css/attirezone/css/style.css" type="text/css" rel="stylesheet">
        <script src="/js/attirezone/jquery1.min.js" type="text/javascript"></script>
        <!-- start menu -->
        <link media="all" type="text/css" rel="stylesheet" href="/css/attirezone/megamenu.css">
        <script src="/js/attirezone/megamenu.js" type="text/javascript"></script>
        <script>
            $(document).ready(function() {
                $(".megamenu").megamenu();
            });
        </script>
        <!--start slider -->
        <link media="all" href="/css/attirezone/fwslider.css" rel="stylesheet">
        <script src="/js/attirezone/jquery-ui.min.js"></script>
        <script src="/js/attirezone/css3-mediaqueries.js"></script>
        <script src="/js/attirezone/fwslider.js"></script>
        <script src="/js/attirezone/js/modernizr.custom.63321.js"></script>
        <!--end slider -->
        <script src="/js/attirezone/jquery.easydropdown.js"></script>
        <style type="text/css">
            /** Paging **/
            .paging {                
                color: #ccc;
                margin-top: 1em;
                clear:both;
            }
            .paging .current,
            .paging .disabled,
            .paging a {
                text-decoration: none;
                padding: 5px 8px;
                display: inline-block
            }
            .paging > span {
                display: inline-block;
                border: 1px solid #ccc;
                border-left: 0;
            }
            .paging > span:hover {
                background: #efefef;
            }
            .paging .prev {
                border-left: 1px solid #ccc;
                -moz-border-radius: 4px 0 0 4px;
                -webkit-border-radius: 4px 0 0 4px;
                border-radius: 4px 0 0 4px;
            }
            .paging .next {
                -moz-border-radius: 0 4px 4px 0;
                -webkit-border-radius: 0 4px 4px 0;
                border-radius: 0 4px 4px 0;
            }
            .paging .disabled {
                color: #ddd;
            }
            .paging .disabled:hover {
                background: transparent;
            }
            .paging .current {
                background: #efefef;
                color: #c73e14;
            }
        </style>
        <link media="all" type="text/css" rel="stylesheet" href="/css/attirezone/default.css">
        <link media="all" type="text/css" rel="stylesheet" href="/css/attirezone/nivo-slider.css">
    </head>
    <body>


    <?php echo $this->Session->flash(); ?>
    <?php echo $this->fetch('content'); ?>
    <?php echo $this->element('sql_dump'); ?>



        <script src="/js/attirezone/jquery.nivo.slider.js"></script>
        <script src="/js/attirezone/js/jquery.catslider.js"></script>
        <script>
            $(window).load(function() {
                $('#slider').nivoSlider();
            });
            $(function() {

                $('#mi-slider').catslider();

            });
        </script>

    </body>
