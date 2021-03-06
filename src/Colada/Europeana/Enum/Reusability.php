<?php

/*
 * This file is part of the Europeana API package.
 *
 * (c) Matthias Vandermaesen <matthias@colada.be>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Colada\Europeana\Enum;

use CommerceGuys\Enum\AbstractEnum;

/**
 * @author Matthias Vandermaesen <matthias@colada.be>
 */
final class Reusability extends AbstractEnum
{
    const OPEN       = 'open';
    const RESTRICTED = 'restricted';
    const PERMISSION = 'permission';
}
