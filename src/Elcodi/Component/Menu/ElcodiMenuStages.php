<?php

/*
 * This file is part of the Elcodi package.
 *
 * Copyright (c) 2014-2015 Elcodi.com
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * Feel free to edit as you please, and have fun.
 *
 * @author Marc Morera <yuhu@mmoreram.com>
 * @author Aldo Chiecchia <zimage@tiscali.it>
 * @author Elcodi Team <tech@elcodi.com>
 */

namespace Elcodi\Component\Menu;

/**
 * Class ElcodiMenuStages
 */
final class ElcodiMenuStages
{
    /**
     * This stage defined the moment when the menu is built before caching it
     */
    const BEFORE_CACHE = 'before_cache';

    /**
     * This stage defined the moment when the menu is built after caching it
     */
    const AFTER_CACHE = 'after_cache';
}