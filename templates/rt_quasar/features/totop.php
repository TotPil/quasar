<?php
/**
* @version   $Id$
* @author    RocketTheme http://www.rockettheme.com
* @copyright Copyright (C) 2007 - 2017 RocketTheme, LLC
* @license   http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 only
 *
 * Gantry uses the Joomla Framework (http://www.joomla.org), a GNU/GPLv2 content management system
 *
 */

defined('JPATH_BASE') or die();

gantry_import('core.gantryfeature');

/**
 * @package     gantry
 * @subpackage  features
 */
class GantryFeatureToTop extends GantryFeature
{
	var $_feature_name = 'totop';

	function init()
	{
		/** @var $gantry Gantry */
		global $gantry;
		JHTML::_('behavior.framework', true);

		if ($this->get('enabled')) {
			$gantry->addScript('gantry-totop.js');
		}
	}

	function render($position)
	{
		ob_start();
		?>
	<div class="clear"></div>
	<a href="#" id="gantry-totop" rel="nofollow"><?php echo $this->get('text'); ?></a>
	<?php
		return ob_get_clean();
	}
}
