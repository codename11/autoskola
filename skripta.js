var points=0;
var w = window.outerWidth;
var h = window.outerHeight;
	
$(document).ready(function(){

	
	if ($(window).width() < 768 && $(window).load()) {
			$("#up").hide();
			$("#nav").addClass("navbar-static-top");
			$("#myNavbar").addClass("collapse navbar-collapse");
		}
		
		if($(window).load()){
			if ($(window).width() < 768) {
			$("#up").hide();
			$("#nav").addClass("navbar-static-top");
			$("#myNavbar").addClass("collapse navbar-collapse");
			}
		}
	
	$(window).resize(function() {
		if ($(window).width() < 768 && $(window).load()) {
			$("#up").hide();
			$("#nav").addClass("navbar-static-top");
			$("#myNavbar").addClass("collapse navbar-collapse");
		}
		else{
			$("#up").show();
			$("#nav").removeClass("navbar-static-top");
		}
		
		if($(window).load()){
			if ($(window).width() < 768) {
			$("#up").hide();
			$("#nav").addClass("navbar-static-top");
			$("#myNavbar").addClass("collapse navbar-collapse");
			}
		}
		else{
			$("#up").show();
			$("#nav").removeClass("navbar-static-top");
		}
		
	});

	if(w>500){
		$( "span" ).remove( ".glyphicon.glyphicon-chevron-up" );
	}

	$(window).resize(function(){
		
		if(w>500){
		$( "span" ).remove( ".glyphicon.glyphicon-chevron-up" );
		}
		
    });
	
    $('[data-toggle="tooltip"]').tooltip();
	
	 $(function(){ //Odavde
  var current_page_URL = location.href;
  $( "a" ).each(function() {
     if ($(this).attr("href") !== "#") {
       var target_URL = $(this).prop("href");
       if (target_URL == current_page_URL) {
          $('nav a').parents('li, ul').removeClass('active');
          $(this).parent('li').addClass('active');
          return false;
       }
     }
  });
}); //dovde je kod za setovanje 'active' klase navbar-a kada se promeni stranica.

//<smoothscroll

// Add smooth scrolling to all links in navbar + footer link
  $("#arrow").on('click', function(event) {

  // Make sure this.hash has a value before overriding default behavior
  if (this.hash !== "") {

    // Prevent default anchor click behavior
    event.preventDefault();

    // Store hash
    var hash = this.hash;

    // Using jQuery's animate() method to add smooth page scroll
    // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
    $('html, body').animate({
      scrollTop: $(hash).offset().top
    }, 900, function(){

      // Add hash (#) to URL when done scrolling (default click behavior)
      window.location.hash = hash;
      });
    } // End if 
  });

//smoothscroll>
});

function opkat(str){
	window.location.assign(str);
}

$("#submit").submit(function(e) {

    var url = "verifikacija"; // the script where you handle the form input.

    $.ajax({
           type: "POST",
           url: url,
           data: $("#submit").serialize(), // serializes the form's elements.
           success: function(data)
           {
				document.getElementById("demo").innerHTML=data;
              
           }
         });

    //e.preventDefault(); // avoid to execute the actual submit of the form.
});



function myFunction() {
	
	
	if($('input#m1').is(":checked")){
		points+=3;
	}
	
	if($('input#m2').is(":checked")){
		points+=2;
	}
	
	if($('input#m3').is(":checked")){
		points+=2;
	}
	
	if($('input#m4').is(":checked")){
		points+=2;
	}
	
	if($('input#m5').is(":checked")){
		points+=3;
	}
	
	if($('input#m6').is(":checked")){
		points+=3;
	}
	
	if($('input#m7').is(":checked")){
		points+=3;
	}
	
	if($('input#m8').is(":checked")){
		points+=2;
	}
	
	if($('input#m9').is(":checked")){
		points+=2;
	}
	
	if($('input#m10').is(":checked")){
		points+=3;
	}
	
	if($('input#m13').is(":checked")){
		points+=1;
	}
	
	if($('input#m14').is(":checked")){
		points+=1;
	}
	
	if($('input#m15').is(":checked")){
		points+=1;
	}
	
	if($('input#m16').is(":checked")){
		points+=1;
	}
	
	if($('input#m20').is(":checked")){
		points+=2;
	}
	
	if($('input#m21').is(":checked")){
		points+=2;
	}
	
	if($('input#m22').is(":checked")){
		points+=1;
	}
	
	if($('input#m23').is(":checked")){
		points+=2;
	}
	
	if($('input#m25').is(":checked")){
		points+=1;
	}
	
	if($('input#m26').is(":checked")){
		points+=1;
	}
	
	if($('input#m27').is(":checked")){
		points+=1;
	}
	
	if($('input#m28').is(":checked")){
		points+=2;
	}
	
	if($('input#m29').is(":checked")){
		points+=1;
	}
	
	if($('input#m30').is(":checked")){
		points+=1;
	}
	
	if($('input#m31').is(":checked")){
		points+=1;
	}
	
	if($('input#m32').is(":checked")){
		points+=2;
	}
	
	if($('input#m33').is(":checked")){
		points+=2;
	}
	
	if($('input#m34').is(":checked")){
		points+=2;
	}
	
	if($('input#m35').is(":checked")){
		points+=2;
	}
	
	if($('input#m36').is(":checked")){
		points+=1;
	}
	
	if($('input#m37').is(":checked")){
		points+=1;
	}
	
	
	if($("#y1").val()==="7" && $("#y2").val()==="3" && $("#y3").val()==="5" && $("#y4").val()==="1" && $("#y5").val()==="8" && $("#y7").val()==="2" && $("#y9").val()==="4" && $("#y12").val()==="6"){
		points+=5;
	}

	if($("#x1").val()==="45123"){
		points+=3;
	}
	
	if($("#x2").val()==="235614"){
		points+=3;
	}
	
	if($("#x3").val()==="raskrsnica"){
		points+=2;
	}
	
	if($("#x4").val()==="100"){
		points+=2;
	}
	
	if($("#x5").val()==="3" && $("#x6").val()==="5"){
		points+=1;
	}
	
	
	
alert(points+"/poen.");
points=0;

}

function myFunction1(){
	
	if($('input#m1').is(":checked")){
		points+=3;
	}
	
	if($('input#m2').is(":checked")){
		points+=3;
	}
	
	if($('input#m3').is(":checked")){
		points+=2;
	}
	
	if($('input#m4').is(":checked")){
		points+=2;
	}
	
	if($('input#m5').is(":checked")){
		points+=3;
	}
	
	if($('input#m6').is(":checked")){
		points+=2;
	}
	
	if($('input#m7').is(":checked")){
		points+=2;
	}
	
	if($('input#m8').is(":checked")){
		points+=3;
	}
	
	if($('input#m9').is(":checked")){
		points+=3;
	}
	
	if($('input#m10').is(":checked")){
		points+=2;
	}
	
	if($('input#m11').val()==="34125"){
		points+=3;
	}
	
	if($('input#m12').val()==="23451"){
		points+=3;
	}
	
	if($('input#m13').is(":checked")){
		points+=3;
	}
	
	if($('input#m14').is(":checked")){
		points+=1;
	}
	
	if($('input#m15').is(":checked")){
		points+=1;
	}
	
	if($('input#m16').is(":checked")){
		points+=1;
	}
	
	if($("#x1").val()==="5" && $("#x2").val()==="1" && $("#x3").val()==="4" && $("#x5").val()==="8" && $("#x8").val()==="3" && $("#x9").val()==="2" && $("#x11").val()==="6" && $("#x12").val()==="7"){
		points+=5;
	}
	
	if($('input#m18').val()==="kolovozna traka"){
		points+=2;
	}
	
	if($('input#m19').val()==="80"){
		points+=2;
	}
	
	if($('input#m20').is(":checked")){
		points+=2;
	}
	
	if($('input#m21').is(":checked")){
		points+=2;
	}
	
	if($('input#m22').is(":checked")){
		points+=1;
	}
	
	if($('input#m23').is(":checked")){
		points+=1;
	}
	
	if($('input#m24').val()==="5"){
		points+=1;
	}
	
	if($('input#m25').is(":checked")){
		points+=1;
	}
	
	if($('input#m26').is(":checked")){
		points+=1;
	}
	
	if($('input#m27').is(":checked")){
		points+=1;
	}
	
	if($('input#m28').is(":checked")){
		points+=2;
	}
	
	if($('input#m29').is(":checked")){
		points+=1;
	}
	
	if($('input#m30').is(":checked")){
		points+=1;
	}
	
	if($('input#m31').is(":checked")){
		points+=1;
	}
	
	if($('input#m32').is(":checked")){
		points+=2;
	}
	
	if($('input#m33').is(":checked")){
		points+=2;
	}
	
	if($('input#m34').is(":checked")){
		points+=2;
	}
	
	if($('input#m35').is(":checked")){
		points+=2;
	}
	
	if($('input#m36').is(":checked")){
		points+=1;
	}
	
	if($('input#m37').is(":checked")){
		points+=1;
	}
	
alert(points+"/poen.");
points=0;
	
}

function myFunction2(){
	
	if($('input#m1').is(":checked")){
		points+=3;
	}
	
	if($('input#m2').is(":checked")){
		points+=2;
	}
	
	if($('input#m3').is(":checked")){
		points+=3;
	}
	
	if($('input#m4').is(":checked")){
		points+=2;
	}
	
	if($('input#m5').is(":checked")){
		points+=3;
	}
	
	if($('input#m6').is(":checked")){
		points+=3;
	}
	
	if($('input#m7').is(":checked")){
		points+=3;
	}
	
	if($('input#m8').is(":checked")){
		points+=2;
	}
	
	if($('input#m9').is(":checked")){
		points+=2;
	}
	
	if($('input#m10').is(":checked")){
		points+=2;
	}
	
	if($('input#m11').val()==="563124"){
		points+=3;
	}
	
	if($('input#m12').val()==="21435"){
		points+=3;
	}
	
	if($('input#m13').is(":checked")){
		points+=1;
	}
	
	if($('input#m14').is(":checked")){
		points+=1;
	}
	
	if($('input#m15').is(":checked")){
		points+=1;
	}
	
	if($('input#m16').is(":checked")){
		points+=1;
	}
	
	if($("#x1").val()==="1" && $("#x2").val()==="3" && $("#x3").val()==="6" && $("#x7").val()==="4" && $("#x8").val()==="5" && $("#x9").val()==="8" && $("#x10").val()==="7" && $("#x12").val()==="2"){
		points+=5;
	}
	
	if($('input#m18').val()==="zaustavljanje"){
		points+=2;
	}
	
	if($('input#m19').val()==="40"){
		points+=2;
	}
	
	if($('input#m20').is(":checked")){
		points+=2;
	}
	
	if($('input#m21').is(":checked")){
		points+=2;
	}
	
	if($('input#m22').is(":checked")){
		points+=1;
	}
	
	if($('input#m23').is(":checked")){
		points+=1;
	}
	
	if($('input#m24').val()==="crvene"){
		points+=1;
	}
	
	if($('input#m25').is(":checked")){
		points+=2;
	}
	
	if($('input#m26').is(":checked")){
		points+=1;
	}
	
	if($('input#m27').is(":checked")){
		points+=1;
	}
	
	if($('input#m28').is(":checked")){
		points+=2;
	}
	
	if($('input#m29').is(":checked")){
		points+=1;
	}
	
	if($('input#m30').is(":checked")){
		points+=1;
	}
	
	if($('input#m31').is(":checked")){
		points+=1;
	}
	
	if($('input#m32').is(":checked")){
		points+=2;
	}
	
	if($('input#m33').is(":checked")){
		points+=2;
	}
	
	if($('input#m34').is(":checked")){
		points+=2;
	}
	
	if($('input#m35').is(":checked")){
		points+=2;
	}
	
	if($('input#m36').is(":checked")){
		points+=1;
	}
	
	if($('input#m37').is(":checked")){
		points+=1;
	}
	
alert(points+"/poen.");
points=0;
	
}

function myFunction3(){
	
	if($('input#m1').is(":checked")){
		points+=3;
	}
	
	if($('input#m2').is(":checked")){
		points+=2;
	}
	
	if($('input#m3').is(":checked")){
		points+=3;
	}
	
	if($('input#m4').is(":checked")){
		points+=2;
	}
	
	if($('input#m5').is(":checked")){
		points+=2;
	}
	
	if($('input#m6').is(":checked")){
		points+=3;
	}
	
	if($('input#m7').is(":checked")){
		points+=2;
	}
	
	if($('input#m8').is(":checked")){
		points+=3;
	}
	
	if($('input#m9').is(":checked")){
		points+=2;
	}
	
	if($('input#m10').is(":checked")){
		points+=2;
	}
	
	if($('input#m11').val()==="51234"){
		points+=3;
	}
	
	if($('input#m12').val()==="634125"){
		points+=3;
	}
	
	if($('input#m13').is(":checked")){
		points+=1;
	}
	
	if($('input#m14').is(":checked")){
		points+=1;
	}
	
	if($('input#m15').is(":checked")){
		points+=1;
	}
	
	if($('input#m16').is(":checked")){
		points+=1;
	}
	
	if($("#x1").val()==="7" && $("#x2").val()==="1" && $("#x3").val()==="2" && $("#x4").val()==="8" && $("#x6").val()==="3" && $("#x7").val()==="4" && $("#x8").val()==="6" && $("#x12").val()==="5"){
		points+=5;
	}
	
	if($('input#m18').val()==="preticanje"){
		points+=2;
	}
	
	if($('input#m19').val()==="60"){
		points+=2;
	}
	
	if($('input#m20').is(":checked")){
		points+=2;
	}
	
	if($('input#m21').is(":checked")){
		points+=2;
	}
	
	if($('input#m22').is(":checked")){
		points+=1;
	}
	
	if($('input#m23').is(":checked")){
		points+=1;
	}
	
	if($("#z1").val()==="40" && $("#z2").val()==="80"){
		points+=1;
	}
	
	if($('input#m25').is(":checked")){
		points+=2;
	}
	
	if($('input#m26').is(":checked")){
		points+=1;
	}
	
	if($('input#m27').is(":checked")){
		points+=1;
	}
	
	if($('input#m28').is(":checked")){
		points+=2;
	}
	
	if($('input#m29').is(":checked")){
		points+=1;
	}
	
	if($('input#m30').is(":checked")){
		points+=1;
	}
	
	if($('input#m31').is(":checked")){
		points+=1;
	}
	
	if($('input#m32').is(":checked")){
		points+=2;
	}
	
	if($('input#m33').is(":checked")){
		points+=2;
	}
	
	if($('input#m34').is(":checked")){
		points+=2;
	}
	
	if($('input#m35').is(":checked")){
		points+=2;
	}
	
	if($('input#m36').is(":checked")){
		points+=1;
	}
	
	if($('input#m37').is(":checked")){
		points+=1;
	}
	

alert(points+"/poen.");
points=0;
	
}

function myFunction4(){
	
	if($('input#m1').is(":checked")){
		points+=3;
	}
	
	if($('input#m2').is(":checked")){
		points+=2;
	}
	
	if($('input#m3').is(":checked")){
		points+=2;
	}
	
	if($('input#m4').is(":checked")){
		points+=2;
	}
	
	if($('input#m5').is(":checked")){
		points+=3;
	}
	
	if($('input#m6').is(":checked")){
		points+=3;
	}
	
	if($('input#m7').is(":checked")){
		points+=3;
	}
	
	if($('input#m8').is(":checked")){
		points+=2;
	}
	
	if($('input#m9').is(":checked")){
		points+=3;
	}
	
	if($('input#m10').is(":checked")){
		points+=3;
	}
	
	if($("#m11").val()==="42351"){
		points+=3;
	}
	
	if($("#m12").val()==="54321"){
		points+=3;
	}
	
	if($('input#m13').is(":checked")){
		points+=1;
	}
	
	if($('input#m14').is(":checked")){
		points+=1;
	}
	
	if($('input#m15').is(":checked")){
		points+=1;
	}
	
	if($('input#m16').is(":checked")){
		points+=1;
	}
	
	if($("#x1").val()==="8" && $("#x2").val()==="5" && $("#x3").val()==="2" && $("#x4").val()==="3" && $("#x6").val()==="6" && $("#x7").val()==="7" && $("#x9").val()==="4" && $("#x10").val()==="1"){
		points+=5;
	}
	
	if($("#m18").val()==="trotoar"){
		points+=2;
	}
	
	if($("#m19").val()==="120"){
		points+=2;
	}
	
	if($('input#m20').is(":checked")){
		points+=2;
	}
	
	if($('input#m21').is(":checked")){
		points+=1;
	}
	
	if($('input#m22').is(":checked")){
		points+=2;
	}
	
	if($('input#m23').is(":checked")){
		points+=1;
	}
	
	if($("#m24").val()==="15"){
		points+=2;
	}
	
	if($('input#m25').is(":checked")){
		points+=1;
	}
	
	if($('input#m26').is(":checked")){
		points+=1;
	}
	
	if($('input#m27').is(":checked")){
		points+=1;
	}
	
	if($('input#m28').is(":checked")){
		points+=2;
	}
	
	if($('input#m29').is(":checked")){
		points+=1;
	}
	
	if($('input#m30').is(":checked")){
		points+=1;
	}
	
	if($('input#m31').is(":checked")){
		points+=1;
	}
	
	if($('input#m32').is(":checked")){
		points+=2;
	}
	
	if($('input#m33').is(":checked")){
		points+=2;
	}
	
	if($('input#m34').is(":checked")){
		points+=2;
	}
	
	if($('input#m35').is(":checked")){
		points+=2;
	}
	
	if($('input#m36').is(":checked")){
		points+=1;
	}
	
	if($('input#m37').is(":checked")){
		points+=1;
	}

alert(points+"/poen.");
points=0;
	
}

function myFunction5() {
	
	
	if($('input#m1').is(":checked")){
		points+=2;
	}
	
	if($('input#m2').is(":checked")){
		points+=2;
	}
	
	if($('input#m3').is(":checked")){
		points+=1;
	}
	
	if($('input#m4').is(":checked")){
		points+=3;
	}
	
	if($('input#m5').is(":checked")){
		points+=1;
	}
	
	if($('input#m6').is(":checked")){
		points+=2;
	}
	
	if($('input#m7').is(":checked")){
		points+=3;
	}
	
	if($('input#m8').is(":checked")){
		points+=2;
	}
	
	if($('input#m9').is(":checked")){
		points+=2;
	}
	
	if($('input#m10').is(":checked")){
		points+=2;
	}
	
	if($('input#m11').is(":checked")){
		points+=1;
	}
	
	if($('input#m12').is(":checked")){
		points+=2;
	}
	
	if($('input#m13').is(":checked")){
		points+=2;
	}
	
	if($('input#m14').is(":checked")){
		points+=2;
	}
	
	if($('input#m15').is(":checked")){
		points+=3;
	}
	
	if($('input#m16').is(":checked")){
		points+=2;
	}
	
	if($('input#m17').is(":checked")){
		points+=3;
	}
	
	if($('input#m18').is(":checked")){
		points+=2;
	}
	
	if($('input#m19').is(":checked")){
		points+=1;
	}
	
	if($('input#m20').is(":checked")){
		points+=2;
	}
	
	if($('input#m21').is(":checked")){
		points+=3;
	}
	
	if($('input#m22').is(":checked")){
		points+=2;
	}
	
	if($('input#m23').is(":checked")){
		points+=1;
	}
	
	if($("#m24").val()==="500"){
		points+=2;
	}
	
	if($('input#m25').is(":checked")){
		points+=2;
	}
	
	if($('input#m26').is(":checked")){
		points+=1;
	}
	
	if($('input#m27').is(":checked")){
		points+=2;
	}
	
	if($('input#m28').is(":checked")){
		points+=2;
	}
	
	if($("#m29").val()==="25"){
		points+=3;
	}
	
	if($('input#m30').is(":checked")){
		points+=2;
	}
	
	if($('input#m31').is(":checked")){
		points+=2;
	}
	
	if($('input#m32').is(":checked")){
		points+=2;
	}
	
	if($('input#m33').is(":checked")){
		points+=1;
	}
	
	if($('input#m34').is(":checked")){
		points+=3;
	}
	
	if($('input#m35').is(":checked")){
		points+=2;
	}
	
	if($('input#m36').is(":checked")){
		points+=2;
	}
	
	if($('input#m37').is(":checked")){
		points+=2;
	}
	
	if($('input#m38').is(":checked")){
		points+=3;
	}
	
	if($('input#m39').is(":checked")){
		points+=2;
	}
	
	if($('input#m40').is(":checked")){
		points+=1;
	}
	
alert(points+"/poen.");
points=0;

}

function onres() {
    var w = window.outerWidth;
    var h = window.outerHeight;
	if(w>500){
    $( "span" ).remove( ".glyphicon.glyphicon-chevron-up" );
	}
}


function get_id(input_id){

	var query="DELETE FROM kandidat WHERE id=";
	var len=$(".checkbox").length;
	query += input_id;
	
	var xmlhttp = new XMLHttpRequest();
	xmlhttp.onreadystatechange = function() {
		
		if (this.readyState == 4 && this.status == 200) {
			
                	
					$(".brew").hide(500, function(){
						$("#demox").load("ajx.php");
					});
					

            }
        };
		//document.getElementById("txtHint").innerHTML=query;
        xmlhttp.open("GET", "del_rec.php?query=" + query, true);
        xmlhttp.send();
			
}

function tagP(){
	document.getElementById("comment").value +="<p class='alter-text'></p>";
}

function nasvol(){
	document.getElementById("comment").value +="<p class='alter-nas'></p>";
}

function showHint(str) {
    if (str.length == 0) { 
        document.getElementById("port").innerHTML = "";
        return;
    } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("port").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET", "window.php?q=" + str, true);
        xmlhttp.send();
    }
}
