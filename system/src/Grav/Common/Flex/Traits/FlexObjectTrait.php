<?php

declare(strict_types=1);

/**
 * @package    Grav\Common\Flex
 *
 * @copyright  Copyright (C) 2015 - 2020 Trilby Media, LLC. All rights reserved.
 * @license    MIT License; see LICENSE file for details.
 */

namespace Grav\Common\Flex\Traits;

use RocketTheme\Toolbox\Event\Event;

/**
 * Trait FlexObjectTrait
 * @package Grav\Common\Flex\Traits
 */
trait FlexObjectTrait
{
    use FlexCommonTrait;

    /**
     * @param string $name
     * @param object|null $event
     * @return $this
     */
    public function triggerEvent(string $name, $event = null)
    {
        if (null === $event) {
            $event = new Event([
                'type' => 'flex',
                'directory' => $this->getFlexDirectory(),
                'object' => $this
            ]);
        }
        if (strpos($name, 'onFlexObject') !== 0 && strpos($name, 'on') === 0) {
            $name = 'onFlexObject' . substr($name, 2);
        }

        $container = $this->getContainer();
        if ($event instanceof Event) {
            $container->fireEvent($name, $event);
        } else {
            $container->dispatchEvent($event);
        }

        return $this;
    }
}
