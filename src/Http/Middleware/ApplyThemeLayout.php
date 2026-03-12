<?php

namespace Slym7\FilaCraft\Http\Middleware;

use Closure;
use Filament\Facades\Filament;
use Illuminate\Http\Request;
use Slym7\FilaCraft\Models\UserThemeSetting;
use Symfony\Component\HttpFoundation\Response;

class ApplyThemeLayout
{
    public function handle(Request $request, Closure $next): Response
    {
        if ($user = $request->user()) {
            $settings = UserThemeSetting::where('user_id', $user->id)->first();
            $theme = $settings?->settings['theme'] ?? null;

            if ($theme === 'kutup') {
                $panel = Filament::getCurrentPanel();
                $panel?->topNavigation();
            }
        }

        return $next($request);
    }
}
