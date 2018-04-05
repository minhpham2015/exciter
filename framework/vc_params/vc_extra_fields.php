<?php
/*
 * Taxonomy checkbox list field
 */
function exciter_taxonomy_settings_field($settings, $value) {
    $dependency = function_exists('vc_generate_dependencies_attributes') ? vc_generate_dependencies_attributes($settings) : '';
    $terms_fields = array();
    $value_arr = $value;

    if (!is_array($value_arr)) {
        $value_arr = array_map('trim', explode(',', $value_arr));
    }

    if (!empty($settings['taxonomy'])) {
        $terms = get_terms($settings['taxonomy'], 'orderby=count&hide_empty=0');

        if ($terms && !is_wp_error($terms)) {
            foreach ($terms as $term) {
                $terms_fields[] = sprintf(
                        '<label><input onclick="changeCategory(this);" id="%s" class="tb-check-taxonomy %s" type="checkbox" name="%s" value="%s" %s/>%s</label>', $settings['param_name'] . '-' . $term->slug, $settings['param_name'] . ' ' . $settings['type'], $settings['param_name'], $term->slug, checked(in_array($term->slug, $value_arr), true, false), $term->name
                );
            }
        }
    }

    return '<div class="tb-taxonomy-block">'
            . '<input type="hidden" name="' . $settings['param_name'] . '" class="wpb_vc_param_value wpb-checkboxes ' . $settings['param_name'] . ' ' . $settings['type'] . '_field" value="' . $value . '" ' . $dependency . ' />'
            . '<div class="tb-taxonomy-terms">'
            . implode($terms_fields)
            . '</div>'
            . '</div>';
}
exciter_add_extra_parame('bt_taxonomy', 'exciter_taxonomy_settings_field');
