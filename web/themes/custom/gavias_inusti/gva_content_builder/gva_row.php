<?php
class element_gva_row{
	public function render_form(){
		return array(
			'title'	=> t('Row'),
			'fields'	=> array(
				array(
		        'id'        => 'row_name',
		        'type'      => 'text',
		        'title'     => ('Row Name'),
		      ),
				array(
		        'id'        => 'info',
		        'type'      => 'info',
		        'title'      => 'Setting background for row'
		      ),
		      array(
		        'id'       => 'bg_image',
		        'type'     => 'upload',
		        'title'    => ('Background Image'),
		        'class'		 => 'width-1-2'
		      ),
		      array(
		        'id'          => 'bg_color',
		        'type'        => 'text',
		        'title'       => ('Background Color'),
		        'desc'        => ('Use color name (eg. "gray") or hex (eg. "#808080").'),
		        'std'         => '',
		        'class'		 => 'width-1-2 margin-top-40'
		      ),
		      array(
		        'id'         => 'bg_position',
		        'type'       => 'select',
		        'title'      => t('Background Position'),
		        'class'       => 'width-1-4 clear-both',
		        'options'    => array(
		          'center top' => 'center top',
		          'center right' => 'center right',
		          'center bottom' => 'center bottom',
		          'center center' => 'center center',
		          'left top' => 'left top',
		          'left center' => 'left center',
		          'left bottom' => 'left bottom',
		          'right top' => 'right top',
		          'right center' => 'right center',
		          'right bottom' => 'right bottom',
		        )
		      ),
		      array(
		        'id'         => 'bg_repeat',
		        'type'       => 'select',
		        'title'      => t('Background Position'),
		        'class'       => 'width-1-4',
		        'options'    => array(
		          'no-repeat' => 'no-repeat',
		          'repeat' => 'repeat',
		          'repeat-x' => 'repeat-x',
		          'repeat-y' => 'repeat-y',
		          )
		      ),
		      array(
		        'id'         => 'bg_attachment',
		        'type'       => 'select',
		        'title'      => t('Background Attachment'),
		        'class'       => 'width-1-4',
		        'options'    => array(
		          'scroll' 		=> 'Scroll',
		          'fixed'  		=> 'Parallax',
		          'bg-fixed'  	=> 'Fixed',
		          ),
		        'std'         => 'scroll'
		      ),

		      array(
		        'id'         => 'bg_size',
		        'type'       => 'select',
		        'title'      => t('Background Size'),
		        'class'       => 'width-1-4',
		        'options'    => array(
		            'cover'      => 'cover',
		            'contain'    => 'contain',
		            'default'    => 'default',
		            'width-100'  => 'Width 100%',
		          ),
		        'std'         => 'cover'
		      ),

		      array(
		        'id'          => 'bg_video',
		        'type'        => 'text',
		        'title'       => ('Background video (url video)'),
		        'desc'        => ('Use video youtube.'),
		        'std'         => '',
		      ),

		      array(
		        'id'        => 'info',
		        'type'      => 'info',
		        'title'      => 'Setting padding for row'
		      ),
		      array(
		        'id'        => 'style_space',
		        'type'      => 'select',
		        'title'     => 'Style Space',
		        'options'   => array(
		          	'default'                           => 'Default',
		          	'remove_padding_top'                => 'Remove padding top',
		          	'remove_padding_bottom'             => 'Remove padding bottom',
		          	'remove_padding'                    => 'Remove padding for row',
		          	'remove_padding_col'                => 'Remove padding for colums of row',
		          	'remove_margin remove_padding remove_padding_col' => 'Remove padding for [colums & row]',
		          	'padding-small'                     => 'Padding Small',
		          	'padding-medium'					=> 'Padding Medium',
		          	'padding-large'                  	=> 'Padding Large',
		          	'padding-bottom-large'              => 'Padding Bottom Large',
		          	'padding-top-large'                 => 'Padding Top Large',
		          	'padding-bottom-small'					=> 'Padding Bottom Small'
		        )
		      ),

		      array(
		        'id'        => 'padding_top',
		        'type'      => 'text',
		        'title'     => ('Padding Top'),
		        'desc'      => ('Padding Top for row (e.g. 30px)'),
		        'class'     => 'width-1-4',
		        'std'       => '0',
		      ),
		      array(
		        'id'          => 'padding_right',
		        'type'        => 'text',
		        'title'       => ('Padding Right'),
		        'desc'        => ('Padding Right for row (e.g. 30px)'),
		        'class'     => 'width-1-4',
		        'std'         => '0',
		      ),
		      array(
		        'id'          => 'padding_bottom',
		        'type'        => 'text',
		        'title'       => ('Padding Bottom'),
		        'desc'        => ('Padding Bottom for row (e.g. 30px)'),
		        'class'     => 'width-1-4',
		        'std'         => '0',
		      ),
		      array(
		        'id'          => 'padding_left',
		        'type'        => 'text',
		        'title'       => ('Padding Left'),
		        'desc'        => ('Padding Left for row (e.g. 30px)'),
		        'class'     => 'width-1-4',
		        'std'         => '0',
		      ),
		      // == Padding LG
		      array(
		        'id'        => 'padding_top_lg',
		        'type'      => 'text',
		        'title'     => ('Padding Top Tablet Screen'),
		        'desc'      => ('Padding Top for row (e.g. 30)'),
		        'class'     => 'width-1-4',
		        'std'       => '0',
		      ),
		      array(
		        'id'          => 'padding_right_lg',
		        'type'        => 'text',
		        'title'       => ('Padding Right Tablet Screen'),
		        'desc'        => ('Padding Right for row (e.g. 30)'),
		        'class'     => 'width-1-4',
		        'std'         => '0',
		      ),
		      array(
		        'id'          => 'padding_bottom_lg',
		        'type'        => 'text',
		        'title'       => ('Padding Bottom Tablet Screen'),
		        'desc'        => ('Padding Bottom for row (e.g. 30)'),
		        'class'     => 'width-1-4',
		        'std'         => '0',
		      ),
		      array(
		        'id'          => 'padding_left_lg',
		        'type'        => 'text',
		        'title'       => ('Padding Left Tablet Screen'),
		        'desc'        => ('Padding Left for row (e.g. 30)'),
		        'class'     => 'width-1-4',
		        'std'         => '0',
		      ),

		   	// == Padding MD
		      array(
		        'id'        => 'padding_top_md',
		        'type'      => 'text',
		        'title'     => ('Padding Top Mobile Screen'),
		        'desc'      => ('Padding Top for row (e.g. 30)'),
		        'class'     => 'width-1-4',
		        'std'       => '0',
		      ),
		      array(
		        'id'          => 'padding_right_md',
		        'type'        => 'text',
		        'title'       => ('Padding Right Mobile Screen'),
		        'desc'        => ('Padding Right for row (e.g. 30)'),
		        'class'     => 'width-1-4',
		        'std'         => '0',
		      ),
		      array(
		        'id'          => 'padding_bottom_md',
		        'type'        => 'text',
		        'title'       => ('Padding Bottom Mobile Screen'),
		        'desc'        => ('Padding Bottom for row (e.g. 30)'),
		        'class'     => 'width-1-4',
		        'std'         => '0',
		      ),
		      array(
		        'id'          => 'padding_left_md',
		        'type'        => 'text',
		        'title'       => ('Padding Left Mobile Screen'),
		        'desc'        => ('Padding Left for row (e.g. 30)'),
		        'class'     => 'width-1-4',
		        'std'         => '0',
		      ),

		      array(
		        'id'        => 'info',
		        'type'      => 'info',
		        'title'      => 'Setting margin for row'
		      ),
		      array(
		        'id'          => 'margin_top',
		        'type'        => 'text',
		        'title'       => ('Margin Top'),
		        'desc'        => ('Margin top for row (e.g. 30px)'),
		        'class'     => 'width-1-4',
		        'std'         => '0',
		      ),
		      array(
		        'id'          => 'margin_right',
		        'type'        => 'text',
		        'title'       => ('Margin Right'),
		        'desc'        => ('Margin Right for row (e.g. 30px)'),
		        'class'     => 'width-1-4',
		        'std'         => '0',
		      ),
		      array(
		        'id'          => 'margin_bottom',
		        'type'        => 'text',
		        'title'       => ('Margin Bottom'),
		        'desc'        => ('Margin Bottom for row (e.g. 30px)'),
		        'class'     => 'width-1-4',
		        'std'         => '0',
		      ),
		      array(
		        'id'          => 'margin_left',
		        'type'        => 'text',
		        'title'       => ('Margin Left'),
		        'desc'        => ('Margin Left for row (e.g. 30px)'),
		        'class'     => 'width-1-4',
		        'std'         => '0',
		      ),
		      // == Padding LG
		      array(
		        'id'        => 'margin_top_lg',
		        'type'      => 'text',
		        'title'     => ('Margin Top Tablet Screen'),
		        'desc'      => ('Margin Top for row (e.g. 30)'),
		        'class'     => 'width-1-4',
		        'std'       => '0',
		      ),
		      array(
		        'id'          => 'margin_right_lg',
		        'type'        => 'text',
		        'title'       => ('Margin Right Tablet Screen'),
		        'desc'        => ('Margin Right for row (e.g. 30)'),
		        'class'     => 'width-1-4',
		        'std'         => '0',
		      ),
		      array(
		        'id'          => 'margin_bottom_lg',
		        'type'        => 'text',
		        'title'       => ('Margin Bottom Tablet Screen'),
		        'desc'        => ('Margin Bottom for row (e.g. 30)'),
		        'class'     => 'width-1-4',
		        'std'         => '0',
		      ),
		      array(
		        'id'          => 'margin_left_lg',
		        'type'        => 'text',
		        'title'       => ('Margin Left Tablet Screen'),
		        'desc'        => ('Margin Left for row (e.g. 30)'),
		        'class'     => 'width-1-4',
		        'std'         => '0',
		      ),

		   	// == Padding MD
		      array(
		        'id'        => 'margin_top_md',
		        'type'      => 'text',
		        'title'     => ('Margin Top Mobile Screen'),
		        'desc'      => ('Margin Top for row (e.g. 30)'),
		        'class'     => 'width-1-4',
		        'std'       => '0',
		      ),
		      array(
		        'id'          => 'margin_right_md',
		        'type'        => 'text',
		        'title'       => ('Margin Right Mobile Screen'),
		        'desc'        => ('Margin Right for row (e.g. 30)'),
		        'class'     => 'width-1-4',
		        'std'         => '0',
		      ),
		      array(
		        'id'          => 'margin_bottom_md',
		        'type'        => 'text',
		        'title'       => ('Margin Bottom Mobile Screen'),
		        'desc'        => ('Margin Bottom for row (e.g. 30)'),
		        'class'     => 'width-1-4',
		        'std'         => '0',
		      ),
		      array(
		        'id'          => 'margin_left_md',
		        'type'        => 'text',
		        'title'       => ('Margin Left Mobile Screen'),
		        'desc'        => ('Margin Left for row (e.g. 30)'),
		        'class'     => 'width-1-4',
		        'std'         => '0',
		      ),

		      array(
		        'id'        => 'info',
		        'type'      => 'info',
		        'title'      => 'Setting layout, style for row',
		      ),
		      array(
		        'id'            => 'layout',
		        'type'          => 'select',
		        'title'         => 'Layout',
		        'options'       => array( 'container' => 'Box', 'container-fw' => 'Full Width', 'full-screen' => 'Full Screen' )
		      ),

		      array(
		        'id'        => 'info',
		        'type'      => 'info',
		        'title'      => 'Setting style, class, id for row'
		      ),
		      
		     array(
		        'id'    => 'icon',
		        'type'    => 'text',
		        'title'   => ('Icon for row'),
		        'desc'     => t('Use class icon font <a target="_blank" href="http://fontawesome.io/icons/">Icon Awesome</a>'),
		      ),
		     
		      array(
		        'id'    => 'class',
		        'type'    => 'text',
		        'title'   => ('Custom CSS classes'),
		        'desc'    => ('Multiple classes should be separated with SPACE.<br />'),
		      ),
		      
		      array(
		        'id'    => 'row_id',
		        'type'    => 'text',
		        'title'   => ('Custom ID'),
		        'desc'    => ('Use this option to create One Page sites.<br/>For example: Your Custom ID is <strong>offer</strong> and you want to open this section, please use link: <strong>your-url/#offer-2</strong>'),
		        'class'   => 'small-text',
		      ),
		      array(
		        'id'    => 'bg_row',
		        'type'    => 'select',
		        'title'   => ('Style Row Available'),
		        'options'    => array(
		          '' 					=> '-- None --',
		          'row-gradient-1' => 'Background gradient 1',
		          'row-gradient-2' => 'Background gradient 2',
		          'row-bg-top'		=> 'Background top',
		          'row-border-top'		=> 'Border top'
		        )
		      ),
		   )
		);
	}

	public function render_content( $settings = array(), $content = '' ) {
		global $base_url, $base_path;
         extract(gavias_merge_atts(array(
         	'row_name'					=> '',
         	'first_level'				=> false,
            'bg_image'           	=> '',
            'bg_color'           	=> '',
            'bg_position'        	=> '',
            'bg_repeat'    			=> '',
            'bg_attachment'      	=> '',
            'bg_size'          		=> '',
            'bg_video'           	=> '',
            'style_space'         	=> '',
            'padding_top'          	=> '',
            'padding_right'         => '',
            'padding_bottom'        => '',
            'padding_left'          => '',
            'margin_top'            => '',
            'margin_right'          => '',
            'margin_bottom'         => '',
            'margin_left'           => '',
            'layout'						=> 'container',
            'icon'						=> '',
            'class'						=> '',
            'row_id'						=> '',
            'bg_row'						=> '',
            'class_css'					=> ''
         ), $settings));

         $array_class = array();
         $array_style = array();
         if($first_level) $array_class[] = 'row-first-level';
         $class ? $array_class[]	= $class : false;
			$array_class[] = 'gbb-row';
			$bg_row ? $array_class[] = $bg_row : false;

			if($bg_color) $array_style[] 	= 'background-color:'. $bg_color;

			if( $bg_image){
				$array_style[] 	= 'background-image:url(\''. substr($base_path, 0, -1) . $bg_image .'\')';
				$array_style[] 	= 'background-repeat:' . $bg_repeat;
				$array_style[] 	= 'background-position:' . $bg_position;
				if($bg_size == 'width-100'){
					$array_style[]  = 'background-size: 100%';
				}
				if($bg_attachment=='fixed'){
					$array_class[] = 'gva-parallax-background';
				}
				if($bg_attachment=='bg-fixed'){
					$array_class[] = 'gva-fixed-background';
				}
			}
			
			$row_bg_size = 'bg-size-cover';
			if($bg_size){
				$row_bg_size = 'bg-size-' . $bg_size;
			}
			$array_class[] = $row_bg_size;

			$data_bg_video = "";
			if($bg_video){
				$array_class[] = 'youtube-bg';
				$data_bg_video ="data-property=\"{videoURL: '{$bg_video}',
			      containment: 'self', startAt: 0,  stopAt: 0, autoPlay: true, loop: true, mute: true, showControls: false, 
			      showYTLogo: false, realfullscreen: true, addRaster: false, optimizeDisplay: true, stopMovieOnBlur: true}\"";
			}
			$array_class[] = $class_css;
			$row_class = implode(' ', $array_class);
			$row_style 	= implode('; ', $array_style );

			ob_start();
		?>
		  	<div class="gbb-row-wrapper section <?php print trim($row_class) ?>" <?php if($row_id) print 'id="'.$row_id.'"' ?> style="<?php print $row_style ?>" <?php if($data_bg_video) print $data_bg_video; ?> <?php if($row_name) print 'data-onepage-title="'.$row_name.'"'; ?>>
		  	<?php if($icon){ ?><span class="icon-row <?php print $icon ?>"></span><?php } ?>
		    	<div class="bb-inner <?php if($style_space) print $style_space; ?>">  
		      	<div class="bb-container <?php print $layout ?>">
			        	<div class="row row-wrapper">
							<?php print $content ?>
	     	 			</div>
    				</div>
  				</div>  
			  	<?php if( $bg_attachment == 'fixed' ){ 
			  		$data_parallax = 'data-bottom-top="top: -60%;" data-top-bottom="top: 0%;"';
			  		if($bg_position == 'center top'){
			  			$data_parallax = 'data-bottom-top="top: -40%;" data-top-bottom="top: 20%;"';
			  		}
			  	?>
			    <div style="background-repeat: <?php print $bg_repeat; ?>;background-position:<?php print $bg_position ?>;<?php print ($bg_size=='width-100'?'background-size: 100%;':'')?>" class="gva-parallax-inner skrollable skrollable-between <?php print $row_bg_size ?>" <?php print $data_parallax ?>></div>
			  <?php } ?>
			</div>  
		<?php return ob_get_clean();
	}

	public function render_style( $settings = array() ) {
		extract(gavias_merge_atts(array(
         'padding_top'          	=> '',
         'padding_right'         => '',
         'padding_bottom'        => '',
         'padding_left'          => '',
         'margin_top'            => '',
         'margin_right'          => '',
         'margin_bottom'         => '',
         'margin_left'           => '',
         'padding_top_lg'        => '',
         'padding_right_lg'      => '',
         'padding_bottom_lg'     => '',
         'padding_left_lg'       => '',
         'padding_top_md'        => '',
         'padding_right_md'      => '',
         'padding_bottom_md'     => '',
         'padding_left_md'       => '',
         'margin_top_lg'        => '',
         'margin_right_lg'      => '',
         'margin_bottom_lg'     => '',
         'margin_left_lg'       => '',
         'margin_top_md'        => '',
         'margin_right_md'      => '',
         'margin_bottom_md'     => '',
         'margin_left_md'       => '',
         'class_css'					=> ''
      ), $settings));
		
		$styles = array();
		if($padding_top) $styles[] 	= "padding-top:{$padding_top}px!important";
		if($padding_left) $styles[] 	= "padding-left:{$padding_left}px!important";
		if($padding_bottom) $styles[] = "padding-bottom:{$padding_bottom}px!important";
		if($padding_right) $styles[] 	= "padding-right:{$padding_right}px!important";
		if($margin_top) $styles[] 		= "margin-top:{$margin_top}px!important";
		if($margin_right) $styles[] 	= "margin-right:{$margin_right}px!important";
		if($margin_bottom) $styles[] 	= "margin-bottom:{$margin_bottom}px!important";
		if($margin_left) $styles[] 	= "margin-left:{$margin_left}px!important";
		$style = implode('; ', $styles );
		if(!empty($style)){
			$style = ".{$class_css} > .bb-inner{{$style}}";
		}

		$styles_lg = array();
		if($padding_top_lg) $styles_lg[] 	= "padding-top:{$padding_top_lg}px!important";
		if($padding_left_lg) $styles_lg[] 	= "padding-left:{$padding_left_lg}px!important";
		if($padding_bottom_lg) $styles_lg[] = "padding-bottom:{$padding_bottom_lg}px!important";
		if($padding_right_lg) $styles_lg[] 	= "padding-right:{$padding_right_lg}px!important";
		if($margin_top_lg) $styles_lg[] 	= "margin-top:{$margin_top_lg}px!important";
		if($margin_left_lg) $styles_lg[] 	= "margin-left:{$margin_left_lg}px!important";
		if($margin_bottom_lg) $styles_lg[] = "margin-bottom:{$margin_bottom_lg}px!important";
		if($margin_right_lg) $styles_lg[] 	= "margin-right:{$margin_right_lg}px!important";
		$style_lg = implode('; ', $styles_lg );
		if(!empty($style_lg)){
			$style .= "@media(max-width: 1199.98px){ .{$class_css} > .bb-inner{{$style_lg}} }";
		}

		$styles_md = array();
		if($padding_top_md) $styles_md[] 	= "padding-top:{$padding_top_md}px!important";
		if($padding_left_md) $styles_md[] 	= "padding-left:{$padding_left_md}px!important";
		if($padding_bottom_md) $styles_md[] = "padding-bottom:{$padding_bottom_md}px!important";
		if($padding_right_md) $styles_md[] 	= "padding-right:{$padding_right_md}px!important";
		if($margin_top_md) $styles_md[] 	= "margin-top:{$margin_top_md}px!important";
		if($margin_left_md) $styles_md[] 	= "margin-left:{$margin_left_md}px!important";
		if($margin_bottom_md) $styles_md[] = "margin-bottom:{$margin_bottom_md}px!important";
		if($margin_right_md) $styles_md[] 	= "margin-right:{$margin_right_md}px!important";
		$styles_md = implode('; ', $styles_md );
		if(!empty($styles_md)){
			$style .= "@media(max-width: 991.98px){ .{$class_css} > .bb-inner{{$styles_md}} }";
		}

		return $style;
	}

}