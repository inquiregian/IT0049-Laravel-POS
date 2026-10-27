<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel POS | IT0049</title>

    <style>
        :root {
            --text: #1e293b;
            --muted: #64748b;
            --accent: #0f766e;
            --accent-light: #ccfbf1;
            --page-bg: #f5f7fa;
            --surface: #ffffff;
            --border: #e2e8f0;
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            background: var(--page-bg);
            color: var(--text);
            font-family: Arial, Helvetica, sans-serif;
            line-height: 1.6;
        }

        .navbar {
            background: var(--surface);
            border-bottom: 1px solid var(--border);
        }

        .nav-inner {
            width: min(1100px, calc(100% - 40px));
            min-height: 72px;
            margin: 0 auto;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 24px;
        }

        .brand {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            color: var(--text);
            font-size: 19px;
            font-weight: 700;
            text-decoration: none;
            white-space: nowrap;
        }

        .brand-mark {
            width: 34px;
            height: 34px;
            display: grid;
            place-items: center;
            border-radius: 10px;
            background: var(--accent);
            color: #ffffff;
            font-size: 15px;
        }

        .brand span:last-child {
            color: var(--accent);
        }

        .nav-links {
            display: flex;
            flex-wrap: wrap;
            gap: 6px;
        }

        .nav-links a {
            padding: 9px 13px;
            border-radius: 8px;
            color: #475569;
            font-size: 14px;
            font-weight: 600;
            text-decoration: none;
            transition: background-color 0.2s ease, color 0.2s ease;
        }

        .nav-links a:hover,
        .nav-links a:focus-visible {
            background: var(--accent-light);
            color: var(--accent);
            outline: none;
        }

        .container {
            width: min(1000px, calc(100% - 40px));
            margin: 36px auto;
            padding: 30px;
            border: 1px solid var(--border);
            border-radius: 14px;
            background: var(--surface);
            box-shadow: 0 6px 20px rgba(15, 23, 42, 0.04);
        }

        h1 {
            margin-bottom: 22px;
            color: #172033;
            font-size: clamp(24px, 4vw, 30px);
            line-height: 1.25;
        }

        .card {
            padding: 22px 24px;
            border: 1px solid var(--border);
            border-left: 4px solid var(--accent);
            border-radius: 10px;
            background: #fbfcfd;
            line-height: 1.8;
        }

        .card p + p {
            margin-top: 14px;
        }

        table {
            width: 100%;
            border: 1px solid var(--border);
            border-spacing: 0;
            border-radius: 10px;
            overflow: hidden;
        }

        th,
        td {
            padding: 13px 16px;
            text-align: left;
        }

        th {
            background: #f1f5f9;
            color: #334155;
            font-size: 13px;
            font-weight: 700;
        }

        td {
            border-top: 1px solid var(--border);
            color: #334155;
            font-size: 14px;
        }

        tbody tr:nth-child(even) {
            background: #fafbfc;
        }

        tbody tr:hover {
            background: #f0fdfa;
        }

        .footer {
            margin-top: auto;
            padding: 18px 16px;
            color: var(--muted);
            font-size: 13px;
            text-align: center;
        }

        @media (max-width: 600px) {
            .nav-inner {
                align-items: flex-start;
                flex-direction: column;
                gap: 10px;
                padding: 14px 0;
            }

            .nav-links {
                width: 100%;
            }

            .nav-links a {
                padding: 8px 10px;
            }

            .container {
                width: calc(100% - 24px);
                margin: 20px auto;
                padding: 22px 16px;
            }

            table {
                display: block;
                overflow-x: auto;
                white-space: nowrap;
            }
        }

        @media (prefers-reduced-motion: reduce) {
            *,
            *::before,
            *::after {
                scroll-behavior: auto !important;
                transition: none !important;
            }
        }
    </style>
</head>
<body>

<header class="navbar">
    <div class="nav-inner">
        <a class="brand" href="/">
            <span class="brand-mark">P</span>
            <span>Laravel <span>POS</span></span>
        </a>

        <nav class="nav-links" aria-label="Main navigation">
            <a href="/">Home</a>
            <a href="/about">About</a>
            <a href="/customers">Customers</a>
            <a href="/users">Users</a>
        </nav>
    </div>
</header>

<main class="container">
    @yield('content')
</main>

<footer class="footer">
    Laravel POS System | IT0049
</footer>

</body>
</html>