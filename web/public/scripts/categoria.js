
  var tabla;

  function init() {
    mostrarForm(false);
    listar();
  }

  function limpiar() {
    $("#idCategoria").val("");
    $("#nombre").val("");
    $("#descripcion").val("");
  }

  function mostrarForm(flag) {
    limpiar();
    if (flag) {
      $("#listadoRegistros").hide();
      $("#formularioRegistros").show();
      $("#btnGuardar").prop("disabled", false);
    } else {
      $("#listadoRegistros").show();
      $("#formularioRegistros").hide();
    }
  }
  
  function cancelarForm () {
    limpiar();
    mostrarForm(false);
  }

  //Listar Categorías
  function listar() {
    tabla = $("#tblListado").dataTable({
      "aProcessing" : true, //Activamos procesamiento de datatable
      "aServerSide" : true, //Paginación y filtrado de lado del servidor
      dom : "Bfrtip", //Definimos los elementos del control de tabla
      buttons : [
        "copyHtml5",
        "excelHtml5",
        "csvHtml5",
        "pdf"
      ],
      "ajax" : {
        url : "../../app/src/ajax/categoria.php?op=listar",
        type : "get",
        dataType : "json",
        error : function (e) {
          console.log(e.responseText);
        }
      }
    }).DataTable();
  }

  init();