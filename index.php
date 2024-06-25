<?php
/**
 * SSOPCMS - Super Simple One-Page CMS (Multilingual Version with Blog)
 * Copyright 2024 by Daniel Erdmann (madewithai.eu)
 * 
 * This script provides an advanced CMS functionality in a single file,
 * including a WYSIWYG editor, customizable design with live preview,
 * JSON data storage, a simple file explorer, multilingual support, and blog functionality.
 */

session_start();
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Default configuration
$default_config = [
    'password_protected' => true,
    'username' => 'admin',
    'password' => password_hash('admin', PASSWORD_DEFAULT),
    'allowed_file_types' => ['jpg', 'jpeg', 'png', 'gif'],
    'title' => 'SSOPCMS',
    'slogan' => 'Your Simple Single-File CMS',
    'content' => '<h2>Welcome to SSOPCMS</h2><p>This is your default content. Edit it in the admin panel.</p>',
    'background_color' => '#f0f8ff',
    'content_background_color' => '#ffffff',
    'text_color' => '#2c3e50',
    'header_color' => '#4682b4',
    'header_text_color' => '#ffffff',
    'slogan_color' => '#e6f2ff',
    'admin_bg_color' => '#e6e6e6',
    'sub_collapsible_bg_color' => '#d0d0d0',
    'header_font_family' => 'Arial, sans-serif',
    'slogan_font_family' => 'Arial, sans-serif',
    'content_font_family' => 'Arial, sans-serif',
    'border_radius' => '5',
    'box_shadow' => '5',
    'header_border_radius' => '5',
    'header_box_shadow' => '5',
    'show_footer' => true,
    'header_image' => '',
    'header_height' => '150',
    'header_alignment' => 'center',
    'header_full_width' => false,
    'header_font_size' => '36',
    'slogan_font_size' => '18',
    'content_width' => '800',
    'content_min_width' => '300',
    'content_max_width' => '1600',
    'content_padding' => '20',
    'header_text_position' => '50',
    'header_text_spacing' => '10',
    'privacy_policy' => '<h2>Privacy Policy</h2><p>Your privacy policy goes here.</p>',
    'meta_description' => 'A simple single-file PHP CMS',
    'meta_keywords' => 'CMS, PHP, Simple',
    'cookie_message' => 'This website uses cookies to ensure you get the best experience on our website.',
    'cookie_button_text' => 'Got it!',
    'cookie_bg_color' => '#4682b4',
    'cookie_text_color' => '#ffffff',
    'cookie_button_bg_color' => '#ffffff',
    'cookie_button_text_color' => '#4682b4',
    'language' => 'en',
    'blog_posts' => [],
    'show_homepage_content' => true,
    'blog_sort_order' => 'desc',
    'show_blog' => true,
    'blog_title' => 'Blog',
    'blog_above_homepage' => false,
    'blog_background_color' => '#ffffff',
    'blog_text_color' => '#333333',
    'blog_title_color' => '#4682b4',
    'blog_font_family' => 'Arial, sans-serif',
    'blog_title_font_family' => 'Arial, sans-serif',
    'header_width' => '100',
    'header_padding_left' => '0',
    'header_padding_right' => '0',
    'content_full_width' => false,
    'content_touch_header' => false,
    'content_padding_top' => '20',
    'tab_bg_color' => '#f1f1f1',
    'tab_text_color' => '#333333',
    'tab_active_bg_color' => '#4682b4',
    'tab_active_text_color' => '#ffffff',
];

// Language translations
$translations = [
    'en' => [
        'login' => 'Login',
        'logout' => 'Logout',
        'admin_panel' => 'Administration and Management',
        'homepage' => 'Homepage',
        'username' => 'Username',
        'password' => 'Password',
        'old_username' => 'Old Username',
        'new_username' => 'New Username',
        'old_password' => 'Old Password',
        'new_password' => 'New Password',
        'change_credentials' => 'Change Credentials',
        'save' => 'Save',
        'save_all_settings' => 'Save All Settings',
        'save_content' => 'Save Content',
        'save_settings' => 'Save Settings',
        'save_privacy_seo' => 'Save Privacy & SEO Settings',
        'content' => 'Homepage Content',
        'settings' => 'Settings',
        'file_explorer' => 'File Explorer',
        'privacy_seo' => 'Privacy & SEO',
        'general_settings' => 'General Settings',
        'color_settings' => 'Color Settings',
        'font_settings' => 'Font Settings',
        'layout_settings_content' => 'Layout Settings Content',
        'layout_settings_header' => 'Layout Settings Header',
        'site_title' => 'Site Title',
        'site_slogan' => 'Site Slogan',
        'background_color' => 'Background Color',
        'content_background_color' => 'Content Background Color',
        'text_color' => 'Text Color',
        'header_color' => 'Header Color',
        'header_text_color' => 'Header Text Color',
        'slogan_color' => 'Slogan Color',
        'admin_bg_color' => 'Admin Background Color',
        'sub_collapsible_bg_color' => 'Sub-Collapsible Background Color',
        'header_font' => 'Header Font',
        'slogan_font' => 'Slogan Font',
        'content_font' => 'Content Font',
        'border_radius' => 'Border Radius',
        'box_shadow' => 'Box Shadow',
        'header_border_radius' => 'Header Border Radius',
        'header_box_shadow' => 'Header Box Shadow',
        'header_image' => 'Header Image',
        'header_height' => 'Header Height',
        'header_text_position' => 'Header Text Position',
        'header_text_spacing' => 'Header Text Spacing',
        'header_alignment' => 'Header Alignment',
        'header_font_size' => 'Header Font Size',
        'slogan_font_size' => 'Slogan Font Size',
        'full_width_header' => 'Full Width Header',
        'content_width' => 'Content Width',
        'min_content_width' => 'Minimum Content Width',
        'max_content_width' => 'Maximum Content Width',
        'content_padding' => 'Content Padding',
        'show_footer' => 'Show Footer',
        'upload_file' => 'Upload File',
        'seo_settings' => 'SEO Settings',
        'meta_description' => 'Meta Description',
        'meta_keywords' => 'Meta Keywords',
        'privacy_policy' => 'Privacy Policy',
        'cookie_settings' => 'Cookie Banner Settings',
        'cookie_message' => 'Cookie Message',
        'cookie_button_text' => 'Cookie Button Text',
        'cookie_bg_color' => 'Cookie Banner Background Color',
        'cookie_text_color' => 'Cookie Banner Text Color',
        'cookie_button_bg_color' => 'Cookie Button Background Color',
        'cookie_button_text_color' => 'Cookie Button Text Color',
        'language' => 'Language',
        'unsaved_changes' => 'You have unsaved changes',
        'changes_saved' => 'Changes saved successfully',
        'error_saving' => 'An error occurred while saving changes',
        'confirm_delete' => 'Are you sure you want to delete',
        'file_upload_failed' => 'File upload failed',
        'file_delete_failed' => 'File deletion failed',
        'error_occurred' => 'An error occurred',
        'blog' => 'Blog',
        'new_post' => 'New Post',
        'edit_post' => 'Edit Post',
        'delete_post' => 'Delete Post',
        'post_title' => 'Post Title',
        'post_content' => 'Post Content',
        'publish_date' => 'Publish Date',
        'save_post' => 'Save Post',
        'back_to_posts' => 'Back to Posts',
        'no_posts' => 'No posts yet.',
        'manage_blog' => 'Blog Management',
        'blog_title' => 'Blog Title',
        'show_homepage_content' => 'Show Homepage Content',
        'show_blog' => 'Show Blog',
        'blog_settings' => 'Blog Settings',
        'blog_sort_order' => 'Blog Sort Order',
        'blog_sort_desc' => 'Newest First',
        'blog_sort_asc' => 'Oldest First',
        'blog_management' => 'Blog Management',
        'blog_above_homepage' => 'Show Blog Above Homepage Content',
        'blog_background_color' => 'Blog Background Color',
        'blog_text_color' => 'Blog Text Color',
        'blog_title_color' => 'Blog Title Color',
        'blog_font' => 'Blog Font',
        'blog_title_font' => 'Blog Title Font',
        'invalid_credentials' => 'Invalid username or password',
        'homepage_content' => 'Homepage Content',
        'blog_configuration' => 'Blog Configuration',
        'file_management' => 'File Management',
        'access_credentials' => 'Access Credentials',
        'privacy_seo_settings' => 'Privacy and SEO Settings',
        'left' => 'Left',
        'center' => 'Center',
        'right' => 'Right',
        'invalid_old_password' => 'Invalid old password',
        'invalid_old_username' => 'Invalid old username',
        'X' => 'X',
        'header_width' => 'Header Width',
        'header_padding_left' => 'Header Padding Left',
        'header_padding_right' => 'Header Padding Right',
        'full_width_content' => 'Full Width Content',
        'content_touch_header' => 'Content Touch Header',
        'content_padding_top' => 'Content Padding Top',
        'manage_blog_posts' => 'Manage Blog Posts',
        'tab_settings' => 'Tab Settings',
        'tab_bg_color' => 'Tab Background Color',
        'tab_text_color' => 'Tab Text Color',
        'tab_active_bg_color' => 'Active Tab Background Color',
        'tab_active_text_color' => 'Active Tab Text Color',
        'privacy_policy_settings' => 'Privacy Policy Settings',
    ],
    'de' => [
        'login' => 'Anmelden',
        'logout' => 'Abmelden',
        'admin_panel' => 'Administration und Verwaltung',
        'homepage' => 'Startseite',
        'username' => 'Benutzername',
        'password' => 'Passwort',
        'old_username' => 'Alter Benutzername',
        'new_username' => 'Neuer Benutzername',
        'old_password' => 'Altes Passwort',
        'new_password' => 'Neues Passwort',
        'change_credentials' => 'Zugangsdaten ändern',
        'save' => 'Speichern',
        'save_all_settings' => 'Alle Einstellungen speichern',
        'save_content' => 'Inhalt speichern',
        'save_settings' => 'Einstellungen speichern',
        'save_privacy_seo' => 'Datenschutz & SEO-Einstellungen speichern',
        'content' => 'Startseiten-Inhalt',
        'settings' => 'Einstellungen',
        'file_explorer' => 'Datei-Explorer',
        'privacy_seo' => 'Datenschutz & SEO',
        'general_settings' => 'Allgemeine Einstellungen',
        'color_settings' => 'Farbeinstellungen',
        'font_settings' => 'Schrifteinstellungen',
        'layout_settings_content' => 'Layout-Einstellungen Inhaltsbereich',
        'layout_settings_header' => 'Layout-Einstellungen Header',
        'site_title' => 'Seitentitel',
        'site_slogan' => 'Slogan',
        'background_color' => 'Hintergrundfarbe',
        'content_background_color' => 'Hintergrundfarbe des Inhaltsbereichs',
        'text_color' => 'Textfarbe',
        'header_color' => 'Header-Farbe',
        'header_text_color' => 'Header-Textfarbe',
        'slogan_color' => 'Slogan-Farbe',
        'admin_bg_color' => 'Admin-Hintergrundfarbe',
        'sub_collapsible_bg_color' => 'Unter-Reiter Hintergrundfarbe',
        'header_font' => 'Header-Schriftart',
        'slogan_font' => 'Slogan-Schriftart',
        'content_font' => 'Inhalts-Schriftart',
        'border_radius' => 'Rahmenradius',
        'box_shadow' => 'Boxschatten',
        'header_border_radius' => 'Header-Rahmenradius',
        'header_box_shadow' => 'Header-Boxschatten',
        'header_image' => 'Header-Bild',
        'header_height' => 'Header-Höhe',
        'header_text_position' => 'Header-Textposition',
        'header_text_spacing' => 'Header-Textabstand',
        'header_alignment' => 'Header-Ausrichtung',
        'header_font_size' => 'Schriftgröße der Überschrift',
        'slogan_font_size' => 'Schriftgröße des Slogans',
        'full_width_header' => 'Header in voller Breite',
        'content_width' => 'Inhaltsbreite',
        'min_content_width' => 'Minimale Inhaltsbreite',
        'max_content_width' => 'Maximale Inhaltsbreite',
        'content_padding' => 'Inhaltsabstand',
        'show_footer' => 'Fußzeile anzeigen',
        'upload_file' => 'Datei hochladen',
        'seo_settings' => 'SEO-Einstellungen',
        'meta_description' => 'Meta-Beschreibung',
        'meta_keywords' => 'Meta-Schlüsselwörter',
        'privacy_policy' => 'Datenschutzerklärung',
        'cookie_settings' => 'Cookie-Banner-Einstellungen',
        'cookie_message' => 'Cookie-Nachricht',
        'cookie_button_text' => 'Cookie-Button-Text',
        'cookie_bg_color' => 'Cookie-Banner Hintergrundfarbe',
        'cookie_text_color' => 'Cookie-Banner Textfarbe',
        'cookie_button_bg_color' => 'Cookie-Button Hintergrundfarbe',
        'cookie_button_text_color' => 'Cookie-Button Textfarbe',
        'language' => 'Sprache',
        'unsaved_changes' => 'Sie haben ungespeicherte Änderungen',
        'changes_saved' => 'Änderungen erfolgreich gespeichert',
        'error_saving' => 'Beim Speichern der Änderungen ist ein Fehler aufgetreten',
        'confirm_delete' => 'Sind Sie sicher, dass Sie löschen möchten',
        'file_upload_failed' => 'Datei-Upload fehlgeschlagen',
        'file_delete_failed' => 'Datei-Löschung fehlgeschlagen',
        'error_occurred' => 'Ein Fehler ist aufgetreten',
        'blog' => 'Blog',
        'new_post' => 'Neuer Beitrag',
        'edit_post' => 'Beitrag bearbeiten',
        'delete_post' => 'Beitrag löschen',
        'post_title' => 'Beitragstitel',
        'post_content' => 'Beitragsinhalt',
        'publish_date' => 'Veröffentlichungsdatum',
        'save_post' => 'Beitrag speichern',
        'back_to_posts' => 'Zurück zu den Beiträgen',
        'no_posts' => 'Noch keine Beiträge vorhanden.',
        'manage_blog' => 'Blog-Verwaltung',
        'blog_title' => 'Blog-Titel',
        'show_homepage_content' => 'Startseiten-Inhalt anzeigen',
        'show_blog' => 'Blog anzeigen',
        'blog_settings' => 'Blog-Einstellungen',
        'blog_sort_order' => 'Blog-Sortierreihenfolge',
        'blog_sort_desc' => 'Neueste zuerst',
        'blog_sort_asc' => 'Älteste zuerst',
        'blog_management' => 'Blog-Verwaltung',
        'blog_above_homepage' => 'Blog über dem Startseiteninhalt anzeigen',
        'blog_background_color' => 'Blog-Hintergrundfarbe',
        'blog_text_color' => 'Blog-Textfarbe',
        'blog_title_color' => 'Blog-Titelfarbe',
        'blog_font' => 'Blog-Schriftart',
        'blog_title_font' => 'Blog-Titel-Schriftart',
        'invalid_credentials' => 'Ungültiger Benutzername oder Passwort',
        'homepage_content' => 'Startseiten-Inhalt',
        'blog_configuration' => 'Blog-Konfiguration',
        'file_management' => 'Datei-Verwaltung',
        'access_credentials' => 'Zugangsdaten',
        'privacy_seo_settings' => 'Datenschutz- und SEO-Einstellungen',
        'left' => 'Links',
        'center' => 'Zentriert',
        'right' => 'Rechts',
        'invalid_old_password' => 'Ungültiges altes Passwort',
        'invalid_old_username' => 'Ungültiger alter Benutzername',
        'X' => 'X',
        'header_width' => 'Header-Breite',
        'header_padding_left' => 'Header-Abstand links',
        'header_padding_right' => 'Header-Abstand rechts',
        'full_width_content' => 'Inhalt in voller Breite',
        'content_touch_header' => 'Inhalt berührt Header',
        'content_padding_top' => 'Inhaltsabstand oben',
        'manage_blog_posts' => 'Blogbeiträge verwalten',
        'tab_settings' => 'Tab-Einstellungen',
        'tab_bg_color' => 'Tab Hintergrundfarbe',
        'tab_text_color' => 'Tab Textfarbe',
        'tab_active_bg_color' => 'Aktiver Tab Hintergrundfarbe',
        'tab_active_text_color' => 'Aktiver Tab Textfarbe',
        'privacy_policy_settings' => 'Datenschutzerklärung-Einstellungen',
    ],
    'fr' => [
        'login' => 'Connexion',
        'logout' => 'Déconnexion',
        'admin_panel' => 'Administration et gestion',
        'homepage' => 'Page d\'accueil',
        'username' => 'Nom d\'utilisateur',
        'password' => 'Mot de passe',
        'old_username' => 'Ancien nom d\'utilisateur',
        'new_username' => 'Nouveau nom d\'utilisateur',
        'old_password' => 'Ancien mot de passe',
        'new_password' => 'Nouveau mot de passe',
        'change_credentials' => 'Modifier les identifiants',
        'save' => 'Enregistrer',
        'save_all_settings' => 'Enregistrer tous les paramètres',
        'save_content' => 'Enregistrer le contenu',
        'save_settings' => 'Enregistrer les paramètres',
        'save_privacy_seo' => 'Enregistrer les paramètres de confidentialité et SEO',
        'content' => 'Contenu de la page d\'accueil',
        'settings' => 'Paramètres',
        'file_explorer' => 'Explorateur de fichiers',
        'privacy_seo' => 'Confidentialité et SEO',
        'general_settings' => 'Paramètres généraux',
        'color_settings' => 'Paramètres de couleur',
        'font_settings' => 'Paramètres de police',
        'layout_settings_content' => 'Paramètres de mise en page du contenu',
        'layout_settings_header' => 'Paramètres de mise en page de l\'en-tête',
        'site_title' => 'Titre du site',
        'site_slogan' => 'Slogan du site',
        'background_color' => 'Couleur de fond',
        'content_background_color' => 'Couleur de fond du contenu',
        'text_color' => 'Couleur du texte',
        'header_color' => 'Couleur de l\'en-tête',
        'header_text_color' => 'Couleur du texte de l\'en-tête',
        'slogan_color' => 'Couleur du slogan',
        'admin_bg_color' => 'Couleur de fond de l\'administration',
        'sub_collapsible_bg_color' => 'Couleur de fond des sous-sections',
        'header_font' => 'Police de l\'en-tête',
        'slogan_font' => 'Police du slogan',
        'content_font' => 'Police du contenu',
        'border_radius' => 'Rayon de bordure',
        'box_shadow' => 'Ombre de boîte',
        'header_border_radius' => 'Rayon de bordure de l\'en-tête',
        'header_box_shadow' => 'Ombre de boîte de l\'en-tête',
        'header_image' => 'Image d\'en-tête',
        'header_height' => 'Hauteur de l\'en-tête',
        'header_text_position' => 'Position du texte de l\'en-tête',
        'header_text_spacing' => 'Espacement du texte de l\'en-tête',
        'header_alignment' => 'Alignement de l\'en-tête',
        'header_font_size' => 'Taille de police de l\'en-tête',
        'slogan_font_size' => 'Taille de police du slogan',
        'full_width_header' => 'En-tête pleine largeur',
        'content_width' => 'Largeur du contenu',
        'min_content_width' => 'Largeur minimale du contenu',
        'max_content_width' => 'Largeur maximale du contenu',
        'content_padding' => 'Marge intérieure du contenu',
        'show_footer' => 'Afficher le pied de page',
        'upload_file' => 'Télécharger un fichier',
        'seo_settings' => 'Paramètres SEO',
        'meta_description' => 'Description meta',
        'meta_keywords' => 'Mots-clés meta',
        'privacy_policy' => 'Politique de confidentialité',
        'cookie_settings' => 'Paramètres de la bannière de cookies',
        'cookie_message' => 'Message de cookie',
        'cookie_button_text' => 'Texte du bouton de cookie',
        'cookie_bg_color' => 'Couleur de fond de la bannière de cookies',
        'cookie_text_color' => 'Couleur du texte de la bannière de cookies',
        'cookie_button_bg_color' => 'Couleur de fond du bouton de cookie',
        'cookie_button_text_color' => 'Couleur du texte du bouton de cookie',
        'language' => 'Langue',
        'unsaved_changes' => 'Vous avez des modifications non enregistrées',
        'changes_saved' => 'Modifications enregistrées avec succès',
        'error_saving' => 'Une erreur s\'est produite lors de l\'enregistrement des modifications',
        'confirm_delete' => 'Êtes-vous sûr de vouloir supprimer',
        'file_upload_failed' => 'Le téléchargement du fichier a échoué',
        'file_delete_failed' => 'La suppression du fichier a échoué',
        'error_occurred' => 'Une erreur s\'est produite',
        'blog' => 'Blog',
        'new_post' => 'Nouvel article',
        'edit_post' => 'Modifier l\'article',
        'delete_post' => 'Supprimer l\'article',
        'post_title' => 'Titre de l\'article',
        'post_content' => 'Contenu de l\'article',
        'publish_date' => 'Date de publication',
        'save_post' => 'Enregistrer l\'article',
        'back_to_posts' => 'Retour aux articles',
        'no_posts' => 'Aucun article pour le moment.',
        'manage_blog' => 'Gestion du blog',
        'blog_title' => 'Titre du blog',
        'show_homepage_content' => 'Afficher le contenu de la page d\'accueil',
        'show_blog' => 'Afficher le blog',
        'blog_settings' => 'Paramètres du blog',
        'blog_sort_order' => 'Ordre de tri du blog',
        'blog_sort_desc' => 'Plus récent en premier',
        'blog_sort_asc' => 'Plus ancien en premier',
        'blog_management' => 'Gestion du blog',
        'blog_above_homepage' => 'Afficher le blog au-dessus du contenu de la page d\'accueil',
        'blog_background_color' => 'Couleur de fond du blog',
        'blog_text_color' => 'Couleur du texte du blog',
        'blog_title_color' => 'Couleur du titre du blog',
        'blog_font' => 'Police du blog',
        'blog_title_font' => 'Police du titre du blog',
        'invalid_credentials' => 'Nom d\'utilisateur ou mot de passe invalide',
        'homepage_content' => 'Contenu de la page d\'accueil',
        'blog_configuration' => 'Configuration du blog',
        'file_management' => 'Gestion des fichiers',
        'access_credentials' => 'Identifiants d\'accès',
        'privacy_seo_settings' => 'Paramètres de confidentialité et SEO',
        'left' => 'Gauche',
        'center' => 'Centre',
        'right' => 'Droite',
        'invalid_old_password' => 'Ancien mot de passe invalide',
        'invalid_old_username' => 'Ancien nom d\'utilisateur invalide',
        'X' => 'X',
        'header_width' => 'Largeur de l\'en-tête',
        'header_padding_left' => 'Marge intérieure gauche de l\'en-tête',
        'header_padding_right' => 'Marge intérieure droite de l\'en-tête',
        'full_width_content' => 'Contenu pleine largeur',
        'content_touch_header' => 'Le contenu touche l\'en-tête',
        'content_padding_top' => 'Marge intérieure supérieure du contenu',
        'manage_blog_posts' => 'Gérer les articles du blog',
        'tab_settings' => 'Paramètres des onglets',
        'tab_bg_color' => 'Couleur de fond des onglets',
        'tab_text_color' => 'Couleur du texte des onglets',
        'tab_active_bg_color' => 'Couleur de fond de l\'onglet actif',
        'tab_active_text_color' => 'Couleur du texte de l\'onglet actif',
        'privacy_policy_settings' => 'Paramètres de la politique de confidentialité',
    ],
];

// Load or create configuration
$config_file = 'SSOPCMS.json';
if (file_exists($config_file)) {
    $config = json_decode(file_get_contents($config_file), true);
    $config = array_merge($default_config, $config); // Ensure all keys exist
} else {
    $config = $default_config;
}

// Ensure data directory exists
$data_dir = 'data';
if (!file_exists($data_dir)) {
    mkdir($data_dir, 0777, true);
}

// Functions
function saveConfig($config) {
    global $config_file;
    file_put_contents($config_file, json_encode($config, JSON_PRETTY_PRINT));
}

function isLoggedIn() {
    return isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true;
}

function requireLogin() {
    global $config;
    if ($config['password_protected'] && !isLoggedIn()) {
        header('Location: ?login');
        exit;
    }
}

function uploadFile($file, $allowedTypes = null) {
    global $data_dir, $config;
    if (!$allowedTypes) {
        $allowedTypes = $config['allowed_file_types'];
    }
    $ext = strtolower(pathinfo($file['name'], PATHINFO_EXTENSION));
    if (in_array($ext, $allowedTypes) && $file['size'] <= 50 * 1024 * 1024) { // 50 MB limit
        $new_name = $data_dir . '/' . uniqid() . '.' . $ext;
        if (move_uploaded_file($file['tmp_name'], $new_name)) {
            return $new_name;
        }
    }
    return false;
}

function getFileList() {
    global $data_dir;
    $files = scandir($data_dir);
    $fileList = [];
    foreach ($files as $file) {
        if ($file != "." && $file != "..") {
            $fileList[] = [
                'name' => $file,
                'url' => $data_dir . '/' . $file,
                'size' => filesize($data_dir . '/' . $file)
            ];
        }
    }
    return $fileList;
}

function e($string) {
    return htmlspecialchars($string ?? '', ENT_QUOTES, 'UTF-8');
}

function t($key) {
    global $translations, $config;
    return $translations[$config['language']][$key] ?? $key;
}

function saveBlogPost($post) {
    global $config;
    if (!isset($post['id'])) {
        $post['id'] = uniqid();
    }
    if (!isset($post['timestamp'])) {
    $post['timestamp'] = time();
}
    $config['blog_posts'][$post['id']] = $post;
    saveConfig($config);
}

function deleteBlogPost($id) {
    global $config;
    if (isset($config['blog_posts'][$id])) {
        unset($config['blog_posts'][$id]);
        saveConfig($config);
        return true;
    }
    return false;
}

function sortBlogPosts($posts, $order) {
    usort($posts, function($a, $b) use ($order) {
        if ($order == 'desc') {
            return $b['timestamp'] - $a['timestamp'];
        } else {
            return $a['timestamp'] - $b['timestamp'];
        }
    });
    return $posts;
}

// Handle actions
if (isset($_GET['action'])) {
    switch ($_GET['action']) {
        case 'login':
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                if ($_POST['username'] === $config['username'] && password_verify($_POST['password'], $config['password'])) {
                    $_SESSION['logged_in'] = true;
                    header('Location: ?admin');
                    exit;
                } else {
                    $error = t('invalid_credentials');
                }
            }
            break;

        case 'logout':
            session_destroy();
            header('Location: ?');
            exit;

        case 'save':
            requireLogin();
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $old_username = $_POST['old_username'] ?? '';
                $new_username = $_POST['new_username'] ?? '';
                $old_password = $_POST['old_password'] ?? '';
                $new_password = $_POST['new_password'] ?? '';
                
                if (!empty($old_username) && !empty($new_username)) {
                    if ($old_username === $config['username']) {
                        $config['username'] = $new_username;
                    } else {
                        echo json_encode(['success' => false, 'message' => t('invalid_old_username')]);
                        exit;
                    }
                }
                
                if (!empty($old_password) && !empty($new_password)) {
                    if (password_verify($old_password, $config['password'])) {
                        $config['password'] = password_hash($new_password, PASSWORD_DEFAULT);
                    } else {
                        echo json_encode(['success' => false, 'message' => t('invalid_old_password')]);
                        exit;
                    }
                }
                
                foreach ($_POST as $key => $value) {
                    if (isset($config[$key]) && $key !== 'old_username' && $key !== 'new_username' && $key !== 'old_password' && $key !== 'new_password') {
                        $config[$key] = $value;
                    }
                }
                $config['header_full_width'] = isset($_POST['header_full_width']);
                $config['show_footer'] = isset($_POST['show_footer']);
                $config['show_homepage_content'] = isset($_POST['show_homepage_content']);
                $config['show_blog'] = isset($_POST['show_blog']);
                $config['blog_above_homepage'] = isset($_POST['blog_above_homepage']);
                $config['content_full_width'] = isset($_POST['content_full_width']);
                $config['content_touch_header'] = isset($_POST['content_touch_header']);
                $config['content_background_color'] = $_POST['content_background_color'] ?? $config['content_background_color'];
                $config['blog_sort_order'] = $_POST['blog_sort_order'] ?? $config['blog_sort_order'];
                saveConfig($config);
                echo json_encode(['success' => true, 'message' => t('changes_saved')]);
                exit;
            }
            break;

        case 'upload':
            requireLogin();
            $uploaded_file = uploadFile($_FILES['file']);
            if ($uploaded_file) {
                echo json_encode(['success' => true, 'fileName' => basename($uploaded_file), 'url' => $uploaded_file]);
            } else {
                echo json_encode(['success' => false, 'error' => t('file_upload_failed')]);
            }
            exit;

        case 'delete_file':
            requireLogin();
            if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['file'])) {
                $file = $data_dir . '/' . basename($_POST['file']);
                if (file_exists($file) && unlink($file)) {
                    echo json_encode(['success' => true]);
                } else {
                    echo json_encode(['success' => false, 'message' => t('file_delete_failed')]);
                }
            } else {
                echo json_encode(['success' => false, 'message' => t('invalid_request')]);
            }
            exit;

        case 'get_files':
            requireLogin();
            echo json_encode(getFileList());
            exit;

        case 'save_post':
            requireLogin();
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $post = [
                    'title' => $_POST['title'],
                    'content' => $_POST['content'],
                    'date' => $_POST['date'],
                    'timestamp' => time()
                ];
                if (isset($_POST['id'])) {
    $post['id'] = $_POST['id'];
    $post['timestamp'] = $config['blog_posts'][$_POST['id']]['timestamp'];
} else {
    $post['timestamp'] = time();
}
                saveBlogPost($post);
                header('Location: ?admin&blog');
                exit;
            }
            break;

        case 'delete_post':
    requireLogin();
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id'])) {
        if (deleteBlogPost($_POST['id'])) {
            header('Location: ?admin&blog');
            exit;
        } else {
            $error = t('error_deleting_post');
        }
    }
    break;
    }
}

// HTML output
?>
<!DOCTYPE html>
<html lang="<?php echo $config['language']; ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo e($config['title']); ?></title>
    <meta name="description" content="<?php echo e($config['meta_description']); ?>">
    <meta name="keywords" content="<?php echo e($config['meta_keywords']); ?>">
    <style id="dynamic-styles">
        body {
            font-family: <?php echo $config['content_font_family']; ?>;
            line-height: 1.6;
            color: <?php echo $config['text_color']; ?>;
            background-color: <?php echo $config['background_color']; ?>;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: <?php echo $config['content_width']; ?>px;
            margin: 0 auto;
            padding: <?php echo $config['content_padding']; ?>px;
        }
        .content {
            background-color: <?php echo $config['content_background_color']; ?>;
            padding: 2.5rem;
            margin-top: <?php echo $config['content_touch_header'] ? '0' : '1rem'; ?>;
            border-radius: <?php echo $config['border_radius']; ?>px;
            box-shadow: 0 0 <?php echo $config['box_shadow']; ?>px rgba(0,0,0,0.1);
        }
        header {
            background-color: <?php echo $config['header_color']; ?>;
            color: <?php echo $config['header_text_color']; ?>;
            text-align: <?php echo $config['header_alignment']; ?>;
            padding: 0;
            height: <?php echo $config['header_height']; ?>px;
            <?php if ($config['header_full_width']): ?>
            width: 100%;
            <?php else: ?>
            width: <?php echo $config['header_width']; ?>%;
            margin: 0 auto;
            <?php endif; ?>
            margin-bottom: <?php echo $config['content_touch_header'] ? '0' : '1rem'; ?>;
            border-radius: <?php echo $config['header_border_radius']; ?>px;
            box-shadow: 0 0 <?php echo $config['header_box_shadow']; ?>px rgba(0,0,0,0.1);
            <?php if (!empty($config['header_image'])): ?>
            background-image: url('<?php echo e($config['header_image']); ?>');
            background-size: cover;
            background-position: center;
            <?php endif; ?>
            position: relative;
            box-sizing: border-box;
        }
        .header-content {
            position: absolute;
            top: <?php echo $config['header_text_position']; ?>%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 100%;
        }
        header h1 {
            font-family: <?php echo $config['header_font_family']; ?>;
            font-size: <?php echo $config['header_font_size']; ?>px;
            margin: 0;
            padding: 0;
        }
        header .slogan {
            font-family: <?php echo $config['slogan_font_family']; ?>;
            font-size: <?php echo $config['slogan_font_size']; ?>px;
            color: <?php echo $config['slogan_color']; ?>;
            margin-top: <?php echo $config['header_text_spacing']; ?>px;
        }
        .content img {
            max-width: 100%;
            height: auto;
        }
        form {
            margin-top: 1rem;
        }
        input[type="text"], input[type="password"], input[type="number"], input[type="date"], select, textarea {
            width: calc(100% - 20px);
            padding: 10px;
            margin-bottom: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }
        input[type="submit"], button {
            background-color: <?php echo $config['header_color']; ?>;
            color: <?php echo $config['header_text_color']; ?>;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
            border-radius: 5px;
        }
        input[type="submit"]:hover, button:hover {
            opacity: 0.9;
        }
        .error {
            color: red;
            margin-bottom: 1rem;
        }
        .success {
            color: green;
            margin-bottom: 1rem;
        }
        footer {
            text-align: center;
            margin-top: 2rem;
            padding-top: 1rem;
            font-size: 0.8rem;
            color: #777;
            border-top: 1px solid #eee;
        }
        .admin-links {
            text-align: center;
            margin: 1rem;
        }
        .admin-links a {
            color: <?php echo $config['text_color']; ?>;
            text-decoration: none;
            margin: 0 0.5rem;
        }
        .color-setting {
            display: flex;
            align-items: center;
            margin-bottom: 1rem;
        }
        .color-setting label {
            flex: 1;
        }
        .color-setting input[type="color"] {
            width: 50px;
            height: 30px;
            margin-left: 10px;
        }
        .color-preview {
            width: 30px;
            height: 30px;
            margin-left: 10px;
            border: 1px solid #000;
        }
        .setting-group {
            margin-bottom: 1rem;
        }
        #file-explorer {
            margin-top: 1rem;
            border: 1px solid #ccc;
            padding: 1rem;
        }
        #file-list {
            list-style-type: none;
            padding: 0;
        }
        #file-list li {
            margin-bottom: 0.5rem;
        }
        .unsaved-changes {
            position: fixed;
            top: 20px;
            right: 20px;
            background-color: #ff9800;
            color: white;
            padding: 10px;
            border-radius: 5px;
            display: none;
        }
        #cookie-banner {
            position: fixed;
            bottom: 0;
            left: 0;
            right: 0;
            background-color: <?php echo $config['cookie_bg_color']; ?>;
            color: <?php echo $config['cookie_text_color']; ?>;
            text-align: center;
            padding: 10px;
            z-index: 1000;
        }
        #cookie-banner button {
            background-color: <?php echo $config['cookie_button_bg_color']; ?>;
            color: <?php echo $config['cookie_button_text_color']; ?>;
            border: none;
            padding: 5px 10px;
            margin-left: 10px;
            cursor: pointer;
        }
        #privacy-policy-footer {
            margin-top: 20px;
            margin-bottom: 20px;
            border-top: 1px solid #ccc;
            border-bottom: 1px solid #ccc;
            padding: 10px 0;
            background-color: #f9f9f9;
        }
        #privacy-policy-toggle {
            cursor: pointer;
            color: #4682b4;
        }
        #privacy-policy-content {
            display: none;
            margin-top: 10px;
        }
        .blog-post {
            background-color: <?php echo $config['blog_background_color']; ?>;
            border: 1px solid #ddd;
            border-radius: 5px;
            padding: 15px;
            margin-bottom: 20px;
        }
        .blog-post h2 {
            margin-top: 0;
            font-family: <?php echo $config['blog_title_font_family']; ?>;
            color: <?php echo $config['blog_title_color']; ?>;
        }
        .blog-post-date {
            color: #777;
            font-size: 0.9em;
            margin-bottom: 10px;
        }
        .blog-post-content {
            margin-top: 10px;
            font-family: <?php echo $config['blog_font_family']; ?>;
            color: <?php echo $config['blog_text_color']; ?>;
        }
        .blog-admin-actions {
            margin-top: 10px;
        }
        .blog-admin-actions a {
            margin-right: 10px;
            color: #4682b4;
            text-decoration: none;
        }
        #save-all-settings {
            display: block;
            width: 100%;
            padding: 15px;
            font-size: 18px;
            margin-top: 20px;
            margin-bottom: 10px;
            background-color: #EB3B3B;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        #save-all-settings:hover {
            background-color: #C12323;
        }
        .manage-blog-button {
            display: block;
            width: 100%;
            font-size: 16px;
            margin-top: 10px;
            background-color: #4682b4;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-align: center;
            text-decoration: none;
            padding: 10px 0;
        }
        .manage-blog-button:hover {
            background-color: #3a6d96;
        }
                .tab-panel.active {
            display: block;
        }
        .tab-buttons {
    display: flex;
    border-bottom: 1px solid <?php echo $config['tab_bg_color']; ?>;
}

.tab-button {
    background-color: <?php echo $config['tab_bg_color']; ?>;
    color: <?php echo $config['tab_text_color']; ?>;
    border: none;
    outline: none;
    cursor: pointer;
    padding: 10px 20px;
    transition: 0.3s;
    font-size: 17px;
    margin-right: 2px;
    border-radius: 5px 5px 0 0;
    border-bottom: 3px solid transparent;
}

.tab-button:hover {
    background-color: <?php echo $config['tab_active_bg_color']; ?>;
    color: <?php echo $config['tab_active_text_color']; ?>;
}

.tab-button.active {
    border-bottom-color: <?php echo $config['tab_active_bg_color']; ?>;
    background-color: <?php echo $config['tab_active_bg_color']; ?>;
    color: <?php echo $config['tab_active_text_color']; ?>;
    box-shadow: 0 -2px 5px rgba(0,0,0,0.1);
    position: relative;
    z-index: 1;
}

.tab-button.active::after {
    content: none;
}

.tab-panel {
    background-color: <?php echo $config['content_background_color']; ?>;
    padding: 20px;
    border-radius: 0 5px 5px 5px;
}
        .collapsible {
            background-color: <?php echo $config['sub_collapsible_bg_color']; ?>;
            color: <?php echo $config['text_color']; ?>;
            cursor: pointer;
            padding: 18px;
            width: 100%;
            border: none;
            text-align: left;
            outline: none;
            font-size: 15px;
        }
        .active, .collapsible:hover {
            background-color: #DEDEDE;
        }
        .collapsible:after {
            content: '\002B';
            color: <?php echo $config['text_color']; ?>;
            font-weight: bold;
            float: right;
            margin-left: 5px;
        }
        .active:after {
            content: "\2212";
        }
        .collapsible-content {
            padding: 0 18px;
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.2s ease-out;
            background-color: <?php echo $config['content_background_color']; ?>;
        }
        @media (max-width: 768px) {
            .tab-buttons {
                flex-direction: column;
            }
            .tab-button {
                width: 100%;
                margin-bottom: 10px;
            }
        }
    </style>
    <script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>
</head>
<body>
    <header>
        <div class="header-content">
            <h1><?php echo e($config['title']); ?></h1>
            <div class="slogan"><?php echo e($config['slogan']); ?></div>
        </div>
    </header>

    <div class="container">
        <div class="content">
            <?php
            if (isset($error)) {
                echo "<p class='error'>" . e($error) . "</p>";
            }
            if (isset($success)) {
                echo "<p class='success'>" . e($success) . "</p>";
            }

            if (isset($_GET['login'])) {
                ?>
                <h2><?php echo t('login'); ?></h2>
                <form action="?action=login" method="post">
                    <input type="text" name="username" placeholder="<?php echo t('username'); ?>" required>
                    <input type="password" name="password" placeholder="<?php echo t('password'); ?>" required>
                    <input type="submit" value="<?php echo t('login'); ?>">
                </form>
                <?php
            } elseif (isset($_GET['admin']) && isLoggedIn()) {
                if (isset($_GET['blog'])) {
                    ?>
                    <h2><?php echo t('blog_management'); ?></h2>
                    <a href="?admin" class="manage-blog-button"><?php echo t('admin_panel'); ?></a>
                    <button class="manage-blog-button" onclick="location.href='?admin&blog&new_post'"><?php echo t('new_post'); ?></button>
                    <?php
                    if (isset($_GET['new_post']) || isset($_GET['edit_post'])) {
                        $post_id = isset($_GET['edit_post']) ? $_GET['edit_post'] : null;
                        $post = $post_id && isset($config['blog_posts'][$post_id]) ? $config['blog_posts'][$post_id] : ['title' => '', 'content' => '', 'date' => date('Y-m-d')];
                        ?>
                        <h3><?php echo isset($_GET['edit_post']) ? t('edit_post') : t('new_post'); ?></h3>
                        <form action="?action=save_post" method="post">
                            <?php if ($post_id): ?>
                                <input type="hidden" name="id" value="<?php echo $post_id; ?>">
                            <?php endif; ?>
                            <input type="text" name="title" placeholder="<?php echo t('post_title'); ?>" value="<?php echo e($post['title']); ?>" required>
                            <textarea name="content" id="post-editor"><?php echo e($post['content']); ?></textarea>
                            <input type="date" name="date" value="<?php echo e($post['date']); ?>" required>
                            <input type="submit" value="<?php echo t('save_post'); ?>">
                            <button type="button" class="manage-blog-button" onclick="location.href='?admin&blog'"><?php echo t('back_to_posts'); ?></button>
                        </form>
                        <script>
                            CKEDITOR.replace('post-editor');
                        </script>
                        <?php
} else {
    // Sortiere die Posts für die Anzeige im Backend
    $sorted_posts = sortBlogPosts($config['blog_posts'], $config['blog_sort_order']);
    
    if (empty($config['blog_posts'])) {
        echo "<p>" . t('no_posts') . "</p>";
    } else {
        foreach ($sorted_posts as $sorted_post_id => $post) {
            // Finde die ursprüngliche post_id basierend auf dem Titel und Datum
            $original_post_id = array_search($post, $config['blog_posts']);
            if ($original_post_id === false) {
                // Fallback, falls keine Übereinstimmung gefunden wurde
                $original_post_id = $sorted_post_id;
            }
            ?>
            <div class="blog-post">
                <h2><?php echo e($post['title']); ?></h2>
                <div class="blog-post-date"><?php echo e($post['date']); ?></div>
                <div class="blog-post-content"><?php echo substr(strip_tags($post['content']), 0, 200) . '...'; ?></div>
                <div class="blog-admin-actions">
                    <a href="?admin&blog&edit_post=<?php echo $original_post_id; ?>"><?php echo t('edit_post'); ?></a>
                    <a href="#" onclick="if(confirm('<?php echo t('confirm_delete'); ?>')) { document.getElementById('delete-post-<?php echo $original_post_id; ?>').submit(); }"><?php echo t('delete_post'); ?></a>
                    <form id="delete-post-<?php echo $original_post_id; ?>" action="?action=delete_post" method="post" style="display:none;">
                        <input type="hidden" name="id" value="<?php echo $original_post_id; ?>">
                    </form>
                </div>
            </div>
            <?php
        }
    }
}
} else {
    ?>
                    <h2><?php echo t('admin_panel'); ?></h2>
                    <div class="unsaved-changes"><?php echo t('unsaved_changes'); ?></div>
                    
                    <button id="save-all-settings"><?php echo t('save_all_settings'); ?></button>

                    <div class="tab-buttons">
                        <button class="tab-button" onclick="openTab(event, 'content-tab')"><?php echo t('content'); ?></button>
                        <button class="tab-button" onclick="openTab(event, 'blog-tab')"><?php echo t('blog_settings'); ?></button>
                        <button class="tab-button" onclick="openTab(event, 'settings-tab')"><?php echo t('settings'); ?></button>
                        <button class="tab-button" onclick="openTab(event, 'file-explorer-tab')"><?php echo t('file_explorer'); ?></button>
                        <button class="tab-button" onclick="openTab(event, 'credentials-tab')"><?php echo t('access_credentials'); ?></button>
                        <button class="tab-button" onclick="openTab(event, 'privacy-seo-tab')"><?php echo t('privacy_seo'); ?></button>
                    </div>
                    <form action="?action=save" method="post" id="admin-form">
                        <div id="content-tab" class="tab-panel">
                            <h3><?php echo t('homepage_content'); ?></h3>
                            <div class="setting-group">
                                <label>
                                    <input type="checkbox" name="show_homepage_content" <?php echo $config['show_homepage_content'] ? 'checked' : ''; ?>>
                                    <?php echo t('show_homepage_content'); ?>
                                </label>
                            </div>
                            <textarea name="content" id="editor"><?php echo e($config['content']); ?></textarea>
                        </div>

                        <div id="blog-tab" class="tab-panel">
                            <h3><?php echo t('blog_configuration'); ?></h3>
                            <button type="button" class="collapsible"><?php echo t('blog_settings'); ?></button>
                            <div class="collapsible-content">
                                <div class="setting-group">
                                    <label>
                                        <input type="checkbox" name="show_blog" <?php echo $config['show_blog'] ? 'checked' : ''; ?>>
                                        <?php echo t('show_blog'); ?>
                                    </label>
                                </div>
                                <div class="setting-group">
                                    <label>
                                        <input type="checkbox" name="blog_above_homepage" <?php echo $config['blog_above_homepage'] ? 'checked' : ''; ?>>
                                        <?php echo t('blog_above_homepage'); ?>
                                    </label>
                                </div>
                                <div class="setting-group">
                                    <label>
                                        <?php echo t('blog_title'); ?>:
                                        <input type="text" name="blog_title" value="<?php echo e($config['blog_title']); ?>" required>
                                    </label>
                                </div>
                                <div class="setting-group">
                                    <label>
                                        <?php echo t('blog_sort_order'); ?>:
                                        <select name="blog_sort_order">
                                            <option value="desc" <?php echo ($config['blog_sort_order'] == 'desc') ? 'selected' : ''; ?>><?php echo t('blog_sort_desc'); ?></option>
                                            <option value="asc" <?php echo ($config['blog_sort_order'] == 'asc') ? 'selected' : ''; ?>><?php echo t('blog_sort_asc'); ?></option>
                                        </select>
                                    </label>
                                </div>
                            </div>
                            <button type="button" class="collapsible"><?php echo t('color_settings'); ?></button>
                            <div class="collapsible-content">
                                <div class="color-setting">
                                    <label for="blog_background_color"><?php echo t('blog_background_color'); ?>:</label>
                                    <input type="color" id="blog_background_color" name="blog_background_color" value="<?php echo $config['blog_background_color']; ?>" data-target=".blog-post" data-style="background-color">
                                    <div class="color-preview" style="background-color: <?php echo $config['blog_background_color']; ?>;"></div>
                                </div>
                                <div class="color-setting">
                                    <label for="blog_text_color"><?php echo t('blog_text_color'); ?>:</label>
                                    <input type="color" id="blog_text_color" name="blog_text_color" value="<?php echo $config['blog_text_color']; ?>" data-target=".blog-post-content" data-style="color">
                                    <div class="color-preview" style="background-color: <?php echo $config['blog_text_color']; ?>;"></div>
                                </div>
                                <div class="color-setting">
                                    <label for="blog_title_color"><?php echo t('blog_title_color'); ?>:</label>
                                    <input type="color" id="blog_title_color" name="blog_title_color" value="<?php echo $config['blog_title_color']; ?>" data-target=".blog-post h2" data-style="color">
                                    <div class="color-preview" style="background-color: <?php echo $config['blog_title_color']; ?>;"></div>
                                </div>
                            </div>
                            <button type="button" class="collapsible"><?php echo t('font_settings'); ?></button>
                            <div class="collapsible-content">
                                <div class="setting-group">
                                    <label>
                                        <?php echo t('blog_font'); ?>:
                                        <select name="blog_font_family" data-target=".blog-post-content" data-style="font-family">
                                            <option value="Arial, sans-serif" <?php echo ($config['blog_font_family'] == 'Arial, sans-serif') ? 'selected' : ''; ?>>Arial</option>
                                            <option value="'Times New Roman', serif" <?php echo ($config['blog_font_family'] == "'Times New Roman', serif") ? 'selected' : ''; ?>>Times New Roman</option>
                                            <option value="'Courier New', monospace" <?php echo ($config['blog_font_family'] == "'Courier New', monospace") ? 'selected' : ''; ?>>Courier New</option>
                                            <option value="Georgia, serif" <?php echo ($config['blog_font_family'] == "Georgia, serif") ? 'selected' : ''; ?>>Georgia</option>
                                            <option value="'Palatino Linotype', 'Book Antiqua', Palatino, serif" <?php echo ($config['blog_font_family'] == "'Palatino Linotype', 'Book Antiqua', Palatino, serif") ? 'selected' : ''; ?>>Palatino</option>
                                            <option value="'Lucida Sans Unicode', 'Lucida Grande', sans-serif" <?php echo ($config['blog_font_family'] == "'Lucida Sans Unicode', 'Lucida Grande', sans-serif") ? 'selected' : ''; ?>>Lucida Sans</option>
                                        </select>
                                    </label>
                                </div>
                                <div class="setting-group">
                                    <label>
                                        <?php echo t('blog_title_font'); ?>:
                                        <select name="blog_title_font_family" data-target=".blog-post h2" data-style="font-family">
                                            <option value="Arial, sans-serif" <?php echo ($config['blog_title_font_family'] == 'Arial, sans-serif') ? 'selected' : ''; ?>>Arial</option>
                                            <option value="'Times New Roman', serif" <?php echo ($config['blog_title_font_family'] == "'Times New Roman', serif") ? 'selected' : ''; ?>>Times New Roman</option>
                                            <option value="'Courier New', monospace" <?php echo ($config['blog_title_font_family'] == "'Courier New', monospace") ? 'selected' : ''; ?>>Courier New</option>
                                            <option value="Georgia, serif" <?php echo ($config['blog_title_font_family'] == "Georgia, serif") ? 'selected' : ''; ?>>Georgia</option>
                                            <option value="'Palatino Linotype', 'Book Antiqua', Palatino, serif" <?php echo ($config['blog_title_font_family'] == "'Palatino Linotype', 'Book Antiqua', Palatino, serif") ? 'selected' : ''; ?>>Palatino</option>
                                            <option value="'Lucida Sans Unicode', 'Lucida Grande', sans-serif" <?php echo ($config['blog_title_font_family'] == "'Lucida Sans Unicode', 'Lucida Grande', sans-serif") ? 'selected' : ''; ?>>Lucida Sans</option>
                                        </select>
                                    </label>
                                </div>
                            </div>
                            <a href="?admin&blog" class="manage-blog-button"><?php echo t('manage_blog_posts'); ?></a>
                        </div>

                        <div id="settings-tab" class="tab-panel">
                            <button type="button" class="collapsible"><?php echo t('general_settings'); ?></button>
                            <div class="collapsible-content">
                                <div class="setting-group">
                                    <label>
                                        <?php echo t('site_title'); ?>:
                                        <input type="text" name="title" value="<?php echo e($config['title']); ?>" required>
                                    </label>
                                </div>
                                <div class="setting-group">
                                    <label>
                                        <?php echo t('site_slogan'); ?>:
                                        <input type="text" name="slogan" value="<?php echo e($config['slogan']); ?>" required>
                                    </label>
                                </div>
                                <div class="setting-group">
                                    <label>
                                        <?php echo t('language'); ?>:
                                        <select name="language">
                                            <option value="en" <?php echo $config['language'] == 'en' ? 'selected' : ''; ?>>English</option>
                                            <option value="de" <?php echo $config['language'] == 'de' ? 'selected' : ''; ?>>Deutsch</option>
                                            <option value="fr" <?php echo $config['language'] == 'fr' ? 'selected' : ''; ?>>Français</option>
                                        </select>
                                    </label>
                                </div>
                            </div>

                            <button type="button" class="collapsible"><?php echo t('color_settings'); ?></button>
                            <div class="collapsible-content">
                                <div class="color-setting">
                                    <label for="background_color"><?php echo t('background_color'); ?>:</label>
                                    <input type="color" id="background_color" name="background_color" value="<?php echo $config['background_color']; ?>" data-target="body" data-style="background-color">
                                    <div class="color-preview" style="background-color: <?php echo $config['background_color']; ?>;"></div>
                                </div>
                                <div class="color-setting">
                                    <label for="content_background_color"><?php echo t('content_background_color'); ?>:</label>
                                    <input type="color" id="content_background_color" name="content_background_color" value="<?php echo $config['content_background_color']; ?>" data-target=".content" data-style="background-color">
                                    <div class="color-preview" style="background-color: <?php echo $config['content_background_color']; ?>;"></div>
                                </div>
                                <div class="color-setting">
                                    <label for="text_color"><?php echo t('text_color'); ?>:</label>
                                    <input type="color" id="text_color" name="text_color" value="<?php echo $config['text_color']; ?>" data-target="body" data-style="color">
                                    <div class="color-preview" style="background-color: <?php echo $config['text_color']; ?>;"></div>
                                </div>
                                <div class="color-setting">
                                    <label for="header_color"><?php echo t('header_color'); ?>:</label>
                                    <input type="color" id="header_color" name="header_color" value="<?php echo $config['header_color']; ?>" data-target="header" data-style="background-color">
                                    <div class="color-preview" style="background-color: <?php echo $config['header_color']; ?>;"></div>
                                </div>
                                <div class="color-setting">
                                    <label for="header_text_color"><?php echo t('header_text_color'); ?>:</label>
                                    <input type="color" id="header_text_color" name="header_text_color" value="<?php echo $config['header_text_color']; ?>" data-target="header" data-style="color">
                                    <div class="color-preview" style="background-color: <?php echo $config['header_text_color']; ?>;"></div>
                                </div>
                                <div class="color-setting">
                                    <label for="slogan_color"><?php echo t('slogan_color'); ?>:</label>
                                    <input type="color" id="slogan_color" name="slogan_color" value="<?php echo $config['slogan_color']; ?>" data-target="header .slogan" data-style="color">
                                    <div class="color-preview" style="background-color: <?php echo $config['slogan_color']; ?>;"></div>
                                </div>
                                <div class="color-setting">
                                    <label for="admin_bg_color"><?php echo t('admin_bg_color'); ?>:</label>
                                    <input type="color" id="admin_bg_color" name="admin_bg_color" value="<?php echo $config['admin_bg_color']; ?>" data-target=".content" data-style="background-color">
                                    <div class="color-preview" style="background-color: <?php echo $config['admin_bg_color']; ?>;"></div>
                                </div>
                                <div class="color-setting">
                                    <label for="sub_collapsible_bg_color"><?php echo t('sub_collapsible_bg_color'); ?>:</label>
                                    <input type="color" id="sub_collapsible_bg_color" name="sub_collapsible_bg_color" value="<?php echo $config['sub_collapsible_bg_color']; ?>" data-target=".collapsible" data-style="background-color">
                                    <div class="color-preview" style="background-color: <?php echo $config['sub_collapsible_bg_color']; ?>;"></div>
                                </div>
                                <div class="color-setting">
                                    <label for="tab_bg_color"><?php echo t('tab_bg_color'); ?>:</label>
                                    <input type="color" id="tab_bg_color" name="tab_bg_color" value="<?php echo $config['tab_bg_color']; ?>" data-target=".tab-button" data-style="background-color">
                                    <div class="color-preview" style="background-color: <?php echo $config['tab_bg_color']; ?>;"></div>
                                </div>
                                <div class="color-setting">
                                    <label for="tab_text_color"><?php echo t('tab_text_color'); ?>:</label>
                                    <input type="color" id="tab_text_color" name="tab_text_color" value="<?php echo $config['tab_text_color']; ?>" data-target=".tab-button" data-style="color">
                                    <div class="color-preview" style="background-color: <?php echo $config['tab_text_color']; ?>;"></div>
                                </div>
                                <div class="color-setting">
                                    <label for="tab_active_bg_color"><?php echo t('tab_active_bg_color'); ?>:</label>
                                    <input type="color" id="tab_active_bg_color" name="tab_active_bg_color" value="<?php echo $config['tab_active_bg_color']; ?>" data-target=".tab-button.active" data-style="background-color">
                                    <div class="color-preview" style="background-color: <?php echo $config['tab_active_bg_color']; ?>;"></div>
                                </div>
                                <div class="color-setting">
                                    <label for="tab_active_text_color"><?php echo t('tab_active_text_color'); ?>:</label>
                                    <input type="color" id="tab_active_text_color" name="tab_active_text_color" value="<?php echo $config['tab_active_text_color']; ?>" data-target=".tab-button.active" data-style="color">
                                    <div class="color-preview" style="background-color: <?php echo $config['tab_active_text_color']; ?>;"></div>
                                </div>
                            </div>

                            <button type="button" class="collapsible"><?php echo t('font_settings'); ?></button>
                            <div class="collapsible-content">
                                <div class="setting-group">
                                    <label>
                                        <?php echo t('header_font'); ?>:
                                        <select name="header_font_family" data-target="header h1" data-style="font-family">
                                            <option value="Arial, sans-serif" <?php echo ($config['header_font_family'] == 'Arial, sans-serif') ? 'selected' : ''; ?>>Arial</option>
                                            <option value="'Times New Roman', serif" <?php echo ($config['header_font_family'] == "'Times New Roman', serif") ? 'selected' : ''; ?>>Times New Roman</option>
                                            <option value="'Courier New', monospace" <?php echo ($config['header_font_family'] == "'Courier New', monospace") ? 'selected' : ''; ?>>Courier New</option>
                                            <option value="Georgia, serif" <?php echo ($config['header_font_family'] == "Georgia, serif") ? 'selected' : ''; ?>>Georgia</option>
                                            <option value="'Palatino Linotype', 'Book Antiqua', Palatino, serif" <?php echo ($config['header_font_family'] == "'Palatino Linotype', 'Book Antiqua', Palatino, serif") ? 'selected' : ''; ?>>Palatino</option>
                                            <option value="'Lucida Sans Unicode', 'Lucida Grande', sans-serif" <?php echo ($config['header_font_family'] == "'Lucida Sans Unicode', 'Lucida Grande', sans-serif") ? 'selected' : ''; ?>>Lucida Sans</option>
                                        </select>
                                    </label>
                                </div>
                                <div class="setting-group">
                                    <label>
                                        <?php echo t('header_font_size'); ?>:
                                        <input type="number" name="header_font_size" min="10" max="72" value="<?php echo $config['header_font_size']; ?>" data-target="header h1" data-style="font-size" data-unit="px">
                                    </label>
                                </div>
                                <div class="setting-group">
                                    <label>
                                        <?php echo t('slogan_font'); ?>:
                                        <select name="slogan_font_family" data-target="header .slogan" data-style="font-family">
                                            <option value="Arial, sans-serif" <?php echo ($config['slogan_font_family'] == 'Arial, sans-serif') ? 'selected' : ''; ?>>Arial</option>
                                            <option value="'Times New Roman', serif" <?php echo ($config['slogan_font_family'] == "'Times New Roman', serif") ? 'selected' : ''; ?>>Times New Roman</option>
                                            <option value="'Courier New', monospace" <?php echo ($config['slogan_font_family'] == "'Courier New', monospace") ? 'selected' : ''; ?>>Courier New</option>
                                            <option value="Georgia, serif" <?php echo ($config['slogan_font_family'] == "Georgia, serif") ? 'selected' : ''; ?>>Georgia</option>
                                            <option value="'Palatino Linotype', 'Book Antiqua', Palatino, serif" <?php echo ($config['slogan_font_family'] == "'Palatino Linotype', 'Book Antiqua', Palatino, serif") ? 'selected' : ''; ?>>Palatino</option>
                                            <option value="'Lucida Sans Unicode', 'Lucida Grande', sans-serif" <?php echo ($config['slogan_font_family'] == "'Lucida Sans Unicode', 'Lucida Grande', sans-serif") ? 'selected' : ''; ?>>Lucida Sans</option>
                                        </select>
                                    </label>
                                </div>
                                <div class="setting-group">
                                    <label>
                                        <?php echo t('slogan_font_size'); ?>:
                                        <input type="number" name="slogan_font_size" min="10" max="72" value="<?php echo $config['slogan_font_size']; ?>" data-target="header .slogan" data-style="font-size" data-unit="px">
                                    </label>
                                </div>
                                <div class="setting-group">
                                    <label>
                                        <?php echo t('content_font'); ?>:
                                        <select name="content_font_family" data-target="body" data-style="font-family">
                                            <option value="Arial, sans-serif" <?php echo ($config['content_font_family'] == 'Arial, sans-serif') ? 'selected' : ''; ?>>Arial</option>
                                            <option value="'Times New Roman', serif" <?php echo ($config['content_font_family'] == "'Times New Roman', serif") ? 'selected' : ''; ?>>Times New Roman</option>
                                            <option value="'Courier New', monospace" <?php echo ($config['content_font_family'] == "'Courier New', monospace") ? 'selected' : ''; ?>>Courier New</option>
                                            <option value="Georgia, serif" <?php echo ($config['content_font_family'] == "Georgia, serif") ? 'selected' : ''; ?>>Georgia</option>
                                            <option value="'Palatino Linotype', 'Book Antiqua', Palatino, serif" <?php echo ($config['content_font_family'] == "'Palatino Linotype', 'Book Antiqua', Palatino, serif") ? 'selected' : ''; ?>>Palatino</option>
                                            <option value="'Lucida Sans Unicode', 'Lucida Grande', sans-serif" <?php echo ($config['content_font_family'] == "'Lucida Sans Unicode', 'Lucida Grande', sans-serif") ? 'selected' : ''; ?>>Lucida Sans</option>
                                        </select>
                                    </label>
                                </div>
                            </div>

                            <button type="button" class="collapsible"><?php echo t('layout_settings_content'); ?></button>
                            <div class="collapsible-content">
                                <div class="setting-group">
                                    <label>
                                        <?php echo t('border_radius'); ?>:
                                        <input type="number" name="border_radius" min="0" max="20" value="<?php echo $config['border_radius']; ?>" data-target=".content" data-style="border-radius" data-unit="px">
                                    </label>
                                </div>
                                <div class="setting-group">
                                    <label>
                                        <?php echo t('box_shadow'); ?>:
                                        <input type="number" name="box_shadow" min="0" max="20" value="<?php echo $config['box_shadow']; ?>" data-target=".content" data-style="box-shadow" data-unit="px">
                                    </label>
                                </div>
                                <div class="setting-group">
                                    <label>
                                        <?php echo t('content_width'); ?>:
                                        <input type="number" name="content_width" min="<?php echo $config['content_min_width']; ?>" max="<?php echo $config['content_max_width']; ?>" value="<?php echo $config['content_width']; ?>" data-target=".container" data-style="max-width" data-unit="px">
                                    </label>
                                </div>
                                <div class="setting-group">
                                    <label>
                                        <?php echo t('min_content_width'); ?>:
                                        <input type="number" name="content_min_width" min="200" max="<?php echo $config['content_max_width']; ?>" value="<?php echo $config['content_min_width']; ?>">
                                    </label>
                                </div>
                                <div class="setting-group">
                                    <label>
                                        <?php echo t('max_content_width'); ?>:
                                        <input type="number" name="content_max_width" min="<?php echo $config['content_min_width']; ?>" max="2000" value="<?php echo $config['content_max_width']; ?>">
                                    </label>
                                </div>
                                <div class="setting-group">
                                    <label>
                                        <?php echo t('content_padding'); ?>:
                                        <input type="number" name="content_padding" min="0" max="50" value="<?php echo $config['content_padding']; ?>" data-target=".container" data-style="padding" data-unit="px">
                                    </label>
                                </div>
                                <div class="setting-group">
                                    <label>
                                        <input type="checkbox" name="content_full_width" <?php echo $config['content_full_width'] ? 'checked' : ''; ?>>
                                        <?php echo t('full_width_content'); ?>
                                    </label>
                                </div>
                                <div class="setting-group">
                                    <label>
                                        <input type="checkbox" name="content_touch_header" <?php echo $config['content_touch_header'] ? 'checked' : ''; ?>>
                                        <?php echo t('content_touch_header'); ?>
                                    </label>
                                </div>
                                <div class="setting-group">
                                    <label>
                                        <?php echo t('content_padding_top'); ?>:
                                        <input type="number" name="content_padding_top" min="0" max="100" value="<?php echo $config['content_padding_top']; ?>" data-target=".content" data-style="padding-top" data-unit="px">
                                    </label>
                                </div>
                            </div>

                            <button type="button" class="collapsible"><?php echo t('layout_settings_header'); ?></button>
                            <div class="collapsible-content">
                                <div class="setting-group">
                                    <label>
                                        <?php echo t('header_border_radius'); ?>:
                                        <input type="number" name="header_border_radius" min="0" max="20" value="<?php echo $config['header_border_radius']; ?>" data-target="header" data-style="border-radius" data-unit="px">
                                    </label>
                                </div>
                                <div class="setting-group">
                                    <label>
                                        <?php echo t('header_box_shadow'); ?>:
                                        <input type="number" name="header_box_shadow" min="0" max="20" value="<?php echo $config['header_box_shadow']; ?>" data-target="header" data-style="box-shadow" data-unit="px">
                                    </label>
                                </div>
                                <div class="setting-group">
                                    <label>
                                        <?php echo t('header_image'); ?>:
                                        <input type="text" name="header_image" value="<?php echo e($config['header_image']); ?>" placeholder="Enter image URL">
                                    </label>
                                </div>
                                <div class="setting-group">
                                    <label>
                                        <?php echo t('header_height'); ?>:
                                        <input type="number" name="header_height" min="50" max="300" value="<?php echo $config['header_height']; ?>" data-target="header" data-style="height" data-unit="px">
                                    </label>
                                </div>
                                <div class="setting-group">
                                    <label>
                                        <?php echo t('header_width'); ?>:
                                        <input type="number" name="header_width" min="10" max="100" value="<?php echo $config['header_width']; ?>" data-target="header" data-style="width" data-unit="%">
                                    </label>
                                </div>
                                <div class="setting-group">
                                    <label>
                                        <?php echo t('header_text_position'); ?>:
                                        <input type="number" name="header_text_position" min="0" max="100" value="<?php echo $config['header_text_position']; ?>" data-target=".header-content" data-style="top" data-unit="%">
                                    </label>
                                </div>
                                <div class="setting-group">
                                    <label>
                                        <?php echo t('header_text_spacing'); ?>:
                                        <input type="number" name="header_text_spacing" min="0" max="50" value="<?php echo $config['header_text_spacing']; ?>" data-target="header .slogan" data-style="margin-top" data-unit="px">
                                    </label>
                                </div>
                                <div class="setting-group">
                                    <label>
                                        <?php echo t('header_alignment'); ?>:
                                        <select name="header_alignment" data-target="header" data-style="text-align">
                                            <option value="left" <?php echo ($config['header_alignment'] == 'left') ? 'selected' : ''; ?>><?php echo t('left'); ?></option>
                                            <option value="center" <?php echo ($config['header_alignment'] == 'center') ? 'selected' : ''; ?>><?php echo t('center'); ?></option>
                                            <option value="right" <?php echo ($config['header_alignment'] == 'right') ? 'selected' : ''; ?>><?php echo t('right'); ?></option>
                                        </select>
                                    </label>
                                </div>
                                <div class="setting-group">
                                    <label>
                                        <input type="checkbox" name="header_full_width" <?php echo $config['header_full_width'] ? 'checked' : ''; ?>>
                                        <?php echo t('full_width_header'); ?>
                                    </label>
                                </div>
                            </div>

                            <div class="setting-group">
                                <label>
                                    <input type="checkbox" name="show_footer" <?php echo $config['show_footer'] ? 'checked' : ''; ?>>
                                    <?php echo t('show_footer'); ?>
                                </label>
                            </div>
                        </div>

                        <div id="file-explorer-tab" class="tab-panel">
                            <h3><?php echo t('file_management'); ?></h3>
                            <div id="file-explorer">
                                <input type="file" id="file-upload" accept="image/*">
                                <button id="upload-file"><?php echo t('upload_file'); ?></button>
                                <ul id="file-list"></ul>
                            </div>
                        </div>

                        <div id="credentials-tab" class="tab-panel">
                            <h3><?php echo t('access_credentials'); ?></h3>
                            <div class="setting-group">
                                <label>
                                    <?php echo t('old_username'); ?>:
                                    <input type="text" name="old_username" placeholder="<?php echo t('old_username'); ?>">
                                </label>
                            </div>
                            <div class="setting-group">
                                <label>
                                    <?php echo t('new_username'); ?>:
                                    <input type="text" name="new_username" placeholder="<?php echo t('new_username'); ?>">
                                </label>
                            </div>
                            <div class="setting-group">
                                <label>
                                    <?php echo t('old_password'); ?>:
                                    <input type="password" name="old_password" placeholder="<?php echo t('old_password'); ?>">
                                </label>
                            </div>
                            <div class="setting-group">
                                <label>
                                    <?php echo t('new_password'); ?>:
                                    <input type="password" name="new_password" placeholder="<?php echo t('new_password'); ?>">
                                </label>
                            </div>
                        </div>

                        <div id="privacy-seo-tab" class="tab-panel">
                            <h3><?php echo t('privacy_seo_settings'); ?></h3>
                            <button type="button" class="collapsible"><?php echo t('seo_settings'); ?></button>
                            <div class="collapsible-content">
                                <div class="setting-group">
                                    <label>
                                        <?php echo t('meta_description'); ?>:
                                        <textarea name="meta_description" rows="3"><?php echo e($config['meta_description']); ?></textarea>
                                    </label>
                                </div>
                                <div class="setting-group">
                                    <label>
                                        <?php echo t('meta_keywords'); ?>:
                                        <input type="text" name="meta_keywords" value="<?php echo e($config['meta_keywords']); ?>">
                                    </label>
                                </div>
                            </div>
                            <button type="button" class="collapsible"><?php echo t('privacy_policy_settings'); ?></button>
                            <div class="collapsible-content">
                                <h3><?php echo t('privacy_policy'); ?></h3>
                                <textarea name="privacy_policy" id="privacy-editor"><?php echo e($config['privacy_policy']); ?></textarea>
                            </div>
                            <button type="button" class="collapsible"><?php echo t('cookie_settings'); ?></button>
                            <div class="collapsible-content">
                                <div class="setting-group">
                                    <label>
                                        <?php echo t('cookie_message'); ?>:
                                        <textarea name="cookie_message" rows="3"><?php echo e($config['cookie_message']); ?></textarea>
                                    </label>
                                </div>
                                <div class="setting-group">
                                    <label>
                                        <?php echo t('cookie_button_text'); ?>:
                                        <input type="text" name="cookie_button_text" value="<?php echo e($config['cookie_button_text']); ?>">
                                    </label>
                                </div>
                                <div class="color-setting">
                                    <label for="cookie_bg_color"><?php echo t('cookie_bg_color'); ?>:</label>
                                    <input type="color" id="cookie_bg_color" name="cookie_bg_color" value="<?php echo $config['cookie_bg_color']; ?>">
                                    <div class="color-preview" style="background-color: <?php echo $config['cookie_bg_color']; ?>;"></div>
                                </div>
                                <div class="color-setting">
                                    <label for="cookie_text_color"><?php echo t('cookie_text_color'); ?>:</label>
                                    <input type="color" id="cookie_text_color" name="cookie_text_color" value="<?php echo $config['cookie_text_color']; ?>">
                                    <div class="color-preview" style="background-color: <?php echo $config['cookie_text_color']; ?>;"></div>
                                </div>
                                <div class="color-setting">
                                    <label for="cookie_button_bg_color"><?php echo t('cookie_button_bg_color'); ?>:</label>
                                    <input type="color" id="cookie_button_bg_color" name="cookie_button_bg_color" value="<?php echo $config['cookie_button_bg_color']; ?>">
                                    <div class="color-preview" style="background-color: <?php echo $config['cookie_button_bg_color']; ?>;"></div>
                                </div>
                                <div class="color-setting">
                                    <label for="cookie_button_text_color"><?php echo t('cookie_button_text_color'); ?>:</label>
                                    <input type="color" id="cookie_button_text_color" name="cookie_button_text_color" value="<?php echo $config['cookie_button_text_color']; ?>">
                                    <div class="color-preview" style="background-color: <?php echo $config['cookie_button_text_color']; ?>;"></div>
                                </div>
                            </div>
                        </div>
                    </form>

                    <script>
                        // Initialize CKEditor for content
                        CKEDITOR.replace('editor', {
                            removePlugins: 'uploadimage,uploadfile',
                            filebrowserBrowseUrl: '',
                            filebrowserUploadUrl: ''
                        });

                        // Initialize CKEditor for privacy policy
                        CKEDITOR.replace('privacy-editor', {
                            removePlugins: 'uploadimage,uploadfile',
                            filebrowserBrowseUrl: '',
                            filebrowserUploadUrl: ''
                        });

                        // Live preview for color inputs
                        document.querySelectorAll('input[type="color"]').forEach(input => {
                            input.addEventListener('input', function() {
                                const target = this.dataset.target;
                                const style = this.dataset.style;
                                if (target && style) {
                                    document.querySelectorAll(target).forEach(el => {
                                        el.style[style] = this.value;
                                    });
                                }
                                this.nextElementSibling.style.backgroundColor = this.value;
                                showUnsavedChanges();
                            });
                        });

                        // Live preview for number inputs
                        document.querySelectorAll('input[type="number"]').forEach(input => {
                            input.addEventListener('input', function() {
                                const target = this.dataset.target;
                                const style = this.dataset.style;
                                const unit = this.dataset.unit;
                                const value = this.value + (unit || '');
                                if (target && style) {
                                    document.querySelectorAll(target).forEach(el => {
                                        if (style === 'box-shadow') {
                                            el.style[style] = `0 0 ${value} rgba(0,0,0,0.1)`;
                                        } else {
                                            el.style[style] = value;
                                        }
                                    });
                                }
                                showUnsavedChanges();
                            });
                        });

                        // Live preview for select inputs
                        document.querySelectorAll('select').forEach(select => {
                            select.addEventListener('change', function() {
                                const target = this.dataset.target;
                                const style = this.dataset.style;
                                if (target && style) {
                                    document.querySelectorAll(target).forEach(el => {
                                        el.style[style] = this.value;
                                    });
                                }
                                showUnsavedChanges();
                            });
                        });

                        // Live preview for checkbox inputs
                        document.querySelectorAll('input[type="checkbox"]').forEach(checkbox => {
                            checkbox.addEventListener('change', function() {
                                showUnsavedChanges();
                                if (this.name === 'header_full_width') {
                                    const header = document.querySelector('header');
                                    if (this.checked) {
                                        header.style.width = '100%';
                                        header.style.maxWidth = 'none';
                                    } else {
                                        header.style.width = document.querySelector('input[name="header_width"]').value + '%';
                                        header.style.maxWidth = document.querySelector('input[name="content_width"]').value + 'px';
                                    }
                                } else if (this.name === 'content_full_width') {
                                    const container = document.querySelector('.container');
                                    if (this.checked) {
                                        container.style.maxWidth = 'none';
                                        container.style.width = '100%';
                                    } else {
                                        container.style.maxWidth = document.querySelector('input[name="content_width"]').value + 'px';
                                        container.style.width = 'auto';
                                    }
                                } else if (this.name === 'content_touch_header') {
                                    const content = document.querySelector('.content');
                                    content.style.marginTop = this.checked ? '0' : '1rem';
                                }
                            });
                        });

                        // File Explorer functionality
                        function loadFiles() {
                            fetch('?action=get_files')
                                .then(response => response.json())
                                .then(files => {
                                    const fileList = document.getElementById('file-list');
                                    fileList.innerHTML = '';
                                    files.forEach(file => {
                                        const li = document.createElement('li');
                                        li.innerHTML = `
                                            ${file.name} (${(file.size / 1024).toFixed(2)} KB)
                                            <button class="delete-file" data-file="${file.name}"><?php echo t('X'); ?></button>
                                            <input type="text" value="${file.url}" readonly>
                                        `;
                                        fileList.appendChild(li);
                                    });
                                });
                        }

                        document.getElementById('upload-file').addEventListener('click', function() {
                            const fileInput = document.getElementById('file-upload');
                            const file = fileInput.files[0];
                            if (file) {
                                const formData = new FormData();
                                formData.append('file', file);
                                fetch('?action=upload', {
                                    method: 'POST',
                                    body: formData
                                })
                                .then(response => response.json())
                                .then(data => {
                                    if (data.success) {
                                        loadFiles();
                                    } else {
                                        alert('<?php echo t('file_upload_failed'); ?>');
                                    }
                                })
                                .catch(error => {
                                    console.error('Error:', error);
                                    alert('<?php echo t('error_occurred'); ?>');
                                });
                            }
                        });

                        document.getElementById('file-list').addEventListener('click', function(e) {
                            if (e.target.classList.contains('delete-file')) {
                                const file = e.target.dataset.file;
                                if (confirm(`<?php echo t('confirm_delete'); ?> ${file}?`)) {
                                    const formData = new FormData();
                                    formData.append('file', file);
                                    fetch('?action=delete_file', {
                                        method: 'POST',
                                        body: formData
                                    })
                                    .then(response => response.json())
                                    .then(data => {
                                        if (data.success) {
                                            loadFiles();
                                        } else {
                                            alert('<?php echo t('file_delete_failed'); ?>');
                                        }
                                    })
                                    .catch(error => {
                                        console.error('Error:', error);
                                        alert('<?php echo t('error_occurred'); ?>');
                                    });
                                }
                            }
                        });

                        // Form submission
                        document.getElementById('save-all-settings').addEventListener('click', function(e) {
                            e.preventDefault();
                            const form = document.getElementById('admin-form');
                            const formData = new FormData(form);
                            formData.set('content', CKEDITOR.instances.editor.getData());
                            formData.set('privacy_policy', CKEDITOR.instances['privacy-editor'].getData());
                            
                            fetch('?action=save', {
                                method: 'POST',
                                body: formData
                            }).then(response => response.json()).then(data => {
                                if (data.success) {
                                    alert(data.message);
                                    hideUnsavedChanges();
                                    location.reload();
                                } else {
                                    alert(data.message || '<?php echo t('error_saving'); ?>');
                                }
                            }).catch(error => {
                                alert('<?php echo t('error_saving'); ?>');
                            });
                        });

                        // Tab functionality
                        function openTab(evt, tabName) {
                            var i, tabContent, tabButtons;
                            tabContent = document.getElementsByClassName("tab-panel");
                            for (i = 0; i < tabContent.length; i++) {
                                tabContent[i].style.display = "none";
                            }
                            tabButtons = document.getElementsByClassName("tab-button");
                            for (i = 0; i < tabButtons.length; i++) {
                                tabButtons[i].className = tabButtons[i].className.replace(" active", "");
                            }
                            document.getElementById(tabName).style.display = "block";
                            evt.currentTarget.className += " active";
                        }

                        // Unsaved changes functionality
                        function showUnsavedChanges() {
                            document.querySelector('.unsaved-changes').style.display = 'block';
                        }

                        function hideUnsavedChanges() {
                            document.querySelector('.unsaved-changes').style.display = 'none';
                        }

                        document.querySelectorAll('input, select, textarea').forEach(input => {
                            input.addEventListener('change', showUnsavedChanges);
                        });

                        // Initial file load
                        loadFiles();

                        // Prevent accidental navigation away from unsaved changes
                        window.addEventListener('beforeunload', function (e) {
                            if (document.querySelector('.unsaved-changes').style.display === 'block') {
                                e.preventDefault();
                                e.returnValue = '';
                            }
                        });

                        // Collapsible functionality
                        var coll = document.getElementsByClassName("collapsible");
                        var i;

                        for (i = 0; i < coll.length; i++) {
                            coll[i].addEventListener("click", function() {
                                this.classList.toggle("active");
                                var content = this.nextElementSibling;
                                if (content.style.maxHeight){
                                    content.style.maxHeight = null;
                                } else {
                                    content.style.maxHeight = content.scrollHeight + "px";
                                } 
                            });
                        }

                        // Set the first tab as active by default
                        document.querySelector('.tab-button').click();
                    </script>
                    <?php
                }
            } else {
                // Display blog posts on the homepage
                if ($config['show_blog'] && !empty($config['blog_posts'])) {
                    $sorted_posts = sortBlogPosts($config['blog_posts'], $config['blog_sort_order']);
                    if ($config['blog_above_homepage']) {
                        echo "<h2>" . e($config['blog_title']) . "</h2>";
                        foreach ($sorted_posts as $post) {
                            ?>
                            <div class="blog-post">
                                <h2><?php echo e($post['title']); ?></h2>
                                <div class="blog-post-date"><?php echo e($post['date']); ?></div>
                                <div class="blog-post-content"><?php echo $post['content']; ?></div>
                            </div>
                            <?php
                        }
                    }
                }
                
                // Display content on the homepage
                if ($config['show_homepage_content']) {
                    echo $config['content'];
                }
                
                // Display blog posts below homepage content if not shown above
                if ($config['show_blog'] && !empty($config['blog_posts']) && !$config['blog_above_homepage']) {
                    echo "<h2>" . e($config['blog_title']) . "</h2>";
                    $sorted_posts = sortBlogPosts($config['blog_posts'], $config['blog_sort_order']);
                    foreach ($sorted_posts as $post) {
                        ?>
                        <div class="blog-post">
                            <h2><?php echo e($post['title']); ?></h2>
                            <div class="blog-post-date"><?php echo e($post['date']); ?></div>
                            <div class="blog-post-content"><?php echo $post['content']; ?></div>
                        </div>
                        <?php
                    }
                }
            }
            ?>
        </div>

        <?php if ($config['show_footer']): ?>
        <footer>
            <div id="privacy-policy-footer">
                <span id="privacy-policy-toggle"><?php echo t('privacy_policy'); ?></span>
                <div id="privacy-policy-content">
                    <?php echo $config['privacy_policy']; ?>
                </div>
            </div>
            <div>SSOPCMS 2024 by Daniel Erdmann (madewithai.eu)</div>
        </footer>
        <?php endif; ?>

        <div class="admin-links">
            <?php if (isLoggedIn()): ?>
                <?php if (isset($_GET['admin'])): ?>
                    <a href="?"><?php echo t('homepage'); ?></a>
                <?php else: ?>
                    <a href="?admin"><?php echo t('admin_panel'); ?></a>
                <?php endif; ?>
                <a href="?action=logout"><?php echo t('logout'); ?></a>
            <?php else: ?>
                <a href="?login"><?php echo t('login'); ?></a>
            <?php endif; ?>
        </div>
    </div>

    <div id="cookie-banner" style="display: none;">
        <span><?php echo e($config['cookie_message']); ?></span>
        <button id="accept-cookies"><?php echo e($config['cookie_button_text']); ?></button>
    </div>

    <script>
        // Cookie banner functionality
        function setCookie(name, value, days) {
            var expires = "";
            if (days) {
                var date = new Date();
                date.setTime(date.setTime(date.getTime() + (days*24*60*60*1000)));
                expires = "; expires=" + date.toUTCString();
            }
            document.cookie = name + "=" + (value || "")  + expires + "; path=/";
        }

        function getCookie(name) {
            var nameEQ = name + "=";
            var ca = document.cookie.split(';');
            for(var i=0;i < ca.length;i++) {
                var c = ca[i];
                while (c.charAt(0)==' ') c = c.substring(1,c.length);
                if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
            }
            return null;
        }

        if (!getCookie('cookies-accepted')) {
            document.getElementById('cookie-banner').style.display = 'block';
        }

        document.getElementById('accept-cookies').addEventListener('click', function() {
            setCookie('cookies-accepted', 'true', 365);
            document.getElementById('cookie-banner').style.display = 'none';
        });

        // Privacy policy toggle functionality
        document.getElementById('privacy-policy-toggle').addEventListener('click', function() {
            var content = document.getElementById('privacy-policy-content');
            if (content.style.display === 'none' || content.style.display === '') {
                content.style.display = 'block';
            } else {
                content.style.display = 'none';
            }
        });

        // Ensure all checkboxes are properly set based on config
        document.addEventListener('DOMContentLoaded', function() {
            document.querySelector('input[name="show_homepage_content"]').checked = <?php echo $config['show_homepage_content'] ? 'true' : 'false'; ?>;
            document.querySelector('input[name="show_blog"]').checked = <?php echo $config['show_blog'] ? 'true' : 'false'; ?>;
            document.querySelector('input[name="blog_above_homepage"]').checked = <?php echo $config['blog_above_homepage'] ? 'true' : 'false'; ?>;
            document.querySelector('input[name="show_footer"]').checked = <?php echo $config['show_footer'] ? 'true' : 'false'; ?>;
            document.querySelector('input[name="header_full_width"]').checked = <?php echo $config['header_full_width'] ? 'true' : 'false'; ?>;
            document.querySelector('input[name="content_full_width"]').checked = <?php echo $config['content_full_width'] ? 'true' : 'false'; ?>;
            document.querySelector('input[name="content_touch_header"]').checked = <?php echo $config['content_touch_header'] ? 'true' : 'false'; ?>;
        });

        // Apply initial styles
        function applyInitialStyles() {
            const header = document.querySelector('header');
            const container = document.querySelector('.container');
            const content = document.querySelector('.content');

            // Header styles
            header.style.width = <?php echo $config['header_full_width'] ? "'100%'" : "'{$config['header_width']}%'"; ?>;
            header.style.maxWidth = <?php echo $config['header_full_width'] ? "'none'" : "'{$config['content_width']}px'"; ?>;
            header.style.paddingLeft = '0px';
            header.style.paddingRight = '0px';

            // Content styles
            container.style.maxWidth = <?php echo $config['content_full_width'] ? "'none'" : "'{$config['content_width']}px'"; ?>;
            container.style.width = <?php echo $config['content_full_width'] ? "'100%'" : "'auto'"; ?>;
            content.style.marginTop = <?php echo $config['content_touch_header'] ? "'0'" : "'1rem'"; ?>;
            content.style.paddingTop = '<?php echo $config['content_padding_top']; ?>px';
        }

        // Call the function when the DOM is loaded
        document.addEventListener('DOMContentLoaded', applyInitialStyles);
    </script>
</body>
</html>
