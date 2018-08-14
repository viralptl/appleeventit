<?php

//Detect special conditions devices
$iPod    = stripos($_SERVER['HTTP_USER_AGENT'],"iPod");
$iPhone  = stripos($_SERVER['HTTP_USER_AGENT'],"iPhone");
$iPad    = stripos($_SERVER['HTTP_USER_AGENT'],"iPad");
$Android = stripos($_SERVER['HTTP_USER_AGENT'],"Android");
$webOS   = stripos($_SERVER['HTTP_USER_AGENT'],"webOS");

//do something with this information
if( $iPod || $iPhone ){
    //browser reported as an iPhone/iPod touch -- do something here
	
	?>
	
<script>
function getQueryStringValue (key) {
	var url = new URL(document.URL);
	var c = url.searchParams.get(key);
	return c;
  //return unescape(window.location.search.replace(new RegExp("^(?:.*[&\\?]" + escape(key).replace(/[\.\+\*]/g, "\\$&") + "(?:\\=([^&]*))?)?.*$", "i"), "$1"));  
}  
setTimeout(function () { window.location = "https://itunes.apple.com/in/app/janva-jevu/id953457322?mt=8"; }, 25);
window.location = "Eventit://<?=$_REQUEST['event_id'];?>";
</script>
	<?php
}else if($iPad){
    //browser reported as an iPad -- do something here
		?>
	
<script>
setTimeout(function () { window.location = "https://itunes.apple.com/in/app/janva-jevu/id953457322?mt=8"; }, 25);
window.location = "Eventit://<?=$_REQUEST['event_id'];?>";
</script>
	<?php
}else if($Android){
	
    //browser reported as an Android device -- do something here
	?>
	
<script>
function getQueryStringValue (key) {
	var url = new URL(document.URL);
	var c = url.searchParams.get(key);
	return c;
  //return unescape(window.location.search.replace(new RegExp("^(?:.*[&\\?]" + escape(key).replace(/[\.\+\*]/g, "\\$&") + "(?:\\=([^&]*))?)?.*$", "i"), "$1"));  
}  


setTimeout(function () { window.location = "https://play.google.com/store/apps/details?id=app.com.eventit&referrer="+getQueryStringValue("event_id"); }, 25);
window.location = "eventit://event_id="+getQueryStringValue("event_id");
</script>
	<?php
}else{
		?>
		<script>
		alert("Please open URL from Android or iOS phone");
		


</script>
		<?php
	}

?>


<?php
?>