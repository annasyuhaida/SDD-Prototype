(function($) {
    "use strict"

    var form = $("#step-form-horizontal");
    form.children('div').steps({
        headerTag: "h4",
        bodyTag: "section",
        transitionEffect: "slideLeft",
        autoFocus: true, 
        transitionEffect: "slideLeft",
        enablePagination: false, 

        onStepChanging: function (event, currentIndex, newIndex)
        {
            console.log("Next button clicked"); // Add this line
            form.validate().settings.ignore = ":disabled,:hidden";
            return form.valid();
        },
        
    });

    var buttonNext = $("#next-btn")
    buttonNext.on("click", function() {
        
    });
    
    var form2 = $("#step-form-tab");
    form2.children('div').steps({
        headerTag: "h4",
        bodyTag: "section",
        // Disables the finish button (required if pagination is enabled)
        enableFinishButton: false, 
        // Disables the next and previous buttons (optional)
        enablePagination: false, 
        // Enables all steps from the begining
        enableAllSteps: true, 
        // Removes the number from the title
        titleTemplate: "#title#" 
    });

    var form3 = $('#step-form-vertical');
    form3.children('div').steps({
        headerTag: "h4",
        bodyTag: "section",
        transitionEffect: "slideLeft",
        stepsOrientation: "vertical" ,
        // onStepChanging: function (event, currentIndex, newIndex)
        // {
        //     form3.validate().settings.ignore = ":disabled,:hidden";
        //     return form.valid();
        // }
    });


})(jQuery);