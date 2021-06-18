$(function(){
			  var patentes = [ 

			  

			   "hyt789","edn254","ttt555","ttt555","ttt555","kkk222","kkk222","rrr777","jjj666","jjj666","klx235","klx235","klx235","klx235","klx235","klx235","klx235","qqq333","abc123","qwe321","jjj123","klm79","lol789","edn254","www789","qqq963","klx235","lll799","klx235","klx235","edn254","klx235","klx235","edn254","ttt555","ttt555","edn254","lkm365","lkm365","lkm365","edn254",


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