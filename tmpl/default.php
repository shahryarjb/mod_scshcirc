<?php 
/**
 * @package     Joomla.Site
 * @subpackage  mod_articles_category
 *
 * @copyright   Copyright (C) 2005 - 2015 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */
// No direct access
defined('_JEXEC') or die; 
JHtml::stylesheet(JURI::root().'modules/mod_scshcirc/tmpl/css/normalize.css');
JHtml::stylesheet(JURI::root().'modules/mod_scshcirc/tmpl/css/demo.css');
JHtml::stylesheet(JURI::root().'modules/mod_scshcirc/tmpl/css/component1.css');
JHtml::script(Juri::base() . 'modules/mod_scshcirc/tmpl/js/modernizr-2.6.2.min.js');

?>

		<div class="component">
				<!-- Start Nav Structure -->
				<button class="cn-button" id="cn-button">+</button>
				<div class="cn-wrapper" id="cn-wrapper">
				    <ul>
				      <li><a href="<?php echo $picture ?>"><span class="icon-picture"></span></a></li>
				      <li><a href="<?php echo $headphones ?>"><span class="icon-headphones"></span></a></li>
				      <li><a href="<?php echo $home ?>"><span class="icon-home"></span></a></li>
				      <li><a href="<?php echo $video ?>"><span class="icon-facetime-video"></span></a></li>
				      <li><a href="<?php echo $email ?>"><span class="icon-envelope-alt"></span></a></li>
				     </ul>
				</div>
				<div id="cn-overlay" class="cn-overlay"></div>
				<!-- End Nav Structure -->
			</div>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
<script src="/instagram/src/instagramLite.js"></script>
		<script src="./modules/mod_scshcirc/tmpl/js/polyfills.js"></script>
		<script src="./modules/mod_scshcirc/tmpl/js/demo1.js"></script>
		<!-- For the demo ad only -->   



