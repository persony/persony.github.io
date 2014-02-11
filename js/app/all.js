(function () {
    var module = angular.module('persony', ['ngResource', 'ngSanitize']);
    module.controller('all', [
        '$scope', '$filter', 'Person',
        function ($scope, $filter, Person) {
            var persons;
            Person.query(function(data){
                persons = data;
                $scope.filter.exec();
            });

            $scope.sort = {
                current: "name",
                reverse: false,
                is: function (field) {
                    return this.current === field;
                },
                change: function (field) {
                    if (this.current == field) {
                        this.reverse = !this.reverse;
                    } else {
                        this.reverse = false;
                        this.current = field;
                    }

                    this.exec();
                },
                exec: function () {
                    $scope.persons = $filter('orderBy')($scope.persons, this.current, this.reverse);
                }
            };

            $scope.filter = {
                search: "",
                exec: function () {
                    $scope.persons = $filter('filter')(persons, {name: this.search});
                    $scope.rows = _.range(0, Math.ceil($scope.persons.length / 3));
                    $scope.sort.exec();
                }
            };
        }
    ]);

    module.factory('Person', [
        '$resource',
        function ($resource) {
            return $resource('/api/person/:name.json');
        }]
    );
}());