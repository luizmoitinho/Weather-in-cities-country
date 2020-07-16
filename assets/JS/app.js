$("#btnSearch").on("click", function () {
  let citie = $('input[name="nameCitie"]').val();
  if (citie == "")
    $("#msgError").html("* O nome da cidade deve ser informado.");
  else {

    $("#msgError").html("");
    $('#info-weather').html('');
    $('#title-weathe').html('');

    const urlAPI =
      "http://localhost/Pessoal/challenge-accepted/API/routes/index.php/searchWeather";

    $.ajax({
      type: "POST",
      url: urlAPI,
      data: { name: citie },
      dataType: "json",
      success: function (response) {
        if (response.hasOwnProperty("message"))
          $("#msgError").html("* " + response.message);
         
        else {
          //Titulo da previsao da cidade
          $("#title-weather").html(
            "Previsão para " +
              response.locale.name +
              " - " +
              response.locale.state
          );

          let allWeathers = "";
          for (let weather of response.weather) {
            dateSplite =  weather.date.split('-')
            weather.date = dateSplite[2]+'/'+dateSplite[1]+'/'+dateSplite[0]
            allWeathers += createWeatherHTML(weather)+'<br>';
          }
          $("#info-weather").html(allWeathers);
        }
      },
    });
  }
});

function createWeatherHTML(weather) {
  return (
    '<div class="row d-flex justify-content-center" > '+
    '<div class="col-md-8 col-sm-12 col-lg-6 info-weather d-flex justify-content-center flex-column p-0 mt-3">' +
    '<div id="info-head-weather">' +
    '<div class="border-bottom">' +
    weather.date.split('-') +
    "</div>" +
    '<small class="mt-2">' +
    weather.text +
    "</small>" +
    "</div>" +
    '<div id="info-body-weather">' +
    '<div class="row">' +
    '<div class="col-md-6 col-6 col-lg-6 d-flex">' +
    '<div  class="icon mr-4">' +
    '<img src="./assets/images/icons/upload.png">' +
    "</div>" +
    '<span class="text-info">' +
    weather.temperature.min +
    "</span>" +
    "</div>" +
    '<div class="col-md-6 col-6 d-flex">' +
    '<div  class="icon mr-4">' +
    '<img src="./assets/images/icons/download.png">' +
    "</div>" +
    '<span class="text-danger">' +
    weather.temperature.max +
    " *C</span>" +
    "</div>" +
    "</div>" +
    '<div class="row mt-5">' +
    '<div class="col-md-6 col-6 d-flex">' +
    '<div  class="icon mr-4">' +
    '<img src="./assets/images/icons/raindrop-close-up.png">' +
    "</div>" +
    '<span class="">' +
    weather.rain.precipitation +
    "*C</span>" +
    "</div>" +
    '<div class="col-md-6 col-6 d-flex">' +
    '<div  class="icon mr-4">' +
    '<img src="./assets/images/icons/protection-symbol-of-opened-umbrella-silhouette-under-raindrops.png">' +
    "</div>" +
    '<span class="">' +
    weather.rain.probability +
    "</span>" +
    "</div>" +
    "</div>" +
    "</div>" +
    "</div>" +
    "</div>"
  );
}
