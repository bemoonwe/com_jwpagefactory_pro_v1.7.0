<?php
/**
 * @author       JoomWorker
 * @email        info@joomla.work
 * @url          http://www.joomla.work
 * @copyright    Copyright (c) 2010 - 2019 JoomWorker
 * @license      GNU General Public License version 2 or later
 * @date         2019/01/01 09:30
 */
//no direct accees
defined('_JEXEC') or die ('Restricted access');

JwAddonsConfig::addonConfig(
	array(
		'type' => 'content',
		'addon_name' => 'jw_tweet',
		'title' => JText::_('COM_JWPAGEFACTORY_ADDON_TWEET'),
		'desc' => JText::_('COM_JWPAGEFACTORY_ADDON_TWEET_DESC'),
		'category' => 'Media',
		'attr' => array(
			'general' => array(

				'admin_label' => array(
					'type' => 'text',
					'title' => JText::_('COM_JWPAGEFACTORY_ADDON_ADMIN_LABEL'),
					'desc' => JText::_('COM_JWPAGEFACTORY_ADDON_ADMIN_LABEL_DESC'),
					'std' => ''
				),

				// Title
				'title' => array(
					'type' => 'text',
					'title' => JText::_('COM_JWPAGEFACTORY_ADDON_TITLE'),
					'desc' => JText::_('COM_JWPAGEFACTORY_ADDON_TITLE_DESC'),
					'std' => ''
				),

				'heading_selector' => array(
					'type' => 'select',
					'title' => JText::_('COM_JWPAGEFACTORY_ADDON_HEADINGS'),
					'desc' => JText::_('COM_JWPAGEFACTORY_ADDON_HEADINGS_DESC'),
					'values' => array(
						'h1' => JText::_('COM_JWPAGEFACTORY_ADDON_HEADINGS_H1'),
						'h2' => JText::_('COM_JWPAGEFACTORY_ADDON_HEADINGS_H2'),
						'h3' => JText::_('COM_JWPAGEFACTORY_ADDON_HEADINGS_H3'),
						'h4' => JText::_('COM_JWPAGEFACTORY_ADDON_HEADINGS_H4'),
						'h5' => JText::_('COM_JWPAGEFACTORY_ADDON_HEADINGS_H5'),
						'h6' => JText::_('COM_JWPAGEFACTORY_ADDON_HEADINGS_H6'),
					),
					'std' => 'h3',
					'depends' => array(array('title', '!=', '')),
				),

				'title_font_family' => array(
					'type' => 'fonts',
					'title' => JText::_('COM_JWPAGEFACTORY_ADDON_TITLE_FONT_FAMILY'),
					'desc' => JText::_('COM_JWPAGEFACTORY_ADDON_TITLE_FONT_FAMILY_DESC'),
					'depends' => array(array('title', '!=', '')),
					'selector' => array(
						'type' => 'font',
						'font' => '{{ VALUE }}',
						'css' => '.jwpf-addon-title { font-family: "{{ VALUE }}"; }'
					)
				),

				'title_fontsize' => array(
					'type' => 'slider',
					'title' => JText::_('COM_JWPAGEFACTORY_ADDON_TITLE_FONT_SIZE'),
					'desc' => JText::_('COM_JWPAGEFACTORY_ADDON_TITLE_FONT_SIZE_DESC'),
					'std' => '',
					'depends' => array(array('title', '!=', '')),
					'responsive' => true,
					'max' => 400,
				),

				'title_lineheight' => array(
					'type' => 'slider',
					'title' => JText::_('COM_JWPAGEFACTORY_ADDON_TITLE_LINE_HEIGHT'),
					'std' => '',
					'depends' => array(array('title', '!=', '')),
					'responsive' => true,
					'max' => 400,
				),

				'title_font_style' => array(
					'type' => 'fontstyle',
					'title' => JText::_('COM_JWPAGEFACTORY_ADDON_TITLE_FONT_STYLE'),
					'depends' => array(array('title', '!=', '')),
				),

				'title_letterspace' => array(
					'type' => 'select',
					'title' => JText::_('COM_JWPAGEFACTORY_GLOBAL_LETTER_SPACING'),
					'values' => array(
						'0' => 'Default',
						'1px' => '1px',
						'2px' => '2px',
						'3px' => '3px',
						'4px' => '4px',
						'5px' => '5px',
						'6px' => '6px',
						'7px' => '7px',
						'8px' => '8px',
						'9px' => '9px',
						'10px' => '10px'
					),
					'std' => '0',
					'depends' => array(array('title', '!=', '')),
				),

				'title_text_color' => array(
					'type' => 'color',
					'title' => JText::_('COM_JWPAGEFACTORY_ADDON_TITLE_TEXT_COLOR'),
					'desc' => JText::_('COM_JWPAGEFACTORY_ADDON_TITLE_TEXT_COLOR_DESC'),
					'depends' => array(array('title', '!=', '')),
				),

				'title_margin_top' => array(
					'type' => 'slider',
					'title' => JText::_('COM_JWPAGEFACTORY_ADDON_TITLE_MARGIN_TOP'),
					'desc' => JText::_('COM_JWPAGEFACTORY_ADDON_TITLE_MARGIN_TOP_DESC'),
					'placeholder' => '10',
					'depends' => array(array('title', '!=', '')),
					'responsive' => true,
					'max' => 400,
				),

				'title_margin_bottom' => array(
					'type' => 'slider',
					'title' => JText::_('COM_JWPAGEFACTORY_ADDON_TITLE_MARGIN_BOTTOM'),
					'desc' => JText::_('COM_JWPAGEFACTORY_ADDON_TITLE_MARGIN_BOTTOM_DESC'),
					'placeholder' => '10',
					'depends' => array(array('title', '!=', '')),
					'responsive' => true,
					'max' => 400,
				),

				// Twitter Info
				'username' => array(
					'type' => 'text',
					'title' => JText::_('COM_JWPAGEFACTORY_ADDON_TWEET_USERNAME'),
					'desc' => JText::_('COM_JWPAGEFACTORY_ADDON_TWEET_USERNAME_DESC'),
					'std' => '',
				),

				'consumerkey' => array(
					'type' => 'text',
					'title' => JText::_('COM_JWPAGEFACTORY_ADDON_TWEET_COUNSUMER_KEY'),
					'desc' => JText::_('COM_JWPAGEFACTORY_ADDON_TWEET_COUNSUMER_KEY_DESC'),
					'std' => '',
				),

				'consumersecret' => array(
					'type' => 'text',
					'title' => JText::_('COM_JWPAGEFACTORY_ADDON_TWEET_COUNSUMER_SECRETE'),
					'desc' => JText::_('COM_JWPAGEFACTORY_ADDON_TWEET_COUNSUMER_SECRETE_DESC'),
					'std' => '',
				),

				'accesstoken' => array(
					'type' => 'text',
					'title' => JText::_('COM_JWPAGEFACTORY_ADDON_TWEET_ACCESS_TOKEN'),
					'desc' => JText::_('COM_JWPAGEFACTORY_ADDON_TWEET_ACCESS_TOKEN_DESC'),
					'std' => '',
				),

				'accesstokensecret' => array(
					'type' => 'text',
					'title' => JText::_('COM_JWPAGEFACTORY_ADDON_TWEET_ACCESS_TOKEN_SECRETE'),
					'desc' => JText::_('COM_JWPAGEFACTORY_ADDON_TWEET_ACCESS_TOKEN_SECRETE_DESC'),
					'std' => '',
				),
			),

			'options' => array(

				'include_rts' => array(
					'type' => 'select',
					'title' => JText::_('COM_JWPAGEFACTORY_ADDON_TWEET_INCLUDE_RTS'),
					'desc' => JText::_('COM_JWPAGEFACTORY_ADDON_TWEET_INCLUDE_RTS_DESC'),
					'values' => array(
						'true' => JText::_('JYES'),
						'false' => JText::_('JNO'),
					),
					'std' => 'false',
				),

				'ignore_replies' => array(
					'type' => 'select',
					'title' => JText::_('COM_JWPAGEFACTORY_ADDON_TWEET_IGNORE_REPLIES'),
					'desc' => JText::_('COM_JWPAGEFACTORY_ADDON_TWEET_IGNORE_REPLIES_DESC'),
					'values' => array(
						'true' => JText::_('JYES'),
						'false' => JText::_('JNO'),
					),
					'std' => 'false',
				),

				'show_image' => array(
					'type' => 'select',
					'title' => JText::_('COM_JWPAGEFACTORY_ADDON_TWEET_SHOW_IMAGE'),
					'desc' => JText::_('COM_JWPAGEFACTORY_ADDON_TWEET_SHOW_IMAGE_DESC'),
					'values' => array(
						1 => JText::_('JYES'),
						0 => JText::_('JNO'),
					),
					'std' => 1,
				),

				'show_username' => array(
					'type' => 'select',
					'title' => JText::_('COM_JWPAGEFACTORY_ADDON_TWEET_SHOW_USERNAME'),
					'desc' => JText::_('COM_JWPAGEFACTORY_ADDON_TWEET_SHOW_USERNAME_DESC'),
					'values' => array(
						1 => JText::_('JYES'),
						0 => JText::_('JNO'),
					),
					'std' => 0,
				),

				'show_avatar' => array(
					'type' => 'select',
					'title' => JText::_('COM_JWPAGEFACTORY_ADDON_TWEET_SHOW_AVATAR'),
					'desc' => JText::_('COM_JWPAGEFACTORY_ADDON_TWEET_SHOW_AVATAR_DESC'),
					'values' => array(
						1 => JText::_('JYES'),
						0 => JText::_('JNO'),
					),
					'std' => 1,
				),

				'count' => array(
					'type' => 'number',
					'title' => JText::_('COM_JWPAGEFACTORY_ADDON_TWEET_COUNT'),
					'desc' => JText::_('COM_JWPAGEFACTORY_ADDON_TWEET_COUNT_DESC'),
					'std' => '5',
				),

				'autoplay' => array(
					'type' => 'select',
					'title' => JText::_('COM_JWPAGEFACTORY_ADDON_TWEET_AUTOPLAY'),
					'desc' => JText::_('COM_JWPAGEFACTORY_ADDON_TWEET_AUTOPLAY_DESC'),
					'values' => array(
						1 => JText::_('JYES'),
						0 => JText::_('JNO'),
					),
					'std' => 1,
				),

				'class' => array(
					'type' => 'text',
					'title' => JText::_('COM_JWPAGEFACTORY_ADDON_CLASS'),
					'desc' => JText::_('COM_JWPAGEFACTORY_ADDON_CLASS_DESC'),
					'std' => ''
				),

			),
		),
	)
);
