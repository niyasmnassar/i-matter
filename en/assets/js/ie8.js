$(document).ready(function(){

	var content='<div class="content"><h4>Your browser is no longer supported!</h4><p>Please upgrade your browser</p><div class="row text-center bicons"><div class="col-md-3"><a class="firefox" href="http://www.mozilla.org/en-US/firefox/new/"></a><br>Firefox</div><div class="col-md-3"><a class="chrome" href="https://www.google.com/intl/en_uk/chrome/browser/"></a><br>Chrome</div><div class="col-md-3">	<a class="safari" href="http://www.apple.com/safari/"></a><br>Safari</div><div class="col-md-3"><a class="iexplorer" href="http://windows.microsoft.com/en-IN/internet-explorer/download-ie"></a><br>Internet Explorer</div></div></div>';
	$('body').append('<div id="nosupport">'+content+'</div>')
	$('body').css({'height':'100%', 'overflow':'hidden'});


});