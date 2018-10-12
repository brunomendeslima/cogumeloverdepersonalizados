<?php

add_theme_support('post-thumbnails');

function cadastrar_post_type_produtos() {
    $nomeSingular = 'Produto';
    $nomePlural = 'Produtos';
    $description = 'Cadastro de Produto Cogumelo Verde Personalizados';

    $labels = array(
        'name' => $nomePlural,
        'name_singular' => $nomeSingular,
        'add_new_item' => 'Adicionar novo ' . $nomeSingular,
        'edit_item' => 'Editar ' . $nomeSingular
    );
    
    $supports = array(
        'title',
        'editor',
        'thumbnail'
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'description' => $description,
        'menu_icon'   => 'dashicons-products',
        'supports' => $supports        
    );

    register_post_type('produto', $args);
}

add_action('init', 'cadastrar_post_type_produtos');

function registrar_menu_navegacao(){
    register_nav_menu('header-menu', 'main-menu');
}
add_action('init', 'registrar_menu_navegacao');

function geraTitle(){
    bloginfo('name');
    if(!is_home()):
        echo " | ";
        the_title();
    endif;    
}

function registra_taxonomia_categoria(){
    $categoriaSingular = 'Categoria';
    $categoriaPlural = 'Categorias';

    $labels = array(
        'name' => $categoriaPlural,
        'singular_name' => $categoriaSingular,
        'add_new_item' => 'Adicionar Nova ' . $categoriaSingular,
        'edit_item' => 'Editar '.$categoriaSingular
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'hierarchical' => true,
        'show_ui' => true,
        'show_in_nav_menus' => true,
        'show_in_menu' => true,
        'show_in_admin_bar' => true        
    );
    register_taxonomy('categoria', 'produto', $args);
}
add_action('init','registra_taxonomia_categoria');

class Walker_Principal_Menu extends Walker {

    // Tell Walker where to inherit it's parent and id values
    var $db_fields = array(
        'parent' => 'menu_item_parent', 
        'id'     => 'db_id' 
    );

    /**
     * At the start of each element, output a <li> and <a> tag structure.
     * 
     * Note: Menu objects include url and title properties, so we will use those.
     */
    function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
        $items_wrap .= "<li class='nav-item active'>";
        $items_wrap .= "<a href='%s'%s>%s</a>";
        $items_wrap .= "</li>";            
        
        $output .= sprintf( $items_wrap,
            $item->url,
            ( $item->object_id === get_the_ID() ) ? ' class="current"' : '',
            $item->title
        );
    }

}