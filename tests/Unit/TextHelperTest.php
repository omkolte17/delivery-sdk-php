<?php

namespace KenticoCloud\Tests\Unit;

use KenticoCloud\Delivery\Helpers\TextHelper;
use PHPUnit\Framework\TestCase;

class TextHelperTest extends TestCase
{
    public function testPascalCase()
    {
        $pascalCase = TextHelper::getInstance()->pascalCase('Pascal_Case', '_');
        $this->assertEquals('PascalCase', $pascalCase);
    }

    public function testCamelCase()
    {
        $camelCase = TextHelper::getInstance()->camelCase('Camel_Case', '_');
        $this->assertEquals('camelCase', $camelCase);
    }
}