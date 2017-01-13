<?php

namespace SKM\Benchmarks\Serialization;

/**
 * @author Márk Sági-Kazár <mark.sagikazar@gmail.com>
 */
final class IntegerSerializationBench extends SerializationBench
{
    public function dataProvider()
    {
        return [
            1,
            12,
            123,
            1234,
        ];
    }
}
