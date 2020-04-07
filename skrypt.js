        var i = 1;
	function zmianaforografii(prefix) {
    	setTimeout(function () {

    		if(i == 5)
    		{
                        
    			var foto = prefix+"/img/zdjecie_name"+i+".jpg";
    			document.getElementById("box").innerHTML = "<img class='fotojs' src='"+foto+"' alt='change fotos'>"; 
    			i = 1;
    		}
    		else {
    			var foto = prefix+"/img/zdjecie_name"+i+".jpg";
    			document.getElementById("box").innerHTML = "<img class='fotojs' src='"+foto+"' alt='change fotos'>";
    			i++;
    		}
        	zmianaforografii(prefix);

    	}, 4000);
	}