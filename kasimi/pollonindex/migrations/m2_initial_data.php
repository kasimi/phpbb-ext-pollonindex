<?php

/**
 *
 * Poll on Index. An extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2018, kasimi, https://kasimi.net
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

namespace kasimi\pollonindex\migrations;

use phpbb\db\migration\migration;

class m2_initial_data extends migration
{
	/**
	 * @return array
	 */
	public static function depends_on()
	{
		return ['\kasimi\pollonindex\migrations\m1_initial_schema'];
	}

	/**
	 * @return array
	 */
	public function update_data()
	{
		return [
			['permission.add', ['f_poll_on_index', false]],
		];
	}
}
