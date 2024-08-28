@extends('layout')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>heading</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('clothing.create') }}">Create new record</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Stock</th>
            <th>Description</th>
            <th width="280px">Action</th>
        </tr>
            @foreach($cloth as $clothing)
        <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $clothing->name }}</td>
                <td>{{ $clothing->stock }}</td>
                <td>{{ $clothing->description }}</td>
                <td class="text-center">
                    <form action="{{ route('clothing.destroy',$clothing->id) }}" method="POST">

                        <a class="btn btn-info btn-sm" href="{{ route('clothing.show',$clothing->id) }}">Show</a>

                        <a class="btn btn-primary btn-sm" href="{{ route('clothing.edit',$clothing->id) }}">Edit</a>

                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger btn-sm"
                                onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete
                        </button>
                    </form>
                </td>
        </tr>
            @endforeach
    </table>
    {!! $cloth->links() !!}
@endsection
