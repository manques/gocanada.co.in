<form class="fl-contact-form" <?php if ( isset( $module->template_id ) ) echo 'data-template-id="' . $module->template_id . '" data-template-node-id="' . $module->template_node_id . '"'; ?>>

	<?php if ($settings->name_toggle == 'show') : ?>
	<div class="fl-input-group fl-name">
		<label for="fl-name"><?php _ex( 'Name', 'Contact form field label.', 'bb-booster' );?></label>
		<span class="fl-contact-error"><?php _e('Please enter your name.', 'bb-booster');?></span>
		<input type="text" id="fl-name" name="fl-name" value="" placeholder="<?php esc_attr_e( 'Your name', 'bb-booster' ); ?>" />
	</div>
	<?php endif; ?>

	<?php if ($settings->subject_toggle == 'show') : ?>
	<div class="fl-input-group fl-subject">
		<label for="fl-subject"><?php _e('Subject', 'bb-booster');?></label>
		<span class="fl-contact-error"><?php _e('Please enter a subject.', 'bb-booster');?></span>
		<input type="text" id="fl-subject" name="fl-subject" value="" placeholder="<?php esc_attr_e( 'Subject', 'bb-booster' ); ?>" />
	</div>
	<?php endif; ?>

	<?php if ($settings->email_toggle == 'show') : ?>
	<div class="fl-input-group fl-email">
		<label for="fl-email"><?php _e('Email', 'bb-booster');?></label>
		<span class="fl-contact-error"><?php _e('Please enter a valid email.', 'bb-booster');?></span>
		<input type="email" id="fl-email" name="fl-email" value="" placeholder="<?php esc_attr_e( 'Your email', 'bb-booster' ); ?>" />
	</div>
	<?php endif; ?>

	<?php if ($settings->phone_toggle == 'show') : ?>
	<div class="fl-input-group fl-phone">
		<label for="fl-phone"><?php _e('Phone', 'bb-booster');?></label>
		<span class="fl-contact-error"><?php _e('Please enter a valid phone number.', 'bb-booster');?></span>
		<input type="tel" id="fl-phone" name="fl-phone" value="" placeholder="<?php esc_attr_e( 'Your phone', 'bb-booster' ); ?>" />
	</div>
	<?php endif; ?>

	<div class="fl-input-group fl-message">
		<label for="fl-message"><?php _e('Your Message', 'bb-booster');?></label>
		<span class="fl-contact-error"><?php _e('Please enter a message.', 'bb-booster');?></span>
		<textarea id="fl-message" name="fl-message" placeholder="<?php esc_attr_e( 'Your message', 'bb-booster' ); ?>"></textarea>
	</div>

	<?php 
	if ($settings->recaptcha_toggle == 'show' && (isset($settings->recaptcha_site_key) && !empty($settings->recaptcha_site_key)) ) : 
	?>
	<div class="fl-input-group fl-recaptcha">
		<span class="fl-contact-error"><?php _e('Please check the captcha to verify you are not a robot.', 'bb-booster');?></span>
		<div id="<?php echo $id; ?>-fl-grecaptcha" class="fl-grecaptcha" data-sitekey="<?php echo $settings->recaptcha_site_key; ?>"></div>
   	</div>
    <?php endif; ?>
  
	<?php

	FLBuilder::render_module_html( 'button', array(
		'bg_color'          => $settings->btn_bg_color,
		'bg_hover_color'    => $settings->btn_bg_hover_color,
		'bg_opacity'        => $settings->btn_bg_opacity,
		'bg_hover_opacity'  => $settings->btn_bg_hover_opacity,
		'button_transition' => $settings->btn_button_transition,
		'border_radius'     => $settings->btn_border_radius,
		'border_size'       => $settings->btn_border_size,
		'font_size'         => $settings->btn_font_size,
		'icon'              => $settings->btn_icon,
		'icon_position'     => $settings->btn_icon_position,
		'link'              => '#',
		'link_target'       => '_self',
		'padding'           => $settings->btn_padding,
		'style'             => $settings->btn_style,
		'text'              => $settings->btn_text,
		'text_color'        => $settings->btn_text_color,
		'text_hover_color'  => $settings->btn_text_hover_color,
		'width'             => $settings->btn_width,
		'align'				=> $settings->btn_align,
		'icon_animation'	=> $settings->btn_icon_animation
	));

	?>
	<?php if ($settings->success_action == 'redirect') : ?>
		<input type="text" value="<?php echo $settings->success_url; ?>" style="display: none;" class="fl-success-url">
	<?php elseif($settings->success_action == 'none') : ?>
		<span class="fl-success-none" style="display:none;"><?php _e( 'Message Sent!', 'bb-booster' ); ?></span>
	<?php endif; ?>

	<span class="fl-send-error" style="display:none;"><?php _e( 'Message failed. Please try again.', 'bb-booster' ); ?></span>
</form>
<?php if($settings->success_action == 'show_message') : ?>
  <span class="fl-success-msg" style="display:none;"><?php echo $settings->success_message; ?></span>
<?php endif; ?>
