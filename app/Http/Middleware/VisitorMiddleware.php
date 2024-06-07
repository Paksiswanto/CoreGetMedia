<?php

namespace App\Http\Middleware;

use App\Models\Visitor;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class VisitorMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $ipAddress = $request->ip();
        // Periksa apakah alamat IP sudah ada dalam database
        $existingVisitor = Visitor::where('ip_address', $ipAddress)->first();

        if (!$existingVisitor) {
            // Simpan data pengunjung ke dalam database
            Visitor::create([
                'ip_address' => $ipAddress,
            ]);
        }
        return $next($request);
    }
}
