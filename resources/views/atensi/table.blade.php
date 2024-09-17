<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Atensi</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
    </style>
</head>
<body>
    <h2>Data Atensi</h2>
    <table>
        <thead>
            <tr>
                <th>Field</th>
                <th>Value</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $key => $value)
                <tr>
                    <td>{{ $key }}</td>
                    <td>{{ is_array($value) ? json_encode($value) : $value }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
