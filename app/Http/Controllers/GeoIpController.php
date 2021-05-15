<?php

namespace App\Http\Controllers;

use App\Models\CountryShop;
use Illuminate\Http\Request;
use GeoIp2\Database\Reader;
use Yuriy\Geo\GeoService;


class GeoIpController extends Controller
{
    public function index(GeoService $geoService)
    {

        $ip = \request()->server->get('HTTP_X_FORWARDED_FOR');
        $geoService->parse($ip);
//        $geoService->parse('78.26.216.92');
        $continentCode = $this->shop($geoService->continentCode());
//        dd($geoService);
        return redirect($continentCode->shop);
    }

    private function shop($continentCode)
    {
        return CountryShop::where('code', $continentCode)->firstOrFail();
    }
}
