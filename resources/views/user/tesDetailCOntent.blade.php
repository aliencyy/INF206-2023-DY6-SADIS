@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{ asset('css/detailContent.css') }}">

<body>
    <div class="container m-5 p-2 rounded mx-auto bg-light shadow">
        <!-- App title section -->
        <div class="row m-1 p-4">
            
            <div class="col">
                <div class="p-1 h1 text-black text-center mx-auto display-inline-block">
                    <button class="d-flex btn-outline-primary rounded btn-sm">
                        <a href="/order" style="text-decoration: none;"><i class="fa-solid fa-backward me-2"></i>back</a>            
                    </button>
                    Formulir Pembuangan Sampah
                </div>
            </div>
        </div>
        <!-- Create todo section -->
        
        <div class="p-2 mx-4 border-black-25 border-bottom"></div>
        <!-- View options section -->
        
        <!-- Todo list section -->
        <div class="row mx-5 px-5 pb-3 w-80">
            <div class="col mx-auto">
                 <!-- Todo Item 1 -->

                <div class="row px-3 align-items-center todo-item rounded border-bottom">
                    <div class="col px-1 m-1 d-flex align-items-center">
                        <input type="text" class="form-control form-control-lg border-0 edit-todo-input bg-transparent rounded px-3" readonly value="Tanggal penjemputan" />
                    </div>
                    <div class="col-auto m-1 p-0 px-3 d-none">
                    </div>
                    <div class="col-auto m-1 p-0 ">
                        <div class="row d-flex align-items-center justify-content-end">
                            <div class="p-1 h1 text-primary text-center mx-auto display-inline-block">
                                <input type="text" class="form-control form-control-lg border-0 edit-todo-input bg-transparent rounded px-3" readonly value="{{ $orderan->tanggal_pengambilan }}" />
                            </div>
                        </div>
                        <div class="row todo-created-info">
                            <div class="col-auto d-flex align-items-center pr-2">
                                
                            </div>
                        </div>
                    </div>
                </div>

                @can ('admin')
                    <div class="row px-3 align-items-center todo-item rounded border-bottom">
                        <div class="col px-1 m-1 d-flex align-items-center">
                            <input type="text" class="form-control form-control-lg border-0 edit-todo-input bg-transparent rounded px-3" readonly value="Pembuang" />
                        </div>
                        <div class="col-auto m-1 p-0 px-3 d-none">
                        </div>
                        <div class="col-auto m-1 p-0 ">
                            <div class="row d-flex align-items-center justify-content-end">
                                <div class="p-1 h1 text-primary text-center mx-auto display-inline-block">
                                    <input type="text" class="form-control form-control-lg border-0 edit-todo-input bg-transparent rounded px-3" readonly value="{{ $orderan->user->email}}" />
                                </div>
                            </div>
                            <div class="row todo-created-info">
                                <div class="col-auto d-flex align-items-center pr-2">
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                @endcan

                <!-- Todo Item 2 -->
                <div class="row px-3 align-items-center todo-item rounded border-bottom">
                    
                    <div class="col px-1 m-1 d-flex align-items-center ">
                        <input type="text" class="form-control form-control-lg border-0 edit-todo-input bg-transparent rounded px-3" readonly value="jenis Sampah" />
                    </div>
                    <div class="col-auto m-1 p-0 px-3 d-none">
                    </div>
                    <div class="col-auto m-1 p-0 ">
                        <div class="row d-flex align-items-center justify-content-end">
                            <div class="p-1 h1 text-primary text-center mx-auto display-inline-block">
                                <input type="text" class="form-control form-control-lg border-0 edit-todo-input bg-transparent rounded px-3" readonly value="{{ $orderan->jenis_sampah }}" />
                            </div>
                        </div>
                        <div class="row todo-created-info">
                            <div class="col-auto d-flex align-items-center pr-2">
                                
                            </div>
                        </div>
                    </div>
                </div>

                <!-- daftar 3 -->
                <div class="row px-3 align-items-center todo-item rounded border-bottom">
                    
                    <div class="col px-1 m-1 d-flex align-items-center">
                        <input type="text" class="form-control form-control-lg border-0 edit-todo-input bg-transparent rounded px-3" readonly value="Jenis Pengolahan" />
                    </div>
                    <div class="col-auto m-1 p-0 px-3 d-none">
                    </div>
                    <div class="col-auto m-1 p-0 ">
                        <div class="row d-flex align-items-center justify-content-end">
                            <div class="p-1 h1 text-primary text-center mx-auto display-inline-block">
                                <input type="text" class="form-control form-control-lg border-0 edit-todo-input bg-transparent rounded px-3" readonly value="{{ $orderan->jenis_pengolahan }}" />
                            </div>
                        </div>
                        <div class="row todo-created-info">
                            <div class="col-auto d-flex align-items-center pr-2">
                                
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="row px-3 align-items-center todo-item rounded border-bottom">
                    
                    <div class="col px-1 m-1 d-flex align-items-center">
                        <input type="text" class="form-control form-control-lg border-0 edit-todo-input bg-transparent rounded px-3" readonly value="Berat" />
                    </div>
                    <div class="col-auto m-1 p-0 px-3 d-none">
                    </div>
                    <div class="col-auto m-1 p-0 ">
                        <div class="row d-flex align-items-center justify-content-end">
                            <div class="p-1 h1 text-primary text-center mx-auto display-inline-block">
                                <input type="text" class="form-control form-control-lg border-0 edit-todo-input bg-transparent rounded px-3" readonly value="{{ $orderan->berat }}" />
                            </div>
                        </div>
                        <div class="row todo-created-info">
                            <div class="col-auto d-flex align-items-center pr-2">
                                
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row px-3 align-items-center todo-item rounded border-bottom">
                    
                    <div class="col px-1 m-1 d-flex align-items-center">
                        <input type="text" class="form-control form-control-lg border-0 edit-todo-input bg-transparent rounded px-3" readonly value="Status pengolahan" />
                    </div>
                    <div class="col-auto m-1 p-0 px-3 d-none">
                    </div>
                    <div class="col-auto m-1 p-0 ">
                        <div class="row d-flex align-items-center justify-content-end">
                            <div class="p-1 h1 text-primary text-center mx-auto display-inline-block">
                                <input type="text" class="form-control form-control-lg border-0 edit-todo-input bg-transparent rounded px-3" readonly value="{{ $orderan->status_pengolahan }}" />
                            </div>
                        </div>
                        <div class="row todo-created-info">
                            <div class="col-auto d-flex align-items-center pr-2">
                                
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row px-3 align-items-center todo-item rounded">
                    
                    <div class="col px-1 m-1 d-flex align-items-center">
                        <input type="text" class="form-control form-control-lg border-0 edit-todo-input bg-transparent rounded px-3" readonly value="Keterangan Tambahan" />
                    </div>
                    <div class="col-auto m-1 p-0 px-3 d-none">
                    </div>
                </div>
                <div class="col px-4 m-3 d-flex align-items-center">
                    <input type="text" class="form-control form-control-lg border-1 edit-todo-input bg-transparent rounded px-3" readonly value="{{ $orderan->ket }}" placeholder="keterangan" />
                </div>
            </div>
        </div>
    </div>
        
</body>
    
@endsection
