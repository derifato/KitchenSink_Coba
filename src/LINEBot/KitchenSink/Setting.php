<?php

/**
 * Copyright 2016 LINE Corporation
 *
 * LINE Corporation licenses this file to you under the Apache License,
 * version 2.0 (the "License"); you may not use this file except in compliance
 * with the License. You may obtain a copy of the License at:
 *
 *   https://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations
 * under the License.
 */

namespace LINE\LINEBot\KitchenSink;

class Setting
{
    public static function getSetting()
    {
        return [
            'settings' => [
                'displayErrorDetails' => false, // set to false in production

                'logger' => [
                    'name' => 'slim-app',
                    'path' => __DIR__ . '/../../../logs/app.log',
                ],

                'bot' => [
                    'channelToken' => '7m9OLMT0YxSa6ULTnZbAohocUTYo09b+6xVAPyUPevtJHM1OwLlBolqnTxWHVBtGbra8hq2RBtWtgm+EI61TrpQuIM4C/jmb3mCGY7/UQhOGZHJuUJVzUAPPCAGIZmc/BeBfkB9XPqOSzxxQsVaShQdB04t89/1O/w1cDnyilFU=' ,
                    'channelSecret' => 'f013201576755f5a089aab94d219f535',
                ]

                //'apiEndpointBase' => getenv('LINEBOT_API_ENDPOINT_BASE'),
            ],
        ];
    }
}
