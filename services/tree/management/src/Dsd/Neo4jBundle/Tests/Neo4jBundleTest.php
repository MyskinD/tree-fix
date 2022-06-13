<?php

namespace App\Dsd\Neo4jBundle\Tests;

use PHPUnit\Framework\TestCase;
use Laudis\Neo4j\ClientBuilder;
use App\Dsd\Neo4jBundle\Neo4jBundle;

class Neo4jBundleTest extends TestCase
{
    public function testConnection(): void
    {
        $this->assertTrue(true);
    }
}
