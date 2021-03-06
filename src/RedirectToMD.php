<?php

namespace GPlane\MD;

class RedirectToMD
{
    public function handle($request, $next)
    {
        if (!$request->isMethod('get')) {
            return $next($request);
        }

        $paths = [
            'user/closet',
            'user/player',
            'user/profile',
            'user/config',
            'user/report',
            'user/skin-utilities',
            'admin',
            'admin/users',
            'admin/players',
            'admin/plugins/manage',
            'admin/customize',
            'admin/score',
            'admin/options',
            'admin/update'
        ];

        $path = $request->path();
        if (in_array($path, $paths)) {
            return redirect('/user#/'.$path);
        } else {
            return $next($request);
        }
    }
}
