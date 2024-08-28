<?php

declare(strict_types=1);

namespace App\Repository;

class GitHubRepository implements RepositoryInterface
{
    /**
     * @param array<string, mixed> $config
     */
    public function __construct(
        private array $config
    ) {
    }

    public function checkStatus(): string
    {
        // Use GitHub API to check status
        // Return status
        return 'Repository status';
    }
}
