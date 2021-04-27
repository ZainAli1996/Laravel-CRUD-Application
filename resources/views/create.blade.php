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
      width: 30%;
      }

      th, td {
      padding: 10px;
      }
      
      body {
         font-family: 'Nunito', sans-serif;
      }
   </style>
   </head>
   <center>
   </br>
   <a href="todo_show">Go Back</a>
      <body class="antialiased">
         <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            <h1>Add New Record In Project</h1>
            <form action="todo_submit" method="post">
            @csrf
               <table>
                  <tr>
                  <td>Name</td>
                  <td><input type="text" name="name" required></td>
                  </tr>
                  <tr>
                  <td></td>
                  <td><input type="submit" name="Submit" required></td>
                  </tr>
               </table>
            </form>
         </div>
      </body>
   </center>
</html>