<?php

declare(strict_types=1);

namespace Tavaan\Engine\Config\Contracts;

/**
 * قرارداد Repository.
 *
 * @see \Tavaan\Engine\Config\Repository
 * @api 1.0
 */
interface RepositoryInterface
{
    /**
     * متد get.
     *
     * @return mixed
     */
    public function get(/* ... */): mixed;

    /**
     * متد set.
     *
     * @return mixed
     */
    public function set(/* ... */): mixed;

    /**
     * متد has.
     *
     * @return mixed
     */
    public function has(/* ... */): mixed;

    /**
     * متد missing.
     *
     * @return mixed
     */
    public function missing(/* ... */): mixed;

    /**
     * متد forget.
     *
     * @return mixed
     */
    public function forget(/* ... */): mixed;

    /**
     * متد pull.
     *
     * @return mixed
     */
    public function pull(/* ... */): mixed;

    /**
     * متد push.
     *
     * @return mixed
     */
    public function push(/* ... */): mixed;

    /**
     * متد prepend.
     *
     * @return mixed
     */
    public function prepend(/* ... */): mixed;

    /**
     * متد all.
     *
     * @return mixed
     */
    public function all(/* ... */): mixed;

    /**
     * متد only.
     *
     * @return mixed
     */
    public function only(/* ... */): mixed;

    /**
     * متد except.
     *
     * @return mixed
     */
    public function except(/* ... */): mixed;

    /**
     * متد namespace.
     *
     * @return mixed
     */
    public function namespace(/* ... */): mixed;

    /**
     * متد freeze.
     *
     * @return mixed
     */
    public function freeze(/* ... */): mixed;

    /**
     * متد isFrozen.
     *
     * @return mixed
     */
    public function isFrozen(/* ... */): mixed;

    /**
     * متد toJson.
     *
     * @return mixed
     */
    public function toJson(/* ... */): mixed;

    /**
     * متد masked.
     *
     * @return mixed
     */
    public function masked(/* ... */): mixed;

    /**
     * متد requiredKeys.
     *
     * @return mixed
     */
    public function requiredKeys(/* ... */): mixed;
}