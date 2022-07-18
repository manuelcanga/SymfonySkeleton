<?php

declare( strict_types=1 );

namespace MyAPP\Modules\Welcome\Infrastructure;

use MyAPP\Tests\Modules\Welcome\Infrastructure\WelcomeControllerTest;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

/**
 * @see WelcomeControllerTest
 */
class WelcomeController extends AbstractController
{
    /**
     * This action says 'Hello World'
     *
     * @return Response
     */
    public function __invoke(): Response
    {
        return $this->render( '@modules/welcome/hello.html.twig' );
    }
}