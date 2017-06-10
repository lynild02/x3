window.onload = function(){
  $('.loader-c').fadeOut('slow');
};
$(document).ready(function(){
  $('#fullpage').fullpage({normalScrollElements: '.importantcontent'});
  $('.ball-scale-multiple').loaders();
  $("img.lazy").lazyload();
});

var app = angular.module('xApp', ['ngRoute']);
app.config(function($routeProvider){
  $routeProvider
  .when('/', {
    templateUrl: 'tmp/start.php'
  })
  .when('/dash', {
    templateUrl: 'tmp/dash.php'
  })
  .when('/inx', {
    templateUrl: 'tmp/inx.php'
  })
  .otherwise({
    redirectTo: '/'
  });
});

app.controller('btnCtrl', ['$location', '$scope',  function($location, $scope){
  $scope.enterSubmit = function(){
    $location.path('/inx');
  };
}]);
