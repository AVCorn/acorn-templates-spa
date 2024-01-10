<?php

/**
 * New Template Configuration
 *
 * PHP version 8.2
 *
 * @phpversion >= 8.2
 * @category   CMS
 * @package    AVCorn
 * @subpackage Template
 * @author     Benjamin J. Young <ben@blaher.me>
 * @license    GNU General Public License, version 3
 * @link       https://github.com/avcorn/avcorn
 */

declare(strict_types=1);

/**
 * Overriding default configuration.
 *
 * @var array $config Configuration
 */
$config['info']['company'] = "Acorn Retreat";
$config['info']['title']   = 'Spa & Wellness Center';
$config['info']['motto']   = 'Spa & Wellness';
$config['info']['slogan']  = 'Spa & Wellness';
$config['info']['logo']    = '/assets/images/logos/logo-spa.png';
$config['home']            = '/home/spa';

$config['navigation'] = [
    [
        'href'  => '/designs',
        'label' => 'Designs',
    ],
    [
        'href'  => '/contact',
        'label' => 'Contact',
    ],
];