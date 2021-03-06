<?php

/*
 * This file is part of Core.
 *
 * (c) DraperStudio <hello@draperstudio.tech>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace SapiApi\Core\Contracts\Request;

/**
 * Interface Serialiser.
 */
interface Serialiser
{
    /**
     * @param $input
     *
     * @return mixed
     */
    public function serialise($input);
}
