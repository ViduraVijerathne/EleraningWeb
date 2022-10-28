function Navigate_User_signin(){
    window.location = "pages/user/signin.php"

}

function Navigate_User_signup(){
    window.location = "pages/user/signup.php"
}

function ajax_POST(form,url){

    const  request = new XMLHttpRequest();

    request.open('POST',url,true)

  
    
    request.send(form);

    return request
}




function signup(){
    const form = new FormData();

    
    const inputID = ['uname','fname','lname','schoolName','wNumber','tNumber','email1','email2','address','password1','password2','gender','grade','province','Destrict'];

    
    for (x = 0 ; x < inputID.length ; x++){
        var y =  document.getElementById(inputID[x]).value;
        form.append(inputID[x],y);
    }

    const request  = ajax_POST(form,'../../processes/signUpProcess.php')

    request.onreadystatechange = function(){
        if (request.readyState == 4){
            var response = request.responseText;
            var intResponse = parseInt(response)
            if ( intResponse > 500 && intResponse < 600 ){
                document.getElementById(inputID[0]).classList.add('border-danger')

                if (intResponse == 501){
                    alert("username is not set");
                }else if (intResponse == 502){
                    alert("username is too short")
                }else if (intResponse == 503){
                    alert("username is too long")
                }

            }else if ( intResponse > 600 && intResponse < 700 ){
                document.getElementById(inputID[1]).classList.add('border-danger')

                if (intResponse == 601){
                    alert("First name is not set");
                }else if (intResponse == 602){
                    alert("First name is too short")
                }else if (intResponse == 603){
                    alert("First name is too long")
                }

            }else if ( intResponse > 700 && intResponse < 800 ){
                document.getElementById(inputID[2]).classList.add('border-danger')

                if (intResponse == 701){
                    alert("Last name is not set");
                }else if (intResponse == 702){
                    alert("Last name is too short")
                }else if (intResponse == 703){
                    alert("Last name is too long")
                }

            }else if ( intResponse > 800 && intResponse < 900 ){
                document.getElementById(inputID[3]).classList.add('border-danger')

                if (intResponse == 801){
                    alert("School name is not set");
                }else if (intResponse == 802){
                    alert("School name is too short")
                }else if (intResponse == 803){
                    alert("School name is too long")
                }

            }else if ( intResponse > 900 && intResponse < 1000 ){
                document.getElementById(inputID[4]).classList.add('border-danger')

                if (intResponse == 901){
                    alert("Whatsapp Number is not set");
                }else if (intResponse == 902){
                    alert("Whatsapp Number must  have 10 numbers")
                }else if (intResponse == 903){
                    alert("invalid Whatsapp Number ")
                }

            }else if ( intResponse > 1000 && intResponse < 1100 ){
                document.getElementById(inputID[5]).classList.add('border-danger')

                if (intResponse == 1001){
                    alert("Telegram Number is not set");
                }else if (intResponse == 1002){
                    alert("Telegram Number must  have 10 numbers")
                }else if (intResponse == 1003){
                    alert("invalid Telegram Number ")
                }

            }else if ( intResponse > 1100 && intResponse < 1200 ){
                document.getElementById(inputID[6]).classList.add('border-danger')

                if (intResponse == 1101){
                    alert("email is not set");
                }else if (intResponse == 1102){
                    alert("Email too Long")
                }else if (intResponse == 1103){
                    alert("Invalid Email ")
                }else if (intResponse == 1104){
                    document.getElementById(inputID[7]).classList.add('border-danger')
                    alert("Email and Retype Email Must To Be Same!");
                }

            }else if ( intResponse > 1200 && intResponse < 1300 ){
                document.getElementById(inputID[8]).classList.add('border-danger')

                if (intResponse == 1201){
                    alert("Address is not set");
                }

            }else if ( intResponse > 1300 && intResponse < 1400 ){
                document.getElementById(inputID[9]).classList.add('border-danger')

                if (intResponse == 1301){
                    alert("Password is not set");
                }else if (intResponse == 1302){
                    alert("Password too Long")
                }else if (intResponse == 1303){
                    document.getElementById(inputID[10]).classList.add('border-danger')
                    alert("Password and Retype Password Must To Be Same!");
                }

            }else if ( intResponse > 1400 && intResponse < 1500 ){
                document.getElementById(inputID[11]).classList.add('border-danger')

                if (intResponse == 1401){
                    alert("gender is not set");
                }else if (intResponse == 1402){
                    alert("please select gender")
                }else if (intResponse == 1403){
                    
                    alert("Opps! somthing went wrong! please refresh page ERROR:1403");
                }

            }else if ( intResponse > 1500 && intResponse < 1600 ){
                document.getElementById(inputID[12]).classList.add('border-danger')

                if (intResponse == 1501){
                    alert("grade is not set");
                }else if (intResponse == 1502){
                    alert("please select grade")
                }else if (intResponse == 1503){
                    
                    alert("Opps! somthing went wrong! please refresh page ERROR:1503");
                }

            }else if ( intResponse > 1600 && intResponse < 1700 ){
                document.getElementById(inputID[13]).classList.add('border-danger')

                if (intResponse == 1601){
                    alert("Province is not set");
                }else if (intResponse == 1602){
                    alert("Province select grade")
                }else if (intResponse == 1603){
                    
                    alert("Opps! somthing went wrong! please refresh page ERROR:1603");
                }

            }else if ( intResponse > 1700 && intResponse < 1800 ){
                document.getElementById(inputID[14]).classList.add('border-danger')

                if (intResponse == 1701){
                    alert("destric is not set");
                }else if (intResponse == 1702){
                    alert("destric select grade")
                }else if (intResponse == 1703){
                    
                    alert("Opps! somthing went wrong! please refresh page ERROR:1703");
                }

            }
            else {
                alert(response)
            }
        }
    }
    




}

function signin(){
    const email = document.getElementById('email2').value;
    const password = document.getElementById('password2').value;
    const rememberMe = document.getElementById('rememberMe').checked;

    const form = new FormData();
    form.append("email",email);
    form.append("password",password);
    form.append("rememberMe",rememberMe);

    const request = ajax_POST(form,'../../processes/signInProcess.php');

    request.onreadystatechange = function(){
        if(request.readyState == 4){
            var response = request.responseText;
            var intResponse = parseInt(response)
            
            if (response == "1802"){
                
                window.location.href = "../user/home.php";
            }else{
                const msg = "invalid User Name Or Password :ERRO_ "+response;
                alert(msg);
            }
        }
    }



}

