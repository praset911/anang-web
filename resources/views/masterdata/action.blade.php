@extends('layouts.base')
@section('content')
@auth
<section class="intro">
    <div class="bg-image h-100">
        <div class="mask d-flex align-items-center h-100">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <div class="card shadow-2-strong" style="background-color: #f5f7fa;">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-borderless mb-0" id="dataTable">
                                        <thead>
                                            <tr>

                                                <th scope="col">NAME</th>
                                                <th scope="col">GENRE</th>
                                                <th scope="col">EPS</th>
                                                <th scope="col">ADDRESS</th>
                                                <th scope="col">Close</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>

                                                <td>Attack On Titan S3</td>
                                                <td>Action</td>
                                                <td>61</td>
                                                <td></td>
                                                <td>
                                                    <button type="button" class="btn btn-danger btn-sm px-3">
                                                        <i class="fas fa-times"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>

                                                <td>Demon Slayer: Kimetsu no Yaiba</td>
                                                <td>Action</td>
                                                <td>23</td>
                                                <td></td>
                                                <td>
                                                    <button type="button" class="btn btn-danger btn-sm px-3">
                                                        <i class="fas fa-times"></i>
                                                    </button>
                                                </td>
                                            </tr>

                                            <td>My Name</td>
                                            <td>Action, Drama</td>
                                            <td>30</td>
                                            <td></td>
                                            <td>
                                                <button type="button" class="btn btn-danger btn-sm px-3">
                                                    <i class="fas fa-times"></i>
                                                </button>
                                            </td>
                                            </tr>
                                           
                                            <tr>

                                                <td>Vincenzo</td>
                                                <td>Action,Drama</td>
                                                <td>36</td>
                                                <td></td>
                                                <td>
                                                    <button type="button" class="btn btn-danger btn-sm px-3">
                                                        <i class="fas fa-times"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>

                                                <td>Descendants of the Sun</td>
                                                <td>Drama</td>
                                                <td>43</td>
                                                <td></td>
                                                <td>
                                                    <button type="button" class="btn btn-danger btn-sm px-3">
                                                        <i class="fas fa-times"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                           
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endauth
@endsection