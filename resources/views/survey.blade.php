<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Survey</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen">

<nav class="bg-white shadow">
    <div class="w-full px-6 py-4 flex justify-between items-center">
        <span class="flex-1"></span>
        <a href="{{ route('index') }}" class="text-xl font-bold tracking-wide hover:text-blue-600 transition">Audio Quality Survey</a>
        <div class="flex-1"></div>
    </div>
</nav>

<main class="max-w-3xl mx-auto mt-12 px-4">

    @if ($errors->any())
        <div class="bg-red-100 text-red-700 px-6 py-4 rounded-xl mb-6">
            Please select an answer for every row before submitting.
        </div>
    @endif

    <form method="POST" action="{{ route('survey.submit') }}">
        @csrf

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
            <div class="bg-white rounded-2xl shadow-md p-6 mb-6">
                <h3 class="text-lg font-semibold mb-4">Sample pair {{ $i }}</h3>
                <div class="grid grid-cols-2 gap-6">
                    <div class="flex flex-col items-center gap-3">
                        <span class="font-medium text-gray-600">Sample A</span>
                        <audio controls class="w-full">
                            <source src="{{ asset('storage/samples/' . $sample['a']['file']) }}" type="{{ $sample['a']['type'] }}">
                        </audio>
                        <label class="flex items-center gap-2 cursor-pointer">
                            <input type="radio" name="row_{{ $i }}" value="1" class="accent-blue-600">
                            <span class="text-gray-700">Sample A sounds better</span>
                        </label>
                    </div>
                    <div class="flex flex-col items-center gap-3">
                        <span class="font-medium text-gray-600">Sample B</span>
                        <audio controls class="w-full">
                            <source src="{{ asset('storage/samples/' . $sample['b']['file']) }}" type="{{ $sample['b']['type'] }}">
                        </audio>
                        <label class="flex items-center gap-2 cursor-pointer">
                            <input type="radio" name="row_{{ $i }}" value="2" class="accent-blue-600">
                            <span class="text-gray-700">Sample B sounds better</span>
                        </label>
                    </div>
                </div>
            </div>
        @endforeach

        <div class="flex justify-center mb-12">
            <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white font-medium py-3 px-12 rounded-xl transition">
                Submit
            </button>
        </div>

    </form>
</main>

</body>
</html>
