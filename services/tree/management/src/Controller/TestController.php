<?php

declare(strict_types=1);

namespace App\Controller;


use App\Dsd\Neo4jBundle\Neo4jBundle;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class TestController extends AbstractController
{
    public function __construct(
        public Neo4jBundle $neo4j
    ) {
    }

    /**
     * @Symfony\Component\Routing\Annotation\Route("/test", name="test_neo4j")
     */
    public function test(): void
    {
        $client = $this->neo4j->getClient();

        $result = $client->run(<<<'CYPHER'
        MERGE (neo4j:Database {name: $dbName}) - [:HasRating] - (rating:Rating {value: 10})
        RETURN neo4j, rating
        CYPHER, ['dbName' => 'neo4j'])->first();

        $neo4j = $result->get('neo4j');
        $rating = $result->get('rating');

        dd($neo4j->getProperty('name').' is '.$rating->getProperty('value') . ' out of 10!');
    }
}
