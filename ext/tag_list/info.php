<?php

declare(strict_types=1);

class TagListInfo extends ExtensionInfo
{
    public const KEY = "tag_list";

    public string $key = self::KEY;
    public string $name = "Tag List";
    public string $url = self::SHIMMIE_URL;
    public array $authors = self::SHISH_AUTHOR;
    public string $description = "Show the tags in various ways";
    public bool $core = true;
    public string $visibility = self::VISIBLE_HIDDEN;
}
