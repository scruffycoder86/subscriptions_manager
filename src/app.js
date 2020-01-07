import 'angular';

let app = () => {
    return {
        template: require('./../assets/views/layout/default.html').default,
        controller: 'AppCtrl',
        controllerAs: 'app'
    }
};

class AppCtrl {
    constructor() {
        this.copyright = '2020 | Digital Closuxe';
    }
}

const MODULE_NAME = 'app';

angular.module(MODULE_NAME, [  ])
    .directive('app', app)
    .controller('AppCtrl', AppCtrl);

export default MODULE_NAME;