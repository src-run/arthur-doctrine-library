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

namespace SR\Doctrine\ORM\Mapping;

/**
 * Interface SlugEntityInterface.
 */
interface SlugEntityInterface extends EntityInterface
{
    /**
     * @param string|null $slug
     *
     * @return $this
     */
    public function setSlug($slug = null);

    /**
     * @return string|null
     */
    public function getSlug();

    /**
     * @return bool
     */
    public function hasSlug();

    /**
     * @return $this
     */
    public function clearSlug();
}

/* EOF */
