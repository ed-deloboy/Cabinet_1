<div class="container-fluid">
    <section class="header_finance">
        <div class="card">
            <div class="card-body">
                <div class="card-title">
                    <h5 class="mb-3 text-white p-2 bg-light rounded d-inline-block">Баланс: <span>43250</span> <i class="fadeIn animated bx bx-ruble"></i></h5>
                    <input type="hidden" name="balance" value="43250">
                </div>
                <ul class="row row-cols-3 nav nav-pills mb-3" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a class="nav-link border rounded active" data-bs-toggle="pill" href="#danger-pills-home" role="tab" aria-selected="false">
                            <div class="d-flex align-items-center justify-content-center">
                                <div class="tab-icon">
                                    <i class="fadeIn animated bx bx-export font-18 me-1"></i>
                                </div>
                                <div class="tab-title">Вывод</div>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link border rounded" data-bs-toggle="pill" href="#danger-pills-profile" role="tab" aria-selected="false">
                            <div class="d-flex align-items-center justify-content-center">
                                <div class="tab-icon">
                                    <i class="fadeIn animated bx bx-import font-18 me-1"></i>
                                </div>
                                <div class="tab-title">Пополнить</div>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link border rounded" data-bs-toggle="pill" href="#danger-pills-contact" role="tab" aria-selected="true">
                            <div class="d-flex align-items-center justify-content-center">
                                <div class="tab-icon">
                                    <i class="fadeIn animated bx bx-transfer-alt font-18 me-1"></i>
                                </div>
                                <div class="tab-title">Перевод</div>
                            </div>
                        </a>
                    </li>
                </ul>
                <div class="tab-content" id="danger-pills-tabContent">
                    <!-- export -->
                    <div class="tab-pane fade active show" id="danger-pills-home" role="tabpanel">
                        <form id="exportMoney">
                            <div class="card-body p-2">
                                <hr>

                                <div class="row row-cols-1 row-cols-lg-2">
                                    <div class="col p-3">
                                        <label for="exportCountMoney" class="form-label">Сумма вывода</label>
                                        <div class="input-group input-group-lg"> <span class="input-group-text">
                                                <i class="fadeIn animated bx bx-ruble"></i></span>
                                            <input type="number" class="form-control border-start-0" id="exportCountMoney" name="exportCountMoney" placeholder="Сумма">
                                        </div>
                                    </div>
                                    <div class="col p-3">
                                        <label for="cardNumber" class="form-label">Номер карты</label>
                                        <div class="input-group input-group-lg"> <span class="input-group-text">
                                                <i class="fadeIn animated bx bx-credit-card"></i></span>
                                            <input type="text" class="card_number form-control border-start-0" id="cardNumber" name="cardNumber" placeholder="Номер карты">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 p-3">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="gridCheck3">
                                        <label class="form-check-label" for="gridCheck3">Запомнить карту</label>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="d-grid">
                                        <button type="submit" class="btn btn-light btn-lg px-5">Вывести</button>
                                    </div>
                                </div>
                                <hr>
                                <div class="col-12 text-center">

                                </div>


                            </div>
                        </form>
                    </div>
                    <!-- import -->
                    <div class="tab-pane fade" id="danger-pills-profile" role="tabpanel">
                        <form id="importMoney">
                            <div class="card-body p-2">
                                <hr>
                                <div class="row row-cols-1 row-cols-lg-2">
                                    <div class="col p-3">
                                        <label for="importCountMoney" class="form-label">Сумма пополнения</label>
                                        <div class="input-group input-group-lg"> <span class="input-group-text">
                                                <i class="fadeIn animated bx bx-ruble"></i></span>
                                            <input type="number" class="form-control border-start-0" id="importCountMoney" name="importCountMoney" placeholder="Сумма">
                                        </div>
                                    </div>
                                    <div class="col p-3">
                                        <label for="importСardNumber" class="form-label">Номер карты</label>
                                        <div class="input-group input-group-lg"> <span class="input-group-text">
                                                <i class="fadeIn animated bx bx-credit-card"></i></span>
                                            <input type="text" class="card_number form-control border-start-0" id="importСardNumber" name="importСardNumber" placeholder="Номер карты">
                                        </div>
                                    </div>
                                </div>
                                <!-- данные держателя карты -->
                                <div class="row row-cols-1 row-cols-lg-3">
                                    <!-- name -->
                                    <div class="col p-3">
                                        <label for="importСardName" class="form-label">Имя держателя карты</label>
                                        <div class="input-group input-group-lg"> <span class="input-group-text">
                                                <i class="fadeIn animated bx bx-user-circle"></i></span>
                                            <input type="text" class="form-control border-start-0" id="importСardName" name="importСardName" placeholder="Ivanov Ivan">
                                        </div>
                                    </div>
                                    <!-- date -->
                                    <div class="col p-3">
                                        <label for="impordCardDate" class="form-label">Скрок действия карты</label>
                                        <div class="input-group input-group-lg">
                                            <span class="input-group-text">
                                                <i class="fadeIn animated bx bx-revision"></i>
                                            </span>
                                            <input type="text" class="form-control border-start-0" id="impordCardDate" name="impordCardDate">
                                        </div>
                                    </div>
                                    <!-- cvc -->
                                    <div class="col p-3">
                                        <label for="impordCardCvcCode" class="form-label">CVC код</label>
                                        <div class="input-group input-group-lg">
                                            <span class="input-group-text">
                                                <i class="fadeIn animated bx bx-barcode"></i>
                                            </span>
                                            <input type="password" class="form-control border-start-0" id="impordCardCvcCode" name="impordCardCvcCode" maxlength="3" minlength="3">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6 p-3">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="gridCheck3">
                                        <label class="form-check-label" for="gridCheck3">Запомнить карту</label>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="d-grid">
                                        <button type="submit" class="btn btn-light btn-lg px-5">Пополнить</button>
                                    </div>
                                </div>
                                <hr>
                                <div class="col-12 text-center">

                                </div>


                            </div>
                        </form>
                    </div>
                    <!-- transfer -->
                    <div class="tab-pane fade" id="danger-pills-contact" role="tabpanel">

                        <form id="transferMoney">
                            <div class="card-body p-2">
                                <hr>
                                <div class="row row-cols-1 row-cols-lg-2">
                                    <div class="col p-3">
                                        <label for="transferCountMoney" class="form-label">Сумма перевода</label>
                                        <div class="input-group input-group-lg"> <span class="input-group-text">
                                                <i class="fadeIn animated bx bx-ruble"></i></span>
                                            <input type="number" class="form-control border-start-0" id="transferCountMoney" name="transferCountMoney" placeholder="Сумма">
                                        </div>
                                    </div>
                                    <div class="col p-3">
                                        <label for="transferСardNumber" class="form-label">Номер карты получателя</label>
                                        <div class="input-group input-group-lg"> <span class="input-group-text">
                                                <i class="fadeIn animated bx bx-credit-card"></i></span>
                                            <input type="text" class="card_number form-control border-start-0" id="transferСardNumber" name="transferСardNumber" placeholder="Номер карты">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 pt-3 pb-3">
                                    <div class="d-grid">
                                        <button type="submit" class="btn btn-light btn-lg px-5">Перевести</button>
                                    </div>
                                </div>
                                <hr>
                                <div class="col-12 text-center">

                                </div>


                            </div>
                        </form>
                    </div>
                </div>

                <div class="card-body">
                    <table class="table mb-0 table-dark table-striped">
                        <thead>
                            <tr>
                                <th scope="col">Номер операции</th>
                                <th scope="col">Тип операции</th>
                                <th scope="col">Статус</th>
                                <th scope="col">Сумма</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>5678</td>
                                <td>Вывод</td>
                                <td>Обработка</td>
                                <td>73200 <i class="fadeIn animated bx bx-ruble"></i></td>
                            </tr>
                            <tr>
                                <td>4785</td>
                                <td>Перевод</td>
                                <td>Обработка</td>
                                <td>3000 <i class="fadeIn animated bx bx-ruble"></i></td>
                            </tr>
                            <tr>
                                <td>4567</td>
                                <td>Вывод</td>
                                <td>Выполнено</td>
                                <td>56700 <i class="fadeIn animated bx bx-ruble"></i></td>
                            </tr>
                            <tr>
                                <td>3457</td>
                                <td>Вывод</td>
                                <td>Выполнено</td>
                                <td>23987 <i class="fadeIn animated bx bx-ruble"></i></td>
                            </tr>

                            <tr>
                                <td>3257</td>
                                <td>Пополнение</td>
                                <td>Выполнено</td>
                                <td>7990 <i class="fadeIn animated bx bx-ruble"></i></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
</div>