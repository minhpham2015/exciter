<?php
function exciter_fw_ext_backups_demos($demos) {
    $demos_array = array(
        'your-demo-id' => array(
            'title' => __('Demo Title', 'exciter'),
            'screenshot' => 'https://your-site.com/.../screnshot.png',
            'preview_link' => 'https://your-site.com/demo/your-demo-id',
        ),
        // ...
    );

    $download_url = 'https://your-site.com/path/to/download-script/';

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
