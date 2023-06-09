<?php
namespace Elementor;

if ( ! defined( 'ELEMENTOR_ABSPATH' ) ) exit; // Exit if accessed directly

class Control_URL extends Control_Base_Multiple {

	public function get_type() {
		return 'url';
	}

	public function get_default_value() {
		return [
			'is_external' => '',
			'url' => '',
		];
	}

	protected function get_default_settings() {
		return [
			'label_block' => true,
			'show_external' => true,
		];
	}

	public function content_template() {
		?>
		<div class="elementor-control-field elementor-control-url-external-{{{ data.show_external ? 'show' : 'hide' }}}">
			<label class="elementor-control-title">{{{ data.label }}}</label>
			<div class="elementor-control-input-wrapper">
				<input type="url" data-setting="url" placeholder="{{ data.placeholder }}" id="elementor-control-url-field-{{ data._cid }}" />
				<button class="elementor-control-url-target tooltip-target" data-tooltip="<?php \IqitElementorWpHelper::_e( 'Open Link in new Tab', 'elementor' ); ?>" title="<?php \IqitElementorWpHelper::esc_attr_e( 'Open Link in new Tab', 'elementor' ); ?>">
					<span class="elementor-control-url-external" title="<?php \IqitElementorWpHelper::esc_attr_e( 'New Window', 'elementor' ); ?>"><i class="fa fa-external-link"></i></span>
				</button>


				<button class="elementor-control-url-media tooltip-target" data-tooltip="<?php \IqitElementorWpHelper::_e( 'Media link', 'elementor' ); ?>" title="<?php \IqitElementorWpHelper::esc_attr_e( 'Choose media link', 'elementor' ); ?>">
					<span class="elementor-control-url-external" title="<?php \IqitElementorWpHelper::esc_attr_e( 'Media link', 'elementor' ); ?>"><i class="fa fa-paperclip"></i></span>
				</button>


			</div>
		</div>
		<# if ( data.description ) { #>
		<div class="elementor-control-description">{{{ data.description }}}</div>
		<# } #>
		<?php
	}
}
