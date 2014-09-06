<?php echo $this->element('attirezone/headertop'); ?>
<?php echo $this->element("attirezone/headerbottom"); ?>
<div class="register_account">
    <div class="wrap">
        <h4 class="title">Create an Account</h4>
        <form method="POST">
            <div class="col_1_of_2 span_1_of_2">
                <div><input type="text" id="UserUsername" maxlength="128" name="data[User][username]" placeholder="User Name" ></div>
                <div><input type="text" required="required" id="UserCompanyname" name="data[User][companyname]" placeholder="Company Name"></div>
                <div><input type="text" id="UserEmail" maxlength="128" name="data[User][email]" placeholder="Email"></div>
                <div>
                    <input type="text" id="UserPassword" name="data[User][password]" placeholder="Password">
                </div>
            </div>
            <div class="col_1_of_2 span_1_of_2">	
                <div><input type="text" id="UserPassword" name="data[User][address]" placeholder="Address"></div>
                <div>
                    <select required="required" id="UserCountryId" name="data[User][country_id]">
                      <?php foreach ($countries as $key => $value) {?>
                        <option value='<?php echo $key ?>'><?php echo $value; ?></option>
                      <?php } ?>
                    </select>
                </div>
                <input type="text" required="required" id="UserCity" rows="6" cols="30" name="data[User][city]" placeholder="City"/>
                <div>
                    <input type="text" placeholder="Phone Number" required="required" id="UserPhonenumber" rows="6" cols="30" name="data[User][phonenumber]">
                </div>
            </div>
            <input type="hidden" value="<?php echo $roles[0]['Role']['id'] ?>"name="data[User][role_id]"/>
            <button class="grey">Submit</button>
            <div class="clear"></div>
        </form>
    </div>
</div>
<?php echo $this->element("attirezone/footer"); ?>     
