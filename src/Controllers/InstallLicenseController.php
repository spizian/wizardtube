<?php

declare(strict_types=1);

namespace spizian\wizardtube\Controllers;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Controller;
use Illuminate\View\View;

class InstallLicenseController extends Controller
{
    public function __invoke(): Factory|View|Application|RedirectResponse
    {
        return view('installer::steps.license');
    }
}