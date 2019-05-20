$( function() {
    $("#id_categoria").change( function() {
        if ($(this).val() === "Lider") {
            $("#id_input").prop("disabled", true);
        } else {
            $("#id_input").prop("disabled", false);
        }
    });
});
