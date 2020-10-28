<?php

namespace App\Http\Controllers;

use App\Classes\Newfunctions;
use Illuminate\Http\Request;
use Illuminate\Support\Traits\ForwardsCalls;

class TestAutoloadController extends Controller
{
    use ForwardsCalls;
    private static \Illuminate\Support\Collection $values;

    public static function __constructStatic()
    {
        static::$values = collect([
            'Gabriel',
            'Jones',
            'Williams',
            ]);
    }
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Support\Collection
     */
    public function __invoke(Request $request)
    {
        return static::$values;
    }

    public static function __callStatic($name, $arguments)
    {
        return (new static)->$name(...$arguments);
    }

    public function __call($method, $parameters)
    {
        return $this->forwardCallTo($this->processNewFunctions(), $method, $parameters);
    }

    public function processNewFunctions()
    {
        return (new Newfunctions());
    }
}
