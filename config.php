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
$config['info']['company'] = "Bene's Brew House";
$config['info']['title']   = 'Crazy Good Coffee';
$config['info']['motto']   = 'Get your caffeinated fix!';
$config['info']['slogan']  = 'Get your caffeinated fix!';
$config['info']['logo']    = '/assets/images/logos/logo-coffeeshop.png';
$config['home']            = '/home/coffeeshop';

$config['navigation'][0]['href'] = $config['home'];