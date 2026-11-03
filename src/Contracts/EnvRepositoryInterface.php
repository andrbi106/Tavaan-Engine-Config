<?php

declare(strict_types=1);

namespace Tavaan\Engine\Config\Contracts;

/**
 * قرارداد EnvRepository.
 *
 * @see \Tavaan\Engine\Config\EnvRepository
 * @api 1.0
 */
interface EnvRepositoryInterface
{
    /**
     * متد get.
     *
     * @return mixed
     */
    public function get(/* ... */): mixed;

    /**
     * متد string.
     *
     * @return mixed
     */
    public function string(/* ... */): mixed;

    /**
     * متد bool.
     *
     * @return mixed
     */
    public function bool(/* ... */): mixed;

    /**
     * متد int.
     *
     * @return mixed
     */
    public function int(/* ... */): mixed;

    /**
     * متد float.
     *
     * @return mixed
     */
    public function float(/* ... */): mixed;

    /**
     * متد list.
     *
     * @return mixed
     */
    public function list(/* ... */): mixed;

    /**
     * متد json.
     *
     * @return mixed
     */
    public function json(/* ... */): mixed;

    /**
     * متد required.
     *
     * @return mixed
     */
    public function required(/* ... */): mixed;

    /**
     * متد all.
     *
     * @return mixed
     */
    public function all(/* ... */): mixed;

    /**
     * متد has.
     *
     * @return mixed
     */
    public function has(/* ... */): mixed;
}