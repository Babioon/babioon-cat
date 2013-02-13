<?php
/**
 * babioon cat
 * @package    BABIOON_CAT
 * @author     Robert Deutz <rdeutz@gmail.com>
 * @copyright  2012 Robert Deutz Business Solution
 * @license    GNU General Public License version 2 or later
 **/

defined('_JEXEC') or die('Restricted access');

$text = $params->def('text', 'Kein Text eingegeben');
$text = str_replace("<br />", '', $text);
echo $text;
