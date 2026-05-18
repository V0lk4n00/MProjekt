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

        @php
            $samples = [
                1 => ['a' => ['file' => 'row1_a.mp3', 'type' => 'audio/mpeg'], 'b' => ['file' => 'row1_b.wav', 'type' => 'audio/wav']],
                2 => ['a' => ['file' => 'row2_a.mp3', 'type' => 'audio/mpeg'], 'b' => ['file' => 'row2_b.wav', 'type' => 'audio/wav']],
                3 => ['a' => ['file' => 'row3_a.wav', 'type' => 'audio/wav'],  'b' => ['file' => 'row3_b.mp3', 'type' => 'audio/mpeg']],
                4 => ['a' => ['file' => 'row4_a.mp3', 'type' => 'audio/mpeg'], 'b' => ['file' => 'row4_b.wav', 'type' => 'audio/wav']],
                5 => ['a' => ['file' => 'row5_a.wav', 'type' => 'audio/wav'],  'b' => ['file' => 'row5_b.mp3', 'type' => 'audio/mpeg']],
            ];
        @endphp

        @foreach ($samples as $i => $sample)
            <div>
                <h3>Row {{ $i }}</h3>
                <div>
                    <audio controls>
                        <source src="{{ asset('storage/samples/' . $sample['a']['file']) }}" type="{{ $sample['a']['type'] }}">
                    </audio>
                    <label>
                        <input type="radio" name="row_{{ $i }}" value="1"> Sample A sounds better
                    </label>
                </div>
                <div>
                    <audio controls>
                        <source src="{{ asset('storage/samples/' . $sample['b']['file']) }}" type="{{ $sample['b']['type'] }}">
                    </audio>
                    <label>
                        <input type="radio" name="row_{{ $i }}" value="2"> Sample B sounds better
                    </label>
                </div>
            </div>
        @endforeach

        <button type="submit">Submit</button>
    </form>

</body>
</html>
