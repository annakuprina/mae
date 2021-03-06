<?php

namespace OM4\Zapier\Payload\Collection;

use OM4\Zapier\Payload\Base\Collection;

defined( 'ABSPATH' ) || exit;

/**
 * Holds an array of \OM4\Zapier\Payload\Item\DownloadableFile classes.
 */
final class DownloadableFiles extends Collection {

	/**
	 * Holds the name of the Item Class which is allowed in this Collection
	 *
	 * @var  string
	 */
	protected static $item_type = '\\OM4\\Zapier\\Payload\\Item\\DownloadableFile';
}
