<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Título y Descripción Primarios -->
    <meta name="title" content="Diamond’s Crown Transfers | Transporte Privado y Turístico en Cancún">
    <meta name="description"
        content="Servicio de traslados privados y transporte turístico en Cancún y la Riviera Maya. Permisos federales, vehículos asegurados y máxima seguridad para tu viaje. ¡Reserva hoy!">
    <meta name="keywords"
        content="transporte cancún, traslados privados cancun, transfer aeropuerto cancun, transporte turistico riviera maya, diamond crown transfers, vans privadas cancun">
    <meta name="robots" content="index, follow">
    <meta name="language" content="Spanish">
    <meta name="author" content="Diamond’s Crown Transfers">

    <!-- Geo Tags para Posicionamiento Local -->
    <meta name="geo.region" content="MX-ROO">
    <meta name="geo.placename" content="Cancún">
    <meta name="geo.position" content="21.1619;-86.8515">
    <meta name="ICBM" content="21.1619, -86.8515">

    <!-- Open Graph / Facebook / WhatsApp / LinkedIn -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="Diamond’s Crown Transfers | Transporte Privado en Cancún">
    <meta property="og:description"
        content="Viaja seguro en Cancún y la Riviera Maya. Traslados privados con permisos federales, seguros cobertura amplia y la mejor comodidad para tu tranquilidad.">
    <meta property="og:image" content="{{ asset('img/og-image.jpg') }}">

    <!-- Twitter Cards -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="{{ url()->current() }}">
    <meta property="twitter:title" content="Diamond’s Crown Transfers | Transporte Privado en Cancún">
    <meta property="twitter:description"
        content="Servicio de traslados turísticos y privados en Cancún y sus alrededores. Seguridad, licencias federales y confianza en cada viaje.">
    <meta property="twitter:image" content="{{ asset('img/og-image.jpg') }}">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link rel="icon" href="img/logo_head.webp" type="">

    <!-- Scripts -->
    <script type="application/ld+json">
        {
        "@context": "https://schema.org",
        "@type": "TaxiService",
        "name": "Diamond’s Crown Transfers",
        "image": "{{ asset('img/logo.png') }}",
        "description": "Empresa de transporte turístico y traslados privados en Cancún y la Riviera Maya con permisos federales y seguros incluidos.",
        "areaServed": {
            "@type": "AdministrativeArea",
            "name": "Cancún y Riviera Maya"
        },
        "serviceType": "Private Airport Transfer & Local Transportation",
        "provider": {
            "@type": "LocalBusiness",
            "name": "Diamond’s Crown Transfers",
            "address": {
            "@type": "PostalAddress",
            "addressLocality": "Cancún",
            "addressRegion": "Quintana Roo",
            "addressCountry": "MX"
            }
        }
        }
    </script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-100">

        @include('layouts.navigation')

        <!-- Page Heading -->
        {{-- <div class="px-4 py-6 mx-auto max-w-7xl sm:px-6 lg:px-8"> --}}
        @if (isset($header))
            <header class="bg-white">
                <div class="px-2 py-2 mx-auto text-center max-w-7xl sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>
        @endif

        <!-- Page Content -->
        <main>
            {{ $slot }}
            <x-modal-contact>
            </x-modal-contact>
        </main>

        @include('layouts.footer')

    </div>
</body>

</html>
