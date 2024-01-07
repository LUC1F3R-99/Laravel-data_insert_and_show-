<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    @include('libraries.boostrap')
</head>


<body>



    <div class="container mt-5">
        {{-- form start --}}
        @include('components.form.StudentForm')
        {{-- form end --}}
    </div>
    <div class="mt-3">
        <div class="container">
            <div class="card">
                {{-- table start --}}
                <table class="table table-hover">
                    {{-- table head start --}}
                    @include('components.Tables.StudentTables.TableHead')
                    {{-- table head end --}}

                    {{-- table body start --}}
                    @include('components.Tables.StudentTables.TableBody')
                    {{-- table body end --}}
                </table>
                {{-- table end --}}
            </div>
        </div>
    </div>




</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
</script>

</html>
