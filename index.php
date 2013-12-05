<?php
/**
 * @package     Joomla.Site
 * @subpackage  Templates.protostar
 *
 * @copyright   
 * @license     
 */

defined('_JEXEC') or die;

// Getting params from template
$params = JFactory::getApplication()->getTemplate(true)->params;

$app = JFactory::getApplication();
$doc = JFactory::getDocument();
$this->language = $doc->language;
$this->direction = $doc->direction;

// Detecting Active Variables
$option   = $app->input->getCmd('option', '');
$view     = $app->input->getCmd('view', '');
$layout   = $app->input->getCmd('layout', '');
$task     = $app->input->getCmd('task', '');
$itemid   = $app->input->getCmd('Itemid', '');
$sitename = $app->getCfg('sitename');

// Add current user information
$user = JFactory::getUser();

?>

<!DOCTYPE html>
<html>
  <head>
    <title>FabLab Karlsruhe V.i.G.</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <style>
      
    img  {
      max-width:100%;
      height:auto;
    }

    .container {padding-left:0;padding-right:18px;}
    .row {margin-left:0;margin-right:-18px;}
    .row > div {padding-left:0;padding-right:18px;}

    </style>
  </head>
  <body>
    <!-- Body -->
    <div id="wrap">
      <div class="container">
        <div id="header">
          <?php if ($this->countModules('position-7')) : ?>
          <nav class="navigation" role="navigation">
            <jdoc:include type="modules" name="position-7" style="none" />
          </nav>
          <?php endif; ?>
          <h1>
            <a href="#"><img src="http://fablabka.bluehands.de//www.fablab-karlsruhe.org/joomla/templates/fablabka2/img/logo.png" style="height:100px"/></a>
          </h1>
        </div>
        <div id="content">
          <div class="row">
            <div class="col-md-9">
              Content
            </div>
            <div class="col-md-3">
              Sidebar
            </div>
          </div>
        </div> 
    </div>       
    <div id="footer">
      <div class="container">
          <?php if ($this->countModules('footer')) : ?>
          <nav class="navigation" role="navigation">
              <jdoc:include type="modules" name="footer" style="none" />
          </nav>
          <?php endif; ?>
      </div>
    </div>
  </body>
</html>