<?php /** @var $data Category */ ?>
<?php $data = LayoutFactory::Instance()->getData("category") ?>

<div class="colorlib-narrow-content" style="margin-top: 20px">
    <div class="row">
        <div class="col-md-12 animate-box fadeInLeft animated" data-animate-effect="fadeInLeft">
            <div class="about-desc">
                <?php get_instance()->load->view("breadcumb")?>
                <h2 class="colorlib-heading"><?php echo $data->name ?></h2>
                <?php echo $data->description ?>
            </div>
        </div>
    </div>
    <div class="row">
        <?php foreach ($data->products as $item) { ?>
            <?php /**@var  $item Product */ ?>
            <div class="col-md-4">
                <a href="<?php echo base_url("Frontend/Products/Detail/" . $item->id) ?>"
                   class="services-wrap animate-box fadeInRight animated"
                   data-animate-effect="fadeInRight">
                    <div class="services-img"
                         style="background-image: url(<?php echo load_data($item->image) ?>)"></div>
                    <div class="desc">
                        <h3><?php echo $item->name ?></h3>
                    </div>
                </a>
            </div>
        <?php } ?>
    </div>
</div>
