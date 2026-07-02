<?php

// namespace Tests;

// use Illuminate\Foundation\Testing\TestCase as BaseTestCase;

// abstract class TestCase extends BaseTestCase
// {
//     //
// }

namespace Tests;

use Illuminate\Foundation\Testing\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;

    protected function setUp(): void
    {
        parent::setUp();

        // This prevents Laravel from looking for the manifest.json file during tests
        $this->withoutVite(); 
    }
}
