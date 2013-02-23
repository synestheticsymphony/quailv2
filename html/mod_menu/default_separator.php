<?php
/**
 * @package		Joomla.Site
 * @subpackage	mod_menu
 * @copyright	Copyright (C) 2005 - 2013 Open Source Matters, Inc. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 */

// No direct access.
defined('_JEXEC') or die;

// Note. It is important to remove spaces between elements.
$linktype = $item->title;

?>
<a href="#" class="dropdown-toggle" data-toggle="dropdown">
	<?php echo $linktype; ?>
	<b class="caret"></b>
</a>
