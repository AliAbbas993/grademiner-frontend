<?php $pageClass = "order-now";?>
<!-- Header -->
<?php include './includes/header.php';?>
    <link rel="stylesheet" href="./assets/style/css/order.css">
    <link rel="stylesheet" href="./assets/style/css/intlTelInput.css">
<!-- Header -->

<style>
/*order now right Box Styles*/

.order-box {
    position: relative;
    padding-bottom: 20px;
}

.ord-bg-gray {
    border-radius: 20px 20px 0;
    padding: 30px 15px;
    background: #d0f7da;
}

.order-box-head {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
}

.order-box-head span {
    font-size: 30px;
    color: #480048;
    text-transform: uppercase;
    line-height: 30px;
}

.order-box .order-box-head {
    background: transparent;
    padding: 16px 0px;
    font-weight: 700;
}

.btn.btn-chat-order {
    display: -webkit-inline-box;
    display: -ms-inline-flexbox;
    display: inline-flex;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
}

.btn.btn-chat-order {
    width: 150px;
    height: 35px;
    color: #ffffff;
    border-radius: 46px;
    background: #0d9f1a;
    font-size: 15px;
    font-weight: 700;
    text-transform: uppercase;
    margin-right: 5px;
}

.btn.btn-right .icon,
.btn.btn-chat-order .icon {
    width: 13px;
    height: 10px;
    background-position: -112px -392px;
    margin-left: 11px;
    display: inline-block;
}

.btn.btn-right {
    width: 150px;
    height: 35px;
    color: #ffffff;
    border-radius: 46px;
    background: #a5a5a5;
    font-size: 15px;
    font-weight: 700;
    text-transform: uppercase;
    margin-right: 5px;
}

.rating-main-bg {
    background-color: #01c312;
    border-radius: 10px 10px 0px 0px;
}

.order-box .security-head {
    margin: 15px 0px;
    font-family: inherit;
    position: relative;
    font-weight: 700;
}

.order-box .security-head-blue-bg {
    font-size: 14px;
    background-color: white;
    padding: 10px 15px;
    margin: 2px 0px;
}

.order-box .security-head-blue-bg p {
    margin: 0px;
}

.order-box .security-head-blue-bg-right {
    background-color: white;
    padding: 10px 15px;
    margin: 2px 0px;
    text-align: right;
}

.order-box .security-head-darkblue-bg {
    font-size: 14px;
    background-color: #0d9f1a;
    padding: 10px 15px;
    margin: 2px 0px;
    color: white;
}

.order-box .security-head-darkblue-bg p {
    margin: 0px;
}

.order-box .security-head-promo select {
    margin-top: 15px;
    background-color: black;
    color: white;
    border: none;
    font-size: 14px;
    border-radius: 0px;
}

.order-box .security-head-image {
    padding: 10px 15px;
    margin: 2px 0px;
}

.order-box .security-head-image img {
    width: 100%;
    height: 35px;
}

.fixed {
    position: fixed;
    top: 0;
    transition: ease all .4s;
}

.normal-price {
    position: absolute;
    bottom: 0px;
    top: unset;
    transition: ease all .4s;
}

.security-head span {
    display: block;
}

.security-head .sh-one {
    font-size: 30px;
    color: #0d9f1a;
    line-height: 30px;
}

.security-head .sh-two {
    font-size: 19px;
    color: black;
    line-height: 30px;
    font-weight: 500;
}

.security-head .sh-three {
    font-size: 29px;
    font-weight: 400;
    line-height: 29px;
}

.security-head-bg {
    border-radius: 20px 20px 0;
    padding: 5px 20px;
    background-color: #d0f7da;
    max-width: 100%;
}

.security-head-bg .white-bg {
    border-radius: 20px 20px 0;
    display: block;
    width: 100%;
}

.secure-payment-icon {
    position: relative;
    text-align: center;
    margin-top: 10px;
}

.rating-head,
.gareentee-head {
    position: relative;
    background: transparent;
    margin: 15px auto;
    text-align: center;
    color: black;
    font-size: 30px;
    font-weight: 700;
    text-transform: uppercase;
}

.secure-payment-icon {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-flex-wrap: wrap;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    -webkit-box-pack: center;
    -webkit-justify-content: center;
    -ms-flex-pack: center;
    justify-content: center;
    position: relative;
}

.secure-payment-icon span {
    display: -webkit-flex;
    display: -moz-flex;
    display: -ms-flex;
    display: -o-flex;
    display: flex;
    position: relative;
    width: 100%;
    justify-content: center;
    align-items: center;
}

.icon-sprite {
    display: -webkit-inline-box;
    display: -webkit-inline-flex;
    display: -ms-inline-flexbox;
    display: inline-flex;
    background: url('<?php echo $base_url ?>assets/images/order-form-sprite.webp') no-repeat;
}

.star-icon {
    background-position: -94px -169px;
    width: 46px;
    height: 45px;
    margin: 0px;
}

.calc-wrap {
    height: 100%
}

.order-box.ord-bg-red {
    position: relative;
    border-radius: 20px 20px 0;
    padding: 10px;
    background-color: #d0f7da;
}

.order-box.ord-bg-red .white-bg {
    padding: 30px;
    /* background: #ffffff; */
    border-radius: 20px 20px 0;
    display: block;
    width: 100%;
    padding: 15px;
}

.order-box.ord-bg-red .white-bg .secure-payment-icon img {
    max-width: 100%;
}

.guarantee-box {
    position: relative;
    border-radius: 20px 20px 0;
    padding: 10px;
    background-color: #d0f7da;
}

.guarantee-box .our-gareentee-block {
    /* background: #ffffff; */
    border-radius: 20px 20px 0;
    display: block;
    width: 100%;
    padding: 15px;
}

.order-paypal-icon {
    background-position: -13px -8px;
    width: 132px;
    height: 40px;
    margin-right: 25px;
}

.order-wirebank-icon {
    background-position: -13px -62px;
    width: 107px;
    height: 47px;
}

.order-visa-icon {
    background-position: -21px -124px;
    width: 58px;
    height: 37px;
}

.order-master-icon {
    background-position: -21px -173px;
    width: 58px;
    height: 38px;
}

.order-discover-icon {
    background-position: -21px -221px;
    width: 59px;
    height: 41px;
}

.order-americanExpress-icon {
    background-position: -91px -124px;
    width: 58px;
    height: 37px;
}

.order-barclays-icon {
    background-position: -103px -224px;
    width: 40px;
    height: 43px;
}

.secure-payment-icon .last-payment {
    margin: 20px 0px;
    -webkit-justify-content: space-around;
    -ms-flex-pack: distribute;
    justify-content: space-around;
    padding: 0px 15px;
}

.guarantee-img {
    display: block;
    position: relative;
    text-align: center;
    max-width: 100%
}

.satisfaction {
    background-position: -261px -14px;
    width: 154px;
    height: 154px;
    margin-bottom: 25px;
}

.moneyback {
    background-position: -218px -200px;
    width: 241px;
    height: 59px;
}

.rating-value .lbl {
    position: relative;
    font-size: 16px;
    color: white;
    font-weight: 600;
    text-transform: uppercase;
}

/* .raitng-bg-box .rating-value {font-style: italic;} */

.rating-value,
.rating-value .lbl {
    display: -webkit-box;
    display: -ms-flexbox;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
}

.rating-value span.blck {
    font-size: 14px;
    color: white;
    font-weight: 400;
}

.rating-value span.yel {
    font-size: 20px;
    font-weight: 700;
    color: white;
    padding-left: 5px;
    padding-right: 5px;
}

.rating-block {
    position: relative;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    margin-bottom: 10px;
}

.rating-bg {
    position: relative;
    z-index: 1;
    margin: 15px auto;
    background-color: #0d9f1a;
    padding: 2px 15px;
    border-radius: 25px;
}

.rating-bg .fa-star {
    font-size: 30px;
    color: #eae301;
}

.border-top.verified-block {
    text-align: center;
}

.verified-block b {
    color: black;
    font-size: 10px;
    text-transform: uppercase;
    letter-spacing: 1px;
}

.total-price-block {
    min-height: 65px;
}

.our-gareentee-block {
    position: relative;
    padding-bottom: 20px;
}

.order-box .btn-block .commonBtn.btn-right:hover,
.order-box .btn-block .commonBtn.btn-right:focus {
    background-color: #ffffff;
    color: #efca3e;
}

.order-box .btn-block .commonBtn.btn-right:hover:before {
    border-bottom-color: #efca3e;
}

/*
		Order Custom Styles
		Site related only
		*/

.order-head .head-text {
    font-size: 38px;
    color: #000000;
    font-weight: 700;
    margin: 30px auto;
    position: relative;
    text-transform: uppercase;
}

.order-head .heading-tile:before{
    margin: 0;
}

.order-form-inner {
    background: #ffffff;
    border: 0;
    padding: 30px;
    box-shadow: 0 0 15px #87dea1;
}

.inner-order-head .inner-head-text {
    font-size: 24px;
    font-weight: 700;
    color: #0d9f1a;
    margin: 20px auto;
    text-transform: uppercase;
}

.order-form-inner .form-group label {
    color: black;
    font-size: 12px;
    font-weight: 700;
    text-transform: uppercase;
    position: relative;
}

.order-form-inner .form-group .glyphicon-asterisk {
    color: #c04848;
    font-weight: 400;
    font-size: 16px;
    top: 2px;
    font-family: inherit;
}

.order-form-inner hr {
    margin-top: 20px;
    margin-bottom: 20px;
    border: 0;
    border-top: 1px solid #d7d7d7;
}

.order-form-inner #preferences hr {
    margin-bottom: 10px;
}

.red-bg {
    background-color: #3879c4;
    position: relative;
}

/* .red-bg:before { content: ''; position: absolute; top: -3px; left: 0px; width: 100%; height: 1px; background-color: #2b3043;} */

.order-form-inner .uploadifive-button {
    background-color: #008269;
}

.terms-block .order-submit {
    margin: 10px 0;
    font-size: 14px;
    font-weight: 600;
    display: inline-block;
    border-radius: 10px;
    padding: 10px 30px;
    color: #ffffff;
    text-transform: uppercase;
    border: none;
}

.terms-block .red {
    color: #1e2128;
    font-weight: 500;
    font-size: 15px;
}

.terms-block {
    background: #ffffff;
    border: 0;
    padding: 0px;
    border-radius: 0 0 0 20px;
    /* box-shadow: 0 0 15px #87dea1; */
}

.terms-block .radio label a {
    color: #03aab0;
}

.payment-details {
    background-color: #fdf1d9;
}

.thankYou-box .thankyou-head {
    font-family: inherit;
    font-weight: 700;
    font-size: 49px;
    color: white;
    line-height: 50px;
    text-transform: uppercase;
}

.thankYou-box .thankyou-head {
    display: -webkit-inline-box;
    display: -ms-inline-flexbox;
    display: inline-flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -ms-flex-direction: column;
    flex-direction: column;
}

.invoice-page .thankYou-box p {
    display: -webkit-inline-box;
    display: -ms-inline-flexbox;
    display: inline-flex;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    padding: 2px 10px;
    margin: 10px 0px 0px;
    background: transparent;
    color: #815581;
    font-weight: 700;
    width: 100%;
    font-size: 14px;
    text-transform: uppercase;
    letter-spacing: 0.5px;
}

.thankYou-box {
    padding: 60px 0px 30px;
    margin-bottom: 0px;
}

.invoice-head .invoice-no {
    background: white;
    display: inline-flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    font-size: 26px;
    color: #02bc4d;
    text-transform: uppercase;
    font-weight: 600;
}

.invoice-head .invoice-no-val {
    font-weight: 600;
    color: #02bc4d;
}

.our-details {
    background-color: #fff;
}

.detail-label {
    color: #000;
    font-weight: 700;
    text-transform: uppercase;
}

.our-details .detail-name,
.our-details .detail-name a,
.our-details .detail-name .email,
.our-details .detail-name .phoneNumber {
    color: #1e2028;
    font-weight: 400;
    font-size: 13px;
}

.c-detail-label {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
}

.customer-details {
    background: #000;
    min-height: 40px;
}

.customer-details,
.c-details-block {
    min-height: 40px;
}

.details-sum-head {
    font-weight: 700;
    font-size: 18px;
    color: black;
    background-color: #bdf1d2;
}

.details-sum-list .sum-list li {
    font-weight: 600;
    border-top: 0;
    padding-left: 30px;
    padding-right: 15px;
}

.details-sum-list .sum-list2 li {
    padding-left: 15px;
    padding-right: 30px;
}

.details-sum-list .sum-list2 li {
    font-weight: 400;
}

.details-sum-list .sum-list li:nth-child(odd) {
    background: #ffffff;
}

.details-sum-list .col-md-6 {
    padding: 0;
}

.details-sum-list {
    position: relative;
    margin: 0px -15px;
}

.invo-total-amount {
    background-color: #0d9f1a;
}

.total-lable,
.invo-total-amount .total-amount {
    padding: 0px 30px 0px;
    min-height: 34px;
    display: flex;
    justify-content: center;
    align-items: center;
    font-size: 16px;
    color: #ffffff;
}

.invo-total-amount .total-amount {
    color: #ffffff;
    font-size: 23px;
    font-weight: 700;
}

.order-detals-summery {
    border: 0;
    background: #ffffff;
}

.radio a {
    font-weight: 600;
}

.order-invoice-block .payment-details,
.payment-details .order-detals-summery {
    padding: 0px 0px;
    background: #e8edf4;
}

.customer-details .col-sm-4:last-child .c-details-block:after {
    content: none;
}

.details-sum-list .sum-list .row:nth-child(odd) label,
.details-sum-list .sum-list .row:nth-child(odd) span {
    background: #e8edf4;
}

.calendar-icon {
    background: url('<?php echo $base_url ?>assets/images/orderform/calender-icon.svg') no-repeat;
    margin-top: 10%;
    margin-left: 25%;
}

.order-form-inner .form-group label.error, .order-form-inner .form-group-1 label.error {
    color: red;
    font-size: 10px !important;
    font-weight: 600;
    text-transform: uppercase;
    position: absolute;
    line-height: 20px;
}

.terms-block .radio label {
    padding-left: 0;
}

.order-form-inner .checkbox input[type=checkbox] {
    margin-top: 0;
}

.order-form-inner .terms-block .order-submit {
    margin: 10px 0px;
    font-size: 14px;
    font-weight: 600;
    display: inline-block;
    border-radius: 30px;
    padding: 10px 20px;
    color: #ffffff;
    text-transform: uppercase;
    border: none;
    background-color: #0d9f1a;
    width: 220px;
    height: 40px;
}

.order-form-inner .intl-tel-input .selected-flag .iti-flag {
    top: 3px;
}

.order-form-block {
    position: relative;
    margin-bottom: 100px;
    z-index: 999999999;
}

.order-form-inner .form-group .form-control {
    display: block;
    width: 100%;
    height: calc(1.5em + .75rem + 2px);
    padding: .375rem .75rem;
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: #495057;
    background-color: #c1c1c1;
    border-radius: 50px;
    background-clip: padding-box;
    border: none;
    transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out;
    box-shadow: inset 0 0 0 1px rgba(255, 255, 255, 0), inset 0 0 0 100px #c1c1c1;
    -webkit-text-fill-color: white;
}

.order-form-inner .form-group .textarea {
    border-radius: 10px;
}

.order-form-inner .form-group .icon-bg {
    position: absolute;
    right: 0;
    top: 0;
    bottom: 0;
    width: 40px;
    height: 100%;
    border: none;
    background: #c3c8ca;
    border-top-right-radius: 10px;
    border-bottom-right-radius: 10px;
}

.order-form-inner .form-group .icon-bg .fa-calendar {
    color: #fff;
    font-size: 24px;
    margin: 7px 8px;
}

.order-form-inner .form-group .form-control.hasDatepicker {
    border-top-right-radius: 0px;
    border-bottom-right-radius: 0px;
    border-right: 0;
}

.order-form-inner .form-group .form-control.hasDatepicker {
    border-top-right-radius: 0px;
    border-bottom-right-radius: 0px;
    border-right: 0;
}

.order-form-inner .uploadifive-button {
    background-color: white;
    min-width: 130px;
    min-height: 50px;
    border-radius: 20px;
    font-size: 12px;
    letter-spacing: 1px;
    text-shadow: none;
    font-weight: 300;
    color: #0d9f1a;
    padding: 10px 35px;
    border: 1px solid #0d9f1a;
}

.order-form-inner .uploadifive-button:hover {
    color: white;
    border-color: white;
    background-color: black;
}

.order-form-inner textarea.form-control {
    min-height: 90px;
    resize: none;
}

.terms-block .checkbox label,
.terms-block .radio label {
    font-size: 15px;
    line-height: 15px;
    color: #1e2128;
    font-weight: 400;
    padding-left: 30px;
}

/* .terms-block .order-submit:hover, .terms-block .order-submit:focus {background-color: #1e1f1f; color: #ffffff; } */

.terms-block .radio .radio-button {
    display: inline-block;
    margin-right: 15px;
    position: relative;
    left: -20px;
    top: 2px;
    margin: 0px;
    bottom: 0px;
}

.terms-block .radio .error {
    font-size: 10px !important;
    color: red;
}

.terms-block .btn-block {
    display: inline-block;
    position: relative;
    width: inherit;
    margin-top: 15px;
}

.terms-block .btn-block:after {
    content: '';
    background-image: url('data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAsAAAAPCAYAAAAyPTUwAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyFpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuNS1jMDE0IDc5LjE1MTQ4MSwgMjAxMy8wMy8xMy0xMjowOToxNSAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENDIChXaW5kb3dzKSIgeG1wTU06SW5zdGFuY2VJRD0ieG1wLmlpZDo5MDgwQzhBNjg3MzMxMUU4OEQzMDkxMEYzQUE1OTZFNiIgeG1wTU06RG9jdW1lbnRJRD0ieG1wLmRpZDo5MDgwQzhBNzg3MzMxMUU4OEQzMDkxMEYzQUE1OTZFNiI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSJ4bXAuaWlkOjkwODBDOEE0ODczMzExRTg4RDMwOTEwRjNBQTU5NkU2IiBzdFJlZjpkb2N1bWVudElEPSJ4bXAuZGlkOjkwODBDOEE1ODczMzExRTg4RDMwOTEwRjNBQTU5NkU2Ii8+IDwvcmRmOkRlc2NyaXB0aW9uPiA8L3JkZjpSREY+IDwveDp4bXBtZXRhPiA8P3hwYWNrZXQgZW5kPSJyIj8+QqRygAAAANFJREFUeNqM0qEKwkAcx/GTwUCLyWa0GmUmwx5ChD2GoAs+x9IewKrdbjIsWIwLymbQYLB4fg//Az1u6uAzuPHnf//77ZTW+oAZFIYo0Zf1B/Oa44EITWyRo+sqNhLcEaIju2Vou4o9rHFGTxTYwLeLlXTJpKvpHuCG1FWsZM5c5m5hLOeJXcVKkrhgJePFVQCuYmOhX89I1juc6jpfsUTjW2d75qhuZjuNULJP7DR8ybR4y7mU7D27OJVMg19/sDrA5J+7scdUPgxwrLt1TwEGAJ7RISrys0MyAAAAAElFTkSuQmCC');
    background-repeat: no-repeat;
    position: absolute;
    right: 15px;
    top: 50%;
    -webkit-transform: translateY(-50%);
    transform: translateY(-50%);
    width: 11px;
    height: 15px;
}

.terms-block .radio {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
}

.gray-bg {
    background-color: #480048;
    margin-bottom: 1px;
}

.thankYou-box .thankyou-head span {
    display: -webkit-inline-box;
    display: -ms-inline-flexbox;
    display: inline-flex;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    font-weight: 700;
    font-size: 18px;
    color: #ffffff;
    border-radius: 25px;
    background-color: transparent;
    margin-top: 5px;
}

.customer-details .c-detail-label {
    font-weight: 400;
    font-size: 13px;
    color: #ffffff;
}

.details-sum-list .sum-list label {
    color: #1e2128;
}

.details-sum-list .sum-list span {
    color: #282828;
    font-size: 13px;
    font-weight: 400;
}

.pr-0 {
    padding: 0px 15px;
}

.payment-details .details-sum-list .sum-list .row:nth-child(odd) label,
.payment-details .details-sum-list .sum-list .row:nth-child(odd) span {
    background-color: #ffffff;
}

.order-form-block .bg-success p {
    color: #3ed3b5;
}

.c-detail-label small {
    text-align: center;
}

.order-form-inner .icon-bg {
    background-color: white;
    border: 1px solid white;
}

.terms-block .footerForm input[type="submit"] {
    border-radius: 2px;
}

.order-box .btn-block .commonBtn {
    width: 152px;
    height: 46px;
    padding: 0px;
    margin-right: 5px;
}

.order-box .btn-block .commonBtn.btn-right {
    background-color: #efca3e;
    color: #ffffff;
}

.commonBtn:hover:after,
.whiteBtn:after {
    border-bottom-color: #ffffff;
}

/* .order-head .head-text:before, .order-head .head-text:after { content: ''; position: absolute; left: 0px; bottom: -18px; background-color: #efca3e; width: 50px; height: 1px;} */

.inner-page.orderNowPage {
    background-image: none;
}

.order-head .head-text:after {
    bottom: -25px;
    left: 20px;
}

.terms-block .footerForm {
    margin-top: 0;
}

.order-form-inner .form-group #coupon {
    margin-top: 0px !important;
}

.total-price-block .total-price {
    font-weight: 300;
}

.total-price .tprice {
    font-size: 28px;
    font-weight: 500;
}

.total-price .tprice #fieldset-val {
    padding-left: 5px;
}

.call-now-block,
.call-now-no {
    position: relative;
}

.call-now-block {
    padding: 12px 0px 12px;
    background-color: transparent;
    margin: 0px auto;
}

.call-now-icon {
    text-align: center;
    background: #ffffff;
    border-radius: 10px;
    padding: 12px 10px;
    width: 50px;
    height: 50px;
    margin: 0 auto;
    display: block;
    box-shadow: 0 0 10px #17715e;
    margin-bottom: 15px;
}

.call-now-lable {
    font-size: 19px;
    color: #1e2027;
    line-height: 19px;
    text-transform: uppercase;
    font-weight: 400;
}

.call-now-block .call-now-lable,
.call-now-no {
    display: block;
    text-align: center;
}

.call-now-no .phoneNumber {
    font-size: 24px;
    font-weight: 500;
    color: #0d9f1a;
    font-weight: 700;
    line-height: 28px;
}

.ord-bg-gray .btn-block {
    margin-top: 20px;
}

.order-form-inner .form-group #email-error {
    position: absolute;
    left: 0px;
    /* bottom: -23px; */
}

.thankYou-box.gray-bg {
    background-color: #02bc4d;
    border-radius: 10px;
}

.order-form-inner.invoice-page {
    background-color: transparent;
    margin-top: 50px;
}

.order-form-inner .form-group label[for="chkReport"] {
    color: white;
    font-weight: 300;
    font-size: 14px;
    text-transform: capitalize;
    margin: 10px auto;
}

.inc-vat {
    display: inline-block;
    color: #ffffff;
    font-family: inherit;
    font-weight: 400;
    font-size: 9px;
}

.intl-tel-input input,
.intl-tel-input input[type=text],
.intl-tel-input input[type=tel] {
    padding-left: 35px !important;
}

.order-form-inner .form-group input#phone {
    width: 33%;
    float: left;
    bottom: 8px;
}

.order-form-inner .form-group input#phone1 {
    width: 63%;
    float: left;
    margin: -8px 0 0 10px;
}

span.fa.fa-asterisk {
    font-size: 6px;
    position: absolute;
    top: 0;
    right: -10px;
}

input#file_upload {
    max-width: 100%;
}

.add-remove-btn {
    display: flex;
    flex-wrap: wrap;
    justify-content: flex-end;
    align-items: center;
    height: 50px;
}

.add-remove-btn a.btn {
    padding: 8px 15px;
    border-radius: 25px;
    margin-right: 5px;
    display: inline-block;
    height: 30px;
}

#ui-datepicker-div {
    z-index: 999999999 !important;
}


/* file input style */
.paper-file .file-field .file-upload {
    display: flex;
    flex-wrap: wrap;
    padding: 5%;
    border-radius: 10px;
    border: 1px dashed #0d9f1a;
}

.paper-file .file-field .file-upload .file-upload-btn {
    margin: 0;
    color: #0d9f1a;
    border: none;
    padding: 0px 36px;
    transition: all .2s ease;
    outline: none;
    /* width: 20%; */
    /* transform: skew(-10deg); */
    background: white;
    font-weight: 400;
    text-transform: capitalize;
    border-radius: 20px;
    border: 1px solid #0d9f1a;
    height: 35px;
}

.paper-file .file-field .file-upload .file-upload-btn:hover {
    background: #0d9f1a;
    color: #FFFFFF;
    transition: all .2s ease;
    cursor: pointer;
}

.paper-file .file-field .file-upload .file-upload-btn:active {
    border: 0;
    transition: all .2s ease;
}

.paper-file .file-field .file-upload .image-upload-wrap {
    width: 50%;
    margin: 0;
    /* border: 4px dashed #EBEBEB; */
    position: relative;
    height: 35px;
}

.paper-file .file-field .file-upload .image-upload-wrap .file-upload-input {
    position: absolute;
    margin: 0;
    padding: 0;
    width: 100%;
    height: 100%;
    outline: none;
    opacity: 0;
    cursor: pointer;
}

.paper-file .file-field .file-upload .image-upload-wrap .drag-text {
    text-align: center;
}

.paper-file .file-field .file-upload .image-upload-wrap .drag-text h3 {
    font-weight: 100;
    color: #676060;
    text-align: center;
    margin: 8px auto;
    text-transform: capitalize;
    font-size: 17px;
}

/* .paper-file .file-field .file-upload .image-upload-wrap:hover {
        background-color: #EBEBEB;
        border: 4px dashed #5FB2D3;
    } */
.paper-file .file-field .file-upload .image-upload-wrap:hover .drag-text h3 {
    /* color: #5FB2D3; */
}

.paper-file .file-field .file-upload .image-dropping {
    background-color: #EBEBEB;
    border: 4px dashed #FFFFFF;
}

.paper-file .file-field .file-upload .file-upload-content {
    text-align: center;
    width: 75%;
    margin: 0;
    display: none;
    flex-wrap: wrap;
    justify-content: flex-start;
}

.paper-file .file-field .file-upload .file-upload-content .file-upload-image {
    max-height: 200px;
    max-width: 200px;
    margin: auto;
    padding: 20px;
}

.paper-file .file-field .file-upload .file-upload-content .image-title-wrap {
    padding: 0 15px 15px 15px;
    color: #222;
}

.paper-file .file-field .file-upload .file-upload-content .image-title-wrap .remove-image {
    width: 200px;
    margin: 0;
    color: #fff;
    background: #5FB2D3;
    border: none;
    padding: 10px;
    border-radius: 4px;
    border-bottom: 4px solid #5FB2D3;
    transition: all .2s ease;
    outline: none;
    text-transform: uppercase;
    font-weight: 700;
}

.paper-file .file-field .file-upload .file-upload-content .image-title-wrap .remove-image:hover {
    background: #5FB2D3;
    color: #FFFFFF;
    transition: all .2s ease;
    cursor: pointer;
}

.paper-file .file-field .file-upload .file-upload-content .image-title-wrap .remove-image:active {
    border: 0;
    transition: all .2s ease;
}

.paper-file .file-field .file-upload .file-upload-content ul li span.file-name {
    color: #ADADAD;
}

.paper-file .file-field .file-upload .file-upload-content ul li button {
    padding: 0;
    width: 10px;
    border: none;
    background: transparent;
    cursor: pointer;
    height: 20px;
    position: relative;
}

.paper-file .file-field .file-upload .file-upload-content ul li button img {
    position: absolute;
    width: 7px;
    right: 0;
    left: 0;
}

/* file input style */



/* Media Start */
/* This is Terms and Condition iframe css */

@media screen and (min-width: 768px) {
    .form-group {
        position: relative;
    }

    #iframe-container {
        display: -webkit-box;
        /* OLD - iOS 6-, Safari 3.1-6 */
        display: -moz-box;
        /* OLD - Firefox 19- (buggy but mostly works) */
        display: -ms-flexbox;
        /* TWEENER - IE 10 */
        display: -webkit-flex;
        /* NEW - Chrome */
        display: flex;
    }

    #ifrm1 {
        opacity: 1;
        width: 100%;
        display: block;
        min-height: 250px;
        max-width: 330px;
        background: transparent;
        border: 1px solid #ececec;
        padding: 5px;
        margin-bottom: 10px;
    }

    /*#trig1:hover + iframe {
					opacity: 1;
					display: block;
					}*/
    #ifrm1:hover {
        opacity: 1;
        display: block;
    }

    .paper-file .file-field .file-upload .image-upload-wrap .drag-text h3 {
        font-weight: 100;
        color: #676060;
        text-align: center;
        margin: 5px auto;
        text-transform: capitalize;
        font-size: 24px;
    }
}

/* Terms and Condition iframe css End */

@media (max-width: 1199px) {
    .call-now-no .phoneNumber {
        font-size: 24px;
        line-height: 24px;
    }

    .btn.btn-chat-order {
        margin-right: 0px;
    }

    .btn.btn-chat-order:first-child {
        margin-bottom: 10px;
    }

    .security-head .sh-one {
        font-size: 26px;
        margin-bottom: 0;
    }

    .security-head .sh-two {
        font-size: 19px;
    }

    .security-head .sh-three {
        font-size: 21px;
        line-height: 22px;
    }

    .star-icon {
        margin: -3px;
    }

    .order-box .security-head:after {
        background-size: contain;
        width: 100%;
    }

    .raitng-bg-box {
        margin: 0px 15px 0px;
        padding: 7px 15px 0px;
    }

    .rating-head,
    .gareentee-head {
        font-size: 28px;
    }
}

/*1199px End*/

@media only screen and (min-width: 992px) and (max-width: 1199px) {
    .call-now-no .phoneNumber {
        font-size: 19px;
        line-height: 24px;
    }

    .call-now-lable {
        font-size: 17px;
    }

    .order-box-head span {
        font-size: 24px;
    }
}

/*(min-width: 992px) and (max-width: 1199px)*/

@media (max-width: 991px) {
    .btn.btn-chat-order {
        margin-bottom: 10px;
    }

    .call-now-block .call-now-lable,
    .call-now-no {
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        justify-content: center;
        padding: 0;
    }

    .satisfaction {
        margin-bottom: 0;
    }

    .guarantee-img {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-justify-content: space-around;
        -ms-flex-pack: distribute;
        justify-content: space-around;
        -webkit-box-align: center;
        -webkit-align-items: center;
        -ms-flex-align: center;
        align-items: center;
        -webkit-flex-wrap: wrap;
        -ms-flex-wrap: wrap;
        flex-wrap: wrap;
    }

    .details-sum-list .sum-list li {
        padding: 0px 30px;
    }

    .btn.btn-chat-order:first-child {
        margin-right: 10px;
    }

    .rating-value {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        justify-content: center;
    }

    .call-now-block:before {
        position: relative;
        left: 50%;
        transform: translateX(-50%);
        top: 0px;
    }

    .btn.btn-chat-order:first-child {
        margin-bottom: 0;
    }

    .order-box .security-head:after {
        width: 328px;
    }

    .clear-top {
        margin-top: 50px;
    }
}

/*991px End*/

@media (max-width: 767px) {
    .details-block {
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
    }

    .order-detals-summery .col-sm-12 {
        width: 100%;
    }

    .details-sum-list .sum-list span,
    .details-sum-list .sum-list label {
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        justify-content: center;
        padding: 0 15px;
    }

    .c-details-block:after {
        content: none;
    }

    .our-details {
        padding-left: 0;
    }

    .order-form-inner .form-group #email-error {
        bottom: -10px;
        left: 14px;
    }
}

/*767px End*/

@media (max-width: 550px) {
    .satisfaction {
        margin-bottom: 15px;
    }

    .rating-bg:before {
        left: -8px;
        width: 250px;
    }

    .btn.btn-chat-order:first-child {
        margin-right: 0px;
    }

    .star-icon {
        margin: -2px;
    }

    .terms-block .red,
    .terms-block .radio label {
        font-size: 14px;
    }

    .invoice-page .thankYou-box p {
        text-align: center !important;
        line-height: 20px !important;
    }

    .thankYou-box .thankyou-head {
        font-size: 39px;
    }

    .thankYou-box .thankyou-head span {
        font-size: 20px;
        margin-top: 3px;
    }

    .order-box .btn.btn-chat-order,
    .order-box .btn.btn-right {
        margin-bottom: 10px;
    }

    .order-form-inner {
        padding: 24px 15px 40px;
    }

    .ord-bg-gray .btn-block {
        margin-top: 20px;
        padding: 0px 15px;
    }

    .verified-block b {
        display: inline-block;
        margin-top: 5px;
    }

    iframe#ifrm1 {
        width: 100%;
        border: none;
        padding: 5px;
        border: 1px solid #edcedc;
    }
}

/*550px End*/

@media (max-width: 330px) {

    .rating-value,
    .rating-value .lbl {
        display: block;
        text-align: center;
    }

    .star-icon {
        margin: -3px;
    }
}

/* 330px */
</style>

<div class="inner-page order-now">
    <div class="orderNowPage">

        <div class="page-content">

            <div class="order-form-block">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="order-head my-5">
                                <h2 class="heading-tile text-center">Get your paper done by an expert in your field!</h2>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div id="getData">
                                <div class="formcal">
                                    <form id="OrderForm">
                                        <?php include './includes/order/load_central.php';?>

                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <span id="before-order">
                                <?php include './includes/order/order-summary.php';?>

                            </span>
                            <span id="after-order" class="d-none">
                                 <?php include './includes/order/invoice-summary.php';?>
                            </span>
                        </div>
                    </div>
                </div>
                <style>
                .spinner-loader-wrap {
                    background: rgba(0, 0, 0, .9);
                    position: fixed;
                    top: 0;
                    bottom: 0;
                    left: 0;
                    right: 0;
                    z-index: 999999;
                    display: none;
                }

                .spinner-loader-wrap .spinner-loader {
                    display: block;
                    position: absolute;
                    top: 50%;
                    left: 50%;
                    margin-top: -5px;
                    margin-left: -20px;
                    font-size: 20px;
                    color: #fff
                }

                .spinner-loader img {
                    display: block;
                    text-align: center;
                    margin: 5px auto
                }
                </style>
                <div class="spinner-loader-wrap">
                    <div class="spinner-loader">
                        <img src="<?php echo $base_url ?>assets/images/spinner.gif" alt="-"
                            data-pagespeed-url-hash="3774495592"
                            onload="pagespeed.CriticalImages.checkImageForCriticality(this);" />
                        Processing...
                    </div>
                </div>
                <button type="button" class="btn btn-primary displayNoneClass hide ShowCaptchaError" data-toggle="modal"
                    data-target=".CaptchaError">Large modal</button>
                <div class="modal fade CaptchaError" tabindex="-1" role="dialog">
                    <div class="modal-dialog modal-sm">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                        aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title">Error!</h4>
                            </div>
                            <div class="modal-body">
                                <p>Please enter correct captcha code.</p>
                            </div>
                        </div>
                        <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                </div>
                <!-- /.modal -->

            </div>

        </div>
        <!-- inner-page -->

    </div>
</div>

<!-- Footer -->
<?php include './includes/footer.php';?>

<link rel="stylesheet" href="./assets/js/intlTelInput.js">
<link rel="stylesheet" href="./assets/js/jquery.uploadifive.min.js">
<link rel="stylesheet" href="./assets/js/order.js">

<!-- End Footer -->

<script type="text/javascript">
var getpricebox = $('#order-box').offset().top;
$('#order-box').wrap("<div class='calc-wrap'></div>");
var getWidth = $('.calc-wrap').innerWidth();
var getHeight = $('.calc-wrap').innerHeight('100%');
$('#order-box').css('width', getWidth)
$('#order-box').css('height', getHeight)
$(window).scroll(function() {
    if (screen.width > 991) {
        var scrollTop = $(this).scrollTop();
        var FooterHeight = $('#footer').outerHeight();
        var FooterPositionTop = $('#footer').offset().top - FooterHeight;
        if (scrollTop >= getpricebox) {
            if (scrollTop >= FooterPositionTop) {
                $('#order-box').addClass('normal-price');
            } else {
                $('#order-box').removeClass('normal-price');
            }
            $('#order-box').addClass('fixed');
        } else {
            $('#order-box').removeClass('fixed');
        }
    }
});
</script>


<?php if ($_SERVER["REQUEST_METHOD"] == "POST"): ?>
<script>
setTimeout(() => {
    var paper_type = <?= json_encode(GetIsset('paper_type')) ?>;
    var element = document.getElementById('paper_type');
    element.value = paper_type;
    $(".ptsumry").text(element.value);
    $(".ptsumry").parents('.SumData').fadeIn();


    var content = $('input[name="paper_standard"]:checked').siblings('.rad-text').html();
    $(".pssumry").text(content);
    $(".pssumry").parents('.SumData').fadeIn();

    var content = $('input[name="deadline-order"]:checked').siblings('.rad-text').html();
    $(".deadlinessumry").text(content);
    $(".deadlinessumry").parents('.SumData').fadeIn();

    var content = $('input[name="ref_style"]:checked').siblings('label').html();
    $(".refsumry").text(content);
    $(".refsumry").parents('.SumData').fadeIn();

    $("#no_words").change()
}, 500);
</script>
<?php endif?>