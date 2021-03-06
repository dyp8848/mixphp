<?php

/**
 * PhoneValidator类
 * @author 刘健 <coder.liu@qq.com>
 */

namespace mix\validator;

class PhoneValidator extends BaseValidator
{

    // 允许的功能集合
    protected $allowActions = ['type'];

    // 类型验证
    protected function type()
    {
        $value = $this->attributeValue;
        if (!preg_match('/^1[34578]\d{9}$/i', $value)) {
            if (is_null($this->attributeMessage)) {
                $error = "{$this->attributeLabel}不符合手机号格式.";
            } else {
                $error = $this->attributeMessage;
            }
            $this->errors[] = $error;
            return false;
        }
        return true;
    }

}
