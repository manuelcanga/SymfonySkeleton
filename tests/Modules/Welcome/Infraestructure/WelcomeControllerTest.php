<?php

namespace MyAPP\Tests\Modules\Welcome\Infrastructure;

use MyAPP\Modules\Welcome\Infrastructure\WelcomeController;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

/**
 * @see WelcomeController
 */
class WelcomeControllerTest extends WebTestCase
{
    /**
     * Test SayHello method in order to check if displays '<h1>Hello World</h1>'
     *
     * @return void
     */
    public function testSayHello(): void
    {
        // This calls KernelTestCase::bootKernel(), and creates a
        // "client" that is acting as the browser
        $client = static::createClient();

        // Request a specific page
        $crawler = $client->request('GET', '/');

        // Validate a successful response and some content
        $this->assertResponseIsSuccessful();
        $this->assertSelectorTextContains('h1', 'Hello World');
    }

}