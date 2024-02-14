<?php

declare(strict_types=1);

namespace spizian\wizardtube\Controllers;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use Exception;

class InstallCheckLicenseController extends Controller
{
    public function __invoke(Request $request): RedirectResponse|Application|View
    {
        try {
            $url = 'https://tronsef.xyz/api/licvalidation';
            $licenseKey = $request->input('licensekey');
            $data = [
                'domain' => $request->getHost(),
                'license_key' => $licenseKey,
            ];
            $response = $this->curl_post($url, $data);
            $dataRespond = json_decode($response, true);
            if($dataRespond['status'] === true){
                return redirect()->route('install.database');
            }else {
                throw new Exception("Serial number that you input isn't match or invalid, try again.");
            }
        } catch (Exception $e) {
            return redirect()->route('install.license')->withErrors($e->getMessage());
        }

        return view('installer::steps.license');
    }

    private function curl_post($url, $data)
    {
        $ch = curl_init($url);
        curl_setopt_array($ch, [
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_POST => true,
            CURLOPT_POSTFIELDS => $data,
        ]);
        $response = curl_exec($ch);
        if ($response === false) {
            curl_error($ch);
            return "Access network not granted.";
        }
        curl_close($ch);
        return $response;
    }

    
}
