<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use BezhanSalleh\FilamentShield\FilamentShield;
use BezhanSalleh\FilamentShield\Commands;
use Illuminate\Support\Facades\Gate;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Gate::policy(\Firefly\FilamentBlog\Models\Post::class, \App\Policies\PostPolicy::class);
        Gate::policy(\Firefly\FilamentBlog\Models\Tag::class, \App\Policies\TagPolicy::class);
        Gate::policy(\Firefly\FilamentBlog\Models\Category::class, \App\Policies\CategoryPolicy::class);
        Gate::policy(\Firefly\FilamentBlog\Models\Comment::class, \App\Policies\CommentPolicy::class);
        Gate::policy(\Firefly\FilamentBlog\Models\Setting::class, \App\Policies\SettingPolicy::class);
        Gate::policy(\Firefly\FilamentBlog\Models\NewsLetter::class, \App\Policies\NewsLetterPolicy::class);
        Gate::policy(\Firefly\FilamentBlog\Models\ShareSnippet::class, \App\Policies\ShareSnippetPolicy::class);
        Gate::policy(\Firefly\FilamentBlog\Models\SeoDetail::class, \App\Policies\SeoDetailPolicy::class);
    }
}
