try {
    window.jQuery = window.$ = require('jquery');
    require("lazysizes/lazysizes.min");
    require("./modules/menu");
    require("./modules/swiper");
    require("./modules/generall");
    //require("vendors");
}
catch (e) {
    console.log('JS ERROR!!!', e);
}