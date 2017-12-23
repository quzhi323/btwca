$(function () {

    'use strict';

    var $distpicker = $('#distpicker');
    var $distpicker2 = $('#distpicker2');

    $distpicker.distpicker({
        province: 'ON',
        city: 'Hamilton',
        district: 'McMaster University'
    });

    $distpicker2.distpicker({
        province: 'ON',
        city: 'Hamilton',
        district: 'Downtown'
    });


});
