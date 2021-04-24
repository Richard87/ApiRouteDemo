<?php

namespace Tests\Service;

use App\Service\ApiLoader;
use App\Service\FindClassDescriptors;
use App\Service\OpenApiGenerator;
use PHPUnit\Framework\TestCase;
use Symfony\Component\Routing\RouterInterface;

class OpenApiGeneratorTest extends TestCase
{
    private OpenApiGenerator $openApi;

    protected function setUp(): void
    {
        $apiLoader = new ApiLoader(new FindClassDescriptors());
        $routeCollection = $apiLoader->load(__DIR__ . "/../../src");
        $mockRouter = $this->createMock(RouterInterface::class);
        $mockRouter->method("getRouteCollection")->willReturn($routeCollection);

        $this->openApi = new OpenApiGenerator($mockRouter);
    }

    public function testOpenApiGenerator(): void {

        $schema = $this->openApi->getDefinition();

        self::assertNotEmpty($schema);
    }
}
