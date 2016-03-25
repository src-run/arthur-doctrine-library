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
 * Trait EntityCastTrait.
 */
trait EntityCastTrait
{
    /**
     * @return mixed
     */
    abstract public function getIdentity();

    /**
     * @return string
     */
    abstract public function getIdentityType();

    /**
     * @return string
     */
    abstract public function hasIdentity();

    /**
     * {@inheritdoc}
     *
     * @return string
     */
    public function __toString()
    {
        try {
            return sprintf(
                '%s [%s:%s]',
                get_class($this),
                $this->getIdentityType(),
                (string) ($this->hasIdentity() ? $this->getIdentity() : 'no-identity')
            );
        } catch (\Exception $exception) {
            return spl_object_hash($this);
        }
    }

    /**
     * {@inheritdoc}
     *
     * @return array[]
     */
    public function __toArray()
    {
        return [
            'properties' => (array) get_object_vars($this),
            'methods' => (array) get_class_methods($this),
        ];
    }
}

/* EOF */
