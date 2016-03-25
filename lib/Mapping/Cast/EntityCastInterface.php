<?php

/*
 * This file is part of the `src-run/arthur-doctrine-library` project.
 *
 * (c) Rob Frawley 2nd <rmf@src.run>
 * (c) Scribe Inc      <scr@src.run>
 *
 * For the full copyright and license information, please view the LICENSE.md
 * file that was distributed with this source code.
 */

namespace SR\Doctrine\ORM\Mapping\Cast;

/**
 * Interface EntityCastInterface.
 */
interface EntityCastInterface
{
    /**
     * Returns name of entity with identity value.
     *
     * @return string
     */
    public function __toString();

    /**
     * Returns public methods and properties.
     *
     * @return array[]
     */
    public function __toArray();
}

/* EOF */
