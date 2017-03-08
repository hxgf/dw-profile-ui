
<div class="wrap">
	<div class="main clearfix">


{{#business_detail}}{{#data}}
<div class="business-detail">

	<div class="detail-background"><div {{#bg_img}}style="background-image: url('{{bg_img}}');"{{/bg_img}}></div></div>
	
	<div class="business-detail-head">
		<div class="data">
			<h2>{{title}}</h2>
			<h3>{{address_full}} <span>&nbsp;|&nbsp;</span> {{phone}}</h3>
	<? //		<h4>{{#tags_list}}<a href="/s/{{tag}}/">{{tag}}{{^last}},{{/last}}</a>{{/tags_list}}</h4> ?>
		</div>
	</div>
	
	<div class="business-description">
	
		<div class="col col-left">
	
		{{#hours}}<h3>Hours: {{hours}}</h3>{{/hours}}
			{{#description_format}}<div class="description">
			{{description_format}}
			</div>
			{{/description_format}}
			
			{{#gallery}}
			<div class="gallery">
				{{#gallery_list}}
				<a href="{{url_large}}" rel="gallery"><img src="{{url_small}}" /></a>
				{{/gallery_list}}
			</div>
			{{/gallery}}
		</div>
		<div class="col col-right">

			<div class="detail-map-container">
				<a href="https://maps.google.com/maps?q={{address_encoded}}&ie=UTF-8" target="_blank" class="map-static">&nbsp;</a>
				<div id="gmap" class="gmap-detail map"
					data-lat="{{lat}}"
					data-lon="{{lon}}"
					data-icon="{{icon}}"
					data-address="{{address_full}}"
					data-href="https://maps.google.com/maps?q={{address_encoded}}&ie=UTF-8"
				>				
				</div>
			</div>
		</div>
		<div class="clear"></div>
	</div>

</div>

{{/data}}{{/business_detail}}



</div></div>