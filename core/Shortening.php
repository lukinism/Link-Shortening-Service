<?php

namespace Shortening;

class пShortening
{
    static function shortLinks(string $links) : array
    {
        return [];
    }

    static function buildShortLinks(string $url, int $length = 5) : string
    {
        $stringPattern = 'QWERTYUIOPASDFGHJKLZXCVBNMqwertyuiopasdfghjklzxcvbnm1234567890';
        $shortLinks = '';
        for ($i =0; $i <= $length; $i++){
            $shortLinks .= $stringPattern[rand(0, strlen($stringPattern) - 1)];
        }
        return $shortLinks;
    }
}