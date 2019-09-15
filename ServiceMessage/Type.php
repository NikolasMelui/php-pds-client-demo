<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: service.proto

namespace ServiceMessage;

use UnexpectedValueException;

/**
 * Protobuf type <code>ServiceMessage.Type</code>
 */
class Type
{
    /**
     * Generated from protobuf enum <code>GET_TASK = 0;</code>
     */
    const GET_TASK = 0;
    /**
     * Generated from protobuf enum <code>INIT_RESPONSE = 1;</code>
     */
    const INIT_RESPONSE = 1;

    private static $valueToName = [
        self::GET_TASK => 'GET_TASK',
        self::INIT_RESPONSE => 'INIT_RESPONSE',
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
class_alias(Type::class, \ServiceMessage_Type::class);
