<?php

namespace App\Providers;

use App\Contracts\Interfaces\AuthorInterface;
use App\Contracts\Interfaces\CategoryInterface;
use App\Contracts\Interfaces\FaqInterface;
use App\Contracts\Interfaces\RegisterInterface;
use App\Contracts\Interfaces\SubCategoryInterface;
use App\Contracts\Interfaces\TagInterface;
use App\Contracts\Interfaces\VoucherInterface;
use App\Contracts\Repositories\AuthorRepository;
use App\Contracts\Repositories\CategoryRepository;
use App\Contracts\Repositories\FaqRepository;
use App\Contracts\Repositories\RegisterRepository;
use App\Contracts\Repositories\SubCategoryRepository;
use App\Contracts\Repositories\TagRepository;
use App\Contracts\Repositories\VoucherRepository;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{

    private array $register = [
        CategoryInterface::class => CategoryRepository::class,
        SubCategoryInterface::class => SubCategoryRepository::class,
        FaqInterface::class => FaqRepository::class,
        RegisterInterface::class => RegisterRepository::class,
        TagInterface::class => TagRepository::class,
        AuthorInterface::class => AuthorRepository::class,
        VoucherInterface::class => VoucherRepository::class
    ];

    /**
     * Register any application services.
     */
    public function register(): void
    {
        foreach ($this->register as $index => $value) {
            $this->app->bind($index, $value);
        }
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
