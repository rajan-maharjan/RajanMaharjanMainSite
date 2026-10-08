      <div class="contact">
        <div class="section-title">
          <h2 class="bx bxs-calendar"><a href="<?php echo BLOG_DATE_CONVERTOR_LINK?>" title="Go to Date Convertor Blog" target="_blank">
		  Change your date from <strong>Nepali</strong> to <strong>English</strong> and <strong>vice-versa</strong>
		  </a>
		  </h2>         
        </div>		
		<label>
        	<input type="radio" name="convertchoose" value="e2n" checked="checked" />
			<span style="font-weight:bold;">Convert to Nepali</span> 
		</label>  
		<label>
			<input type="radio" name="convertchoose" value="n2e"/>
			<span style="font-weight:bold;">Convert to English</span>
		</label>     
  		<form method="post" class="php-email-form" name="date-conversion" id="date-conversion">
            <div class="row">
                <div class="col-md-2 form-group">
					<input type="text" name="ndate" id="ndate" placeholder="Enter Date (DD)" maxlength="2" data-rule="maxlen:2" class="form-control" data-msg="Please enter at least 2 chars" tabindex="1" value="<?php echo date("d")?>" />
                </div>
                <div class="col-md-2 form-group">                   
					<select name="nmonth" id="nmonth" class="form-control" tabindex="2" style="display:none;">
					<?php foreach($nepaliMonths as $monthNumber=>$singleMonthName){?>
					<option value="<?php echo $monthNumber?>"><?php echo $singleMonthName?></option>
					<?php } ?>
					</select>					
                    <select name="emonth" id="emonth" class="form-control" tabindex="2">
					<?php foreach($englisthMonth as $monthNumber=>$singleMonthName){
						$selected = "";
						if($monthNumber==date("m"))
							$selected='selected="selected"';
						?>
                    <option value="<?php echo $monthNumber?>" <?php echo $selected?>><?php echo $singleMonthName?></option>
                    <?php } ?>
					</select>
                </div>
                <div class="col-md-2 form-group">
                    <input type="text" name="nyear" id="nyear" placeholder="Enter Year (YYYY)" maxlength="4" data-rule="maxlen:4" value="<?php echo date('Y')?>"  data-msg="Year should be of 4 numbers" class="form-control" tabindex="3" />
				</div>
				<div class="col-md-4 field">
                    <button type="submit" name="btnDateConversion" id="btnDateConversion">Convert Date</button>
                </div>
				<div class="col-md-8 form-group">
					<div class="loading">Loading...</div>
					<div class="error-message"></div>
					<div class="sent-message"><?php 
					$returnArray=$objectNepaliCal->eng_to_nep(date("Y"),date("m"),date("d"));		
					$year = str_replace($replaceForCalendarNep, $replaceByCalendarNep, $returnArray['year']);
					$date = str_replace($replaceForCalendarNep, $replaceByCalendarNep, $returnArray['date']);echo ($date." ".$returnArray['nmonth'].", ".$year." (".$returnArray['day'].")"); ?></div>
              	</div>
            </div>
        </form>
		
        <div class="row">
          <div class="col-lg-12 col-md-12 icon-box" data-aos="fade-up">
            <h4 class="title"><a href="">DOCUMENTATION for API</a></h4>
            <p>You can also get the converted date to your website just with the help of API</p> 
			<ol>
			<li>API to get TODAY's NEPALI Date (output:  <span id="nepali-date"><strong>वि.सं २०७४ श्रावन ८, आइतबार</strong></span>)
				<ul>
					<li>http://rajanmaharjan.com.np/getdate/</li>
					<li>http://rajanmaharjan.com.np/getdate/get-json.php?dateType=np</li>
				</ul>
			</li>
			<li>API to get TODAY's English Date (output: <strong>23 July 2017, Sunday</strong>)
				<ul>
					<li>http://rajanmaharjan.com.np/getdate/get-json.php?dateType=en</li>
				</ul>
			</li>
			<li>API to get TODAY's NEPALI day or year or month or date (To display date as per your customization)
				<ul>
					<li>http://rajanmaharjan.com.np/getdate/get-json.php?dateType=np&amp;dformat=day (output: <span id="nepali-date2">आइतबार</span>)</li>
					<li>http://rajanmaharjan.com.np/getdate/get-json.php?dateType=np&amp;dformat=yyyy (output: <span id="nepali-date3">२०७४</span>)</li>
					<li>http://rajanmaharjan.com.np/getdate/get-json.php?dateType=np&amp;dformat=mon (output: <span id="nepali-date4">श्रावन</span>)</li>
					<li>http://rajanmaharjan.com.np/getdate/get-json.php?dateType=np&amp;dformat=dd (outout: <span id="nepali-date5">८</span>)</li>
				</ul>
			</li>
			<li>API to get TODAY's ENGLISH day or year or month or date (To display date as per your customization)
				<ul>
					<li>http://rajanmaharjan.com.np/getdate/get-json.php?dateType=en&amp;dformat=day (output:Sunday)</li>
					<li>http://rajanmaharjan.com.np/getdate/get-json.php?dateType=en&amp;dformat=yyyy (output: 2017)</li>
					<li>http://rajanmaharjan.com.np/getdate/get-json.php?dateType=en&amp;dformat=mon (output: Jul)</li>
					<li>http://rajanmaharjan.com.np/getdate/get-json.php?dateType=en&amp;dformat=dd (outout:23)</li>
				</ul>
			</li>
			<li>API to convert nepali to english date
				<ul>
					<li>http://rajanmaharjan.com.np/getdate/get-json.php?dateType=e2n&amp;date=22-07-2017</li>
				</ul>
			</li>
			<li>API to convert english to nepali date
				<ul>
				<li>http://rajanmaharjan.com.np/getdate/get-json.php?dateType=e2n&amp;date=22-07-2017</li>
				</ul>
			</li>
			</ol>
          </div>
          <div class="col-lg-12 col-md-12 icon-box" data-aos="fade-up" data-aos-delay="100">
            
            <h4 class="title"><a href="">Allowed Values:</a></h4>
            <ol>
			<li>dateType  
				<ul>
					<li>np - to get nepali dates</li>
					<li>en - to get english date</li>
					<li>e2n - to convert from english to nepali</li>
					<li>n2e - to convert from nepali to english</li>
				</ul>
			</li>
			<li>dformat  
			<ul>
				<li>yyyy - year in 4 character</li>
				<li>mon - month in 3 character for english (e.g: JAN, FEB, MAR, DEC etc) For Nepali full month is displayed</li>
				<li>dd - date in 2 character</li>
				<li>day - day (Snday to Saturday)</li>
				<li>adbs - A.D or B.S</li>
			</ul></li>
			<li>date 
				<ul>
				<li>should be in format of dd-mm-yyyy</li>
				<li>e.g: 02-07-2015 (english)</li>
				<li>e.g: 31-05-2074 (nepali)</li>
				</ul>
			</li>
			</ol>
          </div>  
        </div>
		<div><a href="<?php echo BLOG_DATE_CONVERTOR_LINK?>" title="Go to Date Convertor Blog" target="_blank">
		  For more details please visit my blog
		  </a></div>
      </div>