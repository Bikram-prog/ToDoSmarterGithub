<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta name="color-scheme" content="dark light">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="icon" type="image/x-icon" href="https://todosmarter.com/images/todosmarterlogo.jpg">
    <link rel="manifest" href="https://www.globallove.online/manifest.json">
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link href="{{asset('css/components.min.css')}}" rel="stylesheet" type="text/css">

    

    <title>To-Do-Smarter</title>

    <style>
      
      body {
        /* background-color: #3573FE; */
      } 

      .flex {
        display: flex;
        flex: 1;
        flex-wrap: nowrap;
        align-content: center;
        justify-content: center;
        align-items: center;
        flex-direction: row;
        height: 100vh;
      }

      .flex a {
          margin-right: 60px;
      }

      table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 100%;
        }

        /* td, th {
        border: 1px solid #555;
        text-align: left;
        padding: 8px;
        } */

        /* tr:nth-child(even) {
        background-color: #dddddd;
        } */

</style>

<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-2843148547180331"
     crossorigin="anonymous"></script>

  </head>
  <body>
    
    
    {{-- https://www.globallove.online/images/www-media-world-logo.png --}}
    <div class="container-fluid mt-4">
      <div class="row mb-2">
        <div class="col-md-2">

        </div>
        <div class="col-md-2" style="">

        <a href="/"><img style="align-content: center; align-items: center; align-self: center;width: 200px;height: 200px;" class="img-fluid" src="http://todosmarter.com/images/todosmarterlogo.jpg" alt="ToDoSmarter"></a>

        <a href="/u/all_reciepent" class="btn btn-dark" style="width: 100%;margin-top: 40px;">All Recipients</a><br><br>

        <a href="/u/add-receiepent" class="btn btn-primary" style="width: 100%">Add Recipients</a><br><br>

        <a href="/u/add-to-list" class="btn btn-warning fw-bold" style="width: 100%">Add Project</a><br><br>

        <!-- <a href="/u/setup-company" class="btn btn-danger fw-bold" style="width: 100%">Setup Company</a> -->



        <div class="chart-container mt-4">
					<div class="chart has-fixed-height" id="pie_basic"></div>
				</div>


        <a href="" class="btn btn-link fw-bold mt-4" style="width: 100%">What's on your mind?</a>
        <a href="/u/to_do_smarter_logout" class="btn btn-link fw-bold" style="width: 100%">Logout</a>
        @if(Crypt::decryptString($_COOKIE['UserStatusToDoSmarter']) == '1')
        <a href="/u/del-company/{{ Crypt::decryptString($_COOKIE['UsersCompanyToDoSmarter']) }}" class="btn btn-link fw-bold" style="width: 100%" onclick="return confirm('Are you sure?')">Delete Company Data</a>
        @endif
        </div>