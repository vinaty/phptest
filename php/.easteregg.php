<html>
<head>
<style>
/*le CSS est ici inclus dans le fichier afin que tout soit inclus dans le meme fichier*/
.gradient-background {
  background-color: #6E6E6E;
  bottom: 0;
  left: 0;
  position: absolute;
  right: 0;
  top: 0;
}

.turntable {
  position: absolute;
  margin: auto;
  top: 0;
  left: 0;
  bottom: 0;
  right: 0;
  width: 400px;
  height: 300px;
background: #cedce7; /* Old browsers */
background: -moz-linear-gradient(top, #cedce7 0%, #596a72 100%); /* FF3.6-15 */
background: -webkit-linear-gradient(top, #cedce7 0%,#596a72 100%); /* Chrome10-25,Safari5.1-6 */
background: linear-gradient(to bottom, #cedce7 0%,#596a72 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
  border-radius: 10%;
}

.disc {
  position: absolute;
  margin: auto;
  top: 0;
  left: 0;
  bottom: 0;
  right: 0;
  width: 230px;
  height: 230px;
  background: #2D3E4F;
  border-radius: 50%;
}
.disc::after {
  content: "";
  position: absolute;
  margin: auto;
  top: 0;
  left: 0;
  bottom: 0;
  right: 0;
  border-radius: 50%;
  width: 8px;
  height: 8px;
  background: #EBEBEB;
  border: solid 2px #DB3A3A;
}

.disc-reflection-left, .disc-reflection-right {
  width: 100%;
  height: 100%;
  border-radius: 50%;
  position: absolute;
  background-color: #36495d;
}
.disc-reflection-left {
  clip-path: polygon(50% 50%, 0 75%, 10% 100%);
}
.disc-reflection-right {
  clip-path: polygon(90% 0, 50% 50%, 100% 25%);
}

.disc-groove {
  position: absolute;
  margin: auto;
  top: 0;
  left: 0;
  bottom: 0;
  right: 0;
  border-radius: 50%;
  width: 200px;
  height:200px;
  border: solid 2px #2D3E4F;
}
.disc-groove:before, .disc-groove:after {
  position: absolute;
  margin: auto;
  top: 0;
  left: 0;
  bottom: 0;
  right: 0;
  border-radius: 50%;
  border: solid 2px #2D3E4F;
}
.disc-groove:before{
  content: "";
  width: 180px;
  height:180px;
}
.disc-groove:after {
  content: "";
  width: 160px;
  height:160px;
}

.label {
  position: absolute;
  margin: auto;
  top: 0;
  left: 0;
  bottom: 0;
  right: 0;
  border-radius: 50%;
  width: 80px;
  height: 80px;
  background: #FF0000;
}
.label::before,
.label::after {
  content: "";
  position: absolute;
  margin: auto;
  top: 0;
  left: 0;
  bottom: 0;
  right: 0;
  border-radius: 50%;
}
.label::before {
  width: 70px;
  height: 70px;
  background: #000000;
  border: solid 1px #FF4D80;
}
.label::after {
  width: 65px;
  height: 32.5px;
  bottom: 32.5px;
  background: #FF0000;
  border-radius: 32.5px 32.5px 0 0;
}

.disc-font {
  font-family: Roboto, Arial, Sans-serif; 
  font-size: 0.5em; 
  text-align: center; 
  z-index:10;
  position: absolute;
  color: #FFFFFF;
}
.disc-title {
  margin: 20px;
}
.disc-group {
  top: 50px;
  left: 10px;
  width:60px;
}

.buttons {
  position: absolute;
  margin: auto;
  top: 250px;
  left: 260px;
  bottom: 0;
  right: 0;
  width: 10px;
  height: 10px;
  background: #00FF00;
  border-radius: 50%;
}
.buttons:before,
.buttons:after {
  content: "";
  position: absolute;
  margin: auto;
  top: 0;
  bottom: 0;
  right: 0;
  width: 10px;
  height: 10px;
  border-radius: 50%;
}
.buttons:before {
  background: #FF0000;
  left: 20px;
}
.buttons:after {
  background: #0000FF;
  left: 40px;
}

.tone-arm {
  position: absolute;
  margin: auto;
  top: 0;
  left: 280px;
  bottom: 220px;
  right: 0;
  width: 20px;
  height: 40px;
  background: #000000;
  border-radius: 10%;
  transform: rotate(20deg);
}
.tone-arm:before,
.tone-arm:after {
  content: "";
  position: absolute;
  margin: auto;
  background: #534848;
}
.tone-arm:before {
  left: 0;
  right: 1px;
  top: 40px;
  width: 7px;
  height: 120px;
}
.tone-arm:after {
  left: -2px;
  right: 0;
  bottom: 0;
  top: 300px;
  width: 20px;
  height: 30px;
  border-radius: 20%;
}

.spin {
  animation: spin 4s linear infinite;
}
.oscillating {
  animation: oscillating 2s linear infinite;
}
@keyframes spin {
  from {
    transform: rotate(0deg);
  }
  to {
    transform: rotate(360deg);
  }
}

@keyframes oscillating {
  0% { transform: rotate(20deg); }
  30% { transform: rotate(20.5deg); }
  60% { transform: rotate(20deg); }
  90% { transform: rotate(20.5deg); }
  100% { transform: rotate(20deg); }
}
</style>
</head>
<body>
  <div class="gradient-background">
    
    <div class="turntable">
      <div class="disc spin">
        <div class="disc-reflection-left">
        </div>
        <div class="disc-reflection-right">
        </div>
        <div class="disc-groove">
        </div>
        <div class="label "> 
          <div class="disc-font disc-title">
            Valentin
          </div>
          <div class="disc-font disc-group">
             Dubrulle
          </div>
        </div>
      </div>

      <div class="buttons">
      </div>
      <div class="tone-arm oscillating">
      </div>
    </div>
  </div>
  <div id="cp_widget_aec3c613-540e-41ed-875f-7d803c77dfcc">...</div><script type="text/javascript">
var cpo = []; cpo["_object"] ="cp_widget_aec3c613-540e-41ed-875f-7d803c77dfcc"; cpo["_fid"] = "AYDAPb-5rR8Y";
var _cpmp = _cpmp || []; _cpmp.push(cpo);
(function() { var cp = document.createElement("script"); cp.type = "text/javascript";
cp.async = true; cp.src = "//www.cincopa.com/media-platform/runtime/libasync.js";
var c = document.getElementsByTagName("script")[0];
c.parentNode.insertBefore(cp, c); })(); </script>
</body>
</html>
