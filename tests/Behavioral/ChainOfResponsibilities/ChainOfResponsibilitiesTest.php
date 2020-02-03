<?php

namespace Kuriv\PHPDesignPatterns\Behavioral\ChainOfResponsibilities;

use PHPUnit\Framework\TestCase;
use Psr\Http\Message\UriInterface;
use Psr\Http\Message\RequestInterface;

class ChainOfResponsibilitiesTest extends TestCase
{
    public function testCanRequestKeyInFastStorage()
    {
        $chain = new HttpInMemoryCacheHandler(['/foo/bar?index=1' => 'Hello In Memory!'], new SlowDatabaseHandler);
        $uri = $this->createMock(UriInterface::class);
        $uri->method('getPath')->willReturn('/foo/bar');
        $uri->method('getQuery')->willReturn('index=1');
        $request = $this->createMock(RequestInterface::class);
        $request->method('getMethod')->willReturn('GET');
        $request->method('getUri')->willReturn($uri);
        $this->assertSame('Hello In Memory!', $chain->handle($request));
    }

    public function testCanRequestKeyInSlowStorage()
    {
        $chain = new HttpInMemoryCacheHandler(['/foo/bar?index=1' => 'Hello In Memory!'], new SlowDatabaseHandler);
        $uri = $this->createMock(UriInterface::class);
        $uri->method('getPath')->willReturn('/foo/baz');
        $uri->method('getQuery')->willReturn('');
        $request = $this->createMock(RequestInterface::class);
        $request->method('getMethod')->willReturn('GET');
        $request->method('getUri')->willReturn($uri);
        $this->assertSame('Hello World!', $chain->handle($request));
    }
}
