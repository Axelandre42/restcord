<?php

/*
 * Copyright 2017 Aaron Scherer
 *
 * This source file is subject to the license that is bundled
 * with this source code in the file LICENSE
 *
 * @package     restcord/restcord
 * @copyright   Aaron Scherer 2017
 * @license     MIT
 */

namespace RestCord\Model\Permissions;

/**
 * Role Model
 */
class Role {

	/**
	 * integer representation of hexadecimal color code
	 *
	 * @var int
	 */
	public $color;

	/**
	 * if this role is pinned in the user listing
	 *
	 * @var bool
	 */
	public $hoist = false;

	/**
	 * role icon hash
	 *
	 * @var string|null
	 */
	public $icon;

	/**
	 * role id
	 *
	 * @var int
	 */
	public $id;

	/**
	 * whether this role is managed by an integration
	 *
	 * @var bool
	 */
	public $managed = false;

	/**
	 * whether this role is mentionable
	 *
	 * @var bool
	 */
	public $mentionable = false;

	/**
	 * role name
	 *
	 * @var string
	 */
	public $name;

	/**
	 * permission bit set
	 *
	 * @var string
	 */
	public $permissions;

	/**
	 * position of this role
	 *
	 * @var int
	 */
	public $position;

	/**
	 * the tags this role has
	 *
	 * @var array|null
	 */
	public $tags;

	/**
	 * role unicode emoji
	 *
	 * @var string|null
	 */
	public $unicode_emoji;

	/**
	 * @param array $content
	 */
	public function __construct(array $content = null) {
		if (null === $content) {
		    return;
		}
		                    
		foreach ($content as $key => $value) {
		    $key = lcfirst(str_replace(' ', '', ucwords(str_replace('_', ' ', $key))));
		    if (property_exists($this, $key)) {
		        $this->{$key} = $value;
		    }
		}
	}
}