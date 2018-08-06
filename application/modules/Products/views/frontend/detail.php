<?php /** @var  $data Product */ ?>
<?php $data = LayoutFactory::Instance()->getData("product"); ?>
<?php /** @var $category Category */ ?>
<?php $category = LayoutFactory::Instance()->getData("category") ?>
<?php //print_r($data) ?>

<div class="colorlib-narrow-content" style="padding-top: 20px">
    <div class="row">
        <div class="col-md-12 animate-box fadeInLeft animated" data-animate-effect="fadeInLeft">
            <div class="about-desc">
                <?php get_instance()->load->view("breadcumb") ?>
                <h2 class="colorlib-heading"><?php echo $data->name ?></h2>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <a href=""
               class="services-wrap animate-box fadeInRight animated"
               data-animate-effect="fadeInRight">
                <div class="services-img"
                     style="background-image: url(<?php echo load_data($data->image) ?>)"></div>
            </a>
        </div>
        <div class="col-md-12">
            <?php echo $data->description ?>
        </div>
    </div>
</div>
