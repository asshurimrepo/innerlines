(function () {

    menabird.app = angular.module('menabird', ['angularBootstrapNavTree']);


    /*-------------------------------  ABN TREE CONTROLLER  -----------------------------------*/

    menabird.app.controller('AbnTreeCtrl', function ($scope, $http) {

        $scope.tree_data = [];
        $scope.template = {};
        $scope.alert = {};
        $scope.parent_category = '';
        $scope.category = {
            id: null
        };


        /*-------------------------------  PREPARE APP  -----------------------------------*/

        $scope.default_template = menabird.partial_url + '/admin.category._ng_default_edit_mesage';
        $scope.template.url = $scope.default_template;


        //Load Json DATA when called
        $scope.loadJson = function () {

            $http.get(menabird.category_tree_url).success(function (data) {
                $scope.tree_data = data;

            });

        };

        $scope.show_alert = function (params) {
            //alert(1);
            $scope.alert = params;

            $(".alert").fadeIn(500).delay(200).fadeOut(500);

        };

        /*-------------------------------  WHEN A TREE BRANCH IS SELECTED  -----------------------------------*/

        $scope.when_tree_is_selected = function (branch) {

            $scope.category = branch;
            $scope.parent_category = branch.label;
            $scope.template.url = branch.edit_form_url;

        };


        /*-------------------------------  When update is done -----------------------------------*/


        $scope.when_update_is_done = function (response_data) {

            $scope.show_alert({
                "class": "success",
                "message": "Save Successful",
                "show": true
            });

            $scope.category = response_data;


        };

        /*-------------------------------  When The Form is submitted -----------------------------------*/

        $scope.on_update = function (e) {

            var url = angular.element(e.target).prop('action');
            var data = $("#category_edit_form").serialize();

            $.post(url, data).done($scope.when_update_is_done);

            e.preventDefault();

        };


        /*------------------------------ ADD NEW CATEGORY ------------------------------*/

        $scope.add_new_category = function () {

            $scope.template.url = menabird.partial_url + "/admin.category.create";

        };


        $scope.when_adding_is_done = function (data) {

            $scope.show_alert({
                "class": "success",
                "message": "Save Successful",
                "show": true
            });


            $scope.loadJson();

            $scope.template.url = $scope.default_template;

            /*if ( $scope.category ) {
             $scope.category.children.push(data);
             } else {
             $scope.tree_data.push(data);
             }


             */


        };

        $scope.on_add = function (e) {

            var url = angular.element(e.target).prop('action');
            var data = $(e.target).serialize();

            $.post(url, data).done($scope.when_adding_is_done);

            e.preventDefault();

        };


        /*------------------------------ REMOVE ------------------------------*/
        $scope.on_remove = function () {

            $("[data-remove-cat]").submit();

        };

        $scope.remove = function (e) {

            e.preventDefault();

            alert(1);

        };

        /*-------------------------------  ACTIONS CALLED  -----------------------------------*/

        //Call first to initialized first JSON
        $scope.loadJson();

    });


})();