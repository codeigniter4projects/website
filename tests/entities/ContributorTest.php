<?php

use App\Entities\GitHub\Contributor;
use PHPUnit\Framework\Attributes\DataProvider;
use Tests\Support\ProjectTestCase;

/**
 * @internal
 */
final class ContributorTest extends ProjectTestCase
{
    #[DataProvider('provideStars')]
    public function testStars(int $contributions, string $expected)
    {
        $contributor = new Contributor(['contributions' => $contributions]);

        $this->assertSame($expected, $contributor->stars);
    }

    public static function provideStars(): iterable
    {
        return [
            [0, '★'],
            [1, '★'],
            [9, '★'],
            [10, '★★'],
            [99, '★★'],
            [100, '★★★'],
            [5000, '★★★★'],
            [99999, '★★★★★'],
        ];
    }
}
