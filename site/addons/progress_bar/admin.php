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
defined ('_JEXEC') or die ('Restricted access');

JwAddonsConfig::addonConfig(
	array(
		'type'=>'general',
		'addon_name'=>'jw_progress_bar',
		'title'=>JText::_('COM_JWPAGEFACTORY_ADDON_PROGRESS_BAR'),
		'desc'=>JText::_('COM_JWPAGEFACTORY_ADDON_PROGRESS_BAR_DESC'),
		'category'=>'Content',
		'attr'=>array(

			'general' => array(

				'admin_label'=>array(
					'type'=>'text',
					'title'=>JText::_('COM_JWPAGEFACTORY_ADDON_ADMIN_LABEL'),
					'desc'=>JText::_('COM_JWPAGEFACTORY_ADDON_ADMIN_LABEL_DESC'),
					'std'=> ''
				),

				'progress'=>array(
					'type'=>'slider',
					'title'=>JText::_('COM_JWPAGEFACTORY_ADDON_PROGRESS_BAR_PROGRESS'),
					'desc'=>JText::_('COM_JWPAGEFACTORY_ADDON_PROGRESS_BAR_PROGRESS_DESC'),
					'std'=>60,
					'min'=>1,
					'max'=>100
				),

				'bar_height'=>array(
					'type'=>'slider',
					'title'=>JText::_('COM_JWPAGEFACTORY_ADDON_PROGRESS_BAR_HEIGHT'),
					'desc'=>JText::_('COM_JWPAGEFACTORY_ADDON_PROGRESS_BAR_HEIGHT_DESC'),
					'std'=>24,
					'min'=>1,
					'max'=>100
				),

				'type'=>array(
					'type'=>'select',
					'title'=>JText::_('COM_JWPAGEFACTORY_ADDON_PROGRESS_BAR_TYPE'),
					'desc'=>JText::_('COM_JWPAGEFACTORY_ADDON_PROGRESS_BAR_TYPE_DESC'),
					'values'=>array(
						'jwpf-progress-bar-primary'=>JText::_('COM_JWPAGEFACTORY_GLOBAL_PRIMARY'),
						'jwpf-progress-bar-success'=>JText::_('COM_JWPAGEFACTORY_GLOBAL_SUCCESS'),
						'jwpf-progress-bar-info'=>JText::_('COM_JWPAGEFACTORY_GLOBAL_INFO'),
						'jwpf-progress-bar-warning'=>JText::_('COM_JWPAGEFACTORY_GLOBAL_WARNING'),
						'jwpf-progress-bar-danger'=>JText::_('COM_JWPAGEFACTORY_GLOBAL_DANGER'),
						'custom'=>JText::_('COM_JWPAGEFACTORY_GLOBAL_CUSTOM'),
					),
					'std'=>'jwpf-progress-bar-primary',
				),

				'bar_background'=>array(
					'type'=>'color',
					'title'=>JText::_('COM_JWPAGEFACTORY_ADDON_PROGRESS_BAR_BG_COLOR'),
					'desc'=>JText::_('COM_JWPAGEFACTORY_ADDON_PROGRESS_BAR_BG_COLOR_DESC'),
					'std' => '#cccccc',
					'depends'=>array('type'=>'custom'),
				),

				'progress_bar_background'=>array(
					'type'=>'color',
					'title'=>JText::_('COM_JWPAGEFACTORY_ADDON_PROGRESS_BAR_PROGRESS_BG_COLOR'),
					'desc'=>JText::_('COM_JWPAGEFACTORY_ADDON_PROGRESS_BAR_PROGRESS_BG_COLOR_DESC'),
					'std' => '#00c1f8',
					'depends'=>array('type'=>'custom'),
				),

				'stripped'=>array(
					'type'=>'select',
					'title'=>JText::_('COM_JWPAGEFACTORY_ADDON_PROGRESS_BAR_STRIPPED'),
					'desc'=>JText::_('COM_JWPAGEFACTORY_ADDON_PROGRESS_BAR_STRIPPED_DESC'),
					'values'=>array(
						''=>JText::_('JNO'),
						'jwpf-progress-bar-striped'=>JText::_('JYES'),
					),
				),

				'text'=>array(
					'type'=>'text',
					'title'=>JText::_('COM_JWPAGEFACTORY_ADDON_PROGRESS_BAR_TEXT'),
					'desc'=>JText::_('COM_JWPAGEFACTORY_ADDON_PROGRESS_BAR_TEXT_DESC'),
					'std'=>'',
				),
				'text_color'=>array(
					'type'=>'color',
					'title'=>JText::_('COM_JWPAGEFACTORY_ADDON_PROGRESS_BAR_TEXT_COLOR'),
					'depends'=>array(
						array('show_percentage', '!=', 0),
						array('type', '=', 'custom'),
					),
				),
				'text_fontsize'=>array(
					'type'=>'slider',
					'title'=>JText::_('COM_JWPAGEFACTORY_ADDON_PROGRESS_BAR_TEXT_FONTSIZE'),
					'depends'=>array(
						array('show_percentage', '!=', 0),
						array('type', '=', 'custom'),
					),
					'max'=>100,
					'responsive'=>true,
					'std'=>array('md'=>''),
				),
				'text_lineheight'=>array(
					'type'=>'slider',
					'title'=>JText::_('COM_JWPAGEFACTORY_ADDON_PROGRESS_BAR_TEXT_LINEHEIGHT'),
					'depends'=>array(
						array('show_percentage', '!=', 0),
						array('type', '=', 'custom'),
					),
					'max'=>100,
					'responsive'=>true,
					'std'=>array('md'=>''),
				),
				'text_fontfamily'=>array(
					'type'=>'fonts',
					'title'=>JText::_('COM_JWPAGEFACTORY_ADDON_PROGRESS_BAR_TEXT_FONTFAMILY'),
					'depends'=>array(
						array('show_percentage', '!=', 0),
						array('type', '=', 'custom'),
					),
				),
				'text_fontweight'=>array(
					'type'=>'select',
					'title'=>JText::_('COM_JWPAGEFACTORY_ADDON_PROGRESS_BAR_TEXT_FONTWEIGHT'),
					'depends'=>array(
						array('show_percentage', '!=', 0),
						array('type', '=', 'custom'),
					),
					'values'=>array(
						100=>100,
						200=>200,
						300=>300,
						400=>400,
						500=>500,
						600=>600,
						700=>700,
						800=>800,
						900=>900,
					),
				),

				'show_percentage'=>array(
					'type'=>'checkbox',
					'title'=>JText::_('COM_JWPAGEFACTORY_ADDON_PROGRESS_BAR_SHOW_PERCENTAGE'),
					'desc'=>JText::_('COM_JWPAGEFACTORY_ADDON_PROGRESS_BAR_SHOW_PERCENTAGE_DESC'),
					'std'=>0,
				),

				'percentage_color'=>array(
					'type'=>'color',
					'title'=>JText::_('COM_JWPAGEFACTORY_ADDON_PROGRESS_BAR_PERCENT_COLOR'),
					'depends'=>array(
						array('show_percentage', '!=', 0),
						array('type', '=', 'custom'),
					),
				),
				'percentage_fontsize'=>array(
					'type'=>'slider',
					'title'=>JText::_('COM_JWPAGEFACTORY_ADDON_PROGRESS_BAR_PERCENT_FONTSIZE'),
					'depends'=>array(
						array('show_percentage', '!=', 0),
						array('type', '=', 'custom'),
					),
					'max'=>100,
					'responsive'=>true,
					'std'=>array('md'=>''),
				),
				'percentage_lineheight'=>array(
					'type'=>'slider',
					'title'=>JText::_('COM_JWPAGEFACTORY_ADDON_PROGRESS_BAR_PERCENT_LINEHEIGHT'),
					'depends'=>array(
						array('show_percentage', '!=', 0),
						array('type', '=', 'custom'),
					),
					'max'=>100,
					'responsive'=>true,
					'std'=>array('md'=>''),
				),
				'percentage_fontfamily'=>array(
					'type'=>'fonts',
					'title'=>JText::_('COM_JWPAGEFACTORY_ADDON_PROGRESS_BAR_PERCENT_FONTFAMILY'),
					'depends'=>array(
						array('show_percentage', '!=', 0),
						array('type', '=', 'custom'),
					),
				),
				'percentage_fontweight'=>array(
					'type'=>'select',
					'title'=>JText::_('COM_JWPAGEFACTORY_ADDON_PROGRESS_BAR_PERCENT_FONTWEIGHT'),
					'depends'=>array(
						array('show_percentage', '!=', 0),
						array('type', '=', 'custom'),
					),
					'values'=>array(
						100=>100,
						200=>200,
						300=>300,
						400=>400,
						500=>500,
						600=>600,
						700=>700,
						800=>800,
						900=>900,
					),
				),

				'class'=>array(
					'type'=>'text',
					'title'=>JText::_('COM_JWPAGEFACTORY_ADDON_CLASS'),
					'desc'=>JText::_('COM_JWPAGEFACTORY_ADDON_CLASS_DESC'),
					'std'=>''
				),
			),
		),
	)
);
