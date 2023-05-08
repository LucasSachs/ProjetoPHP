@extends ('teste')

@section('title', 'Services Page')

@section('content')
    <h1>Essa pagina eh a pagina de servicos!</h1>

    <ul>
        @forelse($servicos as $service)
            <li>{{ $service }}</li>
        @empty
            <p>Nenhum servico disponivel</p>
        @endforelse
    </ul>
@endsection
