<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Activity Maps </title>
    <link href="{{ asset('assets/icon/activityMapLogo.png') }}" rel="icon">

    <!-- Scripts -->
    <!-- <script src="{{ asset('js/app.js') }}" defer></script> -->

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Sofia" rel="text/html">

    <!-- Styles -->
    <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->

    
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- Date Time Picker Css -->

    <link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/4.0.0/flatly/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('build/css/bootstrap-datetimepicker.min.css') }}">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


{{--     <!--jQuery Rangeslider -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jQRangeSlider/5.7.2/jQRangeSlider.min.js" integrity="sha512-Y4RFLBiYhluR30QeB+HKesyXEbEysHNQDjfPJNmOAy8kwDABixjgKi6vdNZ7W8FkSgmjH21k8EFcEB5WkEQ13A==" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jQRangeSlider/5.7.2/jQDateRangeSlider.min.js" integrity="sha512-DNkT6whKR3t2GJTY7vMR9RWVvV+AHR/vCma3zdqzqkNdy/EEEabQu2I2mr3mGxIIVbfevHcHLpybtlqKOdEZAw==" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jQRangeSlider/5.7.2/jQDateRangeSliderHandle.min.js" integrity="sha512-QBnMwhbV0nCQNm3lgESWhrdKT0i3J4Iyd5SC4DPGRWesU3MGFaYKMjD7l6dAAHkTJ8Fovo34Xh4C4yzLIL3WHA==" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jQRangeSlider/5.7.2/jQEditRangeSlider.min.js" integrity="sha512-951id/UHej7qS9RMPaufX/4c2GaoHYbp60BbIfOPeC6cIqFyChKWG/POBcAPcxxR8acKNAH++hIjFBJo4t30TA==" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jQRangeSlider/5.7.2/jQEditRangeSliderLabel.min.js" integrity="sha512-46DqV/EMJjCgE506WNq6wGxRBZYdT7ToRlXzQHvpKqKOXvXpVMe0TYL7bBeEr7YskjkvQDfR8JATnmRVrTGy8g==" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jQRangeSlider/5.7.2/jQRangeSliderBar.min.js" integrity="sha512-HkddcQB/9p1/KmRyP8ob+FZ+iKa3Qexn97iKZmb2cS5VNHkqZlLlL1Jv/5OUrYSxv/RVK5opfIW+ylhXuKhSmg==" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jQRangeSlider/5.7.2/jQRangeSliderDraggable.min.js" integrity="sha512-Xf/ZFqwDuie2uB3Dz3aBeA3bOvTZe5ufaVDd+lCRJwrkU8qar/Fwed4Y+cR61ukEpzplf3EgkOgGp5wxVbw8Ew==" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jQRangeSlider/5.7.2/jQRangeSliderHandle.min.js" integrity="sha512-APO2fO8Dv3GIVb409Iap+Z8d/0Zc7g/qoz74vd7Zl8xRGASIftKrVxSqMJlOKs9dj/ajQjtAYbSSVlFYWCuSMA==" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jQRangeSlider/5.7.2/jQRangeSliderLabel.min.js" integrity="sha512-4MpY+zfq9cRD36JN24DuV3EEMf6jGGco4vlrPB5DIWmWm3IaVA5qhgiFDErgb7sqf/hfNXhL8USwnWYHpvAxoQ==" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jQRangeSlider/5.7.2/jQRangeSliderMouseTouch.min.js" integrity="sha512-QS1O003Oib9KC0ZqzVW8vFRS5Ic+NUyFcuIGdSc4emv4l0rH/9RSx/R/fy3wrgbfR+Bi1MIATMC17mNWzPYgCw==" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jQRangeSlider/5.7.2/jQRuler.min.js" integrity="sha512-+XZGEzVUHoCexhjVNcr1TwvWBLe/WYFEIabeHiehJuqHHtLkWz632JU/k6i/IyyrTUQtz4PPnLQLXeDX76ZFTA==" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jQRangeSlider/5.7.2/css/classic.min.css" integrity="sha512-rfImFZ2sxJm9M1l3tzfiHQDbUlwKW9//CH1M+kO7fRAAPl0NSZaHC62VAuEqDEsMYwBq4dveStrxX2k7CAqDFQ==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jQRangeSlider/5.7.2/css/iThing.min.css" integrity="sha512-6I5pAxHP2w+4PX+O3RYzUUeH1BjFqOiiQsc4yUMS8EgJr5v1uJtZDe7HQ4I0B88HRk3oIWbqKJT5kwFVUH4JeQ==" crossorigin="anonymous" /> --}}



    <!-- Data Table  -->
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- fontawesome -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    {{-- custom CSS --}}
    <link rel="stylesheet" href="{{ asset('assets/css/pages.css') }}">

    {{-- map load --}}
    <script src="{{asset('assets/js/pages/mapload.js')}}"></script>
    
</head>
<body>
    <div id="app">
        @include('layouts/navbar')

        @if (session('status'))
        <div class="alert alert-danger" role="alert">
            {{ session('status') }}
        </div>
        @elseif(session('uploaded'))
        <div class="alert alert-success" role="alert">
            {{ session('uploaded') }}
        </div>
        @endif

        <main>
            @yield('content')
        </main>
        
        @include('layouts/footer')
    </div>



    <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.21.0/moment.min.js" type="text/javascript"></script>
    <script src="{{ asset('build/js/bootstrap-datetimepicker.min.js') }}"></script>
    <script type="text/javascript">
        $(function () {
          $('#datetimepicker1').datetimepicker();
          $('#datetimepicker2').datetimepicker();
      });
  </script>

  <script>
    $(document).ready(function() {
            // show the alert
            setTimeout(function() {
                $(".alert").alert('close');
            }, 2000);
        });
    </script>


</body>
</html>

