<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Survey</title>
</head>
<body>
<h1>Audio Quality Survey</h1>
    <form method="POST" action="{{ route('survey.submit') }}">
        @csrf

        @if ($errors->any())
            <div>
                <p>Please select an answer for every row before submitting.</p>
            </div>
        @endif

        @for ($i = 1; $i <= 5; $i++)
            <div>
                <h3>Row {{ $i }}</h3>
                <div>
                    <audio controls>
                        <source src="{{ asset('storage/samples/row' . $i . '_a.mp3') }}" type="audio/mpeg">
                    </audio>
                    <label>
                        <input type="radio" name="row_{{ $i }}" value="1"> Sample A sounds better
                    </label>
                </div>
                <div>
                    <audio controls>
                        <source src="{{ asset('storage/samples/row' . $i . '_b.mp3') }}" type="audio/mpeg">
                    </audio>
                    <label>
                        <input type="radio" name="row_{{ $i }}" value="2"> Sample B sounds better
                    </label>
                </div>
            </div>
        @endfor

        <button type="submit">Submit</button>
    </form>
</body>
</html>
