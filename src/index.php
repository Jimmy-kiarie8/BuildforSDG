<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BuildForSDG</title>
    <link rel="stylesheet" href="./css/app.css">
</head>

<body>
    <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">
                BuildForSDG
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">

                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    <li class="nav-item">
                        <a class="nav-link" href="#">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Register</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <main class="py-4 container">
        <div class="card">
            <div class="card-header">
                Estimator
            </div>
            <div class="card-body">
                <form action="challenge.php" method="POST">
                    <div class="form-group">
                        <label for="">Population</label>
                        <input type="number" class="form-control" name="data-population" required min="0">
                    </div>

                    <div class="form-group">
                        <label for="">Time To Elapse</label>
                        <input type="number" class="form-control" name="data-time-to-elapse" required min="0">
                    </div>

                    <div class="form-group">
                        <label for="">Reported Cases</label>
                        <input type="number" class="form-control" name="data-reported-cases" required min="0">
                    </div>

                    <div class="form-group">
                        <label for="">Total Hospital Beds</label>
                        <input type="number" class="form-control" name="data-total-hospital-beds" required min="0">
                    </div>

                    <div class="form-group">
                        <label for="">Period Type</label>
                        <select name="data-period-type" id="" class="form-control">
                            <option value="Days">Days</option>
                            <option value="Weeks">Weeks</option>
                            <option value="Months">Months</option>
                        </select>

                    </div>
                    <button class="btn btn-primary" type="submit">Submit</button>
                </form>
            </div>
            <div class="card-footer"></div>
        </div>

    </main>
</body>

</html>