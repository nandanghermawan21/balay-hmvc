<!doctype html>
<html>
<head>
<meta charset="utf-8">
<?php
    $meta = isset($meta) ? $meta : [];
    $meta_title_default= 'My Website example';
    $meta_desc_default = 'My Website example description';
    $meta_url_default  = site_url();
    $meta_img_default  = base_url('/assets/images/logo-sains4.png');

    //check if its accessed in Mobile
    $is_mobile = $this->agent->is_mobile();
?>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
<title><?php echo element('title', $meta, $meta_title_default); ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<!-- Add to homescreen for Chrome on Android -->
<meta name="mobile-web-app-capable" content="yes">

<!-- Add to homescreen for Safari on iOS -->
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta name="apple-mobile-web-app-title" content="<?php echo element('title', $meta, $meta_title_default); ?>">

 <!-- SEARCH ENGINE -->
<meta name="description" content="<?php echo element('description', $meta, $meta_desc_default); ?>">
<meta name="author" content="<?php echo element('author', $meta); ?>">
<link rel="canonical" href="<?php echo element('url', $meta, $meta_url_default); ?>">
<link rel="amphtml" href="<?php echo element('amp_url', $meta); ?>">
<meta name="rating" content="general">

<!-- FACEBOOK META -  Change what to your own FB-->
<meta property="fb:pages" content="MY_FB_FAGE_ID" />
<meta property="og:title" content="<?php echo element('title', $meta, $meta_title_default); ?>">
<meta property="og:type" content="article">
<meta property="og:url" content="<?php echo element('url', $meta, $meta_url_default); ?>">
<meta property="og:site_name" content="teknosains.com">
<meta property="og:image" content="<?php echo element('thumbnail', $meta, $meta_img_default); ?>" >
<meta property="og:description" content="<?php echo element('description', $meta, $meta_desc_default); ?>">
<meta property="fb:app_id" content="MY_FB_ID">
<meta property="article:publisher" content="https://www.facebook.com/my_page">
<meta property="article:author" content="https://www.facebook.com/my_page">

<!-- TWITTER META - Change what to your own twitter-->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:description" content="<?php echo element('description', $meta, $meta_desc_default); ?>">
<meta name="twitter:site" content="@my_twitter">
<meta name="twitter:creator" content="@my_twitter">
<meta name="twitter:title" content="<?php echo element('title', $meta, $meta_title_default); ?>">
<meta name="twitter:image:src" content="<?php echo element('thumbnail', $meta, $meta_img_default); ?>">

<link rel="shortcut icon" href="<?php echo resource_url('/assets/images/fav-icon.png');?>">
<link rel="stylesheet" href="<?php echo resource_url('/assets/css/material.min.css');?>">

<!--Load above the fold css-->
<style><?php $this->view('layouts/css');?></style>

<!--Have additional CSS? load here -->
<?php if (isset($css)) { foreach($css as $cx) { ?>
<link rel="stylesheet" href="<?php echo resource_url($cx);?>">
<?php } }?>

<!--If Javascript is disabled-->
<noscript>
<style type="text/css">
        .layout-container {display:none;}
    </style>
    <div>
        You don't have javascript enabled.  Good luck with that.
    </div>
</noscript>
</head>
<body>
<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header layout-container">
    <header class="mdl-layout__header mdl-color--white mdl-color-text--grey">
    <div class="mdl-layout__header-row top-border">
      <div class="logo">
          <i class="material-icons mdl-list__item-icon logo-icon mdl-color-text--white">
               <svg style="width:60px;height:60px;margin-top: -10px;" viewBox="0 0 24 24">
                    <path fill="#fff" d="M12,8L10.67,8.09C9.81,7.07 7.4,4.5 5,4.5C5,4.5 3.03,7.46 4.96,11.41C4.41,12.24 4.07,12.67 4,13.66L2.07,13.95L2.28,14.93L4.04,14.67L4.18,15.38L2.61,16.32L3.08,17.21L4.53,16.32C5.68,18.76 8.59,20 12,20C15.41,20 18.32,18.76 19.47,16.32L20.92,17.21L21.39,16.32L19.82,15.38L19.96,14.67L21.72,14.93L21.93,13.95L20,13.66C19.93,12.67 19.59,12.24 19.04,11.41C20.97,7.46 19,4.5 19,4.5C16.6,4.5 14.19,7.07 13.33,8.09L12,8M9,11A1,1 0 0,1 10,12A1,1 0 0,1 9,13A1,1 0 0,1 8,12A1,1 0 0,1 9,11M15,11A1,1 0 0,1 16,12A1,1 0 0,1 15,13A1,1 0 0,1 14,12A1,1 0 0,1 15,11M11,14H13L12.3,15.39C12.5,16.03 13.06,16.5 13.75,16.5A1.5,1.5 0 0,0 15.25,15H15.75A2,2 0 0,1 13.75,17C13,17 12.35,16.59 12,16V16H12C11.65,16.59 11,17 10.25,17A2,2 0 0,1 8.25,15H8.75A1.5,1.5 0 0,0 10.25,16.5C10.94,16.5 11.5,16.03 11.7,15.39L11,14Z" />
                </svg>
          </i>
      </div>
      &nbsp;
      <div class="mdl-layout-title">
          <span style="margin-left: 15px;" class="mdl-color-text--grey-800">My Website</span>
          <nav class="mdl-navigation" style="height: 36px;">
            <a class="mdl-navigation__link mdl-color-text--grey-700 menu-link" href="<?php echo site_url();?>">Home</a>
            <a class="mdl-navigation__link mdl-color-text--grey-700 menu-link" href="<?php echo site_url('category');?>">Category</a>
          </nav>
      </div>
      <div class="mdl-layout-spacer"></div>
      <div class="mdl-textfield mdl-js-textfield mdl-textfield--expandable">
       <label class="mdl-button mdl-js-button mdl-button--icon" for="search">
         <i class="material-icons">
            <svg style="width:24px;height:24px" viewBox="0 0 24 24">
               <path fill="#888" d="M9.5,3A6.5,6.5 0 0,1 16,9.5C16,11.11 15.41,12.59 14.44,13.73L14.71,14H15.5L20.5,19L19,20.5L14,15.5V14.71L13.73,14.44C12.59,15.41 11.11,16 9.5,16A6.5,6.5 0 0,1 3,9.5A6.5,6.5 0 0,1 9.5,3M9.5,5C7,5 5,7 5,9.5C5,12 7,14 9.5,14C12,14 14,12 14,9.5C14,7 12,5 9.5,5Z" />
           </svg>
         </i>
       </label>
       <div class="mdl-textfield__expandable-holder">
         <input class="mdl-textfield__input search-query" type="text" id="search">
         <label class="mdl-textfield__label" for="search">Enter your query...</label>
       </div>
     </div>
      <button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon" id="hdrbtn">
        <i class="material-icons">
            <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                <path fill="#888" d="M12,16A2,2 0 0,1 14,18A2,2 0 0,1 12,20A2,2 0 0,1 10,18A2,2 0 0,1 12,16M12,10A2,2 0 0,1 14,12A2,2 0 0,1 12,14A2,2 0 0,1 10,12A2,2 0 0,1 12,10M12,4A2,2 0 0,1 14,6A2,2 0 0,1 12,8A2,2 0 0,1 10,6A2,2 0 0,1 12,4Z" />
            </svg>
        </i>
      </button>
      <ul class="mdl-menu mdl-js-menu mdl-js-ripple-effect mdl-menu--bottom-right" for="hdrbtn">
        <li class="mdl-menu__item"><a class="normal-link" href="#">About</a></li>
        <li class="mdl-menu__item"><a class="normal-link" href="#">Contact</a></li>
      </ul>
    </div>
  </header>
   <main class="mdl-layout__content mdl-color--grey-100">
    <div class="mdl-grid">
        <div class="mdl-cell mdl-cell--12-col mdl-cell--12-col-tablet mdl-cell--12-col-phone inner-cell-container mobile-cell-container">
            <div class="mdl-grid">
