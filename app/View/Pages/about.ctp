<?php echo $this->element('attirezone/headertop'); ?>
<?php echo $this->element("attirezone/headerbottom"); ?>
<div class="login">
    <div class="wrap">
        <ul class="breadcrumb breadcrumb__t"><a href="index.html" class="home">Home</a>  / About</ul>
        <div class="section group">
            <div class="labout span_1_of_about">
                <h3>Testimonials</h3>
                <div class="testimonials ">
                    <div class="testi-item">
                        <blockquote class="testi-item_blockquote">
                            <a href="#">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </a>
                            <div class="clear"></div>
                        </blockquote>
                        <small class="testi-meta"><span class="user">Lorem ipsum dolor </span>,
                            <span class="info">sit amet</span></small></div>
                </div>
                <div class="testimonials ">
                    <div class="testi-item">
                        <blockquote class="testi-item_blockquote">
                            <a href="#">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </a>
                            <div class="clear"></div>
                        </blockquote>
                        <small class="testi-meta"><span class="user">Lorem ipsum dolor</span>,
                            <span class="info">sit amet</span></small></div>
                </div>
            </div>
            <div class="cont span_2_of_about">
                <h3>About Attirezone</h3>
                <p>Threads….of different hues…different states….different weaves….</p>
                <p>Threads… that make the most gorgeous wear on earth.</p>
                <p>Threads which create a unique assembly of a stunning collection of sarees.  dazzling Silks, muted Tusshars, elegant Dhakais, earthy Cottons , alluring  Kanjivarams.</p>
                <p><b>AttireZone</b> &ndash; for an exclusive range of exquisite weaves sourced from the bylanes of Benaras to the temple towns of Kanchipuram, from the the handlooms of Bengal to the silks of the Brahmaputra valley and of course - the most elegant Jamdanis from across the border.</p>
                <p>Sarees which are woven with the expertise of centuries by craftsmen who are artists in their own right. 
                    Each saree is a tale by itself. Every drape a masterpiece.
                    Come to Attire Zone. Come to a dazzling display of exquisite sarees at prices that will not blow your purse. It will surely blow your mind!</p>
                <p></p>

                <script type="text/javascript" src="js/jquery.magnific-popup.js"></script>
                <link type="text/css" rel="stylesheet" href="css/magnific-popup.css">
                <script>
                    $(document).ready(function() {
                        $('.popup-with-zoom-anim').magnificPopup({
                            type: 'inline',
                            fixedContentPos: false,
                            fixedBgPos: true,
                            overflowY: 'auto',
                            closeBtnInside: true,
                            preloader: false,
                            midClick: true,
                            removalDelay: 300,
                            mainClass: 'my-mfp-zoom-in'
                        });
                    });
                </script>
            </div>
            <div class="clear"></div>	
        </div>
    </div>	
</div>
<?php echo $this->element("attirezone/footer"); ?> 