<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" sizes="57x57" href="/favicon/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/favicon/apple-touch-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/favicon/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/favicon/apple-touch-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/favicon/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/favicon/apple-touch-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/favicon/apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/favicon/apple-touch-icon-152x152.png">

    <link rel="icon" type="image/png" sizes="196x196" href="/favicon/favicon-196x196.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon/favicon-16x16.png">
    <link rel="icon" type="image/png" sizes="128x128" href="/favicon/favicon-128.png">

    <link rel="shortcut icon" href="/favicon/favicon-32x32.png">

    <meta name="application-name" content="M-Core">
    <meta name="msapplication-TileColor" content="#08110C">
    <meta name="msapplication-TileImage" content="/favicon/mstile-144x144.png">
    <meta name="msapplication-square70x70logo" content="/favicon/mstile-70x70.png">
    <meta name="msapplication-square150x150logo" content="/favicon/mstile-150x150.png">
    <meta name="msapplication-wide310x150logo" content="/favicon/mstile-310x150.png">
    <meta name="msapplication-square310x310logo" content="/favicon/mstile-310x310.png">

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <title>M-Core — СИЗ, спецодежда и расходные материалы в Казахстане</title>

    <meta name="description" content="M-Core — поставка средств индивидуальной защиты, спецодежды, расходных материалов и профессиональных дезинфицирующих средств для бизнеса в Алматы и по Казахстану.">

    <meta name="robots" content="index, follow">

    <link rel="canonical" href="https://m-core.kz/">

    {{-- Open Graph --}}
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="M-Core">
    <meta property="og:locale" content="ru_KZ">

    <meta property="og:title" content="M-Core — СИЗ, спецодежда и расходные материалы">

    <meta property="og:description" content="Поставка СИЗ, спецодежды и расходных материалов для бизнеса в Алматы и по Казахстану.">

    <meta property="og:url" content="https://m-core.kz/">

    <meta property="og:image" content="https://m-core.kz/images/m-core-cover.png">

    <meta property="og:image:alt" content="M-Core — СИЗ и расходные материалы">

    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">

    {{-- Twitter / X --}}
    <meta name="twitter:card" content="summary_large_image">

    <meta   name="twitter:title" content="M-Core — СИЗ, спецодежда и расходные материалы">

    <meta name="twitter:description" content="Поставка СИЗ, спецодежды и расходных материалов для бизнеса в Алматы и по Казахстану.">

    <meta name="twitter:image" content="https://m-core.kz/images/m-core-cover.png">

    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "Organization",
            "@id": "https://m-core.kz/#organization",
            "name": "M-Core",
            "url": "https://m-core.kz/",
            "logo": "https://m-core.kz/favicon/favicon-196x196.png",
            "description": "Поставка средств индивидуальной защиты, спецодежды, расходных материалов и профессиональных дезинфицирующих средств для бизнеса в Казахстане.",
            "telephone": "+7 747 997 97 11",
            "email": "mcore.ppe@gmail.com",
            "address": {
                "@type": "PostalAddress",
                "addressLocality": "Алматы",
                "addressCountry": "KZ"
            }
        }
    </script>

    @inertiaHead
</head>
<body>
    @inertia
</body>
</html>
