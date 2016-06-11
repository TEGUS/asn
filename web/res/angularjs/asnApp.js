angular.module('asnApp', [])
        .controller('AgendaController', function ($scope, $http) {
            var raz = function () {
                $scope.toUpdate = false;
                $scope.newAgenda = {};
                $scope.newEvenement = {};
                $scope.newTache = {};
            };

            var refresh = function () {
                raz();
                $http.get(Routing.generate('all_agenda')).success(function (res) {
                    $scope.agendas = res;
                });
                $scope.process = false;
            };
            refresh();

            $scope.createAgenda = function () {
                $scope.process = true;
                $http.post(Routing.generate('create_agenda', {
                    libelle: $scope.newAgenda.libelle,
                    description: $scope.newAgenda.description
                })).success(function (res) {
                    refresh();
                });
            };

            $scope.editAgenda = function (item) {
                $scope.newAgenda = item;
                $scope.toUpdate = true;
            };

            $scope.updateAgenda = function () {
                $scope.process = true;
                $http.put(Routing.generate('update_agenda', {
                    id: $scope.newAgenda.id,
                    libelle: $scope.newAgenda.libelle,
                    description: $scope.newAgenda.description
                })).success(function (res) {
                    refresh();
                });
            };

            $scope.deleteAgenda = function (id) {
                $http.delete(Routing.generate('delete_agenda', {id: id})).success(function (res) {
                    refresh();
                });
            };

            $scope.cancel = function () {
                raz();
            };

            //Activer un agenda
            var refreshEventTache = function (agenda) {
                $scope.evenements = agenda.evenements;
                $scope.taches = agenda.taches;
            };
            $scope.visualizeAgenda = function (agenda) {
                $scope.active = true;
                $scope.currentAgenda = agenda;
                refreshEventTache(agenda);
            };

            //Gerer evenement
            $scope.createEvenement = function () {
                $scope.process = true;
                $http.post(Routing.generate('create_evenement', {
                    agenda_id: $scope.currentAgenda.id,
                    libelle: $scope.newEvenement.libelle,
                    description: $scope.newEvenement.description,
                    lieu: $scope.newEvenement.lieu,
                    date: $scope.newEvenement.date
                })).success(function (res) {
                    refresh();
                });
            };
        })
        .config(function ($interpolateProvider, $httpProvider) {
            $interpolateProvider.startSymbol('{[{').endSymbol('}]}');
            //$httpProvider.defaults.headers.common["X-Requested-With"] = 'XMLHttpRequest';
        });