<?php

    namespace App\Providers;

    use Carbon\CarbonImmutable;
    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Support\Facades\Date;
    use Illuminate\Support\Facades\Vite;
    use Illuminate\Support\Facades\DB;
    use Illuminate\Support\Facades\URL;
    use Illuminate\Support\ServiceProvider;

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
            $this->setupCommandsSafely();
            $this->tuneModelBehavior();
            $this->enforceSecureUrls();
            $this->optimizeViteSettings();
            $this->tuneDateBehavior();
        }

        /**
         * Prevent destructive commands in production.
         */
        private function setupCommandsSafely(): void
        {
            DB::prohibitDestructiveCommands($this->app->isProduction());
        }

        /**
         * Fine-tune Eloquent model behavior.
         */
        private function tuneModelBehavior(): void
        {
            Model::shouldBeStrict();
        }

        /**
         * Force HTTPS in non-local environments.
         */
        private function enforceSecureUrls(): void
        {
            if (!$this->app->isLocal()) {
                URL::forceScheme('https');
            }
        }

        /**
         * Optimize Vite asset loading strategy.
         */
        private function optimizeViteSettings(): void
        {
            Vite::useAggressivePrefetching();
        }

        /**
         * Configure global date handling.
         */
        private function tuneDateBehavior(): void
        {
            Date::use(CarbonImmutable::class);
        }
    }
