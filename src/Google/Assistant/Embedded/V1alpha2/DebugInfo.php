<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/assistant/embedded/v1alpha2/embedded_assistant.proto

namespace Google\Assistant\Embedded\V1alpha2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Debug info for developer. Only returned if request set `return_debug_info`
 * to true.
 *
 * Generated from protobuf message <code>google.assistant.embedded.v1alpha2.DebugInfo</code>
 */
class DebugInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * The original JSON response from an Action-on-Google agent to Google server.
     * See
     * https://developers.google.com/actions/reference/rest/Shared.Types/AppResponse.
     * It will only be populated if the request maker owns the AoG project and the
     * AoG project is in preview mode.
     *
     * Generated from protobuf field <code>string aog_agent_to_assistant_json = 1;</code>
     */
    protected $aog_agent_to_assistant_json = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $aog_agent_to_assistant_json
     *           The original JSON response from an Action-on-Google agent to Google server.
     *           See
     *           https://developers.google.com/actions/reference/rest/Shared.Types/AppResponse.
     *           It will only be populated if the request maker owns the AoG project and the
     *           AoG project is in preview mode.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Assistant\Embedded\V1Alpha2\EmbeddedAssistant::initOnce();
        parent::__construct($data);
    }

    /**
     * The original JSON response from an Action-on-Google agent to Google server.
     * See
     * https://developers.google.com/actions/reference/rest/Shared.Types/AppResponse.
     * It will only be populated if the request maker owns the AoG project and the
     * AoG project is in preview mode.
     *
     * Generated from protobuf field <code>string aog_agent_to_assistant_json = 1;</code>
     * @return string
     */
    public function getAogAgentToAssistantJson()
    {
        return $this->aog_agent_to_assistant_json;
    }

    /**
     * The original JSON response from an Action-on-Google agent to Google server.
     * See
     * https://developers.google.com/actions/reference/rest/Shared.Types/AppResponse.
     * It will only be populated if the request maker owns the AoG project and the
     * AoG project is in preview mode.
     *
     * Generated from protobuf field <code>string aog_agent_to_assistant_json = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setAogAgentToAssistantJson($var)
    {
        GPBUtil::checkString($var, True);
        $this->aog_agent_to_assistant_json = $var;

        return $this;
    }

}

