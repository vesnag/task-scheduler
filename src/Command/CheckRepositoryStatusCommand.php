<?php

declare(strict_types=1);

namespace App\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use App\Service\ConfigurationService;
use App\Service\GitHubRepository;

class CheckRepositoryStatusCommand extends Command
{
    protected static string $defaultName = 'app:check-repository-status';

    public function __construct(
        private ConfigurationService $configService,
        private GitHubRepository $repository
    ) {
        parent::__construct();
    }


    protected function configure()
    {
        $this
            ->setDescription('Checks the status of the repository and sends a notification.')
            ->setHelp('This command checks the status of the repository and sends a notification.');
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        // Example usage of the properties to avoid PHPStan warnings
        $config = $this->configService->getConfig();
        $status = $this->repository->getStatus();

        // Your command logic here

        return Command::SUCCESS;
    }
}
