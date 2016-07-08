app.controller("auteursController", 
	function($scope, $http) {
	$http.get('app/resources/serveur.php', 
	{
		params: {method: 'getAuteurs'}
	}).then(function(result) {
		//console.log(result.data);
		$scope.auteurs = result.data;
	});
	
	$scope.deleteAuteur  = function(id_auteur) {
		var dataToPost = { id_auteur : id_auteur };
		var paramsToPost = {params: {method: 'deleteAuteur'}};

		$http.post('app/resources/serveur.php', dataToPost, paramsToPost)
				.success(function(serverResponse) {
					location.reload();
				}).error(function(serverResponse) {
					alert("ko");
				}
			);	
	}
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

app.controller("formController", function($scope, $routeParams, $http, $location) {
	$http.get('app/resources/serveur.php', 
	{
		params: {method: 'getAuteurById', id_auteur:$routeParams.id_auteur}
	}).then(function(result) {
		//console.log(result.data);
		$scope.auteur = result.data[0];
		$scope.newNom = result.data[0].nom;
		$scope.newPrenom = result.data[0].prenom;
		$scope.newFonction = result.data[0].fonction;
	})
	$scope.addOrUpdateAuteur  = function(id_auteur) {
		if(id_auteur !== undefined){
			// Les données à envoyer au serveur
			var dataToPost = {id_auteur: $routeParams.id_auteur, nom : $scope.newNom, prenom: $scope.newPrenom, fonction: $scope.newFonction };
			// Les paramètres
			var paramsToPost = {params: {method: 'editAuteur'}};
		}else{
			var dataToPost = { nom : $scope.newNom, prenom: $scope.newPrenom, fonction: $scope.newFonction };
			var paramsToPost = {params: {method: 'addAuteur'}};
		}

		$http.post('app/resources/serveur.php', dataToPost, paramsToPost)
				.success(function(serverResponse) {
					// Faire le traitement souhaité ici
					// pour le moment je redirige vers la liste des auteurs
					//console.log(serverResponse);
					window.location = '/tp-angular/#/auteurs';
				}).error(function(serverResponse) {
					alert("ko");
				}
			);		
	}	
});