app.controller(
	"MonControleur",function ($scope) {
	$scope.user={name:"Sebastien",lastName:"Olivier"}; 
console.log("Controleur-1");
$scope.prenom="toto";
})
.controller("SonCrtl",function($scope) {
	$scope.prenom="momo";
	$scope.tab=[1,2,3,4];
	/**variable**/
	$scope.action=function(){
		alert("hello");
	}
	$scope.$watch("prenom",function(newValue,oldValue){
		console.log(newValue,oldValue)
	})
});