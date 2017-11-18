<?php
/**
 *
 * Slideshow for Header extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2017 Picaron
 * Nederlandse vertaling @ Solidjeuh <https://www.froddelpower.be>
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

/**
 * DO NOT CHANGE
 */
if (!defined('IN_PHPBB'))
{
    exit;
}

if (empty($lang) || !is_array($lang))
{
    $lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$lang = array_merge($lang, array(
        // ACP
        'ACP_SLIDE_WEUNI'                   => 'Slideshow voor Header',
        'ACP_SLIDE_WEUNI_SETTINGS'          => 'Instellingen',
        'ACP_SLIDE_WEUNI_EXPLAIN'           => 'Voorgestelde grootte van afbeeldingen: 2570px x 465px. (De afbeeldingen worden willekeurig weergegeven)<br>Pad voor de upload:: ./ext/Picaron/SlideWeUni/images/ of URL met externe link (Afbeeldingen gehost op het internet)<br>(Optioneel - URL-velden die moeten worden omgeleid naar externe links)',
        'ACP_SLIDE_WEUNI_VERSION'           => 'Extensie versie: ',
        'ACP_SLIDE_WEUNI_IMAGES'            => 'Gegevens van afbeeldingen',

        'L_SLIDE_WEUNI_ACTIVE'              => 'SlideShow inschakelen',
        'L_SLIDE_WEUNI_DELAY'               => 'Vertraging voor overgang tussen afbeeldingen',
        'L_SLIDE_WEUNI_DELAY_EXPLAIN'       => 'Tijd in milliseconden. (Minimum: 1000 - Maximum: 10000)',
        'L_UNI_DELAY'                       => 'Milliseconden',
        'L_SLIDE_WEUNI_CONTROLS'            => 'Toon bedieningselementen',
        'L_SLIDE_WEUNI_TITLE'               => 'Toon titel en beschrijving',
        'L_SLIDE_WEUNI_SEARCH'              => 'Toon Zoek box',
        'L_SLIDE_WEUNI_EFFECT'              => 'Effect',
        'L_SLIDE_WEUNI_COLOR_TIT_F'         => 'Vul de kleur in van de titel en de beschrijving',
        'L_SLIDE_WEUNI_COLOR_TIT_F_EXPLAIN' => '(Formaat: #ffffff)',
        'L_SLIDE_WEUNI_COLOR_TIT_B'         => 'Kleur van de RAND van de titel en beschrijving',
        'L_SLIDE_WEUNI_COLOR_TIT_B_EXPLAIN' => '(Formaat: #000000)',
        'L_SLIDE'                           => 'Schuiven',
        'L_FADE'                            => 'vervagen',

        'LOG_CONFIG_SLIDE'                  => '<strong>Bewerkte Slideshow extensie voor header</strong>',

        'L_SLIDE_WEUNI_IMG1'                => 'Volledige naam of URL 1ste Afbeelding',
        'L_SLIDE_WEUNI_URL1'                => 'URL om naar door te verwijzen bij het klikken op de 1ste Afbeelding',

        'L_SLIDE_WEUNI_IMG2'                => 'Volledige naam of URL 2de Afbeelding',
        'L_SLIDE_WEUNI_URL2'                => 'URL om naar door te verwijzen bij het klikken op de 2de Afbeelding',

        'L_SLIDE_WEUNI_IMG3'                => 'Volledige naam of URL 3de Afbeelding',
        'L_SLIDE_WEUNI_URL3'                => 'URL om naar door te verwijzen bij het klikken op de 3de Afbeelding',

        'L_SLIDE_WEUNI_IMG4'                => 'Volledige naam of URL 4de Afbeelding',
        'L_SLIDE_WEUNI_URL4'                => 'URL om naar door te verwijzen bij het klikken op de 4de Afbeelding',

        'L_SLIDE_WEUNI_IMG5'                => 'Volledige naam of URL 5de Afbeelding',
        'L_SLIDE_WEUNI_URL5'                => 'URL om naar door te verwijzen bij het klikken op de 5de Afbeelding',

        'L_SLIDE_WEUNI_IMG6'                => 'Volledige naam of URL 6de Afbeelding',
        'L_SLIDE_WEUNI_URL6'                => 'URL om naar door te verwijzen bij het klikken op de 6de Afbeelding',

        'L_SLIDE_WEUNI_IMG7'                => 'Volledige naam of URL 7de Afbeelding',
        'L_SLIDE_WEUNI_URL7'                => 'URL om naar door te verwijzen bij het klikken op de 7de Afbeelding',

        'L_SLIDE_WEUNI_IMG8'                => 'Volledige naam of URL 8ste Afbeelding',
        'L_SLIDE_WEUNI_URL8'                => 'URL om naar door te verwijzen bij het klikken op de 8ste Afbeelding',

        'L_SLIDE_WEUNI_IMG9'                => 'Volledige naam of URL 9de Afbeelding',
        'L_SLIDE_WEUNI_URL9'                => 'URL om naar door te verwijzen bij het klikken op de 9de Afbeelding',

        'L_SLIDE_WEUNI_IMG10'               => 'Volledige naam of URL 10de Afbeelding',
        'L_SLIDE_WEUNI_URL10'               => 'URL om naar door te verwijzen bij het klikken op de 10de Afbeelding',
));
?>