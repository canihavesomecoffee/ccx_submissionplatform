<?php
namespace org\ccextractor\submissionplatform\objects;

/**
 * Class NoticeType represents the possible types of an notice
 *
 * @package org\ccextractor\submissionplatform\objects
 */
class NoticeType extends BasicEnum
{
    // Default is error.
    const __default = 1;
    // Error notice
    const ERROR = 1;
    // Warning notice
    const WARNING = 2;
    // Success notice
    const SUCCESS = 3;
    // Information notice
    const INFORMATION = 4;

    // Static fields for shortcut usage instead of constructor.
    private static $success = null;
    private static $warning = null;
    private static $error = null;
    private static $information = null;

    /**
     * NoticeType constructor.
     */
    public function __construct($enumValue)
    {
        parent::__construct($enumValue, NoticeType::__default);
    }


    /**
     * Gets the Success instance of this Enum.
     *
     * @return NoticeType
     */
    public static function getSuccess()
    {
        if (self::$success === null) {
            self::$success = new NoticeType(NoticeType::SUCCESS);
        }

        return self::$success;
    }

    /**
     * Gets the Warning instance of this Enum.
     *
     * @return NoticeType
     */
    public static function getWarning()
    {
        if (self::$warning === null) {
            self::$warning = new NoticeType(NoticeType::WARNING);
        }

        return self::$warning;
    }

    /**
     * Gets the Error instance of this Enum.
     *
     * @return NoticeType
     */
    public static function getError()
    {
        if (self::$error === null) {
            self::$error = new NoticeType(NoticeType::ERROR);
        }

        return self::$error;
    }

    /**
     * Gets the Information instance of this Enum.
     *
     * @return NoticeType
     */
    public static function getInformation()
    {
        if (self::$information === null) {
            self::$information = new NoticeType(NoticeType::INFORMATION);
        }

        return self::$information;
    }
}