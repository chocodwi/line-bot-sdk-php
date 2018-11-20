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

namespace LINE\LINEBot\EchoBot;

class Setting
{
    public static function getSetting()
    {
        return [
            'settings' => [
                'displayErrorDetails' => true, // set to false in production

                'logger' => [
                    'name' => 'slim-app',
                    'path' => __DIR__ . '/../../../logs/app.log',
                ],

                'bot' => [
                    'channelToken' => getenv('Cs/227AukA2Td+/uh8K/zC27vEKg1HQY+WJpBgmIhuq4xW9cjoybbG3moPnE8jTmB8a0LF6kexU9tWfVud7oybjq1H4ylbgM0sfM25eXxQOxKpKADft+RfdK/P08hUkvLMpBIJmIP6SnXHYw8ylBtgdB04t89/1O/w1cDnyilFU=') ?: '<your channel token>',
                    'channelSecret' => getenv('69d53a2f09c0c4dff2030139b62c8be8') ?: '<your channel secret>',
                ],

                'apiEndpointBase' => getenv('LINEBOT_API_ENDPOINT_BASE'),
            ],
        ];
    }
}
