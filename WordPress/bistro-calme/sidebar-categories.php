<aside class="archive">
    <h2 class="archive_title">カテゴリ 一覧</h2>
    <ul class="archive_list">
        <?php
        $args = array(
            'title_li' => '', //見出しを削除
        );
        wp_list_categories( $args );
        ?>
    </ul>
</aside>
