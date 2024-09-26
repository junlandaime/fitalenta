<?php

namespace Database\Seeders;

use App\Models\Client;
use Illuminate\Database\Seeder;

class ClientSeeder extends Seeder
{
    public function run()
    {
        // ::factory()->count(20)->create();

        $clients = [

            ['name' => 'DIN', 'website' => '', 'logo' => 'clients/DIN-FIX.png', 'is_featured' => true],
            ['name' => 'gmf aeroasia', 'website' => '', 'logo' => 'clients/gmf aeroasia logo new blue.png', 'is_featured' => true],
            ['name' => 'hipmi jabar', 'website' => '', 'logo' => 'clients/logo hipmi jabar.png', 'is_featured' => true],
            ['name' => 'lpit itb', 'website' => '', 'logo' => 'clients/logo lpit itb.png', 'is_featured' => true],
            ['name' => 'lsp manajemen keuangan', 'website' => '', 'logo' => 'clients/logo lsp manajemen keuangan.jpg', 'is_featured' => true],
            ['name' => 'masjid raya aljabbar jawa barat', 'website' => '', 'logo' => 'clients/logo masjid raya aljabbar jawa barat.png', 'is_featured' => true],
            ['name' => 'sahejo eco park', 'website' => '', 'logo' => 'clients/logo sahejo eco park remove bg.png', 'is_featured' => true],
            ['name' => 'SBN', 'website' => '', 'logo' => 'clients/logo SBN.png', 'is_featured' => true],
            ['name' => 'sekolah relawan', 'website' => '', 'logo' => 'clients/logo sekolah relawan.png', 'is_featured' => true],
            ['name' => 'tle the local enables', 'website' => '', 'logo' => 'clients/logo tle the local enables.png', 'is_featured' => true],
            ['name' => 'aero_globe', 'website' => '', 'logo' => 'clients/logo_aero_globe-removebg-preview.png', 'is_featured' => true],
            ['name' => 'afsi', 'website' => '', 'logo' => 'clients/logo_afsi-removebg-preview.png', 'is_featured' => true],
            ['name' => 'bbpvp_bandung', 'website' => '', 'logo' => 'clients/logo_bbpvp_bandung-removebg-preview.png', 'is_featured' => true],
            ['name' => 'BMKA', 'website' => '', 'logo' => 'clients/Logo_BMKA.png', 'is_featured' => true],
            ['name' => 'bprs_alsalaam', 'website' => '', 'logo' => 'clients/logo_bprs_alsalaam-removebg-preview.png', 'is_featured' => true],
            ['name' => 'dompet_dhuafa', 'website' => '', 'logo' => 'clients/logo_dompet_dhuafa-removebg-preview.png', 'is_featured' => true],
            ['name' => 'everbright_taiwan', 'website' => '', 'logo' => 'clients/logo_everbright_taiwan-removebg-preview.png', 'is_featured' => true],
            ['name' => 'faxtor', 'website' => '', 'logo' => 'clients/logo_faxtor-removebg-preview.png', 'is_featured' => true],
            ['name' => 'IMC', 'website' => '', 'logo' => 'clients/logo_IMC-removebg-preview.png', 'is_featured' => true],
            ['name' => 'lsp_administrasi_profesional', 'website' => '', 'logo' => 'clients/logo_lsp_administrasi_profesional-removebg-preview.png', 'is_featured' => true],
            ['name' => 'lsp_beksya', 'website' => '', 'logo' => 'clients/logo_lsp_beksya-removebg-preview.png', 'is_featured' => true],
            ['name' => 'lsp_tikom_cirebon', 'website' => '', 'logo' => 'clients/logo_lsp_tikom_cirebon-removebg-preview.png', 'is_featured' => true],
            ['name' => 'ngabotram', 'website' => '', 'logo' => 'clients/logo_ngabotram-removebg-preview.png', 'is_featured' => true],
            ['name' => 'POLHARBAR', 'website' => '', 'logo' => 'clients/LOGO_POLHARBAR-removebg-preview.png', 'is_featured' => true],
            ['name' => 'prudential', 'website' => '', 'logo' => 'clients/logo_prudential-removebg-preview.png', 'is_featured' => true],
            ['name' => 'sanbercode', 'website' => '', 'logo' => 'clients/logo_sanbercode-removebg-preview.png', 'is_featured' => true],
            ['name' => 'SDF', 'website' => '', 'logo' => 'clients/Logo_SDF-removebg-preview.png', 'is_featured' => true],
            ['name' => 'sma_labschool_upi_kampus_cibiru', 'website' => '', 'logo' => 'clients/logo_sma_labschool_upi_kampus_cibiru-removebg-preview.png', 'is_featured' => true],
            ['name' => 'stemspark', 'website' => '', 'logo' => 'clients/logo_stemspark-removebg-preview.png', 'is_featured' => true],
            ['name' => 'UICM', 'website' => '', 'logo' => 'clients/logo_UICM-removebg-preview.png', 'is_featured' => true],
            ['name' => 'Universitas_Darussalam_Gontor', 'website' => '', 'logo' => 'clients/Logo_Universitas_Darussalam_Gontor-removebg-preview.png', 'is_featured' => true],
            ['name' => 'Unla', 'website' => '', 'logo' => 'clients/logo_Unla-removebg-preview.png', 'is_featured' => true],
            ['name' => 'yayasan_active_club', 'website' => '', 'logo' => 'clients/logo_yayasan_active_club-removebg-preview (1).png', 'is_featured' => true],
            ['name' => 'yayasan_kiseki', 'website' => '', 'logo' => 'clients/logo_yayasan_kiseki-removebg-preview.png', 'is_featured' => true],
            ['name' => 'salman', 'website' => '', 'logo' => 'clients/logo-salman-png-fc-1-01-614af1ef5012f.png', 'is_featured' => true],
            ['name' => 'wakaf salman itb', 'website' => '', 'logo' => 'clients/wakaf salman itb.png', 'is_featured' => true],
            ['name' => 'wan', 'website' => '', 'logo' => 'clients/wan-logo-1.png', 'is_featured' => true],

        ];

        foreach ($clients as $client) {
            Client::create($client);
        }
    }
}
