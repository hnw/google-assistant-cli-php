<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/assistant/embedded/v1alpha2/embedded_assistant.proto

namespace Google\Assistant\Embedded\V1alpha2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Specifies how to process the `audio_in` data that will be provided in
 * subsequent requests. For recommended settings, see the Google Assistant SDK
 * [best
 * practices](https://developers.google.com/assistant/sdk/guides/service/python/best-practices/audio).
 *
 * Generated from protobuf message <code>google.assistant.embedded.v1alpha2.AudioInConfig</code>
 */
class AudioInConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * *Required* Encoding of audio data sent in all `audio_in` messages.
     *
     * Generated from protobuf field <code>.google.assistant.embedded.v1alpha2.AudioInConfig.Encoding encoding = 1;</code>
     */
    protected $encoding = 0;
    /**
     * *Required* Sample rate (in Hertz) of the audio data sent in all `audio_in`
     * messages. Valid values are from 16000-24000, but 16000 is optimal.
     * For best results, set the sampling rate of the audio source to 16000 Hz.
     * If that's not possible, use the native sample rate of the audio source
     * (instead of re-sampling).
     *
     * Generated from protobuf field <code>int32 sample_rate_hertz = 2;</code>
     */
    protected $sample_rate_hertz = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $encoding
     *           *Required* Encoding of audio data sent in all `audio_in` messages.
     *     @type int $sample_rate_hertz
     *           *Required* Sample rate (in Hertz) of the audio data sent in all `audio_in`
     *           messages. Valid values are from 16000-24000, but 16000 is optimal.
     *           For best results, set the sampling rate of the audio source to 16000 Hz.
     *           If that's not possible, use the native sample rate of the audio source
     *           (instead of re-sampling).
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Assistant\Embedded\V1Alpha2\EmbeddedAssistant::initOnce();
        parent::__construct($data);
    }

    /**
     * *Required* Encoding of audio data sent in all `audio_in` messages.
     *
     * Generated from protobuf field <code>.google.assistant.embedded.v1alpha2.AudioInConfig.Encoding encoding = 1;</code>
     * @return int
     */
    public function getEncoding()
    {
        return $this->encoding;
    }

    /**
     * *Required* Encoding of audio data sent in all `audio_in` messages.
     *
     * Generated from protobuf field <code>.google.assistant.embedded.v1alpha2.AudioInConfig.Encoding encoding = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setEncoding($var)
    {
        GPBUtil::checkEnum($var, \Google\Assistant\Embedded\V1alpha2\AudioInConfig\Encoding::class);
        $this->encoding = $var;

        return $this;
    }

    /**
     * *Required* Sample rate (in Hertz) of the audio data sent in all `audio_in`
     * messages. Valid values are from 16000-24000, but 16000 is optimal.
     * For best results, set the sampling rate of the audio source to 16000 Hz.
     * If that's not possible, use the native sample rate of the audio source
     * (instead of re-sampling).
     *
     * Generated from protobuf field <code>int32 sample_rate_hertz = 2;</code>
     * @return int
     */
    public function getSampleRateHertz()
    {
        return $this->sample_rate_hertz;
    }

    /**
     * *Required* Sample rate (in Hertz) of the audio data sent in all `audio_in`
     * messages. Valid values are from 16000-24000, but 16000 is optimal.
     * For best results, set the sampling rate of the audio source to 16000 Hz.
     * If that's not possible, use the native sample rate of the audio source
     * (instead of re-sampling).
     *
     * Generated from protobuf field <code>int32 sample_rate_hertz = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setSampleRateHertz($var)
    {
        GPBUtil::checkInt32($var);
        $this->sample_rate_hertz = $var;

        return $this;
    }

}

