//if one radio button is clicked, different fieldset shows up according to clicked radio button
//Step 0: set first radio to selected=true; & same fieldset to display: block; Everything else should be display: none;
//Step 1: onClick (which will exist on radio buttons) return which value was clicked
//Step 2: returned value will tell script which fieldset should be set to display: block;
//Step 3: set all others to display: none;


//1:Compliment
//2:Event
//3:Complaint
//4:Suggestion
function reasonSwitch(reason){
            var first = document.getElementById('firstFS');
            var second = document.getElementById('secondFS');
            var third = document.getElementById('thirdFS');
            var fourth = document.getElementById('fourthFS');
    
            if(reason==1) { //Compliment
                first.style.display = "block";
                second.style.display = "none";
                third.style.display = "none";
                fourth.style.display = "none";
            }
            else if(reason==2) { //Event
                first.style.display = "none";
                second.style.display = "block";
                third.style.display = "none";
                fourth.style.display = "none";
            }   
            else if(reason==3) { //Complaint
                first.style.display = "none";
                second.style.display = "none";
                third.style.display = "block";
                fourth.style.display = "none";
            }
            else if(reason==4) { //Suggestion
                first.style.display = "none";
                second.style.display = "none";
                third.style.display = "none";
                fourth.style.display = "block";
            }
        }