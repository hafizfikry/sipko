<?php

namespace App\Http\Middleware;

use Closure;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CheckEndTime
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        // Get the end time from the database
        $endTime = Carbon::parse(DB::table('votings')->select('end_time')->first()->end_time);

        // Check if the end time is in the future
        if ($endTime->isFuture()) {
            return $next($request);
        }

        // If the end time is in the past, return a response
        return response('Voting has ended.', 403);
    }
}
