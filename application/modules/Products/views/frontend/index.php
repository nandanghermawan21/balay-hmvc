<?php /** @var $data Array(Category) */ ?>
<?php $data = LayoutFactory::Instance()->getData("category") ?>

<div class="colorlib-narrow-content" style="padding-top: 20px">
    <div class="row">
        <div class="col-md-12 animate-box fadeInLeft animated" data-animate-effect="fadeInLeft">
            <div class="about-desc">
                <span class="heading-meta">Product</span>
                <h2 class="colorlib-heading">TESS offers a wide variety in products for the tank storage industry</h2>
                <p>TESS is specialized in the design, manufacturing, supply and installation of products and systems
                    used in the safe an effective transfer and storage of chemicals and hydrocarbons. TESS is dedicated
                    to support your requirements with respect to the following product lines:</p>
            </div>
        </div>
    </div>

    <?php foreach ($data as $item) { ?>
        <?php /**@var  $item Category */ ?>
        <div class="row">
            <div class="col-md-4">
                <a href="<?php echo base_url("Frontend/Products/Category/".$item->id) ?>" class="services-wrap animate-box fadeInRight animated"
                   data-animate-effect="fadeInRight">
                    <div class="services-img"
                         style="background-image: url(<?php echo load_data($item->image) ?>)"></div>
                    <div class="desc">
                        <h3><?php echo $item->name ?></h3>
                    </div>
                </a>
            </div>
            <div class="col-md-8">
                <nav id="colorlib-main-menu" role="navigation" class="product">
                    <ul>
                        <?php foreach ($item->products as $product){ ?>
                            <?php /** @var $product Product */ ?>
                            <li class=""><a href="<?php echo base_url("Frontend/Products/Detail/".$product->id)?>"><?php echo $product->name ?></a></li>
                        <?php } ?>
                    </ul>
                </nav>
            </div>
        </div>
    <?php } ?>

</div>


