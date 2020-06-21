@extends('layouts.app')

@include('inc.nav')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="row mb-0 pr-5">
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
                                            <a href="javascript:void(0)" onclick="showHide('block_id')" type="button" class="btn btn-outline-light btn-sm font-weight-bold">Опубликовать</a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <!--  *****  -->
                <!--  *****  -->
                <!--  *****  -->
                <div class="row mb-3" pr-5 id="block_id" style="display: none;">
                    <div class="col-md-12 p-0">
                        <div class="card card-body rounded-lg">
                            <a data-toggle="collapse" href="#multiCollapseExample0" role="button"
                               aria-expanded="false" aria-controls="multiCollapseExample0">
                                <h4 class="font-weight-bold">Реклама</h4>
                                <p>Маркетинг</p>
                                <div class="d-flex">
                                    <div class="col-2 p-0"><i class="far fa-comment-alt"></i> <span
                                            class="text-muted">0</span></div>
                                    <div class="col-2 p-0"><i class="fas fa-user-tie"></i> <span
                                            class="text-muted">0</span></div>
                                    <div class="flex-fill text-right align-self-center">
                                        <div class="progress" style="height: 4px;">
                                            <div class="progress-bar" role="progressbar" style="width: 0%;"
                                                 aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <div class="collapse multi-collapse mt-3" id="multiCollapseExample0">
                                <form action="">
                                    <div class="input-group">
                                        <input type="email" class="form-control form-control-sm" id="exampleInputEmail0"
                                               aria-describedby="emailHelp" placeholder="Введите свое предложение">
                                        <div class="input-group-append">
                                            <button class="btn btn-sm btn-outline-light" type="button"
                                                    id="button-addon2"><i class="far fa-paper-plane"></i></button>
                                        </div>
                                    </div>
                                </form>

                                <!-- ******* -->
                                <!-- comment -->
                                <!-- ******* -->

                            </div>
                        </div>
                    </div>
                </div>
                <!--  *****  -->
                <!--  *****  -->
                <!--  *****  -->

                <div class="row mb-3 pr-5">
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

                <div class="row mb-3  pr-5">
                    <div class="col-md-12 p-0">
                        <div class="card card-body rounded-lg">
                            <a data-toggle="collapse" href="#multiCollapseExample2" role="button"
                               aria-expanded="false" aria-controls="multiCollapseExample1">
                                <h4 class="font-weight-bold">Корпортивный праздник</h4>
                                <p>Продаумать юбилейный коропратив, обозначить тематику, место действия и остальные подробности.</p>
                                <div class="d-flex">
                                    <div class="col-2 p-0"><i class="far fa-comment-alt"></i> <span
                                            class="text-muted">25</span></div>
                                    <div class="col-2 p-0"><i class="fas fa-user-tie"></i> <span
                                            class="text-muted">148</span></div>
                                    <div class="flex-fill text-right align-self-center">
                                        <div class="progress" style="height: 4px;">
                                            <div class="progress-bar" role="progressbar" style="width: 45%;"
                                                 aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <div class="collapse multi-collapse mt-3" id="multiCollapseExample2">
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

                <div class="row mb-3 pr-5">
                    <div class="col-md-12 p-0">
                        <div class="card card-body rounded-lg">
                            <a data-toggle="collapse" href="#multiCollapseExample3" role="button"
                               aria-expanded="false" aria-controls="multiCollapseExample1">
                                <h4 class="font-weight-bold">Командировка</h4>
                                <p>Приезжаю в ваш регион, кто может организовать встречу?</p>
                                <div class="d-flex">
                                    <div class="col-2 p-0"><i class="far fa-comment-alt"></i> <span
                                            class="text-muted">15</span></div>
                                    <div class="col-2 p-0"><i class="fas fa-user-tie"></i> <span
                                            class="text-muted">231</span></div>
                                    <div class="flex-fill text-right align-self-center">
                                        <div class="progress" style="height: 4px;">
                                            <div class="progress-bar" role="progressbar" style="width: 10%;"
                                                 aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <div class="collapse multi-collapse mt-3" id="multiCollapseExample3">
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

            <!-- wall -->

            <div class="col-md-6">
                <div class="row mb-0 pl-5">
                    <div class="col-md-6 p-0">
                        <h5 class="font-weight-bold m-0">Инициативы</h5>
                    </div>
                    <div class="col-md-6 p-0">
                        <p class="text-right m-0">
                            <a class="p-0" data-toggle="collapse" href="#collapseExample13" role="button"
                               aria-expanded="false" aria-controls="collapseExample">
                                <span class="font-weight-bold"><i class="fas fa-plus-circle"></i> Добавить</span>
                            </a>
                        </p>
                    </div>
                    <div class="col-md-12 mb-3 p-0">
                        <div class="collapse multi-collapse mt-3" id="collapseExample13">
                            <div class="card card-body rounded-lg input-group-prepend gradient-card">
                                <h5 class="font-weight-bold h5-white">Нам важно ваше мнение!</h5>
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
                                        </div>
                                        <div class="col-2 p-0 mr-1">
                                        </div>
                                        <div class="flex-fill text-right align-self-center">
                                            <a href="javascript:void(0)" onclick="showHide('block_id')" type="button" class="btn btn-outline-light btn-sm font-weight-bold">Опубликовать</a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mb-3 pl-5">
                    <div class="col-md-12 p-0">
                        <div class="card card-body rounded-lg">
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
                                    <h6 class="font-weight-bold">Удаленка</h6>
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
    </div>

    <script type="text/javascript">
        function showHide(element_id) {
            //Если элемент с id-шником element_id существует
            if (document.getElementById(element_id)) {
                //Записываем ссылку на элемент в переменную obj
                var obj = document.getElementById(element_id);
                //Если css-свойство display не block, то:
                if (obj.style.display != "block") {
                    obj.style.display = "block"; //Показываем элемент
                }
            }
            //Если элемент с id-шником element_id не найден, то выводим сообщение
            else alert("Элемент с id: " + element_id + " не найден!");
        }
    </script>
@endsection
