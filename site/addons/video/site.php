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

class JwpagefactoryAddonVideo extends JwpagefactoryAddons
{

	public function render()
	{
		$settings = $this->addon->settings;

		$class = (isset($settings->class) && $settings->class) ? $settings->class : '';
		$title = (isset($settings->title) && $settings->title) ? $settings->title : '';
		$heading_selector = (isset($settings->heading_selector) && $settings->heading_selector) ? $settings->heading_selector : 'h3';

		//Options
		$url = (isset($settings->url) && $settings->url) ? $settings->url : '';
		$no_cookie = (isset($settings->no_cookie) && $settings->no_cookie) ? $settings->no_cookie : 0;
		$show_rel_video = (isset($settings->show_rel_video) && $settings->show_rel_video) ? '&rel=0' : '&rel=1';

		$mp4_enable = (isset($settings->mp4_enable) && $settings->mp4_enable) ? $settings->mp4_enable : 0;
		$video_mute = (isset($settings->video_mute) && $settings->video_mute) ? $settings->video_mute : 0;

		$mp4_video = (isset($settings->mp4_video) && $settings->mp4_video) ? $settings->mp4_video : '';
		if ($mp4_video && (strpos($settings->mp4_video, "http://") !== false || strpos($settings->mp4_video, "https://") !== false)) {
			$mp4_video = $settings->mp4_video;
		} else {
			if (!empty($mp4_video)) {
				$mp4_video = JURI::base(true) . '/' . $settings->mp4_video;
			}
		}

		$ogv_video = (isset($settings->ogv_video) && $settings->ogv_video) ? $settings->ogv_video : '';
		if ($ogv_video && (strpos($settings->ogv_video, "http://") !== false || strpos($settings->ogv_video, "https://") !== false)) {
			$ogv_video = $settings->ogv_video;
		} else {
			if (!empty($ogv_video)) {
				$ogv_video = JURI::base(true) . '/' . $settings->ogv_video;
			}
		}

		$show_control = (isset($settings->show_control) && $settings->show_control) ? $settings->show_control : 0;
		$video_loop = (isset($settings->video_loop) && $settings->video_loop) ? $settings->video_loop : 0;
		$autoplay_video = (isset($settings->autoplay_video) && $settings->autoplay_video) ? $settings->autoplay_video : 0;
		$video_poster = (isset($settings->video_poster) && $settings->video_poster) ? $settings->video_poster : '';
		if ($video_poster && (strpos($settings->video_poster, "http://") !== false || strpos($settings->video_poster, "https://") !== false)) {
			$video_poster = $settings->video_poster;
		} else {
			if (!empty($video_poster)) {
				$video_poster = JURI::base(true) . '/' . $settings->video_poster;
			}
		}

		//Image lazy load
		$config = JComponentHelper::getParams('com_jwpagefactory');
		$lazyload = $config->get('lazyloadimg', '0');

		//Output
		$output = '';
		$src = '';

		if ($url) {
			$video = parse_url($url);

			$youtube_no_cookie = $no_cookie ? '-nocookie' : '';

			switch ($video['host']) {
				case 'youtu.be':
					$id = trim($video['path'], '/');
					$src = '//www.youtube' . $youtube_no_cookie . '.com/embed/' . $id . '?iv_load_policy=3' . $show_rel_video;
					break;

				case 'www.youtube.com':
				case 'youtube.com':
					parse_str($video['query'], $query);
					$id = $query['v'];
					$src = '//www.youtube' . $youtube_no_cookie . '.com/embed/' . $id . '?iv_load_policy=3' . $show_rel_video;
					break;

				case 'vimeo.com':
				case 'www.vimeo.com':
					$id = trim($video['path'], '/');
					$src = "//player.vimeo.com/video/{$id}";
			}
		}

		//Lazy load ifram
		$placeholder = $src == '' ? false : $this->get_image_placeholder($src);

		$output .= '<div class="jwpf-addon jwpf-addon-video ' . $class . '">';
		$output .= ($title) ? '<' . $heading_selector . ' class="jwpf-addon-title">' . $title . '</' . $heading_selector . '>' : '';
		if ($mp4_enable != 1) {
			$output .= '<div class="jwpf-video-block jwpf-embed-responsive jwpf-embed-responsive-16by9">';
			$output .= '<iframe class="jwpf-embed-responsive-item' . ($placeholder ? ' jwpf-element-lazy' : '') . '" ' . ($placeholder ? 'style="background:url(' . $placeholder . '); background-size: cover;"' : 'src="' . $src . '"') . ' ' . ($placeholder ? 'data-large="' . $src . '"' : '') . ' webkitAllowFullScreen mozallowfullscreen allowFullScreen loading="lazy"></iframe>';
			$output .= '</div>';
		} else {
			if ($mp4_video || $ogv_video) {
				$output .= '<div class="jwpf-addon-video-local-video-wrap">';
				$output .= '<video class="jwpf-addon-video-local-source' . ($placeholder ? ' jwpf-element-lazy' : '') . '"' . ($video_loop != 0 ? ' loop' : '') . '' . ($autoplay_video != 0 ? ' autoplay' : '') . '' . ($show_control != 0 ? ' controls' : '') . '' . ($video_mute ? ' muted' : '') . ' ' . ($lazyload ? 'data-poster="' . $video_poster . '"' : ' poster="' . $video_poster . '"') . ' controlsList="nodownload" playsinline>';
				if (!empty($mp4_video)) {
					$output .= '<source ' . ($lazyload ? 'data-large="' . $mp4_video . '"' : 'src="' . $mp4_video . '"') . ' type="video/mp4">';
				}
				if (!empty($ogv_video)) {
					$output .= '<source ' . ($lazyload ? 'data-large="' . $ogv_video . '"' : 'src="' . $ogv_video . '"') . ' type="video/ogg">';
				}
				$output .= '</video>';
				$output .= '</div>';
			}
		}
		$output .= '</div>';

		return $output;

	}

	public static function getTemplate()
	{
		$output = '
			<#
				let videoUrl = data.url || ""
				let embedSrc = ""
				let show_rel_video = (typeof data.show_rel_video !== "undefined" && data.show_rel_video) ? "&rel=0" : "&rel=1";
				let youtube_no_cookie = data.no_cookie ? "-nocookie" : ""
				let mp4_enable = (typeof data.mp4_enable == "undefined") ? 0 : data.mp4_enable;
				let mp4_video = (!_.isEmpty(data.mp4_video) && data.mp4_video) ? data.mp4_video : "https://pagefactory.joomla.work/images/pagefactory/addons/video/pb-intro-video.mp4";

				if ( videoUrl ) {
					let tempAchor = document.createElement("a")
						tempAchor.href = videoUrl

					let videoObj = {
						host    :   tempAchor.hostname,
						path    :   tempAchor.pathname,
						query   :   tempAchor.search.substr(tempAchor.search.indexOf("?") + 1)
					}

					switch( videoObj.host ){
						case "youtu.be":
							var videoId = videoObj.path.trim();
								embedSrc = "//www.youtube"+youtube_no_cookie+".com/embed"+ videoId + "?iv_load_policy=3" + show_rel_video
							break;

						case "www.youtube.com":
						case "youtube.com":
							var queryStr = videoObj.query.split("=");
								embedSrc = "//www.youtube"+youtube_no_cookie+".com/embed/"+ queryStr[1]+ "?iv_load_policy=3" + show_rel_video
							break;

						case "www.vimeo.com":
						case "vimeo.com":
							var videoId = videoObj.path.trim();
								embedSrc = "//player.vimeo.com/video"+ videoId;
							break;
					}
				}
			#>

	 		<div class="jwpf-addon jwpf-addon-video {{ data.class }}">
		 		<# if( !_.isEmpty( data.title ) ){ #>
		 			<{{ data.heading_selector }} class="jwpf-addon-title jw-inline-editable-element" data-id={{data.id}} data-fieldName="title" contenteditable="true">{{{ data.title }}}</{{ data.heading_selector }}>
		 		<# } #>
				<# if(mp4_enable != 1){ #>
					<div class="jwpf-iframe-drag-overlay"></div>
					<div class="jwpf-video-block jwpf-embed-responsive jwpf-embed-responsive-16by9">
						<# if(embedSrc){ #>
						<iframe class="jwpf-embed-responsive-item" src=\'{{ embedSrc }}\' webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
						<# } #>
					</div>
				 <# } else {
					if(mp4_video || data.ogv_video){
						#>
						<div class="jwpf-addon-video-local-video-wrap">
							<video class="jwpf-addon-video-local-source" {{(data.video_loop != 0 ? "loop" : "")}} {{(data.autoplay_video!=0 ? "autoplay" : "")}}  {{(data.show_control!=0 ? "controls" : "")}}{{(data.video_mute != 0 ? " muted" : "")}}
							<# if(!_.isEmpty(data.video_poster)){
							if(data.video_poster.indexOf("http://") == -1 && data.video_poster.indexOf("https://") == -1){ #>
								poster=\'{{ pagefactory_base + data.video_poster }}\'
							<# } else { #>
								poster=\'{{ data.video_poster }}\'
							<# }
							} #> 
							controlsList="nodownload">
							<# if(!_.isEmpty(mp4_video)){ #>
								<# if(mp4_video.indexOf("http://") == -1 && mp4_video.indexOf("https://") == -1){ #>
									<source src=\'{{ pagefactory_base + mp4_video }}\' type="video/mp4">
								<# } else { #>
									<source src=\'{{ mp4_video }}\' type="video/mp4">
								<# } #> 
							<# }
							if(!_.isEmpty(data.ogv_video)){
							#>
								<# if(data.ogv_video.indexOf("http://") == -1 && data.ogv_video.indexOf("https://") == -1){ #>
									<source src=\'{{ pagefactory_base + data.ogv_video }}\' type="video/mp4">
								<# } else { #>
									<source src=\'{{ data.ogv_video }}\' type="video/mp4">
								<# } #>
							<# } #>
							</video>
						</div>
					<# } #>
				<# } #>
	 		</div>
		';

		return $output;
	}
}
