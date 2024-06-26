<?php

namespace Differ\Parsers;

use Symfony\Component\Yaml\Yaml;

function convert(string $currentData, string $format)
{
    switch ($format) {
        case "json":
            return json_decode($currentData);
        case "yml":
        case "yaml":
            return Yaml::parse($currentData, Yaml::PARSE_OBJECT_FOR_MAP);
        default:
            throw new \Exception("Wrong file extension: {$format}");
    }
}
