<?php

namespace Tests\Support;

use App\Database\Seeds\ForumSeeder;
use CodeIgniter\Test\CIUnitTestCase;

/**
 * @internal
 */
abstract class ProjectTestCase extends CIUnitTestCase
{
    /**
     * Should the database be refreshed before each test?
     *
     * @var bool
     */
    protected $refresh = true;

    /**
     * The seed file(s) used for all tests within this test case.
     * Should be fully-namespaced or relative to $basePath
     *
     * @var array|string
     */
    protected $seed = ForumSeeder::class;

    /**
     * The path to the seeds directory.
     * Allows overriding the default application directories.
     *
     * @var string
     */
    protected $basePath = APPPATH . 'Database/';

    /**
     * The namespace(s) to help us find the migration classes.
     * Empty is equivalent to running `spark migrate -all`.
     * Note that running "all" runs migrations in date order,
     * but specifying namespaces runs them in namespace order (then date)
     *
     * @var array|string|null
     */
    protected $namespace = 'App';

    protected function tearDown(): void
    {
        parent::tearDown();

        $this->resetServices();
    }
}
