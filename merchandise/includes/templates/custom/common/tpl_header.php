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
              <li><a href="../films.php"><span class="current"><i class="icon-picture"></i></span> Films</a>
              <li class="divider-vertical"></li>
              <li><a href="../about.php"><span class="current"><i class="icon-group"></i></span> About</a></li>
              <li class="divider-vertical"></li>
              <li><a href="../merchandise.php"><span class="current"><i class="icon-check"></i></span> Merchandise</a></li>
              <li class="divider-vertical"></li>
              <li><a href="../contact.php"><span class="current"><i class="icon-envelope-alt"></i></span> Contact</a></li>
              <li class="divider-vertical"></li>
              <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">Features <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="blog.php">Blog List</a></li>
                  <li><a href="post-blog.php">Blog Post</a></li>
                  <li><a href="full_width.html">Full Width Page</a></li>
                  <li><a href="columns.html">Columns Example</a></li>
                  <li class="divider"></li>
                  <li class="nav-header">Extra</li>
                  <li><a href="font_awesome.html">Font Awesome</a></li>
                  <li><a href="list-styles.html">List Styles</a></li>
                  <li><a href="box_tables.html">Box / Tables</a></li>
                  <li><a href="404.php">404 Page</a></li>
                  <li><a href="elements.html">Elements and Typo</a></li>
                  <li class="dropdown-submenu">
                    <a tabindex="-1" href="#">More options</a>
                    <ul class="dropdown-menu">
                      <li><a tabindex="-1" href="#">Second level link</a></li>
                      <li><a tabindex="-1" href="#">Second level link</a></li>
                      <li><a tabindex="-1" href="#">Second level link</a></li>
                      <li><a tabindex="-1" href="#">Second level link</a></li>
                      <li><a tabindex="-1" href="#">Second level link</a></li>
                    </ul>
                  </li>
                </ul>
            </ul>
          </div>
          <!--/.nav-collapse --> 
        </div>
      </div>
    </div>
</div>

<!--bof-header logo and navigation display-->
<?php
if (!isset($flag_disable_header) || !$flag_disable_header) {
?>

<div id="headerWrapper">
    <!--bof-navigation display-->
    <div id="navMainWrapper">

      <!--bof-optional categories tabs navigation display-->
      <?php require($template->get_template_dir('tpl_modules_categories_tabs.php',DIR_WS_TEMPLATE, $current_page_base,'templates'). '/tpl_modules_categories_tabs.php'); ?>
      <!--eof-optional categories tabs navigation display-->

    </div>
<?php } ?>