<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/api/system_parameter.proto

namespace Google\Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Define a system parameter rule mapping system parameter definitions to
 * methods.
 *
 * Generated from protobuf message <code>google.api.SystemParameterRule</code>
 */
class SystemParameterRule extends \Google\Protobuf\Internal\Message
{
    /**
     * Selects the methods to which this rule applies. Use '*' to indicate all
     * methods in all APIs.
     * Refer to [selector][google.api.DocumentationRule.selector] for syntax details.
     *
     * Generated from protobuf field <code>string selector = 1;</code>
     */
    protected $selector = '';
    /**
     * Define parameters. Multiple names may be defined for a parameter.
     * For a given method call, only one of them should be used. If multiple
     * names are used the behavior is implementation-dependent.
     * If none of the specified names are present the behavior is
     * parameter-dependent.
     *
     * Generated from protobuf field <code>repeated .google.api.SystemParameter parameters = 2;</code>
     */
    private $parameters;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $selector
     *           Selects the methods to which this rule applies. Use '*' to indicate all
     *           methods in all APIs.
     *           Refer to [selector][google.api.DocumentationRule.selector] for syntax details.
     *     @type \Google\Api\SystemParameter[]|\Google\Protobuf\Internal\RepeatedField $parameters
     *           Define parameters. Multiple names may be defined for a parameter.
     *           For a given method call, only one of them should be used. If multiple
     *           names are used the behavior is implementation-dependent.
     *           If none of the specified names are present the behavior is
     *           parameter-dependent.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Api\SystemParameter::initOnce();
        parent::__construct($data);
    }

    /**
     * Selects the methods to which this rule applies. Use '*' to indicate all
     * methods in all APIs.
     * Refer to [selector][google.api.DocumentationRule.selector] for syntax details.
     *
     * Generated from protobuf field <code>string selector = 1;</code>
     * @return string
     */
    public function getSelector()
    {
        return $this->selector;
    }

    /**
     * Selects the methods to which this rule applies. Use '*' to indicate all
     * methods in all APIs.
     * Refer to [selector][google.api.DocumentationRule.selector] for syntax details.
     *
     * Generated from protobuf field <code>string selector = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setSelector($var)
    {
        GPBUtil::checkString($var, True);
        $this->selector = $var;

        return $this;
    }

    /**
     * Define parameters. Multiple names may be defined for a parameter.
     * For a given method call, only one of them should be used. If multiple
     * names are used the behavior is implementation-dependent.
     * If none of the specified names are present the behavior is
     * parameter-dependent.
     *
     * Generated from protobuf field <code>repeated .google.api.SystemParameter parameters = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * Define parameters. Multiple names may be defined for a parameter.
     * For a given method call, only one of them should be used. If multiple
     * names are used the behavior is implementation-dependent.
     * If none of the specified names are present the behavior is
     * parameter-dependent.
     *
     * Generated from protobuf field <code>repeated .google.api.SystemParameter parameters = 2;</code>
     * @param \Google\Api\SystemParameter[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setParameters($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Api\SystemParameter::class);
        $this->parameters = $arr;

        return $this;
    }

}

