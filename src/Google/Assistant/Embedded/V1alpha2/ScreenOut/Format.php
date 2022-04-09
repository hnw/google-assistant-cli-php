<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/assistant/embedded/v1alpha2/embedded_assistant.proto

namespace Google\Assistant\Embedded\V1alpha2\ScreenOut;

use UnexpectedValueException;

/**
 * Possible formats of the screen data.
 *
 * Protobuf type <code>google.assistant.embedded.v1alpha2.ScreenOut.Format</code>
 */
class Format
{
    /**
     * No format specified.
     *
     * Generated from protobuf enum <code>FORMAT_UNSPECIFIED = 0;</code>
     */
    const FORMAT_UNSPECIFIED = 0;
    /**
     * Data will contain a fully-formed HTML5 layout encoded in UTF-8, e.g.
     * `<html><body><div>...</div></body></html>`. It is intended to be rendered
     * along with the audio response. Note that HTML5 doctype should be included
     * in the actual HTML data.
     *
     * Generated from protobuf enum <code>HTML = 1;</code>
     */
    const HTML = 1;

    private static $valueToName = [
        self::FORMAT_UNSPECIFIED => 'FORMAT_UNSPECIFIED',
        self::HTML => 'HTML',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Format::class, \Google\Assistant\Embedded\V1alpha2\ScreenOut_Format::class);
