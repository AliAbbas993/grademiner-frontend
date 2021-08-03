<?php
$us_sites = ['www.bestpaperonline.com', 'www.us.britishdissertationshelp.co.uk', 'www.paperthor.com', 'www.papermaticonline.com', 'www.britishdissertationediting.co.uk'];
$au_sites = ['www.essaykangaroo.com'];
$date = new DateTime("now", new DateTimeZone('Europe/London'));
$now = $date->format('Y-m-d H:i:s');
if (in_array($_SERVER['HTTP_HOST'], $us_sites)) {
    $date = new \DateTime($now);
    $date->setTimezone(new \DateTimeZone('US/Eastern'));
    $today_date = $date->format('m/d/Y');
} else {
    $today_date = date("m/d/Y");
}
function GetIsset($key)
{
    return (isset($_SESSION[$key]) ? $_SESSION[$key] : (isset($_POST[$key]) ? $_POST[$key] : ''));
}
?>
<div class="row">
    <div class="col-sm-12">
        <div id="order-form" class="order-form-inner form-border">
            <div class="inner-order-head mb-30">
                <div class="inner-head-text InnerPageheadingBlue">
                    ORDER DETAILS
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="form-group">
                        <label for="paper_type" class="control-label">Type of paper<span class="asterisk-icon"> *
                            </span></label>
                        <select class="form-control paper_type" name="paper_type" id="paper_type"
                            data-parsley-group="block0" required="" tabindex="1">
                            <option value="" selected hidden>Paper Select</option>
                            <option value="Essay">Essay</option>
                            <option value="Coursework">Coursework</option>
                            <option value="Assignment">Assignment</option>
                            <option value="Dissertation">Dissertation</option>
                            <option value="Thesis">Thesis</option>
                            <option value="Research Proposal">Research Proposal</option>
                            <option value="Literature Review">Literature Review</option>
                            <option value="Case Study">Case Study</option>
                            <option value="Report">Report</option>
                            <option value="Editing and Proofreading">Editing and Proofreading</option>
                            <option value="PowerPoint Slides">PowerPoint Slides</option>
                            <option value="Creative Writing">Creative Writing</option>
                            <option value="Copy Writing Service">Copy Writing Service</option>
                            <option value="Personal Statements">Personal Statements</option>
                            <option value="Capstone Project">Capstone Project</option>
                            <option value="Research Papers">Research Papers</option>
                            <option value="Book Reviews">Book Reviews</option>
                            <option value="Movie Reviews">Movie Reviews</option>
                            <option value="Article Reviews">Article Reviews</option>
                            <option value="Lab Reports">Lab Reports</option>
                            <option value="Admission Essay">Admission Essay</option>
                            <option value="Reflection Report">Reflection Report</option>
                            <option value="Summary Writings">Summary Writings</option>
                            <option value="Others">Others</option>
                        </select>
                    </div>
                </div>
                <!-- #Achademic level -->
                <div class="col-12">
                    <div class="form-group-1">
                        <label for="paper_standard" class="educontrol-label">
                            Academic level
                            <span class="asterisk-icon"> * </span>
                        </label>
                        <div class="edulevel-row row">
                            <div class="edulevel col-xs-6 col-sm-6 col-md-3">
                                <label class="rad-label paper_standard-label" for="hschool">
                                    <input type="radio" class="paper_standard" id="hschool" onclick="change_price()" name="paper_standard" value="1" <?= ($_SERVER['REQUEST_METHOD'] == 'POST' && $_POST['paper_standard']=='1')?'checked':'' ?>>
                                    <label class="rad-text" for="hschool">High School</label>
                                </label>
                            </div>
                            <div class="edulevel col-xs-6 col-sm-6 col-md-3">
                                <label class="rad-label paper_standard-label" for="ugrad">
                                    <input type="radio" class="paper_standard" id="ugrad" onclick="change_price()" name="paper_standard" value="2" <?= ($_SERVER['REQUEST_METHOD'] == 'POST' && $_POST['paper_standard']=='2')?'checked':'' ?>>
                                    <label class="rad-text" for="ugrad">Undergraduate</label>
                                </label>
                            </div>
                            <div class="edulevel col-xs-6 col-sm-6 col-md-3">
                                <label class="rad-label paper_standard-label" for="master">
                                    <input type="radio" class="paper_standard" id="master" onclick="change_price()" name="paper_standard" value="3" <?= ($_SERVER['REQUEST_METHOD'] == 'POST' && $_POST['paper_standard']=='3')?'checked':'' ?>>
                                    <label class="rad-text" for="master">Masters</label>
                                </label>
                            </div>
                            <div class="edulevel col-xs-6 col-sm-6 col-md-3">
                                <label class="rad-label paper_standard-label" for="phd">
                                    <input type="radio" class="paper_standard" id="phd" onclick="change_price()" name="paper_standard" value="4" <?= ($_SERVER['REQUEST_METHOD'] == 'POST' && $_POST['paper_standard']=='4')?'checked':'' ?>>
                                    <label class="rad-text" for="phd">PhD</label>
                                </label>
                            </div>
                        </div>
                        <label for="paper_standard" class="error"></label>
                    </div>
                </div>
                <div class="col-md-12 col-sm-6">
                    <div class="form-group">
                        <label for="subject" class="control-label">Subject </label>
                        <input type="text" class="form-control" name="subject" id="subject" placeholder="Your Subject"
                            data-parsley-group="block0" tabindex="5">
                    </div>
                </div>
                <div class="col-md-12 col-sm-6">
                    <div class="form-group">
                        <label for="topic" class="control-label">Topic <span class="asterisk-icon"> * </span></label>
                        <input type="text" class="form-control" name="topic" id="topic" placeholder="Your Topic"
                            data-parsley-group="block0" required="" tabindex="5">
                    </div>
                </div>
                <div class="col-md-12 col-sm-6">
                    <div class="form-group">
                        <label for="instructions" class="control-label">Paper Instructions</label>
                        <textarea class="form-control textarea" name="instructions" id="instructions" cols="3" rows="3"
                            tabindex="6" placeholder="Your Topic"></textarea>
                    </div>
                </div>
                <!-- <div class="col-md-12 col-sm-12">
                        <div class="form-group">
                            <label for="instructions" class="control-label">Add files</label>
                            <div class="add-files-outer">
                                <div class="responsive-table d-inline">
                                    <div id="uploadifive-file_upload" class="uploadifive-button d-inline" style="height: 30px; line-height: 30px; overflow: hidden; position: relative; text-align: center; width: 100px;">Browse
                                        <input id="file_upload" type="file" name="file_upload" tabindex="10" style="display: none;"/>
                                        <input type="file" style="font-size: 30px; opacity: 0; position: absolute; right: -3px; top: -3px; z-index: 999;" multiple="multiple">
                                    </div>
                                </div>
                                <span> or drop files here</span>
                            </div>
                        </div>
                    </div> -->


                <div class="col-md-12 form-group paper-file">
                    <label for="file_upload">Add Files </label>
                    <div class="col-md-12 p-0">
                        <div class="file-field">
                            <div class="file-upload">
                                 <!-- <label for="file_upload">Attach file</label> -->
                                <input name="action" class="file-upload-btn" type="hidden" id="action" value="insert" />
                                <input type="hidden" name="hidden_files" id="hidden_files" value="" />
                                <br>
                                <input id="file_upload" type="file" name="file_upload" />
                                <div id="queue"></div>

                               <!--  <button class="file-upload-btn" type="button"
                                    onclick="$('.file-upload-input').trigger( 'click' )">Browse</button> -->
                                <div class="file-upload-content">
                                    <ul class="list-unstyled m-0 flex-wrap justify-content-start">
                                        <li>
                                           <!--  <span class="file-name">file name</span>
                                            <button type="button" onclick="removeUpload()" class="remove-image">
                                                <img src="" alt="cancel">
                                            </button> -->
                                        </li>
                                    </ul>
                                </div>
                                <!-- <div class="image-upload-wrap"> -->
                                    <!-- <input class="file-upload-input" multiple="" required="required" name="editing_files[]" type='file' onchange="readURL(this);" accept="image/*" /> -->
                                   <!--  <div class="drag-text">
                                        <h3>Drag & drop Files</h3>
                                    </div> -->
                                <!-- </div> -->
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-12">
                    <div class="form-group-1">
                        <label for="ref_style" class="educontrol-label">Paper Format <span class="asterisk-icon"> * </span></label>
                        <div class="edulevel-row row">
                            <div class="edulevel col-xs-12 col-sm-6 col-md" id="first">
                                <label for="mla" class="ref_style-label">
                                    <input type="radio" class="ref_style" id="mla" onclick="change_price()" name="ref_style" value="MLA" <?= ($_SERVER['REQUEST_METHOD'] == 'POST' && $_POST['ref_style']=='MLA')?'checked':'' ?>>
                                    <label for="mla">MLA</label>
                                </label>
                            </div>
                            <div class="edulevel col-xs-12 col-sm-6 col-md" id="second">
                                <label for="apa6" class="ref_style-label">
                                    <input type="radio" class="ref_style" id="apa6" onclick="change_price()" name="ref_style" value="APA 6" <?= ($_SERVER['REQUEST_METHOD'] == 'POST' && $_POST['ref_style']=='APA 6')?'checked':'' ?>> 
                                    <label for="apa6">APA 6</label>
                                </label>
                            </div>
                            <div class="edulevel col-xs-12 col-sm-6 col-md" id="third">
                                <label for="apa7" class="ref_style-label">
                                    <input type="radio" class="ref_style" id="apa7" onclick="change_price()" name="ref_style" value="APA 7" <?= ($_SERVER['REQUEST_METHOD'] == 'POST' && $_POST['ref_style']=='APA 7')?'checked':'' ?>>
                                    <label for="apa7">APA 7</label>
                                </label>
                            </div>
                            <div class="edulevel col-xs-12 col-sm-6 col-md">
                                <label for="ct" class="ref_style-label">
                                    <input type="radio" class="ref_style" id="ct" onclick="change_price()" name="ref_style" value="Chicago/Turabian" <?= ($_SERVER['REQUEST_METHOD'] == 'POST' && $_POST['ref_style']=='Chicago/Turabian')?'checked':'' ?>>
                                    <label for="ct">Chicago / Turabian</label>
                                </label>
                            </div>
                            <div class="edulevel col-xs-12 col-sm-6 col-md">
                                <label for="nta" class="ref_style-label">
                                    <input type="radio" class="ref_style" id="nta" onclick="change_price()" name="ref_style" value="Not Applicable" <?= ($_SERVER['REQUEST_METHOD'] == 'POST' && $_POST['ref_style']=='Not Applicable')?'checked':'' ?>>
                                    <label for="nta">Not Applicable</label>
                                </label>
                            </div>
                            <div class="edulevel col-xs-12 col-sm-6 col-md" id="last">
                                <label for="other" class="ref_style-label">
                                    <input type="radio" class="ref_style" id="other" onclick="change_price()" name="ref_style" value="Other" <?= ($_SERVER['REQUEST_METHOD'] == 'POST' && $_POST['ref_style']=='Other')?'checked':'' ?>>
                                    <label for="other">Other</label>
                                </label>
                            </div>
                        </div>
                        <label for="ref_style" class="error"></label>
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group-1">
                        <label for="deadline-order" class="educontrol-label">Deadline <span class="asterisk-icon"> * </span></label>
                        <div class="edulevel-row row">
                            <div class="edulevel col-xs-3 col-sm-3 col-md" id="first">
                                <label class="deadline-label" for="4h">
                                    <input type="radio" id="4h" onclick="change_price()" name="deadline-order" value="4" <?= ($_SERVER['REQUEST_METHOD'] == 'POST' && $_POST['deadline']=='4')?'checked':'' ?> required>
                                    <label for="4h" class="rad-text">4H</label>
                                </label>
                            </div>
                            <div class="edulevel col-xs-3 col-sm-3 col-md" id="second">
                                <label class="deadline-label" for="8h">
                                    <input type="radio" id="8h" onclick="change_price()" name="deadline-order" value="8" <?= ($_SERVER['REQUEST_METHOD'] == 'POST' && $_POST['deadline']=='8')?'checked':'' ?>>
                                    <label for="8h" class="rad-text">8H</label>
                                </label>
                            </div>
                            <div class="edulevel col-xs-3 col-sm-3 col-md" id="third">
                                <label class="deadline-label" for="24h">
                                    <input type="radio" id="24h" onclick="change_price()" name="deadline-order" value="24" <?= ($_SERVER['REQUEST_METHOD'] == 'POST' && $_POST['deadline']=='24')?'checked':'' ?>>
                                    <label for="24h" class="rad-text">24H</label>
                                </label>
                            </div>
                            <div class="edulevel col-xs-3 col-sm-3 col-md">
                                <label class="deadline-label" for="2d">
                                    <input type="radio" id="2d" onclick="change_price()" name="deadline-order" value="2" <?= ($_SERVER['REQUEST_METHOD'] == 'POST' && $_POST['deadline']=='2')?'checked':'' ?>>
                                    <label for="2d" class="rad-text">2D</label>
                                </label>
                            </div>
                            <div class="edulevel col-xs-3 col-sm-3 col-md">
                                <label class="deadline-label" for="3d">
                                    <input type="radio" id="3d" onclick="change_price()" name="deadline-order" value="3" <?= ($_SERVER['REQUEST_METHOD'] == 'POST' && $_POST['deadline']=='3')?'checked':'' ?>>
                                    <label for="3d" class="rad-text">3D</label>
                                </label>
                            </div>
                            <div class="edulevel col-xs-3 col-sm-3 col-md">
                                <label class="deadline-label" for="5d">
                                    <input type="radio" id="5d" onclick="change_price()" name="deadline-order" value="5" <?= ($_SERVER['REQUEST_METHOD'] == 'POST' && $_POST['deadline']=='5')?'checked':'' ?>>
                                    <label for="5d" class="rad-text">5D</label>
                                </label>
                            </div>
                            <div class="edulevel col-xs-3 col-sm-3 col-md">
                                <label class="deadline-label" for="7d">
                                    <input type="radio" id="7d" onclick="change_price()" name="deadline-order" value="7" <?= ($_SERVER['REQUEST_METHOD'] == 'POST' && $_POST['deadline']=='7')?'checked':'' ?>>
                                    <label for="7d" class="rad-text">7D</label>
                                </label>
                            </div>
                            <div class="edulevel col-xs-3 col-sm-3 col-md" id="last">
                                <label class="deadline-label" for="14d">
                                    <input type="radio" id="14d" onclick="change_price()" name="deadline-order" value="14" <?= ($_SERVER['REQUEST_METHOD'] == 'POST' && $_POST['deadline']=='14')?'checked':'' ?>>
                                    <label for="14d" class="rad-text">14D</label>
                                </label>
                            </div>
                        </div>
                        <label for="deadline-order" class="error"></label>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="form-group">
                        <label for="no_words" class="control-label">No. of Pages<span class="asterisk-icon">*</span></label>
                        <select class="form-control no_words" name="no_words" id="no_words" data-parsley-group="block0"
                            required="" tabindex="1" onchange="change_price()">
                            <option value="" selected hidden>Please Select</option>
                            <?php for ($i = 1; $i <= 500; $i++): ($i == 1 ? $page = ' page' : $page = ' pages');?>
	                            <option <?=GetIsset('no_words') == $i ? 'selected' : '';?> value="<?=$i;?>"><?=$i * 250;?>
	                                words - <?=$i . $page;?></option>
	                            <?php endfor;?>
                        </select>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="form-group-1">
                        <label for="spacing" class="educontrol-label">Spacing <span class="asterisk-icon">*</span></label>
                        <div class="edulevel-row row">
                            <div class="edulevel col" id="first">
                                <input type="radio" id="single" name="spacing" value="Single">
                                <label for="single">Single</label>
                            </div>
                            <div class="edulevel col" id="last">
                                <input type="radio" id="double" name="spacing" value="Double">
                                <label for="double">Double</label>
                            </div>
                        </div>
                        <label for="spacing" class="error"></label>
                    </div>
                </div>
              
               <div id="writer_preferences">

                <div class="col-12">
                    <div class="form-group-1">
                        <label class="educontrol-label">Writer Preferences </label>
                        <div class="edulevel-row row">
                            <div class="edulevel col" id="first">
                                <input type="radio" id="best-avail"  name="writer-pre" class="writer_preferences_val" calc="percent" value="0" data-text="Best Available" data-value="0">
                                <label for="best-avail" id="preferences">
                                    <div class="d-inline-block w-100">
                                        <div class="m-0 d-flex flex-wrap justify-content-between align-center">
                                            <span>Best Available</span></div>
                                        <hr><small>standard writer</small>
                                    </div>
                                </label>
                            </div>
                            <div class="edulevel col" id="second">
                                <input type="radio" id="advanced" name="writer-pre" class="writer_preferences_val"  calc="percent" value="15" data-text="Advanced" data-value="15">
                                <label for="advanced" id="preferences">
                                    <div class="d-inline-block w-100">
                                        <div class="m-0 d-flex flex-wrap justify-content-between align-center">
                                            <span>Advanced</span> <span>+15%</span></div>
                                        <hr><small>Expert writer in the chosen discipline</small>
                                    </div>
                                </label>
                            </div>
                            <div class="edulevel col" id="last">
                                <input type="radio" id="t10" name="writer-pre" class="writer_preferences_val" calc="percent" value="40" data-text="Top
                                                10" data-value="40" >
                                <label for="t10" id="preferences">
                                    <div class="d-inline-block w-100">
                                        <div class="m-0 d-flex flex-wrap justify-content-between align-center"><span>Top
                                                10</span> <span>+40%</span></div>
                                        <hr><small>Highest-ranked expert writer in the chosen discipline</small>
                                    </div>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group-1">
                        <div class="checkbox-main">
                            <input type="checkbox" id="native-speaker" calc="percent"  class="writer_preferences_val" name="native-speaker" value="30" data-value="30">
                            <label for="nspeaker">
                                <div class="top">Native Speaker<div class="right">+30%</div>
                                </div>
                                <div class="bottom">Writer with english as a native language</div>
                            </label><br>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group-1">
                        <label for="additional_services" class="educontrol-label">Additional Services</label>
                        <div class="checkbox-main" id="additional">
                            <input type="checkbox" id="smart-paper" name="smart-paper" class="writer_preferences_val" calc="percent" name="additional_services" data-text="" data-value="20" value="20">
                            <label for="smart-paper">
                                <div class="top">Smart Paper<div class="right">+20%</div>
                                </div>
                                <div class="bottom">Writer with English as a native language</div>
                            </label><br>
                        </div>
                        <div class="checkbox-main" id="additional">
                            <input type="checkbox" id="writer_samples" name="writer_samples" class="writer_preferences_val" calc="plus" name="additional_services"
                                data-text="" data-value="5" value="5">
                            <label for="writer_samples">
                                <div class="top">Writer Samples<div class="right">$5.00</div>
                                </div>
                                <div class="bottom">3 samples of works previously completed by your writer</div>
                            </label><br>
                        </div>
                        <div class="checkbox-main" id="additional">
                            <input type="checkbox" id="copy-of-source" class="writer_preferences_val" calc="plus" name="copy-of-source"
                                data-text="" data-value="14.95" value="14.95">
                            <label for="copy-of-source">
                                <div class="top">Copy of Sources<div class="right">$14.95</div>
                                </div>
                                <div class="bottom">Detailed comments on the key writing aspects of your paper</div>
                            </label><br>
                        </div>
                        <div class="checkbox-main" id="additional">
                            <input type="checkbox" id="progressive" class="writer_preferences_val" calc="percent" name="progressive"
                                data-text="" data-value="10" value="10">
                            <label for="progressive">
                                <div class="top">Progressive Delivery<div class="right">+10%</div>
                                </div>
                                <div class="bottom">Part-by-part Delivery of yout paper</div>
                            </label><br>
                        </div>
                    </div>
                </div>
                </div>
              <div class="col-12">
                <div class="row">
                        <div class="col-6">
                 <div class="form-group"><div class="fields-title">
                        <label for="name" class="control-label">Discount Coupon</label>            
                                                </div><input
                                            type="text" class="form-control" style=" margin: 10px 0 10px 0; "
                                            id="coupon" value="" name="coupon" placeholder=" Coupon Code" tabindex="16">
                                        <a href="javascript:;" id="coupon_btn"
                                            class="btn btn-success coupon_btn">Apply</a> <a href="javascript:;"
                                            class="btn btn-danger removeCouponCode">Remove</a>
                                    </div>

                </div>
                 <div class="col-6">
                  <div class="form-group" style="position: relative;">
                                              <div <?php echo (in_array($_SERVER['HTTP_HOST'], $us_sites) ? "style='display:none;'" : '') ?>>
                                                    <div class="fields-title">
                                              <label for="name" class="control-label">Add Plagiarism Report</label>            

                                                    </div>
                                                    <div class="form-group">
                                                        <div class="checkbox">
                                                            <label for="chkReport" class="mb-0" style="color: #212529;">
                                                                <input type="checkbox"  <?php echo (!in_array($_SERVER['HTTP_HOST'], $us_sites) ? "checked='checked'" : '') ?>  id="chkReport" name="add_report" value="add_report"  onChange="change_price();" disabled>
                                                            (<span id="CurrencyReport">&dollar;</span >8 for every 5000 words)
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>

                </div>
                </div>
              </div>

                <!-- <div class="row"> -->
                <!--<div class="col-md-6">-->
                <!--    <div class="form-group"><label for="coupon">Discount Coupon</label>-->
                <!--        <input type="text" class="form-control" style=" margin: 0px 0 10px 0; " id="coupon" value="<?= GetIsset('coupon');?>" name="coupon" placeholder=" Coupon Code">-->
                <!--        <a href="javascript:void(0)" id="coupon_btn" class="btn btn-success coupon_btn">Apply</a>-->
                <!--        <a href="javascript:void(0)" class="btn btn-danger removeCouponCode"><i class="fa fa-times-circle-o"></i> Remove</a>-->
                <!--    </div>-->
                <!--</div>-->
                    
                <!-- </div> -->
               <!--  <div class="row">
                    <div class="col-sm-12">
                        <hr class="mt-40 mb-40">
                    </div>
                </div>
                <div class="col-sm-12 inner-order-head mb-30">
                    <div class="inner-head-text InnerPageheadingBlue">
                        Account
                    </div>
                </div> -->
            </div>

            </div>
            <div class="row">
                <div class="col-md-8 col-sm-8">
                    <div class="form-group">
                        <label for="name" class="control-label">Full name<span class="asterisk-icon">
                                *</span></label>
                        <input type="text" class="form-control namefield" id="name" value="" name="name"
                            placeholder="Your Full Name" required="" data-parsley-group="block1" maxlength="23"
                            tabindex="11">
                        <ul class="parsley-errors-list" id="parsley-id-8961"></ul>
                    </div>
                </div>
                <div class="col-md-8 col-sm-8">
                    <div class="form-group">
                        <label for="email" class="control-label">Email<span class="asterisk-icon"> *</span></label>
                        <input type="email" class="form-control email" value="" id="email" name="email"
                            placeholder="someone@example.com" data-parsley-group="block1" required=""
                            data-parsley-id="3739" tabindex="12">
                        <ul class="parsley-errors-list" id="parsley-id-3739"></ul>

                    </div>
                </div>
                <div class="col-md-8 col-sm-8">
                    <div class="form-group">
                        <label for="country" class="control-label">country</label>
                        <select class="form-control country" name="country" id="country"></select>

                        <ul class="parsley-errors-list" id="parsley-id-3739"></ul>
                    </div>
                </div>
                <div class="col-md-8 col-sm-8">
                    <div class="form-group clearfix">
                        <label for="phone" class="phone-lable">Phone <span class="asterisk-icon">*</span></label>
                        <input type="tel" class="form-control phone" value="" id="phone" name="phone" placeholder=""
                            style="width:30%; float:left;" data-parsley-group="block0" readonly="">
                        <input type="tel" class="form-control phone1" value="" id="phone1" name="phone1"
                            placeholder="Phone" data-parsley-group="block1"
                            style="width:67%; float: left; margin-left: 3%;" required tabindex="14">
                    </div>
                </div>
            </div>
                  <input class="form-control " name="code" hidden type="text" id="code"  value="456456">
            
            <div class="row">
                <div class="col-md-12">
                    <div class="terms-block">
                        <!-- <p>I have read the TERMS OF SERVICES & REFUND POLICY <span class="red glyphicon glyphicon-asterisk"> </span></p> -->
                        <div class="form-group-1">
                            <div class="radio">
                                <label>
                                    <input type="checkbox" name="example1" class="radio-button coupon-label"
                                        required="">I have accepted your <a href=":;">terms & conditions</a>
                                </label>
                            </div>
                        </div>
                        <div id="iframe-container mb-10">
                            <iframe id='ifrm1' src="<?php echo $base_url ?>terms-&-conditions-iframe.php"></iframe>
                        </div>
                        <div class="testimonials-btns">
                            <!-- <a href="javascript:void(0)" class="common-btn outline-btn">Create an account & sign in -->
                                <button type="submit" class="common-btn outline-btn">Create an account & sign in <span class="icon"></span></button>
                                <!-- <span class="icon"></span></a> -->
                        </div>
                    </div>
                </div>
            </div>

                    <input type="hidden" name="invoicespacing" id="invoicespacing">
            <input type="hidden" name="invoicepreference" id="invoicepreference">
      <!--       <input type="hidden" name="invoicenative-speaker" id="invoicenative-speaker">
            <input type="hidden" name="invoicesmart-paper" id="invoicesmart-paper">
            <input type="hidden" name="invoicewriter-sample" id="invoicewriter-sample">
            <input type="hidden" name="invoicecopy-of-source" id="invoicecopy-of-source">
            <input type="hidden" name="invoiceprogressive" id="invoiceprogressive"> -->
            <input type="hidden" name="total" id="sptotal">
            <input type="hidden" name="txtTotal" id="txtTotal">
            <input type="hidden" name="txtReportCharges" id="txtReportCharges">
            <input type="hidden" name="dcamount" id="dcamount">
            <input type="hidden" name="dcpercent" id="dcpercent">
            <input type="hidden" name="discountedAmount" id="discountedAmount">
            <input type="hidden" name="coupon_code" id="coupon_code">
            <input type="hidden" name="CurrencyField" id="CurrencyField" value="USD">
        </div>
        <!-- row -->
    </div>
    <!-- order-form -->
</div>

