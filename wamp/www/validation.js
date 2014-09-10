
if (typeof(BotDetect) == "undefined") { // start single inclusion guard

  BotDetect = function(captchaId, instanceId, inputId, autoFocusInput, autoClearInput, autoUppercaseInput, autoReloadExpiredImage, autoReloadPeriod, autoReloadTimeout, soundStartDelay) {
    this.Id = captchaId;
    this.InstanceId = instanceId;

    // Captcha image properties
    var imageId = captchaId + "_CaptchaImage";
    this.Image = document.getElementById(imageId);
    this.ImagePlaceholder = this.Image.parentNode;

    // check for Captcha Reload icon presence
    var reloadLinkId = captchaId + "_ReloadLink";
    var reloadLink = document.getElementById(reloadLinkId);
    if (reloadLink) {
      // show Captcha Reload icon
      reloadLink.style.cssText = 'display: inline-block !important';

      // init reloading elements
      this.NewImage = null;
      this.ProgressIndicator = null;
      this.ReloadTimer = null;
      this.ReloadTimerTicks = 0;

      // Captcha image auto-reloading
      this.AutoReloadPeriod = Math.max((autoReloadPeriod - 10), 10) * 1000;
      this.AutoReloadTimeout = autoReloadTimeout * 1000;
      this.AutoReloadExpiredImage = autoReloadExpiredImage;
      this.AutoReloadPeriodSum = 0;
      this.AutoReloading = false;
      if (autoReloadExpiredImage) {
        if (this.AutoReloadTimer) { clearTimeout(this.AutoReloadTimer); }
        var self = this;
        this.AutoReloadTimer = setTimeout(
          function() {
            clearTimeout(self.AutoReloadTimer);
            if (self.AutoReloadPeriodSum >= self.AutoReloadTimeout) { self.DisableReloadIcon(); return; }
            self.AutoReloading = true;
            self.ReloadImage();
            self.AutoReloading = false;
            self.AutoReloadPeriodSum += self.AutoReloadPeriod;
            self = null;
          },
          self.AutoReloadPeriod
        );
      }
    }

    // pre-load disabled reload icon
    var reloadIcon = document.getElementById(this.Id + "_ReloadIcon");
    if (reloadIcon) {
      this.ReloadIconSrc = document.getElementById(this.Id + "_ReloadIcon").src;
      this.DisabledReloadIconSrc = null;
      var preloadedReloadIcon = document.createElement('img');
      var self2 = this;
      preloadedReloadIcon.onload = function() {
        self2.DisabledReloadIconSrc = this.src;
        self2 = null;
      };
      preloadedReloadIcon.src = this.ReloadIconSrc.replace('reload_icon', 'disabled_reload_icon');
    }





    // Captcha input textbox properties
    this.ValidationUrl = this.Image.src.replace('get=image', 'get=validationResult');

    

    // Captcha code user input element registration, helpers & processing
    if (!inputId) return;
    this.InputId = inputId;
    var input = document.getElementById(inputId);
    if (!input) return;

    input.Captcha = this; // allow access to the BotDetect object via the input element
    this.ValidationResult = false; // used for Ajax validation

    // automatic input processing
    this.AutoFocusInput = autoFocusInput;
    this.AutoClearInput = autoClearInput;
    if (autoUppercaseInput) {
      input.style.textTransform = 'uppercase';
    }
  };

  BotDetect.Init = function(captchaId, instanceId, inputId, autoFocusInput, autoClearInput, autoUppercaseInput, autoReloadExpiredImage, autoReloadPeriod, autoReloadTimeout, soundStartDelay) {
    var inputIdString = null;
    if (inputId) {
      inputIdString = "'" + inputId + "'";
    }

    var actualInitialization = new Function("if (document.getElementById('" + captchaId + "_CaptchaImage')) { window['" + captchaId + "'] = new BotDetect('" + captchaId + "', '" + instanceId + "', " + inputIdString + ", " + autoFocusInput + ", " + autoClearInput + ", " + autoUppercaseInput + ", " + autoReloadExpiredImage + ", " + autoReloadPeriod + ", " + autoReloadTimeout + ", " + soundStartDelay + "); window['" + captchaId + "'].PostInit(); }");

    if (typeof(window.jQuery) != "undefined") {
      // jQuery initalization
      jQuery(actualInitialization);
    } else {
      // regular initialization
      BotDetect.RegisterHandler(window, 'domready', actualInitialization, false);
    }
  };


  // constants
  BotDetect.ReloadTimerMaxTicks = 100;
  BotDetect.ReloadTimerDelay = 250;
  BotDetect.MillisecondsInAMinute = 60000;
  BotDetect.AjaxTimeout = 10000;
  BotDetect.MinSoundCooldown = 2000;


  // CAPTCHA image reloading
  BotDetect.prototype.ReloadImage = function() {
    if (this.Image && !this.ReloadInProgress && !document.getElementById(this.Id + "_ReloadLink").disabled) {
      this.ReloadInProgress = true;
      this.DisableReloadIcon();
      this.ProgressIndicator = document.createElement('span');
      this.ProgressIndicator.className = 'LBD_ProgressIndicator';
      this.ProgressIndicator.appendChild(document.createTextNode('.'));
      this.PreReloadImage();

      var imageUrl = BotDetect.UpdateTimestamp(this.Image.src);
      this.InitNewImage(imageUrl);

      this.ImagePlaceholder.innerHTML = '';
      this.ImagePlaceholder.appendChild(this.ProgressIndicator);

      this.ShowProgress();
    }
  };

  BotDetect.prototype.InitNewImage = function(imageUrl) {
    this.NewImage = document.createElement('img');
    var self = this;
    this.NewImage.onload = function() {
      if (self.NewImage && self.ImagePlaceholder && self.ProgressIndicator) {
        self.ImagePlaceholder.innerHTML = '';
        self.ImagePlaceholder.appendChild(self.NewImage);
        self.Image = self.NewImage;
        self.ProgressIndicator = null;
        self.PostReloadImage();
        self = null;
      }
    };
    this.NewImage.id = this.Image.id;
    this.NewImage.alt = this.Image.alt;
    this.NewImage.src = imageUrl;
  };

  BotDetect.prototype.ShowProgress = function() {
    if (this.ProgressIndicator && (this.ReloadTimerTicks < BotDetect.ReloadTimerMaxTicks)) {
      this.ReloadTimerTicks = this.ReloadTimerTicks + 1;
      this.UpdateProgressIndicator();
      var self = this;
      this.ReloadTimer = setTimeout(function() { self.ShowProgress(); self = null; }, BotDetect.ReloadTimerDelay);
    } else {
      clearTimeout(this.ReloadTimer);
      this.ReloadTimerTicks = 0;
      this.ReloadInProgress = false;
      this.EnableReloadIcon();
    }
  };

  BotDetect.prototype.UpdateProgressIndicator = function() {
    if (0 == this.ProgressIndicator.childNodes.length) {
      this.ProgressIndicator.appendChild(document.createTextNode('.'));
      return;
    }
    if (0 === this.ReloadTimerTicks % 5) {
      this.ProgressIndicator.firstChild.nodeValue = '.';
    } else {
      this.ProgressIndicator.firstChild.nodeValue = this.ProgressIndicator.firstChild.nodeValue + '.';
    }
  };


  // CAPTCHA sound playing
 




  // input element access
  BotDetect.prototype.GetInputElement = function() {
    return document.getElementById(this.InputId);
  };

  // CAPTCHA Ajax validation
  BotDetect.prototype.Validate = function() {
    if(BotDetect.AjaxError) { return true; } // temporary to allow full form post
    var input = this.GetInputElement();
    if (!input || !input.value || input.value.length < 0) {
      this.AjaxValidationFailed();
      return false;
    }
    if (!this.ValidationResult) {
      this.PreAjaxValidate();
      this.StartValidation();
    }
    return this.ValidationResult;
  };

  BotDetect.prototype.StartValidation = function() {
    var input = this.GetInputElement();
    var url = this.ValidationUrl + '&i=' + input.value;
    var self = this;
    var callback = function(y) {
      clearTimeout(self.AjaxTimer);
      if (200 != y.status) { self.AjaxValidationError(); self = null; return; }
      var validationResult = false;
      var parsed = BotDetect.ParseJson(y.responseText);
      if (parsed) {
        validationResult = parsed;
      }
      self.EndValidation(validationResult);
      self = null;
    }
    this.AjaxTimer = setTimeout(self.AjaxValidationError, BotDetect.AjaxTimeout);
    BotDetect.Get(url, callback);
  };

  BotDetect.prototype.EndValidation = function(result) {
    if (result) {
      this.ValidationResult = true;
      this.AjaxValidationPassed();
    } else {
      this.AjaxValidationFailed();
    }
  };

  BotDetect.ParseJson = function(jsonString) {
    var resultObj = null;
    if ("undefined" != typeof(JSON) && "function" == typeof(JSON.parse)) {
      resultObj = JSON.parse(jsonString);
    }
    if (!resultObj) {
      resultObj = eval('(' + jsonString + ')');
    }
    return resultObj;
  };


  // custom CAPTCHA events

  BotDetect.prototype.PostInit = function() {
  };

  BotDetect.prototype.PreReloadImage = function() {
    this.ClearInput();
    this.FocusInput();
  };

  BotDetect.prototype.PostReloadImage = function() {
    this.ValidationUrl = this.Image.src.replace('get=image', 'get=validationResult');
    if (this.AutoReloadExpiredImage) {
      if (this.AutoReloadTimer) { clearTimeout(this.AutoReloadTimer); }
      var self = this;
      this.AutoReloadTimer = setTimeout(
        function() {
          clearTimeout(self.AutoReloadTimer);
          if (self.AutoReloadPeriodSum >= self.AutoReloadTimeout) { self.DisableReloadIcon(); return; }
          self.AutoReloading = true;
          self.ReloadImage();
          self.AutoReloading = false;
          self.AutoReloadPeriodSum += self.AutoReloadPeriod;
          self = null;
        },
        self.AutoReloadPeriod
      );
    }
  };



  BotDetect.prototype.OnHelpLinkClick = function() {
  };

  BotDetect.prototype.PreAjaxValidate = function() {
  };

  BotDetect.prototype.AjaxValidationFailed = function() {
    this.ReloadImage();
  };

  BotDetect.prototype.AjaxValidationPassed = function() {
  };

  BotDetect.prototype.AjaxValidationError = function() {
    BotDetect.Xhr().abort();
    BotDetect.AjaxError = true;
  };

  BotDetect.RegisterCustomHandler = function(eventName, userHandler) {
    var oldHandler = BotDetect.prototype[eventName];
    BotDetect.prototype[eventName] = function() {
      oldHandler.call(this);
      userHandler.call(this);
    }
  };

  // input processing
  BotDetect.prototype.FocusInput = function() {
    var input = this.GetInputElement();
    if (!this.AutoFocusInput || !input) return;
    if (this.AutoReloading) return;
    input.focus();
  };

  BotDetect.prototype.ClearInput = function() {
    var input = this.GetInputElement();
    if (!this.AutoClearInput || !input) return;
    input.value = '';
  };


  // helpers

  BotDetect.UpdateTimestamp = function(url) {
    var i = url.indexOf('&d=');
    if (-1 !== i) {
      url = url.substring(0, i);
    }
    return url + '&d=' + BotDetect.GetTimestamp();
  };

  BotDetect.GetTimestamp = function() {
    var d = new Date();
    var t = d.getTime() + (d.getTimezoneOffset() * BotDetect.MillisecondsInAMinute);
    return t;
  };

  BotDetect.DetectSsl = function(url) {
    var i = url.indexOf('&e=');
    if(-1 !== i) {
      var len = url.length;
      url = url.substring(0, i) + url.substring(i+4, len);
    }
    if (document.location.protocol === "https:") {
      url = url + '&e=1';
    }
    return url;
  };

  BotDetect.GetMimeType = function() {
    var mimeType = "audio/x-wav";
    return mimeType;
  };

  

  BotDetect.DetectAndroid = function() {
    var detected = false;
    if (navigator && navigator.userAgent) {
      var matches = navigator.userAgent.match(/Linux; U; Android/);
      if (matches) {
        detected = true;
      }
    }
    return detected;
  };

  BotDetect.DetectIOS = function() {
    var detected = false;
    if (navigator && navigator.userAgent) {
      var matches = navigator.userAgent.match(/like Mac OS/);
      if (matches) {
        detected = true;
      }
    }
    return detected;
  };

  BotDetect.DetectFirefox3 = function() {
    var detected = false;
    if (navigator && navigator.userAgent) {
      var matches = navigator.userAgent.match(/(Firefox)\/(3\.6\.[^;\+,\/\s]+)/);
      if (matches) {
        detected = true;
      }
    }
    return detected;
  };

  BotDetect.DetectSafariSsl = function() {
    var detected = false;
    if (navigator && navigator.userAgent) {
      var matches = navigator.userAgent.match(/Safari/);
      if (matches) {
        matches = navigator.userAgent.match(/Chrome/);
        if (!matches && document.location.protocol === "https:") {
          detected = true;
        }
      }
    }
    return detected;
  };

  BotDetect.DetectSafariMac = function() {
    var detected = false;
    if (navigator && navigator.userAgent) {
      var matches = navigator.userAgent.match(/Safari/);
      if (matches) {
        matches = navigator.userAgent.match(/Chrome/);
        if (!matches && navigator.userAgent.match(/Macintosh/)) {
          detected = true;
        }
      }
    }
    return detected;
  };

  BotDetect.prototype.DisableReloadIcon = function() {
    if (this.DisabledReloadIconSrc) {
      document.getElementById(this.Id + "_ReloadIcon").src = this.DisabledReloadIconSrc;
    }
    document.getElementById(this.Id + "_ReloadLink").disabled = true;
  };

  BotDetect.prototype.EnableReloadIcon = function() {
    if (this.DisabledReloadIconSrc) {
      document.getElementById(this.Id + "_ReloadIcon").src = this.ReloadIconSrc;
    }
    document.getElementById(this.Id + "_ReloadLink").disabled = false;
  };

  


  // standard events & handlers
  BotDetect.RegisterHandler = function(target, eventType, functionRef, capture) {
    // special case
    if (eventType == "domready") {
      BotDetect.RegisterDomReadyHandler(functionRef);
      return;
    }
    // normal event registration
    if (typeof target.addEventListener != "undefined") {
      target.addEventListener(eventType, functionRef, capture);
    } else if (typeof target.attachEvent != "undefined") {
      var functionString = eventType + functionRef;
      target["e" + functionString] = functionRef;
      target[functionString] = function(event) {
        if (typeof event == "undefined") {
          event = window.event;
        }
        target["e" + functionString](event);
      };
      target.attachEvent("on" + eventType, target[functionString]);
    } else {
      eventType = "on" + eventType;
      if (typeof target[eventType] == "function") {
        var oldListener = target[eventType];
        target[eventType] = function() {
          oldListener();
          return functionRef();
        };
      } else {
        target[eventType] = functionRef;
      }
    }
  };

  // earlier than window.load, if possible
  BotDetect.RegisterDomReadyHandler = function(functionRef) {
    if (document.addEventListener) {
      document.addEventListener("DOMContentLoaded",
        function(){
          document.removeEventListener("DOMContentLoaded", arguments.callee, false);
          functionRef();
        },
        false
      );
      return;
    }
    else if (document.attachEvent) {
      var called = false;
      document.attachEvent("onreadystatechange",
        function(){
          if (document.readyState === "complete") {
            document.detachEvent("onreadystatechange", arguments.callee);
            functionRef();
            called = true;
          }
        }
      );
      if (document.documentElement.doScroll && window == window.top) {
        (function() {
          if (called) return;
          try {
            document.documentElement.doScroll("left");
          } catch (error) {
            setTimeout(arguments.callee, 1);
            return;
          }
          functionRef();
          called = true;
        })();
      }
      return;
    } else {
      BotDetect.RegisterHandler(window, 'load', functionRef, false);
    }
  };


  // Ajax helper
  BotDetect.Xhr = function() {
    var x = null;
    try { x = new XMLHttpRequest(); return x; } catch (e) {}
    try { x = new ActiveXObject('MSXML2.XMLHTTP.5.0'); return x; } catch (e) {}
    try { x = new ActiveXObject('MSXML2.XMLHTTP.4.0'); return x; } catch (e) {}
    try { x = new ActiveXObject('MSXML2.XMLHTTP.3.0'); return x; } catch (e) {}
    try { x = new ActiveXObject('MSXML2.XMLHTTP'); return x; } catch (e) {}
    try { x = new ActiveXObject('Microsoft.XMLHTTP'); return x; } catch (e) {}
    return x;
  };

  BotDetect.Get = function(url, callback) {
    BotDetect.AjaxError = false;
    var x = BotDetect.Xhr();
    if (x && 0 == x.readyState) {
      x.onreadystatechange = function() {
        if(4 == x.readyState) {
          callback(x);
        }
      }
      x.open('GET', url, true);
      x.send();
    }
  };

} // end single inclusion guard


$(document).ready(function(){
$("#SubmitButton").click(function(e){
var firstname=document.getElementById("fst_nm");
var lastname=document.getElementById("lst_nm");
var user=document.getElementById("user");
var pass=document.getElementById("pass");
var ret_pass=document.getElementById("ret_pass");
var mobile=document.getElementById("mobile");
var capcha=document.getElementById("CaptchaCode");
var year=document.getElementById("year");
var day=document.getElementById("day");
var month=document.getElementById("month");
var male=document.getElementById("male");
var female=document.getElementById("female");
if(firstname.value=="" || lastname.value=="" || user.value=="" || pass.value=="" || ret_pass.value=="" || capcha.value=="" || year.value=="" || month.value=="" || day.value=="")
{ 
  ajaxCall(
			'cont_nereusit.php',
			'#mesaj',
			function() {}
		);
		
}
else if(male.checked==false && female.checked==false)
{
ajaxCall(
			'cont_nereusit.php',
			'#mesaj',
			function() {}
		);
}
else if(pass.value!=ret_pass.value)
{

ajaxCall(
			'parola_nereusit.php',
			'#mesaj',
			function() {}
		);
		document.getElementById("ret_pass").value="";
}
else
{
validateForm();
}
});

function validateForm() {
  
  var isCaptchaValid = validateCaptcha();
  
  return isCaptchaValid;
}



function validateCaptcha() {
  var result = false;
  
  var input = document.getElementById("CaptchaCode");
  if (input && 'text' == input.type) {
    var value = input.value.replace(/^\s+|\s+$/g,""); // trim leading and trailing whitespace
    if (value && value.length > 0 && value.length < 10) {
      result = input.Captcha.Validate(); // call the BotDetect built-in client-side validation function
      // this function must be called after the Captcha is displayed on the page, otherwise the
      // client-side object won't be initialized
    }
  }
  
  var validator = document.getElementById("CaptchaValidator");
  updateValidatorDisplay(validator, result);
  
  return result;
}


// register handlers for the four steps of the BotDetect Ajax validation workflow

BotDetect.RegisterCustomHandler('PreAjaxValidate', OnCaptchaValidate);
BotDetect.RegisterCustomHandler('AjaxValidationFailed', OnCaptchaIncorrect);
BotDetect.RegisterCustomHandler('AjaxValidationPassed', OnCaptchaCorrect);
BotDetect.RegisterCustomHandler('AjaxValidationError', OnAjaxError);

function OnCaptchaValidate() {

  // hide validator
  var captchaValidator = document.getElementById("CaptchaValidator");
  updateValidatorDisplay(captchaValidator, true);
  
  // disable multiple clicks while waiting for server response
  var submitButton = document.getElementById("SubmitButton");
  submitButton.disabled = true;
  
}

function OnCaptchaCorrect() {
  // hide validator
  
  var captchaValidator = document.getElementById("CaptchaValidator");
  updateValidatorDisplay(captchaValidator, true)
  
  // automatically proceed to server-side validation
  var submitButton = document.getElementById("SubmitButton");
  submitButton.disabled = false;
  
var firstname=document.getElementById("fst_nm");
var lastname=document.getElementById("lst_nm");
var user=document.getElementById("user");
var pass=document.getElementById("pass");

$.post("cont_reusit_php.php",{user:user.value,pass:pass.value}).done(function(data){
$.post("cont_detail_php.php",{user:user.value,first:firstname.value,last:lastname.value}).done(function(data){
});
});

  ajaxCall(
			'cont_reusit.php',
			'body',
			function() {}
		);
  
}

function OnCaptchaIncorrect() {
  // show validator
  alert("Invalid code.Please retype the code again");
  var captchaValidator = document.getElementById("CaptchaValidator");
  updateValidatorDisplay(captchaValidator, false);
  
  // allow the users to re-try the new Captcha 
  var submitButton = document.getElementById("SubmitButton");
  submitButton.disabled = false;
  

  ajaxCall(
			'cont_nereusit.php',
			'#mesaj',
			function() {}
		);
  


}
      
function OnAjaxError() {
  // fall back to server-side validation
  var submitButton = document.getElementById("SubmitButton");
  submitButton.disabled = false;
  submitButton.focus();
  submitButton.click();
}

function updateValidatorDisplay(validator, result) {
  if (validator) {
    if (result) { 
      validator.style.display = 'none'; 
    } else {
      validator.style.display = 'inline'; 
    }
  }
}
});