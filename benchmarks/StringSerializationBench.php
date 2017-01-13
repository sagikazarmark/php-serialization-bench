<?php

namespace SKM\Benchmarks\Serialization;

/**
 * @author Márk Sági-Kazár <mark.sagikazar@gmail.com>
 */
final class StringSerializationBench extends SerializationBench
{
    public function dataProvider()
    {
        return [
            'a',
            'ab',
            'abc',
            'abcd',
        ];
    }
}
