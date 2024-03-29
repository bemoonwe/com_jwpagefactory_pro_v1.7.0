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
		'type' => 'repeatable',
		'addon_name' => 'jw_gallery',
		'title' => JText::_('COM_JWPAGEFACTORY_ADDON_GALLERY'),
		'desc' => JText::_('COM_JWPAGEFACTORY_ADDON_GALLERY_DESC'),
		'category' => 'Media',
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

				'class' => array(
					'type' => 'text',
					'title' => JText::_('COM_JWPAGEFACTORY_ADDON_CLASS'),
					'desc' => JText::_('COM_JWPAGEFACTORY_ADDON_CLASS_DESC'),
					'std' => ''
				),

				'width' => array(
					'type' => 'slider',
					'title' => JText::_('COM_JWPAGEFACTORY_ADDON_GALLERY_IMAGE_WIDTH'),
					'desc' => JText::_('COM_JWPAGEFACTORY_ADDON_GALLERY_IMAGE_WIDTH_DESC'),
					'responsive' => true,
					'std' => array('md' => 200),
					'max' => 1000
				),

				'height' => array(
					'type' => 'slider',
					'title' => JText::_('COM_JWPAGEFACTORY_ADDON_GALLERY_IMAGE_HEIGHT'),
					'desc' => JText::_('COM_JWPAGEFACTORY_ADDON_GALLERY_IMAGE_HEIGHT_DESC'),
					'responsive' => true,
					'std' => array('md' => 200),
					'max' => 1000
				),
				'item_gap' => array(
					'type' => 'slider',
					'title' => JText::_('COM_JWPAGEFACTORY_ADDON_GALLERY_ITEM_GAP'),
					'desc' => JText::_('COM_JWPAGEFACTORY_ADDON_GALLERY_ITEM_GAP_DESC'),
					'responsive' => true,
					'std' => array('md' => 0),
					'max' => 400
				),
				'item_alignment' => array(
					'type' => 'select',
					'title' => JText::_('COM_JWPAGEFACTORY_ADDON_GALLERY_ITEM_ALIGNMENT'),
					'desc' => JText::_('COM_JWPAGEFACTORY_ADDON_GALLERY_ITEM_ALIGNMENT_DESC'),
					'values' => array(
						'left' => JText::_('COM_JWPAGEFACTORY_GLOBAL_LEFT'),
						'center' => JText::_('COM_JWPAGEFACTORY_GLOBAL_CENTER'),
						'right' => JText::_('COM_JWPAGEFACTORY_GLOBAL_RIGHT'),
					),
					'std' => '',
				),
				// Repeatable Items
				'jw_gallery_item' => array(
					'title' => JText::_('COM_JWPAGEFACTORY_ADDON_GALLERY_ITEMS'),
					'attr' => array(
						'title' => array(
							'type' => 'text',
							'title' => JText::_('COM_JWPAGEFACTORY_ADDON_GALLERY_ITEM_TITLE'),
							'desc' => JText::_('COM_JWPAGEFACTORY_ADDON_GALLERY_ITEM_TITLE_DESC'),
							'std' => 'Gallery Item 1'
						),
						'thumb' => array(
							'type' => 'media',
							'title' => JText::_('COM_JWPAGEFACTORY_ADDON_GALLERY_THUMB'),
							'desc' => JText::_('COM_JWPAGEFACTORY_ADDON_GALLERY_THUMB_DESC'),
							'std' => 'https://pagefactory.joomla.work/images/pagefactory/addons/gallery/gallery1.jpg'
						),
						'full' => array(
							'type' => 'media',
							'title' => JText::_('COM_JWPAGEFACTORY_ADDON_GALLERY_FULL'),
							'desc' => JText::_('COM_JWPAGEFACTORY_ADDON_GALLERY_FULL_DESC'),
							'std' => 'https://pagefactory.joomla.work/images/pagefactory/addons/gallery/gallery1.jpg'
						),
					),
				),
			)
		),
	)
);
