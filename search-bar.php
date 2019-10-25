 <!DOCTYPE html>
 <html>
 <head>
    <link rel="stylesheet" type="text/css" href="css/search-bar_styles.css">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
        <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">

        <!-- Vendor CSS-->
        <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
        <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

        <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/jquery-validate/jquery.validate.min.js"></script>
    <script src="vendor/bootstrap-wizard/bootstrap.min.js"></script>
    <script src="vendor/bootstrap-wizard/jquery.bootstrap.wizard.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>
    <script src="js/global.js"></script>

 <body>

 <div class="page-wrapper bg-img-1 p-t-200 p-b-120">
    <div class="wrapper wrapper--w900">
        <div class="card card-4">
            <div class="card-body">
                <ul class="tab-list">
                    <li class="tab-list__item active">
                        <a class="tab-list__link" href="#tab1" data-toggle="tab">Destination</a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active" id="tab1">
                        <form method="POST" action="#">
                            <div class="input-group input-group-big">
                                <label class="label">where:</label>
                                <input class="input--style-1" type="text" name="address" placeholder="City, region or specific hotel" required="required">
                                <i class="zmdi zmdi-search input-group-symbol"></i>
                            </div>
                            <div class="row row-space">
                                <div class="col-2">
                                    <div class="input-group">
                                        <label class="label">check-in:</label>
                                        <input class="input--style-1" type="text" name="check-in" placeholder="mm/dd/yyyy" id="input-start">
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="input-group">
                                        <label class="label">check-out:</label>
                                        <input class="input--style-1" type="text" name="check-out" placeholder="mm/dd/yyyy" id="input-end">
                                    </div>
                                </div>
                            </div>
                            <div class="row row-space">
                                <div class="col-2">
                                    <div class="input-group">
                                        <label class="label">travellers:</label>
                                        <div class="input-group-icon" id="js-select-special">
                                            <input class="input--style-1 input--style-1-small" type="text" name="traveller" value="1 Adult, 0 Children, 1 Room" disabled="disabled" id="info">
                                            <i class="zmdi zmdi-chevron-down input-icon"></i>
                                        </div>
                                        <div class="dropdown-select">
                                            <ul class="list-room">
                                                <li class="list-room__item">
                                                    <span class="list-room__name">Room 1</span>
                                                    <ul class="list-person">
                                                        <li class="list-person__item">
                                                            <span class="name">Adults</span>
                                                            <div class="quantity quantity1">
                                                                <span class="minus">-</span>
                                                                <input class="inputQty" type="number" min="0" value="1">
                                                                <span class="plus">+</span>
                                                            </div>
                                                        </li>
                                                        <li class="list-person__item">
                                                            <span class="name">Children</span>
                                                            <div class="quantity quantity2">
                                                                <span class="minus">-</span>
                                                                <input class="inputQty" type="number" min="0" value="0">
                                                                <span class="plus">+</span>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                            <div class="list-room__footer">
                                                <a href="#" id="btn-add-room">Add room</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-2">
                                    <button class="btn-submit" type="submit">search</button>
                                </div>
                            </div>
                        </form>
                    </div>
                  </div>
                </div>
            </div>
        </div>
    </div>
    <br>
</body>
</html>
