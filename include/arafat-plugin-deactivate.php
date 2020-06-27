<?php
/**
 * @package  ArafatPlugin
 */

class ArafatPluginDeactivate
{
	public static function deactivate() {
		flush_rewrite_rules();
	}
}