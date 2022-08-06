<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>World Countries</title>
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{  asset('sweetalert2/sweetalert2.min.css') }}">
    @livewireStyles
</head>
<body>

    <div class="container">
        <div class="row" style="margin-top: 45px">
            <div class="col-md-8 offset-md-2">
                <h4>World Countries</h4>
                @livewire('countries')
            </div>
        </div>
    </div>
    

    <script src="{{ asset('jquery-3.4.1.min.js') }}"></script>
    <script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('sweetalert2/sweetalert2.min.js') }}"></script>
    @livewireScripts
    <script>
        window.addEventListener('OpenAddCountryModal',function(){
            $('.addCountry').find('span').html('');
            $('.addCountry').find('form')[0].reset();
            $('.addCountry').modal('show');
        });
        window.addEventListener('CloseAddCountryModal',function(){
            $('.addCountry').find('span').html('');
            $('.addCountry').find('form')[0].reset();
            $('.addCountry').modal('hide');
            alert('New Country Has been Saved Successfully');
        });

        
    </script>

</body>
</html>