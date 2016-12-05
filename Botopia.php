<?php
/**
 * Botopia
 * MediaWiki implementation based on MonoBook nouveau.
 *
 * Copyright (C) 2014-2015 Alex Legler <a3li@gentoo.org>
 */

$wgExtensionCredits['skin'][] = array(
	'path' => __FILE__,
	'name' => 'Botopia',
	'namemsg' => 'skinname-botopia',
	'descriptionmsg' => 'botopia-desc',
	'url' => 'https://wiki.das-labor.org/',
	'author' => array('Marcus Brinkmann'),
	'license-name' => 'GPLv2',
);

// Register files
$wgAutoloadClasses['SkinBotopia'] = __DIR__ . '/SkinBotopia.php';
$wgAutoloadClasses['BotopiaTemplate'] = __DIR__ . '/BotopiaTemplate.php';
$wgMessagesDirs['Botopia'] = __DIR__ . '/i18n';

// Register skin
$wgValidSkinNames['botopia'] = 'Botopia';

// Register modules
$wgResourceModules['skins.botopia.styles'] = array(
	'styles' => array(
		'main.css' => array('media' => 'screen'),
	),
	'remoteSkinPath' => 'Botopia',
	'localBasePath' => __DIR__,
);

$wgHooks['OutputPageBeforeHTML'][] = 'injectMetaTags';

function injectMetaTags($out) {
	$out->addMeta('viewport', 'width=device-width, initial-scale=1.0');
	$out->addMeta('theme-color', '#54487a');
	return true;
}
