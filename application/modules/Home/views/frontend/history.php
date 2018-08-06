<?php /** @var $data Content */ ?>
<div class="colorlib-work" id="<?php echo $data->getId() ?>">
    <div class="colorlib-narrow-content">
        <div class="row">
            <div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
                <span class="heading-meta"><?php echo $data->getTitle() ?></span>
                <h2 class="colorlib-heading">30 Years Ago</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <a href="<?php echo base_url("frontend/products/category/1") ?>" class="services-wrap animate-box fadeInRight animated" data-animate-effect="fadeInRight">
                    <div class="services-img" style="background-image: url(<?php load_data("images/product_ad_2.jpg") ?>)"></div>
                    <div class="desc">
                        <h3>Alumunium Domes</h3>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="<?php echo base_url("frontend/products/category/2") ?>" class="services-wrap animate-box fadeInRight animated" data-animate-effect="fadeInRight">
                    <div class="services-img" style="background-image: url(<?php load_data("images/product_ifr_2.jpg") ?>)"></div>
                    <div class="desc">
                        <h3>Internal Floating Roofs</h3>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="<?php echo base_url("frontend/products/category/3") ?>" class="services-wrap animate-box fadeInRight animated" data-animate-effect="fadeInRight">
                    <div class="services-img" style="background-image: url(<?php echo load_data("images/product_seal_1.jpg")?>)"></div>
                    <div class="desc">
                        <h3>Thank Seals</h3>
                    </div>
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <p>
                    The management of TESS® has a track record of
                    almost 3 decades working in the field of atmospheric
                    storage tanks. As a result of our extensive
                    experience and track record we are in an excellent
                    position to support you in any aspect related to the
                    categories listed as important when operating
                    storage tanks.
                </p>
            </div>
        </div>
    </div>
</div>