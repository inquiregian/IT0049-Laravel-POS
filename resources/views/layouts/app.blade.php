<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel POS</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
            background: #f4f6f9;
            color: #333;
        }

        .navbar {
            background: #2c3e50;
            padding: 15px 30px;
            box-shadow: 0 2px 10px rgba(0,0,0,.1);
        }

        .navbar a {
            color: white;
            text-decoration: none;
            margin-right: 20px;
            font-weight: bold;
        }

        .navbar a:hover {
            color: #3498db;
        }

        .container {
            max-width: 1000px;
            margin: 40px auto;
            background: white;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(0,0,0,.1);
        }

        h1 {
            text-align: center;
            color: #2c3e50;
            margin-bottom: 25px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th {
            background: #3498db;
            color: white;
            padding: 15px;
        }

        td {
            padding: 15px;
            border-bottom: 1px solid #ddd;
        }

        tr:nth-child(even) {
            background: #f8f9fa;
        }

        tr:hover {
            background: #eef6ff;
        }

        .card {
            background: #f8f9fa;
            padding: 25px;
            border-radius: 10px;
            border-left: 5px solid #3498db;
        }

        .footer {
            text-align: center;
            margin-top: 25px;
            color: #666;
            font-size: 14px;
        }
    </style>
</head>
<body>

<div class="navbar">
    <a href="/">Home</a>
    <a href="/about">About</a>
    <a href="/customers">Customers</a>
    <a href="/users">Users</a>
</div>

<div class="container">
    @yield('content')
</div>

<div class="footer">
    Laravel POS System | IT0049 TFA5
</div>

</body>
</html>