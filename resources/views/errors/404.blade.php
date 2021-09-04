
<style>
body, html {
	 background: #000;
	 position: relative;
	 margin: 0;
	 width: 100%;
	 height: 100%;
}
 #main {
	 position: absolute;
	 top: 50%;
	 left: 50%;
	 transform: translate(-50%,-50%);
	 color: #fff;
	 font-family: sans-serif;
	 max-width: 340px;
	 -webkit-user-select: none;
	 -moz-user-select: none;
	 -o-user-select: none;
	 user-select: none;
}
 #main .message {
	 font-size: 16px;
	 text-align: center;
}
 #main .message h1 {
	 margin: 0;
	 padding: 0;
	 font-size: 11em;
	 transform: skewY(-5deg);
	 transition: 0.4s ease-in-out all;
}
 #main .message h1:hover {
	 text-shadow: 20px 20px 0 rgba(175,211,61,0.1);
}
 @media (max-width: 300px) {
	 #main .message h1 {
		 font-size: 50vw;
	}
}
 #main .message h3 {
	 color: #afd33d;
	 font-size: 0.9em;
	 font-weight: lighter;
	 line-height: 1;
}
 @media (max-width: 300px) {
	 #main .message h3 {
		 font-size: 5vw;
	}
}
 #main .footer-error {
	 display: flex;
	 flex-wrap: wrap;
	 align-items: center;
	 width: 100%;
}
 #main .footer-error a {
	 position: relative;
	 flex: 1;
	 color: rgba(255,255,255,0.6);
	 text-decoration: none;
	 border-radius: 3px;
	 border: 1px solid rgba(255,255,255,0.6);
	 margin: 0 20px;
	 text-align: center;
	 padding: 10px 0;
	 overflow: hidden;
	 transition: all 0.2s ease-in-out;
	 z-index: 3;
}
 @media (max-width: 300px) {
	 #main .footer-error a {
		 flex: 5 100%;
		 width: 100%;
	}
}
 #main .footer-error a:hover {
	 border: 1px solid #ffffff;
	 color: #121212;
}
 #main .footer-error a:hover span {
	 width: 310px;
	 height: 310px;
}
 #main .footer-error a span {
	 content: '';
	 position: absolute;
	 background: #fff;
	 top: 50%;
	 left: 50%;
	 transform: translate(-50%,-50%);
	 width: 0;
	 height: 0;
	 border-radius: 50%;
	 transition: all 0.5s ease;
	 z-index: -1;
}
 @media (max-width: 300px) {
	 #main .footer-error a span {
		 transition: all 0.2s ease-in;
	}
}
 #main .footer-error a span:active {
	 background: #c0dc67;
}
 
 
</style>
<div id="main">
  <div class="message">
    <h1>404</h1>
    <h3>¡La página que quieres ver no existe!</h3>
  </div>
  <div class="footer-error">
    <a href="" title="home">Regresar<span></span></a>
  </div>
</div>