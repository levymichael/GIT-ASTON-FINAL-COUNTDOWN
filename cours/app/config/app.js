            
var app=angular.module("MonApplication",["ngRoute"]);

app.config(function($routeProvider){
	$routeProvider.when("/",{
		templateur1:"/app/views/accueil.html",
		controller:"acceuilController"
	})when('/auteurs'{
		templateur1:"/app/views/auteurs.html",
		controller:"acceuilController"
	})when('/auteur'{
		templateur1:"/app/views/auteur.html",
		controller:"acceuilController"
	})
})