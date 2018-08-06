<body>
<?php /** @param $menu Menu */
function PrintPageMenu($menu)
{ ?>
    <li><a class="page-menu" href="<?php echo $menu->slug ?>"><?php echo $menu->name ?></a></li>
<?php } ?>

<?php /** @param $menu Menu */
function PrintPageParentMenu($menu)
{ ?>

    <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
           aria-haspopup="true" aria-expanded="false"><?php echo $menu->name ?> <span class="caret"></span></a>
        <ul class="dropdown-menu">
            <?php foreach ($menu->child as $m) { ?>
                <?php /** @var $m Menu */ ?>
                <?php if (is_array($m->child) and count($m->child) > 0) { ?>
                    <?php PrintPageParentMenu($m); ?>
                <?php } else { ?>
                    <?php PrintPageMenu($m); ?>
                <?php } ?>
            <?php } ?>
        </ul>
    </li>
<?php } ?>

<div id="colorlib-page">
    <a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle"><i></i></a>
    <aside id="colorlib-aside" role="complementary" class="border js-fullheight">
        <h1 id="colorlib-logo"><a href="#"><img style="width: 80%; margin-left: 5%"
        src="<?php load_asset("balay/images/logo.jpg") ?>"></a></h1>


        <!--<h4>Integrity Reliability Performance</h4>-->
        <nav id="colorlib-main-menu" role="navigation">
            <ul>
                <?php foreach (LayoutFactory::Instance()->getAllMenu() as $menu) { ?>
                    <?php /* @var $menu Menu */ ?>
                    <li class="<?php echo(($menu->selected == "1") ? "colorlib-active" : "") ?>"><a
                                href="<?php echo base_url($menu->slug) ?>"><?php echo $menu->name ?></a></li>
                <?php } ?>
            </ul>
        </nav>

        <div class="colorlib-footer" style="text-align: center">
            <label>Integrity</label>
            <label>Reliability</label>
            <label>Performance</label>
            <ul style="margin-top: 50px">
                <li><i class=""></i></li>
                <li><i class=""></i></li>
                <li><i class=""></i></li>
                <li><i class=""></i></li>
            </ul>
        </div>

    </aside>
    <?php if (count(Pagefactory::Instance()->getAllMenu()) > 0) { ?>
        <div id="colorlib-main">
            <nav class="navbar navbar-default" style="position: fixed; z-index: 8888; ">
                <div class="container-fluid">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                                data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#"><img src="<?php load_asset("balay/images/logo.jpg") ?>"></a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <?php foreach (Pagefactory::Instance()->getAllMenu() as $menu) { ?>
                                <?php /** @var $menu Menu */ ?>
                                <?php if (is_array($menu->child) and count($menu->child) > 0) { ?>
                                    <?php PrintPageParentMenu($menu); ?>
                                <?php } else { ?>
                                    <?php PrintPageMenu($menu); ?>
                                <?php } ?>
                            <?php } ?>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
            </nav>
        </div>
    <?php } ?>
    <div id="colorlib-main" class="main-content" style="">



