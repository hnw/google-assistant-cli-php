<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/api/endpoint.proto

namespace Google\Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * `Endpoint` describes a network endpoint of a service that serves a set of
 * APIs. It is commonly known as a service endpoint. A service may expose
 * any number of service endpoints, and all service endpoints share the same
 * service definition, such as quota limits and monitoring metrics.
 * Example service configuration:
 *     name: library-example.googleapis.com
 *     endpoints:
 *       # Below entry makes 'google.example.library.v1.Library'
 *       # API be served from endpoint address library-example.googleapis.com.
 *       # It also allows HTTP OPTIONS calls to be passed to the backend, for
 *       # it to decide whether the subsequent cross-origin request is
 *       # allowed to proceed.
 *     - name: library-example.googleapis.com
 *       allow_cors: true
 *
 * Generated from protobuf message <code>google.api.Endpoint</code>
 */
class Endpoint extends \Google\Protobuf\Internal\Message
{
    /**
     * The canonical name of this endpoint.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    protected $name = '';
    /**
     * Unimplemented. Dot not use.
     * DEPRECATED: This field is no longer supported. Instead of using aliases,
     * please specify multiple [google.api.Endpoint][google.api.Endpoint] for each of the intended
     * aliases.
     * Additional names that this endpoint will be hosted on.
     *
     * Generated from protobuf field <code>repeated string aliases = 2 [deprecated = true];</code>
     * @deprecated
     */
    private $aliases;
    /**
     * The specification of an Internet routable address of API frontend that will
     * handle requests to this [API
     * Endpoint](https://cloud.google.com/apis/design/glossary). It should be
     * either a valid IPv4 address or a fully-qualified domain name. For example,
     * "8.8.8.8" or "myservice.appspot.com".
     *
     * Generated from protobuf field <code>string target = 101;</code>
     */
    protected $target = '';
    /**
     * Allowing
     * [CORS](https://en.wikipedia.org/wiki/Cross-origin_resource_sharing), aka
     * cross-domain traffic, would allow the backends served from this endpoint to
     * receive and respond to HTTP OPTIONS requests. The response will be used by
     * the browser to determine whether the subsequent cross-origin request is
     * allowed to proceed.
     *
     * Generated from protobuf field <code>bool allow_cors = 5;</code>
     */
    protected $allow_cors = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           The canonical name of this endpoint.
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $aliases
     *           Unimplemented. Dot not use.
     *           DEPRECATED: This field is no longer supported. Instead of using aliases,
     *           please specify multiple [google.api.Endpoint][google.api.Endpoint] for each of the intended
     *           aliases.
     *           Additional names that this endpoint will be hosted on.
     *     @type string $target
     *           The specification of an Internet routable address of API frontend that will
     *           handle requests to this [API
     *           Endpoint](https://cloud.google.com/apis/design/glossary). It should be
     *           either a valid IPv4 address or a fully-qualified domain name. For example,
     *           "8.8.8.8" or "myservice.appspot.com".
     *     @type bool $allow_cors
     *           Allowing
     *           [CORS](https://en.wikipedia.org/wiki/Cross-origin_resource_sharing), aka
     *           cross-domain traffic, would allow the backends served from this endpoint to
     *           receive and respond to HTTP OPTIONS requests. The response will be used by
     *           the browser to determine whether the subsequent cross-origin request is
     *           allowed to proceed.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Api\Endpoint::initOnce();
        parent::__construct($data);
    }

    /**
     * The canonical name of this endpoint.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * The canonical name of this endpoint.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Unimplemented. Dot not use.
     * DEPRECATED: This field is no longer supported. Instead of using aliases,
     * please specify multiple [google.api.Endpoint][google.api.Endpoint] for each of the intended
     * aliases.
     * Additional names that this endpoint will be hosted on.
     *
     * Generated from protobuf field <code>repeated string aliases = 2 [deprecated = true];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     * @deprecated
     */
    public function getAliases()
    {
        @trigger_error('aliases is deprecated.', E_USER_DEPRECATED);
        return $this->aliases;
    }

    /**
     * Unimplemented. Dot not use.
     * DEPRECATED: This field is no longer supported. Instead of using aliases,
     * please specify multiple [google.api.Endpoint][google.api.Endpoint] for each of the intended
     * aliases.
     * Additional names that this endpoint will be hosted on.
     *
     * Generated from protobuf field <code>repeated string aliases = 2 [deprecated = true];</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     * @deprecated
     */
    public function setAliases($var)
    {
        @trigger_error('aliases is deprecated.', E_USER_DEPRECATED);
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->aliases = $arr;

        return $this;
    }

    /**
     * The specification of an Internet routable address of API frontend that will
     * handle requests to this [API
     * Endpoint](https://cloud.google.com/apis/design/glossary). It should be
     * either a valid IPv4 address or a fully-qualified domain name. For example,
     * "8.8.8.8" or "myservice.appspot.com".
     *
     * Generated from protobuf field <code>string target = 101;</code>
     * @return string
     */
    public function getTarget()
    {
        return $this->target;
    }

    /**
     * The specification of an Internet routable address of API frontend that will
     * handle requests to this [API
     * Endpoint](https://cloud.google.com/apis/design/glossary). It should be
     * either a valid IPv4 address or a fully-qualified domain name. For example,
     * "8.8.8.8" or "myservice.appspot.com".
     *
     * Generated from protobuf field <code>string target = 101;</code>
     * @param string $var
     * @return $this
     */
    public function setTarget($var)
    {
        GPBUtil::checkString($var, True);
        $this->target = $var;

        return $this;
    }

    /**
     * Allowing
     * [CORS](https://en.wikipedia.org/wiki/Cross-origin_resource_sharing), aka
     * cross-domain traffic, would allow the backends served from this endpoint to
     * receive and respond to HTTP OPTIONS requests. The response will be used by
     * the browser to determine whether the subsequent cross-origin request is
     * allowed to proceed.
     *
     * Generated from protobuf field <code>bool allow_cors = 5;</code>
     * @return bool
     */
    public function getAllowCors()
    {
        return $this->allow_cors;
    }

    /**
     * Allowing
     * [CORS](https://en.wikipedia.org/wiki/Cross-origin_resource_sharing), aka
     * cross-domain traffic, would allow the backends served from this endpoint to
     * receive and respond to HTTP OPTIONS requests. The response will be used by
     * the browser to determine whether the subsequent cross-origin request is
     * allowed to proceed.
     *
     * Generated from protobuf field <code>bool allow_cors = 5;</code>
     * @param bool $var
     * @return $this
     */
    public function setAllowCors($var)
    {
        GPBUtil::checkBool($var);
        $this->allow_cors = $var;

        return $this;
    }

}

