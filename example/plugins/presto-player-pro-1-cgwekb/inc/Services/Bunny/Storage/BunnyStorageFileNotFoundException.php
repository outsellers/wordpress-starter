<?php

namespace PrestoPlayer\Pro\Services\Bunny\Storage;

/**
 * An exception thrown by BunnyCDNStorage caused by authentication failure
 */
class BunnyStorageFileNotFoundException extends BunnyStorageException {

	public function __construct( $path, $code = 0, \Exception $previous = null ) {
		parent::__construct( "Could not find part of the object path: {$path}", $code, $previous );
	}

	public function __toString() {
		return __CLASS__ . ": {$this->message}\n";
	}
}
