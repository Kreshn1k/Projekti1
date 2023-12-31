<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accessories Store</title>
    <style>
        body{
            background-color: lightgray;
        }
        #main{
            margin-top: 200px;
            text-align: center;
            border: 2px solid black;
            margin-left: 500px;
            margin-right: 500px;
            padding-bottom: 30px;
        }
      h1{
            font-style: italic;
      }
      #log:hover{
        background-color: lightcoral;
      }
      .form {
            display: flex;
            flex-direction: column;
            justify-content: space-evenly;
            text-align: left;
            border-radius: 20px;
            padding: 20px;
            width: 300px;
            margin-top: 50px;
        }

        .content {
            margin-bottom: 10px;
            display: flex;
            align-items: center; 
        }

        .label {
            min-width: 80px; 
            font-weight: bold;
            color: black;
        }

        .user-input {
            color: rgba(14, 14, 51, 0.938);
            flex: 1;
            word-wrap: break-word;
        }
        #gjinia{
            display: flex;
        }
    </style>
</head>
<body>
 
    <div id="main" onclick="hyrja()">
        <h1>Welcome</h1>
            <label>Emri<br> <input type="text" name="emri" id="name"></label>
            <div class="error-message" id="nameError"></div>
            <br>
            <label>Mbiemri <br> <input type="text" name="mbiemri" id="mbiemri"></label>
            <br>
            <label>Email <br> <input type="text" name="emaili" id="email"></label>
            <div class="error-message" id="nameError"></div>
            <br>
            <label>Password <br> <input type="password" name="passwordi" id="passwordi"></label>
            <br>
            <label>Re-type Password <br><input type="password" name="passwordi" id="passwordi"></label>.
            <br>
            <label>Ditelindja <br> <input type="date" name="data" id="data"></label>
            <br>
            <label><input type="checkbox">I agree to the terms and conditions</label>
            <br>
            <label >M <input type="radio" name="gjinia" value="M"></label>
            <label>F <input type="radio" name="gjinia" value="F"></label>
            <br>
            
            <a href="login.php">
            <input onclick="validateForm()" id="log" type="submit" value="Regjistrohuni" >
            </a>

    </div>
   

    <script>
        
        confirm("Pranoni cookies");

        function shfaqMesazhin(){
            alert("Jeni regjistruar me sukses!");
        }


    </script>

</body>
</html>