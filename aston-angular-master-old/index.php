<!DOCTYPE html>
<html ng-app="MonApplication">

<head>
    <meta charset="utf-8">
    <title>AngularJS</title>
    <style type="text/css">
    	.ma-class{
    		color: red;
    	}
    </style>
</head>

<body>

   
    <a ng-href="#/auteur/{{id_auteur}}">
        <input type="submit" value="Voir" ng-model="id_auteur">
    </a>
    

	<ng-view></ng-view>
	
    <script src="bower_components/angular/angular.min.js"></script>
    <script src="bower_components/angular-route/angular-route.min.js"></script>
    <script type="text/javascript" src="app/config/app.js"></script>
    <script type="text/javascript" src="app/src/controllers/controller.js"></script>
</body>

</html>