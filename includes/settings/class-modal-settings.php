<?php

namespace Smeechos\Simple_GDPR_Cookies\Includes\Settings;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class Modal_Settings extends Settings_Parent
{
    /**
     * Adds the array of fields to the content section of the plugin.
     */
    public function add_fields()
    {
        $fields = [
            [
                'id' => 'simple_gdpr_cookies_dismiss_effect_options',
                'title' => 'Dismiss Effect',
                'callback' => 'radio_display',
                'page' => $this->get_page_name(),
                'section' => $this->get_setting_id(),
                'args' => [
                    'option'        => 'dismiss_effect',
                    'radio_1'       => 'Default',
                    'radio_2'       => 'Fade',
                    'description'   => __( 'Default will simply hide the modal upon closing.', 'simple_gdpr_cookies' )
                ]
            ],
            [
                'id' => 'simple_gdpr_cookies_background_color',
                'title' => 'Modal Background Color',
                'callback' => 'color_display',
                'page' => $this->get_page_name(),
                'section' => $this->get_setting_id(),
                'args' => [
                    'option'        => 'background_color'
                ]
            ],
            [
                'id' => 'simple_gdpr_cookies_background_opacity_options',
                'title' => 'Transparent Background',
                'callback' => 'radio_display',
                'page' => $this->get_page_name(),
                'section' => $this->get_setting_id(),
                'args' => [
                    'option'        => 'background_opacity',
                    'radio_1'       => 'None',
                    'radio_2'       => 'Add'
                ]
            ]
        ];

        foreach( $fields as $field ) {
            $this->add_field(
                $field['id'],
                $field['title'],
                $field['callback'],
                $field['page'],
                $field['section'],
                $field['args']
            );
        }
    }
}