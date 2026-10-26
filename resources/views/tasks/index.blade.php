<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task Management System</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
            background-color: #eef1f5;
            padding: 40px;
        }

        .container {
            max-width: 1000px;
            margin: auto;
            background: #ffffff;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
        }

        h1 {
            text-align: center;
            color: #2c3e50;
            margin-bottom: 30px;
            letter-spacing: 1px;
            font-size: 3rem;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            overflow: hidden;
            border-radius: 10px;
        }

        th {
            background: linear-gradient(135deg, #3498db, #2980b9);
            color: white;
            padding: 15px;
            font-size: 18px;
        }

        td {
            padding: 18px;
            font-size: 16px;
            border-bottom: 1px solid #ddd;
        }

        tr:nth-child(even) {
            background-color: #f8f9fa;
        }

        tr:hover {
            background-color: #eaf4ff;
            transition: 0.3s;
        }

        .pending {
            color: #f39c12;
            font-weight: bold;
        }

        .done {
            color: #27ae60;
            font-weight: bold;
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

<div class="container">

    <h1>Task Management System</h1>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Task Title</th>
                <th>Status</th>
            </tr>
        </thead>

        <tbody>
        @foreach($tasks as $task)
            <tr>
                <td>{{ $task->id }}</td>
                <td>{{ $task->title }}</td>
                <td class="{{ $task->status }}">
                    {{ ucfirst($task->status) }}
                </td>
            </tr>
        @endforeach
        </tbody>

    </table>

    <div class="footer">
        Laravel 12 | Task Management System
    </div>

</div>

</body>
</html>