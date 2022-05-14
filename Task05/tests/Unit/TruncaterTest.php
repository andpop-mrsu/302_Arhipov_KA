<?php

namespace KArhipov\Tests;
use \PHPUnit\Framework\TestCase;
use KArhipov\Task05\Truncater;

class TruncaterTest extends TestCasep
{
    /** @test */
    public function Reduction()
    {
        $truncater = new Truncater();
        $this->assertSame('Длинн...', $truncater->truncate('Длинный текст', ['length' => 5 ]));
        $this->assertSame('...', $truncater->truncate(''));
        $this->assertSame('Архипов Константин Александрович...', $truncater->truncate('Архипов Константин Александрович'));
        $this->assertSame('Архипов КО...', $truncater->truncate('Архипов Константин Александрович', ['length' => 10]));
        $this->assertSame('Архипов Константин Александрович...', $truncater->truncate('Архипов Константин Александрович', ['length' => 50]));
        $this->assertSame('Архипов Константин Александрович...', $truncater->truncate('Архипов Константин Александрович', ['length' => -10]));
        $this->assertSame('Архипов Ко*', $truncater->truncate('Архипов Константин Александрович', ['length' => 10, 'separator' => '*']));
        $this->assertSame('Архипов Константин Александрович*', $truncater->truncate('Архипов Константин Александрович', ['separator' => '*']));
    }
}
