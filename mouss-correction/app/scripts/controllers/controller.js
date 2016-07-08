app.controller('authorsCtrl', ['$scope', '$http', '$route', function($scope, $http, $route){
	$http.get('services/api.php',
	{
		params : {method: 'getAuthors'}

	}).then(function(result) {
		$scope.authors = result.data;
	})

	$scope.delete = function(author) {

		$http.delete('services/api.php',
		{
			params : {method: 'deleteAuthor', id_auteur: author.id_auteur}
		}).then(function(result) {
			$route.reload();
		})
	}

	$scope.add = function() {

		$http.get('services/api.php',
		{
			params : {
				method: 'addAuthor', nom: $scope.authorName, prenom: $scope.authorPrename, fonction: $scope.authorFunction 
			}
		}).then(function(result) {
			$route.reload();
		})
	}

}]);

app.controller('authorCtrl', ['$scope', '$http', '$routeParams', '$route', '$location', function($scope, $http, $routeParams, $route, $location){
	$http.get('services/api.php',
	{
		params : {method: 'getAuthorById', id_auteur: $routeParams.id}

	}).then(function(result) {
		$scope.author = result.data[0];
		$scope.authorNewName = $scope.author.nom;
		$scope.authorNewPrename = $scope.author.prenom;
		$scope.authorNewFunction = $scope.author.fonction;
	})

	$scope.update = function() {
		$http.get('services/api.php',
		{
			params : {
				method: 'editAuthor',
				id_auteur: $routeParams.id,
				nom: $scope.authorNewName,
				prenom: $scope.authorNewPrename,
				fonction: $scope.authorNewFunction
			}

		}).then(function(result) {
			$location.path('authors');
		})
	}
}])

app.controller('homeCtrl', ['$scope', function($scope){

}])
