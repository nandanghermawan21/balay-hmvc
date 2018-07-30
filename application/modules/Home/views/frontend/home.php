<div class="mdl-cell mdl-cell--8-col mdl-cell--12-col-tablet mdl-cell--12-col-phone mdl-grid mobile-cell-container">
    <div class="mdl-shadow--2dp mdl-color--white mdl-cell mdl-cell--12-col art-container-pink">
        <h2 class="h2-header"><a href="#" class="link-header">Latest</a></h2>
        <ul class="mdl-list">
        <?php if (isset($latest)) { foreach ($latest as $lt) { ?>
          <li class="mdl-list__item mdl-list__item--two-line">
            <a class="card-link" href="<?php echo site_url('frontend/home/read/' . $lt['slug']);?>">
                <span class="mdl-list__item-primary-content">
		 <!--Add `lazyload` to the class & data-src=""-->
                  <img class="mdl-list__item-avatar list-avatar avatar-article lazyload" data-src="<?php echo $lt['img_thumbnail'];?>" alt="<?php echo $lt['title']?>">
                  <span><h2 class="tile-title"><?php echo $lt['title']?></h2></span>
                  <span class="mdl-list__item-sub-title list-sub-title">
                      by <?php echo $lt['created_by']?> | <?php echo date('M, d H:i', strtotime($lt['created_at']));?> | <?php echo $lt['pageview']; ?> views
                  </span>
                </span>
            </a>
          </li>
        <?php } } ?>
        </ul>
        <div class="pagination-container">
            <?php echo $paging; ?>
        </div>
    </div>
</div>
<!--Right side-->
<div class="mdl-cell mdl-cell--4-col mdl-cell--12-col-tablet mdl-cell--12-col-phone mobile-cell-container">
<?php $this->view('frontend/widget/right'); ?>
<?php $this->view('frontend/widget/right2'); ?>
</div>
