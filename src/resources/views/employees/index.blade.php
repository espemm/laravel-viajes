<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>{{ $title }}</title>

    <style>
        body{
            font-family: Arial, sans-serif;
            margin:40px;
        }

        table{
            border-collapse: collapse;
            width:100%;
        }

        th,td{
            border:1px solid #ccc;
            padding:8px;
            text-align:left;
        }

        th{
            background:#f5f5f5;
        }
    </style>
</head>
<body>

<h1>{{ $title }}</h1>

<p>
    <strong>Total registros:</strong>
    {{ $employees->count() }}
</p>

@if($employees->isEmpty())
    <p>No hay empleados que cumplan el criterio.</p>
@else
<table>
    <thead>
        <tr>
            <th>ID</th><th>Apellidos</th><th>Nombre</th>
            <th>Edad</th><th>Fecha contratación</th>
        </tr>
    </thead>
    <tbody>
    @foreach($employees as $employee)

        <tr>
            <td>{{ $employee->emp_id }}</td>
            <td>{{ $employee->emp_lastname }}</td>
            <td>{{ $employee->emp_firstname }}</td>
            <td>
                {{ \Carbon\Carbon::parse($employee->emp_birth_date)->age }}
            </td>
            <td>
                {{ \Carbon\Carbon::parse($employee->emp_hire_date)->format('Y-m-d') }}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
@endif
</body>
</html>