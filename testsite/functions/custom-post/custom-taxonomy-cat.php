<?php
    add_action('init', 'custom_taxonomy_cat');
    function custom_taxonomy_cat(){
        register_taxonomy( // カスタムタクソノミーの追加関数
            'news-cat', // カテゴリーの名前（半角英数字の小文字）
            'news',     // カテゴリーを追加したいカスタム投稿タイプ名
            array(      // オプション（以下
            'label' => 'ニュースカテゴリー', // 表示名称
            'public' => true, // 管理画面に表示するかどうかの指定
            'hierarchical' => true, // 階層を持たせるかどうか
            'show_in_rest' => true, // REST APIの有効化。ブロックエディタの有効化。
            )
        );
        register_taxonomy( // カスタムタクソノミーの追加関数
            'works-cat', // カテゴリーの名前（半角英数字の小文字）
            'works',     // カテゴリーを追加したいカスタム投稿タイプ名
            array(      // オプション（以下
                'label' => '制作実績カテゴリー', // 表示名称
                'public' => true, // 管理画面に表示するかどうかの指定
                'hierarchical' => true, // 階層を持たせるかどうか
                'show_in_rest' => true, // REST APIの有効化。ブロックエディタの有効化。
                'default_terms' => array()
            )
        );

        $default_terms = array(
        array(
            'name' => 'Webサイト制作',
            'slug' => 'website'
        ),
        array(
            'name' => 'プロジェクト開発',
            'slug' => 'progressmanagement'
        ),
        array(
            'name' => '業務システム開発',
            'slug' => 'systemdevelopment'
        ),
        array(
            'name' => '進行管理(PM/PMO)',
            'slug' => 'projectdevelopment'
        ),
        );

        foreach ($default_terms as $default_term) {
            if (!term_exists($default_term['name'], 'works-cat')) {
                wp_insert_term($default_term['name'], 'works-cat', array(
                    'slug' => $default_term['slug'],
                ));
            }
        }
    }
?>