<?php


class Orti_Widget_Text extends WP_Widget {
	public function __construct() {
		parent::__construct(
			'orti_widget_text',
			esc_html__( 'ORTI - Text widget' ),
			[
				'name'        =>  'ORTI - Text widget',
				'description' => esc_html__( 'Print easy text without markup', 'orti' )
			]
//            [
//				'name'        => esc_html__( 'ORTI - Text widget', 'orti' ),
//				'description' => esc_html__( 'Print easy text without markup', 'orti' )
//			]
		);
	}

	public function form( $instance ) {
		?>
            <label for="<?php echo $this->get_field_id( 'orti-id-text' ); ?>">
				<?php _e( 'Enter your text', 'orti' ); ?>
            </label>
            <input type="text"
                   id="<?php echo $this->get_field_id( 'orti-id-text' ); ?>"
                   name="<?php echo $this->get_field_name( 'orti-text' ); ?>"
                   value="<?php echo $instance['orti-text'] ?? ''; ?>"
                    class="widefat">

		<?php

	}

	public function widget( $arg, $instance ) {
		echo $instance['orti-text'];
	}

	public function update( $new_instance, $old_instance ) {
		return $new_instance;
	}
}
