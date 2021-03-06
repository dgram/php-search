<?php

/*
 * This file is part of the Search PHP Library.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * Feel free to edit as you please, and have fun.
 *
 * @author Marc Morera <yuhu@mmoreram.com>
 * @author PuntMig Technologies
 */

declare(strict_types=1);

namespace Puntmig\Search\Repository;

/**
 * Class RepositoryBucket.
 */
class RepositoryBucket
{
    /**
     * @var TransformableRepository[]
     *
     * Repositories
     */
    private $repositories = [];

    /**
     * Add repository.
     *
     * @param string                  $name
     * @param TransformableRepository $repository
     */
    public function addRepository(
        string $name,
        TransformableRepository $repository
    ) {
        $this->repositories[$name] = $repository;
    }

    /**
     * Get repository by name.
     *
     * @param string $name
     *
     * @return TransformableRepository|null
     */
    public function getRepositoryByName(string $name): ? TransformableRepository
    {
        return $this->repositories[$name] ?? null;
    }
}
