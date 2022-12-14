<?php
/**
 * Section [Sidebar] options for astra theme.
 *
 * @package     Astra Addon
 * @author      Brainstorm Force
 * @copyright   Copyright (c) 2020, Brainstorm Force
 * @link        https://www.brainstormforce.com
 * @since       1.0.0
 */

// Block direct access to the file.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Bail if Customizer config base class does not exist.
if ( ! class_exists( 'Astra_Customizer_Config_Base' ) ) {
	return;
}

if ( ! class_exists( 'Astra_Sidebar_Typo_Configs' ) ) {

	/**
	 * Register below header Configurations.
	 */
	// @codingStandardsIgnoreStart
	class Astra_Sidebar_Typo_Configs extends Astra_Customizer_Config_Base {
 // phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedClassFound
		// @codingStandardsIgnoreEnd

		/**
		 * Register Side bar typography Customizer Configurations.
		 *
		 * @param Array                $configurations Astra Customizer Configurations.
		 * @param WP_Customize_Manager $wp_customize instance of WP_Customize_Manager.
		 * @since 1.4.3
		 * @return Array Astra Customizer Configurations with updated configurations.
		 */
		public function register_configuration( $configurations, $wp_customize ) {

			$_configs = array(

				/**
				 * Option: Divider
				 */
				array(
					'name'     => ASTRA_THEME_SETTINGS . '[sidebar-typography-divider]',
					'section'  => 'section-sidebars',
					'title'    => __( 'Font', 'astra-addon' ),
					'type'     => 'control',
					'control'  => 'ast-heading',
					'priority' => 24,
					'divider'  => array( 'ast_class' => 'ast-section-spacing' ),
					'context'  => ( true === astra_addon_builder_helper()->is_header_footer_builder_active ) ?
						astra_addon_builder_helper()->design_tab : astra_addon_builder_helper()->general_tab,
				),

				/**
				 * Option: SideBar title typography Group
				 */
				array(
					'name'      => ASTRA_THEME_SETTINGS . '[sidebar-title-typography-group]',
					'default'   => astra_get_option( 'sidebar-title-typography-group' ),
					'type'      => 'control',
					'control'   => 'ast-settings-group',
					'title'     => __( 'Title Font', 'astra-addon' ),
					'section'   => 'section-sidebars',
					'transport' => 'postMessage',
					'priority'  => 24,
					'divider'   => array( 'ast_class' => 'ast-section-spacing' ),
					'context'   => ( true === astra_addon_builder_helper()->is_header_footer_builder_active ) ?
						astra_addon_builder_helper()->design_tab : astra_addon_builder_helper()->general_tab,
				),

				/**
				 * Option: Widget Title Font Family
				 */
				array(
					'name'      => 'font-family-widget-title',
					'type'      => 'sub-control',
					'parent'    => ASTRA_THEME_SETTINGS . '[sidebar-title-typography-group]',
					'section'   => 'section-sidebars',
					'control'   => 'ast-font',
					'font_type' => 'ast-font-family',
					'default'   => astra_get_option( 'font-family-widget-title' ),
					'title'     => __( 'Family', 'astra-addon' ),
					'connect'   => ASTRA_THEME_SETTINGS . '[font-weight-widget-title]',
				),

				/**
				 * Option: Widget Title Font Size
				 */
				array(
					'name'              => 'font-size-widget-title',
					'type'              => 'sub-control',
					'parent'            => ASTRA_THEME_SETTINGS . '[sidebar-title-typography-group]',
					'section'           => 'section-sidebars',
					'transport'         => 'postMessage',
					'default'           => astra_get_option( 'font-size-widget-title' ),
					'control'           => 'ast-responsive-slider',
					'title'             => __( 'Size', 'astra-addon' ),
					'sanitize_callback' => array( 'Astra_Customizer_Sanitizes', 'sanitize_responsive_slider' ),
					'suffix'            => array( 'px', 'em' ),
					'input_attrs'       => array(
						'px' => array(
							'min'  => 0,
							'step' => 1,
							'max'  => 100,
						),
						'em' => array(
							'min'  => 0,
							'step' => 1,
							'max'  => 20,
						),
					),
				),

				/**
				 * Option: Widget Title Font Weight
				 */
				array(
					'name'              => 'font-weight-widget-title',
					'type'              => 'sub-control',
					'parent'            => ASTRA_THEME_SETTINGS . '[sidebar-title-typography-group]',
					'section'           => 'section-sidebars',
					'control'           => 'ast-font',
					'font_type'         => 'ast-font-weight',
					'sanitize_callback' => array( 'Astra_Customizer_Sanitizes', 'sanitize_font_weight' ),
					'default'           => astra_get_option( 'font-weight-widget-title' ),
					'title'             => __( 'Weight', 'astra-addon' ),
					'connect'           => 'font-family-widget-title',
				),

				/**
				 * Option: Widget Title Text Transform
				 */
				array(
					'name'      => 'text-transform-widget-title',
					'type'      => 'sub-control',
					'parent'    => ASTRA_THEME_SETTINGS . '[sidebar-title-typography-group]',
					'section'   => 'section-sidebars',
					'title'     => __( 'Text Transform', 'astra-addon' ),
					'default'   => astra_get_option( 'text-transform-widget-title' ),
					'control'   => 'ast-select',
					'transport' => 'postMessage',
					'choices'   => array(
						''           => __( 'Inherit', 'astra-addon' ),
						'none'       => __( 'None', 'astra-addon' ),
						'capitalize' => __( 'Capitalize', 'astra-addon' ),
						'uppercase'  => __( 'Uppercase', 'astra-addon' ),
						'lowercase'  => __( 'Lowercase', 'astra-addon' ),
					),
				),

				/**
				 * Option: Widget Title Line Height
				 */
				array(
					'name'              => 'line-height-widget-title',
					'transport'         => 'postMessage',
					'type'              => 'sub-control',
					'parent'            => ASTRA_THEME_SETTINGS . '[sidebar-title-typography-group]',
					'section'           => 'section-sidebars',
					'default'           => astra_get_option( 'line-height-widget-title' ),
					'sanitize_callback' => array( 'Astra_Customizer_Sanitizes', 'sanitize_number_n_blank' ),
					'title'             => __( 'Line Height', 'astra-addon' ),
					'control'           => 'ast-slider',
					'suffix'            => 'em',
					'input_attrs'       => array(
						'min'  => 1,
						'step' => 0.01,
						'max'  => 5,
					),
				),

				/**
				 * Option: SideBar Content typography Group
				 */
				array(
					'name'      => ASTRA_THEME_SETTINGS . '[sidebar-content-typography-group]',
					'default'   => astra_get_option( 'sidebar-content-typography-group' ),
					'type'      => 'control',
					'control'   => 'ast-settings-group',
					'title'     => __( 'Content Font', 'astra-addon' ),
					'section'   => 'section-sidebars',
					'transport' => 'postMessage',
					'priority'  => 24,
					'context'   => ( true === astra_addon_builder_helper()->is_header_footer_builder_active ) ?
						astra_addon_builder_helper()->design_tab : astra_addon_builder_helper()->general_tab,
				),

				/**
				 * Option: Widget Content Font Family
				 */
				array(
					'name'      => 'font-family-widget-content',
					'control'   => 'ast-font',
					'font_type' => 'ast-font-family',
					'type'      => 'sub-control',
					'parent'    => ASTRA_THEME_SETTINGS . '[sidebar-content-typography-group]',
					'section'   => 'section-sidebars',
					'default'   => astra_get_option( 'font-family-widget-content' ),
					'title'     => __( 'Family', 'astra-addon' ),
					'connect'   => ASTRA_THEME_SETTINGS . '[font-weight-widget-content]',
				),

				/**
				 * Option: Widget Content Font Size
				 */

				array(
					'name'              => 'font-size-widget-content',
					'type'              => 'sub-control',
					'parent'            => ASTRA_THEME_SETTINGS . '[sidebar-content-typography-group]',
					'section'           => 'section-sidebars',
					'control'           => 'ast-responsive-slider',
					'default'           => astra_get_option( 'font-size-widget-content' ),
					'title'             => __( 'Size', 'astra-addon' ),
					'transport'         => 'postMessage',
					'sanitize_callback' => array( 'Astra_Customizer_Sanitizes', 'sanitize_responsive_slider' ),
					'suffix'            => array( 'px', 'em' ),
					'input_attrs'       => array(
						'px' => array(
							'min'  => 0,
							'step' => 1,
							'max'  => 100,
						),
						'em' => array(
							'min'  => 0,
							'step' => 1,
							'max'  => 20,
						),
					),
				),

				/**
				 * Option: Widget Content Font Weight
				 */
				array(
					'name'              => 'font-weight-widget-content',
					'type'              => 'sub-control',
					'parent'            => ASTRA_THEME_SETTINGS . '[sidebar-content-typography-group]',
					'section'           => 'section-sidebars',
					'control'           => 'ast-font',
					'font_type'         => 'ast-font-weight',
					'sanitize_callback' => array( 'Astra_Customizer_Sanitizes', 'sanitize_font_weight' ),
					'default'           => astra_get_option( 'font-weight-widget-content' ),
					'title'             => __( 'Weight', 'astra-addon' ),
					'connect'           => 'font-family-widget-content',
				),

				/**
				 * Option: Widget Content Text Transform
				 */
				array(
					'name'      => 'text-transform-widget-content',
					'type'      => 'sub-control',
					'parent'    => ASTRA_THEME_SETTINGS . '[sidebar-content-typography-group]',
					'section'   => 'section-sidebars',
					'default'   => astra_get_option( 'text-transform-widget-content' ),
					'title'     => __( 'Text Transform', 'astra-addon' ),
					'transport' => 'postMessage',
					'control'   => 'ast-select',
					'choices'   => array(
						''           => __( 'Inherit', 'astra-addon' ),
						'none'       => __( 'None', 'astra-addon' ),
						'capitalize' => __( 'Capitalize', 'astra-addon' ),
						'uppercase'  => __( 'Uppercase', 'astra-addon' ),
						'lowercase'  => __( 'Lowercase', 'astra-addon' ),
					),
				),

				/**
				 * Option: Widget Content Line Height
				 */
				array(
					'name'              => 'line-height-widget-content',
					'type'              => 'sub-control',
					'parent'            => ASTRA_THEME_SETTINGS . '[sidebar-content-typography-group]',
					'section'           => 'section-sidebars',
					'transport'         => 'postMessage',
					'default'           => astra_get_option( 'line-height-widget-content' ),
					'sanitize_callback' => array( 'Astra_Customizer_Sanitizes', 'sanitize_number_n_blank' ),
					'title'             => __( 'Line Height', 'astra-addon' ),
					'control'           => 'ast-slider',
					'suffix'            => 'em',
					'input_attrs'       => array(
						'min'  => 1,
						'step' => 0.01,
						'max'  => 5,
					),
				),

				/**
				 * Option: Widget Title Font Size
				 */

				array(
					'name'              => ASTRA_THEME_SETTINGS . '[font-size-sidebar-title]',
					'type'              => 'control',
					'control'           => 'ast-responsive-slider',
					'sanitize_callback' => array( 'Astra_Customizer_Sanitizes', 'sanitize_responsive_slider' ),
					'section'           => 'section-sidebars',
					'transport'         => 'refresh',
					'title'             => __( 'Widget Title Font Size', 'astra-addon' ),
					'priority'          => 24,
					'default'           => astra_get_option( 'font-size-sidebar-title' ),
					'suffix'            => array( 'px', 'em' ),
					'input_attrs'       => array(
						'px' => array(
							'min'  => 0,
							'step' => 1,
							'max'  => 100,
						),
						'em' => array(
							'min'  => 0,
							'step' => 1,
							'max'  => 20,
						),
					),
					'divider'           => array( 'ast_class' => 'ast-top-section-divider ast-bottom-section-divider' ),
					'context'           => ( true === astra_addon_builder_helper()->is_header_footer_builder_active ) ?
						astra_addon_builder_helper()->design_tab : astra_addon_builder_helper()->general_tab,
				),

				/**
				 * Option: Widget Font Size
				 */

				array(
					'name'              => ASTRA_THEME_SETTINGS . '[font-size-sidebar-content]',
					'type'              => 'control',
					'control'           => 'ast-responsive-slider',
					'sanitize_callback' => array( 'Astra_Customizer_Sanitizes', 'sanitize_responsive_slider' ),
					'section'           => 'section-sidebars',
					'transport'         => 'refresh',
					'title'             => __( 'Widget Font Size ', 'astra-addon' ),
					'priority'          => 24,
					'default'           => astra_get_option( 'font-size-sidebar-content' ),
					'suffix'            => array( 'em' ),
					'input_attrs'       => array(
						'em' => array(
							'min'  => 0,
							'step' => 1,
							'max'  => 5,
						),
					),
					'context'           => ( true === astra_addon_builder_helper()->is_header_footer_builder_active ) ?
						astra_addon_builder_helper()->design_tab : astra_addon_builder_helper()->general_tab,
				),
			);

			return array_merge( $configurations, $_configs );
		}
	}
}

new Astra_Sidebar_Typo_Configs();
