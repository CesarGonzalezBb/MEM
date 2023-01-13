<x-app-layout>

    @if (session('error_rules'))
        <x-alert :message="session('error_rules')" title="Warning Title" type="error"></x-alert>
    @elseif (session('success'))
        <x-alert :message="session('success')" title="Agregar producto:" type="success"></x-alert>
    @elseif (session('error'))
        <x-alert :message="session('error')" title="Agregar producto:" type="error"></x-alert>
    @endif


    <div class="row page-titles bg-transparent">
        <div class="col-md-6 col-6 align-self-center">
            <div class="row">
                <label for="lname2" class="col-sm-4 text-end txt-negro f-bold h2">Mis datos</label>
                <div class="col-sm-8">
                    <div class="input-wrapper">
                        <input type="search" id="searchInput" class="searchInput" placeholder="Buscar" />
                        <svg id="icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" class="input-icon">
                            <defs>
                                <style>
                                    .cls-1 {
                                        fill: none;
                                    }
                                </style>
                            </defs>
                            <path
                                d="M29,27.5859l-7.5521-7.5521a11.0177,11.0177,0,1,0-1.4141,1.4141L27.5859,29ZM4,13a9,9,0,1,1,9,9A9.01,9.01,0,0,1,4,13Z"
                                transform="translate(0 0)" />
                            <rect id="_Transparent_Rectangle_" data-name="&lt;Transparent Rectangle&gt;"
                                class="cls-1" />
                        </svg>
                    </div>
                </div>
            </div>
            {{-- <ol class="breadcrumb mb-0 mt-2 mx-3">
                <li class="breadcrumb-item"><a href="#" class="text-dark">RRHH</a></li>
                <li class="breadcrumb-item"><a href="#" class="text-dark">Reclutamiento</a></li>
                <li class="breadcrumb-item">Vacantes</li>
            </ol> --}}
        </div>
        <div class="col-md-6 col-6 align-self-center">
            <div class="row">
                <div class="col-md-11 d-flex justify-content-end">
                    <div class="d-flex align-items-center">
                        <img src="{{asset($user->photo)}}" class="rounded-circle" width="40">
                        <span class="ms-3 fw-normal txt-negro">{{$user->name}} {{$user->lastname}}</span>
                    </div>
                </div>
                <div class="col-md-1 align-self-center">
                    <div class="ms-auto">
                        <div class="dropdown">
                            <a href="#" class="link" id="new" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                <img src="{{ asset('img/portal/otro/tres_puntos.svg') }}" width="26" alt="">
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="new">
                                <li>
                                    <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                        data-bs-placement="top" title="Editar" data-bs-target="#">
                                        <img style="margin-right: 10px" src="{{ asset('img/portal/otro/editar.svg') }}"
                                            width="18" alt="">
                                        Editar
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                        data-bs-placement="top" title="Eliminar" data-bs-target="#">
                                        <img style="margin-right: 10px" src="{{ asset('img/portal/otro/delete.svg') }}"
                                            width="18" alt="">Eliminar
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col-6">
            <div class="card">
                <div class="card-body my-3 mx-3">
                    <div class="row">
                        <div class="col-3">
                            <div class="text-center">
                                <a href="javascript:changeImgPerfil()">
                                    <img src="{{asset($user->photo)}}" alt="edit" class="img-thumbnail rounded-circle bg-azul" width="300">
                                </a> 
                            </div>
                        </div>
                        <div class="col-7">
                            <h3 class="f-bold txt-negro">{{$user->name}} {{$user->lastname}}</h3>
                            <p class="txt-obscuro p-0 m-0">Rol: Super Admin</p>
                            <div class="modal-body mb-3">
                                <div class="container-input">
                                    <div class="mb-3" style="display: none;">
                                        <div class="container-input">
                                            <form action="{{route('admin.perfil.addImg', $user->id) }}" id="formImg" method="post" enctype="multipart/form-data">
                                                @csrf
                                                <input type="file" name="img_perfil" id="img_perfil"
                                                    class="inputfile inputfile-style"
                                                    data-multiple-caption="{count} archivos seleccionados" accept="image/*"/>
                                                <label id="imgName" name ="imgName" for="img_perfil"><span></span></label>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-2"></div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body my-3 mx-3">
                    <div class="row mb-3">
                        <div class="col-9">
                            <h4 class="f-bold txt-negro">Mi contraseña</h4>
                        </div>
                        <div class="col-3">
                            <a href="#" data-bs-toggle="modal" data-bs-placement="top" data-bs-target="#editPass" title="Editar"
                             class="derecha">
                                <img src="{{asset('img/portal/otro/editar.svg')}}" alt="edit" width="20">
                            </a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-3 mb-2">
                            <p class="f-normal txt-obscuro">Contraseña:</p>
                        </div>
                        <div class="col-7 mb-2">
                            <p class="f-normal txt-obscuro">*************</p>
                        </div>
                        <div class="col-2 mb-2"></div>
                        <div class="col-3"></div>
                        <div class="col-7">
                            <button type="button" class="btn btn-normal w-100" data-bs-toggle="modal" data-bs-placement="top" title="Editar"
                                data-bs-target="#editPass"> Modificar contraseña</button>
                        </div>
                        <div class="col-2"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-6">
            <div class="card">
                <div class="card-body my-3 mx-3">
                    <div class="row mb-3">
                        <div class="col-9">
                            <h4 class="f-bold txt-negro">Mis Datos</h4>
                        </div>
                        <div class="col-3">
                            <a href="" data-bs-toggle="modal" data-bs-placement="top" data-bs-target="#editData" class="derecha">
                                <img src="{{asset('img/portal/otro/editar.svg')}}" alt="edit" width="20">
                            </a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-3">
                            <p class="f-normal txt-obscuro">Nombre:</p>
                        </div>
                        <div class="col-9">
                            <p class="f-normal txt-obscuro">{{$user->name}} {{$user->lastname}}</p>
                        </div>
                        <div class="col-3">
                            <p class="f-normal txt-obscuro">Correo:</p>
                        </div>
                        <div class="col-9">
                            <p class="f-normal txt-obscuro">{{$user->email}}</p>
                        </div>
                        <div class="col-3">
                            <p class="f-normal txt-obscuro">Teléfono:</p>
                        </div>
                        <div class="col-9">
                            <p class="f-normal txt-obscuro">{{$user->phone}}</p>
                        </div>
                        <div class="col-3">
                            <p class="f-normal txt-obscuro">Idioma:</p>
                        </div>
                        <div class="col-9">
                            <p class="f-normal txt-obscuro">{{$user->languaje}}</p>
                        </div>
                        <div class="col-3 mb-4">
                            <p class="f-normal txt-obscuro">Zona horaria:</p>
                        </div>
                        <div class="col-9 mb-4">
                            <p class="f-normal txt-obscuro">{{$user->zone}}</p>
                        </div>

                        <div class="col-3"></div>
                        <div class="col-7">
                            <button type="button" class="btn btn-normal w-100" data-bs-toggle="modal" data-bs-placement="top" title="Editar"
                                data-bs-target="#editData"> Editar datos </button>
                        </div><div class="col-2"></div>
                        <div class="col-2"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('portal.user.perfil.components.edit_data')
    @include('portal.user.perfil.components.edit_pass')

</x-app-layout>