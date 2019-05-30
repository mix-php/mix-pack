<?php

namespace Phar\Models;

use Mix\Validate\Validator;

/**
 * Class BuildForm
 * @package Phar\Models
 * @author liu,jian <coder.keda@gmail.com>
 */
class BuildForm extends Validator
{

    /**
     * @var string
     */
    public $dir;

    /**
     * @var string
     */
    public $output;

    /**
     * @var string
     */
    public $bootstrap;

    /**
     * @var string
     */
    public $regex;

    /**
     * 规则
     * @return array
     */
    public function rules()
    {
        return [
            'dir'       => ['string', 'filter' => ['trim']],
            'output'    => ['string', 'filter' => ['trim']],
            'bootstrap' => ['string', 'filter' => ['trim']],
            'regex'     => ['string', 'filter' => ['trim']],
        ];
    }

    /**
     * 场景
     * @return array
     */
    public function scenarios()
    {
        return [
            'main' => ['required' => ['dir', 'output'], 'optional' => ['bootstrap', 'regex']],
        ];
    }

    /**
     * 消息
     * @return array
     */
    public function messages()
    {
        return [
            'dir.required'    => '\'-d/--dir\' option cannot be empty.',
            'output.required' => '\'-o/--output\' option cannot be empty.',
        ];
    }

}
