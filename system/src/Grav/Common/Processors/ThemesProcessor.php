<?php

/**
 * @package    Grav\Common\Processors
 *
 * @copyright  Copyright (C) 2015 - 2020 Trilby Media, LLC. All rights reserved.
 * @license    MIT License; see LICENSE file for details.
 */

namespace Grav\Common\Processors;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\RequestHandlerInterface;

class ThemesProcessor extends ProcessorBase
{
    /** @var string */
    public $id = 'themes';
    /** @var string */
    public $title = 'Themes';

    public function process(ServerRequestInterface $request, RequestHandlerInterface $handler): ResponseInterface
    {
        $this->startTimer();
        $this->container['themes']->init();
        $this->stopTimer();

        return $handler->handle($request);
    }
}
