// public/js/blog.js

(function() {
    "use strict";

    // This should be the actual name of your module
    var app = angular.module("blog", []);

    // Find the token value from the page using jQuery
    const TOKEN = $("meta[name=csrf-token]").attr("content");
    
    // Set the token as an Angular constant
    app.constant("CSRF_TOKEN", TOKEN);
    
    // Configure $http to include both your token and a flag indicating the request is AJAX
    app.config(["$httpProvider", "CSRF_TOKEN", function($httpProvider, CSRF_TOKEN) {
        $httpProvider.defaults.headers.common["X-Csrf-Token"] = CSRF_TOKEN;
        $httpProvider.defaults.headers.common["X-Requested-With"] = "XMLHttpRequest";
    }]);

    app.controller("ManageController", ["$http", "$log", "$scope", function($http, $log, $scope){
        $scope.posts = [];
        $scope.successMsg = '';
        $scope.errorMsg = '';
        $scope.currentPost = {};

        $http.get('/posts/list').then(function(response){
            $log.info("Post list success response");

            $log.info(response);

            $scope.posts = response.data;
        }, function(response){
            $log.errorMsg("Failed to load any Posts, please make sure you have created posts then reload page and try again.");

            $log.debug(response);
        });

        $scope.deletePost = function (index) {
            var id = $scope.posts[index].id;

            $http.delete('/posts/' + id).then(function (response) {
                $log.info("Post successfully deleted");
                $scope.successMsg = "Post successfully deleted";
                $scope.posts.splice(index, 1);

            }, function (response) {
                $log.error("Post failed to delete");
                $scope.errorMsg = "Post failed to delete, please reload page and try again.";
                $log.debug(response);
            });
        };


        $scope.showModal = function (index) {
            $scope.currentPost = $scope.posts[index];

            $('#modal').modal();
        };

        $scope.editPost = function (editForm) {
            var id = $scope.currentPost.id;

            $http.put('/posts/' + id, {
                "title": $scope.currentPost.title,
                "body" : $scope.currentPost.body,
            }).then(function (response) {
                $scope.successMsg = "Edit attempt sent successfully";
                $('#modal').modal('hide');
            }, function (response) {
                $scope.errorMsg = "Edit attempt failed to send, please reload page and try again.";
                $log.debug(response);
            });
        };
    }]);
})();