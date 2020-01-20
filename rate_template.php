<?php
session_start();
if(!isset($_SESSION['username'])){
  header('location:index.php');
}
?>
    <!DOCTYPE html>
    <html>

    <head>
        <title>Rate a beer</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/rate_template.css">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css">

    </head>

    <body ng-app="rateapp">
        <div ng-controller="ratecontroller">
            <div class="container">
                <form method="POST" action="insert.php">
                    <div class="row">
                        <div class="form-group">
                            <div class="col-75">
                                <input type="text" ng-model="brand" placeholder="Brand.." class="form-control" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-75">
                                <input type="text" ng-model="brewer" placeholder="Brewer..." class="form-control" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group">
                            <div class="col-75">
                                <input type="text" ng-model="country" placeholder="Country..." class="form-control" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-75">
                                <input type="text" ng-model="style" placeholder="Style..." class="form-control" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group">
                            <div class="col-75">
                                <input type="text" ng-model="alc" placeholder="Alc % ..." class="form-control" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-75">
                                <input type="text" ng-model="price" placeholder="Price..." class="form-control" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group">
                            <div class="col-75">
                                <input type="text" ng-model="foam" placeholder="Foam holding..." class="form-control" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-75">
                                <input type="text" ng-model="transparency" placeholder="Transparency..." class="form-control" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group">
                            <div class="col-75">
                                <input type="text" ng-model="srm" placeholder="SRM(color)..." class="form-control" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-75">
                                <input type="text" ng-model="ibu" placeholder="IBU(bitterness)..." class="form-control" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group">
                            <div class="col-75">
                                <label for="subject">
                                    <h6>Glass</h6></label>
                                <select ng-model="glass">
                                    <option *ngFor="Pint">Pint</option>
                                    <option *ngFor="Stange">Stange</option>
                                    <option *ngFor="Weizen">Weizen</option>
                                    <option *ngFor="Snifter">Snifter</option>
                                    <option *ngFor="Pilsner">Pilsner</option>
                                    <option *ngFor="Goblet">Goblet</option>
                                    <option *ngFor="Tulip">Tulip</option>
                                    <option *ngFor="Mug">Mug</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-75">
                                <label for="subject">
                                    <h6>Served from</h6></label>
                                <select ng-model="vessel">
                                    <option *ngFor="Bottle">Bottle</option>
                                    <option *ngFor="Can">Can</option>
                                    <option *ngFor="Draught">Draught</option>
                                    <option *ngFor="Barrel">Barrel</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <textarea ng-model="notes" placeholder="Notes : In company of (friends)...
Date... Place... 
RATE..?/10 " style="height:80px"></textarea>
                    </div>
            </div>
            <div class="col-75">
                <a href="rate_template.php" class="submit btn-warning btn-lg active" role="button" aria-pressed="true" value="Submit new" ng-click="insertdata()" />Submit new</a>

                <p ng-init="name = '<?php echo $_SESSION['username'];?> '" class="float-right">
                </p>
                </form>
                <a href="table.php" class="check btn-warning btn-lg active" role="button" aria-pressed="true">All beers rated</a>
            </div>
        </div>
        </div>

        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.14/angular.min.js"></script>
        <script src="js/vendor/jquery-3.4.1.min.js"></script>
        <script src="js/vendor/modernizr-3.7.1.min.js"></script>
        <script src="js/main.js"></script>
    </body>

    </html>