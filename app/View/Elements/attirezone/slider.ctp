<!-- start slider -->
<div id="fwslider">
    <div class="slider_container">
        <?php foreach ($imagesliders as $slide){ ?>

        <div class="slide">
            <?php echo $this->Html->image("images/slider/".$slide['Imageslider']['imageurl'],array("alt"=>""))  ?>
            <div class="slide_content">
                <div class="slide_content_wrap">
                </div>
            </div>
        </div>

        <?php } ?>

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