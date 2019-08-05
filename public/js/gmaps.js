/* gmaps 1.8.3 by Frederico de Castro */
function gMaps(e,f,g,h){this.map=null;this.map_tag=e;this.map_options=h;this.latitude=parseFloat(f);this.longitude=parseFloat(g);this.marcadores=[];this.circulos=[];var k=function(){this.options=this.infoWindow=this.marker=null;this.hide=function(){this.marker.setMap(null)};this.show=function(){this.marker.setMap(this.options.map)}},l=function(){this.options=this.circle=null;this.hide=function(){this.circle.setMap(null)};this.show=function(){this.circle.setMap(this.options.map)}};e={zoom:12,scrollwheel:!0,center:new google.maps.LatLng(f,g),disableDefaultUI:!1,panControl:!0,zoomControl:!0,mapTypeControl:!0,scaleControl:!0,streetViewControl:!0,overviewMapControl:!0,pretoebranco:!1,mapTypeId:google.maps.MapTypeId.ROADMAP};this.map_options=jQuery.extend(e,h);this.map_options.pretoebranco&&(this.map_options.styles=[{stylers:[{saturation:-100}]}]);if(this.map_options.mapTypeId)switch(this.map_options.mapTypeId){case "ROADMAP":case "roadmap":case "estrada":case "rua":this.map_options.mapTypeId=google.maps.MapTypeId.ROADMAP;break;case "HYBRID":case "hybrid":case "hibrido":case "ambos":case "both":this.map_options.mapTypeId=google.maps.MapTypeId.HYBRID;break;case "SATELLITE":case "satellite":case "satelite":this.map_options.mapTypeId=google.maps.MapTypeId.SATELLITE;break;case "TERRAIN":case "terrain":case "terreno":this.map_options.mapTypeId=google.maps.MapTypeId.TERRAIN}this.map=new google.maps.Map(jQuery(this.map_tag)[0],this.map_options);this.addMarker=function(b){var a=new k;a.options=jQuery.extend({parent:a,title:"",latitude:this.latitude,longitude:this.longitude,map:this.map,html:"<div></div>",icon:null,popup:!1,onClick:function(){}},b);a.options.latitude=parseFloat(a.options.latitude);a.options.longitude=parseFloat(a.options.longitude);a.marker=new google.maps.Marker({position:new google.maps.LatLng(a.options.latitude,a.options.longitude),map:a.options.map,title:a.options.title,icon:a.options.icon});a.options.html&&(a.infoWindow=new google.maps.InfoWindow({content:a.options.html}),a.options.popup&&a.infoWindow.open(a.options.map,a.marker));google.maps.event.addListener(a.marker,"click",function(){a.options.onClick();a.infoWindow&&a.infoWindow.open(a.options.map,a.marker)});this.marcadores.push(a);return a};this.addCircle=function(b){var a=new l;a.options=jQuery.extend({marker:this.marcadores[0].marker,map:this.map,radius:1E4,fillColor:"#0000CC"},b);a.circle=new google.maps.Circle({map:a.options.map,radius:a.options.radius,fillColor:a.options.fillColor});a.circle.bindTo("center",a.options.marker,"position");this.circulos.push(a);return a};this.fecharMarcadores=function(){for(var b=0;b<this.marcadores.length;b++)this.marcadores[b].infoWindow.close()};this.zoomParaAjustar=function(){for(var b=new google.maps.LatLngBounds,a=this.marcadores.length-1;0<=a;a--)b.extend(this.marcadores[a].marker.position);if(b.getNorthEast().equals(b.getSouthWest())){a=new google.maps.LatLng(b.getNorthEast().lat()+.002,b.getNorthEast().lng()+.002);var c=new google.maps.LatLng(b.getNorthEast().lat()-.002,b.getNorthEast().lng()-.002);b.extend(a);b.extend(c)}this.map.fitBounds(b)};this.centralizarPelosMarcadores=function(){if(this.marcadores.length){var b=this.marcadores[0].options.latitude;var a=this.marcadores[0].options.latitude;var c=this.marcadores[0].options.longitude;var d=this.marcadores[0].options.longitude;for(i=1;i<this.marcadores.length;i++)this.marcadores[i].options.latitude<b&&(b=this.marcadores[i].options.latitude),this.marcadores[i].options.latitude>a&&(a=this.marcadores[i].options.latitude),this.marcadores[i].options.longitude<c&&(c=this.marcadores[i].options.longitude),this.marcadores[i].options.longitude>d&&(d=this.marcadores[i].options.longitude);this.map.setCenter(new google.maps.LatLng((b+a)/2,(c+d)/2))}};this.centralizarMapa=function(b,a){this.map.setCenter(new google.maps.LatLng(b,a))};this.removerMarcadores=function(){if(this.marcadores.length){for(i=0;i<this.marcadores.length;i++)this.marcadores[i].marker.setMap(null);this.marcadores=[]}};this.setBuscadorDeCoordenadas=function(b,a){var c=this;google.maps.event.addListener(this.map,"click",function(d){c.removerMarcadores();jQuery(b).val(d.latLng.lat());jQuery(a).val(d.latLng.lng());c.addMarker({latitude:d.latLng.lat(),longitude:d.latLng.lng(),html:"",onClick:function(d){c.removerMarcadores();jQuery(b).val("");jQuery(a).val("")}})})};this.agruparMarkers=function(){var b=[],a;for(a in this.marcadores)b.push(mapa.marcadores[a].marker);new MarkerClusterer(this.map,b)}};