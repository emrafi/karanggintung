@extends('layouts.app')
{{-- Customize layout sections --}}

@section('subtitle', 'CCTV')
@section('content_header_title', 'Home')
@section('content_header_subtitle', 'Data CCTV')
@section('plugins.Datatables', true)

{{-- Content body: main page content --}}

@section('content_body')

    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <x-adminlte-button class="btn-sm bg-gradient-info" type="button" label="Add CCTV" data-toggle="modal"
                            data-target="#modalCctv" icon="fas fa-plus" />
                    </div>
                    <div class="card-body">
                        <table id="example2" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Addres</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                {{-- @foreach ($data->$data as $data)
                                    <tr>
                                        <td>{{ }}</td>
                                    </tr>
                                @endforeach --}}
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Custom --}}
    <x-adminlte-modal id="modalCctv" title="Adding Data CCTV" size="lg" theme="info" icon="fas fa-camera" v-centered
        static-backdrop>
        <div class="row">
            
            <x-adminlte-input name="title" label="Title" placeholder="ex:cctv1" fgroup-class="col-md-12"
                disable-feedback />
            <x-adminlte-input name="description" label="Description" placeholder="cctv location" fgroup-class="col-md-12"
                disable-feedback />
            <x-adminlte-input name="address" label="Address" placeholder="cctv address" fgroup-class="col-md-12"
                disable-feedback />
        </div>
        <x-slot name="footerSlot">
            <x-adminlte-button class="mr-auto" theme="success" label="Submit" />
            <x-adminlte-button theme="warning" label="Dismiss" data-dismiss="modal" />
        </x-slot>
    </x-adminlte-modal>


@stop
