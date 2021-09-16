<?php

use CodeIgniter\Test\DatabaseTestTrait;
use CodeIgniter\Test\FeatureTestTrait;
use Tests\Support\ProjectTestCase;

/**
 * @internal
 */
final class BasicPagesTest extends ProjectTestCase
{
    use DatabaseTestTrait;
    use FeatureTestTrait;

    public function testCanViewHome()
    {
        $result = $this->get('/');

        $result->assertStatus(200);
        $result->assertSee('The small framework with powerful features');
    }

    public function testCanViewDiscuss()
    {
        $result = $this->get('/discuss');

        $result->assertStatus(200);
        $result->assertSee('Security issues should be reported');
    }

    public function testCanViewContribute()
    {
        $result = $this->get('/contribute');

        $result->assertStatus(200);
        $result->assertSee('Contribute to CodeIgniter');
    }

    public function testCanViewDownload()
    {
        $result = $this->get('/download');

        $result->assertStatus(200);
        $result->assertSee('Download');
    }

    public function testCanViewPolicies()
    {
        $result = $this->get('/policies');

        $result->assertStatus(200);
        $result->assertSee('Terms of Service');
    }

    public function testCanViewFinePrint()
    {
        $result = $this->get('/the-fine-print');

        $result->assertStatus(200);
        $result->assertSee('Trademarks');
    }
}
