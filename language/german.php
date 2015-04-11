<?php
/*	Project:	EQdkp-Plus
 *	Package:	Runes of magic game package
 *	Link:		http://eqdkp-plus.eu
 *
 *	Copyright (C) 2006-2015 EQdkp-Plus Developer Team
 *
 *	This program is free software: you can redistribute it and/or modify
 *	it under the terms of the GNU Affero General Public License as published
 *	by the Free Software Foundation, either version 3 of the License, or
 *	(at your option) any later version.
 *
 *	This program is distributed in the hope that it will be useful,
 *	but WITHOUT ANY WARRANTY; without even the implied warranty of
 *	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *	GNU Affero General Public License for more details.
 *
 *	You should have received a copy of the GNU Affero General Public License
 *	along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */

if ( !defined('EQDKP_INC') ){
	header('HTTP/1.0 404 Not Found');exit;
}
$german_array = array(
	'races' => array(			//use for second Class
		0	=> '',
		1	=> 'Paladin',
		2	=> 'Berserker',
		3	=> 'Derwisch',
		4	=> 'Nayar',
		5	=> 'Samurai',
		6	=> 'Kanonier',
		7	=> 'Desperado',
		8	=> 'Waldläufer',
		9	=> 'Orakel',
		10	=> 'Magus',
		11	=> 'Barde',
		12	=> 'Nekromant',
		13	=> 'Kreuzritter',
	),
		
	'classes' => array(
		0	=> '',
		1	=> 'Paladin',
		2	=> 'Berserker',
		3	=> 'Derwisch',
		4	=> 'Nayar',
		5	=> 'Samurai',
		6	=> 'Kanonier',
		7	=> 'Desperado',
		8	=> 'Waldläufer',
		9	=> 'Orakel',
		10	=> 'Magus',
		11	=> 'Barde',
		12	=> 'Nekromant',
		13	=> 'Kreuzritter',
	),
		'roles' => array(
		1	=> 'Tank',
		2	=> 'Heiler',
		3	=> 'Fernkämpfer',
		4	=> 'Nahkämpfer',
	),
		'eidolons' => array(
		0	=> 'Wähle',
		1	=> 'Joringel',
		2	=> 'Jorinde',
		3	=> 'Poldi',
		4	=> 'Polly',
		5	=> 'Herkules',
		6	=> 'Apollon',
		7	=> 'Achilles',
		8	=> 'Benkei',
		9	=> 'Faust',
		10	=> 'Gilgamesch',
		11	=> 'Brynhild',
		12	=> 'Nephthys',
		13	=> 'Gabriela',
		14	=> 'Gera',
		15	=> 'Isis',
		16	=> 'Shiva',
		17	=> 'Yinglong',
		18	=> 'Leviathan',
		19	=> 'Garuda',
		20	=> 'Fafnir',
		21	=> 'Hydra',
		22	=> 'Ifrit',
		23	=> 'Artus',
		24	=> 'Tamamo',
		25	=> 'Caesar',
		26	=> 'Minotaurus',
		27	=> 'Chiyome',
		28	=> 'Kleopatra',
		29	=> 'Artemis',
		30	=> 'Lilith',
		31	=> 'Suzaku',
		32	=> 'Yoko',
		33	=> 'Alucard',
		34	=> 'Baldur',
		35	=> 'Hänsel und Gretel',
		36	=> 'Athene',
		37	=> 'Ostara',
	),
		'eidolons2' => array(
		0	=> 'Wähle',
		1	=> 'Joringel',
		2	=> 'Jorinde',
		3	=> 'Poldi',
		4	=> 'Polly',
		5	=> 'Herkules',
		6	=> 'Apollon',
		7	=> 'Achilles',
		8	=> 'Benkei',
		9	=> 'Faust',
		10	=> 'Gilgamesch',
		11	=> 'Brynhild',
		12	=> 'Nephthys',
		13	=> 'Gabriela',
		14	=> 'Gera',
		15	=> 'Isis',
		16	=> 'Shiva',
		17	=> 'Yinglong',
		18	=> 'Leviathan',
		19	=> 'Garuda',
		20	=> 'Fafnir',
		21	=> 'Hydra',
		22	=> 'Ifrit',
		23	=> 'Artus',
		24	=> 'Tamamo',
		25	=> 'Caesar',
		26	=> 'Minotaurus',
		27	=> 'Chiyome',
		28	=> 'Kleopatra',
		29	=> 'Artemis',
		30	=> 'Lilith',
		31	=> 'Suzaku',
		32	=> 'Yoko',
		33	=> 'Alucard',
		34	=> 'Baldur',
		35	=> 'Hänsel und Gretel',
		36	=> 'Athene',
		37	=> 'Ostara',
	),
		'eidolons3' => array(
		0	=> 'Wähle',
		1	=> 'Joringel',
		2	=> 'Jorinde',
		3	=> 'Poldi',
		4	=> 'Polly',
		5	=> 'Herkules',
		6	=> 'Apollon',
		7	=> 'Achilles',
		8	=> 'Benkei',
		9	=> 'Faust',
		10	=> 'Gilgamesch',
		11	=> 'Brynhild',
		12	=> 'Nephthys',
		13	=> 'Gabriela',
		14	=> 'Gera',
		15	=> 'Isis',
		16	=> 'Shiva',
		17	=> 'Yinglong',
		18	=> 'Leviathan',
		19	=> 'Garuda',
		20	=> 'Fafnir',
		21	=> 'Hydra',
		22	=> 'Ifrit',
		23	=> 'Artus',
		24	=> 'Tamamo',
		25	=> 'Caesar',
		26	=> 'Minotaurus',
		27	=> 'Chiyome',
		28	=> 'Kleopatra',
		29	=> 'Artemis',
		30	=> 'Lilith',
		31	=> 'Suzaku',
		32	=> 'Yoko',
		33	=> 'Alucard',
		34	=> 'Baldur',
		35	=> 'Hänsel und Gretel',
		36	=> 'Athene',
		37	=> 'Ostara',
	),
	'lang' => array(
		'akd'						=> 'Aura Kingdom',
		'uc_level'					=> 'Level',
		'uc_race'					=> 'Sekundär Klasse',
		'uc_class'					=> 'Primär Klasse',
		'uc_eidolon'				=> '1. Eidolon',
		'uc_eidolon2'				=> '2. Eidolon',
		'uc_eidolon3'				=> '3. Eidolon',
	),
);

?>