<?php
namespace app\common\validate;

use think\Validate;

class Promoter extends Validate
{
    protected $rule = [
        "username|账户" => "require",
    ];
}
