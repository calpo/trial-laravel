<?php
use Mockery as m;
 
class AppleTest extends TestCase
{
    public function testGet()
    {
        // overloadを使うのは簡単、
        // けど、バッティングを防ぐのが苦労
 
        $waterMock = m::mock( 'overload:Water' );
        $waterMock->shouldReceive( 'get' )
            ->once()
            ->withNoArgs()
            ->andReturn( 50 );
 
        $sunMock = m::mock( 'overload:Sun' );
        $sunMock->shouldReceive( 'get' )
            ->once()
            ->withNoArgs()
            ->andReturn( 50 );
 
        $apple = new Apple;
 
        $this->assertEquals( 100, $apple->get() );
    }
}
