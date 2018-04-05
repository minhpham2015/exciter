<?php
function exciter_fw_ext_backups_demos($demos) {
    $demos_array = array(
		'exciter' => array(
			'title' => esc_html__('Exciter', 'exciter'),
			'screenshot' => 'http://theme.bearsthemes.com/import_demo/exciter/exciter/screenshot.png',
			'preview_link' => 'http://theme.bearsthemes.com/wordpress/exciter/',
		),
		
    );

    $download_url = 'http://theme.bearsthemes.com/import_demo/exciter/';

    foreach ($demos_array as $id => $data) {
        $demo = new FW_Ext_Backups_Demo($id, 'piecemeal', array(
            'url' => $download_url,
            'file_id' => $id,
        ));
        $demo->set_title($data['title']);
        $demo->set_screenshot($data['screenshot']);
        $demo->set_preview_link($data['preview_link']);

        $demos[ $demo->get_id() ] = $demo;

        unset($demo);
    }

    return $demos;
}
add_filter('fw:ext:backups-demo:demos', 'exciter_fw_ext_backups_demos');
