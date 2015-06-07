function getMakeID(manufacturer) {
    var carManufacturer = manufacturer;
    var makes;
      $.getJSON(carquery.base_url+"?callback=?", {cmd:"getMakes", year: 2001}, function(data) {

        makes = data.Makes;
    });
    return makes[0].make_id;
 }

function getCarsByYear(year)
{
    var carYear = year;
    var carquery = new CarQuery();

    carquery.init();
     
    $.getJSON(carquery.base_url+"?callback=?", {cmd:"getMakes", year: carYear}, function(data) {

        var makes = data.Makes;
        for (var i = 0; i < makes.length; i++)
        {
            alert(makes[i].make_display); //array com as marcas dos carros
            // "make_id":"ac",
            //"make_display":"AC",
            //"make_is_common":"0",
            //"make_country":"UK"
        } 
    });
}

function getModelsByManufacturer(manufacturer, cyear)
{
    var carManufacturer = manufacturer;
    var carYear = cyear;
    var carquery = new CarQuery();
    
    carquery.init();

    $.getJSON(carquery.base_url+"?callback=?", {cmd:"getModels", make: carManufacturer, year: carYear}, function(data) {

    var makes = data.Models;
    for (var i = 0; i < makes.length; i++)
    {
        alert(makes[i].make_display); //array com as specs do carro, os mais imp são
            /*
            "make_display":"Dodge",
            "model_name":"Viper SRT10",
            "model_year":"2009",
            "model_body":"Roadster",
            "model_engine_cc":"8285",
            "model_engine_fuel":"Gasoline - unleaded 95",
            "model_transmission_type":"Manual",
            "model_seats":"2",
            "model_doors":"2",
            "model_weight_kg":"1602",
            "model_lkm_hwy":"11"
            */
        } 
    });
}

function getModelsByManufacturer(manufacturer)
{
    var carManufacturer = manufacturer;
    var carquery = new CarQuery();

    carquery.init();
        $.getJSON(carquery.base_url+"?callback=?", {cmd:"getModels", make: "ford"}, function(data) {

        var makes = data.Models;
        for (var i = 0; i < makes.length; i++)
        {
            alert(makes[i].model_name);
        } 
    });
}

function getCarsByKeyword(search)
{
    var carSearch = search;
    var carquery = new CarQuery();

    carquery.init();
     
    $.getJSON(carquery.base_url+"?callback=?", {cmd:"getTrims", keyword: carSearch}, function(data) {

        var makes = data.Trims;
        for (var i = 0; i < makes.length; i++)
        {
                        
            alert(makes[i].year); //array com as specs do carro, os mais imp são
            /*
            "make_display":"Dodge",
            "model_name":"Viper SRT10",
            "model_year":"2009",
            "model_body":"Roadster",
            "model_engine_cc":"8285",
            "model_engine_fuel":"Gasoline - unleaded 95",
            "model_transmission_type":"Manual",
            "model_seats":"2",
            "model_doors":"2",
            "model_weight_kg":"1602",
            "model_lkm_hwy":"11"
            */
        } 
    });
}

function getCarsByParams(seats, manufacturer, body)
{
    var carSeats = seats;
    var carBody = body;
    var carManufacturer = getMakeID(manufacturer);
    var carquery = new CarQuery();

    carquery.init();
     
    $.getJSON(carquery.base_url+"?callback=?", {cmd:"getTrims", seats: carSeats, make: carManufacturer, body: carBody}, function(data) {

        var makes = data.Model;
        for (var i = 0; i < makes.length; i++)
        {
            alert(makes[i].make_display); //array com as marcas dos carros
        } 
    });
}