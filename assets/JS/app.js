$('#btnSearch').on('click', function(){
    let citie =  $('input[name="nameCitie"]').val()
    if(citie=="")
      $('#msgError').html('* O nome da cidade deve ser informado.')
    else{

      $('#msgError').html('');
      const urlAPI = "http://localhost/Pessoal/challenge-accepted/API/routes/index.php/searchWeather";
      
      $.ajax({
        type: 'POST',
        url : urlAPI,
        data: {"name":citie},
        dataType:"json",
        success: function(data){
         console.table(data)
        }
    
    })


    }
  })
