<?php

declare(strict_types=1);

namespace spizian\wizardtube\Controllers;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\View\View;

class InstallLicenseController extends Controller
{
    public function __invoke(Request $request): Factory|View|Application
    {
        $url = 'https://tronsef.xyz/api/licvalidation';
        $licenseKey = $request->input('licensekey');

        $data = [
            'domain' => $request->getHost(),
            'license_key' => $licenseKey,
        ];

        $response = $this->curl_post($url, $data);
        $data = json_decode($response, true);
        $status = $data['status'];

        return view('installer::steps.license', ['status' => $status]);
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
