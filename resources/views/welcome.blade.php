@extends('layouts.template')
@section('content')
@foreach ($lugares as $lugare)
                                        <tr>
                                            
                                            
											<td>{{ $lugare->lugar }}</td>
											<td>{{ $lugare->imagen }}</td>
											<td>{{ $lugare->descripcion }}</td>
											<td>{{ $lugare->url }}</td>

                                            
                                            </td>
                                        </tr>
                                    @endforeach
@endsection