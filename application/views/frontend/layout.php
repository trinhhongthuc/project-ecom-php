<!DOCTYPE html>
<html lang="en">

<head>
    <base href="<?php echo base_url(); ?>">
    </base>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>
        Sàn thương mại điện tử

    </title>
    <!-- <link rel="icon" type="image/x-icon" href="public/images/cart2.png"> -->
    <link href="public/css/bootstrap.css" rel="stylesheet">
    <!-- <link href="public/css/font-awesome.css" rel="stylesheet"> -->
    <link href="public/css/lte.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <link href="public/css/owl.carousel.min.css" rel="stylesheet">
    <link href="public/css/AdminLTE.css" rel="stylesheet">
    <link rel="stylesheet" href="public/css/style-jc.css">
    <link href="public/css/menu-tab.css" rel="stylesheet">
    <link href="public/css/style.css" rel="stylesheet">
    <link href="public/css/jquery.bxslider.css" rel="stylesheet">
    <link href="public/css/flexslider.css" rel="stylesheet">

    <script src="http://code.jquery.com/jquery-3.4.0.min.js"
        integrity="sha256-BJeo0qm959uMBGb65z40ejJYGSgR7REI4+CW1fNKwOg=" crossorigin="anonymous"></script>


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.js"></script>

    <script src="public/js/jquery-2.2.3.min.js"></script>

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
</head>

<body>

    <script type="text/javascript">
    $document.ready(function() {

        AOS.init();
    })
    </script>
    <!-- Navbar scroll  -->
    <div>
        <?php 
            $this->load->view('frontend/modules/NavbarScroll');
        ?>
    </div>

    <!-- nut scroll top -->
    <div class='thetop'></div>



    <script>
    (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s);
        js.id = id;
        js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.8";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
    </script>
    <!-- HEADER LOGO + SEARCH -->
    <?php 
            $this->load->view('frontend/modules/logo-search');
        ?>
    <section id="menu-slider">
        <?php 
                $this->load->view('frontend/modules/panel-left');
            ?>
    </section>
    <!--CONTENT-->
    <?php 
            if(isset($com,$view)){
                $this->load->view('frontend/components/'.$com.'/'.$view);
            }
            else
                $this->load->view('frontend/components/Error404/index');
        ?>
    <!--FOOTER-->
    <?php 
            $this->load->view('frontend/modules/footer');
        ?>

    <!-- icon scroll top -->
    <div class='scrolltop'>
        <div class='scroll icon'><i class="fa fa-4x fa-angle-up"></i></div>
    </div>

    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v11.0"
        nonce="6cIsYLtk"></script>

    <script src="public/js/bootstrap.js"></script>
    <script src="public/js/app.min.js"></script>
    <script src="public/js/owl.carousel.js"></script>
    <script src="public/js/jquery.jcarousel.js"></script>
    <script src="public/js/jcarousel.connected-carousels.js"></script>
    <script src="public/js/scroll.js"></script>
    <script src="public/js/ScrollNavbar.js"></script>

    <script src="public/js/search-quick.js"></script>
    <script src="public/js/custom-owl.js"></script>
    <script src="public/js/jquery.flexslider.js"></script>

</body>

</html>


<style type="text/css">
.ratingblock {
    display: inline-block !important;
    padding-bottom: 8px !important;
    margin-bottom: 8px !important;
}

.loading {
    height: 30px !important;
    background: url('../images/working.gif') 50% 50% no-repeat !important;
}

.unit-rating {
    /* the UL */
    list-style: none !important;
    margin: 0px !important;
    padding: 0px !important;
    height: 30px !important;
    position: relative !important;
    background: url('../images/starrating.gif') top left repeat-x !important;
}

.unit-rating li {
    text-indent: -90000px !important;
    padding: 0px !important;
    margin: 0px !important;
    /*\*/
    float: left !important;
    /* */
}

.unit-rating li a {
    outline: none !important;
    display: inline-block !important;
    width: 30px !important;
    height: 30px !important;
    text-decoration: none !important;
    text-indent: -9000px !important;
    z-index: 20 !important;
    position: absolute !important;
    padding: 0px !important;
}

.unit-rating li a:hover {
    background: url('../images/starrating.gif') left center !important;
    z-index: 2 !important;
    left: 0px !important;
}

.unit-rating a.r1-unit {
    left: 0px !important;
}

.unit-rating a.r1-unit:hover {
    width: 30px !important;
}

.unit-rating a.r2-unit {
    left: 30px !important;
}

.unit-rating a.r2-unit:hover {
    width: 60px !important;
}

.unit-rating a.r3-unit {
    left: 60px !important;
}

.unit-rating a.r3-unit:hover {
    width: 90px !important;
}

.unit-rating a.r4-unit {
    left: 90px !important;
}

.unit-rating a.r4-unit:hover {
    width: 120px !important;
}

.unit-rating a.r5-unit {
    left: 120px !important;
}

.unit-rating a.r5-unit:hover {
    width: 150px !important;
}

.unit-rating a.r6-unit {
    left: 150px !important;
}

.unit-rating a.r6-unit:hover {
    width: 180px !important;
}

.unit-rating a.r7-unit {
    left: 180px !important;
}

.unit-rating a.r7-unit:hover {
    width: 210px !important;
}

.unit-rating a.r8-unit {
    left: 210px !important;
}

.unit-rating a.r8-unit:hover {
    width: 240px !important;
}

.unit-rating a.r9-unit {
    left: 240px !important;
}

.unit-rating a.r9-unit:hover {
    width: 270px !important;
}

.unit-rating a.r10-unit {
    left: 270px !important;
}

.unit-rating a.r10-unit:hover {
    width: 300px !important;
}

.unit-rating li.current-rating {
    background: url('../images/starrating.gif') left bottom !important;
    position: absolute !important;
    height: 30px !important;
    display: block !important;
    text-indent: -9000px !important;
    z-index: 1 !important;
}

.voted {
    color: #999 !important;
}

.thanks {
    color: #36AA3D !important;
}

.static {
    color: #5D3126 !important;
}
</style>