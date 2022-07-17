<?php

namespace Neputer\Supports;

/**
 * Class Utility
 * @package Neputer\Supports
 */
final class Utility
{

    /**
     * Check if given array is multidimensional
     *
     * @param $array
     * @param bool $recursive
     * @return bool
     */
    public static function isMultiArr($array, $recursive = false)
    {
        if( $recursive )
        {
            return (count($array) == count($array, COUNT_RECURSIVE)) ? false : true;
        }
        else
        {
            foreach ($array as $k => $v)
            {
                if (is_array($v))
                {
                    return true;
                }
                else
                {
                    return false;
                }
            }

        }
    }

    /**
     * @return string
     */
    public static function generateRandomNumber()
    {
        return (string) hexdec(uniqid());
    }

    /**
     * @param $rawJson
     * @return bool
     */
    public static function isJson($rawJson)
    {
//        $jsonArray = json_decode( $rawJson ); //old
//        return json_last_error() === JSON_ERROR_NONE;
        return is_string($rawJson) && is_array(json_decode($rawJson, true)) && (json_last_error() == JSON_ERROR_NONE);
    }

    /**
     * Return configuration for our custom flash
     *
     * @package Neputer/Lib/Flash.php
     * @param array $config
     * @return array
     */
    public static function flashConfig($config = [])
    {
        return array_merge([
            'closeButton'       => true,
            'closeClass'        => 'toast-close-button',
            'closeDuration'     => 300,
            'closeEasing'       => 'swing',
            'closeHtml'         => '<button><i class="icon-off"></i></button>',
            'closeMethod'       => 'fadeOut',
            'closeOnHover'      => true,
            'containerId'       => 'toast-container',
            'escapeHtml'        => false,
            'iconClass'         => 'toast-info',
            'iconClasses'       => [
                'error'   => 'toast-error',
                'info'    => 'toast-info',
                'success' => 'toast-success',
                'warning' => 'toast-warning',
            ],
            'messageClass'      => 'toast-message',
            'onHidden'          => null,
            'onShown'           => null,
            'progressClass'     => 'toast-progress',
            'rtl'               => false,
            'tapToDismiss'      => true,
            'target'            => 'body',
            'titleClass'        => 'toast-title',
            'toastClass'        => 'toast',
            'debug'             => false,
            'newestOnTop'       => false,
            'progressBar'       => false,
            'positionClass'     => 'toast-top-right',
            'preventDuplicates' => true,
            'onclick'           => null,
            'showDuration'      => '300',
            'hideDuration'      => '1000',
            'timeOut'           => '5000',
            'extendedTimeOut'   => '1000',
            'showEasing'        => 'swing',
            'hideEasing'        => 'linear',
            'showMethod'        => 'fadeIn',
            'hideMethod'        => 'fadeOut'
        ], $config);
    }

    /**
     * Replace patterns placeholder for the given content
     *
     * @param string $content
     * @param array $placeholders i.e key as pattern and value as its placeholder
     * @param array $patternWrapper
     * @return string|string[]|null
     */
    public static function resolvePatterns(string $content, array $placeholders, array $patternWrapper = [ '{', '}', ])
    {
        $patterns     = [];
        $replacements = [];

        foreach ($placeholders as $key => $value) {
            $patterns[]     = $key;
            $replacements[] = $value;
        }

        return str_replace($patternWrapper, '', preg_replace($patterns, $replacements, $content));
    }

    public static function price($price): string
    {
        return number_format((float) $price, 2, '.', '');
    }

    public static function is_decimal($num): bool
    {
        return is_numeric( $num ) && floor( $num ) != $num;
    }

    public static function jsonEncode($value)
    {
        return Utility::isJson($value) ? json_encode($value, 1) : null;
    }

}
