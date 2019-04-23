<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=1366, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title> <?= $title . " - Wikipedia"; ?> </title>

  <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.css') ?>" />
  <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>" />
  <link rel="stylesheet" href="<?= base_url('assets/style.css') ?>">

  <script src="<?= base_url('assets/js/jquery.min.js') ?>"></script>
  <script src="<?= base_url('assets/js/popper.min.js') ?>"></script>
  <script src="<?= base_url('assets/js/bootstrap.js') ?>"></script>
  <script src="<?= base_url('assets/js/script.js') ?>"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
</head>

<body>
  <div class="wrapAll clearfix">
    <div class="sidebar">
      <div class="logo">
        <a href="<?php echo site_url('wiki/index'); ?>"><img src='<?php echo base_url(); ?>assets/img/logo.png' alt="logo"></a>
      </div>
      <div class="navigation">
        <ul>
          <li><a href="<?php echo site_url('wiki/index'); ?>">Main page</a></li>
          <li><a href="#">Contents</a></li>
          <li><a href="#">Featured content</a></li>
          <li><a href="#">Current events</a></li>
          <li><a href="#">Random article</a></li>
          <li><a href="#">Donate to Wikipedia</a></li>
          <li><a href="#">Wikipedia store</a></li>
        </ul>
        <h3>Interaction</h3>
        <ul>
          <li><a href="#">Help</a></li>
          <li><a href="#">About Wikipedia</a></li>
          <li><a href="#">Community portal</a></li>
          <li><a href="#">Recent changes</a></li>
          <li><a href="#">Contact page</a></li>
        </ul>
        <h3>Tools</h3>
        <ul>
          <li><a href="#">Upload file</a></li>
          <li><a href="#">Special pages</a></li>
          <li><a href="#">Printable version</a></li>
        </ul>
        <h3>Languages</h3>
      </div>

    </div>
    <div class="mainsection">
      <div class="headerLinks">
        <span class="user"><?php if($user!=null) echo $user; else echo "Not logged in"; ?></span> <a href="#">Talk</a> <a href="#">Contributions</a>
        <a class="<?php if($user!=null) echo "d-none"; else echo ""; ?>" href="<?php echo site_url('Wikipedia/register'); ?>">Create account</a>
        <a class="<?php if($user!=null) echo "d-none"; else echo ""; ?>" href="<?php echo site_url('Wikipedia/login'); ?>">Log in</a>
        <a class="<?php if($user!=null) echo ""; else echo "d-none"; ?>" href="<?php echo site_url('action/doLogout'); ?>">Log Out</a>
      </div>
      <div class="tabs clearfix">
        <div class="tabsLeft">
          <ul>
            <li><a href="" class="active text-body">Article</a></li>
              <li><a href="" class="text-body">Talk</a></li>
          </ul>
        </div>
        <div class="tabsRight">
          <ul>
            <li><a href="" class="active text-body">Read</a></li>
            <li><a href="<?= base_url('index.php/wiki/'.$id.'/edit') ?>" class="text-body">Edit</a></li>
            <li><a href="" class="text-body">View History</a></li>
            <li class="bg-white text-body">
              <div id="simpleSearch" >
                    <input class="doSearch" type="text" name="searchInput" id="searchInput" placeholder="Search Wikipedia" size="12"/>
                    <div id="submitSearch"></div>
              </div>
            </li>
          </ul>
        </div>

      </div>
      <div class="article">

        <h1 class="firstHeading" lang="en" id="firstHeading">
            <?= $title ?>
        </h1>
        <div class="bodyContent" id="bodyContent">
          <div id="siteSub" class="noprint">From Wikipedia, the free encyclopedia</div>
          <div id="contentSub"></div>
          <div id="mw-content-text" lang="en" dir="ltr" class="mw-content-ltr">
            <!--
            <div class="mw-parser-output">
              <p>Lorem ipsum sim dolor amet</p>
            </div>
            <div id="toc" class="toc">
            <div class="toctitle" lang="en" dir="ltr">
              <h2>Contents</h2>
            </div>
            <ul>
              <li class="toclevel-1 tocsection-1">
                <a href="#Lorem"><span class="tocnumber">1</span> <span class="toctext">Lorem</span></a>
              </li>
            </ul>
            </div>
            <h2>
              <span class="mw-headline" id="lorem">Lorem</span>
            </h2>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sit perspiciatis itaque dignissimos fugit dolorem quam adipisci minima repellendus velit quis, asperiores, soluta aperiam obcaecati praesentium enim non qui. Vero, dolores.</p>
          -->

          <?= $article ?>

          </div>
        </div>

      </div>

      <div class="pagefooter">
        <div class="footerlinks">
              <a href="#">Privacy policy</a> <a href="#">About Wikipedia</a> <a href="#">Disclaimers</a> <a href="#">Contact Wikipedia</a> <a href="#">Developers</a>
              <a href="#">Cookie statement</a>
              <a href="#">Mobile view</a>
        </div>
      </div>

    </div>
  </div>

</body>
</html>
