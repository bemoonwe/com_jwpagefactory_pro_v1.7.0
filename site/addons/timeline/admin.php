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
		'addon_name' => 'jw_timeline',
		'title' => JText::_('COM_JWPAGEFACTORY_ADDON_TIMELINE'),
		'desc' => JText::_('COM_JWPAGEFACTORY_ADDON_TIMELINE_DESC'),
		'category' => 'Content',
		'attr' => array(
			'general' => array(
				'admin_label' => array(
					'type' => 'text',
					'title' => JText::_('COM_JWPAGEFACTORY_ADDON_ADMIN_LABEL'),
					'desc' => JText::_('COM_JWPAGEFACTORY_ADDON_ADMIN_LABEL_DESC'),
					'std' => ''
				),

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

				'bar_color' => array(
					'type' => 'color',
					'title' => JText::_('COM_JWPAGEFACTORY_ADDON_TIMELINE_BAR_COLOR'),
					'desc' => JText::_('COM_JWPAGEFACTORY_ADDON_TIMELINE_BAR_COLOR_DESC'),
					'std' => '#0095eb'
				),

				'class' => array(
					'type' => 'text',
					'title' => JText::_('COM_JWPAGEFACTORY_ADDON_CLASS'),
					'desc' => JText::_('COM_JWPAGEFACTORY_ADDON_CLASS_DESC'),
					'std' => ''
				),

				// Repeatable Items
				'jw_timeline_items' => array(
					'title' => JText::_('COM_JWPAGEFACTORY_ADDON_REOEATABLE_ITEMS'),
					'attr' => array(
						'title' => array(
							'type' => 'text',
							'title' => JText::_('COM_JWPAGEFACTORY_ADDON_ITEM_TITLE'),
							'desc' => JText::_('COM_JWPAGEFACTORY_ADDON_ITEM_TITLE_DESC'),
							'std' => 'Timeline Item Title',
						),
						'content' => array(
							'type' => 'editor',
							'title' => JText::_('COM_JWPAGEFACTORY_GLOBAL_CONTENT'),
							'std' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
						),
						'photo' => array(
							'type' => 'media',
							'title' => JText::_('IMAGE'),
							'show_input' => true,
							'std' => '',
						),
						'date' => array(
							'type' => 'text',
							'title' => JText::_('COM_JWPAGEFACTORY_ADDON_ITEM_TIMELINE_DATE'),
							'desc' => JText::_('COM_JWPAGEFACTORY_ADDON_ITEM_TIMELINE_DATE_DESC'),
							'std' => '08 Feb 2013',
						),
					) //attr
				) //Repeatable Items

			),
		)
	)
);
