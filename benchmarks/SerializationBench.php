<?php

namespace SKM\Benchmarks\Serialization;

use PhpBench\Benchmark\Metadata\Annotations\BeforeMethods;
use PhpBench\Benchmark\Metadata\Annotations\Groups;
use PhpBench\Benchmark\Metadata\Annotations\Iterations;
use PhpBench\Benchmark\Metadata\Annotations\ParamProviders;
use PhpBench\Benchmark\Metadata\Annotations\Revs;
use PhpBench\Benchmark\Metadata\Annotations\Warmup;

/**
 * @author Márk Sági-Kazár <mark.sagikazar@gmail.com>
 *
 * @BeforeMethods({"init"})
 * @Revs(1000)
 * @Iterations(10)
 */
abstract class SerializationBench
{
    /**
     * @var \MessagePack\Packer
     */
    private $msgPackPacker;

    /**
     * @var \MessagePack\Unpacker
     */
    private $msgPackUnpacker;

    public function init() {
        $this->msgPackPacker = new \MessagePack\Packer();
        $this->msgPackUnpacker = new \MessagePack\Unpacker();
    }

    /**
     * @ParamProviders({"provideData"})
     * @Groups({"serialization"})
     */
    public function benchSerializeJSON($params)
    {
        json_encode($params['data']);
    }

    /**
     * @ParamProviders({"provideJSONData"})
     * @Groups({"deserialization"})
     */
    public function benchDeserializeJSON($params)
    {
        json_decode($params['data'], true);
    }

    /**
     * @ParamProviders({"provideData"})
     * @Groups({"serialization"})
     */
    public function benchSerializeNative($params)
    {
        serialize($params['data']);
    }

    /**
     * @ParamProviders({"provideNativeData"})
     * @Groups({"deserialization"})
     */
    public function benchDeserializeNative($params)
    {
        unserialize($params['data']);
    }

    /**
     * @ParamProviders({"provideData"})
     * @Warmup(2)
     * @Groups({"serialization"})
     */
    public function benchSerializeMsgPack($params)
    {
        $this->msgPackPacker->pack($params['data']);
    }

    /**
     * @ParamProviders({"provideMsgPackData"})
     * @Warmup(2)
     * @Groups({"deserialization"})
     *
     * TODO: find out why the UTF-8 hack is necessary
     */
    public function benchDeserializeMsgPack($params)
    {
        $this->msgPackUnpacker->unpack(utf8_decode($params['data']));
    }

    public function provideData()
    {
        $data = [];

        foreach ($this->dataProvider() as $d) {
            $data[] = [
                'data' => $d,
            ];
        }

        return $data;
    }

    public function provideJSONData()
    {
        $data = [];

        foreach ($this->dataProvider() as $d) {
            $data[] = [
                'data' => json_encode($d),
            ];
        }

        return $data;
    }

    public function provideNativeData()
    {
        $data = [];

        foreach ($this->dataProvider() as $d) {
            $data[] = [
                'data' => serialize($d),
            ];
        }

        return $data;
    }

    public function provideMsgPackData()
    {
        $msgPack = new \MessagePack\Packer();
        $data = [];

        foreach ($this->dataProvider() as $d) {
            $data[] = [
                'data' => utf8_encode($msgPack->pack($d)),
            ];
        }
        return $data;
    }

    abstract protected function dataProvider();
}
