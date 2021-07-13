<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/font-awesome.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <title>Dashboard</title>
</head>

<body id="course-container">
    <main class="dashboard-wrapper container p-0">
        @include('dashboard.aside')
        <div class="dashboard">
            <header class="dashboard-header">
                <form>
                    <div class="dashboard-form">
                        <img src="img/searchicon.svg" alt="" class="search-icon">
                        <input type="search" class="form-control">
                    </div>
                </form>
                <img src="img/c-1.png" alt="avatar" class="avatar">
            </header>
            @section('content')
                @show
        </div>
    </main>
@include('dashboard.footer')
</body>

</html>