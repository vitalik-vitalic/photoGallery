<!doctype html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <title>Parsley Form</title>

    <link rel="stylesheet" href="data_css/bootstrap.css">

</head>
<body>
{!! menu('main','bootstrap') !!}

<div class="container m-t-3">

    <h1>Add photo</h1>
    <form id="parsleyForm" method="post" action="{{asset('account')}}">
        {{--Генерация токена--}}
        {!! csrf_field() !!}
        <label for="name">Название</label>
        <textarea name="name" id="name" required></textarea><br>
        @if($errors->has('name'))
        <b>{{$errors->first('name')}}</b>
        @endif
        <label for="body">Описание</label>
        <textarea type="text" name="body" id="body" required></textarea>
        <fieldset class="form-group">
            <label for="album">Альбомы</label>
            <select class="form-control" name="album" id="album" required>
                @foreach($arr as $one)
                    <option>
                        {{$one->name}}
                    </option>
                @endforeach
            </select>
        </fieldset>
        <fieldset class="form-group">
            <label for="exampleInputFile">File input</label>
            <input type="file" class="form-control-file" id="exampleInputFile">
        </fieldset>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

</div>


<script src="js/jquery-2.1.4.js"></script>
<script src="js/parsley.min.js"></script>
<script src="js/tether.min.js"></script>
<script src="https://cdn.jsdelivr.net/holder/2.9.0/holder.min.js"></script>
<script src="js/bootstrap.min.js"></script>

<script>
    $("#parsleyForm").parsley({

        errorClass: 'has-danger',
        successClass: 'has-success',
        classHandler: function(ParsleyField) {
            return ParsleyField.$element.parents('.form-group');
        },
        errorsContainer: function(ParsleyField) {
            return ParsleyField.$element.parents('.form-group');
        },
        errorsWrapper: '<span class="text-help">',
        errorTemplate: '<div></div>'

    });
</script>

</body>
</html>