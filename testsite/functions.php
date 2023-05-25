<?php

    require_once locate_template('functions/custom-post/create-post-type.php', true);
    require_once locate_template('functions/custom-post/custom-taxonomy-cat.php', true);
    require_once locate_template('functions/custom-post/custom-taxonomy-tag.php', true);
    require_once locate_template('functions/load-scripts.php', true);
    require_once locate_template('functions/custom-fields.php', true);
    require_once locate_template('functions/theme-support.php', true);
    require_once locate_template('functions/create-newpage.php', true);
    
    //初期の管理画面カスタマイズ
    add_action( 'admin_menu', 'remove_menus' );
        function remove_menus(){
        // remove_menu_page( 'index.php' ); //ダッシュボード
        remove_menu_page( 'edit.php' ); //投稿メニュー
        // remove_menu_page( 'upload.php' ); //メディア
        // remove_menu_page( 'edit.php?post_type=page' ); //ページ追加
        // remove_menu_page( 'edit-comments.php' ); //コメントメニュー
        // remove_menu_page( 'themes.php' ); //外観メニュー
        // remove_menu_page( 'plugins.php' ); //プラグインメニュー
        // remove_menu_page( 'tools.php' ); //ツールメニュー
        // remove_menu_page( 'options-general.php' ); //設定メニュー
    }
    add_image_size( 'work_thumbnail', 950, 550, true );
?>
