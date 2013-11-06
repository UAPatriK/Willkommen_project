	
<script type="text/javascript">
ymaps.ready(function  () {

var myMap;
	
	$('.fancybox').fancybox({height:600,afterShow : function() {
		
		myMap = new ymaps.Map('inline1', {
                    center: [48.470265,35.031419],
                    zoom: 15,
					behaviors: ["scrollZoom","drag"]
                });	
				
	var myPlacemark = new ymaps.Placemark([48.470265,35.031419], {
                    // Свойства
                    iconContent: 'Детская Железная Дорога',
                   }, {
                    // Опции
                    preset: 'twirl#brownStretchyIcon',
					balloonMaxWidth: 250
                });

            // Добавляем метку на карту
            myMap.geoObjects.add(myPlacemark);			
			
	}, afterClose:function (){
	    myMap.destroy();		
		myMap = null;
	}});
});
</script>