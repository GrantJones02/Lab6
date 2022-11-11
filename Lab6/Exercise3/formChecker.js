function validateForm() {
            let email = document.forms["myOrder"]["username"].value;
            if (!(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(email)))
            {
                alert("Enter a valid email address");
                return (false);
            } 
            let password = document.forms["myOrder"]["password"].value;
            if (password == "") {
                alert("Must provide a password");
                return false;
            }
            let televisions = document.forms["myOrder"]["televisions"].value;
            if (televisions == "" || televisions < 0) {
                alert("Must provide a number for televisions, 0 is acceptable");
                return false;
            }
            let jayhawks = document.forms["myOrder"]["jayhawks"].value;
            if (jayhawks == "" || jayhawks < 0) {
                alert("Must provide a number for jayhawks, 0 is acceptable");
                return false;
            }
            let keyboards = document.forms["myOrder"]["keyboards"].value;
            if (keyboards == "" || keyboards < 0) {
                alert("Must provide a number for keyboards, 0 is acceptable");
                return false;
            }
            let shipping = document.forms["myOrder"]["question-1-answers"].value;
            if (shipping == "") {
                alert("Must select a shipping option");
                return false;
            }
}
