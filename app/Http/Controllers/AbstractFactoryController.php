<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Examples\AbstractFactory\Real\Tester as RealTester;
use App\Examples\AbstractFactory\Conceitual\Tester as ConceitualTester;

class AbstractFactoryController extends Controller
{
    private $realTester;

    public function __construct(RealTester $realTester, ConceitualTester $conceitualTester) {
        $this->realTester = $realTester;
        $this->conceitualTester = $conceitualTester;
    }

    public function realTest()
    {
        $this->realTester->test();
    }

    public function conceitualTest()
    {
        $this->conceitualTester->test();
    }
}
