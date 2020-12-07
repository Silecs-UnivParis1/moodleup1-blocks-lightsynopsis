<?php
/**
 * Light synopsis block.
 *
 * @package    block_lightsynopsis
 * @copyright  2012-2020 Silecs {@link http://www.silecs.info/societe}
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$plugin->version   = 2020111502;        // The current plugin version (Date: YYYYMMDDXX)
$plugin->requires  = 2020060900;        // Requires this Moodle version
$plugin->component = 'block_lightsynopsis';       // Full name of the plugin (used for diagnostics)

$plugin->cron      = 0;
$plugin->maturity  = MATURITY_STABLE;
$plugin->release   = 'TODO';

$plugin->dependencies = [
    'report_up1synopsis' => 2020102100,
];