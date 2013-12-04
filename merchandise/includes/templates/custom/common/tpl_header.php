<?php
/**
 * Common Template - tpl_header.php
 *
 * this file can be copied to /templates/your_template_dir/pagename<br />
 * example: to override the privacy page<br />
 * make a directory /templates/my_template/privacy<br />
 * copy /templates/templates_defaults/common/tpl_footer.php to /templates/my_template/privacy/tpl_header.php<br />
 * to override the global settings and turn off the footer un-comment the following line:<br />
 * <br />
 * $flag_disable_header = true;<br />
 *
 * @package templateSystem
 * @copyright Copyright 2003-2006 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: tpl_header.php 4813 2006-10-23 02:13:53Z drbyte $
 */
?>

<?php
  // Display all header alerts via messageStack:
  if ($messageStack->size('header') > 0) {
    echo $messageStack->output('header');
  }
  if (isset($_GET['error_message']) && zen_not_null($_GET['error_message'])) {
  echo htmlspecialchars(urldecode($_GET['error_message']));
  }
  if (isset($_GET['info_message']) && zen_not_null($_GET['info_message'])) {
   echo htmlspecialchars($_GET['info_message']);
} else {

}
?>

<div id="navWrapper">
  <div class="navbar navbar-inverse navbar-fixed-top">
    <div id="navLogin">
      <ul class="back">
          <li><?php echo '<a href="' . HTTP_SERVER . DIR_WS_CATALOG . '">'; ?><?php echo HEADER_TITLE_CATALOG; ?></a></li>
      <?php if ($_SESSION['customer_id']) { ?>
          <li><a href="<?php echo zen_href_link(FILENAME_LOGOFF, '', 'SSL'); ?>"><?php echo HEADER_TITLE_LOGOFF; ?></a></li>
          <li><a href="<?php echo zen_href_link(FILENAME_ACCOUNT, '', 'SSL'); ?>"><?php echo HEADER_TITLE_MY_ACCOUNT; ?></a></li>
      <?php
            } else {
              if (STORE_STATUS == '0') {
      ?>
          <li><a href="<?php echo zen_href_link(FILENAME_LOGIN, '', 'SSL'); ?>"><?php echo HEADER_TITLE_LOGIN; ?></a></li>
      <?php } } ?>

      <?php if ($_SESSION['cart']->count_contents() != 0) { ?>
          <li><a href="<?php echo zen_href_link(FILENAME_SHOPPING_CART, '', 'NONSSL'); ?>"><?php echo HEADER_TITLE_CART_CONTENTS; ?></a></li>
          <li><a href="<?php echo zen_href_link(FILENAME_CHECKOUT_SHIPPING, '', 'SSL'); ?>"><?php echo HEADER_TITLE_CHECKOUT; ?></a></li>
      <?php }?>
      </ul>
    </div>
    <div id="navSearch"><?php require(DIR_WS_MODULES . 'sideboxes/search_header.php'); ?></div>
     <div class="navbar-inner">
      <div class="container">
        <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
        <a class="brand" href="../index.php"><img src="../img/logo.png" alt="Shiny Studios" class="logo"></a>
        <div class="nav-collapse collapse">
          <ul class="nav pull-right">
            <li><a href="../index.php"><span class="current"><i class="icon-home"></i></span> Home</a></li>
            <li class="divider-vertical"></li>
             <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">Films <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="../a-bird-without-wings.php">A Bird Without Wings </a></li>
                <li><a href="../boxes.php">Boxes</a></li>
                <li><a href="../complete.php">Complete</a></li>
                <li><a href="../inside-out.php">Inside Out</a></li>
            </ul>
            </li>
            <li class="divider-vertical"></li>
            <li><a href="../about.php"><span class="current"><i class="icon-group"></i></span> About</a></li>
            <li class="divider-vertical"></li>
            <li><a href="../merchandise/index.php"><span class="current"><i class="icon-check"></i></span> Merchandise</a></li>
            <li class="divider-vertical"></li>
            <li><a href="../contact.php"><span class="current"><i class="icon-envelope-alt"></i></span> Contact</a></li>
            <li class="divider-vertical"></li>
            <li><a href="../blog.php"><span class="current"><i class="icon-group"></i></span> Blog</a></li>
          </ul>
        </div>
        <!--/.nav-collapse --> 
      </div>
    </div>
  </div>
</div>
<div id="merchandiseTitle"> 
  <!-- About us title -->
  <h1 class="container"> Merchandise <span class="raleway"> <span class="pink"> // </span>  Support our work!</span></h1>
</div>
