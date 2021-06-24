$(function(){
			  var patentes = [ 

			  

			   "jul147","abc123","487hjn","abc123","487hjn","ari369","veo987","abc123","abc123","abc123","abc123","abc123","abc123","abc123","abc123","487hjn",


			  ];
			  
			  // setup autocomplete function pulling from patentes[] array
			  $('#autocomplete').autocomplete({
			    lookup: patentes,
			    onSelect: function (suggestion) {
			      var thehtml = '<strong>patente: </strong> ' + suggestion.value + ' <br> <strong>ingreso: </strong> ' + suggestion.data;
			      $('#outputcontent').html(thehtml);
			         $('#botonIngreso').css('display','none');
      						console.log('aca llego');
			    }
			  });
			  

			});