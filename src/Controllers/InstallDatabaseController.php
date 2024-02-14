<?php

declare(strict_types=1);

namespace spizian\wizardtube\Controllers;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Controller;

class InstallDatabaseController extends Controller
{
    public function __invoke(): View|Factory|Application|RedirectResponse
    {
        if (
            ! (new InstallFolderController())->check()
        ) {
            return redirect()->route('install.license');
        }

        return view('installer::steps.database');
    }
}
