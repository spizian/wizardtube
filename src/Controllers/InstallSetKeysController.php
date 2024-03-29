<?php

declare(strict_types=1);

namespace spizian\wizardtube\Controllers;

use spizian\EnvSet\EnvSetEditor;
use spizian\wizardtube\Exceptions\CantGenerateKeyException;
use Exception;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Artisan;

class InstallSetKeysController extends Controller
{
    public function __construct(
        public readonly EnvSetEditor $envEditor,
    ) {}

    public function __invoke(Request $request): RedirectResponse
    {
        try {
            $this->envEditor->setKey('DOMAIN_SITE', $request->getHost());
            $this->envEditor->setKey('APP_URL', $request->input('app_url'));
            Artisan::call('key:generate', ['--force' => true, '--show' => true]);
            if (empty($this->envEditor->getValue('APP_KEY'))) {
                $this->envEditor->setKey('APP_KEY', trim(str_replace('"', '', Artisan::output())));
            }
            $this->envEditor->save();
            if (empty($this->envEditor->getValue('APP_KEY'))) {
                throw new CantGenerateKeyException();
            }
        } catch (Exception $e) {
            return back()->withErrors($e->getMessage())->withInput();
        }

        Artisan::call('storage:link', ['--force' => true]);

        return redirect()->route('install.finish');
    }
}
