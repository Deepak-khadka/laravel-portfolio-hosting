<?php

namespace App\Foundation\Lib;
final class Pages {

    public const ABOUT_US = "/";
    public const SKILLS = "skills";
    public const SERVICES  = "service";
    public const EXPERIENCE  = "experience";
    public const EDUCATION = "education";
    public const BLOGS = "blogs";
    public const CONTACT = "contact";

    public static array $current = [
        self::ABOUT_US => true,
        self::SKILLS => true,
        self::SERVICES => true,
        self::EXPERIENCE => true,
        self::EDUCATION => true,
        self::BLOGS => true,
        self::CONTACT => true,
    ];
}