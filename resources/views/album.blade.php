@extends('layouts.admin')
@section('contenido')

<div class="col-12">
    <div class="page-header">
      <h4 class="page-title">Albunes</h4>
    </div>

    <div class="row">

      <div class="col-lg-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">



              <h4 class="card-title">Lista de Fotos</h4>

              <table id="dataTable" class="table table-striped">
                <thead>
                  <tr>
                    <th>Nombre Album</th>
                    <th>Ver Album</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($photos as $photo)
                        <tr>
                            <td>{{ $photo['title']}}</td>
                            <td>
                                <img width="40%" src="{{$photo['url']}}" alt="">
                            </td>
                        </tr>
                    @endforeach
                </tbody>
              </table>

            </div>
          </div>
        </div>

    </div>

  </div>
