@extends('baselayout')

@section('title', 'Isi Data')

@section('maincontent')


<!-- Dashboard Cards -->
<main class="flex-1">

    <!-- Card 1 -->
    <div class="bg-white p-4 shadow-md">

        <h2 class="text-2xl font-bold pb-4">Isi Data</h2>

        <!-- Main Step -->
        <div class="container mx-auto">

            <!-- Stepper -->
            <div class="flex justify-between items-center">

                @foreach ($mainSteps as $mainStep)

                <!-- Step -->
                <div class="flex flex-col items-center">
                    <div class="flex items-center justify-center w-10 h-10 bg-blue-500 text-white rounded-full">
                        {{ $mainStep['stepCount'] }}
                    </div>
                    <span class="mt-2 text-blue-500">{{ $mainStep['nama_kategori'] }}</span>
                </div>

                @if ($mainStep['isLastStep'] == false)
                <!-- Line Between Steps -->
                <div class="flex-auto border-t-2 border-blue-500 mx-4"></div>
                @endif


                @endforeach
            </div>

        </div>


    </div>

</main>


@endsection