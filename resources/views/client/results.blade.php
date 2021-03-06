@extends('layouts.client')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Hasil Test Anda</div>

                <div class="card-body">
                    <p class="mt-5">Total Skor: {{ $result->total_points }} Skor</p>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Soal Pertanyaan</th>
                                <th>Skor</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($result->questions as $question)
                                <tr>
                                    <td>{{ $question->question_text }}</td>
                                    <td>{{ $question->pivot->points }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection