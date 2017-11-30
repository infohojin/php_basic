<html>
<head>
    <!-- JQuery CDN -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    
    <script>
        $(document).ready(function(){
            $("#email").keydown( function(){
                // AJAX 호출 
                $.ajax({
                    url:'ajax_post.php',
                    type:'post',
                    data:$('form').serialize(),
                    success:function(data){
                        $('#txtHint').html(data);
                    }
                }); 
            });

        }); 

    </script>
</head>

<body>
    <p><b>아래 이메일 주소를 입력해 주세요:</b></p>
    <form name='login' method='post' enctype='multipart/form-data'> 
        email: <input type="text" name="email" id="email">
    </form>
    <p>확인: <span id="txtHint"></span></p>
</body>
</html>
