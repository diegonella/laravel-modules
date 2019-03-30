<?php

namespace Diegonella\Modules\Tests;

use Diegonella\Modules\Contracts\RepositoryInterface;
use Diegonella\Modules\Laravel\LaravelFileRepository;

class ContractsServiceProviderTest extends BaseTestCase
{
    /** @test */
    public function it_binds_repository_interface_with_implementation()
    {
        $this->assertInstanceOf(LaravelFileRepository::class, app(RepositoryInterface::class));
    }
}
