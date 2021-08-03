$(function () {
  $(function () {
    var i = 0;
    var temp = $("#temp_code").val();
    files = $("input[name=hidden_files]");
    var j = 0;
    $("#file_upload").uploadifive({
      auto: true,
      fileSizeLimit: "50MB",
      simUploadLimit: 1,
      queueID: "queue",
      removeCompleted: false,
      uploadScript: base_url + "model/order/uploadifive.php",
      onUploadComplete: function (file, data, response) {
        var inc = j++;
        var div = $("#queue div:last-child").addClass("msg" + inc);
        switch (data) {
          case "error":
            var r =
              "<br /><p style='color:red; font-size: 10px !important;'>ERROR: ";
            r += "An Error Occoured.</p>";
            var div = $("#uploadifive-file_upload-file-" + inc)
              .children()
              .children("span.fileinfo")
              .html(r);
            return false;
            break;
          case "invalid":
            var r =
              "<br /><p style='color:red; font-size: 10px !important;'>ERROR: ";
            r += "Invalid File Type.</p>";
            var div = $("#uploadifive-file_upload-file-" + inc)
              .children()
              .children("span.fileinfo")
              .html(r);
            return false;
            break;
          case "size":
            var r =
              "<br /><p style='color:red; font-size: 10px !important;'>ERROR: ";
            r += "Your File is too big.</p>";
            var div = $("#uploadifive-file_upload-file-" + inc)
              .children()
              .children("span.fileinfo")
              .html(r);
            return false;
            break;
          default:
            $.ajax({
              type: "POST",
              data: {
                scid_id: data,
                update: "update",
              },
              url: base_url + "model/order/update_file_id.php",
              success: function (html) {},
            });
            if (!files.val()) {
              files.val(data);
            } else {
              if (i == 0) {
                d = data;
                files.val(d);
              } else {
                d = files.val() + "|" + data;
                files.val(d);
              }
            }
            break;
        }
      },
      onCancel: function (file) {
        i--;
      },
      onError: function (errorType) {
        var inc = j++;
        var div = $("#queue div:last-child").addClass("msg" + inc);
        if (errorType == "FILE_SIZE_LIMIT_EXCEEDED") {
          var r =
            "<br /><p style='color:red; font-size: 10px !important;'>ERROR: ";
          r += "Your File is too big.</p>";
          var div = $(".msg" + inc)
            .children()
            .children("span.fileinfo")
            .html(r);
        } else if (errorType == "FORBIDDEN_FILE_TYPE") {
          var r =
            "<br /><p style='color:red; font-size: 10px !important;'>ERROR: ";
          r += "Invalid File Type.</p>";
          var div = $(".msg" + inc)
            .children()
            .children("span.fileinfo")
            .html(r);
        } else {
          var r =
            "<br /><p style='color:red; font-size: 10px !important;'>ERROR: ";
          r += "Unknown Error.</p>";
          var div = $(".msg" + inc)
            .children()
            .children("span.fileinfo")
            .html(r);
        }
      },
      onAddQueueItem: function () {
        var queueItemInd = $("#queue .uploadifive-queue-item")[i];
        $(queueItemInd)
          .children("a.close")
          .click(function () {
            var ind = $(this).parent().index();
            var fileStr = files.val().split("|");
            var delstr = fileStr.splice(ind, 1);
            $.ajax({
              type: "POST",
              data: {
                scid_id: delstr,
                remove: "remove",
              },
              url: base_url + "model/order/update_file_id.php",
              success: function (html) {
                // console.log('done');
              },
            });
            files.val(fileStr.join("|"));
          });
        i++;
      },
    });
  });
});

function showSpinner() {
  $(".spinner-loader-wrap").css("display", "block");
  $("body").css("overflow-x", "hidden");
}
function hideSpinner() {
  $(".spinner-loader-wrap").css("display", "none!important");
  $("body").css("overflow-x", "hidden");
}
$("body").on("click", ".hsbc", function (e) {
  showSpinner();
  e.stopImmediatePropagation();
  $("#getData").load("./includes/inc/mail_hsbc.php", function (data) {
    setTimeout(function () {
      $(".spinner-loader-wrap").fadeOut();
      hideSpinner();
    }, 2000);
  });
});
$("body").on("click", ".stripe", function (e) {
  showSpinner();
  e.stopImmediatePropagation();
  $("#getData").load("./includes/inc/mail_stripe.php", function (data) {
    setTimeout(function () {
      $(".spinner-loader-wrap").fadeOut();
      hideSpinner();
    }, 2000);
  });
});
$("body").on("click", ".paypal", function (e) {
  showSpinner();
  e.stopImmediatePropagation();
  $("#getData").load("./includes/inc/mail_paypal.php", function (data) {
    setTimeout(function () {
      $(".spinner-loader-wrap").fadeOut();
      hideSpinner();
    }, 2000);
  });
});
$("body").on("click", ".western", function (e) {
  showSpinner();
  e.stopImmediatePropagation();
  $("#getData").load("./includes/inc/mail_western.php", function (data) {
    setTimeout(function () {
      $(".spinner-loader-wrap").fadeOut();
      hideSpinner();
    }, 2000);
  });
});

$(document).ready(function () {
  // refresh captcha
  // $("img#refresh").click(function () {
  //   change_captcha();
  // });
  // function change_captcha() {
  //   document.getElementById("captcha").src =
  //     "includes/inc/get_captcha.php?rnd=" + Math.random();
  // }

  /*Phone validation*/
  $.validator.addMethod(
    "regex",
    function (value, element, regexp) {
      var re = new RegExp(regexp);
      return this.optional(element) || re.test(value);
    },
    "Please check your input."
  );

  $("#OrderForm").validate({
    rules: {
      paper_standard: 'required',
      ref_style: 'required',
      'deadline-order': 'required',
      spacing: 'required',
      example1: {
        required: true,
      },
      phone1: {
        required: true,
        // number:true,
        regex: /^[\+]?[(]?[0-9]+[)]?[-\s\.]?[0-9]+[-\s\.]?[0-9]+$/,
      },
      // paper_standard : { 
      //   required: true
      // }
    },
    messages: {
      example1: {
        required: "You must agree to our Terms & Conditions",
      },
    },
    // errorPlacement: function(error, element) {
    //     if ( element.is(":radio") ) 
    //     {
    //         error.appendTo( element.parents('.edulevel') );
    //     }
    //     else 
    //     { // This is the default behavior 
    //         error.insertAfter( element );
    //     }
    // },
    submitHandler: function (form) {
      var form = $("#OrderForm");
      showSpinner();
      CaptchaCodeField = $("#code").val();
      if (CaptchaCodeField == "") {
        hideSpinner();
        alert("Please Enter Captcha code.");
      } else {
        var serializedForm = form.serialize();
        // alert(serializedForm);

        // console.log(serializedForm);
        $.ajax({
          type: "POST",
          url: base_url + "model/order/order_preview.php",
          data: serializedForm,
          success: function (data) {
            if (data == "false") {
              setTimeout(function () {
                $(".spinner-loader-wrap").fadeOut();
                hideSpinner();
              }, 1000);
              $(".ShowCaptchaError").trigger("click");
            } else if (data == "phoneError") {
              setTimeout(function () {
                $(".spinner-loader-wrap").fadeOut();
                hideSpinner();
              }, 1000);
              $(".phone1").after(
                "<label id='phone1-error' class='error' for='phone1'>Please enter correct number.</label>"
              );
            } else {
              setTimeout(function () {
                $(".spinner-loader-wrap").fadeOut();
                hideSpinner();
              }, 1000);
              $(".formcal").hide();
              $("#getData").html(data);
              $("#price-cal").addClass("d-none");
              $("#getData")[0].scrollIntoView(true);
              $(".order-md-10").css("border", 0);
              $(".calc-wrap").hide();
              $("#before-order").addClass("d-none");
              $("#after-order").removeClass("d-none");
            }
          },
          error: function (req, status, error) {
            alert("Error occurred!");
          },
        });
        // alert('order.js')
        return false;
      }
    },
  });
});

/*******************phone field***********************************/
$(document).ready(function () {
  // get the country data from the plugin
  var countryData = window.intlTelInputGlobals.getCountryData(),
    input = document.querySelector("#phone"),
    addressDropdown = document.querySelector("#country");

  // init plugin
  var iti = window.intlTelInput(input, {
    // utilsScript: "./assets/js/orderform/utils.js" // just for formatting/placeholders etc
  });

  // populate the country dropdown
  for (var i = 0; i < countryData.length; i++) {
    var country = countryData[i];
    var optionNode = document.createElement("option");
    optionNode.value = country.iso2;
    var textNode = document.createTextNode(country.name);
    optionNode.appendChild(textNode);
    addressDropdown.appendChild(optionNode);
  }
  // set it's initial value
  addressDropdown.value = iti.getSelectedCountryData().iso2;

  // listen to the telephone input for changes
  input.addEventListener("countrychange", function (e) {
    this.value = "+" + iti.getSelectedCountryData().dialCode;
    addressDropdown.value = iti.getSelectedCountryData().iso2;
  });

  // listen to the address dropdown for changes
  addressDropdown.addEventListener("change", function () {
    iti.setCountry(this.value);
  });

  $(".intl-tel-input").show();
  $("#phone").val("+" + iti.getSelectedCountryData().dialCode);

  $("#country").on("change", function () {
    $(".intl-tel-input").show();
  });
  $("#showAltPhone").click(function () {
    $("#altPhone").show();
    $("#showAltPhone").hide();
  });
  $("#hideAltPhone").click(function () {
    $("#altPhone").hide();
    $("#alt_phone").val("");
    $("#showAltPhone").show();
  });
  $("#showAltEmail").click(function () {
    $("#altEmail").show();
    $("#showAltEmail").hide();
  });
  $("#hideAltEmail").click(function () {
    $("#altEmail").hide();
    $("#alt_email").val("");
    $("#showAltEmail").show();
  });
  setTimeout(function () {
    if ($("#paper_type option:selected").val() != "") {
      $("#getData")[0].scrollIntoView(true);
    }
  }, 500);
});

//CODE By Mossawir
/*********************************************************/
function change_price() {
  diffDays = $('input[name="deadline-order"]:checked').val();
  var quality = $('input[name="paper_standard"]:checked').val();
  var quantity = $("select[name='no_words']").children("option:selected").val();

  var urgency = "";
  if (diffDays == "4") {
    urgency = 8;
  } else if (diffDays == "8") {
    urgency = 7;
  } else if (diffDays == 1 || diffDays == 0 || diffDays == "24") {
    urgency = 6;
  } else if (diffDays == 2) {
    urgency = 5;
  } else if (diffDays == 3 || diffDays == 4) {
    urgency = 4;
  } else if (diffDays == 5 || diffDays == 6) {
    urgency = 3;
  } else if (diffDays >= 7 && diffDays < 14) {
    urgency = 2;
  } else if (diffDays >= 14) {
    urgency = 1;
  }

  var price = 0;
  if (quality == 1) {
    if (urgency == 1) price = 9;
    if (urgency == 2) price = 11;
    if (urgency == 3) price = 13;
    if (urgency == 4) price = 15;
    if (urgency == 5) price = 17;
    if (urgency == 6) price = 19;
    if (urgency == 7) price = 23;
    if (urgency == 8) price = 29;
  } // END QUALITY ==>> 1
  else if (quality == 2) {
    if (urgency == 1) price = 11;
    if (urgency == 2) price = 13;
    if (urgency == 3) price = 15;
    if (urgency == 4) price = 17;
    if (urgency == 5) price = 19;
    if (urgency == 6) price = 24;
    if (urgency == 7) price = 28;
    if (urgency == 8) price = 33;
  } // END QUALITY ==>> 2
  else if (quality == 3) {
    if (urgency == 1) price = 21;
    if (urgency == 2) price = 23;
    if (urgency == 3) price = 25;
    if (urgency == 4) price = 29;
    if (urgency == 5) price = 33;
    if (urgency == 6) price = 39;
    if (urgency == 7) price = 44;
    if (urgency == 8) price = 51;
  } // END QUALITY ==>> 3
  else if (quality == 4) {
    if (urgency == 1) price = 26;
    if (urgency == 2) price = 27;
    if (urgency == 3) price = 31;
    if (urgency == 4) price = 33;
    if (urgency == 5) price = 39;
    if (urgency == 6) price = 44;
    if (urgency == 7) price = 52;
    if (urgency == 8) price = 64;
  } // END QUALITY ==>> 4

  if (urgency == 0) {
    total = 0;
    // console.log(total, "if total");
    $(".sptotal").text(total);
    $("#sptotal").val(total);
  } else {
var nWords = quantity;
ReportCharges = 0;
          if (document.getElementById("chkReport").checked) {
    if (nWords <= 5000) {
        ReportCharges = 8
    }
    if (nWords > 5000 && nWords <= 10000) {
        ReportCharges = 16
    }
    if (nWords > 10000 && nWords <= 15000) {
        ReportCharges = 24
    }
    if (nWords > 15000 && nWords <= 20000) {
        ReportCharges = 32
    }
    if (nWords > 20000 && nWords <= 25000) {
        ReportCharges = 40
    }
    if (nWords > 25000 && nWords <= 30000) {
        ReportCharges = 48
    }
    if (nWords > 30000 && nWords <= 35000) {
        ReportCharges = 54
    }
    if (nWords > 35000 && nWords <= 40000) {
        ReportCharges = 64
    }
    if (nWords > 40000 && nWords <= 45000) {
        ReportCharges = 72
    }
    if (nWords > 45000 && nWords <= 50000) {
        ReportCharges = 80
    }
    if (nWords > 50000 && nWords <= 55000) {
        ReportCharges = 88
    }
    if (nWords > 55000 && nWords <= 60000) {
        ReportCharges = 96
    }
    if (nWords > 60000 && nWords <= 65000) {
        ReportCharges = 104
    }
    if (nWords > 65000 && nWords <= 70000) {
        ReportCharges = 112
    }
    if (nWords > 70000 && nWords <= 75000) {
        ReportCharges = 120
    }
    if (nWords > 75000 && nWords <= 80000) {
        ReportCharges = 128
    }
    if (nWords > 80000 && nWords <= 85000) {
        ReportCharges = 136
    }
    if (nWords > 85000 && nWords <= 90000) {
        ReportCharges = 144
    }
    if (nWords > 90000 && nWords <= 95000) {
        ReportCharges = 152;
    }
    if (nWords > 95000 && nWords <= 100000) {
        ReportCharges = 160;
    }
    if (nWords > 100000 && nWords <= 105000) {
        ReportCharges = 168;
    }
    if (nWords > 105000 && nWords <= 110000) {
        ReportCharges = 176;
    }
    if (nWords > 110000 && nWords <= 115000) {
        ReportCharges = 184;
    }
    if (nWords > 115000 && nWords <= 120000) {
        ReportCharges = 192;
    }
    if (nWords > 120000 && nWords <= 125000) {
        ReportCharges = 200;
    }
}

document.getElementById("txtReportCharges").value = ReportCharges;

    total = price * quantity;
    total = total + ReportCharges;
    // console.log(total, "else total");
    $(".sptotal").text(total.toFixed(2));
    $("#sptotal").val(total.toFixed(2));
  }
  // console.log(total);
  $("#writer_preferences")
    .find("input.writer_preferences_val:checked")
    .each(function (index, item) {
      var value = $(this).val();
      var calc_type = $(this).attr("calc");
      var sptotal = $("#sptotal").val();
      if (sptotal == 0) return;
      if (calc_type == "percent") {
        // console.log("value", value);
        var total = parseFloat(sptotal * value) / 100 + parseFloat(sptotal);
      } else if (calc_type == "plus") {
        // console.log("value", value);
        var total = parseFloat(value) + parseFloat(sptotal);
      }
      $(".sptotal").text(total.toFixed(2));
      $("#sptotal").val(total.toFixed(2));
    });
}

var discount_per = null;
$(document).on("click", "a.coupon_btn", function () {
  deadline = $('input[name="deadline-order"]:checked').val();
  paper_standard = $('input[name="paper_standard"]:checked').val();
  no_words = $("select[name='no_words']").children("option:selected").val();
  wordsCharges = $(".sptotal").text();;

  if (deadline == "" || paper_standard == "" || no_words == "") {
    $(".coupon_btn").hide();
    $(".removeCouponCode").removeClass("displayNoneClass");
    $("#coupon")
      .attr("disabled", "disabled")
      .addClass("borderInput")
      .css("border", "1px solid #F68976")
      .css("background-color", "#DFF0D8")
      .css("fontWeight", "Bold");
    $("#coupon").val("No amount for discount");
    return false;
  }
  $(".spinner-loader-wrap").css("display", "block");
  $("body").css("overflow", "hidden");
  var coupon = $("#coupon").val();
  jQuery.ajax({
    url: "./model/order/check_discount.php",
    data: "coupon=" + coupon,
    type: "POST",
    success: function (data) {
      discount_per = data;
      // console.log(discount_per);
      setTimeout(function () {
        $(".spinner-loader-wrap").css("display", "none");
        $("body").css("overflow", "auto");
      }, 500);

      if (discount_per == "Expired") {
        $(".coupon_btn").hide();
        $(".removeCouponCode").removeClass("displayNoneClass");
        $("#coupon")
          .attr("disabled", "disabled")
          .addClass("borderInput")
          .css("border", "1px solid #F68976")
          .css("background-color", "#DFF0D8")
          .css("fontWeight", "Bold");
        $("#coupon").val("Your Code is Expire");
        return false;
      } else if (discount_per == "Invalid") {
        $(".coupon_btn").hide();
        $(".removeCouponCode").removeClass("displayNoneClass");
        $("#coupon")
          .attr("disabled", "disabled")
          .addClass("borderInput")
          .css("border", "1px solid #F68976")
          .css("background-color", "#DFF0D8")
          .css("fontWeight", "Bold");
        $("#coupon").val("Enter Correct Coupon Code");
        return false;
      } else {
        $(this).attr("disabled", "disabled");
        $(this).hide();
        $(".coupon_btn").hide();
        $(".removeCouponCode").removeClass("displayNoneClass");
        $("#coupon")
          .attr("disabled", "disabled")
          .addClass("borderInput")
          .css("border", "1px solid #00FF00")
          .css("background-color", "#DFF0D8");
   

        $("#coupon").val("Coupon Successfully Applied");
        $("#coupon_code").val(coupon);
                var PercentTotalVal = discount_per; // Percent Discount
                                              // 
          var PercentageMin =
            (parseFloat(wordsCharges) * parseFloat(PercentTotalVal)) /
            parseFloat(100); 

          var num =
            parseFloat(wordsCharges) -
            parseFloat(PercentageMin);

          var n = num.toFixed(2); 
              $("#dcpercent").val(discount_per);
        $(".couponsumry").text('$' + PercentageMin.toFixed(2));
        if ($("#coupon").val() == "")
          $(".couponsumry").parents(".SumData").fadeOut();
        else $(".couponsumry").parents(".SumData").fadeIn();
        setTimeout(function () {
          $(".DiscntdAmnt").append(`
                        <div class=" discounttable">
                        <div class="total-price-block" style="background-color:#545252">
                        <div class="total-price align-center">Discount Percent: <span class="tprice" ><span class="discountPer"></span></span></div>
                        </div>
                        </div>
                        <div class="discounttable">
                        <div class="total-price-block" style="background-color:#51ad22">
                        <div class="total-price align-center">Payable price: <span class="tprice" >&dollar;<span class="granddiscountTotal">0.00</span></span></div>
                        </div>
                        </div>
                        `);

         
  
          $(".granddiscountTotal").text(n);
          $(".discountPer").text(PercentTotalVal);
          $("#dcamount").val(n);
          discountedAmount();
        }, 500);
      }
    },
  });
});
//remove discount
function discountedAmount() {
  var hy_discountedAmount =
    parseFloat($("#sptotal").val()) -
    parseFloat($(".granddiscountTotal").text());

  var discountedAmount = hy_discountedAmount
  $("#discountedSpan").text(discountedAmount);
  $("#discountedAmount").val(discountedAmount);
}

$(".removeCouponCode").click(function () {
  $(".spinner-loader-wrap").css("display", "block");
  $("body").css("overflow", "hidden");
  var coupon = $("#coupon_code").val();

  if (coupon) {
    jQuery.ajax({
      url: "./model/order/check_discount.php",
      data: "coupon_remove=" + coupon,
      type: "POST",
      success: function (data) {
        console.log(data);
               if (data == "Invalid")
          $(".couponsumry").parents(".SumData").fadeOut();
        else $(".couponsumry").parents(".SumData").fadeIn();

      },
    });
  }
  setTimeout(function () {
    $(".discountpercent").parent("div").remove();
    $(".removeCouponCode").addClass("displayNoneClass");
    $("#coupon")
      .val("")
      .removeAttr("disabled")
      .css("border", "")
      .css("background-color", "");
    $(".coupon_btn").show();
    $(".coupon_btn").removeAttr("disabled");
    $("#coupon").removeClass("borderInput");
    $(".discounttable").remove();
    //calculation for coupon
    $(".discountpercent").text("");
    $(".granddiscountTotal").text("");
    $("#dcamount").val("");
    $("#dcpercent").val("");
    $("#coupon_code").val("");
    $("#discountedAmount").val("");
    discountCode = false;
    setTimeout(function () {
      $(".spinner-loader-wrap").css("display", "none");
      $("body").css("overflow", "auto");
    }, 500);
  }, 500);
});

function calcPercent() {
  setTimeout(function () {
    var PercentTotalVal = discount_per; // Percent Discount
    var PercentageMin =
      (parseFloat(wordsCharges) * parseFloat(PercentTotalVal)) /
      parseFloat(100);
    var num =
      parseFloat(wordsCharges) - parseFloat(PercentageMin) ;
    var n = num.toFixed(2);
    $(".granddiscountTotal").text(n);
    $("#dcamount").val(n);
    discountedAmount();
    // var PercentTotalVal = $(".discountpercent").text(); // Percent Discount
    // var PercentageMin   = parseFloat(wordsCharges) * parseFloat(PercentTotalVal)  / parseFloat(100);
    // var num             = (parseFloat(wordsCharges) - parseFloat(PercentageMin)  );
    // var n               = num.toFixed(2)
    // $(".granddiscountTotal").text(n);
    // $("#dcamount").val(n);
  }, 200);
}

$(document).ready(function () {
  //SET Education Level Value
  $("#edu_level").on("change", function () {
    edulevel = $(this).val();
    $(".edusumry").text(edulevel);
  });

  //SET Subject Value
  $("#subject").on("input", function () {
    var sub = $("#subject").val();
    $(".subsumry").text(sub);
  });

  //SET topic Value on keyup
  $("#topic").on("input", function () {
    $topic = $(this);
    var beforeVal = $topic.val();
    setTimeout(function () {
      var afterVal = $topic.val();
      $(".topicsumry").text(afterVal);
    }, 0);
  });

  //SET Paper Type Value
  $("#paper_type").on("change", function () {
    papertytpe = $(this).val();
    $(".ptsumry").text(papertytpe);
  });

  //SET Referenceing Style Value
  $("input[name='ref_style']").on("click", function () {
    $(this).prop("checked", true);
    var ref = $(this).val();
    $(".refsumry").text(ref);
  });

  //SET Deadline Value
  $("input[name='deadline-order']").on("click", function () {
    $(this).prop("checked", true);
    var deadline = $(this).siblings(".rad-text").html();
    // var deadline = $(this).val();
    $("#deadlineInvoice").val(deadline);
    $(".deadlinessumry").text(deadline);
  });

  //SET Paper Standard Style option text Value
  $("input[name='paper_standard']").on("click", function () {
    $(this).prop("checked", true);
    // var paperstd = $(this).val();
    var content = $(this).siblings(".rad-text").html();
    $(".pssumry").text(content);
  });

  //SET Spacing Value
  $("input[name='spacing']").on("change", function () {
    reftytpe = $(this).val();
    $("#invoicespacing").val(reftytpe);
    $(".spacingssumry").text(reftytpe);
  });

  $("input[name='writer-pre']").on("click", function () {
    $(this).prop("checked", true);
    var preference = $(this).attr("data-text");

    $("#invoicepreference").val(preference);
    $(".preferencessumry").text(preference);
    // var action = "percentage";
    change_price();
  });

  // $(".preferencessumry").text(preference);
  // var action = "percentage";
  // change_price();

  //SET No. Of Words text Value
  $("select[name='no_words']").on("change", function () {
    nowords = $(this).children("option:selected").val();
    nowordsText = $(this).children("option:selected").text();
    $(".nowordssumry").text(nowordsText);
  });

  $("input[name='native-speaker']").on("click", function () {
    if ($('input[name="native-speaker"]').is(":checked")) {
      $(".nativessumry").html('<i class="fa fa-check"></i>');
      var action = "percentage";
      change_price();
    } else {
      $(".nativessumry").html("");
      change_price();
    }
  });
  $("input[name='smart-paper']").on("change", function () {
    if ($('input[name="smart-paper"]').is(":checked")) {
      $(".smrtpaprssumry").html('<i class="fa fa-check"></i>');
      var action = "percentage";
      change_price();
    } else {
      $(".smrtpaprssumry").html("");
      change_price();
    }
  });

  $("input[name='writer_samples']").on("change", function () {
    if ($('input[name="writer_samples"]').is(":checked")) {
      $(".writrsmplessumry").html('<i class="fa fa-check"></i>');
      var action = "add";
      change_price();
    } else {
      $(".writrsmplessumry").html("");
      change_price();
    }
  });

  $("input[name='copy-of-source']").on("change", function () {
    if ($('input[name="copy-of-source"]').is(":checked")) {
      $(".copysmplessumry").html('<i class="fa fa-check"></i>');
      var action = "add";
      change_price();
    } else {
      $(".copysmplessumry").html("");
      change_price();
    }
  });

  $("input[name='progressive']").on("change", function () {
    if ($('input[name="progressive"]').is(":checked")) {
      $(".progressivessumry").html('<i class="fa fa-check"></i>');
      var action = "percentage";
      change_price();
    } else {
      $(".progressivessumry").html("");
      change_price();
    }
  });

  //SET name Value
  $("#name").on("input", function () {
    $name = $(this);
    var beforeVal = $name.val();
    setTimeout(function () {
      var afterVal = $name.val();
      $(".namesumry").text(afterVal);
    }, 0);
  });

  //  $("#coupon").on("input", function () {
  //   $name = $(this);
  //   var beforeVal = $name.val();
  //   setTimeout(function () {
  //     var afterVal = $name.val();
  //     $(".couponsumry").text(afterVal);
  //   }, 0);
  // });
  //SET Email Value
  $("#email").on("input", function () {
    $email = $(this);
    var beforeVal = $email.val();
    setTimeout(function () {
      var afterVal = $email.val();
      $(".emailsumry").text(afterVal);
      $(".emailsumry")
        .parent("a")
        .attr("href", "mailto:" + afterVal); //add value in href
    }, 0);
  });
  //SET Country text Value
  $("#country").on("change", function () {
    nowords = $("#country option:selected").text();
    $(".countrysumry").text(nowords);
  });
  //SET name Value
  $("#phone1").on("input", function () {
    $phone = $(this);
    var beforeVal = $phone.val();
    setTimeout(function () {
      var afterVal = $phone.val();
      $(".phonesumry").text(afterVal);
    }, 0);
  });

  /* ############ SHOW HIDE DATA IN SUMMERY ################## */
  $("#edu_level").on("change", function () {
    if ($(this).val() == "") $(".edusumry").parents(".SumData").fadeOut();
    else $(".edusumry").parents(".SumData").fadeIn();
  });

  $("#subject").on("input", function () {
    if ($(this).val() == "") $(".subsumry").parents(".SumData").fadeOut();
    else $(".subsumry").parents(".SumData").fadeIn();
  });

  $("#topic").on("input", function () {
    if ($(this).val() == "") $(".topicsumry").parents(".SumData").fadeOut();
    else $(".topicsumry").parents(".SumData").fadeIn();
  });

  // $("#topic").on("input", function () {
  //   if ($(this).val() == "") $(".couponsumry").parents(".SumData").fadeOut();
  //   else $(".couponsumry").parents(".SumData").fadeIn();
  // });

  $("#paper_type").on("change", function () {
    if ($(this).val() == "") $(".ptsumry").parents(".SumData").fadeOut();
    else $(".ptsumry").parents(".SumData").fadeIn();
  });

  $(".ref_style-label").on("change", function () {
    if ("input[type=radio]:checked" == false)
      $(".refsumry").parents(".SumData").fadeOut();
    else $(".refsumry").parents(".SumData").fadeIn();
  });

  $(".deadline-label").on("change", function () {
    if ("input[type=radio]:checked" == false)
      $(".deadlinessumry").parents(".SumData").fadeOut();
    else $(".deadlinessumry").parents(".SumData").fadeIn();
  });

  $(".paper_standard-label").on("change", function () {
    if ("input[type=radio]:checked" == false)
      $(".pssumry").parents(".SumData").fadeOut();
    else $(".pssumry").parents(".SumData").fadeIn();
  });

  $("input[name='native-speaker']").on("change", function () {
    if ($('input[name="native-speaker"]').is(":checked")) {
      $(".nativessumry").parents(".SumData").fadeIn();
    } else {
      $(".nativessumry").parents(".SumData").fadeOut();
    }
  });

  $("input[name='smart-paper']").on("change", function () {
    if ($('input[name="smart-paper"]').is(":checked")) {
      $(".smrtpaprssumry").parents(".SumData").fadeIn();
    } else {
      $(".smrtpaprssumry").parents(".SumData").fadeOut();
    }
  });

  $("input[name='writer_samples']").on("change", function () {
    if ($('input[name="writer_samples"]').is(":checked")) {
      $(".writrsmplessumry").parents(".SumData").fadeIn();
    } else {
      $(".writrsmplessumry").parents(".SumData").fadeOut();
    }
  });

  $("input[name='copy-of-source']").on("change", function () {
    if ($('input[name="copy-of-source"]').is(":checked")) {
      $(".copysmplessumry").parents(".SumData").fadeIn();
    } else {
      $(".copysmplessumry").parents(".SumData").fadeOut();
    }
  });

  $("input[name='writer-pre']").on("click", function () {
    if ($('input[name="writer-pre"]').is(":checked")) {
      $(".preferencessumry").parents(".SumData").fadeIn();
    } else {
      $(".preferencessumry").parents(".SumData").fadeOut();
    }
  });

  $("input[name='progressive']").on("change", function () {
    if ($('input[name="progressive"]').is(":checked")) {
      $(".progressivessumry").parents(".SumData").fadeIn();
    } else {
      $(".progressivessumry").parents(".SumData").fadeOut();
    }
  });

  $("input[name='spacing']").on("change", function () {
    if ("input[type=radio]:checked" == false)
      $(".spacingssumry").parents(".SumData").fadeOut();
    else $(".spacingssumry").parents(".SumData").fadeIn();
  });
  $("select[name='no_words']").on("change", function () {
    if ($(this).val() == "") $(".nowordssumry").parents(".SumData").fadeOut();
    else $(".nowordssumry").parents(".SumData").fadeIn();
  });
  $("#name").on("input", function () {
    if ($(this).val() == "") $(".namesumry").parents(".SumData").fadeOut();
    else $(".namesumry").parents(".SumData").fadeIn();
  });
  $("#email").on("input", function () {
    if ($(this).val() == "") $(".emailsumry").parents(".SumData").fadeOut();
    else $(".emailsumry").parents(".SumData").fadeIn();
  });
  $("#country").on("change", function () {
    if ($(this).val() == "") $(".countrysumry").parents(".SumData").fadeOut();
    else $(".countrysumry").parents(".SumData").fadeIn();
  });
  $("#phone1").on("input", function () {
    if ($(this).val() == "") $(".phonesumry").parents(".SumData").fadeOut();
    else $(".phonesumry").parents(".SumData").fadeIn();
  });
  $(".personalheading").hide();
  setInterval(function () {
    if ($("#name,#email, #country, #phone").val() != "") {
      $(".personalheading").show();
    }
  }, 500);
});
/*
 $(".sf-btn").click(function(){
$(this).addClass("nextadded");
 });
   $(".nextadded").on("click", function(){
    myphone = $("#phone").val();
          if(myphone.length <= 3  ) {
                alert("you cannot move coz phone not validated");
                $(myphone).addClass();
         } else {
           // Disable submit button
      }
    });
    */
// });
$("#no_words").on("change", function () {
  setTimeout(function () {
    discountedAmount();
  }, 500);
});
