<?php

use \PHPUnit\Framework\TestCase;
use FunGvey\Task05\Truncater;

class TruncaterTest extends TestCasep
{
    
    /** @test */
    public function Reduction()
    {
        $truncater = new Truncater();
        $this->assertSame('Длинн...', $truncater->truncate('Длинный текст', ['length' => 5 ]));
        $this->assertSame('...', $truncater->truncate(''));
        $this->assertSame('Демидов Владимир Александрович...', $truncater->truncate('Демидов Владимир Александрович'));
        $this->assertSame('Демидов Вла...', $truncater->truncate('Демидов Владимир Александрович', ['length' => 10]));
        $this->assertSame('Демидов Владимир Александрович...', $truncater->truncate('Демидов Владимир Александрович', ['length' => 50]));
        $this->assertSame('Демидов Владимир Александрович...', $truncater->truncate('Демидов Владимир Александрович', ['length' => -10]));
        $this->assertSame('Демидов Вла*', $truncater->truncate('Демидов Владимир Александрович', ['length' => 10, 'separator' => '*']));
        $this->assertSame('Демидов Владимир Александрович*', $truncater->truncate('Демидов Владимир Александрович', ['separator' => '*']));
    }
}
