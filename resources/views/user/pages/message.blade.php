@extends('user.layout.app')
@section('title', 'Home Page')
@section('content')
    <div class="row g-4">

        <div class="bg-light rounded h-100 p-4">
            <h6 class="mb-4">Mesajlar</h6>
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">İsim</th>
                    <th scope="col">Eposta</th>
                    <th scope="col">Telefon</th>
                    <th scope="col">Mesaj</th>
                    <th scope="col">İşlemler</th>
                </tr>
                </thead>
                <tbody>
                @foreach($messages as $message)
                    <tr>
                        <th scope="row">{{$message->id}}</th>
                        <td>{{$message->name}}</td>
                        <td>{{$message->email}}</td>
                        <td>{{$message->phone}}</td>
                        <td>{{$message->content}}</td>
                        <td>
                            <a class="dropdown-item" href="{{ route('panel.message.destroy', $message->id) }}"
                               onclick="event.preventDefault(); document.getElementById('delete-form-{{ $message->id }}').submit();">
                                <button class="btn btn-danger btn-sm">Sil</button>
                            </a>
                            <form id="delete-form-{{ $message->id }}"
                                  action="{{ route('panel.message.destroy', $message->id) }}" method="POST"
                                  style="display: none;">
                                @csrf
                                @method('DELETE')
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection
