<?php

use App\Entities\GitHub\Release;
use CodeIgniter\HTTP\URI;
use Tests\Support\ProjectTestCase;

/**
 * @internal
 */
final class ReleaseTest extends ProjectTestCase
{
    public function testUrlsReturnURI()
    {
        $browse   = 'https://codeigniter.com/browse';
        $download = 'https://codeigniter.com/browse';

        $release = new Release([
            'url'          => $browse,
            'download_url' => $download,
        ]);

        $result = $release->url;
        $this->assertInstanceOf(URI::class, $result);
        $this->assertSame($browse, (string) $result);

        $result = $release->download_url;
        $this->assertInstanceOf(URI::class, $result);
        $this->assertSame($download, (string) $result);
    }

    public function testUrlsReturnNull()
    {
        $release = new Release([
            'url'          => '',
            'download_url' => null,
        ]);

        $result = $release->url;
        $this->assertNull($result);
        $this->assertSame('', (string) $result);

        $result = $release->download_url;
        $this->assertNull($result);
        $this->assertSame('', (string) $result);
    }
}
