            

var xor=angular.module("monModule",[]);


xor.controller("monCtrl",function($scope){
 $scope.pushTheButton = function(){
  alert("champ renseigné");
  console.log($scope.todoList);

}; 
});

