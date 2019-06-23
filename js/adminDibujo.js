$(function() {
	$('#tituloModDibujos').change(function(){
		console.log($(this).children("option:selected").val());
		
		$.ajax({
        type: 'POST',
        url: '/TFG_adolecumberri/admin/loadAjax/'+$(this).children("option:selected").val(),
        data: {
          'id': $(this).children("option:selected").val(),
          'ajax': true
        },
        dataType: 'text',
       // contentType: "charset=utf-8",
        success: function(retorno) {
   			var values =  jQuery.parseJSON(retorno);
   			console.log(values[0]);
   			$('#idMod').val(values[0]['id']);

   			$('#is_textoMod').children().each(function(){
   				if($(this).val() == values[0]['is_texto']){
   					$(this).attr("selected", true);
   				}
   			});
   			$('#id_textMod').children().each(function(){
   				if($(this).val() == values[0]['id_texto']){
   					$(this).attr("selected", true);
   				}
   			});
   			$('#id_categoriasMod').children().each(function(){
   				if($(this).val() == values[0]['id_categoria']){
   					$(this).attr("selected", true);
   				}
   			});
   				
   			

    	}
      })

	});
});
