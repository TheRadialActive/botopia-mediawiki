<?php
/**
 * Botopia
 * MediaWiki implementation based on MonoBook nouveau.
 *
 * Copyright (C) 2014-2015 Alex Legler <a3li@gentoo.org>
 */

/**
 * Inherit main code from SkinTemplate, set the CSS and template filter.
 * @ingroup Skins
 */
class SkinLabor extends SkinTemplate {
	public $skinname  = 'botopia';
	public $stylename = 'Botopia';
	public $template  = 'BotopiaTemplate';

	function setupSkinUserCss(OutputPage $out) {
		parent::setupSkinUserCss($out);

                $CDN_URL = $this->getConfig()->get( 'LocalStylePath' ) .
                                 '/Botopia';

		$out->addStyle($CDN_URL . '/css/bootstrap.min.css');
		$out->addStyle($CDN_URL . '/css/customstyle.css');
		$out->addStyle($CDN_URL . '/css/flatpickr/flatpickr.min.css');

		$out->addModuleStyles(array(
			'mediawiki.skinning.interface',
			'mediawiki.skinning.content.externallinks',
			'skins.botopia.styles'
		));
	}
}
