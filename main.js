//DOCUMENT READY
$(document).ready(function(){
  //INTERCETTO IL SUBMIT CLASSICO
  $("#registrazione").submit(
    function(event){
      //BLOCCO IL SUBMIT CLASSICO
      event.preventDefault();

      //CONTROLLO PASSWORD
      if($("#password").val() === $("#passwordc").val()){

        var nome = $("#nome").val();
        var cognome = $("#cognome").val();
        var email = $("#email").val();
        var password = $("#password").val();

        $.ajax({
          url: "./server.php",
          data: {nome, cognome, email, password}, //$(this).serialize(),
          dataType: "html",
          method: "post",
          success: function(risposta_da_server){
            $("body").append(risposta_da_server);
          }, 
          error: function(risposta_da_server){
            $("body").append("si sono verificati degli errori");
          }
        })

        } else {
        alert("Le password non coincidono!");
      }
    }
  );
      //PROGRAMMAZIONE OCCHIO
      $("#view").click(function(){
        $("#password").attr("type", "text");
        $("#passwordc").attr("type", "text");
      })
})

