<?php

namespace PHPSha1\Tests;

use PHPSha1\Sha1;
use PHPUnit_Framework_TestCase;

class Sha1Test extends PHPUnit_Framework_TestCase
{
    public function test_that_it_produces_correct_hash()
    {
		$byte_array = array(0,14,2,65,4,89,45,23,62,10)
        $native = sha1('string to hash');
        $purephp = Sha1::hash('string to hash');
		$purephp_array = Sha1::hash_array($byte_array);
        $this->assertEquals($native, $purephp);
    }

}
