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

use kasimi\pollonindex\ext;
use phpbb\db\migration\migration;

class m1_initial_schema extends migration
{
	/**
	 * @return array
	 */
	public static function depends_on()
	{
		return ['\phpbb\db\migration\data\v320\v320'];
	}

	/**
	 * @return array
	 */
	public function update_schema()
	{
		return [
			'add_columns' => [
				$this->table_prefix . 'topics' => [
					'poll_on_index' => ['TINT:1', ext::POLL_ON_INDEX_NO],
				],
			],
		];
	}

	/**
	 * @return array
	 */
	public function revert_schema()
	{
		return [
			'drop_columns' => [
				$this->table_prefix . 'topics' => [
					'poll_on_index',
				],
			],
		];
	}
}
