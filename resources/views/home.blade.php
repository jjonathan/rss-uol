@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Notícias</div>
                <!-- Table -->
                <table class="table">
                    <tbody>
                        @foreach ($noticias as $noticia)
                            <tr>
                                <td>
                                    <a href="{{ $noticia->link }}" target="_blank">{{ $noticia->title }}</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
