@extends('layout.index')
@section('content')
<div id="page-title">
		<div class="width-container paged-title">
			<h1>Contact us</h1>	
		</div>
		<div id="page-title-divider"></div>
	</div><!-- #page-title -->
	<div class="clearfix"></div>
    <div class="width-container">
			
			
			
			<div class="grid2column">
				
				<script type='text/javascript' src='http://maps.google.com/maps/api/js?sensor=true&amp;ver=20120206'></script>
				<script type='text/javascript' src='js/jquery.gomap-1.3.2.min.js'></script>
				<div id="map-contact"></div>
				<script type="text/javascript"> 
				jQuery(document).ready(function($) {
				    $("#map-contact").goMap({ 
				        markers: [{  
				            address: 'HaNoi, VN', 
				            title: 'marker title 1' ,
							icon: 'http://white-rock.progressionstudios.com/wp-content/themes/white-rock/images/pin.png'
				        }],
						disableDoubleClickZoom: true,
						zoom: 12,
						maptype: 'ROADMAP'
				    }); 
				});
				</script>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec tellus enim, euismod in tempus ut, malesuada at massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
				<p>Nunc nec elit sed magna pellentesque condimentum. In eget diam justo, nec tempus ante. In hac habitasse platea dictumst. Duis ultrices iaculis faucibus. In id mi sit amet velit feugiat et eu mauris.</p>
			</div>
			
			
			<div class="grid2column lastcolumn">
				
				<h3 class="header-underline">Send us a message</h3>
				
				<div id="wufoo-qjtcw1a0xymtqt">
				Fill out my <a href="https://progressionstudios.wufoo.com/forms/qjtcw1a0xymtqt">online form</a>.
				</div>
				<div id="wuf-adv" style="font-family:inherit;font-size: small;color:#a7a7a7;text-align:center;display:block;">HTML Forms powered by <a href="http://www.wufoo.com/" >Wufoo</a></div>
				<script type="text/javascript">var qjtcw1a0xymtqt;(function(d, t) {
				var s = d.createElement(t), options = {
				'userName':'progressionstudios', 
				'formHash':'qjtcw1a0xymtqt', 
				'autoResize':true,
				'height':'577',
				'async':true,
				'host':'wufoo.com',
				'header':'hide', 
				'ssl':true};
				s.src = ('https:' == d.location.protocol ? 'https://' : 'http://') + 'wufoo.com/scripts/embed/form.js';
				s.onload = s.onreadystatechange = function() {
				var rs = this.readyState; if (rs) if (rs != 'complete') if (rs != 'loaded') return;
				try { qjtcw1a0xymtqt = new WufooForm();qjtcw1a0xymtqt.initialize(options);qjtcw1a0xymtqt.display(); } catch (e) {}};
				var scr = d.getElementsByTagName(t)[0], par = scr.parentNode; par.insertBefore(s, scr);
				})(document, 'script');</script>
			</div>
			<div class="clearfix"></div>
			
			
			
			
			
		<div class="clearfix"></div>
		</div><!-- close .width-container -->
		
@endsection