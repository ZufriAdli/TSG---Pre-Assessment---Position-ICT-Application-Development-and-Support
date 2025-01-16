<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cars List (Assessment)</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #2C3E50;
            color: white;
        }

        tr:hover {
            background-color: #f1f1f1;
        }

        .table-container {
            max-width: 900px;
            margin: auto;
            background-color: white;
            padding: 20px;
            border-radius: 8px;
        }
    </style>
</head>
<body>

<div class="table-container">
    <h2>Cars List</h2>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Model Name</th>
                <th>Date Created</th>
                <th>Manufacture</th>
            </tr>
        </thead>
        <tbody>
            @foreach($cars as $car)
                <tr>
                    <td>{{ $car->id }}</td>
                    <td>{{ $car->name }}</td>
                    <td>{{ \Carbon\Carbon::parse($car->date_created)->format('d M Y h:i A') }}</td>
                    <td>{{ $car->manufacture->name }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

</body>
</html>
