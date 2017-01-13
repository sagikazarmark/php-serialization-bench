<?php

namespace SKM\Benchmarks\Serialization;

/**
 * @author Márk Sági-Kazár <mark.sagikazar@gmail.com>
 */
final class StructSerializationBench extends SerializationBench
{
    public function dataProvider()
    {
        return [
            [
                'meta' => [
                    'status_code' => 200,
                    'status' => 'OK',
                    'message' => '',
                    'more_info' => [
                    ],
                ],
            ],
            [
                'meta' => [
                    'status_code' => 200,
                    'status' => 'OK',
                    'message' => '',
                    'more_info' => [
                    ],
                ],
                'data' => [
                    'id' => 4,
                    'first_name' => 'Test',
                    'last_name' => 'User',
                    'access_level' => 100,
                    'created_at' => 'Mon, 26 Aug 2013 20:54:29 +0000',
                    'updated_at' => 'Mon, 26 Aug 2013 20:54:29 +0000',
                ],
            ],
            [
                'meta' => [
                    'status_code' => 200,
                    'status' => 'OK',
                    'message' => '',
                    'more_info' => [],
                ],
                'data' => [
                    [
                        'id' => 4,
                        'first_name' => 'Test',
                        'last_name' => 'User',
                        'access_level' => 100,
                        'created_at' => 'Mon, 26 Aug 2013 20:54:29 +0000',
                        'updated_at' => 'Mon, 26 Aug 2013 20:54:29 +0000',
                    ],
                    [
                        'id' => 3,
                        'first_name' => 'Testing',
                        'last_name' => 'Suarez',
                        'access_level' => 100,
                        'created_at' => 'Mon, 12 Aug 2013 14:12:48 +0000',
                        'updated_at' => 'Mon, 12 Aug 2013 14:13:53 +0000',
                    ],
                    [
                        'id' => 2,
                        'first_name' => 'Jake',
                        'last_name' => 'Suarez',
                        'access_level' => 100,
                        'created_at' => 'Mon, 12 Aug 2013 14:12:44 +0000',
                        'updated_at' => 'Mon, 12 Aug 2013 14:13:53 +0000',
                    ],
                    [
                        'id' => 1,
                        'first_name' => 'Trevor',
                        'last_name' => 'Suarez',
                        'access_level' => 1000,
                        'created_at' => 'Mon, 12 Aug 2013 14:12:40 +0000',
                        'updated_at' => 'Thu, 29 Aug 2013 16:18:41 +0000',
                    ],
                ],
                'paging' => [
                    'page' => 1,
                    'per_page' => 10,
                    'order_descending' => true,
                    'resources' => [],
                ],
            ],
        ];
    }
}
