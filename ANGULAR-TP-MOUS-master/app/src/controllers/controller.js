
app.controller("accueilController", 
	function($scope) {
	console.log("accueilController");
});

app.controller("auteursController", 
	function($scope, $http) {
	console.log("auteursController");
	$http.get('app/resources/serveur.php', 
	{
		params: {method: 'getAuteurs'}
	}).then(function(result) {
		console.log(result.data);
		$scope.auteurs = result.data;
	})
});

app.controller("auteurController", 
	function($scope, $routeParams, $http) {
	console.log("auteurController", $routeParams.id_auteur);
	$http.get('app/resources/serveur.php', 
	{
		params: {method: 'getAuteurById', id_auteur:$routeParams.id_auteur}
	}).then(function(result) {
		console.log(result.data);
		$scope.auteur = result.data[0];
	})
});

/**app.controller("editAuteurController", 
	function($scope, $routeParams, $http) {
	console.log("editAuteurController", $routeParams.id_auteur);
	$http.get('app/resources/serveur.php', 
	{
		params: {method: 'editAuteur', $routeParams.id_auteur}
	}).then(function(result) {
		console.log(result.data);
})
});

**/
/**app.controller("editAuteurController", 
	function($scope, $routeParams, $http) {
	console.log("editAuteurController", $routeParams.id_auteur);
$http.get('services/api.php',
 { params : {method: 'getAuthorById', id_auteur: $routeParams.id}
  }).then(function(result) {
   $scope.author = result.data[0]; $scope.newNom = $scope.auteur.nom; $scope.newPrenom = $scope.auteur.prenom; $scope.newFonction = $scope.auteur.fonction;
   })


$scope.update = function() {
 $http.get('services/serveur.php', {
  params : {
   method: 'editAuteur',id_auteur: $routeParams.id, nom: $scope.newNom, prenom: $scope.newPrenom, fonction: $scope.newFonction }
    }).then(function(result) {
     $location.path('auteurs');
     })
    }
    });
    **/

app.controller('authorCtrl', ['$scope', '$http', '$routeParams', '$route', '$location', function($scope, $http, $routeParams, $route, $location){
	$http.get('ressources/serveur.php',
	{
		params : {method: 'getAuthorById', id_auteur: $routeParams.id}

	}).then(function(result) {
		$scope.author = result.data[0];
		$scope.newName = $scope.auteur.nom;
		$scope.newPrenom = $scope.auteur.prenom;
		$scope.newFonction = $scope.auteur.fonction;
	})

	$scope.update = function() {
		$http.get('ressources/serveur.php',
		{
			params : {
				method: 'editAuteur',
				id_auteur: $routeParams.id,
				nom: $scope.newNom,
				prenom: $scope.newPrenom,
				fonction: $scope.newFonction
			}

		}).then(function(result) {
			$location.path('auteurs');
		})
	}
}])

app.controller('homeCtrl', ['$scope', function($scope){

}])

}];