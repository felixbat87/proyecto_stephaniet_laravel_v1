$(document).ready(function() {

    $('#msgs').html('Press TAB to move to the next field').show();

    $("input.inputbox", $('.inputLine:first')).val("00");

    $("input:last", $('.inputLine:first')).val("00:00");

    var v = $('.inputLine:first').html();

    $("#rate").focus(function() {

        if ($(this).val() == "00.00") {

            $(this).val("")

        }

    }).blur(function() {

        if ($(this).val() == "") {

            $(this).val("00.00")

        } else {

            $(this).val(parseFloat($(this).val()).toFixed(2))

        }

        $("#calculate").click()

    });


    $('.rows span').click(function() {

        var d = $(".inputLine").length;

        var f = $(this).attr("rel");

        if (d <= f) {

            var g = f - d;

            var h = [];

            if ($(this).attr('rell') != 'w') {

                for (var i = 0; i < g; i++) {

                    h.push("<tr class='inputLine'>" + v + "</tr>")

                }

            } else {

                for (var i = 0; i < g; i++) {

                    h.push('<table cellspacing="2" cellpadding="0" class="table inputLine">' + v + '</table>')

                }

            }

            $("#enter_time .lineTarget").append(h.join(''))

        } else {

            var g = d - f;

            for (var i = 0; i < g; i++) {

                $(".inputLine:last").remove()

            }

        }


        $(".listNum").each(function(i) {
			var dayname;
			var daynumber;
			
			daynumber = i + 1;
			if(daynumber == 1) {dayname = "Mon";}
			if(daynumber == 2) {dayname = "Tue";}
			if(daynumber == 3) {dayname = "Wed";}
			if(daynumber == 4) {dayname = "Thu";}
			if(daynumber == 5) {dayname = "Fri";}
			if(daynumber == 6) {dayname = "Sat";}
			if(daynumber == 7) {dayname = "Sun";}
            $(this).html(dayname);

        });

        $(".inputLine input.yellow_inputbox").click(function() {

            if (parseInt($(this).val(), 10) == 0) {

                $(this).val("")

            }

        }).blur(function() {

            if (parseInt($(this).val(), 10) > 0) {

                if ($(this).attr("class").indexOf("hour") != -1 && parseInt($(this).val(), 10) > 12) {

                    $(this).val(12) //12 horas

                } else if ($(this).attr("class").indexOf("minute") != -1 && parseInt($(this).val(), 10) > 59) {

                    $(this).val(59) //59 minutos

                } else {

                    if ($(this).val() == 0) {

                        $(this).val("00")

                    } else if (parseInt($(this).val(), 10) < 10) {

                        $(this).val("0" + parseInt($(this).val(), 10))

                    }

                }

            } else {

                $(this).val("00")

            }

            $("#calculate").click()

        });

        $("select").blur(function() {

            $("#calculate").click()

        });

        $(".inputradio").change(function () {

            $("#calculate").click()

        });

        $(".listfield").keydown(function(e) {

            if (e.keyCode == 9) {

                var a = $(".listfield");

                var b = a.index(this);

                if (b == a.length - 1) {} else {

                    var c = a[b + 1];

                    if ($(c).attr("class").indexOf("gray_input") != -1) {

                        c = a[b + 2];

                        if ($(c).attr("class").indexOf("gray_input") != -1) {

                            c = a[b + 3]

                        }

                    }

                    $(c).focus();

                    $(c).select()

                }

                return false

            }

        })

    });



    $(".rows span:first").click();

    $(".col-md-3").each(function (i) {
         i=i-1;
        var nmIn="intime["+i+"]"; //entrada?
        //$('.selectbox',this).hide();
        $('.inputradio',this).attr('name',nmIn);
    });

    $(".col-md-4").each(function (i) {
        i=i-1;
        var nmOut="outtime["+i+"]";
        //$('.selectbox',this).hide();
       $('.inputradio',this).attr('name',nmOut); //salida?
    });

    $("#calculate").click(function() {

        var m = 0; //lunes

        var n = 0; //martes

        var o = 0; //miercoels

        var p = 0; //jueves

        var q = 0; //viernes

        var r = 0; //sabado

        var s = 0; //domingo

        $(".inputLine").each(function(i) {

            var rad1 = $('.col-md-3 input[type="radio"]:checked', this).val();
            if(rad1=="PM") {d=1;} else{d=0;}
            var rad2 = $('.col-md-4 input[type="radio"]:checked', this).val();
            if(rad2=="PM") {g=1;} else{g=0;}  

            var a = $(this);

            var b = parseInt($(".yellow_inputbox:eq(0)", this).val(), 10);

            var c = parseInt($(".yellow_inputbox:eq(1)", this).val(), 10);

            //var d = parseInt($(".yellow_inputbox:eq(2)", this).val(), 10);

            var e = parseInt($(".yellow_inputbox:eq(2)", this).val(), 10);

            var f = parseInt($(".yellow_inputbox:eq(3)", this).val(), 10);

            //var g = parseInt($(".yellow_inputbox:eq(5)", this).val(), 10);

            if ((b > 0 && e > 0)) {

                if (d == 0) {

                    if (b == 12) {

                        b = 0

                    }

                } else {

                    if (b != 12) {

                        b = parseInt(b + 12, 10)

                    }

                }

                if (g == 0) {

                    if (e == 12) {

                        e = 0

                    }

                } else {

                    if (e != 12) {

                        e = parseInt(e + 12, 10)

                    }

                }

                var h = parseInt(b * 60 + c, 10);

                var j = parseInt(e * 60 + f, 10);

                if (h < j) {

                    diffMin = parseInt(j - h, 10)

                } else {

                    diffMin = parseInt(24 * 60 - parseInt(h - j, 10), 10)

                }

                s = parseInt(s + diffMin, 10);

                var k = parseInt(diffMin / 60, 10);

                var l = parseInt(diffMin % 60, 10);

                if (k < 10) {

                    k = "0" + k

                }

                if (l < 10) {

                    l = "0" + l

                }

                $(".gray_inputbox", this).val(k + ":" + l)

            }

        });

        var t = parseInt(s / 60, 10);

        var u = parseInt(s % 60, 10);

        if (t < 10) {

            t = "0" + t

        }

        if (u < 10) {

            u = "0" + u

        }

        $("#total").val(t + ":" + u);

        if (parseFloat($("#rate").val()) > 0) {

            $("#totalPay").val((s / 60 * parseFloat($("#rate").val())).toFixed(2))
			

        } else {

            $("#totalPay").val("00.00")

        }

    });

    $("#clearAll").click(function() {

        $("#calc")[0].reset()

    });

  
    $("#sendEmail").click(function() {

        $("#calculate").click();

        $("#emailBox").show(500)

    });

    $(".cancelSend").click(function() {

        $("#emailBox").hide(500)

    });

    $(".submitSendEmail").click(function() {

        $(this).attr("disabled", "disabled").val("Sending...");

        $("#msg").html("Sending your result, please wait.").fadeIn();

		var captcha = $("#captcha").val();



        if ($("#email").val().indexOf("@") == -1) {

            $("#msg").html("Failed, please check your email format.");

            $(this).attr("disabled", false).val("Send")

        } else if (captcha.length != 5) {

            $("#msg").html("Failed, please check your captcha.");

            $(this).attr("disabled", false).val("Send")

        } else {

			var email = $("#email").val();

			var emails= new Array();

			emails = email.split(",");

			if(emails.length > 2){

				$("#msg").html("Max. 2 email addresses per batch.");

				$(this).attr("disabled", false).val("Send");

			}else{

				var b = [];

				$(".inputLine").each(function() {

					$("input,select", this).each(function(i) {

						b.push($(this).val())

					})

				});


				$.post("email.php", {

					action: 'submitFromCalcForm',

					email: $('#email').val(),

					'result[]': b,

					'grandTotal': $("#total").val(),

					'hourlyRate': $("#rate").val(),

					'totalPay': $("#totalPay").val(),

					'captcha': $("#captcha").val(),

					'calculator': $("#calculator").val(),

					'comment': $("#comment").val()

				},

				function(a) {

					a = parseInt(a, 10);

					$(".submitSendEmail").attr("disabled", "").val("Send");

					if (a) {

						$("#msg").html("Result has been sent successfully.").fadeOut(3000, 

						function() {

							$("#emailBox").hide(500);

							var Pnk = document.getElementById("captchaImg");

							Pnk.src = "https://www.calculatehours.com/Timesheet_Calculator/captcha.php?tempstr=" + Math.random();

						})

					} else {

						if(a==0){

							$("#msg").html("Captcha error, please try again.");

							document.getElementById("captcha").value="";

							var Pnk = document.getElementById("captchaImg");

							Pnk.src = "https://www.calculatehours.com/Timesheet_Calculator/captcha.php?tempstr=" + Math.random();



						}else{

							$("#msg").html("Sent failed, please retry again.");

						}

					}

				})

			}

        }

    })

});