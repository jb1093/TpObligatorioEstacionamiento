$(function(){
			  var patentes = [ 

			  

			   "hyt789","edn254","ttt555","ttt555","ttt555","ñññ555","ñññ555","ñññ555","kkk222","kkk222","rrr777","jjj666","jjj666","klx235","klx235","klx235","klx235","klx235","klx235","klx235","qqq333","abc123","qwe321",


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