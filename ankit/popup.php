<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <style type="text/css">
.loader {
  border: 8px solid black;
  border-radius: 50%;
  border-top: 8px solid white;
  position: fixed;
  left: 0;
  top: 0;
  right:0;
  bottom:0; 
  z-index: 24000;
  display: none;
  margin: auto;
  width: 60px;
  height: 60px;
  
  -webkit-animation: spin 0.7s linear infinite; /* Safari */
  animation: spin 0.7s linear infinite;
}

/* Safari */
@-webkit-keyframes spin {
  0% { -webkit-transform: rotate(0deg); }
  100% { -webkit-transform: rotate(360deg); }
}

@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}
#live
{
    width:350px;
    background-color:white;
    color:#68cf38;
    padding: 40px;
    box-shadow: 0 0 10px black;
    font-size: 15px;
    border-radius:5px;
    position: fixed;
    z-index: 1000000000;
    top: 20px;
    font-size: 20px;
    display: none;
    left: 15%;
    transform: translateX(-50%);
    text-align: center;
}
    </style>

    <div class="loader"></div>
     <div id="live"></div>