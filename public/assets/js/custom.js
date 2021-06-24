$(document).ready(function() {
    $("#toggle-modal").on("click", function() {
        $("#rpl-modal").toggleClass("show-rpl-modal");
    });

    $("#close").on("click", function() {
        $("#rpl-modal").toggleClass("show-rpl-modal");
    });
});
$(document).ready(function() {
    var current_fs, next_fs, previous_fs; //fieldsets
    var opacity;
    var current = 1;
    var steps = $("fieldset").length;

    setProgressBar(current);

    $(".next").click(function() {
        current_fs = $(this).parent();
        next_fs = $(this)
            .parent()
            .next();

        //Add Class Active
        $("#progressbar li")
            .eq($("fieldset").index(next_fs))
            .addClass("active");

        //show the next fieldset
        next_fs.show();
        //hide the current fieldset with style
        current_fs.animate(
            { opacity: 0 },
            {
                step: function(now) {
                    // for making fielset appear animation
                    opacity = 1 - now;

                    current_fs.css({
                        display: "none",
                        position: "relative"
                    });
                    next_fs.css({ opacity: opacity });
                },
                duration: 500
            }
        );
        setProgressBar(++current);
    });

    $(".previous").click(function() {
        current_fs = $(this).parent();
        previous_fs = $(this)
            .parent()
            .prev();

        //Remove class active
        $("#progressbar li")
            .eq($("fieldset").index(current_fs))
            .removeClass("active");

        //show the previous fieldset
        previous_fs.show();

        //hide the current fieldset with style
        current_fs.animate(
            { opacity: 0 },
            {
                step: function(now) {
                    // for making fielset appear animation
                    opacity = 1 - now;

                    current_fs.css({
                        display: "none",
                        position: "relative"
                    });
                    previous_fs.css({ opacity: opacity });
                },
                duration: 500
            }
        );
        setProgressBar(--current);
    });

    function setProgressBar(curStep) {
        var percent = parseFloat(100 / steps) * curStep;
        percent = percent.toFixed();
        $(".progress-bar").css("width", percent + "%");
    }
});

/**
 * File Upload
 */
function fileUpload(event) {
    var files = event.target.files;

    document.getElementById("filesLbl").innerText =
        files.length > 1
            ? `You have selected ${files.length} files`
            : `You have selected ${files.length} file`;

    for (const key in files) {
        if (Object.hasOwnProperty.call(files, key)) {
            const element = files[key];
        }
    }
}

/**
 * Form Submit
 */
$(document).ready(function() {
    $("#msform").on("submit", function(e) {
        e.preventDefault();
        const fd = new FormData();

        fd.append("name", $("#name").val());
        fd.append("email", $("#email").val());
        fd.append("contact", $("#phone").val());
        fd.append("location", $("input[name=location]").val());
        fd.append("qualification", $("#qualification").val());
        fd.append("experience", $("input[name=experience]").val());
        fd.append("work_location", $("input[name=work_location]").val());
        fd.append("remark", $("#remark").val());

        var files = $("#files").prop("files");

        if (files.length > 0) {
            $.each(files, function(key, value) {
                fd.append("files[]", value);
            });
        }

        $.ajax({
            url: "check-eligibility",
            method: "POST",
            data: fd,
            dataType: "json",
            processData: false,
            contentType: false,
            beforeSend: function() {
                $(".load-scrn").toggleClass("visible");
            },
            success: function(data) {
                if (data.success == "success") {
                    $("#msform").trigger("reset");
                    $("#msform").toggleClass("show");
                    $(".success").toggleClass("show");
                    $(".load-scrn").toggleClass("visible");
                }
            },
            error: function(err) {
                $(".load-scrn").toggleClass("visible");
                alert("Invalid request. Please try again!");
            }
        });
    });
});
