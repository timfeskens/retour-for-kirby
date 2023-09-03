<?php

use Kirby\Panel\Panel;
use Kirby\Retour\Panel as RetourPanel;

/**
 * Sets up Panel area
 *
 * @package   Retour for Kirby
 * @author    Nico Hoffmann <nico@getkirby.com>
 * @link      https://github.com/distantnative/retour-for-kirby
 * @copyright Nico Hoffmann
 * @license   https://opensource.org/licenses/MIT
 */

return [
    'retour' => function ($kirby) {
        return [
            'label' => t('view.retour'),
            'icon'  => 'shuffle',
            'menu'  => true,
            'link'  => 'retour/redirects',
            'views' => [
                [
                    'pattern' => 'retour',
                    'action'  => fn () => Panel::go('retour/redirects')
                ],
                [
                    'pattern' => 'retour/(:any)',
                    'action'  => fn (string $tab) => RetourPanel::view($tab)
                ]
            ],
            'dialogs' => require_once 'dialogs.php',
            'drawers' => require_once 'drawers.php'
        ];
    }
];
