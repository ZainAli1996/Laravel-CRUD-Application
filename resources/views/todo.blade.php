<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>CRUD Application</title>
      <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
    table, td, th {  
    border: 1px solid #ddd;
    text-align: left;
    }

    table {
    border-collapse: collapse;
    width: 50%;
    }

    th, td {
    padding: 15px;
    }
    </style>
      <style>
         body {
         font-family: 'Nunito', sans-serif;
         }
      </style>
   </head>
   <center>
   </br>
   <a href="todo_create">Add Record</a>
   </br>
   {{session('msg')}}
   <body class="antialiased">
      <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
         <h1>CRUD Application Project</h1>
         <table>
        <tr>
        <td>ID</td>
        <td>NAME</td>
        <td>CREATED_AT</td>
        <td>ACTION</td>
        </tr>
         @foreach($todoArr as $todo)
         <tr>
        <td>{{$todo->id}}</td>
        <td>{{$todo->name}}</td>
        <td>{{$todo->created_at}}</td>
        <td><a href="todo_delete/{{$todo->id}}">Delete</a> |
        <a href="todo_edit/{{$todo->id}}">Edit</a>
        </td>
        </tr>
         @endforeach
         </table>
      </div>
   </body>
   </center>
</html>