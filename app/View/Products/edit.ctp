<?php echo $this->element('admin/header'); ?>
<?php echo $this->element("admin/leftnav"); ?> 
<section id="main-content">
          <section class="wrapper">

          	
          	<!-- BASIC FORM ELELEMNTS -->
          	<div class="row mt">
          		<div class="col-lg-12">
                  <div class="form-panel">
                  	  <h4 class="mb"><i class="fa fa-angle-right"></i><?php echo __('Edit Product'); ?></h4>
<?php echo $this->Form->create('Product'); ?>
	<fieldset>
		<legend><?php echo __('Edit Product'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('subcategory_id');
		echo $this->Form->input('code');
		echo $this->Form->input('inrprice');
		echo $this->Form->input('usdprice');
		echo $this->Form->input('features');
		echo $this->Form->input('description');
	?>
	</fieldset>
                          <table>
                              <tr>
                                  <td>Samll Image</td>
                                  <td>Large Image</td>
                              </tr>
                              <tr>
                                  <td>
                                      <img src="/img/images/<?php echo $this->request->data['Product']['image1_small']; ?>" style="width: 100px; height: auto;">
                                  </td>
                                  <td>
                                      <img src="/img/images/silk/pic/<?php echo $this->request->data['Product']['image1']; ?>" style="width: 100px; height: auto;">
                                  </td>
                              </tr>
                          </table>
<?php echo $this->Form->end(__('Submit')); ?>
                          
                  </div>
          		</div><!-- col-lg-12-->      	
          	</div><!-- /row -->

          	
          	
		</section><!-- --/wrapper ---->
      </section>