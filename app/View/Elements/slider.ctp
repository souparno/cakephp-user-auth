<!-- start slider -->
<div id="fwslider">
    <div class="slider_container">
        <div class="slide">
            <?php echo $this->Html->image('images/slider/banner2.jpg',array("alt"=>""))  ?>
            <div class="slide_content">
                <div class="slide_content_wrap">
                </div>
            </div>
        </div>
        <div class="slide">
            <?php echo $this->Html->image('images/slider/banner.jpg',array("alt"=>""))  ?>
            <div class="slide_content">
                <div class="slide_content_wrap">
                </div>
            </div>
        </div>
        <div class="slide">
            <?php echo $this->Html->image('images/slider/banner1.jpg',array("alt"=>""))  ?>
            <div class="slide_content">
            </div>
        </div>
    </div>
    <div class="timers"></div>
    <div class="slidePrev"><span></span></div>
    <div class="slideNext"><span></span></div>
</div>
<!--/slider -->
<script>
    $(function() {

        $('#mi-slider').catslider();

    });
</script>