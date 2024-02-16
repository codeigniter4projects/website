<?php

use App\Libraries\GitHub;
use CodeIgniter\Test\DatabaseTestTrait;
use CodeIgniter\Test\FeatureTestTrait;
use Config\Services;
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

    public function testCanViewHomeWhenConnectException()
    {
        $github = $this->getMockBuilder(GitHub::class)
            ->disableOriginalConstructor()
            ->disableOriginalClone()
            ->disableArgumentCloning()
            ->disallowMockingUnknownTypes()
            ->onlyMethods(['getRepos'])
            ->getMock();
        $github->method('getRepos')->willThrowException(
            new GuzzleHttp\Exception\ConnectException(
                'cURL error 6: Could not resolve host: api.github.com (see https://curl.haxx.se/libcurl/c/libcurl-errors.html) for https://api.github.com/repos/bcit-ci/CodeIgniter',
                new GuzzleHttp\Psr7\Request(
                    'GET',
                    'https://api.github.com/repos/bcit-ci/CodeIgniter'
                )
            )
        );
        Services::injectMock('github', $github);

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
