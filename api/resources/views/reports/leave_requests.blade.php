<!DOCTYPE html>
<html>
<head>
    <title>Rapport des Demandes de Congés</title>
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
    <h1>Rapport des Demandes de Congés</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Type</th>
                <th>Date de Début</th>
                <th>Date de Fin</th>
                <th>Status</th>
                <th>Commentaires</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($leaveRequests as $request)
                <tr>
                    <td>{{ $request->id }}</td>
                    <td>{{ $request->type }}</td>
                    <td>{{ $request->start_date }}</td>
                    <td>{{ $request->end_date }}</td>
                    <td>{{ $request->status }}</td>
                    <td>{{ $request->comments }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
