<?php

namespace Modules\Theme\Http\Controllers;

use DB;
use Illuminate\Routing\Controller;
use Modules\Blog\Models\Category;
use Modules\Blog\Models\Page;
use Modules\Blog\Models\Post;

class ThemeController extends Controller
{
    public function home()
    {
        $recent_posts = Post::orderBy('created_at', 'DESC')->get();
        $project_cat = Category::where('name', 'LIKE', '%پروژه%')->first();
        if ($project_cat) {
            $projects = $project_cat->posts;
        }

        $template_parts = [];
        for ($i = 1; $i < 7; $i++) {
            $page = Page::where('title', 'LIKE', '%' . 'بخش ' . $i . '%')->select(['content'])->first();
            if ($page) {
                $template_parts[$i] = $page->content;
            } else {
                $template_parts[$i] = '';
            }
        }

        return view('home', compact(['recent_posts', 'projects', 'template_parts']));
    }

    public function notifications()
    {
        $notifications = DB::table('logs')->orderBy('created_at', 'DESC')->get();
        // DB::table('logs')->where('is_seen', 0)->update(['is_seen' => 1]);

        return view('theme::notifications_index', compact(['notifications']));
    }
}
