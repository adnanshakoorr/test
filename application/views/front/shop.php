<section>
  <div class="about-banner">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12 center">
          <h2>Shop</h2>
        </div>
      </div>
    </div>
  </div>
</section>
<div class="bg-wrap-box">
<section>
  <div class="best-seller-sec">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-12">
          <div class="row">
            <div class="col-xs-6 col-md-12 col-sm-12 col-lg-12">
              <div class="bestseller">
                <h5>best seller</h5>
              </div>
            <?php foreach($data as $val):?>
              <div class=" col-md-3 col-sm-6 padding-left">
                <div class="product-grid">
                  <div class="product-image"> <a href="#"> <img class="pic-1" src="<?= base_url('assets/front/images/silder01.png');?>" alt="deal-pro-img-1"> </a>
                    <ul class="social">
                      <li><a href="<?= base_url('product_detail/').$val->id;?>" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
                      <li><a href="<?= base_url('cart');?>" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                    </ul>
                    <span class="product-new-label">Sale</span> <span class="product-discount-label">20%</span> </div>
                  <ul class="rating">
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star disable"></li>
                  </ul>
                  <div class="product-content">
                    <h3 class="title"><a style="cursor:pointer"><?= $val->name;?></a></h3>
                    <h6 class="title"><a style="cursor:pointer"><?= $val->description;?></a></h6>
                    <div class="price"><?= $val->price;?> <span>$50.00</span> </div>
                     </div>
                </div>
              </div>
              <?php endforeach;?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</div>