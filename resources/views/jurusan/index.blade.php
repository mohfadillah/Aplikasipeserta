@extends ('layouts.app')
@section ('sidebarTitle', 'Jurusan')
@section('content')
<div class="table-responsive">
    <div align="right" class="mb-3">
        <a href="{{route('jurusan.create')}}" class="btn btn-sm btn-warning text-white">Tambah Data</a>
    </div>
    <table class="table table-bordered m-0">
        <thead>
            <tr>
                <th>No</th>
                <th>Jurusan</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($datajurusan as $key => $dj )
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$dj->nama_jurusan}}</td>
                    <td>
                        <a href="{{route('jurusan.edit', $dj->id)}}" class="badge border border-success text-success">Edit</a>
                        <form method="post" action="{{route('jurusan.destroy', $dj->id)}}" class="d-inline">
                        @csrf
                        <input type="hidden" value="DELETE" name="_method">
                        <button class="badge border border-danger text-danger" type="submit">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
        </tbody>
    </table>
</div>
@endsection