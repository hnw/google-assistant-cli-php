<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/assistant/embedded/v1alpha2/embedded_assistant.proto

namespace Google\Assistant\Embedded\V1alpha2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The dialog state resulting from the user's query. Multiple of these messages
 * may be received.
 *
 * Generated from protobuf message <code>google.assistant.embedded.v1alpha2.DialogStateOut</code>
 */
class DialogStateOut extends \Google\Protobuf\Internal\Message
{
    /**
     * *Output-only* Supplemental display text from the Assistant. This could be
     * the same as the speech spoken in `AssistResponse.audio_out` or it could
     * be some additional information which aids the user's understanding.
     *
     * Generated from protobuf field <code>string supplemental_display_text = 1;</code>
     */
    protected $supplemental_display_text = '';
    /**
     * *Output-only* State information for the subsequent `Assist` RPC. This
     * value should be saved in the client and returned in the
     * [`DialogStateIn.conversation_state`](#dialogstatein) field with the next
     * `Assist` RPC. (The client does not need to interpret or otherwise use this
     * value.) This information should be saved across device reboots. However,
     * this value should be cleared (not saved in the client) during a
     * factory-default reset.
     *
     * Generated from protobuf field <code>bytes conversation_state = 2;</code>
     */
    protected $conversation_state = '';
    /**
     * *Output-only* Specifies the mode of the microphone after this `Assist`
     * RPC is processed.
     *
     * Generated from protobuf field <code>.google.assistant.embedded.v1alpha2.DialogStateOut.MicrophoneMode microphone_mode = 3;</code>
     */
    protected $microphone_mode = 0;
    /**
     * *Output-only* Updated volume level. The value will be 0 or omitted
     * (indicating no change) unless a voice command such as *Increase the volume*
     * or *Set volume level 4* was recognized, in which case the value will be
     * between 1 and 100 (corresponding to the new volume level of 1% to 100%).
     * Typically, a client should use this volume level when playing the
     * `audio_out` data, and retain this value as the current volume level and
     * supply it in the `AudioOutConfig` of the next `AssistRequest`. (Some
     * clients may also implement other ways to allow the current volume level to
     * be changed, for example, by providing a knob that the user can turn.)
     *
     * Generated from protobuf field <code>int32 volume_percentage = 4;</code>
     */
    protected $volume_percentage = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $supplemental_display_text
     *           *Output-only* Supplemental display text from the Assistant. This could be
     *           the same as the speech spoken in `AssistResponse.audio_out` or it could
     *           be some additional information which aids the user's understanding.
     *     @type string $conversation_state
     *           *Output-only* State information for the subsequent `Assist` RPC. This
     *           value should be saved in the client and returned in the
     *           [`DialogStateIn.conversation_state`](#dialogstatein) field with the next
     *           `Assist` RPC. (The client does not need to interpret or otherwise use this
     *           value.) This information should be saved across device reboots. However,
     *           this value should be cleared (not saved in the client) during a
     *           factory-default reset.
     *     @type int $microphone_mode
     *           *Output-only* Specifies the mode of the microphone after this `Assist`
     *           RPC is processed.
     *     @type int $volume_percentage
     *           *Output-only* Updated volume level. The value will be 0 or omitted
     *           (indicating no change) unless a voice command such as *Increase the volume*
     *           or *Set volume level 4* was recognized, in which case the value will be
     *           between 1 and 100 (corresponding to the new volume level of 1% to 100%).
     *           Typically, a client should use this volume level when playing the
     *           `audio_out` data, and retain this value as the current volume level and
     *           supply it in the `AudioOutConfig` of the next `AssistRequest`. (Some
     *           clients may also implement other ways to allow the current volume level to
     *           be changed, for example, by providing a knob that the user can turn.)
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Assistant\Embedded\V1Alpha2\EmbeddedAssistant::initOnce();
        parent::__construct($data);
    }

    /**
     * *Output-only* Supplemental display text from the Assistant. This could be
     * the same as the speech spoken in `AssistResponse.audio_out` or it could
     * be some additional information which aids the user's understanding.
     *
     * Generated from protobuf field <code>string supplemental_display_text = 1;</code>
     * @return string
     */
    public function getSupplementalDisplayText()
    {
        return $this->supplemental_display_text;
    }

    /**
     * *Output-only* Supplemental display text from the Assistant. This could be
     * the same as the speech spoken in `AssistResponse.audio_out` or it could
     * be some additional information which aids the user's understanding.
     *
     * Generated from protobuf field <code>string supplemental_display_text = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setSupplementalDisplayText($var)
    {
        GPBUtil::checkString($var, True);
        $this->supplemental_display_text = $var;

        return $this;
    }

    /**
     * *Output-only* State information for the subsequent `Assist` RPC. This
     * value should be saved in the client and returned in the
     * [`DialogStateIn.conversation_state`](#dialogstatein) field with the next
     * `Assist` RPC. (The client does not need to interpret or otherwise use this
     * value.) This information should be saved across device reboots. However,
     * this value should be cleared (not saved in the client) during a
     * factory-default reset.
     *
     * Generated from protobuf field <code>bytes conversation_state = 2;</code>
     * @return string
     */
    public function getConversationState()
    {
        return $this->conversation_state;
    }

    /**
     * *Output-only* State information for the subsequent `Assist` RPC. This
     * value should be saved in the client and returned in the
     * [`DialogStateIn.conversation_state`](#dialogstatein) field with the next
     * `Assist` RPC. (The client does not need to interpret or otherwise use this
     * value.) This information should be saved across device reboots. However,
     * this value should be cleared (not saved in the client) during a
     * factory-default reset.
     *
     * Generated from protobuf field <code>bytes conversation_state = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setConversationState($var)
    {
        GPBUtil::checkString($var, False);
        $this->conversation_state = $var;

        return $this;
    }

    /**
     * *Output-only* Specifies the mode of the microphone after this `Assist`
     * RPC is processed.
     *
     * Generated from protobuf field <code>.google.assistant.embedded.v1alpha2.DialogStateOut.MicrophoneMode microphone_mode = 3;</code>
     * @return int
     */
    public function getMicrophoneMode()
    {
        return $this->microphone_mode;
    }

    /**
     * *Output-only* Specifies the mode of the microphone after this `Assist`
     * RPC is processed.
     *
     * Generated from protobuf field <code>.google.assistant.embedded.v1alpha2.DialogStateOut.MicrophoneMode microphone_mode = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setMicrophoneMode($var)
    {
        GPBUtil::checkEnum($var, \Google\Assistant\Embedded\V1alpha2\DialogStateOut\MicrophoneMode::class);
        $this->microphone_mode = $var;

        return $this;
    }

    /**
     * *Output-only* Updated volume level. The value will be 0 or omitted
     * (indicating no change) unless a voice command such as *Increase the volume*
     * or *Set volume level 4* was recognized, in which case the value will be
     * between 1 and 100 (corresponding to the new volume level of 1% to 100%).
     * Typically, a client should use this volume level when playing the
     * `audio_out` data, and retain this value as the current volume level and
     * supply it in the `AudioOutConfig` of the next `AssistRequest`. (Some
     * clients may also implement other ways to allow the current volume level to
     * be changed, for example, by providing a knob that the user can turn.)
     *
     * Generated from protobuf field <code>int32 volume_percentage = 4;</code>
     * @return int
     */
    public function getVolumePercentage()
    {
        return $this->volume_percentage;
    }

    /**
     * *Output-only* Updated volume level. The value will be 0 or omitted
     * (indicating no change) unless a voice command such as *Increase the volume*
     * or *Set volume level 4* was recognized, in which case the value will be
     * between 1 and 100 (corresponding to the new volume level of 1% to 100%).
     * Typically, a client should use this volume level when playing the
     * `audio_out` data, and retain this value as the current volume level and
     * supply it in the `AudioOutConfig` of the next `AssistRequest`. (Some
     * clients may also implement other ways to allow the current volume level to
     * be changed, for example, by providing a knob that the user can turn.)
     *
     * Generated from protobuf field <code>int32 volume_percentage = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setVolumePercentage($var)
    {
        GPBUtil::checkInt32($var);
        $this->volume_percentage = $var;

        return $this;
    }

}
