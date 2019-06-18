$(document).ready(function(){

	getCustomers();
	getCustomerOrders();

	function getCustomers(){
		$.ajax({
			url : './classes/Customers.php',
			method : 'POST',
			data : {GET_CUSTOMERS:1},
			success : function(response){
				
				console.log(response);
				var resp = $.parseJSON(response);
				if (resp.status == 202) {

					var customersHTML = "";

					$.each(resp.message, function(index, value){

						customersHTML += '<tr>'+
									          '<td>#</td>'+
									          '<td>'+value.username+'</td>'+
									          '<td>'+value.email+'</td>'+
									          '<td>'+value.phone+'</td>'+
									          '<td>'+value.street+'<br>'+value.city+'<br>'+value.pincode+'</td>'+
									       '</tr>'

					});

					$("#customer_list").html(customersHTML);

				}else if(resp.status == 303){
					$("#customer_list").html(resp.message);
				}

			}
		})
		
	}

	function getCustomerOrders(){
		$.ajax({
			url : './classes/Customers.php',
			method : 'POST',
			data : {GET_CUSTOMER_ORDERS:1},
			success : function(response){
				
				console.log(response);
				var resp = $.parseJSON(response);
				if (resp.status == 202) {

					var customerOrderHTML = "";

					$.each(resp.message, function(index, value){

						customerOrderHTML +='<tr>'+
								              '<td>#</th>'+
								              '<td><img width="60" height="60" src="'+value.product_image+'"></td>'+
								              '<td>'+ value.product_title +'</td>'+
								              '<td>'+ value.product_qty +'</td>'+
								              '<td>'+ value.product_price +'</td>'+
								              '<td>'+ value.payment_id +'</td>'+
								              '<td>'+ value.payment_status +'</td>'+
								              '<td>'+ value.order_date +'</td>'+
								              '<td>'+ value.vendor_name +'</td>'+
								              '<td>'+ value.shipping_method +'</td>'+
								              '<td>'+ value.delivery_status +'</td>'+
								            '</tr>';

					});

					$("#customer_order_list").html(customerOrderHTML);

				}else if(resp.status == 303){
					$("#customer_order_list").html(resp.message);
				}

			}
		})
		
	}


});