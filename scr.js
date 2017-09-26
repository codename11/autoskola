
$(document).ready(function(){
	
	 
      // bind change event to select
      $('#dynamic_select').on('change', function () {
          var url = $(this).val(); // get selected value
          if (url) { // require a URL
              window.location = url; // redirect
          }
          return false;
      });
    
    
    $.ajax({url: "ajx.php", success: function(result){
		$("#demox").html(result);
	}});
		
	
    $(".bt").click(function(){
        $.get("ajx.php", function(data, status){
            alert("Data: " + data + "\nStatus: " + status);
        });
    });
	
});

function loadDoc(){
  
	var update = document.getElementById("comment").value;
	//alert(update);
	var xmlhttp = new XMLHttpRequest();
	xmlhttp.onreadystatechange = function() {
		
		if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET", "cnov.php?update="+update, true);
        xmlhttp.send();
    
}

function sub_del(e){
	var selected = [];
	var i=0;
	var query="DELETE FROM kandidat WHERE id IN(";
	var check_box=$(".bx:checked");
	var len=check_box.length;
	var last_elm=len-1;
		
		$(".bx:checked").each(function(){
			
			selected.push($(this).attr("id"));
			if(i<last_elm){
				query += selected[i]+",";
			}
			
			if(i==last_elm){
				query += selected[i]+")";
			}
		
			i++;	
			
		});
	
		alert(query);	

		var xmlhttp = new XMLHttpRequest();
		xmlhttp.onreadystatechange = function() {
		
		if (this.readyState == 4 && this.status == 200) {
			 	
					$(".brew").hide(500, function(){
						$("#demox").load("ajx.php");
					});
					
            }
        };
		
        xmlhttp.open("GET", "del_rec.php?query=" + query, true);
        xmlhttp.send();
			
}

function bojapre(x){
	x.style.backgroundColor = "#E7E7E7";
}
function bojaposle(x) {
    x.style.backgroundColor = "#b3b3b3";
}