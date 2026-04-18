<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Thank You | MET IMM</title>

    <link rel="shortcut icon" type="image/png" href="https://www.met.edu/frontendassets/images/fev/metlogo.ico">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = { theme: { extend: { colors: { brand: "#DC2626" } } } };
    </script>

    <!-- =========================
  Google tag (gtag.js)
  Replace: AW-CONVERSION_ID
========================= -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-CONVERSION_ID"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());

        // Google Ads base config
        gtag('config', 'AW-CONVERSION_ID');
    </script>

    <!-- =========================
  Meta Pixel (Facebook)
  Replace: META_PIXEL_ID
========================= -->
    <script>
        !function (f, b, e, v, n, t, s) {
            if (f.fbq) return; n = f.fbq = function () {
                n.callMethod ?
                n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n; n.push = n; n.loaded = !0; n.version = '2.0';
            n.queue = []; t = b.createElement(e); t.async = !0;
            t.src = v; s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window, document, 'script',
            'https://connect.facebook.net/en_US/fbevents.js');

        fbq('init', 'META_PIXEL_ID');
        fbq('track', 'PageView');
    </script>
    <noscript>
        <img height="1" width="1" style="display:none"
            src="https://www.facebook.com/tr?id=META_PIXEL_ID&ev=PageView&noscript=1" />
    </noscript>

</head>

<body
    class="min-h-screen flex flex-col bg-[radial-gradient(ellipse_at_top,rgba(220,38,38,0.10),transparent_60%),linear-gradient(to_bottom,#ffffff,#fafafa)] text-zinc-900">

    <!-- Navbar -->
    <header class="sticky top-0 z-50 border-b border-zinc-200 bg-white/80 backdrop-blur">
        <div class="mx-auto flex max-w-[95rem] items-center justify-between px-4 py-3 md:px-6">
            <a href="IMM_Luxury_management.php" class="flex items-center gap-3">
                <img class="object-cover h-14"
                    src="https://www.met.edu/frontendassets/images/MET_College_in_Mumbai_logo.png" alt="MET Logo">
            </a>

            <a href="IMM_Luxury_management.php"
                class="inline-flex items-center justify-center rounded-xl bg-brand px-4 py-2 text-sm font-semibold text-white shadow-lg shadow-brand/20 hover:brightness-110">
                Back to Home
            </a>
        </div>
    </header>

    <!-- Thank You -->
    <main class="flex-1 flex items-center justify-center px-4 py-16">
        <div class="max-w-2xl w-full rounded-3xl border border-zinc-200 bg-white p-10 shadow-xl shadow-zinc-200/70">

            <div class="text-center">
                <div class="mx-auto flex h-16 w-16 items-center justify-center rounded-full bg-green-100">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-green-600" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7" />
                    </svg>
                </div>

                <h1 class="mt-6 text-3xl font-extrabold text-zinc-950">Thank You!</h1>
                <p class="mt-4 text-zinc-700">Your enquiry has been submitted successfully.</p>
                <p class="mt-2 text-zinc-600">Our admissions team will contact you shortly with further details.</p>
            </div>

            <!-- Admissions Contact -->
            <div class="mt-8 rounded-2xl border border-zinc-200 bg-zinc-50 p-6">
                <h2 class="text-lg font-bold text-zinc-950">Admissions Contact</h2>
                <p class="mt-2 text-sm text-zinc-700">
                    If you need immediate assistance, reach us here:
                </p>

                <!-- Replace these with your actual phone/email -->
                <div class="mt-4 grid gap-3 sm:grid-cols-2">
                    <a href="tel:+919999999999"
                        class="rounded-xl border border-zinc-200 bg-white px-4 py-3 text-sm font-semibold text-zinc-900 hover:bg-zinc-50">
                        📞 +91 99999 99999
                    </a>

                    <a href="mailto:admissions@met.edu"
                        class="rounded-xl border border-zinc-200 bg-white px-4 py-3 text-sm font-semibold text-zinc-900 hover:bg-zinc-50">
                        ✉️ admissions@met.edu
                    </a>
                </div>

                <p class="mt-4 text-xs text-zinc-500">
                    Office Hours: Mon–Sat, 10:00 AM – 6:00 PM
                </p>
            </div>

            <div class="mt-8 flex justify-center gap-4">
                <a href="IMM_Luxury_management.php"
                    class="rounded-xl bg-brand px-6 py-3 text-sm font-semibold text-white shadow-lg shadow-brand/20 hover:brightness-110">
                    Back to Home
                </a>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer class="border-t border-zinc-200 bg-white">
        <div class="mx-auto max-w-[95rem] px-4 py-10 md:px-6">
            <div class="flex flex-col gap-6 md:flex-row md:items-center md:justify-between">
                <div class="flex items-center gap-3">
                    <img class="h-16 w-auto"
                        src="https://www.met.edu/frontendassets/images/MET_College_in_Mumbai_logo.png"
                        alt="MET IMM Logo" class="h-8 w-auto" />
                </div>

                <div class="flex flex-wrap gap-3">
                    <a href="#about"
                        class="rounded-xl border border-zinc-200 bg-white px-4 py-2 text-sm text-zinc-800 hover:bg-zinc-50">
                        ABOUT MET IMM
                    </a>
                    <a href="#overview"
                        class="rounded-xl border border-zinc-200 bg-white px-4 py-2 text-sm text-zinc-800 hover:bg-zinc-50">
                        COURSE OVERVIEW
                    </a>
                    <a href="#faqs"
                        class="rounded-xl border border-zinc-200 bg-white px-4 py-2 text-sm text-zinc-800 hover:bg-zinc-50">
                        FAQs
                    </a>
                </div>
            </div>
            <p class="mt-8 text-xs text-center  text-zinc-500">© MET IMM. All rights reserved.</p>
        </div>
    </footer>

    <!-- =========================
  Conversion events on Thank You
  1) Google Ads conversion event
  2) Meta Pixel Lead event
========================= -->
    <script>
        // ---- Google Ads conversion ----
        // Replace:
        //   AW-CONVERSION_ID
        //   CONVERSION_LABEL (from Google Ads conversion action)
        gtag('event', 'conversion', {
            'send_to': 'AW-CONVERSION_ID/CONVERSION_LABEL'
            // Optional: 'value': 1.0, 'currency': 'INR', 'transaction_id': '...'
        });

        // ---- Meta Pixel: Lead ----
        fbq('track', 'Lead');
    </script>

</body>

</html>