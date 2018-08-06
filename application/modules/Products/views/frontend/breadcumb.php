<?php /** @var $data array(Menu) */ ?>
<span class="heading-meta link-breadcumb">
    <?php foreach (Pagefactory::Instance()->getBreadcumb() as $menu) { ?>
        <?php /** @var $menu Menu */ ?>
        <?php if ($menu->active == 1) { ?>
            > <a class="" href="<?php echo base_url($menu->slug) ?>"><?php echo $menu->name ?></a>
        <?php } else { ?>
            > <label><?php echo $menu->name ?></label>
        <?php } ?>
    <?php } ?>
</span>

