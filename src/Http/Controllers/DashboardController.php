<?php

namespace Orchid\Http\Controllers;

class DashboardController extends Controller
{
    /**
     * @return array|\Illuminate\Contracts\View\Factory|\Illuminate\View\View|mixed
     */
    public function index()
    {
        return view('cms::index', [
            'widgets' => config('content.main_widgets', []),
        ]);
    }
}
