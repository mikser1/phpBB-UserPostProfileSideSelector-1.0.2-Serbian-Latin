<?php

/*
* @package phpBB Extension - User Post Profile Side Selector
* @copyright (c) 2022, ForumFlair, https://forumflair.co.uk
* @license GNU General Public License, version 2 (GPL-2.0)
*/

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	'UCP_USRPSTPRFLSDSLCTR_TTL'		=> 'Strana korisničkog profila',
	'UCP_USRPSTPRFLSDSLCTR_LFT'		=> 'Levo',
	'UCP_USRPSTPRFLSDSLCTR_RGHT'	=> 'Desno',
));
