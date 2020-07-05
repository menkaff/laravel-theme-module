<?php
namespace Modules\Theme\Services;

use DB;

class ThemeService
{
    public function notifications_count()
    {
        return DB::table('logs')->where('is_seen', 0)->count();

    }

}
