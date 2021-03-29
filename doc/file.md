## 常量定义

composer.json

```
"autoload": {
    "files": [
        "app/helpers.php",
        "app/common/constants.php"    //引入常量文件
    ]
}
```

constants.php

```
<?php
define('LAUNDRY', 'laundry');
define('COFFEE', 'coffee');
define('RETAIL', 'retail');
define('VENDING', 'vending');
define('INTEGRATION', 'integration');

define('ADMIN', 'admin');
define('SUPER-ADMIN', 'superAdmin');
define('CUSTOMER', 'customer');

```

使用

```
echo(SUPER-ADMIN);   //'superAdmin'
```

常量作用全局，即整个项目都可以使用，类常量表示该常量仅作用明确的类

类常量比较多且复杂时尽量写注释方便别人理解

```
const TYPE_REGULAR = 1;
const TYPE_SINGLE = 2;
```


## 全局方法

app\helpers.php

```
function respondWithToken($token, $data = [])
{
    $response = [
        'status_code' => ResponseCode::HTTP_OK,
        'access_token' => $token,
        'token_type' => 'bearer',
        'expires_in' => auth('api')->factory()->getTTL() * 60,
    ];
    if(!empty($data)) $response['data'] = $data;

    return response()->json($response);
}
```
