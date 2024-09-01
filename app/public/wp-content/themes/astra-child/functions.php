<?php

add_action('wp_enqueue_scripts', 'theme_enqueue_styles');

function theme_enqueue_styles()
{
    // Charger le style général du thème parent
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');

    // Charger le style général du thème enfant
    wp_enqueue_style('child-style', get_stylesheet_directory_uri() . '/style.css', array('parent-style'), wp_get_theme()->get('Version'));

}


// Fonction de filtre pour le hook 'wp_nav_menu_items"
// Le hook 'wp_nav_menu_items" permet de modifier le contenu HTML du menu;
// Piorité 10 par défaut
// La fonctin accepte 2 arguments
add_filter('wp_nav_menu_items', 'add_extra_item_to_nav_menu', 10, 2);

function add_extra_item_to_nav_menu($items, $args)
{
    // Vérifie si l'utilisateur est connecté et si le menu est le menu principal
    if (is_user_logged_in() && $args->theme_location == 'primary') {
        // Crée le lien "Admin"
        $admin_link = '<li id="menu-item-567" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-567"><a href="http://planty.local/admin/" class="menu-link">Admin</a></li>';

        // Convertit les éléments du menu en un tableau
        $items_array = explode('</li>', $items);

        // Ajoute le lien "Admin" après le premier élément du tableau
        // Note : Assurez-vous que le premier élément du tableau est la bonne position pour insérer le lien
        array_splice($items_array, 1, 0, $admin_link);

        // Rejoint les éléments du tableau pour reformer le menu
        $items = implode('</li>', $items_array);

        // Ajoute la fermeture de la balise ul à la fin des éléments du menu
        $items .= '</li>';
    }
    return $items;
}



