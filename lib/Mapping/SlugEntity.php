<?php

/*
 * This file is part of the Arthur Doctrine Library.
 *
 * (c) Scribe Inc. <oss@scr.be>
 *
 * For the full copyright and license information, please view the LICENSE.md
 * file that was distributed with this source code.
 */

namespace Scribe\Doctrine\ORM\Mapping;

/**
 * Class SlugEntity.
 */
class SlugEntity extends Entity implements SlugEntityInterface
{
    /**
     * @var null|string
     */
    protected $slug;

    /**
     * @param string|null $slug
     *
     * @return $this
     */
    public function setSlug($slug = null)
    {
        $this->slug = $slug;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getSlug()
    {
        return $this->slug;
    }

    /**
     * @return bool
     */
    public function hasSlug()
    {
        return (bool) ($this->getSlug() !== null);
    }

    /**
     * @return $this
     */
    public function clearSlug()
    {
        $this->slug = null;

        return $this;
    }

    /**
     * @return string
     */
    final public function getIdentityType()
    {
        return self::IDENTITY_TYPE_SLUG;
    }
}

/* EOF */