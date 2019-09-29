<?php

return [
    'alipay' => [
        'app_id'         => '2016091500517651',
        'ali_public_key' => 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAqLyAXyIC42ETaLd8IrNXI3buQLpGrOEGKDmSro0teaS1mIAE2in7x9vJxKXEIagtPEcN5QWVWFO5TOEaLTTovFNBQT698CNsMN7C899edirXmOfUis4qXuoEueljJnZwQ3JdSP/cZt67rL3qtMPd49TJ/+WXzcvJWgqbjRWB9lfGr2/E4ne8CJutJcojC9QjWRp6ow6ZHpmLAzGYWcF3q4OZzEvufgeM79xe7e+VLLzy6AYkV6xdupDqFdVkSt8csOkFMQNb1BLbll+fyicsIXnmiBn/m1+Z8edroVkXBmdWnHYAVNY5VkBocFCXYcdVdH5wqa+BE5b+uR+k/FpSbwIDAQAB',

        'private_key'    => 'MIIEpAIBAAKCAQEArJkCp310SOTkgxxm38OhRnSe/V4NBqABkGOdbZmOXBxkZtkQyVecua8DB+G7u8y+hXHL+Of+B9ZuYFFdmiLtkg/lGUtHF6o9Uw6oRx7rIAsz3wSSov8iLdLdZt8IionSxNrkTSfTFl83VfdHVvjR/m/+2AwtiyVwP9MsC2KIcApcfXgqeAIpGbk5xcLPF7nNYSgJFWkBa3vCjzdrVnWIYDSe7Y2Ghcf5L810NC043FF+zu4ql90/gLyfsFT8he6GSAu/8FPYTUj05C9glA12C1mUm3Jq4owGJAH/wXiTC4hqUT+RwLbdceXmqBu2wcXIKfk3zkrDyKeeXSUEbLZcnQIDAQABAoIBAQCZul8G11Kvak+uB6oJO7F1k4HYoeBwOiuqc09QwyhtGkzC3it5abOKHztP1drkVmSLbuQB+n/kczU0TMRV+S4onker08Sqa1Lbm35+eidqDxBQXz5MN3o13k6cxaJR4pf8Bgq6PfJhRsV+qBS+fjhrq00NGSund90Wu/vK2CQ1xUu1c+YKU2pl0HjBj5P7SXfIi5JFbZ74FufoU9GuiXdjetiqJ4moDHraXNwl1P5EHzjuXaQ69eN/ihfhPL83yDcG+mMNMBC/2x+ALa981m6F94TCgn9X89dfakij6dbp7QQGohsFrw/L/+i/BIf5QldP6rE9Zpu+NyLIDiQP1caBAoGBAOyEnFiMe5Rw8JpnCDaTfsjFeMbLeCO4buT78CYBp6V4GnETjagrpBgh6qqTMQ35Q4GxcKFUl0L9pAi1X6hRcQ8xKsdharq5+sZCYXffFgaPWKz96xSIIyGuMxpW/nhz1j5+C8OlqK3+2qGVLO+mJkilRJL9ZPnqw8Cun0EH4Ld1AoGBALrQh6KQCMvyyJf+QqZc10ZHbhfZSEwACWjeC+FPbCFWOarkJ+JaiMWR6cav+p+TZ4oUvitjrtP7d3+C28jp/SnVxZPz9c7TpwVf8amTzXDwTWnyygs+B3+g1UOOx4ZXMSLqNX/dyY1OhYD4I7VYzTq0yAF+UzJz1QU+dLqULJOJAoGAWtRSdm78xnTY8XK/5LWf6tprF2zsJkudyrI192KLTzBgdyxbKkoYKmxcAkWkgQlIs3XBGzOxIzjk1bNRmQItuPfYxdjTdAIYHCtB4xb5DmveUhDxRmFBnJ2ZYnQmJXvWuwkM24Wy0Z8dtw/iweW8rglJ3GkTbiaKJmTpI8AyvEECgYA5RFdv0+t+aaxoO38+9FLhrl/nW6o38gLwbLEDno8tIPuIkWxQjSREPFiHmcagSFWDFJy/PE2Jmhqlsf2h92it/GQW2MBPaL5YfXLdYvulVWTFx7F8BMXTr//wN8KeQfhEFbvUuK5ibOGsCWUY4GH5TxXIr2rdmniApQavc2C+0QKBgQDYFfNt4ooNzuaiPwLbAx4dgpbygYMkMAYdQXfzxZ3bkxiWHaKaS/vNexMueZo5gAnYhyPS/MM5qyFfAAyewFmO7oyvdY/m/f1rQlTCjQb12aah5UnGYlarvJgyrZ3ZIyP6v83MIDuUmXPBO3gnKWwh/cjqWuPTUR0nkOyjzFggAQ==',

        'log'            => [
            'file' => storage_path('logs/alipay.log'),
        ],
    ],

    'wechat' => [
        'app_id'      => '',
        'mch_id'      => '',
        'key'         => '',
        'cert_client' => '',
        'cert_key'    => '',
        'log'         => [
            'file' => storage_path('logs/wechat_pay.log'),
        ],
    ],
];