<?php
declare(strict_types=1);

// require_once dirname(__FILE__) . '/../honkaku/chapter02/data/types.php';

use PHPUnit\Framework\TestCase;

class SampleTest extends TestCase
{

    /**
     * 各変数が期待値であるかをテストする。
     */
    public function testFirstPage()
    {

        require_once dirname(__FILE__) . '/../honkaku/chapter02/data/types.php';

        $this->assertIsInt($integerValue);
        $this->assertSame(12.34, $floatValue);
        $this->assertSame("文字列1", $stringValue1);
        $this->assertSame("文字列2", $stringValue2);
        $this->assertIsBool($boolValue);
        $this->assertNull($nullValue);
        $this->assertSame("", $emptyStringValue);
    }

}
