/* Time between each scrolling frame */
$.fn.dataTableExt.oPagination.iTweenTime = 100;
 
$.fn.dataTableExt.oPagination.scrolling = {
	"fnInit": function ( oSettings, nPaging, fnCallbackDraw )
	{
		var oLang = oSettings.oLanguage.oPaginate;
		var oClasses = oSettings.oClasses;
		var fnClickHandler = function ( e ) {
			if ( oSettings.oApi._fnPageChange( oSettings, e.data.action ) )
			{
				fnCallbackDraw( oSettings );
			}
		};
 
		var sAppend = (!oSettings.bJUI) ?
			'&lt;a class="'+oSettings.oClasses.sPagePrevDisabled+'" tabindex="'+oSettings.iTabIndex+'" role="button"&gt;'+oLang.sPrevious+'&lt;/a&gt;'+
			'&lt;a class="'+oSettings.oClasses.sPageNextDisabled+'" tabindex="'+oSettings.iTabIndex+'" role="button"&gt;'+oLang.sNext+'&lt;/a&gt;'
			:
			'&lt;a class="'+oSettings.oClasses.sPagePrevDisabled+'" tabindex="'+oSettings.iTabIndex+'" role="button"&gt;&lt;span class="'+oSettings.oClasses.sPageJUIPrev+'"&gt;&lt;/span&gt;&lt;/a&gt;'+
			'&lt;a class="'+oSettings.oClasses.sPageNextDisabled+'" tabindex="'+oSettings.iTabIndex+'" role="button"&gt;&lt;span class="'+oSettings.oClasses.sPageJUINext+'"&gt;&lt;/span&gt;&lt;/a&gt;';
		$(nPaging).append( sAppend );
		 
		var els = $('a', nPaging);
		var nPrevious = els[0],
			nNext = els[1];
		 
		oSettings.oApi._fnBindAction( nPrevious, {action: "previous"}, function() {
			/* Disallow paging event during a current paging event */
			if ( typeof oSettings.iPagingLoopStart != 'undefined' &amp;&amp; oSettings.iPagingLoopStart != -1 )
			{
				return;
			}
			 
			oSettings.iPagingLoopStart = oSettings._iDisplayStart;
			oSettings.iPagingEnd = oSettings._iDisplayStart - oSettings._iDisplayLength;
			 
			/* Correct for underrun */
			if ( oSettings.iPagingEnd &lt; 0 )
			{
			  oSettings.iPagingEnd = 0;
			}
			 
			var iTween = $.fn.dataTableExt.oPagination.iTweenTime;
			var innerLoop = function () {
				if ( oSettings.iPagingLoopStart &gt; oSettings.iPagingEnd ) {
					oSettings.iPagingLoopStart--;
					oSettings._iDisplayStart = oSettings.iPagingLoopStart;
					fnCallbackDraw( oSettings );
					setTimeout( function() { innerLoop(); }, iTween );
				} else {
					oSettings.iPagingLoopStart = -1;
				}
			};
			innerLoop();
		} );
 
		oSettings.oApi._fnBindAction( nNext, {action: "next"}, function() {
			/* Disallow paging event during a current paging event */
			if ( typeof oSettings.iPagingLoopStart != 'undefined' &amp;&amp; oSettings.iPagingLoopStart != -1 )
			{
				return;
			}
			 
			oSettings.iPagingLoopStart = oSettings._iDisplayStart;
			 
			/* Make sure we are not over running the display array */
			if ( oSettings._iDisplayStart + oSettings._iDisplayLength &lt; oSettings.fnRecordsDisplay() )
			{
				oSettings.iPagingEnd = oSettings._iDisplayStart + oSettings._iDisplayLength;
			}
			 
			var iTween = $.fn.dataTableExt.oPagination.iTweenTime;
			var innerLoop = function () {
				if ( oSettings.iPagingLoopStart &lt; oSettings.iPagingEnd ) {
					oSettings.iPagingLoopStart++;
					oSettings._iDisplayStart = oSettings.iPagingLoopStart;
					fnCallbackDraw( oSettings );
					setTimeout( function() { innerLoop(); }, iTween );
				} else {
					oSettings.iPagingLoopStart = -1;
				}
			};
			innerLoop();
		} );
	},
	 
	"fnUpdate": function ( oSettings, fnCallbackDraw )
	{
		if ( !oSettings.aanFeatures.p )
		{
			return;
		}
		 
		/* Loop over each instance of the pager */
		var an = oSettings.aanFeatures.p;
		for ( var i=0, iLen=an.length ; i&lt;iLen ; i++ )
		{
			if ( an[i].childNodes.length !== 0 )
			{
				an[i].childNodes[0].className = 
					( oSettings._iDisplayStart === 0 ) ? 
					oSettings.oClasses.sPagePrevDisabled : oSettings.oClasses.sPagePrevEnabled;
				 
				an[i].childNodes[1].className = 
					( oSettings.fnDisplayEnd() == oSettings.fnRecordsDisplay() ) ? 
					oSettings.oClasses.sPageNextDisabled : oSettings.oClasses.sPageNextEnabled;
			}
		}
	}
};