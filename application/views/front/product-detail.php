<section>
  <div class="card-banner"></div>
</section>
<section>
	<div class="container">
		<div class="card2">
			<div class="container-fliud">
				<div class="wrapper row">
					<div class="preview col-md-6">
						
						<div class="preview-pic tab-content">
						  <div class="tab-pane active" id="pic-1"><img src="<?= base_url('assets/front/images/d1.jpg');?>" class="img-responsive" /></div>
						  <div class="tab-pane" id="pic-2"><img src="<?= base_url('assets/front/images/d3.jpg');?>" class="img-responsive" /></div>
						  <div class="tab-pane" id="pic-3"><img src="<?= base_url('assets/front/images/d5.jpg');?>" class="img-responsive" /></div>
						  <div class="tab-pane" id="pic-4"><img src="<?= base_url('assets/front/images/d7.jpg');?>" class="img-responsive" /></div>
						  <div class="tab-pane" id="pic-5"><img src="<?= base_url('assets/front/images/d9.jpg');?>" class="img-responsive" /></div>
						</div>
						<ul class="preview-thumbnail nav nav-tabs">
						  <li class="active"><a data-target="#pic-1" data-toggle="tab"><img src="<?= base_url('assets/front/images/d2.jpg');?>" class="img-responsive" /></a></li>
						  <li><a data-target="#pic-2" data-toggle="tab"><img src="<?= base_url('assets/front/images/d4.jpg');?>" class="img-responsive" /></a></li>
						  <li><a data-target="#pic-3" data-toggle="tab"><img src="<?= base_url('assets/front/images/d6.jpg');?>" class="img-responsive" /></a></li>
						  <li><a data-target="#pic-4" data-toggle="tab"><img src="<?= base_url('assets/front/images/d8.jpg');?>" class="img-responsive" /></a></li>
						  <li><a data-target="#pic-5" data-toggle="tab"><img src="<?= base_url('assets/front/images/d10.jpg');?>" class="img-responsive" /></a></li>
						</ul>		
					</div>
					<?php foreach($data as $val):?>
					<div class="details col-md-6">
						<h3 class="product-title"><?= $val->name;?></h3>
						<div class="rating">
							<div class="stars">
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star"></span>
								<span class="fa fa-star"></span>
							</div>
							<span class="review-no">41 reviews</span>
						</div>
						<p class="product-description"><?= $val->description;?> </p>
						<h4 class="price">current price: <span><?= $val->price;?></span></h4>
						<p class="vote"><strong>91%</strong> of buyers enjoyed this product! <strong>(87 votes)</strong></p>
						<div class="action-cus">
							<div class="col-md-5 col-sm-5 col-xs-12 padding-lift">
           				 <a href="<?= base_url('cart');?>"><button>add to cart</button></a>
          			  </div>	
						</div>
					</div>
					<?php endforeach;?>
				</div>
			</div>
		</div>
	</div>
</section>
<div class="clearfix"></div>




