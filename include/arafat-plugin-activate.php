<?php
/**
 * @package  ArafatPlugin
 */

class ArafatPluginActivate
{
	public static function activate() {
		flush_rewrite_rules();
	}
}