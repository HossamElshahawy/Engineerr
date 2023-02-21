<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\ArticleRead;
use Illuminate\Support\Facades\Auth;
class CheckArticleLimit
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
   public function handle($request, Closure $next)
    {
        // Check if the user is authenticated and has an active subscription
        if (Auth::check() && Auth::user()->subscribed('default')) {
            return $next($request);
        }

        // Retrieve the article_reads record for the user and current date
        $user = Auth::user();
        $date = now()->format('Y-m-d');
        $articleReads = ArticleRead::where('user_id', $user->id)
            ->where('date', $date)
            ->first();

        // Create a new article_reads record if one doesn't exist
        if (!$articleReads) {
            $articleReads = ArticleRead::create([
                'user_id' => $user->id,
                'date' => $date,
                'count' => 0,
            ]);
        }

        // Check if the user has read two articles already
        if ($articleReads->count >= 2) {
            return redirect('/plans');
        }

        // Increment the count and save the article_reads record
        $articleReads->count++;
        $articleReads->save();

        return $next($request);
    }
}
