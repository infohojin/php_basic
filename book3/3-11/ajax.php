<html>
<head>
    <script>
    function ajax(str) {
        if (str.length == 0) { 
            document.getElementById("txtHint").innerHTML = "";
            return;
        } else {
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("txtHint").innerHTML = this.responseText;
                }
            };
            xmlhttp.open("GET", "ajax_email.php?q=" + str, true);
            xmlhttp.send();
        }
    }
    </script>
</head>

<body>

    <p><b>아래 이메일 주소를 입력해 주세요:</b></p>
    <form> 
        email: <input type="text" onkeyup="ajax(this.value)">
    </form>
    <p>확인: <span id="txtHint"></span></p>
</body>
</html>
