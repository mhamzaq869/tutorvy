// console.log(getValues("range"));

// function getValues(id){
//      $("#range,").on("change", function(){

//      })
// }






// $.ajax({
// 	type: 'POST',
// 	url : "load_products.php",
// 	dataType: "json",
// 	data:{totalRecord:totalRecord, brand:brand, material:material, size:size, category:category, sorting:sorting},
// 	success: function (data) {
// 		$("#results").append(data.products);
// 		totalRecord++;
// 	}
// });
// $(window).scroll(function() {
// 	scrollHeight = parseInt($(window).scrollTop() + $(window).height());
// 	if(scrollHeight == $(document).height()){
// 		if(totalRecord <= totalData){
// 			loading = true;
// 			$('.loader').show();
// 			$.ajax({
// 				type: 'POST',
// 				url : "load_products.php",
// 				dataType: "json",
// 				data:{totalRecord:totalRecord, brand:brand, material:material, size:size},
// 				success: function (data) {
// 					$("#results").append(data.products);
// 					$('.loader').hide();
// 					totalRecord++;
// 				}
// 			});
// 		}
// 	}
// });


// function getvalue(id){
//     document.getElementById(id).addEventListener('change', function(e){
//        e = this.value;
//        return e;
//     });
// }
