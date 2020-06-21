@extends('layouts.app')

@include('inc.nav')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="row mb-0">
                    <div class="col-md-6 p-0">
                        <h5 class="font-weight-bold m-0">Задачи</h5>
                    </div>
                    <div class="col-md-6 p-0">
                        <p class="text-right m-0">
                            <a class="p-0" data-toggle="collapse" href="#collapseExample" role="button"
                               aria-expanded="false" aria-controls="collapseExample">
                                <span class="font-weight-bold"><i class="fas fa-plus-circle"></i> Добавить</span>
                            </a>
                        </p>
                    </div>
                    <div class="col-md-12 mb-3 p-0">
                        <div class="collapse multi-collapse mt-3" id="collapseExample">
                            <div class="card card-body rounded-lg input-group-prepend gradient-card">
                                <h5 class="font-weight-bold h5-white">Сила волка в стае, сила стаи в волке!</h5>
                                <form action="" class="m-0">
                                    <div class="form-group mb-2">
                                        <input type="text" class="form-control form-control-sm"
                                               placeholder="Введите заголовок">
                                    </div>
                                    <div class="form-group mb-2">
                                        <input type="text" class="form-control form-control-sm"
                                               placeholder="Введите текст">
                                    </div>
                                    <div class="form-group mb-2">

                                        <div class="autocomplete">
                                            <input id="myInput" type="text" name="myCountry" class="form-control form-control-sm" placeholder="Отметье департамент, отдел или людей @">
                                        </div>
                                    </div>
                                    <div class="d-flex">
                                        <div class="col-2 p-0 mr-1">
                                            <input type="date" class="form-control form-control-sm">
                                        </div>
                                        <div class="col-2 p-0 mr-1">
                                            <input type="datetime-local" class="form-control form-control-sm">
                                        </div>
                                        <div class="flex-fill text-right align-self-center">
                                            <button type="button" class="btn btn-outline-light btn-sm font-weight-bold">Опубликовать</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 p-0">
                        <div class="card card-body rounded-lg">
                            <a data-toggle="collapse" href="#multiCollapseExample1" role="button"
                               aria-expanded="false" aria-controls="multiCollapseExample1">
                                <h4 class="font-weight-bold">Дистанционная работа</h4>
                                <p>Как организовать работу на удаленке, не теряя продуктивности в рабочих процессах.</p>
                                <div class="d-flex">
                                    <div class="col-2 p-0"><i class="far fa-comment-alt"></i> <span
                                            class="text-muted">2</span></div>
                                    <div class="col-2 p-0"><i class="fas fa-user-tie"></i> <span
                                            class="text-muted">67</span></div>
                                    <div class="flex-fill text-right align-self-center">
                                        <div class="progress" style="height: 4px;">
                                            <div class="progress-bar" role="progressbar" style="width: 25%;"
                                                 aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <div class="collapse multi-collapse mt-3" id="multiCollapseExample1">
                                <form action="">
                                    <div class="input-group">
                                        <input type="email" class="form-control form-control-sm" id="exampleInputEmail1"
                                               aria-describedby="emailHelp" placeholder="Введите свое предложение">
                                        <div class="input-group-append">
                                            <button class="btn btn-sm btn-outline-light" type="button"
                                                    id="button-addon2"><i class="far fa-paper-plane"></i></button>
                                        </div>
                                    </div>
                                </form>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="d-flex mt-3">
                                            <div class="flex-fill p-0 align-self-center">
                                                <ul class="list-inline m-0">
                                                    <li class="list-inline-item">
                                                        <img src="{{ asset('storage/Ellipse_18.png') }}" width="35"
                                                             height="35"
                                                             alt=""
                                                             loading="lazy">
                                                    </li>
                                                    <li class="list-inline-item align-middle">
                                                        <strong class="font-weight-bold">Тимофеева Арсана</strong>
                                                        <p class="small m-0">Менеджер</p>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="flex-fill text-right align-self-center">
                                                <span class="badge badge-pill badge-primary">+47</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 mt-3">
                                        <p>Уровень доверия в команде, работающей удалённо, должен быть намного выше, чем
                                            в стандартном офисном коллективе, и в дополнение к этому необходимо высокое
                                            качество целеполагания.</p>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="d-flex mt-3">
                                            <div class="flex-fill p-0 align-self-center">
                                                <ul class="list-inline m-0">
                                                    <li class="list-inline-item">
                                                        <img src="{{ asset('storage/Ellipse_19.png') }}" width="35"
                                                             height="35"
                                                             alt=""
                                                             loading="lazy">
                                                    </li>
                                                    <li class="list-inline-item align-middle">
                                                        <strong class="font-weight-bold">Трапездникова Иванка</strong>
                                                        <p class="small m-0">Специалист</p>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="flex-fill text-right align-self-center">
                                                <span class="badge badge-pill badge-primary">+20</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 mt-3">
                                        <p>Уровень доверия в команде, работающей удалённо, должен быть намного выше, чем
                                            в стандартном офисном коллективе, и в дополнение к этому необходимо высокое
                                            качество целеполагания.</p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">

            </div>
        </div>
    </div>
@endsection
