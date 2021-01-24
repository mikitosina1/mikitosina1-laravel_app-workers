<!DOCTYPE html>
<html lang="ru">
  <head>
    <title>Laravel test app</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="{{ url('/css/app.css') }}" media="all">
    <!-- CSS и JavaScript -->
  </head>

  <body>

    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">

      <h5 class="my-0 mr-md-auto font-weight-normal">Laravel test app by Nikita</h5>

      <div class="container">
        <nav class="my-2 my-md-0 mr-md-3">
          <a class="p-2 text-dark" href="{{ url('/') }}">Добавление сотрудника</a>
          <a class="p-2 text-dark" href="{{ url('/list') }}">Просмотр сотрудников</a>
        </nav>
      </div>
    </div>

    <div class="container">
      @yield('content')
    </div>
  </body>
</html>