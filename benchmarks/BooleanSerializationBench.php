<?php

namespace SKM\Benchmarks\Serialization;

/**
 * @author Márk Sági-Kazár <mark.sagikazar@gmail.com>
 */
final class BooleanSerializationBench extends SerializationBench
{
    public function dataProvider()
    {
        return [
            true,
            false,
        ];
    }
}
