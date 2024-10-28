<?php

namespace Rayhan\Slug;

class SlugGenerator
{
    public function createSlug($string)
    {
        // Basic slug generation logic
        return strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $string), '-'));
    }
}
