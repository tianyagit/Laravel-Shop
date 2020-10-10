<?php

return [
    'alipay' => [
        'app_id'         => '2016092800616163',
        'ali_public_key' => 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEA4J0/no0V5fgoXsyfHU295abU9fsrb/5l653R/R6rwNATzz/62GqBQfxnqtQ9yaYrf80rr3JoEtAZr9gpmje8KaaUTho1lhOi7WTo1qLTvC3oDMp+z1z1piBSd+ze4fQmg2h+BiA3UGQcG1JgC+m969ob9oqwhYUJJMhsKbnOkwuHolJzFho2C1lQUFSQiUj1xbs0Vn3WT+GGoBuoxdAy7xno8aa21UHP7ITIKsPtwfSPfYflIw70G/+wi+fpETSK71KXbZigKId1LFVJ8FkOjFgpIn//pKL4G/3mU6EfP2YIbrXwStUKPbjzjRI6kdwmAg1W9xXtRYIexe2yOpRsMQIDAQAB',
        'private_key'    => 'MIIEpAIBAAKCAQEAwXshS0FFdJrK8lmRH9F+72NT5qMzVQ7kEh7bbSjA0fB0MKuQ+90SajO5+qc8BFhRrd1r+7DStsZZvFfYLZEVnHGCKBbkNdGOXRelbHtmNFPDQUZJY0ibtjx8PRY65p8o8oD02LQ4YhwtyoT1Swa8io1v6y4F/ePlsFohKNU5D5wbAX8iKH2ITjxFxv+LYKBONF4sOTsawWzmLR+QsOShnghqlZDDqRPSODUyzI/PHJbofF/Xm9EctjAgdh25MiFDqrKF9sE0M9nu0PbR7tTFWZ1j+WBYfHPcq2w15HU3ARNZ7WYYtnridXoS6Pe/jbJd12x2gCK4M6k9jDIIC+14RQIDAQABAoIBAQCIV+Oba5CtXhOb+uAY4wGnYoCSa/lVfFveJR6N6wUOLHtEfPJ7ektqya7KYqUZjr9oXTumLvIeWOKNpf2yBqaLCzYkWBVTk6vWED7DlqXsRAa5bfVzYIxSPId0aMDzGb+6PIPOXhnJkX/3UgClcUbWAFuZCGKyirGmt6zcYH2IcEYQKOtUrUcwZOqCKxSijhNytkIY35gN9Pkb/q4rH2gaIzWqez7PRc26yjT6n4QT8GnG1ccK4QkYUv94efe343P9IgBYAkOVT2hv8RnIoHh1jchfohdJTkAseg2N6ItpMpRwumpL0ILtijqFEtTj6jqtFdQ4WzAF3yRme+YCde2BAoGBAP1HJni7TtlBAX0NuvEyP5KMqICZhbXo6GYbCbZTxArkK7G/i5gDZaldqCDKHOResiXQcUUZVSFXGipfJ1D3tknd6+7wzww3Shhq/bINy9Cm/tXg4IV6qALPVlHNKN2uSk2kzuBcatpdRBx8qwhOroIyd1bwvx5T2zlJcIA2XCElAoGBAMOPdX6hRKKuX9ih0ppFmYt/TTXkT/+uEV+4jaalquJLALFVEIKcbOTzwwBHJeyOskTyGYspT5vpHC6OJ5+zDvF7Xm5kSvLpwm5txPcBWD1AiLzRFYpAMsHZJXj/TSPLYetd1TnQXa0ZAhVyS6Ep4NmAwgIQXBDYzBpNbjKM+CChAoGAFGLUsuUIrK3xy7n+MQnFWiteKLOysnijtAw7FOTbI7FH3w+20a58UUyLitAZ0TvaBPcpFtG6K2vSXFS6WmcF0h49rkbNs4MDwMFj2CAKJqo6Wsa166h6u3cq0Hy97FHqAyPfzulBZIAbSluyfIGwxCQBvQq1p2BChfLmTjuR4M0CgYBD90L1jKTnCUWEa9FfDptrsQWrmjr3eI7PPrv0VBWM6lZGS3MegbES7WkzWobirUFl1uJrzCK/5AeIYp2A0mF6Kc9K/I5T2ExbxsiytAPv3dLoFJ6w2tkJKCfu4oPz0capX4Ywvqsf8tYXkA6a54we67IBt5/XtxFQfuKyrO27oQKBgQCyKCLV0D5LJieJz+yDfiL56Oby6ik/7vpMcdoka/n5CJielvwSP91IIbAlDhDnPeZSePMopuLxpHbrZyQOko2MqoixgjI5svRMf9lC0VdDOWCiQvzJ/hNf+YhjeN5bbnjNwf+XvhOzGAUDjbKj4jb2mI6oGivWf+lPxF99WhSltg==',
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
