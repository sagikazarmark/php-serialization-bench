# PHP Serialization Benchmarks

**Benchmarks for serialization methods in PHP.**


## Methods

- [x] json
- [ ] bson
- [x] native
- [ ] xml
- [x] msgpack
- [ ] igbinary


## Initial results

```
\SKM\Benchmarks\Serialization\BooleanSerializationBench

    benchSerializeJSON            I9 P0 	[μ Mo]/r: 0.337 0.314 (μs) 	[μSD μRSD]/r: 0.033μs 9.72%
    benchSerializeJSON            I9 P1 	[μ Mo]/r: 0.338 0.314 (μs) 	[μSD μRSD]/r: 0.050μs 14.73%
    benchDeserializeJSON          I9 P0 	[μ Mo]/r: 0.537 0.524 (μs) 	[μSD μRSD]/r: 0.034μs 6.34%
    benchDeserializeJSON          I9 P1 	[μ Mo]/r: 0.571 0.534 (μs) 	[μSD μRSD]/r: 0.073μs 12.75%
    benchSerializeNative          I9 P0 	[μ Mo]/r: 0.427 0.411 (μs) 	[μSD μRSD]/r: 0.036μs 8.37%
    benchSerializeNative          I9 P1 	[μ Mo]/r: 0.421 0.408 (μs) 	[μSD μRSD]/r: 0.021μs 4.98%
    benchDeserializeNative        I9 P0 	[μ Mo]/r: 0.428 0.412 (μs) 	[μSD μRSD]/r: 0.045μs 10.63%
    benchDeserializeNative        I9 P1 	[μ Mo]/r: 0.419 0.398 (μs) 	[μSD μRSD]/r: 0.037μs 8.87%
    benchSerializeMsgPack         I9 P0 	[μ Mo]/r: 0.813 0.755 (μs) 	[μSD μRSD]/r: 0.091μs 11.23%
    benchSerializeMsgPack         I9 P1 	[μ Mo]/r: 0.772 0.757 (μs) 	[μSD μRSD]/r: 0.030μs 3.92%
    benchDeserializeMsgPack       I9 P0 	[μ Mo]/r: 1.112 1.092 (μs) 	[μSD μRSD]/r: 0.054μs 4.88%
    benchDeserializeMsgPack       I9 P1 	[μ Mo]/r: 1.107 1.084 (μs) 	[μSD μRSD]/r: 0.071μs 6.42%

\SKM\Benchmarks\Serialization\IntegerSerializationBench

    benchSerializeJSON            I9 P0 	[μ Mo]/r: 0.337 0.324 (μs) 	[μSD μRSD]/r: 0.039μs 11.49%
    benchSerializeJSON            I9 P1 	[μ Mo]/r: 0.428 0.338 (μs) 	[μSD μRSD]/r: 0.197μs 45.99%
    benchSerializeJSON            I9 P2 	[μ Mo]/r: 0.336 0.323 (μs) 	[μSD μRSD]/r: 0.027μs 8.01%
    benchSerializeJSON            I9 P3 	[μ Mo]/r: 0.364 0.339 (μs) 	[μSD μRSD]/r: 0.053μs 14.56%
    benchDeserializeJSON          I9 P0 	[μ Mo]/r: 0.550 0.532 (μs) 	[μSD μRSD]/r: 0.052μs 9.38%
    benchDeserializeJSON          I9 P1 	[μ Mo]/r: 0.567 0.546 (μs) 	[μSD μRSD]/r: 0.046μs 8.17%
    benchDeserializeJSON          I9 P2 	[μ Mo]/r: 0.574 0.562 (μs) 	[μSD μRSD]/r: 0.038μs 6.63%
    benchDeserializeJSON          I9 P3 	[μ Mo]/r: 0.595 0.567 (μs) 	[μSD μRSD]/r: 0.063μs 10.61%
    benchSerializeNative          I9 P0 	[μ Mo]/r: 0.469 0.417 (μs) 	[μSD μRSD]/r: 0.074μs 15.68%
    benchSerializeNative          I9 P1 	[μ Mo]/r: 0.428 0.416 (μs) 	[μSD μRSD]/r: 0.024μs 5.54%
    benchSerializeNative          I9 P2 	[μ Mo]/r: 0.427 0.419 (μs) 	[μSD μRSD]/r: 0.027μs 6.23%
    benchSerializeNative          I9 P3 	[μ Mo]/r: 0.535 0.475 (μs) 	[μSD μRSD]/r: 0.165μs 30.91%
    benchDeserializeNative        I9 P0 	[μ Mo]/r: 0.437 0.399 (μs) 	[μSD μRSD]/r: 0.076μs 17.36%
    benchDeserializeNative        I9 P1 	[μ Mo]/r: 0.413 0.401 (μs) 	[μSD μRSD]/r: 0.022μs 5.37%
    benchDeserializeNative        I9 P2 	[μ Mo]/r: 0.432 0.409 (μs) 	[μSD μRSD]/r: 0.037μs 8.65%
    benchDeserializeNative        I9 P3 	[μ Mo]/r: 0.438 0.415 (μs) 	[μSD μRSD]/r: 0.065μs 14.80%
    benchSerializeMsgPack         I9 P0 	[μ Mo]/r: 0.615 0.599 (μs) 	[μSD μRSD]/r: 0.048μs 7.74%
    benchSerializeMsgPack         I9 P1 	[μ Mo]/r: 0.624 0.596 (μs) 	[μSD μRSD]/r: 0.054μs 8.62%
    benchSerializeMsgPack         I9 P2 	[μ Mo]/r: 0.623 0.594 (μs) 	[μSD μRSD]/r: 0.052μs 8.41%
    benchSerializeMsgPack         I9 P3 	[μ Mo]/r: 0.903 0.832 (μs) 	[μSD μRSD]/r: 0.168μs 18.64%
    benchDeserializeMsgPack       I9 P0 	[μ Mo]/r: 0.961 0.938 (μs) 	[μSD μRSD]/r: 0.059μs 6.13%
    benchDeserializeMsgPack       I9 P1 	[μ Mo]/r: 0.971 0.940 (μs) 	[μSD μRSD]/r: 0.080μs 8.25%
    benchDeserializeMsgPack       I9 P2 	[μ Mo]/r: 0.948 0.933 (μs) 	[μSD μRSD]/r: 0.031μs 3.23%
    benchDeserializeMsgPack       I9 P3 	[μ Mo]/r: 1.930 1.774 (μs) 	[μSD μRSD]/r: 0.290μs 15.00%

\SKM\Benchmarks\Serialization\StringSerializationBench

    benchSerializeJSON            I9 P0 	[μ Mo]/r: 0.370 0.360 (μs) 	[μSD μRSD]/r: 0.028μs 7.59%
    benchSerializeJSON            I9 P1 	[μ Mo]/r: 0.414 0.373 (μs) 	[μSD μRSD]/r: 0.083μs 20.14%
    benchSerializeJSON            I9 P2 	[μ Mo]/r: 0.410 0.399 (μs) 	[μSD μRSD]/r: 0.038μs 9.31%
    benchSerializeJSON            I9 P3 	[μ Mo]/r: 0.428 0.390 (μs) 	[μSD μRSD]/r: 0.075μs 17.61%
    benchDeserializeJSON          I9 P0 	[μ Mo]/r: 0.596 0.549 (μs) 	[μSD μRSD]/r: 0.076μs 12.68%
    benchDeserializeJSON          I9 P1 	[μ Mo]/r: 0.563 0.554 (μs) 	[μSD μRSD]/r: 0.013μs 2.35%
    benchDeserializeJSON          I9 P2 	[μ Mo]/r: 0.608 0.590 (μs) 	[μSD μRSD]/r: 0.033μs 5.35%
    benchDeserializeJSON          I9 P3 	[μ Mo]/r: 0.705 0.621 (μs) 	[μSD μRSD]/r: 0.183μs 25.92%
    benchSerializeNative          I9 P0 	[μ Mo]/r: 0.445 0.424 (μs) 	[μSD μRSD]/r: 0.054μs 12.16%
    benchSerializeNative          I9 P1 	[μ Mo]/r: 0.432 0.431 (μs) 	[μSD μRSD]/r: 0.019μs 4.49%
    benchSerializeNative          I9 P2 	[μ Mo]/r: 0.453 0.432 (μs) 	[μSD μRSD]/r: 0.058μs 12.84%
    benchSerializeNative          I9 P3 	[μ Mo]/r: 0.447 0.418 (μs) 	[μSD μRSD]/r: 0.046μs 10.28%
    benchDeserializeNative        I9 P0 	[μ Mo]/r: 0.431 0.410 (μs) 	[μSD μRSD]/r: 0.034μs 7.87%
    benchDeserializeNative        I9 P1 	[μ Mo]/r: 0.440 0.416 (μs) 	[μSD μRSD]/r: 0.055μs 12.43%
    benchDeserializeNative        I9 P2 	[μ Mo]/r: 0.441 0.461 (μs) 	[μSD μRSD]/r: 0.024μs 5.45%
    benchDeserializeNative        I9 P3 	[μ Mo]/r: 0.446 0.416 (μs) 	[μSD μRSD]/r: 0.066μs 14.80%
    benchSerializeMsgPack         I9 P0 	[μ Mo]/r: 1.912 1.870 (μs) 	[μSD μRSD]/r: 0.109μs 5.72%
    benchSerializeMsgPack         I9 P1 	[μ Mo]/r: 1.903 1.876 (μs) 	[μSD μRSD]/r: 0.060μs 3.13%
    benchSerializeMsgPack         I9 P2 	[μ Mo]/r: 1.972 1.899 (μs) 	[μSD μRSD]/r: 0.208μs 10.52%
    benchSerializeMsgPack         I9 P3 	[μ Mo]/r: 1.942 1.877 (μs) 	[μSD μRSD]/r: 0.123μs 6.36%
    benchDeserializeMsgPack       I9 P0 	[μ Mo]/r: 1.511 1.418 (μs) 	[μSD μRSD]/r: 0.161μs 10.65%
    benchDeserializeMsgPack       I9 P1 	[μ Mo]/r: 1.520 1.455 (μs) 	[μSD μRSD]/r: 0.185μs 12.16%
    benchDeserializeMsgPack       I9 P2 	[μ Mo]/r: 1.536 1.450 (μs) 	[μSD μRSD]/r: 0.155μs 10.11%
    benchDeserializeMsgPack       I9 P3 	[μ Mo]/r: 1.582 1.452 (μs) 	[μSD μRSD]/r: 0.216μs 13.63%

\SKM\Benchmarks\Serialization\StructSerializationBench

    benchSerializeJSON            I9 P0 	[μ Mo]/r: 1.202 1.127 (μs) 	[μSD μRSD]/r: 0.188μs 15.61%
    benchSerializeJSON            I9 P1 	[μ Mo]/r: 3.080 2.993 (μs) 	[μSD μRSD]/r: 0.256μs 8.32%
    benchSerializeJSON            I9 P2 	[μ Mo]/r: 9.533 9.287 (μs) 	[μSD μRSD]/r: 0.357μs 3.74%
    benchDeserializeJSON          I9 P0 	[μ Mo]/r: 2.283 2.137 (μs) 	[μSD μRSD]/r: 0.391μs 17.10%
    benchDeserializeJSON          I9 P1 	[μ Mo]/r: 5.925 5.616 (μs) 	[μSD μRSD]/r: 0.396μs 6.68%
    benchDeserializeJSON          I9 P2 	[μ Mo]/r: 18.214 17.599 (μs) 	[μSD μRSD]/r: 0.871μs 4.78%
    benchSerializeNative          I9 P0 	[μ Mo]/r: 1.105 1.048 (μs) 	[μSD μRSD]/r: 0.124μs 11.19%
    benchSerializeNative          I9 P1 	[μ Mo]/r: 1.896 1.852 (μs) 	[μSD μRSD]/r: 0.131μs 6.89%
    benchSerializeNative          I9 P2 	[μ Mo]/r: 5.526 5.355 (μs) 	[μSD μRSD]/r: 0.408μs 7.38%
    benchDeserializeNative        I9 P0 	[μ Mo]/r: 1.335 1.234 (μs) 	[μSD μRSD]/r: 0.194μs 14.57%
    benchDeserializeNative        I9 P1 	[μ Mo]/r: 2.347 2.194 (μs) 	[μSD μRSD]/r: 0.304μs 12.94%
    benchDeserializeNative        I9 P2 	[μ Mo]/r: 6.152 5.910 (μs) 	[μSD μRSD]/r: 0.538μs 8.75%
    benchSerializeMsgPack         I9 P0 	[μ Mo]/r: 17.910 17.354 (μs) 	[μSD μRSD]/r: 0.830μs 4.64%
    benchSerializeMsgPack         I9 P1 	[μ Mo]/r: 41.704 40.849 (μs) 	[μSD μRSD]/r: 2.539μs 6.09%
    benchSerializeMsgPack         I9 P2 	[μ Mo]/r: 122.017 121.642 (μs) 	[μSD μRSD]/r: 3.134μs 2.57%
    benchDeserializeMsgPack       I9 P0 	[μ Mo]/r: 9.852 9.228 (μs) 	[μSD μRSD]/r: 0.864μs 8.77%
    benchDeserializeMsgPack       I9 P1 	[μ Mo]/r: 21.025 21.542 (μs) 	[μSD μRSD]/r: 0.819μs 3.90%
    benchDeserializeMsgPack       I9 P2 	[μ Mo]/r: 63.496 62.562 (μs) 	[μSD μRSD]/r: 3.155μs 4.97%

24 subjects, 780 iterations, 78,000 revs, 0 rejects
(best [mean mode] worst) = 0.306 [4.850 4.758] 0.393 (μs)
⅀T: 3,782.927μs μSD/r 0.256μs μRSD/r: 10.265%
```


## Conclusion

The interesting conclusion is that MsgPack (which advertises itself to be faster than JSON) is actually the slowest of all so far.


## License

The MIT License (MIT). Please see [License File](LICENSE) for more information.
