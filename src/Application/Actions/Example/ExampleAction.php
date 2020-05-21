<?php
declare(strict_types=1);

namespace App\Application\Actions\Example;

use App\Application\Actions\Action;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Log\LoggerInterface;
use Slim\Views\Twig;

class ExampleAction extends Action 
{

    /**
     * @var Twig
     */
    protected $twig;

    public function __construct(LoggerInterface $logger, Twig $twig)
    {
        parent::__construct($logger);
        $this->twig = $twig;
    }

    protected function action() : Response
    {
        $this->logger->info('Example route called');
        $this->logger->error('Test error');

        return $this->twig->render($this->response, 'index.twig');
    }
}