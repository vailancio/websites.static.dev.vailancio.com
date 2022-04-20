$(window).bind("load", function() {
	$("div#gallery").slideViewerPro({
		thumbs: 5,
            thumbsPercentReduction: 17,
            galBorderWidth: 0,
            galBorderColor: "aqua",
            thumbsTopMargin: 10,
            thumbsRightMargin: 10,
            thumbsBorderWidth: 3,
            thumbsActiveBorderColor: "#0bb9b0",
            thumbsActiveBorderOpacity: 0.8,
            thumbsBorderOpacity: 0,
            buttonsTextColor: "#707070",
            leftButtonInner: "<img src='img/arrowl.jpg' />",
            rightButtonInner: "<img src='img/arrowr.jpg' />",
            autoslide: false,
            typo: true
        });     
});