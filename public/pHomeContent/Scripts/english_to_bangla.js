var finalEnlishToBanglaNumber={'0':'০','1':'১','2':'২','3':'৩','4':'৪','5':'৫','6':'৬','7':'৭','8':'৮','9':'৯'};
 
String.prototype.getDigitBanglaFromEnglish = function() {
    var retStr = this;
    for (var x in finalEnlishToBanglaNumber) {
         retStr = retStr.replace(new RegExp(x, 'g'), finalEnlishToBanglaNumber[x]);
    }
    return retStr;
};
 
var english_number="123456";
 
var bangla_converted_number=english_number.getDigitBanglaFromEnglish();
 
//outputs : ১২৩৪৫৬
 
//console.log(bangla_converted_number); //or alert(bangla_converted_number);
