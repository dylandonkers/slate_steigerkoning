/*
 *
<div data-productid="64076" class="span4 product product-64076 " itemscope="" itemtype="http://schema.org/Product">
<!-- Rendering single product -->
 <div class="product-image">
 	<a href="http://ladderensteigerkoning.lokaalgevonden.nl/products/64076/#Knikarmhoogwerkers op aanhanger Octopussy 14, Werkhoogte 14 meter.">
 	<img src="http://webshop.lokaalgevonden.nl/uploads/Product/steigerkoning/media/catalog/product/o/c/octo.jpg">
 	</a>
 </div>
 <div class="product-data-container">
	 <div class="product-title product-title-64076" itemprop="name">
	 	Knikarmhoogwerkers op aanhanger Octopussy 14, Werkhoogte 14 meter. 
	 </div>
		 
	 <div itemprop="offers" itemscope="" itemtype="http://schema.org/Offer">
		 <div class="product-price product-price-64076" itemprop="price">
		 	€ 250.00
		</div>
		<meta itemprop="priceCurrency" content="EUR">
		<link itemprop="availability" href="http://schema.org/InStock">
	    <div class="product-detail-button product-detail-button-64076">
		 	<a href="http://ladderensteigerkoning.lokaalgevonden.nl/products/64076/#Knikarmhoogwerkers op aanhanger Octopussy 14, Werkhoogte 14 meter." class="product-detail-link">details</a>
		 </div>
		 <div style="clear:both"></div>
	    </div>
	 </div>

	 <!-- End Rendering single product -->
</div>
*/
	function formatEuro(price){
		Number.prototype.formatMoney = function(c, d, t){
		var n = this, c = isNaN(c = Math.abs(c)) ? 2 : c, d = d == undefined ? "," : 
				d, t = t == undefined ? "." : 
				t, s = n < 0 ? "-" : 
				"", i = parseInt(n = Math.abs(+n || 0).toFixed(c)) + "", 
				j = (j = i.length) > 3 ? j % 3 : 0;
				
		   return s + (j ? i.substr(0, j) + t : "") 
					+ i.substr(j).replace(/(\d{3})(?=\d)/g, "$1" + t)
					+ (c ? d + Math.abs(n - i).toFixed(c).slice(2) : "");
		};
	
		return price.formatMoney(2,',','.');
	}	
	var myCustomRenderer_0 = function(jsonObj){
			var $ = jQuery;
			$('.product-overview').hide();
			var target = $(this.settings.target_elt);

			var currentHeader = $('.filter_search_results_'+this.id+' tr').first();
			var str = "";
			str += '<div class="product-overview">';		

			var numCols = 3;
			for(var i = 0; i< jsonObj.length; i++){
				if((i+1)%numCols == 1) {
					str += '<div class="row-fluid product-row">';
				}

				var item = jsonObj[i];
				str += '<div data-productid="'+item.Product_id+'" class="span4 product product-'+item.Product_id+'" >';
				str +=  '<div class="product-image">';
				str +=	 '<a href="/products/'+item.Product_id+'">';
				str +=		'<img src="http://webshop.lokaalgevonden.nl/uploads/Product/'+item.imageDish+'" />';
				str +=	 '</a>';
				str +=  '</div>';

				str += '<div class="product-data-container">';
				str +=  '<div class="product-title product-title-'+item.Product_id+'" itemprop="name">';
				str +=   item.productName;
				str +=  '</div>';
				str +=	'<div itemprop="offers" itemscope="" itemtype="http://schema.org/Offer">';
				str +=	' <div class="product-price product-price-'+item.Product_id+'" itemprop="price">';
				str +=	'  € '+formatEuro(item.productPrice);
				str +=	' </div>';
				str +=	' <meta itemprop="priceCurrency" content="EUR">';
				str +=	' <link itemprop="availability" href="http://schema.org/InStock">';
				str +=	' <div class="product-detail-button product-detail-button-'+item.Product_id+'">';
				str +=	'	<a href="/products/'+item.Product_id+'" class="product-detail-link">details</a>';
				str +=	' </div>';
				str +=	' <div style="clear:both"></div>';
				str +=	'</div>';
				str += '</div>';

				str += '</div>';

				if((i+1)%numCols == 0){
					str += '</div><!-- end row -->';
				}
			}

			str += '</div>';

			return str;
	}


