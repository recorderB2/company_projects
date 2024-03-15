<?php

namespace App\Helpers;

use Illuminate\Support\Facades\DB;

class helper
{
    public static function slug($title)
    {
        $string = preg_replace("/[^a-z0-9_\s\-۰۱۲۳۴۵۶۷۸۹يءاأإآؤئبپتثجچحخدذرزژسشصضطظعغفقکكگگلمنوهی]/u", '', strtolower($title));
        $string = preg_replace("/[\s\-_]+/", ' ', $string);
        $string = preg_replace("/[\s_]/", '-', $string);
        return $string;
    }
    public static function uniqueSlug($slug, $table)
    {
        $slug = trim($slug);
        $items = DB::table($table)
            ->select('slug')
            ->whereRaw("slug like '$slug%'")
            ->get();
        if (sizeof($items)) {
            foreach ($items as $item) {
                $data[] = $item->slug;
            }
            $count = 0;
            $slug_str = $slug;
            while (in_array($slug_str, $data)) {
                $slug_str = $slug . '-' . ++$count;
            }
            return $slug_str;
        }
        return $slug;
    }
}
