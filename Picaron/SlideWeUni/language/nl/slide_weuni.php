<?php
/**
 *
 * SlideShow for we_universal >=2.5.1 extension for the phpBB Forum Software package.
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
        'L_UNI_DELAY'                    => 'Milliseconden',

        'L_SLIDE_WEUNI_TITLE'            => 'Extensie: SlideShow voor we_universal & Prosilver',
        'L_SLIDE_WEUNI_ACTIVE'           => 'SlideShow inschakelen',
        'L_SLIDE_WEUNI_ACTIVE_EXPLAIN'   => 'Voorgestelde grootte van afbeeldingen: 1170px x 240px.<br>Pad voor de upload: ./ext/Picaron/SlideWeUni/images/<br>(De afbeeldingen worden willekeurig weergegeven)<br>(Optioneel - Velden van URL voor externe links)',
        'L_SLIDE_WEUNI_DELAY'            => 'Vertraging voor overgang tussen afbeeldingen',
        'L_SLIDE_WEUNI_DELAY_EXPLAIN'    => 'Tijd in milliseconden. (Minimum: 1000 - Maximum: 10000)',
        'L_SLIDE_WEUNI_CONTROLS'         => 'Schakel bedieningsknoppen in',
        'L_SLIDE_WEUNI_CONTROLS_EXPLAIN' => '(Enkel voor Prosilver)',        

        'L_SLIDE_WEUNI_IMG1'             => 'Volledige naam van 1ste Afbeelding',
        'L_SLIDE_WEUNI_URL1'             => 'URL link 1ste Afbeelding',

        'L_SLIDE_WEUNI_IMG2'             => 'Volledige naam van 2de Afbeelding',
        'L_SLIDE_WEUNI_URL2'             => 'URL link 2de Afbeelding',

        'L_SLIDE_WEUNI_IMG3'             => 'Volledige naam van 3de Afbeelding',
        'L_SLIDE_WEUNI_URL3'             => 'URL link 3de Afbeelding',

        'L_SLIDE_WEUNI_IMG4'             => 'Volledige naam van 4de Afbeelding',
        'L_SLIDE_WEUNI_URL4'             => 'URL link 4de Afbeelding',

        'L_SLIDE_WEUNI_IMG5'             => 'Volledige naam van 5de Afbeelding',
        'L_SLIDE_WEUNI_URL5'             => 'URL link 5de Afbeelding',

        'L_SLIDE_WEUNI_IMG6'             => 'Volledige naam van 6de Afbeelding',
        'L_SLIDE_WEUNI_URL6'             => 'URL link 6de Afbeelding',

        'L_SLIDE_WEUNI_IMG7'             => 'Volledige naam van 7ste Afbeelding',
        'L_SLIDE_WEUNI_URL7'             => 'URL link 7de Afbeelding',

        'L_SLIDE_WEUNI_IMG8'             => 'Volledige naam van 8de Afbeelding',
        'L_SLIDE_WEUNI_URL8'             => 'URL link 8ste Afbeelding',

        'L_SLIDE_WEUNI_IMG9'             => 'Volledige naam van 9de Afbeelding',
        'L_SLIDE_WEUNI_URL9'             => 'URL link 9de Afbeelding',

        'L_SLIDE_WEUNI_IMG10'             => 'Volledige naam van 10de Afbeelding',
        'L_SLIDE_WEUNI_URL10'             => 'URL link 10de Afbeelding',
));
