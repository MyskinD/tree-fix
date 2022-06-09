<?php

declare(strict_types=1);

namespace App\Dsd\Neo4jBundle;

use Laudis\Neo4j\Authentication\Authenticate;
use Laudis\Neo4j\ClientBuilder;
use Laudis\Neo4j\Contracts\ClientInterface;
use Symfony\Component\HttpKernel\Bundle\Bundle;

final class Neo4jBundle extends Bundle
{
    /** @var ClientInterface $client */
    protected ClientInterface $client;

    public function __construct()
    {
        $this->client = ClientBuilder::create()
            ->withDriver('bolt', 'bolt+s://user:password@localhost') // creates a bolt driver
            ->withDriver('https', 'https://test.com', Authenticate::basic('user', 'password')) // creates an http driver
            ->withDefaultDriver('bolt')
            ->build();
    }

    /**
     * @return ClientInterface
     */
    public function getClient(): ClientInterface
    {
        return $this->client;
    }
}
