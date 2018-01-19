//AÇÕES PARA O(S) ELEMENTO(S) DO MATERIALIZE 

//Inicializar select(s)
$(document).ready(function () {
  $('select').material_select();
});


// inicializar datepicker  

$('.datepicker').pickadate({
  selectMonths: true, // criar opções para controle do mês
  selectYears: 15, // criar opções para controle do ano - até 15 anos
  today: 'Data atual', //botão interno direncionando o dia atual
  clear: 'Apagar', //apagar a data selecionada
  close: 'Confirmar', //confirmar data e fechar datapicker
  closeOnSelect: false // Close upon selecting a date,
});

// fim datepicker

// inicializar contador de caracter  

$(document).ready(function () {
  $('input#input_text').characterCounter();
});

// fim contador de caracter  


//Mensagem TOAST alerta

$(document).ready(function () {

  $('#add_tEqp').submit(function (event) {
    if ($("#tipo_eqp").val() == "") {
      Materialize.toast('Dados não inseridos!', 3000);
      event.preventDefault();
      //return false;
    } else {
      Materialize.toast('Cadastrado com sucesso!', 3000);
      event.preventDefault();
    }

  });

  $('#add_for').submit(function (event) {
    event.preventDefault();
    Materialize.toast('Cadastrado com sucesso!', 5000);
  });


});


//Fim TOAST



// FIM AÇÕES MATERIALIZE




 
$(".button-collapse").sideNav();




// $('#adicionar').click(function () {
//   $("#listaOl").append(
//     "<form col s12> <div class='row '>" +
//     "<div> Nº </div>" +
//     "<div class='input-field col s2 '> 1 </div> " +
//     "<div> Nome </div>" +
//     "<div class='input-field col s2 ' type='text' <label for='teste1'>teste1:</label> </div> " +
//     "<div> Patrimônio </div>" +
//     "<div class='input-field col s2 ' type='text' <label for='teste2'>teste2:</label> </div> " +
//     "<div> IMEI </div>" +
//     "<div class='input-field col s2 ' type='text' <label for='teste3'>teste3:</label> </div> " +
//     "</div> </form>");
// });





// GRÁFICO DONUT E PIE(TORTA E ROSQUINHA)
//var ctx = document.getElementByClassName('line-chart').getContext("2d");
//pie chart
//var grafico = new Chart(ctx).Line(data,option);

// data:{
//   labels:["January", "February", "March", "April", "May", "June", "July"],
//   data:[10, 20]

// }
//FIM GRÁFICO


// CHAMADA DE FORMULÁRIO

//