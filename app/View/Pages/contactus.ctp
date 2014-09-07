<?php

echo $this->element('attirezone/headertop'); ?>
<?php echo $this->element("attirezone/headerbottom"); ?>
<div class="login">
    <div class="wrap">
        <ul class="breadcrumb breadcrumb__t"><a href="#" class="home">Home</a>  / Contact</ul>
        <div class="content-top">
            <form action="contact-post.html" method="post">
                <div class="to">
                    <input type="text" onblur="if (this.value == '') {
                                this.value = 'Name';
                            }" onfocus="this.value = '';" value="Name" class="text">
                    <input type="text" style="margin-left: 10px" onblur="if (this.value == '') {
                                this.value = 'Email';
                            }" onfocus="this.value = '';" value="Email" class="text">
                </div>
                <div class="to">
                    <input type="text" onblur="if (this.value == '') {
                                this.value = 'Contact No.';
                            }" onfocus="this.value = '';" value="Contact No." class="text">
                    <input type="text" style="margin-left: 10px" onblur="if (this.value == '') {
                                this.value = 'Subject';
                            }" onfocus="this.value = '';" value="Subject" class="text">
                </div>
                <div class="text">
                    <textarea onblur="if (this.value == '') {
                                this.value = 'Message';
                            }" onfocus="this.value = '';" value="Message:">Message:</textarea>
                </div>
                <div class="submit">
                    <input type="submit" value="Submit">
                </div>
            </form>
            <div class="map">
                <iframe height="175" frameborder="0" width="100%" src="https://maps.google.co.in/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Lighthouse+Point,+FL,+United+States&amp;aq=4&amp;oq=light&amp;sll=26.275636,-80.087265&amp;sspn=0.04941,0.104628&amp;ie=UTF8&amp;hq=&amp;hnear=Lighthouse+Point,+Broward,+Florida,+United+States&amp;t=m&amp;z=14&amp;ll=26.275636,-80.087265&amp;output=embed" marginwidth="0" marginheight="0" scrolling="no"></iframe><br><small><a style="color:#666;text-align:left;font-size:12px" href="https://maps.google.co.in/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Lighthouse+Point,+FL,+United+States&amp;aq=4&amp;oq=light&amp;sll=26.275636,-80.087265&amp;sspn=0.04941,0.104628&amp;ie=UTF8&amp;hq=&amp;hnear=Lighthouse+Point,+Broward,+Florida,+United+States&amp;t=m&amp;z=14&amp;ll=26.275636,-80.087265">View Larger Map</a></small>
            </div>
        </div>
    </div> 
</div>
<?php echo $this->element("attirezone/footer"); ?> 