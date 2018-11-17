<?php

/**
 *
 * Poll on Index. An extension for the phpBB Forum Software package.
 * @copyright (c) 2018, kasimi, https://kasimi.net
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

namespace kasimi\pollonindex;

use phpbb\extension\base;

class ext extends base
{
	const POLL_ON_INDEX_NO					= 0;
	const POLL_ON_INDEX_YES_INDEFINITELY	= 1;
	const POLL_ON_INDEX_YES_END				= 2;

	/**
	 * @return bool
	 */
	public function is_enableable()
	{
		return phpbb_version_compare(PHPBB_VERSION, '3.2.4', '>=') && phpbb_version_compare(PHP_VERSION, '5.5.0', '>=');
	}
}
